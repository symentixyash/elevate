<?php /* Template Name: location */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>




<div class="container-fluid">
    <div class="row gray-bg">
        <div class="col-md-6  px-0 location-contact-left">
            <img src="<?php the_field("brand_logo");?>" />

            <div class="about-contact">

                <a href="<?php the_field("call_us_url");?>">
                    <div class="call-us-icon">
                        <img src="<?php the_field("call_icon","options");?>" />
                        <?php the_field("call_us_text","options");?>
                    </div>
                </a>

                <a href="<?php the_field("view_map_url");?>">
                    <div class="location-icon">
                        <img src="<?php the_field("location_icon","options");?>" />
                        <?php the_field("location_text","options");?>
                    </div>
                </a>



            </div>

        </div>

        <div class="col-md-6 location-col  px-0 ">

            <div class="location-thumb" style="background-image:url('<?php the_field("thumb_image");?>');">
                <img src="<?php the_field("thumb_image");?>" style="visibility:hidden;" />
            </div>


        </div>
    </div>
</div>


<div class="container">
    <div class="row about-full-details">
        <div class="col-md-6 about-left-timing">
            <?php the_field("timing_details");?>

            <div class="btn sec-1-btn-1 hover-filled-slide-left">
                <a href="<?php the_field('dinner_menu_button_link'); ?>">
                    <?php the_field('dinner_menu_button'); ?>
                </a>
            </div>
            <div class="btn sec-2-btn hover-filled-slide-left">
                <a href="<?php the_field('reservation_button_link'); ?>">
                    <?php the_field('reservation_button'); ?>
                </a>
            </div>

        </div>

        <div class="col-md-6 about-right-content">
            <?php the_field("content__details");?>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="location-slider">
                <?php if ( have_rows('bottom_thumb_slider') ) : ?>
                <?php while( have_rows('bottom_thumb_slider') ) : the_row(); ?>
                <div class="slick-ani" data-aos="zoom-up" data-aos-duration="1000"> <img src="<?php the_sub_field('image'); ?>" />
                </div>
                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<div class="for-location-page">

    <div class="location-menu">
        <div class="bg-green">


            <div class="container-fluid ">
                <div class="row location-menu-row">



                    <div class="col-md-3">
                        <?php if ( have_rows('first_location_menu',"options") ) : ?>

                        <?php while( have_rows('first_location_menu',"options") ) : the_row(); ?>
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

                    <div class="col-md-3">
                        <?php if ( have_rows('second_location_menu',"options") ) : ?>

                        <?php while( have_rows('second_location_menu',"options") ) : the_row(); ?>
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







                    <div class="col-md-3">
                        <?php if ( have_rows('third_location_menu',"options") ) : ?>

                        <?php while( have_rows('third_location_menu',"options") ) : the_row(); ?>
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




                    <div class="col-md-3">
                        <?php if ( have_rows('fourth_location_menu',"options") ) : ?>

                        <?php while( have_rows('fourth_location_menu',"options") ) : the_row(); ?>

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



</div>



<?php endwhile;
endif; ?>
<?php get_footer() ?>