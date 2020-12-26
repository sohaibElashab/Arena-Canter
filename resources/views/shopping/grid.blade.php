@extends('layout.shopping')

@section('main')
      <!-- LIGHT SECTION -->
      <section class="lightSection clearfix pageHeader">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="page-title">
                <h2>{{request()->query('categorie')}}</h2>
              </div>
            </div>
            <div class="col-md-6">
              <ol class="breadcrumb pull-right">
                <li>
                  <a href="/">Home</a>
                </li>
                <li>
                  <a href="{{ route('shopping.index')}}">shop</a>
                </li>
                <li class="active">{{request()->query('categorie')}}</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix productsContent">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-4 sideBar">
              <div class="panel panel-default">
                <div class="panel-heading">Product categories</div>
                <div class="panel-body">
                  <div class="collapse navbar-collapse navbar-ex1-collapse navbar-side-collapse">
                  <ul class="nav navbar-nav side-nav">
                      <li>
                        <a href="javascript:;" data-toggle="collapse" aria-expanded="true" data-target="#women">Women <i class="fa fa-plus"></i></a>
                        <ul id="women" class="collapse collapseItem show">
                          <li><a href="{{ route('shopping.filter',['sexe' => 'women' , 'categorie' => 'Accessories'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Accessories</a></li>
                          <li><a href="{{ route('shopping.filter',['sexe' => 'women' , 'categorie' => 'Bag'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Bag</a></li>
                          <li><a href="{{ route('shopping.filter',['sexe' => 'women' , 'categorie' => 'Cloths'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Cloths</a></li>
                          <li><a href="{{ route('shopping.filter',['sexe' => 'women' , 'categorie' => 'Bed'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Bed &amp; Bath</a></li>
                          <li><a href="{{ route('shopping.filter',['sexe' => 'women' , 'categorie' => 'Swimming'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Swimming costume</a></li>
                          <li><a href="{{ route('shopping.filter',['sexe' => 'women' , 'categorie' => 'Sport'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Sport Tops</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:;" data-toggle="collapse" aria-expanded="false" data-target="#men">Men <i class="fa fa-plus"></i></a>
                        <ul id="men" class="collapse collapseItem">
                          <li><a href="{{ route('shopping.filter',['sexe' => 'men' , 'categorie' => 'Accessories'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Accessories</a></li>
                          <li><a href="{{ route('shopping.filter',['sexe' => 'men' , 'categorie' => 'Bag'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Bag</a></li>
                          <li><a href="{{ route('shopping.filter',['sexe' => 'men' , 'categorie' => 'Cloths'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Cloths</a></li>
                          <li><a href="{{ route('shopping.filter',['sexe' => 'men' , 'categorie' => 'Bed'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Bed &amp; Bath</a></li>
                          <li><a href="{{ route('shopping.filter',['sexe' => 'men' , 'categorie' => 'Swimming'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Swimming costume</a></li>
                          <li><a href="{{ route('shopping.filter',['sexe' => 'men' , 'categorie' => 'Sport'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Sport Tops</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:;" data-toggle="collapse" aria-expanded="false" data-target="#kids">Kids <i class="fa fa-plus"></i></a>
                        <ul id="kids" class="collapse collapseItem">
                          <li><a href="{{ route('shopping.filter',['sexe' => 'kids' , 'categorie' => 'Accessories'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Accessories</a></li>
                          <li><a href="{{ route('shopping.filter',['sexe' => 'kids' , 'categorie' => 'Bag'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Bag</a></li>
                          <li><a href="{{ route('shopping.filter',['sexe' => 'kids' , 'categorie' => 'Cloths'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Cloths</a></li>
                          <li><a href="{{ route('shopping.filter',['sexe' => 'kids' , 'categorie' => 'Bed'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Bed &amp; Bath</a></li>
                          <li><a href="{{ route('shopping.filter',['sexe' => 'kids' , 'categorie' => 'Swimming'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Swimming costume</a></li>
                          <li><a href="{{ route('shopping.filter',['sexe' => 'kids' , 'categorie' => 'Sport'])}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Sport Tops</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="panel panel-default priceRange">
                <div class="panel-heading">Filter by Price</div>
                <form action="{{ route('shopping.filter') }}" method="get" id="myForm">
                @csrf
                  <div class="panel-body clearfix">
                    <div class="price-slider-inner">
                      <span class="amount-wrapper">
                        Price:
                    
                        <input type="text" id="price-amount-1" name="price1" readonly />
                        <strong>-</strong>
                        <input type="text" id="price-amount-2" name="price2" readonly />
                      </span>
                      <div id="price-range"></div>
                    </div>
                    <input class="btn-default" type="submit" value="Filter" />
                </div>
              </div>
              <div class="panel panel-default filterNormal">
                <div class="panel-heading">filter by Color</div>
                <div class="panel-body">
                  <ul class="list-unstyled">
                    <li>
                    <input id="black" type="radio" name="color" value="Black" style="display:none;" >  
                    <label for="black">Black</label>
                    </li>
                    <li>
                    <input id="White" type="radio" name="color" value="White" style="display:none;">  
                    <label for="White">White</label>
                    </li>
                    <li>
                      <input id="Red" type="radio" name="color" value="Red" style="display:none;">  
                      <label for="Red">Red</label>
                    </li>
                    <li>
                      <input id="Blue" type="radio" name="color" value="Blue" style="display:none;">  
                      <label for="Blue">Blue</label>
                    </li>
                    <li>
                      <input id="Orange" type="radio" name="color" value="Orange" style="display:none;">  
                      <label for="Orange">Orange</label>
                    </li>
                  </ul>
                  <input class="btn-default submit_btn_filter" type="submit" value="Filter" />
                </div>
              </div>
              <div class="panel panel-default filterNormal">
                <div class="panel-heading">filter by Size</div>
                <div class="panel-body">
                  <ul class="list-unstyled clearfix">
                    <li>
                      <input id="Small" type="radio" name="size" value="Small" style="display:none;">  
                      <label for="Small">Small</label>
                    </li>
                    <li>
                      <input id="Medium" type="radio" name="size" value="Medium" style="display:none;">  
                      <label for="Medium">Medium</label>
                    </li>
                    <li>
                      <input id="Large" type="radio" name="size" value="Large" style="display:none;">  
                      <label for="Large">Large</label>
                    </li>
                    <li>
                      <input class="btn-default submit_btn_filter" type="submit" value="Filter" />
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            </form>
            <div class="col-lg-9 col-md-8">
              <div class="row filterArea">
                <div class="col-6">
                </div>
                <div class="col-6">
                  <div class="btn-group float-right" role="group">
                  <input type="radio" name="type" id="grid_btn" style="display:none;">
                  <label for="grid_btn" class="btn btn-default" id="lab_grid"><i class="fa fa-th" aria-hidden="true"></i><span>Grid</span></label>

                  <input type="radio" name="type" id="list_btn" style="display:none;">
                  <label for="list_btn" class="btn btn-default" id="lab_list"><i class="fa fa-th-list" aria-hidden="true"></i><span>List</span></label>


                  </div>
                </div>
              </div>
              <!-- grid -->
              <div class="row" id="product_grid">
                @foreach($products as $product)

                <div class="col-md-6 col-lg-4">
                  <div class="productBox">
                    <div class="productImage clearfix">
                      <img src="/images/imgSHOPPING/products/{{$product->pic1}}" alt="products-img"/>
                      <div class="productMasking">
                        <ul class="list-inline btn-group" role="group">
                          <li>
                            <form action="{{ route('wishlist.store')}}" method="post" id="form_store">
                              @csrf
                              @if(Auth::check()) 
                              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                              @endif
                              <input type="hidden" name="product_id" value="{{ $product->id }}">
                              <button type="submit" class="btn btn-wishlist" style="background:transparent;"><i class="fa fa-heart-o" style="color:black;"></i></button>
                            </form>
                          </li>
                          <li>
                            <a class="btn btn-default" href="{{ route('shopping.show',$product->id)}}"><i class="fa fa-eye"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="productCaption clearfix">
                      <a href="{{ route('shopping.show',$product->id)}}">
                        <h5>{{$product->name}}</h5>
                      </a>
                      <h3>${{$product->price}}</h3>
                    </div>
                  </div>
                </div>
                
          
                @endforeach
              </div>
              <!-- end grid -->
              <!-- list -->
              <div class="row productListSingle" id="product_list">
              @foreach($products as $product)
                <div class="col-sm-12 ">
                  <div class="media flex-wrap productBox">
                    <div class="media-left">
                      <div class="productImage clearfix">
                        <img src="/images/imgSHOPPING/products/{{$product->pic1}}" alt="products-img">
                      </div>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="{{ route('shopping.show',$product->id)}}">{{$product->name}}</a></h4>
                      <p>{{$product->description}}</p>
                      <h3>${{$product->price}}</h3>
                      <div class="productMasking">
                        <ul class="list-inline btn-group" role="group">
                        <form action="{{ route('wishlist.store')}}" method="post" id="form_store">
                              @csrf
                              @if(Auth::check())
                              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                              @endif
                              <input type="hidden" name="product_id" value="{{ $product->id }}">
                              <button type="submit" class="btn btn-default btn-wishlist"><i class="fa fa-heart" ></i></button>
                            </form>
                          <li>
                            <a class="btn btn-default" href="{{ route('shopping.show',$product->id)}}"><i class="fa fa-eye"></i></a>
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
              </div>
              <!-- end list -->
            </div>
          </div>
        </div>
      </section>
      <script src="{{asset('assets/assetsCENTER/vendor/jquery/jquery.min.js')}}"></script>
      <script>
      $(document).ready(function () {
        $("#myForm").on('submit',function(e) {
          e.preventDefault();
          var formData=$(this).serialize();
          var fullUrl=window.location.href;
          var finalForm = fullUrl + "&" + formData;
          window.location.href = finalForm;
        });
        $('#product_list').hide();
        $('#lab_grid').addClass('active');

        $('#list_btn').on('change',function () {
          if($(this).is(':checked'))
          {
            $('#lab_grid').removeClass('active');
            $('#lab_list').addClass('active');
            $('#product_grid').hide();
            $('#product_list').show();
          }
        });

        $('#grid_btn').on('click',function () {
          if($(this).is(':checked'))
          {
            $('#lab_list').removeClass('active');
            $('#lab_grid').addClass('active');
            $('#product_grid').show();
            $('#product_list').hide();
          }
        });

      });
      </script>
@endsection('main')