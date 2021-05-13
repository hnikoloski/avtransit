<?php

/**
 * Template Name: Homepage
 *
 * @package AVtransit
 */

get_header();

?>

<?php
require('template-parts/hero-home.php');
require('template-parts/main-services.php');
require('template-parts/why-section.php');
require('template-parts/cta-section.php');
require('template-parts/cta-text.php');
require('template-parts/geo-map.php');
require('template-parts/newsletter.php');
?>

<?php
get_footer();
