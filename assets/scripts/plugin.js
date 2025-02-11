/*
 *   Author : Azhar Hussain Masum
     Email: azharhussain4647@gmail.com
     Website: http://azharmasum.com/
     Facebook: https://www.facebook.com/azhar.hussainmasum
*/
// Avoid `console` errors in browsers that lack a console.
(function () {
    var method;
    var noop = function () { };
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.


//Camera Slide-Show Custom Js Here.
$(function () {
    $('.camera_wrap').camera({
        playPause: true,
        navigation: true,
        navigationHover: false,
        hover: false,
        loader: 'bar',
        loaderColor: 'red',
        loaderBgColor: '#222222',
        loaderOpacity: 1,
        loaderPadding: 0,
        time: 2000,
        transPeriod: 1500,
        pauseOnClick: true,
        pagination: true,
        onEndTransition: function () {
            var image_path = $(".cameracurrent img").attr('src');            
            var image_src = image_path.split('/')
            // console.log(image_src)
            var image_name = image_src[4].split('.')
            var current = image_name[0]  
            // console.log(current)
            var current_add = parseInt(current) + 1             
            let current2            
            if(current_add == 10)
            {
                current2 = parseInt(current) - 8;  
                // console.log(current2)               
            }    
            else
            {
                current2 = parseInt(current) + 1
                
            }
            //console.log(current2);
            $(".camera_next").css("background", "url(assets/images/smart-cinema/gallery/" + current2 + ".jpeg) no-repeat center center/80% 80%");

        }
    });
});