<script>
   import ProjectItem from "./projectItem.svelte";
import Service from "./service.svelte"
   import Video from "./video.svelte";
</script>

<div id="minimal-bootstrap-carousel" class="home1 hmslider1 carousel slide carousel-fade shop-slider full_width" data-ride="carousel">
   <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox">
      <div class="item active slide-1">
         <div class="carousel-caption">
            <div class="thm-container ">
               <div class="box valign-top">
                  <div class="content home1-slides">
                     <h1 data-animation="animated fadeInUp">Championing Civil <span>Infrastructure</span>
                     </h1>
                     <p data-animation="animated fadeInDown">Experts in Civil Infrastructure Project Delivery </p>
                     <a data-animation="animated fadeInUp" href="about" class="header-requestbtn learn-more hvr-bounce-to-right">Learn More</a> 
                     <a data-animation="animated fadeInUp" href="services" class="header-requestbtn learn-more our-solution hvr-bounce-to-right">Our Solution</a> 
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="item slide-2">
         <div class="carousel-caption">
            <div class="thm-container">
               <div class="box valign-top">
                  <div class="content home1-slides">
                     <h1 data-animation="animated fadeInUp">Construction Management <span>Technical Solutions</span> </h1>
                     <p data-animation="animated fadeInDown">Logistics, Advice, Stakeholder and Utility Coordination</p>
                     <a data-animation="animated fadeInUp" href="about" class="header-requestbtn learn-more hvr-bounce-to-right">learn more</a> 
                     <a data-animation="animated fadeInUp" href="services" class="header-requestbtn learn-more our-solution hvr-bounce-to-right">Our Solution</a> 
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="item slide-3">
         <div class="carousel-caption">
            <div class="thm-container">
               <div class="box valign-top">
                  <div class="content home1-slides">
                     <h1 data-animation="animated fadeInUp"><span>Civil</span> Construction & Public Works</h1>
                     <p data-animation="animated fadeInDown">Physical Solutions built to last</p>
                     <a data-animation="animated fadeInUp" href="about" class="header-requestbtn learn-more hvr-bounce-to-right">learn more</a> 
                     <a data-animation="animated fadeInUp" href="services" class="header-requestbtn learn-more our-solution hvr-bounce-to-right">Our Solution</a> 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Controls --> 
   <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev"> <i class="fa fa-angle-left"></i> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next"> <i class="fa fa-angle-right"></i> <span class="sr-only">Next</span> </a> 
</div>
<!--=========home banner end============-->
<!--=========Services Start============-->
<section class="pad100-70-top-bottom">
   <div class="container">
      <div class="row ">
         <div class="head-section wdt-100">
            <div class="col-lg-5 col-md-6 col-sm-4 col-xs-12">
               <h3>Services & Solutions</h3>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12">
               <p class="fnt-18">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
         </div>
         <div class="col-md-12">
            <Service title="MANAGEMENT and PLANNING" href="" icon=''></Service>
            <Service title="PHYSICAL DELIVERY" href="" icon=''></Service>
            <Service title="TECHNICAL SUPPORT" href="" icon=''></Service>
         </div>
      </div>
   </div>
</section>
<!--=========Services end============-->
<Video></Video>
<!--=========Recent Project Start============-->
<section class="recent-project-section projectsec1">
   <div class="container">
      <h3 class="black-color">Our Projects</h3>
   </div>
   <!-- Tab panes -->
   <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="all">
         <div class="full_wrapper carousel slide four_shows_one_move home1-project" id="our_project" data-ride="carousel">
            <div class="controls"> 
               <a class="left fa fa-angle-left next_prve_control" href="#our_project" data-slide="prev"></a>
               <a class="right fa fa-angle-right next_prve_control" href="#our_project" data-slide="next"></a> 
            </div>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
               <ProjectItem href="#" img="home1-electronic-project1.jpg" active='true'>Project 1</ProjectItem>
               <ProjectItem href="#" img="home1-electronic-project1.jpg">Project 2</ProjectItem>
               <ProjectItem href="#" img="home1-electronic-project1.jpg">Project 3</ProjectItem>
               <ProjectItem href="#" img="home1-electronic-project1.jpg">Project 4</ProjectItem>
            </div>
         </div>
      </div>
   </div>
</section>
<!--=========Recent Project end============-->
<!--=========High Quality Start============-->
<section class="hight-level-section">
   <div class="container">
      <div class="row" style="display: flex;">
         <div>
            <div class="col-md-12 text-center">
               <h2>Who we <span>are</span></h2>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 col-xs-12">
               <p class="fnt-17">With three decades of experience in infrastructure delivery we are practical, pragmatic and hands on. We are the partner you want if you’re setting up, setting out, or straight up stuck.</p>
            </div>
         </div>
         <div>
            <div class="col-md-12 text-center">
               <h2>What we <span>do</span></h2>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 col-xs-12">
               <p class="fnt-17">From wherever you are to project completion, we get your project across the line. There is no problem too big, too small, too obscure, or too embarrassing, we pride ourselves on problem solving.  </p>
            </div>
         </div>
         <!-- <div class="col-lg-6 col-md-6 col-xs-12 col-xs-12 text-center">
            <ul class="icon_size">
               <li class="vision-icon"><i class="fa fa-eye"></i>Vision</li>
               <li class="value-icon"><i class="fa fa-line-chart"></i>Values</li>
               <li class="mission-icon"><i class="fa fa-rocket"></i> Mission</li>
            </ul>
         </div> -->
      </div>
   </div>
</section>
<!--=========High Quality end============-->
<section class="pad95-100-top-bottom get_in_01">
   <div class="container">
      <h3 class="marbtm20">GET IN TOUCH</h3>
      <p class="fnt-18 marbtm50">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia. Donec ullamcorper nulla non metus auctor fringilla.</p>
      <div class="row">
         <!--=========Request Left Start============-->
         <div class="col-md-8 col-sm-7 col-xs-12 faq-mobile-margin">
            <div class="row">
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
                     <textarea name="name" cols="1" rows="2" class="form-comment">Comment*</textarea>
                  </div>
                  <div class="col-md-12 form-field">
                     <input name="name" type="button" class="form-submit-btn" value="Submit Now">
                  </div>
               </div>
            </div>
         </div>
         <!--=========Request Left end============-->
         <!--=========Request Right Start============-->
         <div class="col-md-4 col-sm-5  pull-right">
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
         </div>
         <!--=========Request Left end============-->
      </div>
   </div>
</section>
<!--=========Testimonial Start============-->
<section class="testimonial-section">
   <div class="testimonial-rght-head">
      <h2>Testimonial</h2>
   </div>
   <div class="container">
      <div class="col-lg-6 col-md-6 testimonial-left-sidebar">
         <div id="minimal-bootstrap-carousel1" class="home1 carousel slide carousel-horizontal shop-slider full_width testimonial-slider" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
               <div class="item active slide-1" >
                  <div class="testimonial-head">
                     <span class="testi-img"><img src="images/testi-client-img1.png" class="img-responsive img-circle" alt="testimonial-image"></span>
                     <div class="testi-text">
                        <h5>Edward Brown</h5>
                        <span class="testi-designation">Designation</span>
                     </div>
                  </div>
                  <p>" Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                     Consect petur adipiscing elit. "
                  </p>
               </div>
               <div class="item slide-2" >
                  <div class="testimonial-head">
                     <span class="testi-img"><img src="images/testi-client-img2.jpg" class="img-responsive img-circle" alt="testimonial-image"></span>
                     <div class="testi-text">
                        <h5>Gordon Bond</h5>
                        <span class="testi-designation">Designation</span>
                     </div>
                  </div>
                  <p>" Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                     Consect petur adipiscing elit. "
                  </p>
               </div>
               <div class="item slide-3" >
                  <div class="testimonial-head">
                     <span class="testi-img"><img src="images/testi-client-img3.jpg" class="img-responsive img-circle" alt="testimonial-image"></span>
                     <div class="testi-text">
                        <h5>Nathan Gibson</h5>
                        <span class="testi-designation">Designation</span>
                     </div>
                  </div>
                  <p>" Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                     Consect petur adipiscing elit. "
                  </p>
               </div>
            </div>
            <!-- Controls --> 
            <a class="left carousel-control" href="#minimal-bootstrap-carousel1" role="button" data-slide="prev"> <i class="fa fa-angle-left"></i> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#minimal-bootstrap-carousel1" role="button" data-slide="next"> <i class="fa fa-angle-right"></i> <span class="sr-only">Next</span> </a> 
         </div>
      </div>
   </div>
</section>
<!--=========Testimonial end============-->
<section class="pad95-70-top-bottom">
   <div class="container">
       <!--=========Our Client Start============-->
      <div class="row">
         <div class="head-section client-head">
            <div class="col-md-3 col-sm-4 col-xs-12">
               <h3>Our Clients</h3>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
               <p class="fnt-18">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
         </div>
      <div class="client_hover">
         <div class="col-md-2 col-sm-4 col-xs-6">
            <span class="client_img image_hover"> <img src="images/client-logo1.jpg" class="img-responsive zoom_img_effect" alt=""> </span>
         </div>
         <div class="col-md-2 col-sm-4 col-xs-6">
            <span class="client_img image_hover"> <img src="images/client-logo2.jpg " class="img-responsive zoom_img_effect" alt=""> </span>
         </div>
         <div class="col-md-2 col-sm-4 col-xs-6">
            <span class="client_img image_hover"> <img src="images/client-logo3.jpg " class="img-responsive zoom_img_effect" alt=""> </span>
         </div>
         <div class="col-md-2 col-sm-4 col-xs-6">
            <span class="client_img image_hover"> <img src="images/client-logo4.jpg " class="img-responsive zoom_img_effect" alt=""> </span>
         </div>
         <div class="col-md-2 col-sm-4 col-xs-6">
            <span class="client_img image_hover"> <img src="images/client-logo5.jpg " class="img-responsive zoom_img_effect" alt=""> </span>
         </div>
         <div class="col-md-2 col-sm-4 col-xs-6">
            <span class="client_img image_hover"> <img src="images/client-logo6.jpg " class="img-responsive zoom_img_effect" alt=""> </span>
         </div>
      </div>
      </div>
      <!--=========Our Client end============-->
   </div>
</section>
<!--=========Footer Start============-->

<!--=========Footer end============-->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-body">
            <h3>Search</h3>
            <div class="search-form">
               <input type="text" class="search_lightbox_input" placeholder="Search...">
               <input type="text" class="search_lghtbox_btn">
            </div>
         </div>
      </div>
   </div>
</div>