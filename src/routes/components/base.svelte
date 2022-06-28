<script>
import Header from "./header.svelte";

</script>
<svelte:head>
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive-style.css" rel="stylesheet">
	<link href="css/effect_style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/responsive_bootstrap_carousel.css" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/set1.css" />
	<title>Svelte app</title>
	<link rel='icon' type='image/png' href='/favicon.png'>
</svelte:head>

<main>
    <Header/>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script defer src="js/jquery.min.js"></script> 
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script defer src="js/bootstrap.min.js"></script> 
	<script defer src="js/jquery.touchSwipe.min.js"></script> 
	<script defer src="js/responsive_bootstrap_carousel.js"></script> 
	<script defer src="js/custom.js"></script>
	<script defer src="js/theme.js"></script>
	<script defer src="js/slick.js"></script>
</main>
