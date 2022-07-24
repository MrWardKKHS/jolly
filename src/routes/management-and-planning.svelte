<script>
   import Banner from "./components/banner.svelte";
   import Base from "./components/base.svelte";
   import Footer from "./components/footer.svelte";
   import ServieLeft from "./components/servieLeft.svelte";
</script>
      
<Base/>
<Banner title="Management and Planning"/>
<section class="pad100-top-bottom">
   <div class="container">
      <div class="row">
         <!--=========Servie Right Start============-->
         <div class="col-md-8 right-column">
            <div class="service-right-desc">
               <span class="image_hover ">
               <img src="images/management-rght-img.jpg" class="img-responsive zoom_img_effect" alt="manufacture-image">
               </span>
               <h5>Expert management and planning services for all phases of the construction process. From inital conception to final inspection we have the experience you need</h5>
               <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
               <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution.</p>
            </div>
            <div class="specialization-cl">
               <div class="special-img image_hover">
                  <img src="images/specialization-img.jpg" class="img-responsive zoom_img_effect" alt="special-image">
               </div>
               <div class="special-text">
                  <h3>Specializations</h3>
                  <p class=" mar-btm20">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia. Donec ullamcorper nulla non metus auctor fringilla.</p>
                  <p>Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia.</p>
               </div>
            </div>
            <div class="service-detail">
               <h3>SERVICE DETAILS</h3>
               <div class="choose_Accordian_Wdt">
                  <div class="accordion-first clearfix acord_mar_non">
                     <div class="accordion" id="accordion2">
                        <div class="accordion-group">
                           <div class="accordion-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"> <em class="icon-fixed-width fa fa-plus"></em>Download brochure (DOC)</a> </div>
                           <div id="collapseOne" class="accordion-body collapse">
                              <div class="accordion-inner">
                                 <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint cupiditate</p>
                                 <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-group">
                           <div class="accordion-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"> <em class="icon-fixed-width fa fa-plus"></em>Download brochure (PDF)</a> </div>
                           <div id="collapseTwo" class="accordion-body collapse">
                              <div class="accordion-inner">
                                 <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint cupiditate</p>
                                 <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-group">
                           <div class="accordion-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree"> <em class="icon-fixed-width fa fa-plus"></em>Rules about service apply generally</a> </div>
                           <div id="collapseThree" class="accordion-body collapse">
                              <div class="accordion-inner">
                                 <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint cupiditate</p>
                                 <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-group">
                           <div class="accordion-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour"> <em class="icon-fixed-width fa fa-plus"></em>Users manual</a> </div>
                           <div id="collapseFour" class="accordion-body collapse">
                              <div class="accordion-inner">
                                 <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint cupiditate</p>
                                 <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end accordion --> 
                  </div>
               </div>
               <div class="have-queston">
                  <p>Have you any question or querry</p>
                  <h3>GET FREE 
                     CONSULTATION 
                     WITH OUR TEAM
                  </h3>
                  <a data-animation="animated fadeInUp" class="header-requestbtn black-request-btn hvr-bounce-to-right" href="request-quote">Request A Quote</a>
               </div>
            </div>
         </div>
         <!--=========Servie Right end============-->
         <ServieLeft activeCategory="management-and-planning"></ServieLeft>
      </div>
   </div>
</section>
<Footer/>

