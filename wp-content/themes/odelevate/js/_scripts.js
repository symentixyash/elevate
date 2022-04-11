jQuery(document).ready(function () {
    jQuery(document).ready(function () {







        const $slider = jQuery('.homepage-slider');

        $slider.slick({
            infinite: true,
            arrows: false,
            fade: true,
            dots: true,
            speed: 2000,
            cssEase: 'cubic-bezier(0.86, 0, 0.07, 1)',
            autoplay:true,

        });















        // $slider.on('wheel', (function (e) {

        //     var slideCount = jQuery(this)[0].slick["slideCount"];
        //     var currentIndex = jQuery(this).slick("slickCurrentSlide");
        //     var totalSildeToShow = jQuery(this)[0].slick.options["slidesToShow"];


        //     if (e.originalEvent.deltaY < 0) {

        //         jQuery(this).slick('slickPrev');
        //     }



        //     else {
        //         if (slideCount - totalSildeToShow === currentIndex) {

        //           return;
        //         }

        //         e.preventDefault();
        //         jQuery(this).slick('slickNext');

        //     }




        // }));



















        // $slider.mousewheel(function (e) {
        //   e.preventDefault();
        //   if (e.deltaY < 0) {

        //     if (jQuery(this).slick('slickCurrentSlide') === jQuery(this).find('.slick-slide').length - 1) {
        //       return;
        //     }

        //     jQuery(this).slick('slickNext');

        //   } else {

        //     if (jQuery(this).slick('slickCurrentSlide') === 0) {
        //       return;
        //     }

        //     jQuery(this).slick('slickPrev');
        //   }
        // });





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
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav',
            adaptiveHeight: true
        });
        jQuery('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            arrows: true,

            focusOnSelect: true,



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




        // jQuery(" .location-menu-link , .location-menu").hover(function () {
        //     jQuery(".location-menu").show();

        // },
        //     function () {
        //         jQuery(".location-menu").hide();

        //     });



        jQuery(".location-menu-link").hover(function(){

            animateTime = 1000,
            jQuery(".bg-green").animate({
                  height: 'show',
                  
                },animateTime);
              });


            //   jQuery(".location-menu-link " ).hover( function(){
            //     jQuery(this).removeClass('toggle');
                
            // });














            

            jQuery('.location-menu-link').mouseleave( function () {
                jQuery('.bg-green').hide();

         }
     ).mouseleave();


            jQuery(".bg-green").mouseenter(function(){
                jQuery(this).show();
              });


              jQuery(".bg-green").mouseleave(function(){
                jQuery(this).hide();
              });


            //   jQuery("result").hover(
            //     function () {
            //         jQuery(this).addClass(".bg-green");
            //     },
            //     function () {
            //         jQuery(this).removeClass(".location-menu-link ");
            //     }
            //   );


            // jQuery('.location-menu-link').click(function() {
            //     var height = jQuery(".location-menu").height();
            //     if( height > 0 ) {
            //         jQuery('.location-menu').css('height','0');
            //     } else {
            //         jQuery(".location-menu").css({'position':'absolute','visibility':'hidden','height':'auto'});
            //         var newHeight = jQuery("#this").height();
            //         jQuery(".location-menu").css({'position':'static','visibility':'visible','height':'0'});
            //         jQuery('.location-menu').css('height',newHeight + 'px');
            //     }
            // });














        // jQuery(".location-menu-link").mouseover(function () {
        //     jQuery(".location-menu").stop().slideDown("slow");
        // });
        // jQuery(".location-menu-link").mouseout(function () {
        //     jQuery(".location-menu").stop().slideUp("slow");
        // });







  
        // jQuery(".location-menu-link").mouseover(function(){
        //     jQuery  (".location-menu").slideDown("slow");
        //     });
       






        jQuery('.location-slider').slick({

        });


    });


    AOS.init(
        {
            offset: 300,
        }
    );


















});