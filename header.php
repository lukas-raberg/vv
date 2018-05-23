<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />

<!--		<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Playfair+Display:700|Space+Mono:400,700" rel="stylesheet"> -->
		<script src="http://localhost:38200/wp-content/themes/vegoveckan/js/menu.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>

	<header id="navigation" role="">
		<a href="../../"><div class="logo"></div></a>
			<button onclick="myFunction()" class="dropbtn">☰</button>
		
			<div id="myDropdown" class="dropdown-content">
				<nav id="menu" role="navigation" class="mono bold black">
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				</nav>
			</div>
	</header>