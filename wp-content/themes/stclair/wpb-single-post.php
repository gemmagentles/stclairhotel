<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 */
  
 get_header();  ?>


<main role="main">
<!-- section -->
<section>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <!-- News Posts Hero -->
		<section>
			<?php get_template_part('partials/news-posts-hero'); ?> 		
		</section>
        <!-- /News Posts Hero -->

        <?php the_content(); // Dynamic Content ?>

        <!-- Wysiwyg Editor -->
		<section>
			<?php get_template_part('partials/wysiwyg-editor'); ?> 		
		</section>
		<!-- /Wysiwyg Editor -->

        <!-- Highlight Slider -->
		<section>
			<?php get_template_part('partials/highlight-slider'); ?> 		
		</section>
        <!-- /Highlight Slider -->
        
        <!-- Wysiwyg Editor 2 -->
		<section>
			<?php get_template_part('partials/wysiwyg-editor-2'); ?> 		
		</section>
		<!-- /Wysiwyg Editor 2 -->

    </article>
    <!-- /article -->

<?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <article>

        <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

    </article>
    <!-- /article -->

<?php endif; ?>

</section>
<!-- /section -->
</main>


<?php get_footer(); ?>
