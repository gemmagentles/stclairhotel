<?php /* Template Name: Gallery Page Template */ get_header(); ?>

	<main role="main">

        <!-- Hero Slider -->
		<section>
			<?php get_template_part('partials/hero-slider'); ?> 		
		</section>
        <!-- /Hero Slider -->

        <!-- Photo Gallery -->
		<section>
			<?php get_template_part('partials/photo-gallery'); ?> 		
		</section>
		<!-- /Photo Gallery -->

	</main>

<?php get_footer(); ?>
