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
?>

<?php
get_footer();
