<script>
    export let name
    export let testimony = "Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor."
    export let filename = "client-img1.jpg"
</script>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 client-testimonial">
    <span class="client-img"> <img src="images/{filename}" class="img-responsive" alt="client-image"></span>
    <div class="client-desc">
       <p>{testimony}</p>
       <span class="client-name">- {name}</span>
    </div>
 </div>