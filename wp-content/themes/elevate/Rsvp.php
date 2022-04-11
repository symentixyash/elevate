<?php /* Template Name: Rsvp */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="container-fluid">
    <div class="row revp-section gray-bg">


        <?php if ( have_rows('rsvp_page_repeater') ) : ?>

        <?php while( have_rows('rsvp_page_repeater') ) : the_row(); ?>





        <div class="col-lg-6 ">

            <div class="rsvp-images  shadow " data-aos="fade-up" data-aos-duration="1000">
                <!-- <div class="image-wrap">
                    <img src="<?php the_sub_field("image");?>" alt="img">
                </div> -->



                <div class="img-hover-zoom">
                    <img src="<?php the_sub_field("image");?>" alt="This zooms-in really well and smooth">
                </div>







                <div class="btn-seciont">
                    <div class="rsvp-title">
                        <?php the_sub_field('title'); ?>
                    </div>


                    <!-- <div class="rsvp-button">

                         <span class="icon-image"> <img src="<?php the_field("icon_image");?>"></span>
                        <a href="<?php the_sub_field('button_link'); ?>">
                            reservations </a> 

                    </div> -->

                    <a class="btn-2" href="<?php the_sub_field('button_link'); ?>"><span></span> Reservations</a>
                </div>
            </div>

        </div>



        <?php endwhile; ?>

        <?php endif; ?>
    </div>
</div>


<?php endwhile;
endif; ?>
<?php get_footer() ?>