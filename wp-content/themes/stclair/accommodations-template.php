<?php /* Template Name: Accommodations Page Template */ get_header(); ?>

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
			<?php get_template_part('partials/cards-yellow'); ?> 		
		</section>
		<!-- /Cards -->

		<!-- Cards Clone -->
		<section>
			<?php get_template_part('partials/cards-clone-white'); ?> 		
		</section>
		<!-- /Cards Clone -->

	</main>

<?php get_footer(); ?>
