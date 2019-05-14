
<div class="cards__wrapper white-cards">
	<div class="cards__container">
		<div class="cards__inner">
		
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- News Cards -->
				<?php get_template_part('partials/news-cards'); ?> 	
			<!-- /News Cards -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			
		</div>
	</div>
</div>
