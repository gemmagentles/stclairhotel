<div class="cards__individual-card-wrapper" data-aos="fade-up">
    <?php if ( have_rows( 'news_posts_hero' ) ) : ?>
        <?php while ( have_rows( 'news_posts_hero' ) ) : the_row(); ?>
            <?php if ( get_sub_field( 'news_posts_hero_background_image' ) ) { ?>
                <img class="cards__image" src="<?php the_sub_field( 'news_posts_hero_background_image' ); ?>" />
            <?php } ?>
            <div class="cards__individual-card-inner">
                <h3 class="cards__title"><?php the_sub_field( 'news_posts_hero_heading' ); ?></h3>
            </div>
            <div class="cards__individual-card--paragraph">
                <?php the_sub_field( 'news_posts_hero_paragraph' ); ?>
            </div>
            <div class="cards__individual-card--button">
                <button class="cards__button stclair-button" onclick="location.href='<?php the_permalink(); ?>'" type="button">Read More</button>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
