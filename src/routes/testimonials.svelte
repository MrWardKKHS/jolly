<script>
   import Banner from "./components/banner.svelte";
   import Base from "./components/base.svelte";
   import Footer from "./components/footer.svelte";
   import Testimonial from "./components/testimonial.svelte";
</script>
<Base/>
<Banner title="Testimonials" filename="testimonial"/>
      <!--=========Banner end============-->
      <!--=========Client Section Start============-->
      <section class="pad100-85-top-bottom">
         <div class="container">
            <div class="row ">
               <div class="head-section other-heading">
                  <div class="col-md-5 col-sm-4 col-xs-12">
                     <h3>WHAT OUR CLIENT SAYS</h3>
                  </div>
                  <div class="col-md-7 col-sm-8 col-xs-12">
                     <p class="fnt-18">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia. Donec ullamcorper nulla non metus auctor fringilla.</p>
                  </div>
               </div>
               <Testimonial name="Brian"/>
               <Testimonial name="Susan Someone"/>
               <Testimonial name="The Queen"/>
               <Testimonial name="Jimmy Jackson"/>
               <Testimonial name="Dave"/>
            </div>
         </div>
      </section>
      <!--=========Client Section end============-->
<Footer/>