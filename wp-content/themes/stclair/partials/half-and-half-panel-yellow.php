<!-- Clone -->        
<?php if ( have_rows( 'half_and_half_panel_yellow_half_and_half_panel_default' ) ) : ?>
<div class="half-and-half-panel__wrapper half-and-half-panel__yellow">
    <?php while ( have_rows( 'half_and_half_panel_yellow_half_and_half_panel_default' ) ) : the_row(); ?>
        <div class="half-and-half-panel__container">
        <div class="half-and-half-panel__inner">
            <!-- Text -->
            <div class="half-and-half-panel__text-section">
                <!-- Heading -->
                <h2 class="half-and-half-panel__heading"><?php the_sub_field( 'heading' ); ?></h2>
                <!-- Paragraph -->
                <div class="half-and-half-panel__paragraph">
                    <?php the_sub_field( 'paragraph' ); ?>
                </div>
                <!-- List -->
                <?php $list = get_sub_field( 'list' ); ?>
                <?php if ( $list ) { ?>
                    <div class="half-and-half-panel__list">
                        <?php the_sub_field( 'list' ); ?>
                    </div>
                <?php } ?>
                <!-- Download Link -->
                <?php if ( have_rows( 'download_link' ) ) : ?>
                    <div class="half-and-half-panel__download-links">
                        <?php while ( have_rows( 'download_link' ) ) : the_row(); ?>
                            <?php $download_link_file = get_sub_field( 'download_link_file' ); ?>
                            <?php if ( $download_link_file ) { ?>
                                <div class="half-and-half-panel__download-link--wrapper">
                                    <img class="half-and-half-panel__download-link--icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/blue-arrow.svg" alt="">
                                    <a class="half-and-half-panel__download-link" target="_blank" href="<?php echo $download_link_file['url']; ?>"><?php the_sub_field( 'download_link_text' ); ?></a>
                                </div>
                            <?php } ?>
                        <?php endwhile; ?>
                    </div>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>
                <!-- Button -->
                <?php $button_link = get_sub_field( 'button_link' ); ?>
                <?php if ( $button_link ) { ?>
                    <button class="half-and-half-panel__button stclair-button" onclick="location.href='<?php echo $button_link['url']; ?>'" type="button"><?php the_sub_field( 'button_text' ); ?></button>
                <?php } ?>
            </div>
            <!-- Image -->
            <div class="half-and-half-panel__image-section">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php if ( $image ) { ?>
                    <img class="half-and-half-panel__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php } ?>
            </div>
        </div>
        </div>
    <?php endwhile; ?>
</div>
<?php endif; ?>
<!-- /Clone -->        
 