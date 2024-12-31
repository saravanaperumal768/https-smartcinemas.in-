/* live-well */
$('#navbarSideButton').on('click', function() {
    if ($('.modal-fixed').hasClass('d-none')) {
        $('#navbarSide').addClass('reveal')
        $('.modal-fixed').removeClass('d-none');
        $('#navbarSideButton .fa-bars').addClass('d-none');
        $('#navbarSideButton .fa-close').removeClass('d-none');
    } else {
        console.log('asdas');
    }
});
$('.modal-fixed').on('click', function() {
    $('#navbarSide').removeClass('reveal')
    $('.modal-fixed').addClass('d-none');
    $('#navbarSideButton .fa-bars').removeClass('d-none');
    $('#navbarSideButton .fa-close').addClass('d-none');
});


// function playPause() {
//     if (myVideo.paused)
//         myVideo.play();
//     else
//         myVideo.pause();
// }

function startProgressBar() {
    // apply keyframe animation
    $(".slide-progress").css({
        height: "100%",
        transition: "height 5000ms"
    });
}

function resetProgressBar() {
    $(".slide-progress").css({
        height: 0,
        transition: "height 0s"
    });
}


$('.home').on('click', function() {
    if ($(this).hasClass("show")) {
        $(this).addClass('active');
    } else {
        $(this).removeClass('active');
    }
});

// Basice Code keep it 
// $(document).ready(function () {
//     $("#lightgallery").lightGallery();
//     $(".view_all_smart").click(function() {
//         $("#lightgallery > div:first-child").trigger("click");
//     })
//      $("camera_next").css("background", "url(assets/images/smart-cinema/2.jpg) no-repeat center center/80% 80%");

// });

/*sticky head */
$(window).scroll(function() {
    if (segment_url == '/' || segment_url != "") {
        // console.log("run console");
        var s = $(this).scrollTop();
        var h = $("#header").outerHeight();
        var hs = s - h;
        // console.log(hs)
        var sh = hs - h;
        //console.log(sh)
        if (s > h) {
            $('#header').addClass('header-fixed');
            $('#header').css({ 'margin-top': sh + 'px' });
            if (sh >= 0)
                $('#header').css({ 'margin-top': '0px' });
        } else {
            $('#header').removeClass('header-fixed').css({ 'margin-top': '-' + s + 'px' });
        }
    }
})

/* current select */
// $(document).ready(function() {
//     $(".owl-next").css("background", "url(assets/images/smart-cinema/2.jpg) no-repeat center center/100%");
//     $(document).on("scroll", onScroll);
//     $('.navbar-nav li a.pass_by_id').on('click', function(e) {
//         e.preventDefault();
//         $(document).off("scroll");

//         $('.navbar-nav li a.pass_by_id').each(function() {
//             $(this).removeClass('active');
//         })
//         $(this).addClass('active');
//         var target = this.hash,
//             menu = target;
//         $target = $(target);
//         $('html, body').stop().animate({
//             'scrollTop': $target.offset().top + 2
//         }, 500, 'swing', function() {
//             window.location.hash = target;
//             $(document).on("scroll", onScroll);
//         });
//     });
// });


function scrollToAnyPoint(navItem) {
    var getAttr;
    $('.navbar-nav li a.pass_by_id').click(function(e) {
        e.preventDefault();
        getAttr = $(this).attr('href');
        var toSection = $(getAttr).offset().top - 1000;
        $("html, body").animate({ scrollTop: toSection }, 1000)
    });
}
//Call Function
scrollToAnyPoint('nav ul li a.pass_by_id');

$(document).ready(function() {
    $(".navbar-nav li a.pass_by_id").click(function(e) {
        e.preventDefault();
        $(".navbar-nav li a.pass_by_id").removeClass("active"); //Remove any "active" class  
        $(this).addClass("active"); //Add "active" class to selected tab  
        // $(activeTab).show(); //Fade in the active content  
    });
});

var selector = '.navbar-nav li a.nav-link';
$(selector).on('click', function() {
    $(selector).removeClass('active');
    $(this).addClass('active');
});


/*new scroll event */

$(document).ready(function() {

    //console.log('ganesh')
    // $(document).on("scroll", onScroll);

    //smoothscroll
    // $('a[href^="#"]').on('click', function(e) {

    //     e.preventDefault();
    //     $(document).off("scroll");

    //     $('a').each(function() {
    //         $(this).removeClass('active');
    //     })
    //     $(this).addClass('active');
    //     var target = this.hash,
    //         menu = target;
    //     $target = $(target);
    //     $('html, body').stop().animate({
    //         'scrollTop': $target.offset().top + 1
    //     }, 500, 'swing', function() {
    //         window.location.hash = target;
    //         $(document).on("scroll", onScroll);
    //     });
    // });

    // let video = document.querySelector('video');
    // window.addEventListener('scroll', function() {
    //     let value = 1 + window.scrollY / -600;
    //     //console.log(value)
    //     video.style.opacity = value;
    // });



});

// Use Your Class or ID For Selection 


// function onScroll(event) {
//     var scrollPos = $(document).scrollTop();
//     $('.navbar-nav a').each(function() {
//         var currLink = $(this);
//         var refElement = $(currLink.attr("href"));
//         // console.log(currLink)
//         if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
//             $('.navbar-nav li a').removeClass("active");
//             currLink.addClass("active");
//             $('.line').removeClass("animate__animated animate__backInLeft");
//             $('.left').removeClass("animate__animated animate__backInRight");
//             $('.right2').removeClass("animate__animated animate__backInLeft");

//         } else {
//             currLink.removeClass("active");
//             $('.line').addClass("animate__animated animate__backInLeft ");
//             $('.left').addClass("animate__animated animate__backInRight");
//             $('.right2').addClass("animate__animated animate__backInLeft");

//         }
//     });
// }


jQuery(function() {

    /*new slider */
    // jQuery('#camera_wrap').camera();

    //   console.log('slider')
    jQuery('#camera_wrap').camera({

        // topLeft, topCenter, topRight, centerLeft, center, centerRight, bottomLeft, bottomCenter, bottomRight
        alignment: 'center',

        // true, false
        autoAdvance: true,

        // true, false. Auto-advancing for mobile devices
        mobileAutoAdvance: true,

        // 'leftToRight', 'rightToLeft', 'topToBottom', 'bottomToTop'
        barDirection: 'leftToRight',

        // 'bottom', 'left', 'top', 'right'
        barPosition: 'bottom',

        // the number of columns
        cols: 6,

        //for the complete list http://jqueryui.com/demos/effect/easing.html
        easing: 'easeInOutExpo',

        //leave empty if you want to display the same easing on mobile devices and on desktop etc.
        mobileEasing: '',

        // 'random','simpleFade', 'curtainTopLeft', 'curtainTopRight', 'curtainBottomLeft', 'curtainBottomRight', 'curtainSliceLeft', 'curtainSliceRight', 'blindCurtainTopLeft', 'blindCurtainTopRight', 'blindCurtainBottomLeft', 'blindCurtainBottomRight', 'blindCurtainSliceBottom', 'blindCurtainSliceTop', 'stampede', 'mosaic', 'mosaicReverse', 'mosaicRandom', 'mosaicSpiral', 'mosaicSpiralReverse', 'topLeftBottomRight', 'bottomRightTopLeft', 'bottomLeftTopRight', 'bottomLeftTopRight'
        //you can also use more than one effect, just separate them with commas: 'simpleFade, scrollRight, scrollBottom'
        fx: 'random',

        // leave empty if you want to display the same effect on mobile devices and on desktop etc.
        mobileFx: '',

        // to make the <a href="https://www.jqueryscript.net/tags.php?/grid/">grid</a> blocks slower than the slices, this value must be smaller than transPeriod
        gridDifference: 250,

        // here you can type pixels (for instance '300px'), a percentage (relative to the width of the slideshow, for instance '50%') or 'auto'
        height: '50%',

        // the path to the image folder (it serves for the blank.gif, when you want to display <a href="https://www.jqueryscript.net/tags.php?/video/">video</a>s)
        imagePath: 'images/',

        // true, false. Puase on state hover. Not available for mobile devices
        hover: true,

        // pie, bar, none (even if you choose "pie", old browsers like IE8- can't display it... they will display always a loading bar)
        loader: 'pie',
        loaderColor: '#eeeeee',
        loaderBgColor: '#222222',
        loaderOpacity: .8, //0, .1, .2, .3, .4, .5, .6, .7, .8, .9, 1
        loaderPadding: 2,
        loaderStroke: 7,
        pieDiameter: 38,
        piePosition: 'rightTop', //'rightTop', 'leftTop', 'leftBottom', 'rightBottom'

        // you can also leave it blank
        minHeight: '200px',

        // true or false, to display or not the navigation buttons
        navigation: true,

        // if true the navigation button (prev, next and play/stop buttons) will be visible on hover state only, if false they will be visible always
        navigationHover: true,

        // same as above, but only for mobile devices
        mobileNavHover: true,

        // true, false. Decide to apply a fade effect to blocks and slices: if your slideshow is fullscreen or simply big, I recommend to set it false to have a smoother effect 
        opacityOnGrid: false,

        // a layer on the images to prevent the users grab them simply by clicking the right button of their mouse (.camera_overlayer)
        overlayer: true,

        // enable pagination
        pagination: true,

        // true or false, to display or not the play/pause buttons
        playPause: true,

        // true, false. It stops the slideshow when you click the sliders.
        pauseOnClick: true,

        // true, false. Select true if you don't want that your images are cropped
        portrait: false,

        // the number of rows
        rows: 4,

        // if 0 the same value of cols
        slicedCols: 12,

        // if 0 the same value of rows
        slicedRows: 8,

        // next, prev, random: decide if the transition effect will be applied to the current (prev) or the next slide
        slideOn: 'random',

        // shows thumbnails
        thumbnails: false,

        // milliseconds between the end of the sliding effect and the start of the nex one
        time: 7000,

        // lenght of the sliding effect in milliseconds
        transPeriod: 1500,

        // invoked when the transition effect ends
        onEndTransition: function() { console.log('slider') },

        // invoked when the image on a slide has completely loaded
        onLoaded: function() { console.log('slider') },

        // invoked when the image on a slide start loading
        onStartLoading: function() { console.log('slider') },

        // invoked when the transition effect starts
        onStartTransition: function() { console.log('slider') }
    });

});


/* Slider for mobile view */
var $homeSlider = $(".msme_program");
$(window).resize(function() {
    showHomeSlider();
});

function showHomeSlider() {
    if ($homeSlider.data("owlCarousel") !== "undefined") {
        if (window.matchMedia('(max-width: 600px)').matches) {
            initialHomeSlider();
        } else {
            destroyHomeSlider();
        }
    }
}
showHomeSlider();

function initialHomeSlider() {
    $homeSlider.addClass("owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        dots: false,
        stagePadding: 50,
        mouseDrag: true,
        slideSpeed: 300,
        autoplay: false,

    });
}

$('.brand-carousel').owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})

function destroyHomeSlider() {
    $homeSlider.trigger("destroy.owl.carousel").removeClass("owl-carousel");
}