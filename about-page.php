<?php

/**
 * Template Name: About us
 *
 * @package AVtransit
 */

get_header();
require('template-parts/single-hero.php');
$contentImg = get_field('content_image_about');
?>
<div class="container-fluid about-us-container">
    <div class="row">
        <div class="col-lg-6">
            <div class="content">
                <h3><?= the_field('content_title_about'); ?></h3>
                <?= the_field('content_about'); ?>
            </div>
        </div>
        <div class="col-lg-6 img-col" style="background:url('<?php echo esc_url($contentImg['url']); ?>'); background-size:cover;
        background-position:center; background-repeat:no-repeat;">
            <h4>asdasd</h4>
        </div>
    </div>
</div>
<?php
get_footer();
