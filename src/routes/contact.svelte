<script>
   import Banner from "./components/banner.svelte";
   import Base from "./components/base.svelte";
   import Footer from "./components/footer.svelte";
</script>
<Base/>
<Banner title="About"/>
      <!--=========Contact Section Start============-->
      <section class="pad100-top-bottom">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact-info-column text-center">
                  <img src="images/contact-address-icon.png" alt="address-icon">
                  <h4>Location</h4>
                  <p class="fnt-17">121  Maxwell Farm Road, Washington DC, USA</p>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  contact-info-column text-center">
                  <img src="images/contact-phn-icon.png" alt="phone-icon">
                  <h4>Phone</h4>
                  <p class="fnt-17">+1 (123) 456-7890</p>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  contact-info-column text-center">
                  <img src="images/contact-msg-icon.png" alt="message-icon">
                  <h4>Email</h4>
                  <p class="fnt-17">info@indofact.com</p>
               </div>
            </div>
            <div class="row text-center">
               <h3 class="mar-btm30">Leave us your info</h3>
               <p class="fnt-18">and we will get back to you.</p>
               <div class="contact-form">
                  <div class="col-md-6 form-field input-halfrght">
                     <input name="name" type="text" class="form-input" placeholder="Full Name*">
                  </div>
                  <div class="col-md-6 form-field input-halflft">
                     <input name="name" type="text" class="form-input" placeholder="Email*">
                  </div>
                  <div class="col-lg-12 col-md-12 form-field">
                     <input name="name" type="text" class="form-input" placeholder="Website*">
                  </div>
                  <div class="col-lg-12 col-md-12 form-field">
                     <textarea name="name" cols="1" rows="2" class="form-comment" placeholder="Comment*"></textarea>
                  </div>
                  <div class="col-md-12 form-field no-margin">
                     <input name="name" type="button" class="form-submit-btn" value="Submit Now">
                  </div>
               </div>
            </div>
         </div>
      </section>
	
      <div class="contact_map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2678.8652419815016!2d174.55800778451027!3d-37.01634196723602!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snz!4v1658399107169!5m2!1sen!2snz"></iframe>
      </div>
      <!--=========Contact Section end============-->
<Footer/>