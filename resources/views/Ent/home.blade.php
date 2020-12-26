@extends('layout.ent')

@section('main')
<!--=========================-->
		<!--=      Slider Section    =-->
		<!--=========================-->

		<section class="slider-wrapper">
			<div class="slider"></div>
			<div class="slider-hexagon-wrapper">
				<ul>
					<li>
						<div class="hexagon one color-four"></div>
					</li>
					<li>
						<div class="hexagon one color-five"></div>
					</li>
					<li>
						<div class="hexagon one color-one"></div>
					</li>
					<li>
						<div class="hexagon one color-two"></div>
					</li>
					<li>
						<div class="hexagon three color-three"></div>
					</li>
				</ul>
			</div>
			<div class="slider-text">
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<div class="slider-text-inner">
								<h6 data-aos="fade-up" data-aos-delay="1000" data-aos-duration="2000">Welcome to our <span>| Entertainment zone</span></h6>
								<div class="sleider-heading" data-aos="fade-up" data-aos-delay="2000" data-aos-duration="2000">
									<h1>CINEMA AND EVENTS <br>FOR <span>KIDS</span></h1>
								</div>
								<div class="countdown-wrapper" data-aos="fade-up" data-aos-delay="3000" data-aos-duration="2000">
									<p>Starting in -</p>
									<div class="countdown" data-count-year="2022" data-count-month="1" data-count-day="30"></div>
								</div>
							</div>
						</div>
						<!-- /.col-md-12 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</div>
			<div class="slider-hex-right">
				<ul>
					<li data-aos="fade" data-aos-delay="3000" data-aos-duration="500">
						<div class="hexagon one color-five"></div>
					</li>
					<li data-aos="fade" data-aos-delay="3000" data-aos-duration="1000">
						<div class="hexagon one color-two"></div>
					</li>
					<li data-aos="fade" data-aos-delay="3000" data-aos-duration="1500">
						<div class="hexagon one "></div>
					</li>
					<li data-aos="fade" data-aos-delay="3000" data-aos-duration="2000">
						<div class="hexagon one color-one"></div>
					</li>
					<li data-aos="fade" data-aos-delay="3000" data-aos-duration="2500">
						<div class="hexagon three color-three"></div>
					</li>
				</ul>
			</div>
			<div class="slider-net-right">
				<img class="svg" src="media/images/icon/net2.svg" alt="">
			</div>
			<!-- /.slider-hexagon-right -->
		</section>
		<!-- /.slider -->

		<!--=========================-->
		<!--=     Tab | Topic Section    =-->
		<!--=========================-->

		<section class="tab-section padding-2-1">
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
					<div class="col-md-12">
						<div class="section-title-boxed">
							<h2>THE EVENTS</h2>
						</div>
						<div class="tab-section-inner row">
							<div class="topic-tab-button">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="home-tab" data-toggle="tab" href="#{{$show->id}}" role="tab" aria-selected="true">{{$show->name}}</a>
									</li>
								@foreach($events as $event)
									<li class="nav-item">
										<a class="nav-link" id="home-tab" data-toggle="tab" href="#{{$event->id}}" role="tab" aria-selected="false">{{$event->name}}</a>
									</li>
								@endforeach
								</ul>

							</div>
							<div class="tab-content-topic">
								<div class="tab-content">
									<div class="tab-pane fade show active" id="{{$show->id}}" role="tabpanel">
									<a href="{{ route('ent.show',$show->id)}}">
										<div class="topic-content-inner">
											<div class="topic-tab-image">
												<img src="../images/imgENT/{{$show->picture}}" alt="">

											</div>
											<div class="topic-tab-text">
												<p>{{$show->description}} <br> <strong>DATE</strong> : {{$show->date}} <div class="start-end-time"> Starts: <b>{{$show->star}}</b> | Ends: <b>{{$show->end}}</b> </div></p>
											</div>		
										</div>
									</a>
									</div>
								@foreach($events as $event)
									<div class="tab-pane fade" id="{{$event->id}}" role="tabpanel">
									<a href="{{ route('ent.show',$event->id)}}">
										<div class="topic-content-inner">
											<div class="topic-tab-image">
												<img src="../images/imgENT/{{$event->picture}}" alt="">

											</div>
											<div class="topic-tab-text">
												<p>{{$event->description}} <br> <strong>DATE</strong> : {{$event->date}} <div class="start-end-time"> Starts: <b>{{$event->star}}</b> | Ends: <b>{{$event->end}}</b> </div></p>
											</div>		
										</div>
									</a>
									</div>
								@endforeach
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<!--=========================-->
		<!--=     Speaker One Section    =-->
		<!--=========================-->

		<section class="speaker-one">

			<div class="shape shape-triple aos-item right-shape" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease-in-sine">
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
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-5">
						<div class="section-title mt-50">
							<h2><span>ACTIVITIES</span>FOR KIDS</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim ad minim veniam, quis nostrud.</p>
						</div>
					</div>
					<!-- /.col-md-5 -->
					<div class="col-md-12 col-lg-7">
						<div class="speaker-one-inner">
							<ul>
								<li>
									<a href="{{ route('ent.show',$activity[0]->id)}}">
										<div class="speaker-box">
											<div class="speaker-info">
												<h4>{{$activity[0]->name}}</h4>
											</div>
											<svg version="1.1" class="svg top-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 356.3 313.6" xml:space="preserve">
												<g>
													<defs>
														<polygon  points="-196.9,11.3 -364.9,11.3 -448.8,156.8 -364.9,302.3 -196.9,302.3 -112.9,156.8"/>
													</defs>
									
												</g>
												<polygon  points="262.1,11.3 94.1,11.3 10.2,156.8 94.1,302.3 262.1,302.3 346.1,156.8 "/>
											</svg>

											<div class="speaker-img">
												<img class="speaker-image" src="../images/imgENT/{{$activity[0]->picture}}" alt="">
											</div>

										</div>
									</a>
									<span><img class="svg speaker-small" src="media/images/icon/hexagon.svg" alt=""></span>
								</li>

								<li>
									<a href="{{ route('ent.show',$activity[1]->id)}}">
										<div class="speaker-box">
											<div class="speaker-info">
												<h4>{{$activity[1]->name}}</h4>
											</div>
											<svg version="1.1" class="svg top-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 356.3 313.6" xml:space="preserve">
									<g>
										<defs>
											<polygon  points="-196.9,11.3 -364.9,11.3 -448.8,156.8 -364.9,302.3 -196.9,302.3 -112.9,156.8 		"/>
										</defs>
										<g >

											<image width="334" height="291" xlink:href="../../../themeim.com/demo/laevento/684C3EF0.html"  transform="matrix(1.0276 0 0 1.0276 -452.4791 7.2722)">
											</image>
										</g>
									</g>
									<polygon points="262.1,11.3 94.1,11.3 10.2,156.8 94.1,302.3 262.1,302.3 346.1,156.8 "/>
								</svg>
											<div class="speaker-img">
												<img class="speaker-image" src="../images/imgENT/{{$activity[1]->picture}}" alt="">
											</div>
										</div>
									</a>
									<span><img class="svg speaker-small" src="media/images/icon/hexagon.svg" alt=""></span>
								</li>

								<li>
									<a href="{{ route('ent.show',$activity[2]->id)}}">
										<div class="speaker-box">
											<div class="speaker-info">
												<h4>{{$activity[2]->name}}</h4>
											</div>
											<svg version="1.1" class="svg top-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 356.3 313.6" xml:space="preserve">
								<g>
									<defs>
										<polygon  points="-196.9,11.3 -364.9,11.3 -448.8,156.8 -364.9,302.3 -196.9,302.3 -112.9,156.8 "/>
									</defs>
									<g >

										<image width="334" height="291" xlink:href="../../../themeim.com/demo/laevento/684C3EF0.html"  transform="matrix(1.0276 0 0 1.0276 -452.4791 7.2722)">
										</image>
									</g>
								</g>
								<polygon  points="262.1,11.3 94.1,11.3 10.2,156.8 94.1,302.3 262.1,302.3 346.1,156.8 "/>
							</svg>
											<div class="speaker-img">
												<img class="speaker-image" src="../images/imgENT/{{$activity[2]->picture}}" alt="">
											</div>
										</div>
									</a>
									<span><img class="svg speaker-small" src="media/images/icon/hexagon.svg" alt=""></span>
								</li>

								<li>
									<a href="{{ route('ent.show',$activity[3]->id)}}">
										<div class="speaker-box">
											<div class="speaker-info">
												<h4>{{$activity[3]->name}}</h4>
											</div>
											<svg version="1.1" class="svg top-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 356.3 313.6" xml:space="preserve">
							<g>
								<defs>
									<polygon  points="-196.9,11.3 -364.9,11.3 -448.8,156.8 -364.9,302.3 -196.9,302.3 -112.9,156.8 		"/>
								</defs>
								<g >

									<image width="334" height="291" xlink:href="../../../themeim.com/demo/laevento/684C3EF0.html"  transform="matrix(1.0276 0 0 1.0276 -452.4791 7.2722)">
									</image>
								</g>
							</g>
							<polygon  points="262.1,11.3 94.1,11.3 10.2,156.8 94.1,302.3 262.1,302.3 346.1,156.8 "/>
						</svg>
											<div class="speaker-img">
												<img class="speaker-image" src="../images/imgENT/{{$activity[3]->picture}}" alt="">
											</div>
										</div>
									</a>
								</li>

								<li>
									<a href="{{ route('ent.show',$activity[4]->id)}}">
										<div class="speaker-box">
											<div class="speaker-info">
												<h4>{{$activity[4]->name}}</h4>
											</div>
											<svg version="1.1" class="svg top-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 356.3 313.6" xml:space="preserve">
						<g>
							<defs>
								<polygon  points="-196.9,11.3 -364.9,11.3 -448.8,156.8 -364.9,302.3 -196.9,302.3 -112.9,156.8 		"/>
							</defs>
							<g >
								<image width="334" height="291" xlink:href="../../../themeim.com/demo/laevento/684C3EF0.html"  transform="matrix(1.0276 0 0 1.0276 -452.4791 7.2722)">
								</image>
							</g>
						</g>
						<polygon  points="262.1,11.3 94.1,11.3 10.2,156.8 94.1,302.3 262.1,302.3 346.1,156.8 "/>
					</svg>
											<div class="speaker-img">
												<img class="speaker-image" src="../images/imgENT/{{$activity[4]->picture}}" alt="">
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /.col-md-7 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.speaker-one -->

		<!--=========================-->
		<!--=     Schedule One Section    =-->
		<!--=========================-->

		<section class="schedule-one background-overlay" data-bg-image="media/images/background/bg1.jpg">
			<div class="net-one">
				<img src="media/images/base/hexline_2.png" alt="">
			</div>
			<div class="hexagon-box-schedule">
				<ul>
					<li>
						<div class="hexagon one color-four"></div>
					</li>
					<li>
						<div class="hexagon one color-one"></div>
					</li>
					<li>
						<div class="hexagon one color-one"></div>
					</li>
					<li>
						<div class="hexagon one color-two"></div>
					</li>
					<li>
						<div class="hexagon three color-three"></div>
					</li>
				</ul>
			</div>
			<div class="hexagon-bottom-wrapper">
				<div class="hexagon-box-schedule bottom-right">
					<ul>
						<li>
							<div class="hexagon one "></div>
						</li>
						<li>
							<div class="hexagon one "></div>
						</li>
						<li>
							<div class="hexagon one "></div>
						</li>
						<li>
							<div class="hexagon one "></div>
						</li>
						<li>
							<div class="hexagon three"></div>
						</li>
					</ul>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="section-title-boxed-left">
							<h2>MOVIES <br> SCHEDULE</h2>
						</div>
						<div class="schedule-one-inner">
							<nav class="schedule-date">
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">{{date('Y-m-d')}}</a>
									<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">{{Carbon\Carbon::now()->addDays(1)->toDateString()}}</a>
									<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">{{Carbon\Carbon::now()->addDays(2)->toDateString()}}</a>
								</div>
							</nav>
							<div class="tab-content">


								<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
									<div class="tab-content">
										<div class="tab-pane fade show active" id="nav-home11" role="tabpanel" aria-labelledby="nav-home-tab11">
											<div class="schedule-content" data-simplebar>
											@foreach($movies1 as $movie)
												<div class="single-schedule-content">
													<div class="schedule-image">
														<img src="../images/imgENT/{{$movie->picture}}" alt="">
													</div>
													<div class="schedule-info ">
														<div class="schedule-btn">
															<i class="fas fa-angle-down"></i>
														</div>
														<h6 class="active">{{$movie->name}}</h6>
														<div class="schedule-details">
															<p>{{$movie->description}}</p>
														</div>
														<div class="time-schedule-box">
															<div class="start-end-time">
																Starts: <b>{{$movie->star}}</b> | Ends: <b>{{$movie->end}}</b>
															</div>
															<div class="level">
																<a href="{{ route('ent.show',$movie->id)}}">Buy ticket</a>
															</div>
														</div>
													</div>
												</div>
											@endforeach
											</div>
										</div>
									</div>
								</div>


								<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
									<div class="tab-content">
										<div class="tab-pane fade show active" id="nav-home11" role="tabpanel" aria-labelledby="nav-home-tab11">
											<div class="schedule-content" data-simplebar>
											@foreach($movies2 as $movie)
												<div class="single-schedule-content">
													<div class="schedule-image">
														<img src="../images/imgENT/{{$movie->picture}}" alt="">
													</div>
													<div class="schedule-info ">
														<div class="schedule-btn">
															<i class="fas fa-angle-down"></i>
														</div>
														<h6 class="active">{{$movie->name}}</h6>
														<div class="schedule-details">
															<p>{{$movie->description}}</p>
														</div>
														<div class="time-schedule-box">
															<div class="start-end-time">
																Starts: <b>{{$movie->star}}</b> | Ends: <b>{{$movie->end}}</b>
															</div>
															<div class="level">
																<a href="{{ route('ent.show',$movie->id)}}">Buy ticket</a>
															</div>
														</div>
													</div>
												</div>
											@endforeach
											</div>
										</div>
									</div>
								</div>


								<div class="tab-pane fade schedule-inner-wrapper" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
									<div class="tab-content">
										<div class="tab-pane fade show active" id="nav-home11" role="tabpanel" aria-labelledby="nav-home-tab11">
											<div class="schedule-content" data-simplebar>
											@foreach($movies3 as $movie)
												<div class="single-schedule-content">
													<div class="schedule-image">
														<img src="../images/imgENT/{{$movie->picture}}" alt="">
													</div>
													<div class="schedule-info ">
														<div class="schedule-btn">
															<i class="fas fa-angle-down"></i>
														</div>
														<h6 class="active">{{$movie->name}}</h6>
														<div class="schedule-details">
															<p>{{$movie->description}}</p>
														</div>
														<div class="time-schedule-box">
															<div class="start-end-time">
																Starts: <b>{{$movie->star}}</b> | Ends: <b>{{$movie->end}}</b>
															</div>
															<div class="level">
																<a href="{{ route('ent.show',$movie->id)}}">Buy ticket</a>
															</div>
														</div>
													</div>
												</div>
											@endforeach
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>


	
@endsection('main')