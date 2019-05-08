<?php if ( have_rows( 'hero' ) ) : ?>

    <?php while ( have_rows( 'hero' ) ) : the_row(); ?>

        <div class="hero__wrapper">
            <div class="hero__container">

                <div class="hero__content">
                    <h1 class="hero__content--heading"><?php the_sub_field( 'hero_heading' ); ?></h1>
                    <p class="hero__content--paragraph"><?php the_sub_field( 'hero_paragraph' ); ?></p>
                </div>

            </div>

            <?php if( get_sub_field('background_option') == 'backgroundimage' ): ?>
                <?php $background_image = get_sub_field( 'background_image' ); ?>
                <?php if ( $background_image ) { ?>
                    <img class="hero__image" src="<?php echo $background_image['url']; ?>" alt="<?php echo $background_image['alt']; ?>" />
                <?php } ?>
            <?php endif; ?>     

        </div>
    <?php endwhile; ?>

<?php endif; ?>
