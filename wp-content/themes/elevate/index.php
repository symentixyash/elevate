<?php /* Template Name: Home page */
get_header();?>
<?php if (have_posts()): while (have_posts()): the_post();?>

<!---home-page-first-section----->





<div class="container-fluid">
    <div class="row homepage-seciton">
        <div class="col-md-12 px-0">

            <div class="salogan">
                <img src="<?php the_field("slogan");?>" />
            </div>

            <div class="homepage-slider">
                <?php if (have_rows('homepage_slider')): ?>
                <?php while (have_rows('homepage_slider')): the_row();?>
                <div class="slide  home-slide-img">
                    <img srcset="<?php the_sub_field('image');?> ,<?php the_sub_field('mobile_image');?> 576w "
                        alt="" />

                </div>

                <?php endwhile;?>

                <?php endif;?>


            </div>


        </div>



        <div class="brand-background-section">


            <div class="container-fluid">


                <div class="row brand-logo">


                    <?php if ( have_rows('homepage_brand_logo') ) : ?>

                    <?php while( have_rows('homepage_brand_logo') ) : the_row(); ?>
                    <div class="col">
                        <img src="<?php the_sub_field('image'); ?>" />

                    </div>
                    <?php endwhile; ?>

                    <?php endif; ?>


                </div>
            </div>
        </div>










    </div>
</div>







































<?php endwhile;
endif;?>
<?php get_footer()?>