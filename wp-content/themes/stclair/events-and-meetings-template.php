<?php /* Template Name: Events & Meetings Page Template */ get_header(); ?>

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

		<!-- Half and Half Panel Yellow -->
		<section>
			<?php get_template_part('partials/half-and-half-panel-yellow'); ?> 		
		</section>
		<!-- /Half and Half Panel Yellow -->

		<!-- Booking Form -->
		<section>
			<?php get_template_part('partials/booking-form'); ?> 		
		</section>
		<!-- /Booking Form -->

	</main>

<?php get_footer(); ?>
