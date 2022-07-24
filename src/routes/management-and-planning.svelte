<script>
   import Banner from "./components/banner.svelte";
   import Base from "./components/base.svelte";
   import Footer from "./components/footer.svelte";
   import ServieLeft from "./components/servieLeft.svelte";
   import Specialization from "./components/specialization.svelte";
import PhysicalDelivery from "./physical-delivery.svelte";
</script>
      
<Base/>
<Banner title="Management and Planning"/>
<section class="pad100-top-bottom">
   <div class="container">
      <div class="row">
         <!--=========Servie Right Start============-->
         <div class="col-md-8 right-column">
            <div class="service-right-desc">
               <span class="image_hover">
               <img src="images/management-rght-img.jpg" class="img-responsive zoom_img_effect" alt="manufacture-image">
               </span>
               <h5>Expert management and planning services for all phases of the construction process. From inital conception to final inspection we have the experience you need</h5>
            </div>
            <Specialization>
               <h3>Early Contractor Involvement</h3>
               <p>descrption</p>
            </Specialization>
            <Specialization>
               <h3>Construction tender programme development and review</h3>
               <p>descrption</p>
            </Specialization>
            <Specialization>
               <h3>Programme peer review</h3>
               <p>descrption</p>
            </Specialization>
            <Specialization>
               <h3>Programme administration</h3>
               <p>descrption</p>
            </Specialization>
            <Specialization>
               <h3>Contractor transition, risk communication and handover</h3>
               <p>descrption</p>
            </Specialization>
            <div class="have-queston">
               <p>Have you any question or querry</p>
               <h3>GET FREE 
                  CONSULTATION 
                  WITH OUR TEAM
               </h3>
               <a data-animation="animated fadeInUp" class="header-requestbtn black-request-btn hvr-bounce-to-right" href="request-quote">Request A Quote</a>
            </div>
         </div>
         <!--=========Servie Right end============-->
         <ServieLeft activeCategory="management-and-planning"></ServieLeft>
      </div>
   </div>
</section>
<Footer/>

