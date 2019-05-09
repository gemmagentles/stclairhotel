<?php /* Template Name: Careers Page Template */ get_header(); ?>

	<main role="main">

        <!-- Hero -->
		<section>
			<?php get_template_part('partials/hero'); ?> 		
		</section>
        <!-- /Hero -->

        <!-- Intro Block Slider -->
		<section>
			<?php get_template_part('partials/intro-block'); ?> 		
		</section>
		<!-- /Intro Block Slider -->

        <!-- Wysiwyg Editor -->
		<section class="careers-page__wysiwyg">
            <?php get_template_part('partials/wysiwyg-editor'); ?> 
		</section>
        <!-- /Wysiwyg Editor -->

        <!-- Button -->
		<section class="careers-page__button--wrapper">
            <div class="careers-page__button--container">
                <?php get_template_part('partials/button'); ?> 
            </div>
		</section>
        <!-- /Button -->

	</main>

<?php get_footer(); ?>