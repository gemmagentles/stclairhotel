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

		<!-- Half and Half Panel Yellow -->
		<section>
			<?php get_template_part('partials/half-and-half-panel-yellow'); ?> 		
		</section>
		<!-- /Half and Half Panel Yellow -->

		<!-- Highlight Slider -->
		<section>
			<?php get_template_part('partials/highlight-slider'); ?> 		
		</section>
		<!-- /Highlight Slider -->

		<!-- Half and Half Panel Purple -->
		<section>
			<?php get_template_part('partials/half-and-half-panel-purple'); ?> 		
		</section>
		<!-- /Half and Half Panel Purple -->

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
