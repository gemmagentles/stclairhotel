
<?php if ( have_rows( 'content_box_overlay' ) ) : ?>
    <?php while ( have_rows( 'content_box_overlay' ) ) : the_row(); ?>
        <div class="content_box_overlay__wrapper">
            <div class="content_box_overlay__text-box">
                <h2 class="content_box_overlay__text-box--heading"><?php the_sub_field( 'heading' ); ?></h2>
                <div class="content_box_overlay__text-box--paragraph"><?php the_sub_field( 'paragraph' ); ?></div>
            </div>
            <?php $image = get_sub_field( 'image' ); ?>
            <?php if ( $image ) { ?>
                <div class="content_box_overlay__image-box">
                    <img class="content_box_overlay__image-box--image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>
            <?php } ?>
        </div>
	<?php endwhile; ?>
<?php endif; ?>