@extends('layout.admin')
@section('main')
@if(Auth::guard('admin')->user()->type == 'food')
<div id="layoutSidenav_content">
    <div id="categorie">
    <form action="{{ route('admin.foodFilter') }}" method="get" id='foodFilter'>
        @csrf
        <label for="categorie">Categorie : </label>
        <select name="categorie" id="cat">
            <option value=""></option>
            @foreach($categories as $categorie)
            <option value="{{$categorie->categorie}}">{{$categorie->categorie}}</option>
            @endforeach
        </select>
      </form>
    </div>
    <a href="{{ route('admin.create') }}" id="Addproduit">Add</a>
    <div class="row productListSingle" id="product_list">
        @foreach($products as $product)
                <div class="col-sm-12 ">
                  <div class="media flex-wrap productBox">
                    <div class="media-left" >
                      <div class="productImage clearfix" >
                        <img src="../images/imagesFOOD/{{$product->picture}}" id="product_img">
                      </div>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="{{ route('food.show',$product->id)}}" target="_blank">{{$product->name}}</a></h4>
                      <p>{{$product->taille}}</p>
                      <h3>${{$product->price}}</h3>
                      <div class="productMasking">
                        <ul class="list-inline btn-group" role="group">
                        <li>
                            <a href="{{ route('admin.edit',$product->id) }}" class="btn btn-default btn-wishlist"><i class="fa fa-pen" ></i></a>
                        </li>
                        <li>
                        <form action="{{ route('food.destroy',$product->id) }}" method="POST" class="inline-flex ml-1">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-default" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                        </li>
                        </ul>
                      </div>
                    </div>
                  </div> 
                </div>
        @endforeach
    </div>      
</div>
@endif
@if(Auth::guard('admin')->user()->type == 'ent')
<div id="layoutSidenav_content">
    <div id="categorie">
    <form action="{{ route('admin.entFilter') }}" method="get" id='foodFilter'>
        @csrf
        <label for="categorie">Categorie : </label>
        <select name="categorie" id="cat">
            <option value=""></option>
            @foreach($entcategories as $categorie)
            <option value="{{$categorie->categorie}}">{{$categorie->categorie}}</option>
            @endforeach
        </select>
      </form>
    </div>
    <a href="{{ route('admin.create') }}" id="Addproduit">Add</a>
    <div class="row productListSingle" id="product_list">
        @foreach($ents as $product)
                <div class="col-sm-12 ">
                  <div class="media flex-wrap productBox">
                    <div class="media-left" >
                      <div class="productImage clearfix" >
                        <img src="../images/imgENT/{{$product->picture}}" id="product_img">
                      </div>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="{{ route('ent.show',$product->id)}}" target="_blank">{{$product->name}}</a></h4>
                      <p>{{$product->categorie}}</p>
                      <h3>${{$product->price}}</h3>
                      <div class="productMasking">
                        <ul class="list-inline btn-group" role="group">
                        <li>
                            <a href="{{ route('admin.edit',$product->id) }}" class="btn btn-default btn-wishlist"><i class="fa fa-pen" ></i></a>
                        </li>
                        <li>
                        @if($product->categorie != 'activity')
                        <form action="{{ route('ent.destroy',$product->id) }}" method="POST" class="inline-flex ml-1">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-default" type="submit" ><i class="fa fa-trash"></i></button>
                        </form>
                        @endif
                        </li>
                        </ul>
                      </div>
                    </div>
                  </div> 
                </div>
        @endforeach
    </div>      
</div>
@endif
@if(Auth::guard('admin')->user()->type == 'shopping')
<div id="layoutSidenav_content">
    <div id="categorie">
    <form action="{{ route('admin.shopFilter') }}" method="get" id='foodFilter'>
        @csrf
        <label for="categorie">Categorie : </label>
        <select name="categorie" id="cat">
            <option value=""></option>
            @foreach($shopcategories as $categorie)
            <option value="{{$categorie->categorie}}">{{$categorie->categorie}}</option>
            @endforeach
        </select>
      </form>
    </div>
    <a href="{{ route('admin.create') }}" id="Addproduit">Add</a>
    <div class="row productListSingle" id="product_list">
        @foreach($shops as $product)
                <div class="col-sm-12 ">
                  <div class="media flex-wrap productBox">
                    <div class="media-left" >
                      <div class="productImage clearfix" >
                        <img src="/images/imgSHOPPING/products/{{$product->pic1}}" id="product_img">
                      </div>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="{{ route('shopping.show',$product->id)}}" target="_blank">{{$product->name}}</a></h4>
                      <p>{{$product->sexe}} / {{$product->categorie}} / {{$product->taille}} / {{$product->couleur}}</p>
                      <h3>${{$product->price}}</h3>
                      <div class="productMasking">
                        <ul class="list-inline btn-group" role="group">
                        <li>
                            <a href="{{ route('admin.edit',$product->id) }}" class="btn btn-default btn-wishlist"><i class="fa fa-pen" ></i></a>
                        </li>
                        <li>
                        @if($product->categorie != 'activity')
                        <form action="{{ route('shopping.destroy',$product->id) }}" method="POST" class="inline-flex ml-1">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-default" type="submit" ><i class="fa fa-trash"></i></button>
                        </form>
                        @endif
                        </li>
                        </ul>
                      </div>
                    </div>
                  </div> 
                </div>
        @endforeach
    </div>      
</div>
@endif
@endsection('main')

@section('script')
<script>
$(document).ready(function () {
  $('#cat').change(function () {
    $('#foodFilter').submit();
  });
});
</script>
@endsection('script')