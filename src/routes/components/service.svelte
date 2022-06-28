<script>
    export let href
    export let title
    export let icon
    let iconPath = `/images/home1-images/${icon}.png`
</script>

<div class="col-md-4 col-sm-6 col-xs-12 service-column text-center">
    <a href={href}>
       <span class="icons service-icon" style="background:url({iconPath}) no-repeat 0px 0px;"></span>
       <h5>{title}</h5>
       <p class="line-height26 marbtm20"><slot>No content was <span>provided</span>. Enter some now.</slot></p>
       <span class="read-more-link">Read More</span>
    </a>
 </div>

 <style>
.head-section p{
     border-left:1px solid #838383;
     padding:4px 41px;
}
 .service-column{
     padding:30px 15px;
     transition: all .3s ease-out;
     float:left;
}
 .service-column .icons{
     width:78px;
     height:78px;
     display:inline-block;
}
 .service-column h5{
     font-size:16px;
     margin:5px 0px 20px;
}
 .service-column p span{
     font-weight:700;
}
 .service-column:hover{
     background:#f2ae2b;
     transition: all .3s ease-in;
}
 .service-column:hover a{
     text-decoration:none;
}
 .service-column:hover p, .service-column:hover h5, .service-column:hover .read-more-link{
     color:#000;
}
</style>