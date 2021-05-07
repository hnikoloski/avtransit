<div id="why-section" class="container my-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="img-wrapper">
                <img src="<?php echo the_field('why_section_image'); ?>" alt="Trucks Images" class="img-fluid decoration-img">
            </div>
        </div>
        <div class="col-lg-6">
            <h4 class="section-title"><?php echo the_field('why_section_title'); ?></h4>
            <div class="cta-box text-end">
                <?php echo the_field('cta_box_first'); ?>
                <a href="<?php echo the_field('cta_box_first_link'); ?>" class="av-btn ml-auto"><span>Call Now!</span></a>
            </div>
            <div class="cta-box text-start">
                <?php echo the_field('cta_box_second'); ?>
                <a href="<?php echo the_field('cta_box_second_link'); ?>" class="av-btn"><span>EASY APPLY!</span></a>
            </div>
        </div>
    </div>
</div>