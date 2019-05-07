<?php if ( have_rows( 'icon_list_with_content' ) ) : ?>
<div class="icon-list-with-content__wrapper">
    <?php while ( have_rows( 'icon_list_with_content' ) ) : the_row(); ?>
        <div class="icon-list-with-content__content-wrapper">
			<!-- Heading -->
            <h2 class="icon-list-with-content__heading"><?php the_sub_field( 'heading' ); ?></h2>
            <!-- Paragraph -->
            <div class="icon-list-with-content__paragraph">
                <?php the_sub_field( 'paragraph' ); ?>
            </div>
            <!-- Button -->
            <?php $button_link = get_sub_field( 'button_link' ); ?>
            <?php if ( $button_link ) { ?>
                <button class="icon-list-with-content__button stclair-button" onclick="location.href='<?php echo $button_link['url']; ?>'" type="button"><?php the_sub_field( 'button_text' ); ?></button>
            <?php } ?>
        </div>
		<?php if ( have_rows( 'icon_list' ) ) : ?>
            <div class="icon-list-with-content__icon-list-wrapper">
                <?php while ( have_rows( 'icon_list' ) ) : the_row(); ?>
                    <div class="icon-list-with-content__icon-list-container">
                        <?php $icon = get_sub_field( 'icon' ); ?>
                        <?php if ( $icon ) { ?>
                            <img class="icon-list-with-content__icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                        <?php } ?>
                        <span class="icon-list-with-content__icon--text"><?php the_sub_field( 'text' ); ?></span>
                    </div>                
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            </div>                
		<?php endif; ?>
	<?php endwhile; ?>
</div>                
<div class="icon-list-with-content__background"></div>
<?php endif; ?>
