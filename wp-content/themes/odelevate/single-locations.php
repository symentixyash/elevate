<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="container-fluid">
    <div class="row wood-row">
        <div class="col-md-6  px-0 location-contact-left"
            style="background-image:url('<?php the_field("wood_bg","options");?>');">

            <div class="single-brand-logo">


                <img src="<?php the_field("brand_logo");?>" />
            </div>

            <div class="row icon-row">
                <div class="col-6  px-0">
                    <a href="<?php the_field("call_us_url");?>">
                        <div class="call-us-icon">
                            <img src="<?php the_field("call_icon","options");?>" />
                            <?php the_field("call_us_text","options");?>
                        </div>
                    </a>
                </div>
                <div class="col-6 px-0">
                    <a href="<?php the_field("view_map_url");?>">
                        <div class="location-icon">
                            <img src="<?php the_field("location_icon","options");?>" />
                            <?php the_field("location_text","options");?>
                        </div>
                    </a>
                </div>
            </div>

            <!-- 


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
            </div>  -->




        </div>

        <div class="col-md-6 location-col  px-0 ">

            <div class="location-thumb" >
                <img src="<?php the_field("thumb_image");?>"  />
            </div>


        </div>
    </div>
</div>




























<div class="container">
    <div class="row about-full-details">
        <div class="col-md-6 about-left-timing">
            <?php the_field("timing_details");?>


            <?php  $cn=0; ?>

            <?php   
            
           
            if ( have_rows('content_button') ) : ?>

            <?php while( have_rows('content_button') ) : the_row(); ?>



            <div class="btn sec-1-btn-1 hover-filled-slide-left <?php  echo $cn%2==0?'cn-left':'cn-right';?> ">
                <a href="  <?php the_sub_field('button_link'); ?>">
                    <?php the_sub_field('button'); ?>
                </a>
            </div>




            <?php $cn++ ?>
            <?php endwhile;  ?>

            <?php endif;?>


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
                <div class="slick-ani" data-aos="zoom-up" data-aos-duration="300"> <img
                        src="<?php the_sub_field('image'); ?>" />
                </div>
                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<div class="for-location-page" style="display:block">

    <div class="location-menu footer-location-menu">
        <div class="bg-green">


            <div class="container-fluid ">
                <div class="row location-menu-row">



                    <div class="col-md-6 col-lg-3">
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

                    <div class="col-md-6 col-lg-3">
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







                    <div class="col-md-6 col-lg-3">
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




                    <div class="col-md-6 col-lg-3">
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