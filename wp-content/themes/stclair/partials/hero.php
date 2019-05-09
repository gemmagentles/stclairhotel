<?php if ( have_rows( 'hero' ) ) : ?>

    <?php while ( have_rows( 'hero' ) ) : the_row(); ?>

        <div class="hero__wrapper <?php if( get_sub_field('background_option') == 'backgroundimage' ): ?>hero__wrapper--background-image<?php endif; ?>" <?php if( get_sub_field('background_option') == 'backgroundimage' ): ?>style="background-image: url('<?php the_sub_field( 'background_image' ); ?>');"<?php endif; ?>>
            <div class="hero__container">

                <div class="hero__content">
                    <h1 class="hero__content--heading"><?php the_sub_field( 'hero_heading' ); ?></h1>
                    <p class="hero__content--paragraph"><?php the_sub_field( 'hero_paragraph' ); ?></p>
                </div>

            </div>  

        </div>
    <?php endwhile; ?>

<?php endif; ?>