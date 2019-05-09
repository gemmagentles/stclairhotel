<div class="contact__wrapper">
    <div class="contact-form__container">
        <?php if ( have_rows( 'contact_form_group' ) ) : ?>
            <?php while ( have_rows( 'contact_form_group' ) ) : the_row(); ?>
                <h1 class="contact__heading"><?php the_sub_field( 'heading' ); ?></h1>
                <?php the_sub_field( 'wp_form_shortcode' ); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="contact-info__container">
        <?php if ( have_rows( 'contact_info' ) ) : ?>
            <h2 class="contact__heading">Contact Info</h2>
            <?php while ( have_rows( 'contact_info' ) ) : the_row(); ?>
            <div class="contact-info__content">
                <p><?php the_sub_field( 'address_line_one' ); ?></p>
                <p><?php the_sub_field( 'address_line_two' ); ?></p>
                <br>
                <p><span class="contact-info__initial">T: </span><span class="contact-info__tel"><?php the_sub_field( 'telephone_number' ); ?></span></p>
                <p><span class="contact-info__initial">E: </span><a class="contact-info__email" href="mailto:<?php the_sub_field( 'email_address' ); ?>" target="_blank"><?php the_sub_field( 'email_address' ); ?></a></p>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
