@extends('layout.ent')

@section('main')
		<!--=========================-->
		<!--=        Breadcrumb         =-->
		<!--=========================-->

		<div class="page-header">
			<div class="container">
				<div class="row">
					<div class="col-12 page-title-inner">

						<h1 class="page-title">
							PRICING TABLE
						</h1>
						<div class="page-bradcrumb">
							<ul>
								<li><a href="/ent">home</a> | </li>
								<li>pricing table page</li>
							</ul>
						</div>

					</div>
					<!-- /.col-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
			<div class="line-bg"></div>
		</div>
		<!-- /.page-header -->

		<!--=========================-->
		<!--=     Pricing Table   =-->
		<!--=========================-->

		<section class="pricing-table">
			<div class="aos-all">
				<div class="shape shape-triple aos-item" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease-in-sine">
					<ul>
						<li>
							<img src="media/images/blog-bg-pattern/hexagon.svg" class="svg" alt="">
						</li>
						<li>
							<img src="media/images/blog-bg-pattern/hexagon.svg" class="svg" alt="">
						</li>
						<li>
							<img src="media/images/blog-bg-pattern/hexagon.svg" class="svg" alt="">
						</li>
					</ul>
				</div>
				<div class="shape shape-double aos-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
					<ul>
						<li>
							<img src="media/images/blog-bg-pattern/hexagon.svg" class="svg" alt="">
						</li>
						<li>
							<img src="media/images/blog-bg-pattern/hexagon.svg" class="svg" alt="">
						</li>
					</ul>
				</div>
			</div>
			<div class="container">
				<div class="row">

					<div class="col-md-6 col-lg-6">
						<div class="single-pricing">
							<div class="package-name">
								<h3>{{$produit->name}}</h3>
							</div>
							<form action="{{ route('cart.store') }}" method="post">
							@csrf
							<div class="package-price">
								<div class="price">usd <span>${{$produit->price}}</span> x
									<div class="quantity">
										<span class="plus"><i class="fas fa-caret-up"></i></span>
										<input name="qty" type="text" class="cart__quantity-selector quantity-selector" value="1">
										<span class="minus"><i class="fas fa-caret-down"></i></span>
									</div>
								</div>
							</div> 
							
							<input type="hidden" name="id" value="{{$produit->id}}">
							<input type="hidden" name="name" value="{{$produit->name}}">
							<input type="hidden" name="price" value="{{$produit->price}}">
							<input type="hidden" name="type" value="ent">
							<input type="hidden" name="taille" value="{{$produit->categorie}}">

							<button class="price-btn" type="submit">Add To Cart<i class="fas fa-arrow-right"></i></button>
							<br>
                    		<span style="font-size:15px ; color:red; margin:5px">{{session('unavailable')}}</span>
							</form>
						</div>
					</div>
					<!-- /.col-lg-6 -->

					<div class="col-md-6 col-lg-6">
						<div class="section-title mt-100 ml-60">
							<h2>BUY FULL<span>EVENT TICKET</span>SAVE BIG!</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<!-- /.col-lg-6 -->
				</div>
				<!-- /.row -->
				<div class="row pricing-table-calumn">
				@foreach($others as $other)
					<div class="col-md-6 col-lg-4">
						<div class="single-pricing style-one">
							<div class="package-name">
								<h3>{{$other->name}}</h3>
							</div>
							<div class="package-details">
								<span>Details</span>
								<div class="package-details-list-wrapper">
									<span><i class="fas fa-plus-circle"></i></span>
									<div class="package-details-list">
										<ul>
											<li>Date : {{$other->date}}</li>
											<li>Start time : {{$other->star}} </li>
											<li>End time : {{$other->end}} </li>
										</ul>
									</div>
								</div>
							</div>
							<br>
							<a class="price-btn" href="{{ route('ent.show',$other->id)}}">Buy ticket<i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
				@endforeach
				</div>
			</div>
		</section>
@endsection('main')