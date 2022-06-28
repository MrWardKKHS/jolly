<script>
   import Banner from "./components/banner.svelte";
   import Base from "./components/base.svelte";
   import Footer from "./components/footer.svelte";
</script>
<Base/>
<Banner title="About"/>
			<!--=========Servie Right Start============-->
               <div class="col-md-8 right-column">
                  <div class="service-right-desc">
                     <span class="image_hover ">
                     <img src="images/energy-right-img.jpg" class="img-responsive zoom_img_effect" alt="energy-image">
                     </span>
                     <h5>Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia. Donec ullamcorper nulla non metus auctor fringilla.</h5>
                     <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                     <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution.</p>
                  </div>
                  <div class="specialization-cl">
                     <div class="special-img image_hover">
                        <img src="images/specialization-img.jpg" class="img-responsive zoom_img_effect" alt="special-image">
                     </div>
                     <div class="special-text">
                        <h3>Specializations</h3>
                        <p class="mar-btm20">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        <p>Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia.</p>
                     </div>
                  </div>
				  <div class="contact-form contact_form">
				  <h3>Request Free Advice</h3>
				   <div class="row">
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
               <!--=========Servie Right end============-->
			
               <!--=========Servie Left Start============-->
               <div class="col-md-4 left-column">
                  <ul class="category-list">
                     <li><a href="manufacturing">Manufacturing</a></li>
                     <li><a href="cnc-industry">CNC Industry</a></li>
                     <li><a href="chemical-industry">Chemical Industry</a></li>
                     <li><a href="energy-engineering" class="active-category">Energy Engineering</a></li>
                     <li><a href="oil-industry">Oil Industry</a></li>
                     <li><a href="material-engineering">Material Engineering</a></li>
                  </ul>
                  <div class="contact-help">
                     <div class="office-info-col wdt-100">
                        <h4>CONTACT US </h4>
                        <ul class="office-information">
                           <li class="office-loc">
                              <span class="info-txt">121  Maxwell Farm Road, Washington DC, USA</span>
                           </li>
                           <li class="office-phn">
                              <span class="info-txt fnt_17">+1 (123) 456-7890</span>
                           </li>
                           <li class="office-msg">
                              <span class="info-txt fnt_17">info@indofact.com</span>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <a class="pdf-button" href="\">DOWNLOAD BROCHURE</a>
               </div>
               <!--=========Servie Left end============-->
<Footer/>