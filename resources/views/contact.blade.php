@extends('layouts.hf')

@section('content')

		<!-- Intro Section -->
        <section class="inner-intro bg-img light-color overlay-before parallax-background">
            <div class="container">
              <div class="row title">
                  <div class="title_row">
                      <h1 data-title="BOGLANISH"><span>BOG'LANISH</span></h1>
                  </div>
                
              </div>
            </div>
          </section>
         <!-- Intro Section End-->
                
          
          <!-- Contact Section -->
          <section class="ptb ptb-xs-60">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-lg-8 offset-md-2 text-center">
                  <h2>BIZ BILAN BOG'LANISH</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 col-lg-12 contact pb-60 pt-30">
                  <div class="row text-center">
                    <div class="col-md-4 col-lg-4 pb-xs-30"> <i class="ion-android-call icon-circle pos-s"></i><a href="#" class="mt-15 i-block">+998-99-917-70-28</a> </div>
                    <div class="col-md-4 col-lg-4 pb-xs-30"> <i class="ion-ios-location icon-circle pos-s"></i>
                      <p  class="mt-15">Andijon viloyati Andijon shaxar Sanoat Ko'chasi 284-uy</p>
                    </div>
                    <div class="col-md-4 col-lg-4 pb-xs-30"> <i class="ion-ios-email icon-circle pos-s"></i><a href="mailto:Construc@support.com"  class="mt-15 i-block">odilhamza@gmail.com</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Map Section -->
            <div class="map">
              <div id="map"></div>
            </div>
            <!-- Map Section -->
            <div class="container contact-form padding pt-xs-40 mt-up">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <h3>SAVOL VA TAKLIFLAR UCHUN</h3>
                  </BR>
                  <!-- Contact FORM -->
                  <form action="{{route('contact.store')}}" method="POST" >
                    @csrf 
                    <!-- END IF MAIL SENT SUCCESSFULLY -->           
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                        <div class="form-field">
                          <input class="input-sm form-full" id="name" type="text" name="name" placeholder="ISMINGIZNI KIRITING">
                        </div>
                        <div class="form-field">
                          <input class="input-sm form-full" id="phone" type="text" name="phone" placeholder="RAQAMNI KIRITING" >
                        </div>
                        <div class="form-field">
                          <input class="input-sm form-full" id="email" type="text" name="email" placeholder="EMAILNI KIRITING">
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-6">
                        <div class="form-field">
                          <textarea class="form-full" id="message" rows="7" name="message" placeholder="XABARNI KIRITING" ></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 col-lg-12 mt-30">
                        <input type="submit" name="submit" value="YUBORISH" class="btn btn-warning">
                      </div>
                    </div>
                  </form>
                  <!-- END Contact FORM --> 
                </div>
              </div>
            </div>
          </section>
          <!-- Contact Section -->  

@endsection