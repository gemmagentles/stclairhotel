<?php if ( have_rows( 'half_and_half_panel' ) ) : ?>
	<div class="half-and-half-panel__wrapper">
		<?php while ( have_rows( 'half_and_half_panel' ) ) : the_row(); ?>
			<div class="half-and-half-panel__container">
			<div class="half-and-half-panel__inner">
				<div class="half-and-half-panel__text-section">
					<h2><?php the_sub_field( 'heading' ); ?></h2>
					<div class="half-and-half-panel__paragraph">
						<?php the_sub_field( 'paragraph' ); ?>
					</div>
					<?php $list = get_sub_field( 'list' ); ?>
					<?php if ( $list ) { ?>
						<div class="half-and-half-panel__list">
							<?php the_sub_field( 'list' ); ?>
						</div>
					<?php } ?>
					<?php $download_link_file = get_sub_field( 'download_link_file' ); ?>
					<?php if ( $download_link_file ) { ?>
						<a href="<?php echo $download_link_file['url']; ?>"><?php the_sub_field( 'download_link_text' ); ?></a>
					<?php } ?>
					<?php $button_link = get_sub_field( 'button_link' ); ?>
					<?php if ( $button_link ) { ?>
						<button class="half-and-half-panel__button stclair-button" onclick="location.href='<?php echo $button_link['url']; ?>'" type="button"><?php the_sub_field( 'button_text' ); ?></button>
					<?php } ?>
				</div>
				<div class="half-and-half-panel__image-section">
					<?php $image = get_sub_field( 'image' ); ?>
					<?php if ( $image ) { ?>
						<img class="half-and-half-panel__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php } ?>
				</div>
			</div>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>
