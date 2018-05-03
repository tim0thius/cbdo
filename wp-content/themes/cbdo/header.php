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
				<div class="grid__item nine-tenths desk--one-third">
					<div id="block-header__branding">
						<a href="<?php echo site_url(); ?>">
							<img src="/wp-content/themes/cbdo/assets/images/logo.svg" alt="Official Website of Christopher Brown DO">
						</a>
					</div>	
				</div><!-- 
				 --><div class="grid__item one-tenth desk--two-thirds">
					<nav id="block-header--menu" role="navigation">
						<!-- <div id="search">
						<?php //get_search_form(); ?>
						</div> -->
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
						<a class="block-header__close-menu-button action--hide-menu">X</a>
					</nav>
					<a  class="block-header__open-menu-button action--show-menu"><img src="/wp-content/themes/cbdo/assets/images/menu.svg" alt=""></a>
				</div>
			</div>
		</div>
    </header>
<div id="container">