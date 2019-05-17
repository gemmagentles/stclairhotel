<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
		<!-- Hero -->
			<?php get_template_part('partials/news-hero'); ?>
		<!-- /Hero -->

		<?php get_template_part('loop'); ?>

		<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
