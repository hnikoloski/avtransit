<?php

/**
 * Template Name: Careers
 *
 * @package AVtransit
 */

get_header();
require('template-parts/single-hero.php');

?>
<div class="container" id="careers-page">
    <div class="row">
        <div class="col-12 content">
            <?= the_content(); ?>
        </div>
        <div class="col-12 mt-5">
            <h2 class="title text-center">Job Positions:</h2>
        </div>
    </div>
    <?php if (have_rows('job_positions_repeater')) { ?>
        <div class="row">


            <?php while (have_rows('job_positions_repeater')) : the_row(); ?>
                <div class="single-job">

                    <h3><?php echo the_sub_field('job_title'); ?></h3>
                    <?=
                    the_sub_field('job_description'); ?>

                </div>
            <?php endwhile; ?>

        </div>
    <?php } else { ?>
        <div class="row error-field">

            <h2 class="text-center">No possitions available at the moment.</h2>
        </div>
    <?php }; ?>
</div>
<?php
get_footer();
