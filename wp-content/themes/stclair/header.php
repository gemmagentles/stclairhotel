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
                <div class="mobile-only mobile-button">
                    <button class="stclair-button-white" type="button" formtarget="_blank" onClick="window.open('https://www.marriott.com/hotels/travel/dtwtx-the-st-clair-inn-a-tribute-portfolio-hotel/');">Reserve</button>
                </div>
                <div class="mobile-only">
                    <?php pre_header_nav(); ?>
                </div>
                <!-- mobile only end -->
            </nav>
            <button class="stclair-button header__reserve-button" type="button" formtarget="_blank" onClick="window.open('https://www.marriott.com/hotels/travel/dtwtx-the-st-clair-inn-a-tribute-portfolio-hotel/');">Reserve</button>
        </div>
    </header>