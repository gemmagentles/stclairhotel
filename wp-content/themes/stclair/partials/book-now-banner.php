<?php if ( have_rows( 'book_now_banner' ) ) : ?>

        <?php while ( have_rows( 'book_now_banner' ) ) : the_row(); ?>

        <div class="book_now_banner__wrapper" style="background-image: url('<?php the_sub_field( 'background_image' ); ?>');">
            <div class="book_now_banner__container">
                <h2 class="book_now_banner__heading"><?php the_sub_field( 'heading' ); ?></h2>
                <div class="book_now_banner__bar-wrapper">
                    <div class="book_now_banner__arrival-date book_now_banner__bar-column">
                        <p class="book_now_banner__title">Arrival Date</p>
                    </div>
                    <div class="book_now_banner__departure-date book_now_banner__bar-column">
                        <p class="book_now_banner__title">Departure Date</p>
                    </div>
                    <div class="book_now_banner__rooms book_now_banner__bar-column">
                        <p class="book_now_banner__title">Rooms</p>
                    </div>
                    <div class="book_now_banner__guests book_now_banner__bar-column">
                        <p class="book_now_banner__title">Guests Per Room</p>
                    </div>
                    <button class="book_now_banner__button stclair-button" onclick="" type="button">Reserve</button>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
<?php endif; ?>
