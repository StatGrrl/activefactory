function readyFn( jQuery ) {
    // Code to run when the document is ready.
}
 
$( document ).ready( readyFn );
// or:
$( window ).on( "load", readyFn );

$('#mixedSlider1').multislider({
	duration: 750,
	interval: 3000
});

$('#mixedSlider2').multislider({
	duration: 750,
	interval: 3000
});

// When the user scrolls the page, execute myFunction 
window.onscroll = function() {scrollFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Get the logo
var logo = document.getElementById("logo");

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function scrollFunction() {
	if (window.pageYOffset >= sticky) {
		navbar.classList.add("sticky")
	} else {
		navbar.classList.remove("sticky")
	}
}

$('a[href^="#"]').on('click',function (e) {
    e.preventDefault();
    var target = this.hash;
    var $trget = $(target);
    // Example: your header is 80px tall.
    var newTop = $trget.offset().top; 
    $('html, body').animate ({
        scrollTop: newTop
    }, 500, 'swing', function () {
        window.location.hash = target;
    }); 
});

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
	acc[i].addEventListener("click", function() {
		/* Toggle between adding and removing the "active" class,
		to highlight the button that controls the panel */
		this.classList.toggle("active");

		/* Toggle between hiding and showing the active panel */
		var panel = this.nextElementSibling;
 		if (panel.style.display === "block") {
      		panel.style.display = "none";
    	} else {
      		panel.style.display = "block";
    	}
  	});
}
