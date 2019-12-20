<?php if ( have_rows( 'icon_list_with_content' ) ) : ?>
<div class="icon-list-with-content__wrapper">
    <?php while ( have_rows( 'icon_list_with_content' ) ) : the_row(); ?>

        <?php if ( get_sub_field( 'icon_list_only' ) == 1 ) { 
		 // echo 'true'; 
		} else { ?>
            <div class="icon-list-with-content__content-wrapper">
			<!-- Heading -->
            <h2 data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="350" data-aos-duration="550" class="icon-list-with-content__heading"><?php the_sub_field( 'heading' ); ?></h2>
            <!-- Paragraph -->
            <div data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="550" data-aos-duration="800" class="icon-list-with-content__paragraph">
                <?php the_sub_field( 'paragraph' ); ?>
            </div>
            <!-- Button -->
            <!-- <?php //$button_link = get_sub_field( 'button_link' ); ?>
            <?php// if ( $button_link ) { ?>
                <button class="icon-list-with-content__button stclair-button" onclick="location.href='<?php// echo $button_link['url']; ?>'" type="button"><?php// the_sub_field( 'button_text' ); ?></button>
            <?php// } ?> -->

            <!-- Trigger/Open The Modal -->
            <button data-modal="modal-window-three" data-aos="fade-in" data-aos-easing="ease-in" data-aos-delay="1350" id="booking-modal-btn-js-2" class="icon-list-with-content__button stclair-button click-to-open" type="button">Reserve</button>

            <!-- The Modal -->
            <div id="modal-window-three" class="modal-window modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p class="modal-content__paragraph">Please contact us at (810) 637-9005 to make your room reservation at The St. Clair Inn and create your own story.</p>
                </div>

            </div>
        </div>
		<?php } ?>
		<?php if ( have_rows( 'icon_list' ) ) : ?>
            <div class="icon-list-with-content__icon-list-wrapper">
                <?php while ( have_rows( 'icon_list' ) ) : the_row(); ?>
                    <div class="icon-list-with-content__icon-list-container">
                        <?php $icon = get_sub_field( 'icon' ); ?>
                        <?php if ( $icon ) { ?>
                            <img data-aos="zoom-in" data-aos-duration="550" class="icon-list-with-content__icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                        <?php } ?>
                        <span data-aos="fade-right" data-aos-delay="850" class="icon-list-with-content__icon--text"><?php the_sub_field( 'text' ); ?></span>
                    </div>                
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            </div>                
		<?php endif; ?>
	<?php endwhile; ?>
</div>                
<div class="icon-list-with-content__background"></div>
<?php endif; ?>
