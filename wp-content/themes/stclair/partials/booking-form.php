<div class="booking-form__wrapper">
    <div class="booking-form__container stclair-forms">
        <?php if ( have_rows( 'wpform' ) ) : ?>
            <?php while ( have_rows( 'wpform' ) ) : the_row(); ?>
                <h2 class="booking-form__heading"><?php the_sub_field( 'heading' ); ?></h2>
                <h3 class="booking-form__sub-heading"><?php the_sub_field( 'sub_heading' ); ?></h3>
                <?php the_sub_field( 'wp_form_shortcode' ); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
