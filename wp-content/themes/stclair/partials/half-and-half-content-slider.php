<div class="half-and-half-content-slider__wrapper">
    <!-- Content Half -->
    <?php if ( have_rows( 'content' ) ) : ?>
        <div class="half-and-half-content-slider__content-wrapper">
            <?php while ( have_rows( 'content' ) ) : the_row(); ?>
                <h2 data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="350" data-aos-duration="550" class="half-and-half-content-slider__heading"><?php the_sub_field( 'heading' ); ?></h2>
                <div data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="550" data-aos-duration="800" class="half-and-half-content-slider__paragraph"><?php the_sub_field( 'paragraph' ); ?></div>
                <button data-aos="fade-in" data-aos-easing="ease-in" data-aos-delay="1350" class="half-and-half-content-slider__button stclair-button" onclick="location.href='<?php the_sub_field( 'button_link' ) ?>'" type="button"><?php the_sub_field( 'button_text' ); ?></button>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    <!-- Slider Half -->
    <?php if ( have_rows( 'slider' ) ) : ?>
        <div class="half-and-half-content-slider__slider-wrapper">
        <p class="half-and-half-content-slider__disclaimer">Disclaimer: Room styles vary</p>
            <div class="half-and-half-content-slider__slider-container">
                <?php while ( have_rows( 'slider' ) ) : the_row(); ?>
                    <?php $image_slide = get_sub_field( 'image_slide' ); ?>
                    <?php if ( $image_slide ) { ?>
                        <div>
                            <img class="half-and-half-content-slider__image" src="<?php echo $image_slide['url']; ?>" alt="<?php echo $image_slide['alt']; ?>" />
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
