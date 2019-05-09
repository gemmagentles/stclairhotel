<?php if ( have_rows( 'button' ) ) : ?>
	<?php while ( have_rows( 'button' ) ) : the_row(); ?>
        <button class="stclair-button" target="_blank" onclick="window.open('<?php the_sub_field( 'button_link' ); ?>','_blank')" type="button"><?php the_sub_field( 'button_text' ); ?></button>
	<?php endwhile; ?>
<?php endif; ?>