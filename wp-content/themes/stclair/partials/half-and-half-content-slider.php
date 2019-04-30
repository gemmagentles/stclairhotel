<div class="half-and-half-content-slider__wrapper">
    <!-- Content Half -->
    <?php if ( have_rows( 'content' ) ) : ?>
        <div class="half-and-half-content-slider__content-wrapper">
            <?php while ( have_rows( 'content' ) ) : the_row(); ?>
                <h2 class="half-and-half-content-slider__heading"><?php the_sub_field( 'heading' ); ?></h2>
                <div class="half-and-half-content-slider__paragraph"><?php the_sub_field( 'paragraph' ); ?></div>
                <button class="half-and-half-content-slider__button stclair-button" onclick="location.href='<?php the_sub_field( 'button_link' ) ?>'" type="button"><?php the_sub_field( 'button_text' ); ?></button>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    <!-- Slider Half -->
    <?php if ( have_rows( 'slider' ) ) : ?>
        <div class="half-and-half-content-slider__slider-wrapper">
            <div class="half-and-half-content-slider__slider-container">
                <?php while ( have_rows( 'slider' ) ) : the_row(); ?>
                    <?php $image_slide = get_sub_field( 'image_slide' ); ?>
                    <?php if ( $image_slide ) { ?>
                        <div>
                            <img src="<?php echo $image_slide['url']; ?>" alt="<?php echo $image_slide['alt']; ?>" />
                        </div>
                    <?php } ?>
                <?php endwhile; ?>
            </div>
            <div class="half-and-half-content-slider__progress-nav">
                <!-- check how many slides there are to add the number in the progress bar end -->
                <?php $count = count(get_field( 'slider' )); ?>
                <span class="half-and-half-content-slider__progress-nav--current-number">0<?php echo get_row_index(); ?></span><div class="half-and-half-content-slider__progress-nav--line"><span></span></div><span class="half-and-half-content-slider__progress-nav--total-number">0<?php echo $count; ?></span>
            </div>
        </div>
    <?php else : ?>
        <?php // no rows found ?>
    <?php endif; ?>
</div>
