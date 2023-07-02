@extends('layouts.hf')

@section('content')
    
		<!-- CONTENT -->
		<!-- Intro Section -->
		<section class="inner-intro bg-img light-color overlay-before parallax-background">
            <div class="container">
              <div class="row title">
                  <div class="title_row">
                      <h1 data-title="BIZ XAQIMIZDA"><span>BIZ XAQIMIZDA</span></h1>
                  </div>
              </div>
            </div>
          </section>
                <!-- Intro Section -->
                <!-- About Section -->
                <section class="padding ptb-xs-40">
                    <div class="container">
                        <div class="row pb-60 pb-xs-40">
                            <div class="col-md-8 offset-md-2">
                                <div class="sec_hedding text-center">
                                    <h2>Bizning Ustunliglarimiz</h2>
                                    <span class="b-border"></span>
                                    
                                </div>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="solution_box about_new">
                                    <i class="fa fa-check-square-o color_orenge" aria-hidden="true"></i>
                                    <h4>O'z vaqtida</h4>
                                    
        
                                </div>
                            </div>
        
                            <div class="col-lg-4 mt-sm-30 mt-xs-30">
                                <div class="solution_box about_new">
                                    <i class="fa fa-paper-plane-o color_orenge" aria-hidden="true"></i>
                                    <h4>Tezkor</h4>
                                    
                                </div>
                            </div>
        
                            <div class="col-lg-4 mt-sm-30 mt-xs-30">
                                <div class="solution_box about_new">
                                    <i class="fa fa-cogs color_orenge" aria-hidden="true"></i>
                                    <h4>Ishonchli</h4>
                                    
        
                                </div>
                            </div>
        
                        </div>
        
                    </div>
                </section>
                <!-- About Section End-->
        
                <!-- Section -->
                <section class="padding ptb-xs-40 gray-bg">
                    <div class="container">
        
                        <div class="row">
                            
                            @foreach ($abouts as $about)
                            
                            <div class="col-lg-6 d-flex align-items-center">
                                
                                    
                                
                                <div>
                                    <h3 class="bigger_text mt-60 mt-xs-0 mt-sm-2">{{$about->title}}</h3>
                                    <p>
                                        {{$about->description}}
                                    </p>
                                </div>
        
                            </div>
        
                            <div class="col-lg-6 mt-sm-30 mt-xs-30">
                                <img src="admin_r/images/{{$about->image}}" alt="" style="border-radius: 40px">
                            </div>
                            @endforeach
                        </div>
        
                    </div>
                </section>
                <!-- Section End-->
        
                <!-- Counter Section -->
                <div class="fact-counter-wrapper padding-60 ptb-xs-40 bg-img overlay-before" data-stellar-background-ratio="0.5">
                    <div class="container text-center pos_reletive">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="single-fact new_counter">
                                    <div class="icon-boxed">
                                        <i class="ion-ios-list"></i>
                                    </div>
                                    <span class="counter new__counter" data-count="3562">0</span>
                                    <p>
                                        Total Projects
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-fact new_counter">
                                    <div class="icon-boxed">
                                        <i class="ion-happy"></i>
                                    </div>
                                    <span class="counter new__counter" data-count="1054">0</span>
                                    <p>
                                        Happy Clients
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-fact new_counter">
                                    <div class="icon-boxed">
                                        <i class="ion-person-stalker"></i>
                                    </div>
                                    <span class="counter new__counter" data-count="400">0</span>
                                    <p>
                                        Active Member
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-fact new_counter">
                                    <div class="icon-boxed">
                                        <i class="ion-trophy"></i>
                                    </div>
                                    <span class="counter new__counter" data-count="67">0</span>
                                    <p>
                                        Won Award
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Counter Section End-->
        

        


		<!-- Team Section -->
		<section id="team" class="padding ptb-xs-40 text-center gray-bg">
			<div class="container">
				<div class="row text-center mb-30">
					<div class="col-sm-12">
						<div class="sec_hedding">
							<h2><span>BIZNING</span> JAMOA</h2>
							<span class="b-line"></span>
						</div>
					</div>
				</div>

				<!--Team Carousel -->
				<div class="row mt-10">
					<div class="col-md-12">
						<div id="team-carousel" class="owl-carousel team-carousel nf-carousel-theme">
                            @foreach ($reviews as $review)
                                
                            
							<div class="team_head">
								<div class="team_view">
									<figure>
										<img src="/admin_r/images/{{$review->image}}" alt="" height="175px">
									</figure>
								</div>
								<div class="team_discoption text-center mt-15">
									<span class="team_name">{{$review->name}}</span>
									<span class="postion">{{$review->message}}</span>
								</div>
							</div>
                            @endforeach
						</div>
					</div>
				</div>
				<!--End Team Carousel -->
			</div>
		</section>
		<!-- End Team Section -->

@endsection