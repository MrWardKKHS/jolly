<script>
    export let href
    export let img
    export let active = false
</script>

<div class="item" class:active="{active==='true'}">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 img pad_zero ">
    <div class="image-zoom-on-hover">
    <div class="gal-item">
       <a class="black-hover" {href}>
          <img class="img-full img-responsive" src="images/home1-images/{img}" alt="Project1">
          <div class="tour-layer delay-1"></div>
          <div class="vertical-align">
                <div class="border">
                <h5><slot>No title</slot></h5>
                </div>
                <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
          </div>
       </a>
       </div>
    </div>
    </div>
 </div>