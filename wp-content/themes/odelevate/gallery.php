<?php /* Template Name: gallery */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="gallary-slider">


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 px-0 fea-slider-section">
            <div class="slider-for">

                <?php if ( have_rows('gallery_page_repeater') ) : ?>

                <?php while( have_rows('gallery_page_repeater') ) : the_row(); ?>

                <div class="gallery-banner" style="background-image:url('<?php the_sub_field("image");?>')">
                    <img src="<?php the_sub_field("image"); ?>" />



                </div>

                <?php endwhile; ?>

                <?php endif; ?>

            </div>
        </div>
    </div>
</div>


<div class="container-fluid">

    <div class="row">
        <div class="col-md-12 px-0">

            <div class="slider-nav">
                <?php if ( have_rows('gallery_page_repeater') ) : ?>

                <?php while( have_rows('gallery_page_repeater') ) : the_row(); ?>

                <img src="<?php the_sub_field("image"); ?>" alt="" />


                <?php endwhile; ?>

                <?php endif; ?>
            </div>

        </div>
    </div>
</div>




</div>  


<div class="container-fluid">

    <div class="row">
        <div class="col-md-12 px-0">

            <div class="simple-gallery">
                <?php if ( have_rows('gallery_page_repeater') ) : ?>

                <?php while( have_rows('gallery_page_repeater') ) : the_row(); ?>

                <img src="<?php the_sub_field("image"); ?>" alt="" />


                <?php endwhile; ?>

                <?php endif; ?>
            </div>

        </div>
    </div>
</div>









<?php endwhile;
endif; ?>
<?php get_footer() ?>