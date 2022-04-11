<!-- footer -->
<?php wp_footer(); ?>
<footer>


    <div class="container-fluid">
        <div class="row footer-seciton">
            <div class="col-md-6 footer-left">
                <?php the_field("footer_bottom_left_text","options");?>
            </div>
            <div class="col-md-6 footer-right">
                <a href="<?php the_field("footer_bottom_right_text_link","options");?>" target="_blank">
                    <?php the_field("footer_bottom_right_text","options");?>

                </a>

            </div>

        </div>

    </div>

</footer>