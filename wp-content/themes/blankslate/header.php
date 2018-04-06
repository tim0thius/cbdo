<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
	<header class="section section--contained" id="block-header" role="banner">
		<div id="block-header__inner" class="section__inner">
			<div class="grid grid--full">
				<div class="grid__item one-whole desk--one-quarter">
					<div id="block-header__branding">
						<img src="wp-content/themes/blankslate/assets/images/logo.svg" alt="">
					</div>	
				</div><!-- 
				 --><div class="grid__item one-whole desk--three-quarters">
					<nav id="block-header--menu" role="navigation">
						<!-- <div id="search">
						<?php //get_search_form(); ?>
						</div> -->
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					</nav>
				</div>
			</div>
		</div>
    </header>
<div id="container">