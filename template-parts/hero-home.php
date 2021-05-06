<div class="hero" style="background: url(<?php echo the_field('hero_background'); ?>); background-size:cover; background-repeat:no-repeat; background-position:center center;">
    <div class="content">
        <h2><?php echo the_field('hero_title'); ?></h2>
    </div>
    <?php if (have_rows('social_media', 'option')) : ?>

        <ul class="socials">

            <?php while (have_rows('social_media', 'option')) : the_row(); ?>

                <li><a href="<?php the_sub_field('social_media_link'); ?>" target="_blank"><i class="<?php the_sub_field('social_icon'); ?>"></i></a></li>

            <?php endwhile; ?>

        </ul>

    <?php endif; ?>
</div>
<div class="hero-services container">
    <div class="row">
        <?php
        $taxonomies = get_object_taxonomies('services', 'objects');

        foreach ($taxonomies as $taxonomy) {

            $terms = get_terms(array(
                'taxonomy' => $taxonomy->name,
                'hide_empty' => false,
            ));

            foreach ($terms as $term) {
                $image_id = get_term_meta($term->term_id, 'image', true);
                $image_data = wp_get_attachment_image_src($image_id, 'full');
                $image = $image_data[0];
        ?>
                <div class="col-lg-4">
                    <div class="single-service">
                        <div class="img-wrapper">
                            <?php
                            echo '<img src="' . esc_url($image) . '" />';
                            ?>
                        </div>
                        <div class="content">
                            <h3><?php echo $term->name; ?> </h3>
                            <p><?php echo $term->description; ?></p>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
        <div class="col-12 text-center section-description">
            <p>As a Trucking Company we provide more services. <br>
                If you wish to learn more about it click on the button below!
            </p>
            <a href="#">See More</a>
        </div>

    </div>
</div>