<div class="cards__wrapper">
    <div class="cards__container">
        <h2 class="cards__heading"><?php the_field( 'heading' ); ?></h2>
        <?php if ( have_rows( 'card_repeater' ) ) : ?>
            <div class="cards__inner">
                <?php while ( have_rows( 'card_repeater' ) ) : the_row(); ?>
                <!-- INDIVIDUAL CARD -->
                    <div class="cards__individual-card-wrapper">
                        <?php $image = get_sub_field( 'image' ); ?>
                        <?php if ( $image ) { ?>
                            <img class="cards__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php } ?>
                        <div class="cards__individual-card-inner">
                            <h3 class="cards__title"><?php the_sub_field( 'title' ); ?></h3>
                            <?php $subtitle = get_sub_field( 'sub_title' ); ?>
                            <?php if ( $subtitle ) { ?>
                                <h4><<?php echo $subtitle; ?></h4>
                            <?php } ?>
                        </div>
                        <div class="cards__individual-card--paragraph">
                            <?php the_sub_field( 'paragraph' ); ?>
                        </div>
                        <div class="cards__individual-card--button">
                            <button class="cards__button stclair-button" onclick="location.href='<?php the_sub_field( 'button_link' ) ?>'" type="button"><?php the_sub_field( 'button_text' ); ?></button>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>
    </div>
</div>
