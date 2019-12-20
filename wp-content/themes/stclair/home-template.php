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

		<!-- Half and Half Panel White -->
		<section>
			<?php get_template_part('partials/half-and-half-panel-white'); ?> 		
		</section>
		<!-- /Half and Half Panel White -->

		<!-- Background Image Content Panel Slider -->
		<section>
			<?php get_template_part('partials/background-image-content-panel'); ?> 		
		</section>
		<!-- /Background Image Content Panel Slider -->

		<!-- Book Now Banner -->
		<!-- Comment out until the client comes back with info -->
		<!-- <section> 
			<?php // get_template_part('partials/book-now-banner'); ?> 		
		</section> -->
		<!-- /Book Now Banner -->

	</main>

<?php get_footer(); ?>
