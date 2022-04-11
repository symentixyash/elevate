jQuery(document).ready(function () {
    jQuery(document).ready(function () {







        const $slider = jQuery('.homepage-slider');

        $slider.slick({
            infinite: true,
            arrows: true,
            fade: true,
            dots: false,
            speed: 2000,
            cssEase: 'cubic-bezier(0.86, 0, 0.07, 1)',
            // autoplay: true,
            nextArrow: '<i class="bi bi-chevron-right"></i>',
            prevArrow: '<i class="bi bi-chevron-left"></i>',
        });



        if (jQuery("#back-to-top").length) {
            var scrollTrigger = 100, // px
                backToTop = function () {
                    var scrollTop = jQuery(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        jQuery("#back-to-top").addClass("show");
                    } else {
                        jQuery("#back-to-top").removeClass("show");
                    }
                };
            backToTop();
            jQuery(window).on("scroll", function () {
                backToTop();
            });
            jQuery("#back-to-top").on("click", function (e) {
                e.preventDefault();
                jQuery("html,body").animate({
                    scrollTop: 0,
                },
                    700
                );
            });
        }

        if (jQuery("header").length) {
            var scrollTrigger = 100, // px
                activeTop = function () {
                    var scrollTop = jQuery(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        jQuery("header").addClass("active");
                    } else {
                        jQuery("header").removeClass("active");
                    }
                };
            activeTop();
            jQuery(window).on("scroll", function () {
                activeTop();
            });
        }





        jQuery('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            fade: true,
            asNavFor: '.slider-nav',
            adaptiveHeight: true,

            autoplay: true,
            speed: 2000,

            nextArrow: '<i class="bi bi-chevron-right"></i>',
            prevArrow: '<i class="bi bi-chevron-left"></i>',


        });
        jQuery('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            arrows: false,

            focusOnSelect: true,


            // nextArrow: '<i class="fa fa-angle-right  ss"></i>',
            // prevArrow: '<i class="fa fa-angle-left ss    "></i>', 



            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 640,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 420,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }]
        });




        jQuery('.location-slider').slick({
            dots: false,

        });


        jQuery('.brand-logo').slick({

            slidesToShow: 7,
            slidesToScroll: 1,

            dots: false,
            arrows: false,





            responsive: [{
                breakpoint: 1024,
                settings: {
                    autoplay: true,
                    slidesToShow: 5,
                    speed: 2000,
                    autoplay: true,
                    infinite: true,
                }
            }, {
                breakpoint: 640,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    speed: 2000,
                    autoplay: true,
                }
            }, {
                breakpoint: 420,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    speed: 2000,
                    autoplay: true,
                }
            }]

        });


    });


    AOS.init(
        {
            offset: 300,
        }
    );



    AOS.init({disable: 'mobile'});






    if (jQuery(window).width() < 991) {


        jQuery(".location-menu-link").click(function () {

            animateTime = 400,
                jQuery(".mobile-link").animate({
                    height: 'toggle',
                    opacity: 1,



                }, animateTime);


        });


    }



















    // jQuery(window).resize(function() {
    //     if (jQuery(window).width() > 991) {
    //         jQuery(".location-menu-link").removeClass(".mobile-link");


    //     }
    //    else {

    //     jQuery(".location-menu-link").addClass(".mobile-link");

    //     jQuery(".location-menu-link").click(function () {

    //     animateTime = 400,
    //         jQuery(".mobile-link").animate({
    //             height: 'toggle',
    //             opacity:1,



    //         }, animateTime);


    // });
    //    }
    //   });














    jQuery(".location-menu-link").hover(function () {

        jQuery('.icon-rotate').toggle();
    });





});