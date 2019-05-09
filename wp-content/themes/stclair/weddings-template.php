<?php /* Template Name: Weddings Page Template */ get_header(); ?>

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

		<!-- Half and Half Panel -->
		<section>
			<?php get_template_part('partials/half-and-half-panel'); ?> 		
		</section>
		<!-- /Half and Half Panel -->

		<!-- Highlight Slider -->
		<section>
			<?php get_template_part('partials/highlight-slider'); ?> 		
		</section>
		<!-- /Highlight Slider -->

		 <!-- Accordion -->
		 <section>
			<?php get_template_part('partials/accordion'); ?> 		
		</section>
		<!-- /Accordion -->

		<!-- Booking Form -->
		<section>
			<?php get_template_part('partials/booking-form'); ?> 		
		</section>
		<!-- /Booking Form -->

	</main>

<?php get_footer(); ?>
