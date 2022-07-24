<script>
    export let src
</script>

<div class="specialization-cl">
    <div class="special-img image_hover">
       <img {src} class="img-responsive zoom_img_effect" alt="special-image">
    </div>
    <div class="special-text">
    <slot>
        <h3>No title provided</h3>
        <p class="mar-btm20"></p>
        <p>No description provided</p>
    </slot>
    </div>
 </div>