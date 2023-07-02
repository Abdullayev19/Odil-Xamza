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