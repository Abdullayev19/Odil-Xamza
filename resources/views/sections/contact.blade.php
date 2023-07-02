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