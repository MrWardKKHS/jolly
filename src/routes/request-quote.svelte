<script>
   import Banner from "./components/banner.svelte";
   import Base from "./components/base.svelte";
   import Footer from "./components/footer.svelte";
</script>
<Base/>
<Banner title="Request a quote"/>
      <section class="pad95-100-top-bottom">
         <div class="container">
            <p class="fnt-18 marbtm50">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia. Donec ullamcorper nulla non metus auctor fringilla.</p>
            <div class="row">
               <!--=========Request Left Start============-->
               <div class="col-md-8 col-sm-7 col-xs-12 faq-mobile-margin">
                  <div class="contact-form request-form">
                     <div class="col-lg-12 col-md-12 form-field">
                        <input name="name" type="text" class="form-input" value="Full Name*">
                     </div>
                     <div class="col-lg-12 col-md-12 form-field">
                        <input name="name" type="text" class="form-input" value="Phone*">
                     </div>
                     <div class="col-lg-12 col-md-12 form-field">
                        <input name="name" type="text" class="form-input" value="Email*">
                     </div>
                     <div class="col-lg-12 col-md-12 form-field">
                        <input name="name" type="text" class="form-input" value="Website*">
                     </div>
                     <div class="col-lg-12 col-md-12 form-field">
                        <textarea name="name" cols="1" rows="2" class="form-comment">Comment*</textarea>
                     </div>
                     <div class="col-md-12 form-field">
                        <input name="name" type="button" class="form-submit-btn" value="Request A Quote">
                     </div>
                  </div>
               </div>
               <!--=========Request Left end============-->
               <!--=========Request Right Start============-->
               <div class="col-md-4 left-column pull-right">
                  <div class="wdt-100 marbtm50">
                     <h3 class="marbtm30">Need Support?</h3>
                     <p class="fnt-17">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. </p>
                  </div>
                  <div class="contact-help">
                     <h4>Contact us for help?</h4>
                     <p class="fnt-17">Contact with us through our representative or submit a
                        business inquiry online.
                     </p>
                  </div>
                  <a class="pdf-button" href="\">DOWNLOAD BROCHURE</a>
               </div>
               <!--=========Request Left end============-->
            </div>
         </div>
      </section>
<Footer/>