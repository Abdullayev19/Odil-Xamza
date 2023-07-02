

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