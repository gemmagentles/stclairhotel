<?php if ( have_rows( 'intro_block' ) ) : ?>
    <div class="intro-block__wrapper">
        <div class="intro-block__container" data-aos="fade-up" data-aos-delay="250">
            <?php while ( have_rows( 'intro_block' ) ) : the_row(); ?>
                <?php $heading = get_sub_field( 'heading' ); ?>
                <?php if ( $heading ) { ?>
                    <h2 class="intro-block__heading"><?php the_sub_field( 'heading' ); ?></h2>
                <?php } ?>
                <?php $paragraph = get_sub_field( 'paragraph' ); ?>
                <?php if ( $paragraph ) { ?>
                    <div class="intro-block__paragraph">
                        <?php the_sub_field( 'paragraph' ); ?>
                </div>
                <?php } ?>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>