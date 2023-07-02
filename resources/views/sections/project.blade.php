		<!-- Project_Section -->
		<section class="padding ptb-xs-40">
			<div class="container">
				<div class="row text-center mb-30">
					<div class="col-sm-12">
						<div class="sec_hedding">
							<h2><span>BIZNING</span> ISHLAR</h2>
							<span class="b-line"></span>
						</div>
					</div>
				</div>

				<div class="row">
                    @foreach ($partners as $partner)
                        
                    
					<div class="col-lg-4 mb-sm-30 mb-xs-30">
						<div class="position_relative img-scale max_size">
							<figure class="picher_doc">
								<img src="/admin_r/images/{{$partner->image}}" alt="" height="230px" class="mb-4">
								<div class="opacity-medium bg-extra-black"></div>
								<div class="inner_text">
									<h3 class="show_tital">{{$partner->title}}</h3>
								</div>
							</figure>
						</div>
					</div>
                    @endforeach
				</div>

			</div>
		</section>
		<!-- Project_Section_End-->