<?php if ( have_rows( 'background_image_content_panel' ) ) : ?>
<div class="background-image-content-panel__wrapper">
    <div class="background-image-content-panel__container">
        <?php while ( have_rows( 'background_image_content_panel' ) ) : the_row(); ?>
            <p class="background-image-content-panel__subheading"><?php the_sub_field( 'sub_heading' ); ?></p>
            <h2 class="background-image-content-panel__heading"><?php the_sub_field( 'heading' ); ?></h2>
            <div class="background-image-content-panel__paragraph"><?php the_sub_field( 'paragraph' ); ?></div>
            <button class="background-image-content-panel__button stclair-button" onclick="location.href='<?php the_sub_field( 'button_link' ) ?>'" type="button"><?php the_sub_field( 'button_text' ); ?></button>
        <?php endwhile; ?>
    </div>
</div>
<?php endif; ?>