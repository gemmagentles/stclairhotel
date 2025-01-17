<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/min/tiny-slider.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="<?php if ( have_rows( 'site_keywords' ) ) : ?><?php while ( have_rows( 'site_keywords' ) ) : the_row(); ?> <?php the_sub_field( 'keywords' ); ?>, <?php endwhile; ?><?php else : ?>Keywords<?php endif; ?>" />

	<meta property="og:title" content="<?php if ( have_rows( 'open_graph_data', 'option' ) ) : ?><?php while ( have_rows( 'open_graph_data', 'option' ) ) : the_row(); ?> <?php the_sub_field( 'open_graph_title' ); ?> <?php endwhile; ?><?php endif; ?>" />

	<meta property="og:url" content="<?php if ( have_rows( 'open_graph_data', 'option' ) ) : ?><?php while ( have_rows( 'open_graph_data', 'option' ) ) : the_row(); ?><?php the_sub_field( 'open_graph_url' ); ?> <?php endwhile; ?><?php endif; ?>" />

	<meta property="og:image" content="<?php if ( have_rows( 'open_graph_data', 'option' ) ) : ?><?php while ( have_rows( 'open_graph_data', 'option' ) ) : the_row(); ?> <?php if ( get_sub_field( 'open_graph_image' ) ) { the_sub_field( 'open_graph_image', 'option' ); } ?> <?php endwhile; ?><?php endif; ?>" />

    <?php if ( have_rows( 'meta_data', 'option' ) ) : ?>
        <?php while ( have_rows( 'meta_data', 'option' ) ) : the_row(); ?>

            <?php if ( get_sub_field( 'site_favicon' ) ) { ?>
                <link href="<?php the_sub_field( 'site_favicon' ); ?>" rel="shortcut icon">
            <?php } ?>
	        
            <?php if ( get_sub_field( 'site_apple_icon' ) ) { ?>
                <link href="<?php the_sub_field( 'site_apple_icon' ); ?>" rel="apple-touch-icon-precomposed">
            <?php } ?>

        <?php endwhile; ?>
    <?php endif; ?>

    <?php wp_head(); ?>
</head>
<body id="top" <?php body_class(); ?>>
<div class="wrapper">
    <header class="pre-header clear" role="banner">
        <nav class="pre-header__nav" role="navigation">
            <?php pre_header_nav(); ?>
        </nav>
    </header>
    <header class="header clear" role="banner">
        <div class="header__wrapper">
            <div class="header__logo-wrapper">
                <a href="<?php echo home_url(); ?>">
                    <?php $brand_header_logo = get_field( 'brand_header_logo', 'option' ); ?>
                    <?php if ( $brand_header_logo ) { ?>
                        <img class="header__logo-desktop" src="<?php echo $brand_header_logo['url']; ?>" alt="<?php echo $brand_header_logo['alt']; ?>" />
                    <?php } ?>
                </a>
            </div>
            <!-- Mobile Menu -->
            <div class="nav__hamburger-icon" id="hamburger">
                <div class="hamburger-bar1"></div>
                <div class="hamburger-bar2"></div>
                <div class="hamburger-bar3"></div>
            </div>
            <!-- Menu -->
            <nav class="header__nav" role="navigation">
                <!-- mobile only start -->
                <div class="logo mobile-only">
                    <a href="<?php echo home_url(); ?>">
                        <?php $brand_mobile_menu_logo = get_field( 'brand_mobile_menu_logo', 'option' ); ?>
                        <?php if ( $brand_mobile_menu_logo ) { ?>
                            <img src="<?php echo $brand_mobile_menu_logo['url']; ?>" alt="<?php echo $brand_mobile_menu_logo['alt']; ?>" />
                        <?php } ?>
                    </a>
                </div>
                <!-- mobile only end -->
                <?php html5blank_nav(); ?>
                <!-- mobile only start -->
                <!-- <div class="mobile-only mobile-button">
                    <button class="stclair-button-white" type="button" formtarget="_blank" onClick="window.open('https://www.marriott.com/hotels/travel/dtwtx-the-st-clair-inn-a-tribute-portfolio-hotel/');">Reserve</button>
                </div> -->
                <div class="mobile-only">
                    <?php pre_header_nav(); ?>
                </div>
                <!-- mobile only end -->
            </nav>

            <!-- Trigger/Open The Modal -->
            <button data-modal="modal-window-one" class="stclair-button header__reserve-button click-to-open" type="button">Reserve</button>

            <!-- The Modal -->
            <div id="modal-window-one" class="modal-window modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close close-one">&times;</span>
                    <p class="modal-content__paragraph">Please contact us at (810) 637-9005 to make your room reservation at The St. Clair Inn and create your own story.</p>
                </div>

            </div>

            <!-- Use below button when the client is ready to direct to booking agent -->
            <!-- <button class="stclair-button header__reserve-button" type="button" formtarget="_blank" onClick="window.open('https://www.marriott.com/hotels/travel/dtwtx-the-st-clair-inn-a-tribute-portfolio-hotel/');">Reserve</button> -->
        </div>
    </header>