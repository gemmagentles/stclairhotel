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

		<!-- Highlight Slider -->
		<section>
			<?php get_template_part('partials/highlight-slider'); ?> 		
		</section>
		<!-- /Highlight Slider -->

	</main>

<?php get_footer(); ?>
