<?php

/**
 * Template Name: Services
 *
 * @package AVtransit
 */

get_header();
require('template-parts/single-hero.php');
$contentImg = get_field('content_image_about');
?>
<div class="container" id="services-page">
    <div class="row single-row" id="#service-num5">
        <?php
        // WP_Query arguments
        $args = array(
            'post_type'              => array('services'),
            'tax_query' => array(
                array(
                    'taxonomy' => 'service_category',
                    'field' => 'slug',
                    'terms' => 'av-carriers'
                )
            )
        );

        // The Query
        $query = new WP_Query($args); ?>
        <div class="col-12">
            <h1 class="cat-name"> AV Carriers </h1>
        </div> <?php
                // The Loop
                if ($query->have_posts()) {

                    while ($query->have_posts()) {
                        $query->the_post();
                        $thumbnail_id = get_post_thumbnail_id($post->ID);
                        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                ?>
                <div class="col-lg-4 mb-4 mx-auto">
                    <div href="<?= get_permalink(); ?>" class="single-service d-block">
                        <div class="img-wrapper">
                            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= $alt; ?>">
                        </div>
                        <h1><?= get_the_title(); ?></h1>
                        <?= the_content(); ?>
                    </div>
                </div>
            <?php
                    }
                } else { ?>
            <h2 class="comming-soon">Comming soon</h2>
        <?php
                }

                // Restore original Post Data
                wp_reset_postdata();
        ?>

    </div>
    <div class="row single-row" id="#service-num3">
        <?php
        // WP_Query arguments
        $args = array(
            'post_type'              => array('services'),
            'tax_query' => array(
                array(
                    'taxonomy' => 'service_category',
                    'field' => 'slug',
                    'terms' => 'towing-services'
                )
            )
        );

        // The Query
        $query = new WP_Query($args);
        ?>
        <div class="col-12">
            <h1 class="cat-name"> AV Towing Services </h1>
        </div>
        <?php
        // The Loop
        if ($query->have_posts()) {


            while ($query->have_posts()) {
                $query->the_post();
                $thumbnail_id = get_post_thumbnail_id($post->ID);
                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        ?>
                <div class="col-lg-4 mb-4 mx-auto">
                    <div href="<?= get_permalink(); ?>" class="single-service d-block">
                        <div class="img-wrapper">
                            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= $alt; ?>">
                        </div>
                        <h1><?= get_the_title(); ?></h1>
                        <?= the_content(); ?>
                    </div>
                </div>
            <?php
            }
        } else { ?>
            <h2 class="comming-soon">Comming soon</h2>
        <?php
        }

        // Restore original Post Data
        wp_reset_postdata();
        ?>

    </div>
    <div class="row single-row" id="#service-num4">
        <?php
        // WP_Query arguments
        $args = array(
            'post_type'              => array('services'),
            'tax_query' => array(
                array(
                    'taxonomy' => 'service_category',
                    'field' => 'slug',
                    'terms' => 'av-brokerage-and-transit'
                )
            )
        );

        // The Query
        $query = new WP_Query($args);
        ?>
        <div class="col-12">
            <h1 class="cat-name"> AV Brokerage and Transit </h1>
        </div>
        <?php
        // The Loop
        if ($query->have_posts()) {


            while ($query->have_posts()) {
                $query->the_post();
                $thumbnail_id = get_post_thumbnail_id($post->ID);
                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        ?>
                <div class="col-lg-4 mb-4 mx-auto">
                    <div href="<?= get_permalink(); ?>" class="single-service d-block">
                        <div class="img-wrapper">
                            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= $alt; ?>">
                        </div>
                        <h1><?= get_the_title(); ?></h1>
                        <?= the_content(); ?>
                    </div>
                </div>
            <?php
            }
        } else { ?>
            <h2 class="comming-soon">Comming soon</h2>
        <?php
        }

        // Restore original Post Data
        wp_reset_postdata();
        ?>

    </div>
</div>
<?php
get_footer();
