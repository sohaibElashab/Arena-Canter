@extends('layout.admin')
@section('main')
@if(Auth::guard('admin')->user()->type == 'food')
<div id="layoutSidenav_content">
    <div class="tab-pane text-center gallery">
        <div class="row">
        @foreach($food as $item)
            <div class="prod m-auto p-2">
                <div class="card card-body">
                    <div class="p-2">
                            <div class="productImage clearfix" >
                                <img src="/images/imagesFOOD/{{$item->pic($item->product_id)}}" id="product_img">
                            </div>
                        <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"> <a href="{{ route('food.show',$item->product_id)}}" class="text-dark d-inline-block align-middle">{{$item->name($item->product_id)}}</a></h5>
                            <span class="mb-0" class="text-dark d-inline-block align-middle"> Quantite : {{$item->qty}}</span>
                        </div>
                    </div>
                </div>
            </div> 
        @endforeach           
        </div>
    </div>
</div>
@endif

@if(Auth::guard('admin')->user()->type == 'ent')
<div id="layoutSidenav_content">
    <div class="tab-pane text-center gallery">
        <div class="row">
        @foreach($ent as $item)
            <div class="prod m-auto p-2">
                <div class="card card-body">
                    <div class="p-2">
                            <div class="productImage clearfix" >
                                <img src="/images/imgENT/{{$item->pic($item->product_id)}}" id="product_img">
                            </div>
                        <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"> <a href="{{ route('ent.show',$item->product_id)}}" class="text-dark d-inline-block align-middle">{{$item->name($item->product_id)}}</a></h5>
                            <span class="mb-0" class="text-dark d-inline-block align-middle"> Quantite : {{$item->qty}}</span>
                        </div>
                    </div>
                </div>
            </div> 
        @endforeach           
        </div>
    </div>
</div>
@endif
@if(Auth::guard('admin')->user()->type == 'shopping')
<div id="layoutSidenav_content">
    <div class="tab-pane text-center gallery">
        <div class="row">
        @foreach($shop as $item)
            <div class="prod m-auto p-2">
                <div class="card card-body">
                    <div class="p-2">
                            <div class="productImage clearfix" >
                                <img src="/images/imgSHOPPING/products/{{$item->pic($item->product_id)}}" id="product_img">
                            </div>
                        <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"> <a href="{{ route('shopping.show',$item->product_id)}}" class="text-dark d-inline-block align-middle">{{$item->name($item->product_id)}}</a></h5>
                            <span class="mb-0" class="text-dark d-inline-block align-middle"> Quantite : {{$item->qty}}</span>
                        </div>
                    </div>
                </div>
            </div> 
        @endforeach           
        </div>
    </div>
</div>
@endif
@endsection('main')