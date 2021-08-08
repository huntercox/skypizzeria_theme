<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title(''); ?></title>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="iaNS7Pez"></script>

	<!-- START: Grid-Layout -->
		<div class="grid-container">

		<header class="header" role="banner">
			<?php
				if ( is_front_page() ):
					echo '<h1 id="logo"><a href="'.home_url().'" rel="nofollow">Sky Pizzeria</a></h1>';
				else:
					echo '<p id="logo"><a href="'.home_url().'" rel="nofollow">Sky Pizzeria</a></p>';
				endif;

			?>

			<?php
				// $phone = get_field('phone_number', 'option');
				// echo '<a class="phone" href="'.$phone.'">'.$phone.'</a>';
			?>

			<img class="pizza-icon" src="<?php echo get_template_directory_uri().'/assets/img/pizza-icon.png';?>"/>

			<div class="header__bar">
				<?php
					$hours = get_field('hours', 'option');
					echo '<p class="hours">'.$hours.'</p>';
				?>
			</div><!-- /.header__bar -->

			<!-- <button class="hamburger hamburger--spin" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button> -->

			<!-- <nav id="navMenu" role="navigation"> -->
				<?php
					// wp_nav_menu(
					// 	array(
					// 		'menu' => 'header-menu',
					// 		'container' => 'ul'
					// 	)
					// );
				?>
			<!-- </nav> -->
		</header>

		<main id="main" role="main">