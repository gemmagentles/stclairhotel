<?php /* Template Name: Rooms & Cottages Page Template */ get_header(); ?>

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

		<!-- Cards -->
		<section>
			<?php get_template_part('partials/cards'); ?> 		
		</section>
		<!-- /Cards -->

	</main>

<?php get_footer(); ?>
