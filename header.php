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

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header container-fluid">
			<div class="row">

				<div class="col-12 nav-wrapper">
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
				</div>
			</div>

		</header><!-- #masthead -->