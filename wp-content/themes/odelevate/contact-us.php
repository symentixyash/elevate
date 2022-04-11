<?php /* Template Name: contact-us */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!---contact-page-first-section----->


<div class="container-fluid">
    <div class="row contact-bg">
        <div class="col-xl-6 contact-left-sectin gray-bg">
            <?php the_field("contact_left_form");?>
        </div>
<div class="col-xl-6 px-0">


        <div class="contact-right-section" data-aos="zoom-down" data-aos-duration="2000" style="background-image:url('<?php the_field("contact_right_image");?>')">
            <img src="<?php the_field("contact_right_image");?>" style="visibility:hidden;" />
        </div>
    </div></div>
</div>
<?php endwhile;
endif; ?>
<?php get_footer() ?>