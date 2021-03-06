<?php

/**



	Template Name: HomePage -3 test

 * The template for displaying pages

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages and that

 * other "pages" on your WordPress site will use a different template.

 *

 * @package WordPress

 * @subpackage Twenty_Fifteen

 * @since Twenty Fifteen 1.0

 */



get_header(); ?>





<!-- hover script !-->

<link href="<?php bloginfo('template_url'); ?>/css/hover.css" rel="stylesheet" media="all">

<!-- eof hover script !-->



 <div class="container" id="hideblk" style="display:none">

		 <div class="row"> 

         <img src="http://www.trinitygroves.com/wp-content/uploads/2016/01/TG_Slide1.jpg" class="img-responsive" alt="trinity grove" />

</div>

</div>

  

 <div id="player" style="display:block;background-color:#0066cc">

 <video id="video1" width="100%" autoplay autoplay="autoplay" loop muted>

  <source src="/video/webvidffff.mp4" type="video/mp4" >

</video>
<script>
    $("video[video1]").each(function(){ this.play(); });
</script>
 </div>

 <style>

  video {

  background-image: url(/video/loading.gif);

  background-repeat: no-repeat;

  background-size: 30px 30px;

  background-position: center;

  }

  .restaurant-icons{

	  height:250px;

	}



	@media (max-width:767px){

	  .restaurant-icons{

	    height:220px;

	   }

	  

	}



	@media (max-width:600px){

	  .restaurant-icons{

	    height:170px;

	   }

	  

	}



	@media (max-width:500px){

	  .restaurant-icons{

	    height:150px;

	   }

	  

	}

	.current-menu-ancestor, .current-menu-parent {

	    color: #000;

	    background-image: none !important;

	}

	.copyright{

	  color:#000;

	}



	.privacy a{

	  color:#000 !important;

	}

  </style>

  

 <div class="blue-band" style="margin-top:0px !important;">

	 <div class="container">

		 <div class="row"> 

        

  

			 <h1 style="text-transform:none;margin-top:0px" class="bannerh1">A unique variety of restaurants <span class="breakmobile"></span>and shops in one destination!</h1>

			 <h3 style="text-transform:none" class="bannerh3">Relaxed atmosphere, great patios, and amazing views of downtown.</h3>

			 <h2  style="text-transform:none" class="bannerh2"><a href="https://www.google.com/maps/place/3011+Gulden+Ln,+Dallas,+TX+75212/@32.779388,-96.830561,17z/data=!3m1!4b1!4m2!3m1!1s0x864e996769e66679:0x4564da83a0d1c3a9" target="_blank"><i class="fa fa-map-marker"></i> Get Me There!</a>  &nbsp;&nbsp;&nbsp;<a href="/tour"><i class="fa fa-eye" style="vertical-align:middle"></i> Virtual Tour</a></h2>

             			 <h3 style="text-transform:none;text-decoration:none;" class="bannerh3"><a href="https://www.google.com/maps/place/3011+Gulden+Ln,+Dallas,+TX+75212/@32.779388,-96.830561,17z/data=!3m1!4b1!4m2!3m1!1s0x864e996769e66679:0x4564da83a0d1c3a9" target="_blank">3011 Gulden Lane, Dallas TX</a></h3>

		 </div>

	 </div>

 </div>

 <!-- eof blue band !-->

 

 <!-- restaurants start here !-->

<div class="restaurants-fp" style="background: url(http://www.trinitygroves.com/wp-content/themes/trinity/img/general/tgbluebg.jpg)no-repeat scroll right top #000000; -o-background-size: contain; -moz-background-size: contain; -webkit-background-size:contain; background-size: contain ;    background-position: bottom;   -webkit-background-size: cover;  -moz-background-size: cover;  -o-background-size: cover;  background-size: cover;">

<div class="container">

	<div class="row">

		

		<!-- restaurant box !-->

		<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-4 restaurant-icons">

			<a href="/restaurants/#Amberjax-Fish-Market-Grille" class="hvr-float-shadow"><img src="<?php bloginfo('template_url'); ?>/img/restaurants/1.png" class="img-responsive"></a><div class="hidedesktop">Amberjax</div>



		</div>

		<!-- eof restaurant box !-->

		

		<!-- restaurant box !-->

		<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-4 restaurant-icons">

			<a href="/restaurants/#Babb-Brothers-BBQ-and-Blues" class="hvr-float-shadow"><img src="<?php bloginfo('template_url'); ?>/img/restaurants/2.png" class="img-responsive"></a><div class="hidedesktop">Babb Bros.</div>

		</div>

		<!-- eof restaurant box !-->

		

		<!-- restaurant box !-->

		<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-4 restaurant-icons">

			<a href="/restaurants/#Beto-and-Son" class="hvr-float-shadow"><img src="http://www.trinitygroves.com/wp-content/uploads/2016/11/beto1.png" class="img-responsive"></a><div class="hidedesktop">Beto & Son</div>

		</div>

		<!-- eof restaurant box !-->

		

		<!-- restaurant box !-->

		<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-4 restaurant-icons">

		<a href="/retail/#CAKE-BAR" class="hvr-float-shadow"><img src="<?php bloginfo('template_url'); ?>/img/restaurants/3.png" class="img-responsive"></a><div class="hidedesktop">Cake Bar</div>

		</div>

		<!-- eof restaurant box !-->

	

   

		<!-- restaurant box 

		<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-4 restaurant-icons">

			<a href="/restaurants/#Casa-Rubia" class="hvr-float-shadow"><img src="<?php bloginfo('template_url'); ?>/img/restaurants/4.png" class="img-responsive"></a><div class="hidedesktop">Casa Rubia</div>

		</div>

		 eof restaurant box !-->

		

		<!-- restaurant box !-->

		<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-4 restaurant-icons">

			<a href="/restaurants/#Chino-Chinatown" class="hvr-float-shadow"><img src="<?php bloginfo('template_url'); ?>/img/restaurants/5.png" class="img-responsive"></a><div class="hidedesktop">Chino Chinatown</div>

		</div>

		<!-- eof restaurant box !-->

		

		<!-- restaurant box !-->

		<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-4 restaurant-icons">

			<a href="/restaurants/#The-Hall-Bar-&-Grill" class="hvr-float-shadow"><img src="<?php bloginfo('template_url'); ?>/img/restaurants/6.png" class="img-responsive"></a><div class="hidedesktop">The Hall</div>

		</div>

		<!-- eof restaurant box !-->

		

		<!-- restaurant box !-->

		<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-4 restaurant-icons">

			<a href="/retail/#Kate-Weiser-Chocolate" class="hvr-float-shadow"><img src="<?php bloginfo('template_url'); ?>/img/restaurants/7.png" class="img-responsive"></a><div class="hidedesktop">Kate Weiser</div>

		</div>

		<!-- eof restaurant box !-->

		

		<!-- restaurant box !-->

		<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-4 restaurant-icons">

			<a href="/restaurants/#LUCK" class="hvr-float-shadow"><img src="<?php bloginfo('template_url'); ?>/img/restaurants/9.png" class="img-responsive"></a><div class="hidedesktop">LUCK</div>

		</div>

		<!-- eof restaurant box !-->

		

		

		<!-- restaurant box !-->

		<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-4 restaurant-icons">

			<a href="/restaurants/#Saint-Rocco’s" class="hvr-float-shadow"><img src="<?php bloginfo('template_url'); ?>/img/restaurants/11.png" class="img-responsive"></a><div class="hidedesktop">Saint-Rocco’s</div>

		</div>

		<!-- eof restaurant box !-->

		<!-- restaurant box !-->

		<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-4 restaurant-icons">

			<a href="/restaurants/#Souk-Mediterranean-Bistro-&#038;-Bar" class="hvr-float-shadow"><img src="<?php bloginfo('template_url'); ?>/img/restaurants/12.png" class="img-responsive"></a><div class="hidedesktop">Souk</div>

		</div>

		<!-- eof restaurant box !-->

        



		

		

		<!-- restaurant box !-->

		<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-4 restaurant-icons">

				<a href="/restaurants/#Sushi-Bayashi" class="hvr-float-shadow"><img src="<?php bloginfo('template_url'); ?>/img/restaurants/13.png" class="img-responsive"></a><div class="hidedesktop">Sushi Bayashi</div>

		</div>

		<!-- eof restaurant box !-->

        

		<!-- restaurant box !-->

		<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-4 restaurant-icons">

			<a href="/restaurants/#Tapas-Castile" class="hvr-float-shadow"><img src="<?php bloginfo('template_url'); ?>/img/restaurants/tapas.png" class="img-responsive"></a><div class="hidedesktop">Tapas Castile</div>

		</div>

		<!-- restaurant box !-->

		<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-4 restaurant-icons">

			<a href="/restaurants/#V-Eats-Modern-Vegan" class="hvr-float-shadow"><img src="<?php bloginfo('template_url'); ?>/img/restaurants/14.png" class="img-responsive"></a><div class="hidedesktop">V Eats</div>

		</div>

		<!-- eof restaurant box !-->

        

		

	</div>

<!-- three logos front page start here !-->





</div>





 <div class="three-logos-fp" >

	<div class="container">

			

			  

<!-- full line !-->

<div class="col-lg-12 ">

    

    <!-- box with content !-->

    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" >

    	<a href="http://www.trinitygroves.com/neighbor/#3015-at-Trinity-Groves"><img src="<?php bloginfo('template_url'); ?>/img/fplogos/2.png" class="img-responsive" style="margin:0 auto"></a>

    </div>

    <!-- eof box with content !-->

    

    <!-- box with content !-->

    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" >

    	<a href="http://trinitygroves.com/neighbors/#The-Network-Bar"><img src="http://trinitygroves.com/wp-content/uploads/2017/09/tnb.png" class="img-responsive"  style="margin:0 auto"></a>

    </div>

    

    <!-- box with content !-->

    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" >

    	<a href="https://www.trinitygroves.com/neighbors/"><img src="<?php bloginfo('template_url'); ?>/img/fplogos/3.png" class="img-responsive" style="margin:0 auto" ></a>

    </div>

    <!-- eof box with content !-->

    

    <!-- box with content !-->

    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" >

    	<a href="http://www.trinitygroves.com/neighbor/#Erin-Cluley-Gallery"><img src="<?php bloginfo('template_url'); ?>/img/fplogos/ecg.png" class="img-responsive" ></a>

    </div>

    <!-- eof box with content !-->

    



</div>

<!-- eof full line !-->

			

        

        

		

	</div>

    

    

</div>



</div>

<!-- slider !-->

   <div class="container" style="background-color:white;">

	   <div class="row">

		   <?php echo do_shortcode('[cycloneslider id="frontpage"]'); ?>

	 

	<h1 class="entry-title" align="center"><span id="events"></span>Events</h1> 

    

        <?php

		// Start the loop.

		while ( have_posts() ) : the_post();



			// Include the page content template.

			the_content();



			



		// End the loop.

		endwhile;

		?>

</div>

</div>

<!-- three logos front page end here !-->



</div>

<!-- restaurants end here !-->



<?php get_footer(); ?>

