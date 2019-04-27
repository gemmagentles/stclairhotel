<?php if ( have_rows( 'highlight_slides' ) ) : ?>
<div class="highlight-slider__wrapper">
    <div class="highlight-slider">
        <?php while ( have_rows( 'highlight_slides' ) ) : the_row(); ?>
            <?php $slide_image = get_sub_field( 'slide_image' ); ?>
            <?php if ( $slide_image ) { ?>
                <div>
                    <div class="highlight-slider__info">
                        <h4 class="highlight-slider__info--title"><?php the_field( 'caption' ); ?></h4>
                        <div class="highlight-slider__progress-nav">
                            <!-- <div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"><button data-controls="prev" tabindex="-1" aria-controls="tns2">prev</button><button data-controls="next" tabindex="-1" aria-controls="tns2">next</button></div> -->
                            <!-- check how many slides there are to add the number in the progress bar end -->
                            <?php $count = count(get_field( 'highlight_slides' )); ?>
                            <span class="highlight-slider__progress-nav--current-number">0<?php echo get_row_index(); ?></span><div class="highlight-slider__progress-nav--line"><span></span></div><span class="highlight-slider__progress-nav--total-number">0<?php echo $count; ?></span>
                        </div>
                    </div>
                    <img class="highlight-slider__slide-image" src="<?php echo $slide_image['url']; ?>" alt="<?php echo $slide_image['alt']; ?>" />
                </div>
            <?php } ?>
        <?php endwhile; ?>
    </div>
</div>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>