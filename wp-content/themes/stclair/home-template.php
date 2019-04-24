<?php /* Template Name: Home Page Template */ get_header(); ?>

	<main role="main">
		<!-- Hero Slider -->
		<section>
			<?php get_template_part('partials/hero-slider'); ?> 		
		</section>
		<!-- /Hero Slider -->

		<!-- Intro Block Slider -->
		<section>
			<?php get_template_part('partials/intro-block'); ?> 		
		</section>
		<!-- /Intro Block Slider -->

		<!-- Double Image Content Panel Slider -->
		<section>
			<?php get_template_part('partials/double-image-content-panel'); ?> 		
		</section>
		<!-- /Double Image Content Panel Slider -->

		<!-- Background Image Content Panel Slider -->
		<section>
			<?php get_template_part('partials/background-image-content-panel'); ?> 		
		</section>
		<!-- /Background Image Content Panel Slider -->

		<!-- Half and Half Panel -->
		<section>
			<?php get_template_part('partials/half-and-half-panel'); ?> 		
		</section>
		<!-- /Half and Half Panel -->

		<!-- Book Now Banner -->
		<section>
			<?php get_template_part('partials/book-now-banner'); ?> 		
		</section>
		<!-- /Book Now Banner -->

	</main>

<?php get_footer(); ?>