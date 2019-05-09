<?php /* Template Name: Directions Page Template */ get_header(); ?>

	<main role="main">

        <!-- Hero -->
		<section>
			<?php get_template_part('partials/hero'); ?> 		
		</section>
        <!-- /Hero -->

        <!-- Wysiwyg Editor -->
		<section>
			<?php get_template_part('partials/wysiwyg-editor'); ?> 		
		</section>
		<!-- /Wysiwyg Editor -->
		
		<!-- Map -->
		<section>
			<?php get_template_part('partials/map'); ?> 		
		</section>
        <!-- /Map -->

		<!-- Icon List with Content -->
		<section>
			<?php get_template_part('partials/icon-list-with-content'); ?> 		
		</section>
        <!-- /Icon List with Content -->
        
        <!-- Accordion -->
		<section>
			<?php get_template_part('partials/accordion'); ?> 		
		</section>
		<!-- /Accordion -->

	</main>

<?php get_footer(); ?>
