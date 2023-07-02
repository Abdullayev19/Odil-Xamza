		<!-- OUR_Service -->
		<section id="service_section" class="padding ptb-xs-40">
			<div class="container-fluid">
				<div class="row text-center mb-30">
					<div class="col-sm-12">
						<div class="sec_hedding">
							<h2><span>BIZNING</span> XIZMATLAR</h2>
							<span class="b-line"></span>
						</div>
					</div>
				</div>	

				<div class="row">
                    @foreach ($services as $service)
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-xs-30 margin_bott">
						<div class="maine_box">
							<div class="items_picher">
								<img src="/admin_r/images/{{$service->image}}" alt=""  height="280px" >
							</div>

							<div class="box_detail">
								<div class="use_detail">
									<div class="event_detail">
										<i class="flaticon-tool-1"></i>
									</div>
								</div>
								<div class="datail_show">
									<h3>{{$service->name}}</h3>
									<p>
										{{$service->description}}
									</p>
									<a href="#!">Read More</a>
								</div>
							</div>

						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</section>
		<!-- OUR_Service END-->