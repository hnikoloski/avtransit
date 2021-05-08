<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AVtransit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<?php
$custom_logo_id = get_theme_mod('custom_logo');
$logoUrl = wp_get_attachment_image_src($custom_logo_id, 'full');
?>

<body id="top" <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="loader-wrapper">
		<div class="truck-wrapper">
			<div class="truck">
				<div class="truck-container"></div>
				<div class="glases"></div>
				<div class="bonet"></div>

				<div class="base"></div>

				<div class="base-aux"></div>
				<div class="wheel-back"></div>
				<div class="wheel-front"></div>

				<div class="smoke"></div>
			</div>
		</div>
	</div>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<a href="/" class="logo-wrapper">
				<img src="<?php echo $logoUrl[0]; ?>" alt="Website Site Logo" class="img-fluid">
			</a>
			<nav id="site-navigation" class="main-navigation mx-auto">
				<div class="mobile-trigger">
					<a href="#" id="burger-icon">
						<span></span>
						<span></span>
						<span></span>
					</a>
				</div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<div class="nav-cta">
				<a href="#" class="av-btn"><span>Call Now!</span></a>
			</div>
		</header><!-- #masthead -->
		<div class="backdrop overflow-hidden"></div>
		<div id="mobile-menu">
			<div class="close-wrapper">
				<a href="#">&times;</a>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',

				)
			);
			?>
			<a href="#" class="av-btn"><span>Call Now!</span></a>
			<ul class="socials d-flex">

				<?php while (have_rows('social_media', 'option')) : the_row(); ?>

					<li><a href="<?php the_sub_field('social_media_link'); ?>" target="_blank"><i class="<?php the_sub_field('social_icon'); ?>"></i></a></li>

				<?php endwhile; ?>

			</ul>
		</div>