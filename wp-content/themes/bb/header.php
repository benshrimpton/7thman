<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	
	<meta name="robots" content="noindex, nofollow" >
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<link rel="stylesheet"  href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css">
	<link rel="stylesheet"  href="<?php bloginfo( 'template_url' ); ?>/css/main.css">

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- <iframe src="http://bbdev.co/harrywinston/secrets/" style="width:970px; height: 250px; margin: 0 auto; display: block; "></iframe> -->

<section class="latest-issue-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2>SEVENTH MAN ISSUE 8</h2>
				<p>Buy Seventh Man issue 8 now</p>
			</div>
			<div class="col-md-4">
				<a href=""><img src="http://7mwp.bbdev.co/7ThMan_issue_8-1.png" class="img-block"></a>
			</div>
		</div>
	</div>
</section>
<header id="masthead" class="main-header text-center container-fluid" role="banner">




	<section class="utility-wrap container">
		<div class="row">
			<div class="col-md-3 pull-right text-right">
				<ul class="social-links">
					<li><a href="#">&#xe086;</a></li>
					<li><a href="#">&#xe100;</a></li>
					<li><a href="#">&#xe027;</a></li>
				</ul>
			</div>
			<div class="col-md-6 pull-right">
				<small class="logo-sub">the official</small>
				<h1 class="logo">
					
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</h1>
			</div>
			<div class="col-md-3 text-left">
				<div id="search-box-wrapper">
<!-- 					<span class="glyphicon glyphicon-search" id="search-form-toggle"></span> -->
					<span class="glyphicon glyphicon-remove" id="search-form-close"></span>
					<div id="search-box">
						<?php get_search_form(); ?>
					</div>
				</div>
				<a href="">Subscribe</a>
			</div>
		</div>
	</section>

	
	



	
	
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
	</nav>



	</header>
<main id="main" class="main container-fluid">