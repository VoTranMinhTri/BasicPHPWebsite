<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Aditii Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link href=<?php echo $level.CSS_Path."style.css"?> rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src=<?php echo $level.JS_Path."jquery.min.js"?>></script>
<!-- start slider -->		
	<link href=<?php echo $level.CSS_Path."slider.css"?> rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src=<?php echo $level.JS_Path."modernizr.custom.28468.js"?>></script>
	<script type="text/javascript" src=<?php echo $level.JS_Path."jquery.cslider.js"?>></script>
	<script type="text/javascript">
		$(function() {
			$('#da-slider').cslider();
		});
	</script>
		<!-- Owl Carousel Assets -->
		<link href=<?php echo $level.CSS_Path."owl.carousel.css"?> rel="stylesheet">
		     <!-- Owl Carousel Assets -->
		    <!-- Prettify -->
		    <script src=<?php echo $level.JS_Path."owl.carousel.js"?>></script>
		        <script>
		    $(document).ready(function() {
		
		      $("#owl-demo").owlCarousel({
		        items : 4,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : false,
			    scrollPerPage : false,
			    pagination : false,
    			paginationNumbers: false,
		      });
		
		    });
		    </script>
		   <!-- //Owl Carousel Assets -->
		<!-- start top_js_button -->
		<script type="text/javascript" src=<?php echo $level.JS_Path."move-top.js"?>></script>
		<script type="text/javascript" src=<?php echo $level.JS_Path."easing.js"?>></script>
		   <script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
					});
				});
			</script>
			
			<!-- Fontfaces CSS-->
    <link href="<?php echo $level.DIST_Path."css/font-face.css"?>" rel="stylesheet" media="all">
    <link href="<?php echo $level.PG_Path."font-awesome-4.7/css/font-awesome.min.css"?>" rel="stylesheet" media="all">
    <link href="<?php echo $level.PG_Path."font-awesome-5/css/fontawesome-all.min.css"?>" rel="stylesheet" media="all">
    <link href="<?php echo $level.PG_Path."mdi-font/css/material-design-iconic-font.min.css"?>" rel="stylesheet" media="all">

  
</head>