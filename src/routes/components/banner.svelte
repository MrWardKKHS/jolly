<script>
    export let title
    export let filename = title.toLowerCase()
</script>

<div class="inner-pages-bnr">
    <img src="images/{filename}-banner.jpg" class="img-responsive" alt="{title}-banner-image">
    <div class="banner-caption">
       <h1>{title}</h1>
       <ul class="breadcumb">
          <li><a href="\">Home</a> - </li>
          <li>{title}</li>
       </ul>
    </div>
 </div>

<style>
 .carousel-caption h1{
     font-size:65px;
     color:#fff;
     font-weight:300;
     font-family: 'Open Sans', sans-serif;
     margin-bottom:25px;
     text-transform:none;
}
 .carousel-caption h1 span{
     font-weight:700;
}
 .carousel-caption p{
     font-size:20px;
     color:#fff;
     line-height:35px;
     margin-bottom:25px;
}
 a.header-requestbtn.learn-more{
     padding:14px 10px;
     float:left;
     margin-right:10px;
     width:185px;
     font-size:17px;
     text-align:center;
     background:#f2ae2b;
     color:#000;
}
 a.header-requestbtn.learn-more:before{
     background:#fff;
}
 a.header-requestbtn.learn-more.our-solution{
     background:#fff;
     margin-right:0px;
     color:#000;
}
 a.header-requestbtn.learn-more.our-solution:before{
     background:#000;
}
 a.header-requestbtn.learn-more.our-solution:hover{
     color:#fff;
}
 a.header-requestbtn.learn-more.btn-center{
     float:none;
     display:inline-block;
}

</style>