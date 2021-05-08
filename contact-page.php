<?php

/**
 * Template Name: Contact
 *
 * @package AVtransit
 */

get_header();
require('template-parts/single-hero.php');

?>
<div class="container contact-us-container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4>Contact Us</h4>
            <?= do_shortcode('[contact-form-7 id="63" title="Contact form"]'); ?>
        </div>
    </div>
</div>
<?php
get_footer();
