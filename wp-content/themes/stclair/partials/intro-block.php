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
                <?php if ( get_sub_field( 'add_button' ) == 1 ) { ?>
                    <?php $button = get_sub_field( 'button' ); ?>
                    <?php if ( $button ) { ?>
                        <div class="intro-block__button-wrapper">
                            <a class="stclair-button" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                        </div>
                    <?php } ?>
                <?php } else { 
                // echo 'false'; 
                } ?>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>