<?php /* Template Name: Contact Page Template */ get_header(); ?>

	<main role="main">

        <!-- Map -->
		<section>
			<?php get_template_part('partials/map'); ?> 		
		</section>
        <!-- /Map -->

        <!-- Contact Form -->
		<section>
			<?php get_template_part('partials/contact-form'); ?> 		
		</section>
        <!-- /Contact Form -->

	</main>

<?php get_footer(); ?>