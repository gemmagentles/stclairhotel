<?php if ( have_rows( 'images' ) ) : ?>
<div class="hero-slider__wrapper">
    <div class="hero-slider__content">
        <div class="hero-slider__content--inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/diamond-divider.svg" alt="" class="hero-slider__content--diamond-divider">
            <!-- Logo overlay -->
            <?php $logo = get_field( 'logo' ); ?>
            <?php if ( $logo ) { ?>
                <img class="hero-slider__content--logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
            <?php } ?>
            <!-- Text overlay -->
            <?php $heading = get_field( 'heading' ); ?>
            <?php if ( $heading ) { ?>
                <h1 class="hero-slider__content--heading"><?php the_field( 'heading' ); ?></h1>
            <?php } ?>
            <p class="hero-slider__content--text"><?php the_field( 'text' ); ?></p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/diamond-divider.svg" alt="" class="hero-slider__content--diamond-divider">
        </div>
    </div>
    <div class="hero-slider">
        <?php while ( have_rows( 'images' ) ) : the_row(); ?>
            <?php $slide_image = get_sub_field( 'slide_image' ); ?>
            <?php if ( $slide_image ) { ?>
                <div>
                    <img class="hero-slider__image" src="<?php echo $slide_image['url']; ?>" alt="<?php echo $slide_image['alt']; ?>" />
                </div>
            <?php } ?>
        <?php endwhile; ?>
    </div>
</div>
<img src="<?php echo get_template_directory_uri(); ?>/img/watercolour-header.jpg" alt="" class="hero-slider__watercolor">
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>