<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AVtransit
 */
$custom_logo_id = get_theme_mod('custom_logo');
$logoUrl = wp_get_attachment_image_src($custom_logo_id, 'full');
?>
<div id="to-top-btn">
    <a href="#top">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
<footer id="colophon" class="site-footer main-footer">
    <div class="container">
        <div class="row h-100">
            <div class="col-lg-6 my-auto">
                <a href="/" class="logo-wrapper">
                    <img src="<?php echo $logoUrl[0]; ?>" alt="Website Site Logo" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-6 my-auto">
                <?= the_field('footer_info', 'option'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="socials d-flex">

                    <?php while (have_rows('social_media', 'option')) : the_row(); ?>

                        <li><a href="<?php the_sub_field('social_media_link'); ?>" target="_blank"><i class="<?php the_sub_field('social_icon'); ?>"></i></a></li>

                    <?php endwhile; ?>

                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5" id="copy-bar">
        <div class="row">
            <div class="col-12">
                <p><i class="far fa-copyright"></i> <?= get_bloginfo('name'); ?> - <span id="currentYear">
                        <script>
                            document.getElementById('currentYear').appendChild(document.createTextNode(new Date().getFullYear()))
                        </script>
                    </span></p>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>