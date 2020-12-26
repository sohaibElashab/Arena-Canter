<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\User;
use App\orderent;
use App\orderfood;
use App\ordershopping;
use App\orderProductShopping;
use App\orderProductFood;
use App\orderProductEnt;
use Auth;
use PayPal\Api\Item;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use PayPal\Api\ItemList;
use PayPal\Api\WebProfile;
use PayPal\Api\InputFields;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use URL;
use Redirect;
use Session;
use App\shopping;
use App\ent;
use App\food;

class CheckoutController extends Controller
{
    public function step1()
    {
        if(Cart::count() > 0)
        {
            return view('checkout.step1');
        }
        else
        {
            return back();
        }
    }

    public function UpdateUser(Request $request)
    {
        $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'adress'=> 'required', 
            'phone'=> 'required|numeric|digits:10',
            'zip_code'=> 'required|numeric|digits:4',
            'fax'=> 'required|numeric|digits:10',
            'email'=> 'required|email'
        ]);
        
        $id = Auth::user()->id;
        $shop = User::findOrFail($id);

        
        $shop->update([
            'first_name'       => $request->first_name,
            'last_name'       => $request->last_name,
            'adress'       => $request->adress,
            'phone'       => $request->phone,
            'zip_code'       => $request->zip_code,
            'fax'       => $request->fax,
            'company'       => $request->company,
            'email'       => $request->email
        ]);

        return redirect()->route('checkout.step2');
    }

    public function step2()
    {
        if(Cart::count() > 0)
        {
            return view('checkout.step2');
        }
        else
        {
            return back();
        }
        
    }


    public function create_payment()
    {
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AXChwWSJyR_zkFCvFGZlQeAGyrXp1haWWNcA8_ycIUjRNrEEfbHqrhy35A9WASnXiUHI4LTqFIJ2As4M',     // ClientID
                'EGptyLi-HyYd161-bx8HLiqHQZY78SUu9sFh1i-mtzYS_NMFn6gvYSoVv5Sklu8YSoofqO2WFkelQsST'      // ClientSecret
            )
        );
    
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");
            
            $cart_content=[];
            foreach (Cart::content() as $it) {
               $item = new Item();
               $item->setName($it->name)
               ->setCurrency('USD')
               ->setQuantity($it->qty)
               ->setPrice($it->price);
               $cart_content[]=$item;
            }

            
            $cart_tax = Cart::tax();
            $cart_sub = Cart::subtotal();
            $cart_total = Cart::total();
    
        $itemList = new ItemList();
        $itemList->setItems($cart_content);
    
        $details = new Details();
        $details->setShipping(0)
            ->setTax($cart_tax)
            ->setSubtotal($cart_sub);
    
        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal($cart_total)
            ->setDetails($details);
    
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());
    
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(URL::to('thanks'))
            ->setCancelUrl(URL::to('step2'));
    
        // Add NO SHIPPING OPTION
        $inputFields = new InputFields();
        $inputFields->setNoShipping(1);
    
        $webProfile = new WebProfile();
        $webProfile->setName('test' . uniqid())->setInputFields($inputFields);
    
        $webProfileId = $webProfile->create($apiContext)->getId();
    
        $payment = new Payment();
        $payment->setExperienceProfileId($webProfileId); // no shipping
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));
    
        try {
            $payment->create($apiContext);
        } catch (Exception $ex) {
            echo $ex;
            exit(1);
        }
        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());
        if (isset($redirect_url)) {
            /** redirect to paypal **/
            return Redirect::away($redirect_url);
        }
        \Session::put('error', 'Unknown error occurred');
        return Redirect::to('/');
    }

    public function thanks(Request $request)
    {
        if(!$request->input('paymentId'))
        {
            return redirect()->route('checkout.step2');
        }
        else{  
            $orderShopping = ordershopping::create([
                'user_id' => Auth::user()->id,
                'total'=> Cart::total(),
                'state'=>'pending',
            ]);
            
            $orderFood = orderfood::create([
                'user_id' => Auth::user()->id,
                'total'=> Cart::total(),
                'state'=>'pending',
            ]);
            
            $orderEnt = orderent::create([
                'user_id' => Auth::user()->id,
                'total'=> Cart::total(),
                'state'=>'pending',
            ]);

            foreach (Cart::content() as $item) {
                if ($item->options->type == 'shopping') {
                    orderProductShopping::create([
                    'order_id' => $orderShopping->id,
                    'product_id' => $item->id,
                    'qty' => $item->qty,
                    'type' => $item->options->type
                ]);
                $shop = shopping::findOrFail($item->id);
                $newQTY = $shop->quantite - $item->qty;
                $shop->quantite = $newQTY;
                $shop->save();
                }
               
                if ($item->options->type == 'food') {
                    orderProductFood::create([
                    'order_id' => $orderFood->id,
                    'product_id' => $item->id,
                    'qty' => $item->qty,
                    'type' => $item->options->type
                ]);
                }
               
                if ($item->options->type == 'ent') {
                    orderProductEnt::create([
                    'order_id' => $orderEnt->id,
                    'product_id' => $item->id,
                    'qty' => $item->qty,
                    'type' => $item->options->type
                ]);
                $ent = ent::findOrFail($item->id);
                $newQTY = $ent->places - $item->qty;
                $ent->places = $newQTY;
                $ent->save();
                }

                
            }
            Cart::destroy();
            return view('checkout.thanks');
        }
    }
}
