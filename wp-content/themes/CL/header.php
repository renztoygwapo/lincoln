<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">


<?php wp_head(); ?>
	<link href='https://fonts.googleapis.com/css?family=Martel+Sans:400,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">

</head>

<body <?php body_class('antialiased'); ?>>

<header>

	<div class="show-for-small-only">
		<!-- Starting the Top-Bar -->
		<nav class="top-bar" data-topbar>
		    <ul class="title-area">
		        <li class="name">
		        	<div id="logo">
						<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>
					</div>
		        </li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
		    </ul>
		    <section class="top-bar-section">
		    <?php
		        wp_nav_menu( array(
		            'theme_location' => 'primary',
		            'container' => false,
		            'depth' => 0,
		            'items_wrap' => '<ul class="left">%3$s</ul>',
		            'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
		            'walker' => new reverie_walker( array(
		                'in_top_bar' => true,
		                'item_type' => 'li',
		                'menu_type' => 'main-menu'
		            ) ),
		        ) );
		    ?>
		    </section>
		</nav>
		<!-- End of Top-Bar -->
	</div>

	<div class="show-for-medium-up">
		<div class="container header-wrap">
			<div class="row">
				<!-- Starting the Top-Bar -->
				<div class="medium-3 columns mini-tablet">
					<div id="logo">
						<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>
					</div>
				</div>
				<div class="medium-9 columns mini-tablet">
					<nav class="top-bar" data-topbar>
					    <section class="top-bar-section">

						    <div class="language-select">
						    	<span>EN</span>
						    </div>

						    <?php
						        wp_nav_menu( array(
						            'theme_location' => 'primary',
						            'container' => false,
						            'depth' => 0,
						            'items_wrap' => '<ul class="right">%3$s</ul>',
						            'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
						            'walker' => new reverie_walker( array(
						                'in_top_bar' => true,
						                'item_type' => 'li',
						                'menu_type' => 'main-menu'
						            ) ),
						        ) );
						    ?>
					    </section>
					</nav>
				</div>
				<!-- End of Top-Bar -->
			</div>
		</div>
	</div>
</header>

<!-- Start the main container -->
<div class="main" role="document">
