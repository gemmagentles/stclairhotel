<?php /* Template Name: Directions Page Template */ get_header(); ?>

	<main role="main">

        <!-- Map -->
		<section>
			<?php get_template_part('partials/map'); ?> 		
		</section>
        <!-- /Map -->

        <!-- Wysiwyg Editor -->
		<section>
			<?php get_template_part('partials/wysiwyg-editor'); ?> 		
		</section>
		<!-- /Wysiwyg Editor -->
		
		<!-- Icon List with Content -->
		<section>
			<?php get_template_part('partials/icon-list-with-content'); ?> 		
		</section>
        <!-- /Icon List with Content -->
        
		<?php if ( have_rows( 'accordion_content' ) ) : ?>
			<?php while ( have_rows( 'accordion_content' ) ) : the_row(); ?>
				<!-- Accordion -->
				<section>
					<?php get_template_part('partials/accordion'); ?> 		
				</section>
				<!-- /Accordion -->
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>

	</main>

<?php get_footer(); ?>
