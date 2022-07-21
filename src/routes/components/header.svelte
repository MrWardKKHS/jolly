<script>
    import Nav from "./nav.svelte";
</script>

<header class="header1">
    <div class="container">
       <div class="row ">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 display-block ">
             <a href="\" class="logo"><img src="images/logo.png" class="img-responsive" alt="logo"></a>
          </div>
          <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12 pull-right">
             <ul class="header-info">
                <li class="address">121 Hihi Road, <br/> Hihi, New Zealand</li>
                <li class="phn">+64 (21) 678-902<br/><a href="mailto:info@indofact.com">info@jollydiggers.com</a></li>
             </ul>
             <div class="mob-social display-none">
                <div class="header-socials "> 
                   <a href="\" ><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                   <a href="\" ><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                   <a href="\" ><i class="fa fa-youtube" aria-hidden="true"></i></a> 
                   <a href="\" ><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
                </div>
             </div>
             <span class="display-block">
             <a class="header-requestbtn hvr-bounce-to-right " href="request-quote">Request A Quote</a>
             </span>
          </div>
       </div>
    </div>
    <Nav/>
 </header>

 <style>
@media only screen and (max-width: 767px) {
	.header-socials {
      display: none;
   }
}
 </style>