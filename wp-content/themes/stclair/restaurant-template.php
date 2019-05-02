<?php /* Template Name: Restaurant Page Template */ get_header(); ?>

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

		<!-- Menu List -->
		<section>
			<?php get_template_part('partials/half-and-half-panel'); ?> 		
		</section>
		<!-- /Menu List -->

		<!-- Content Box Overlay -->
		<section>
			<?php get_template_part('partials/content-box-overlay'); ?> 		
		</section>
		<!-- /Content Box Overlay -->

		<!-- Highlight Slider -->
		<section>
			<?php get_template_part('partials/highlight-slider'); ?> 		
		</section>
		<!-- /Highlight Slider -->

		<!-- Booking Form -->
		<section>
			<?php get_template_part('partials/booking-form'); ?> 		
		</section>
		<!-- /Booking Form -->

	</main>

<?php get_footer(); ?>
