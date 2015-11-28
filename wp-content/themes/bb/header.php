<!DOCTYPE html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="robots" content="index, follow" >
	<meta name="google-site-verification" content="E2DyBhfYTQb0gSWg-dubZ--hVoFc9SQ_KM6-cfZfypE" />
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<link rel="stylesheet"  href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css">
	<link rel="stylesheet"  href="<?php bloginfo( 'template_url' ); ?>/css/main.css">

	<script  src="<?php bloginfo( 'template_url' ); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	




<header id="masthead" class="main-header text-center container-fluid" role="banner">

	<section class="utility-wrap container">
		<div class="row">
			<div class="col-md-3 pull-right text-right mobile-center">
				<ul class="social-links">
					<li><a href="https://twitter.com/7thmanmagazine" target="_blank" title="Follow on Twitter">&#xe086;</a></li>
					<li><a href="http://instagram.com/7thmanmagazine" target="_blank" title="Follow on Instagram">&#xe100;</a></li>
					<li><a href="https://www.facebook.com/7thman"  target="_blank" title="Follow on Facebook">&#xe027;</a></li>
					
					
				
				</ul>
			</div>
			<div class="col-md-6 pull-right mobile-center">
				<h1 class="logo">
					
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</h1>
			</div>
			<div class="col-md-3 text-left mobile-center">
				<div id="search-box-wrapper">
<!-- 					<span class="glyphicon glyphicon-search" id="search-form-toggle"></span> -->
					<span class="glyphicon glyphicon-remove" id="search-form-close"></span>
					<div id="search-box">
						<?php get_search_form(); ?>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	
	



	
	
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
	</nav>



	</header>
<main id="main" class="main container-fluid">