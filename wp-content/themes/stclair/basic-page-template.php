<?php /* Template Name: Basic Page Template */ get_header(); ?>

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

	</main>

<?php get_footer(); ?>