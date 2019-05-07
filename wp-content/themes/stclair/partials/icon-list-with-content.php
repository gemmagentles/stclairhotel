<?php if ( have_rows( 'icon_list_with_content' ) ) : ?>
	<?php while ( have_rows( 'icon_list_with_content' ) ) : the_row(); ?>
		<?php the_sub_field( 'heading' ); ?>
		<?php the_sub_field( 'paragraph' ); ?>
		<?php the_sub_field( 'button_text' ); ?>
		<?php $button_link = get_sub_field( 'button_link' ); ?>
		<?php if ( $button_link ) { ?>
			<a href="<?php echo $button_link['url']; ?>" target="<?php echo $button_link['target']; ?>"><?php echo $button_link['title']; ?></a>
		<?php } ?>
		<?php if ( have_rows( 'icon_list' ) ) : ?>
			<?php while ( have_rows( 'icon_list' ) ) : the_row(); ?>
				<?php $icon = get_sub_field( 'icon' ); ?>
				<?php if ( $icon ) { ?>
					<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
				<?php } ?>
				<?php the_sub_field( 'text' ); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>