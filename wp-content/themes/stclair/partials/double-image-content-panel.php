<?php if ( have_rows( 'double_image_content_panel' ) ) : ?>
<div class="double-image-content-panel__wrapper">
    <div class="double-image-content-panel__container">
        <?php while ( have_rows( 'double_image_content_panel' ) ) : the_row(); ?>
        <!-- Left side -->
            <div class="double-image-content-panel__left">
                <h2 data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="200" data-aos-duration="550" class="double-image-content-panel__left--heading"><?php the_sub_field( 'heading' ); ?></h2>
                <div data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="650" data-aos-duration="550" class="double-image-content-panel__left--paragraph"><?php the_sub_field( 'paragraph' ); ?></div>
            </div>
        <!-- Right side -->
            <div class="double-image-content-panel__right">
                <?php $large_image = get_sub_field( 'large_image' ); ?>
                <?php if ( $large_image ) { ?>
                    <div class="double-image-content-panel__right--large-image-wrapper">
                        <img  data-aos="fade-up" data-aos-delay="250" data-aos-offset="100" class="double-image-content-panel__right--large-image" src="<?php echo $large_image['url']; ?>" alt="<?php echo $large_image['alt']; ?>" />
                    </div>
                <?php } ?>
                <?php $small_image = get_sub_field( 'small_image' ); ?>
                <?php if ( $small_image ) { ?>
                    <img data-aos="fade-up" data-aos-delay="250" data-aos-offset="100" class="double-image-content-panel__right--small-image" src="<?php echo $small_image['url']; ?>" alt="<?php echo $small_image['alt']; ?>" />
                <?php } ?>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<?php endif; ?>