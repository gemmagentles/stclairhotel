<div class="accordion__wrapper">
	<div class="accordion__container">
		<h2><?php the_field( 'accordion_heading' ); ?></h2>

		<?php if ( have_rows( 'accordion_content' ) ) : ?>
			<?php while ( have_rows( 'accordion_content' ) ) : the_row(); ?>

			<!-- button to click on to open accordion -->
			<button class="accordion__button accordion-js"><?php the_sub_field( 'title' ); ?></button>
				
			<!-- content inside accordion -->
			<div class="accordion__content">
				<div class="accordion__inner">
					<?php the_sub_field( 'text_inside' ); ?>
				</div>
			</div>

			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	</div>
</div>
