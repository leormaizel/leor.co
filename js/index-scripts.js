// Nav bar transition effect after scrolling >1 pixel
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 1) {
        $("#topbar").addClass("fullbar");
    } else {
        $("#topbar").removeClass("fullbar");
    }
});
// Smooth scroll from nav anchor to body
$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});
//Gradient genrator for header section
var granimInstance = new Granim({
    element: '#canvas-basic',
    name: 'basic-gradient',
    direction: 'left-right',
    opacity: [1, 1],
    isPausedWhenNotInView: true,
    states: {
        "default-state": {
            gradients: [
                ['#2BABB1', '#35CDAC'],
                ['#35CDAC', '#2BABB1'],
                ['#35CD88', '#2B98B1'],
                ['#3592CD', '#2BB174']
            ]
        }
    }
});