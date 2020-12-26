@extends('layout.center')

@section('header')
@php
$cart=1; 
@endphp
@include('layout.header',['cart' => $cart])
@endsection('header')

@section('main')
<main class="cart-shop">
    <div class="px-4 px-lg-0">
        <div class="pb-5">
          <div class="container">
            <h3>Shopping cart</h3>
            <div class="row">
              <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
      
                <!-- Shopping cart table -->
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" class="border-0 bg-light">
                          <div class="p-2 px-3 text-uppercase">Product</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase">Price</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase">Quantity</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase">Remove</div>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach(Cart::content() as $item)
                    @if($item->options->type == 'shopping')
                      <tr>
                        <th scope="row" class="border-0"> 
                          <div class="p-2">
                            <img src="/images/imgSHOPPING/products/{{$item->PictureShopping($item->id)}}" alt="" width="70" class="img-fluid rounded shadow-sm">
                            <div class="ml-3 d-inline-block align-middle">
                              <h5 class="mb-0"> <a href="{{ route('shopping.show',$item->id)}}" class="text-dark d-inline-block align-middle">{{$item->name}} </a></h5>
                              <span class="text-muted font-weight-normal font-italic d-block">Category : {{$item->CategorieShopping($item->id)}}</span>
                              <span class="text-muted font-weight-normal font-italic d-block">Taille : {{$item->options->taille}}</span>
                            </div>
                          </div>
                        </th>
                        <td class="border-0 align-middle"><strong>${{$item->price}}</strong></td>
                        <td class="border-0 align-middle"><strong>{{$item->qty}}</strong></td>
                        <td class="border-0 align-middle">
                        <form action="{{route('cart.destroy',$item->rowId)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-dark" style="background:white; border:none; outline:none;"><i class="fa fa-trash"></i></button>
                        </form>
                        </td>
                      </tr>
                    @endif
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- End -->
              </div>
            </div>
            <h3>Food cart</h3>
            <div class="row">
              <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
      
                <!-- Shopping cart table -->
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" class="border-0 bg-light">
                          <div class="p-2 px-3 text-uppercase">Product</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase">Price</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase">Quantity</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase">Remove</div>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach(Cart::content() as $item)
                    @if($item->options->type == 'food')
                      <tr>
                        <th scope="row" class="border-0">
                          <div class="p-2">
                            <img src="../images/imagesFOOD/{{$item->PictureFood($item->id)}}" alt="" width="70" class="img-fluid rounded shadow-sm">
                            <div class="ml-3 d-inline-block align-middle">
                              <h5 class="mb-0"> <a href="{{ route('food.show',$item->id)}}" class="text-dark d-inline-block align-middle">{{$item->name}} </a></h5>
                              <span class="text-muted font-weight-normal font-italic d-block">Category : {{$item->CategorieFood($item->id)}}</span>
                              <span class="text-muted font-weight-normal font-italic d-block">Taille : {{$item->options->taille}}</span>
                            </div>
                          </div>
                        </th>
                        <td class="border-0 align-middle"><strong>${{$item->price}}</strong></td>
                        <td class="border-0 align-middle"><strong>{{$item->qty}}</strong></td>
                        <td class="border-0 align-middle">
                        <form action="{{route('cart.destroy',$item->rowId)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-dark" style="background:white; border:none; outline:none;"><i class="fa fa-trash"></i></button>
                        </form>
                        </td>
                      </tr>
                    @endif
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- End -->
              </div>
            </div>
            <h3>Entertainment cart</h3>
            <div class="row">
              <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
      
                <!-- Shopping cart table -->
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" class="border-0 bg-light">
                          <div class="p-2 px-3 text-uppercase">Product</div>
                        </th> 
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase">Price</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase">Quantity</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase">Remove</div>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach(Cart::content() as $item)
                    @if($item->options->type == 'ent')
                      <tr>
                        <th scope="row" class="border-0">
                          <div class="p-2">
                            <img src="../images/imgENT/{{$item->PictureEnt($item->id)}}" alt="" width="70" class="img-fluid rounded shadow-sm">
                            <div class="ml-3 d-inline-block align-middle">
                              <h5 class="mb-0"> <a href="{{ route('ent.show',$item->id)}}" class="text-dark d-inline-block align-middle">{{$item->name}} </a></h5>
                              <span class="text-muted font-weight-normal font-italic d-block">Category : {{$item->options->taille}}</span>
                            </div>
                          </div>
                        </th>
                        <td class="border-0 align-middle"><strong>${{$item->price}}</strong></td>
                        <td class="border-0 align-middle"><strong>{{$item->qty}}</strong></td>
                        <td class="border-0 align-middle">
                        <form action="{{route('cart.destroy',$item->rowId)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-dark" style="background:white; border:none; outline:none;"><i class="fa fa-trash"></i></button>
                        </form>
                        </td>
                      </tr>
                    @endif
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- End -->
              </div>
            </div>
      
            <div class="row py-5 p-4 bg-white rounded shadow-sm">
              <div class="col-lg-6">
                <div class="img-shop"></div>
            </div>
              <div class="col-lg-6">
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                <div class="p-4">
                  <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
                  <ul class="list-unstyled mb-4">
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Subtotal </strong><strong>${{Cart::subtotal()}}</strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>${{Cart::tax()}}</strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Delivery</strong><strong>$0.00</strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                      <h5 class="font-weight-bold">${{Cart::total()}}</h5>
                    </li>
                  </ul><a href="/step1" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
                </div>
              </div>
            </div>
      
          </div>
        </div>
      </div>
    </main>
@endsection('main')