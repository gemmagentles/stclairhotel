<?php if ( have_rows( 'images' ) ) : ?>
<div class="hero-slider__wrapper">
    <div class="hero-slider__content">
        <div class="hero-slider__content--inner" data-aos="fade-up">
            <!-- Logo overlay -->
            <?php $logo = get_field( 'logo' ); ?>
            <?php if ( $logo ) { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/diamond-divider.svg" alt="" class="hero-slider__content--diamond-divider">
                <img class="hero-slider__content--logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/diamond-divider.svg" alt="" class="hero-slider__content--diamond-divider">
            <?php } ?>
            <!-- Text overlay -->
            <?php $heading = get_field( 'heading' ); ?>
            <?php if ( $heading ) { ?>
                <h1 class="hero-slider__content--heading"><?php the_field( 'heading' ); ?></h1>
            <?php } ?>
            <?php $subheading = get_field( 'sub_heading' ); ?>
            <?php if ( $subheading ) { ?>
                <h2 class="hero-slider__content--sub-heading"><?php the_field( 'sub_heading' ); ?></h2>
            <?php } ?>
            <?php $paragraph = get_field( 'text' ); ?>
            <?php if ( $paragraph ) { ?>
                <p class="hero-slider__content--text"><?php the_field( 'text' ); ?></p>
            <?php } ?>
        </div>
    </div>
    <div class="hero-slider__overlay"></div>
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
<div class="hero-slider__watercolor-wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/img/watercolour-header.jpg" alt="" class="hero-slider__watercolor">
</div>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>