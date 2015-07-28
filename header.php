<!doctype html>
<html <?php language_attributes(); ?>>
<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="initial-scale=1">
		<meta name="robots" content="noindex, nofollow" />
		<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

		<!-- Remy Sharp Shim -->
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		 <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" type="text/css" media="all" />
		 <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.ico" type="image/x-icon">
	    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.ico" type="image/x-icon">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php /*?> Always have wp_head() inside the </head> tag
	   of your theme. Many plugins use this hook to add elements
		to <head> such as styles, scripts, and meta tags.
	  <?php */?>

     <?php wp_head(); ?>


</head>
 <body <?php body_class(); ?>>

		<div id="wrapper">  <!--opening #wrapper-->
<header>
				<div id="innerheader">
					<h1>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.gif" alt="mahilet logo" id="logo"/>
						<!-- for screen readers -->
							<span class="hidden">Portfolio and resume of Mahilet Hailemariam</span></a>
			        </h1>
			       <span id="my-name">ahilet Hailemariam</span> 
				</div>
				
			<!-- innerheader -->

					
						<!--  <?php get_search_form(); ?> -->
			     	<div id="search2"><?php get_search_form(); ?></div>
					 	

				       <div id = "socialmedia"><!--open #socialmedia-->

				       	<?php wp_nav_menu( array(
									'theme_location' => 'social-menu' ,
									'menu' => 'Social Menu' ,
									'container'  => 'ul',
									

									) ); ?>
		 				
					 </div><!--/#socialmedia-->


</header>
					 
				<!-- START NAVIGATION-->
				<nav id="nav-main">
			        <?php wp_nav_menu( array(
									'theme_location' => 'main-menu' ,
									'menu' => 'Main Menu' ,
									'container'  => 'ul',

									) ); ?>

			    </nav>
<!-- END NAVIGATION -->

			<div id ="main"><!--opening #main-->

				
