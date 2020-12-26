@extends('layout.shopping')

@section('main')
    <!-- LIGHT SECTION -->
    <section class="lightSection clearfix pageHeader">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="page-title">
              <h2>Single Product</h2>
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
              <li>
                <a href="/shopping/grid">{{$product->categorie}}</a>
              </li>
              <li class="active">Single Product</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- MAIN CONTENT SECTION -->
    <section class="mainContent clearfix">
      <div class="container">
        <div class="row singleProduct">
          <div class="col-md-12">
            <div class="media flex-wrap">
              <div class="media-left productSlider">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item AffImgProduct active" data-thumb="0">
                      <img
                        src="/images/imgSHOPPING/products/{{$product->pic1}}"
                      />
                    </div>
                    <div class="carousel-item AffImgProduct" data-thumb="1">
                      <img
                        src="/images/imgSHOPPING/products/{{$product->pic2}}"
                      />
                    </div>
                    <div class="carousel-item AffImgProduct" data-thumb="2">
                      <img
                        src="/images/imgSHOPPING/products/{{$product->pic3}}"
                      />
                    </div>
                    <div class="carousel-item AffImgProduct" data-thumb="3">
                      <img
                        src="/images/imgSHOPPING/products/{{$product->pic4}}"
                      />
                    </div>
                  </div>
                </div>
                <div class="clearfix">
                  <div
                    id="thumbcarousel"
                    class="carousel slide"
                    data-interval="false"
                  >
                    <div class="carousel-inner">
                      <div
                        data-target="#carousel"
                        data-slide-to="0"
                        class="thumb"
                      >
                        <img
                          src="/images/imgSHOPPING/products/{{$product->pic1}}"
                        />
                      </div>
                      <div
                        data-target="#carousel"
                        data-slide-to="1"
                        class="thumb"
                      >
                        <img
                          src="/images/imgSHOPPING/products/{{$product->pic2}}"
                        />
                      </div>
                      <div
                        data-target="#carousel"
                        data-slide-to="2"
                        class="thumb"
                      >
                        <img
                          src="/images/imgSHOPPING/products/{{$product->pic3}}"
                        />
                      </div>
                      <div
                        data-target="#carousel"
                        data-slide-to="3"
                        class="thumb"
                      >
                        <img
                          src="/images/imgSHOPPING/products/{{$product->pic4}}"
                        />
                      </div>
                    </div>
                    <a
                      class="left carousel-control"
                      href="#thumbcarousel"
                      role="button"
                      data-slide="prev"
                    >
                      <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a
                      class="right carousel-control"
                      href="#thumbcarousel"
                      role="button"
                      data-slide="next"
                    >
                      <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="media-body">
                <ul class="list-inline">
                  <li>
                    <a href="{{ route('shopping.index')}}"
                      ><i class="fa fa-reply" aria-hidden="true"></i>Continue
                      Shopping</a
                    >
                  </li>
                </ul>
                <h2>{{$product->name}} ({{$product->couleur}})</h2>
                <h3>${{$product->price}}</h3>
                <p>
                Taille : {{$product->taille}} <br>
                {{$product->description}}
                </p>
                <span class="quick-drop">
                    <form action="{{ route('shopping.tailleFilter') }}" method="get" id="filter_taille">
                      @csrf
                      <input type="hidden" name="name" value="{{$product->name}}">
                      <input type="hidden" name="couleur" value="{{$product->couleur}}">
                        <select name="taille" id="guiest_id3" class="cat" style="width: 97px!important;color: #797979!important;font-family: oxygen,sans-serif; font-size: 15px; text-indent: 18px; height: 39px!important; transition: all .3s ease;">
                        <option value="">Taille</option>
                        @foreach($sizes as $size) 
                        <option value="{{$size->taille}}">{{$size->taille}}</option> 
                        @endforeach  
                        </select>
                    </form>
                </span>
                <form action="{{ route('cart.store') }}" method="post">
        
                <span class="quick-drop resizeWidth">
                  <select name="qty" id="guiest_id4" class="select-drop">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select> 
                </span>   
                          
                  @csrf
                  <input type="hidden" name="id" value="{{$product->id}}">
                  <input type="hidden" name="name" value="{{$product->name}}">
                  <input type="hidden" name="price" value="{{$product->price}}">
                  <input type="hidden" name="taille" value="{{$product->taille}}">
                  <input type="hidden" name="type" value="shopping">
                  <div class="btn-area">  
                    <button type="submit" class="btn btn-primary btn-default">
                    Add to cart
                    <i class="fa fa-angle-right" aria-hidden="true"></i></button><br>
                    <span style="font-size:15px ; color:red; margin:5px">{{session('unavailable')}}</span>
                  </div>
                </form>
                <div class="tabArea">
                  <ul class="nav nav-tabs bar-tabs">
                    <li class="nav-item">
                      <a
                        class="nav-link active"
                        data-toggle="tab"
                        href="#details"
                        >delivery</a
                      >
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div id="details" class="tab-pane fade show active">
                      <p>
                        LContrary to popular belief, Lorem Ipsum is not simply
                        random text. It has roots in a piece of classical Latin
                        liter ature from 45 BC, making it over 2000 years old.
                        Richard McClintock, a Latin professor at Hampden-Sydney
                        College in Virginia.
                      </p>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-header">
          <h4>Related Products</h4>
        </div>
        <div class="row productsContent">
        @foreach($others as $other)
          <div class="col-md-3 col-12 ">
            <div class="productBox">
              <div class="productImage clearfix">
                <img src="/images/imgSHOPPING/products/{{$other->pic1}}" alt="products-img" />
                <div class="productMasking">
                  <ul class="list-inline btn-group" role="group">
                    <li>
                      <a
                        data-toggle="modal"
                        href=".html"
                        class="btn btn-default"
                        ><i class="fa fa-heart-o"></i
                      ></a>
                    </li>
                    <li>
                      <a class="btn btn-default" href="{{ route('shopping.show',$other->id)}}"
                        ><i class="fa fa-eye"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="productCaption clearfix">
                <h5>{{$other->name}}</h5>
                <h3>${{$other->price}}</h3>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </section>
    <script src="{{asset('assets/assetsCENTER/vendor/jquery/jquery.min.js')}}"></script>
    <script>
    $(document).ready(function () {
      $(".cat").on('change',function () {
        $('#filter_taille').submit();
      });
    });
    </script>
@endsection('main')