var slider = false;
$(document).ready(function () {
    jQuery.scrollSpeed(200, 800);
    // alert('asd');

});
$(window).on('load', function () {
    endLoading();
    animate('.portfolio .title, .portfolio .subtitle',2700);
    animate('.line',3000);
    animate('.port-container,.slick-arrow',4500);
});
function endLoading(){
    var loader = new SVGLoader( document.getElementById( 'loader' ), { speedIn : 100 } );
    setTimeout( function() {
        $('.square-loader').hide();
        $('body').css('overflow-y', 'visible');
        loader.hide();
    }, 2000 );
}
function animate(element, delay = 0){
    setTimeout( function() {
        $(element).addClass('go');
    }, delay );

}

//smooth scrolling
(function($) {

    jQuery.scrollSpeed = function(step, speed, easing) {

        var $document = $(document),
            $window = $(window),
            $body = $('html, body'),
            option = easing || 'default',
            root = 0,
            scroll = false,
            scrollY,
            scrollX,
            view;

        if (window.navigator.msPointerEnabled)

            return false;

        $window.on('mousewheel DOMMouseScroll', function(e) {

            var deltaY = e.originalEvent.wheelDeltaY,
                detail = e.originalEvent.detail;
            scrollY = $document.height() > $window.height();
            scrollX = $document.width() > $window.width();
            scroll = true;

            if (scrollY) {

                view = $window.height();

                if (deltaY < 0 || detail > 0)

                    root = (root + view) >= $document.height() ? root : root += step;

                if (deltaY > 0 || detail < 0)

                    root = root <= 0 ? 0 : root -= step;

                $body.stop().animate({

                    scrollTop: root

                }, speed, option, function() {

                    scroll = false;

                });
            }

            if (scrollX) {

                view = $window.width();

                if (deltaY < 0 || detail > 0)

                    root = (root + view) >= $document.width() ? root : root += step;

                if (deltaY > 0 || detail < 0)

                    root = root <= 0 ? 0 : root -= step;

                $body.stop().animate({

                    scrollLeft: root

                }, speed, option, function() {

                    scroll = false;

                });
            }

            return false;

        }).on('scroll', function() {

            if (scrollY && !scroll) root = $window.scrollTop();
            if (scrollX && !scroll) root = $window.scrollLeft();

        }).on('resize', function() {

            if (scrollY && !scroll) view = $window.height();
            if (scrollX && !scroll) view = $window.width();

        });
    };

    jQuery.easing.default = function (x,t,b,c,d) {

        return -c * ((t=t/d-1)*t*t*t - 1) + b;
    };

})(jQuery);