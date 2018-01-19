// Navbar colour changes
var collapsedBool = false;

$(window).scroll(function() {
    if($(this).scrollTop() > 0) {
        $('nav').addClass('opaque');
    } else if ($(this).scrollTop() <= 0 && (collapsedBool === false)) {
        $('nav').removeClass('opaque');
    }
});

function toggleNavbarColour(){
    collapsedBool = !collapsedBool;
	if($(this).scrollTop() === 0) {
        $('nav').toggleClass('opaque');
	}
};