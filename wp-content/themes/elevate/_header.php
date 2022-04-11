<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
                                        echo ' :';
                                    } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link rel="shortcut icon" href="<?php echo $logo_image = get_field('favicon_ico', 'option'); ?>">
    <link rel="shortcut icon" href="<?php echo $logo_image = get_field('favicon_png', 'option'); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="theme-color" content="#db6237">
    <meta name="format-detection" content="telephone=no">

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
    <script>
    new WOW().init({
        mobile: false
    });
    </script>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/aos.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css?v=1.1" />

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>

    <style>
    <?php echo get_field('css_text_area', 'option');
    ?>
    </style>
</head>

<body <?php body_class(); ?>>
    <a id="back-to-top" class="" href="#"><i class="bi bi-chevron-up"></i></a>
    <header>


        <div class="container-fluid">
            <div class="row">


                <div class="col-md-12 upper-button-secion px-0">

                    <a href="<?php the_field("gift_card_balance_url", "options"); ?>" class=" gift-card-button">
                        <?php the_field("gift_card_balance", "options"); ?></a>


                    <a href="<?php the_field("reservations_button_url", "options"); ?>" class="reservations-button">
                        <?php the_field("reservations_button", "options"); ?></a>
                </div>



                <div class="col-md-12 feature-header px-0">


                    <a class="navbar-brand mr-auto rotate " href="<?php echo get_home_url(); ?>">
                        <img src="<?php the_field("header_image_logo", "options"); ?>" alt="" />
                    </a>
                    <input type="checkbox" id="toggle" style="display:none;">
                    <label class="toggle-btn toggle-btn__cross" for="toggle">

                        <div class="cross-btn-image">

                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                    </label>
                    <nav class="navbar navbar-expand-lg navbar-light   bg-faded  navbar-mobile  wow fadeInDown"
                        data-wow-duration="1.6s">

                        <div class="navbar-collapse collapse " id="navbarMobile">
                            <div class="navbar_content">


                                <a class="navbar-brand  white-box-logo " href="<?php echo get_home_url(); ?>">
                                    <img src="<?php the_field("white_box_logo", "options"); ?>" alt="" />
                                </a>


                                <ul id="menu-header-menu" class="nav navbar-nav">







                                    <li id="menu-item-1244"
                                        class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                            href="<?php the_field("first_nav_link", "options"); ?>">
                                            <?php the_field("first_nav_text", "options"); ?></a>
                                    </li>


                                    <li id="menu-item-1244"
                                        class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                            href="<?php the_field("second_nav_link", "options"); ?>">
                                            <?php the_field("second_nav_text", "options"); ?></a>
                                    </li>

                                    <li id="menu-item-1244"
                                        class="menu-item  location-menu-link menu-item-type-post_type menu-item-object-page">
                                        <a href="<?php the_field("third_nav_link", "options"); ?>">
                                            <?php the_field("third_nav_text", "options"); ?><i class="bi bi-chevron-down icon-rotate" ></i><i class="bi bi-chevron-up icon-rotate rotate-up"></i> </a>








                                        <div class="location-menu" >
                                            <div class="bg-green">


                                                <div class="container-fluid ">
                                                    <div class="row location-menu-row">



                                                        <div class="col-lg-6 col-xl-3">
                                                            <?php if (have_rows('first_location_menu', "options")) : ?>

                                                            <?php while (have_rows('first_location_menu', "options")) : the_row(); ?>
                                                            <div class="loc-content">
                                                                <div class="loc-img">
                                                                    <img src="<?php the_sub_field('image'); ?>" />
                                                                </div>





                                                                <a href=" <?php the_sub_field('link'); ?>"
                                                                    class="loc-anchor">

                                                                    <div class="loc-title">
                                                                        <?php the_sub_field('title'); ?>
                                                                    </div>
                                                                </a>

                                                            </div>
                                                            <?php endwhile; ?>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="col-lg-6 col-xl-3">
                                                            <?php if (have_rows('second_location_menu', "options")) : ?>

                                                            <?php while (have_rows('second_location_menu', "options")) : the_row(); ?>
                                                            <div class="loc-content">
                                                                <div class="loc-img">
                                                                    <img src="<?php the_sub_field('image'); ?>" />
                                                                </div>




                                                                <a href=" <?php the_sub_field('link'); ?>">

                                                                    <div class="loc-title">
                                                                        <?php the_sub_field('title'); ?>
                                                                    </div>
                                                                </a>

                                                            </div>
                                                            <?php endwhile; ?>

                                                            <?php endif; ?>

                                                        </div>







                                                        <div class="col-lg-6 col-xl-3">
                                                            <?php if (have_rows('third_location_menu', "options")) : ?>

                                                            <?php while (have_rows('third_location_menu', "options")) : the_row(); ?>
                                                            <div class="loc-content">
                                                                <div class="loc-img">
                                                                    <img src="<?php the_sub_field('image'); ?>" />
                                                                </div>





                                                                <a href=" <?php the_sub_field('link'); ?>">

                                                                    <div class="loc-title">
                                                                        <?php the_sub_field('title'); ?>
                                                                    </div>
                                                                </a>

                                                            </div>
                                                            <?php endwhile; ?>

                                                            <?php endif; ?>

                                                        </div>




                                                        <div class="col-lg-6 col-xl-3">
                                                            <?php if (have_rows('fourth_location_menu', "options")) : ?>

                                                            <?php while (have_rows('fourth_location_menu', "options")) : the_row(); ?>

                                                            <div class="loc-content">
                                                                <div class="loc-img">
                                                                    <img src="<?php the_sub_field('image'); ?>" />
                                                                </div>




                                                                <a href=" <?php the_sub_field('link'); ?>">

                                                                    <div class="loc-title">
                                                                        <?php the_sub_field('title'); ?>
                                                                    </div>
                                                                </a>

                                                            </div>
                                                            <?php endwhile; ?>

                                                            <?php endif; ?>

                                                        </div>


                                                    </div>
                                                </div>


                                            </div>

                                        </div>










                                        <div class="mobile-link" >


                                            <?php if (have_rows('first_location_menu', "options")) : ?>

                                            <?php while (have_rows('first_location_menu', "options")) : the_row(); ?>
                                            <div class="loc-content">

                                                <a href=" <?php the_sub_field('link'); ?>" class="loc-anchor">

                                                    <div class="loc-title">
                                                        <?php the_sub_field('title'); ?>
                                                    </div>
                                                </a>

                                            </div>
                                            <?php endwhile; ?>
                                            <?php endif; ?>


                                            <?php if (have_rows('second_location_menu', "options")) : ?>

                                            <?php while (have_rows('second_location_menu', "options")) : the_row(); ?>
                                            <div class="loc-content">

                                                <a href=" <?php the_sub_field('link'); ?>" class="loc-anchor">

                                                    <div class="loc-title">
                                                        <?php the_sub_field('title'); ?>
                                                    </div>
                                                </a>

                                            </div>
                                            <?php endwhile; ?>
                                            <?php endif; ?>
                                            <?php if (have_rows('third_location_menu', "options")) : ?>

                                            <?php while (have_rows('third_location_menu', "options")) : the_row(); ?>
                                            <div class="loc-content">

                                                <a href=" <?php the_sub_field('link'); ?>" class="loc-anchor">

                                                    <div class="loc-title">
                                                        <?php the_sub_field('title'); ?>
                                                    </div>
                                                </a>

                                            </div>
                                            <?php endwhile; ?>
                                            <?php endif; ?>
                                            <?php if (have_rows('fourth_location_menu', "options")) : ?>

                                            <?php while (have_rows('fourth_location_menu', "options")) : the_row(); ?>
                                            <div class="loc-content">

                                                <a href=" <?php the_sub_field('link'); ?>" class="loc-anchor">

                                                    <div class="loc-title">
                                                        <?php the_sub_field('title'); ?>
                                                    </div>
                                                </a>

                                            </div>
                                            <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>








                                    </li>



                                    <li id="menu-item-1244"
                                        class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                            href="<?php the_field("fourth_nav_link", "options"); ?>">
                                            <?php the_field("fourth_nav_text", "options"); ?></a>
                                    </li>

                                    <li id="menu-item-1244"
                                        class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                            href="<?php the_field("fifth_nav_link", "options"); ?>">
                                            <?php the_field("fifth_nav_text", "options"); ?></a>
                                    </li>

                                    <li id="menu-item-1244"
                                        class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                            href="<?php the_field("sixth_nav_link", "options"); ?>">
                                            <?php the_field("sixth_nav_text", "options"); ?></a>
                                    </li>





                                    <li id="menu-item-1244"
                                        class="menu-item menu-item-type-post_type menu-item-object-page nav-display"><a
                                            href="<?php the_field("gift_card_balance_url", "options"); ?>">
                                            <?php the_field("gift_card_balance", "options"); ?></a>
                                    </li>



                                    <div class="grn-button">

                                  
                                    <a href="<?php the_field("reservations_button_url", "options"); ?>"
                                        class="reservations-button nav-display">
                                        <?php the_field("reservations_button", "options"); ?></a>  </div>
                            </div>




                            </ul>


                        </div>
                </div>






            </div>

            </nav>
        </div>
        </div>
        </div>


    </header>


    <?php $banner =   get_field("header_banner");
    if (empty($banner)) {
        $banner = get_field("default_banner", "options");
    }
    ?>

    <!-- <div class="header-banner" style="background-image:url('<?php echo $banner ?>');">
        <img src="<?php echo $banner ?>" style="visibility:hidden;" />
        <div class="container">
            <div class="row banner-fea">
                <div class="col-md-12 ">

                    <div class="banner-content wow fadeInDown" data-wow-duration="1.6s">
                        <?php the_field("header_content"); ?>
                    </div>

                    <div class="banner-btn wow fadeInLeft" data-wow-duration="1.6s" data-wow-delay=".3s">

                        <?php $cn = get_field("header_button_text");
                        if (!empty($cn)) { ?>

                        <a href="<?php the_field("header_button_link"); ?>" class="base-button">
                            <?php the_field("header_button_text"); ?>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="location-menu">
        <div class="bg-green">


            <div class="container-fluid ">
                <div class="row location-menu-row">


                    <div class="col-md-1">


                        <div class="loc-img">
                            <img src="<?php the_field('silo_logo', "options"); ?>" />
                        </div>

                    </div>
                    <div class="col-md-2">
                        <?php if (have_rows('first_location_menu', "options")) : ?>

                        <?php while (have_rows('first_location_menu', "options")) : the_row(); ?>





                        <div class="loc-content">



                            <a href="#">

                                <div class="loc-title">
                                    <?php the_sub_field('title'); ?>
                                </div>
                            </a>



                        </div>

                        <?php endwhile; ?>

                        <?php endif; ?>

                    </div>

                    <div class="col-md-1">



                        <div class="loc-img">
                            <img src="<?php the_field('lafogata_logo', "options"); ?>" />
                        </div>




                    </div>
                    <div class="col-md-2">
                        <?php if (have_rows('second_location_menu', "options")) : ?>

                        <?php while (have_rows('second_location_menu', "options")) : the_row(); ?>

                        <div class="loc-content">

                            <a href="#">

                                <div class="loc-title">
                                    <?php the_sub_field('title'); ?>
                                </div>
                            </a>

                        </div>
                        <?php endwhile; ?>

                        <?php endif; ?>

                    </div>

                    <div class="col-md-1">



                        <div class="loc-img">
                            <img src="<?php the_field('lafogata_logo', "options"); ?>" />
                        </div>




                    </div>





                    <div class="col-md-2">
                        <?php if (have_rows('third_location_menu', "options")) : ?>

                        <?php while (have_rows('third_location_menu', "options")) : the_row(); ?>

                        <div class="loc-content">

                            <a href="#">

                                <div class="loc-title">
                                    <?php the_sub_field('title'); ?>
                                </div>
                            </a>

                        </div>
                        <?php endwhile; ?>

                        <?php endif; ?>

                    </div>



                    <div class="col-md-1">



                        <div class="loc-img">
                            <img src="<?php the_field('lafogata_logo', "options"); ?>" />
                        </div>




                    </div>
                    <div class="col-md-1">
                        <?php if (have_rows('fourth_location_menu', "options")) : ?>

                        <?php while (have_rows('fourth_location_menu', "options")) : the_row(); ?>

                        <div class="loc-content">
                            <a href="#">

                                <div class="loc-title">
                                    <?php the_sub_field('title'); ?>
                                </div>
                            </a>

                        </div>
                        <?php endwhile; ?>

                        <?php endif; ?>

                    </div>


                </div>
            </div>


        </div>

    </div> -->