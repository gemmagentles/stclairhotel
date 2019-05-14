<?php if ( have_rows( 'news_posts_hero' ) ) : ?>
    <?php while ( have_rows( 'news_posts_hero' ) ) : the_row(); ?>
    
    <div class="hero__wrapper hero__wrapper--background-image" style="background-image: url('<?php the_sub_field( 'news_posts_hero_background_image' ); ?>');">
        <div class="hero__container">

            <div class="hero__content">
                <?php
                    if ( is_single() ) {
                    // wp_enqueue_style( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, string $media = 'all' )
                    ?>
                    <!-- post details -->
                    <span class="hero__blog-date"><?php the_time('F j, Y'); ?> </span>
                    <!-- /post details -->
                    <?php
                    }
                ?>
                <h1 class="hero__content--heading"><?php the_sub_field( 'news_posts_hero_heading' ); ?></h1>
                <p class="hero__content--paragraph"><?php the_sub_field( 'news_posts_hero_paragraph' ); ?></p>
            </div>
            
        </div>  
    </div>
	<?php endwhile; ?>
<?php endif; ?>