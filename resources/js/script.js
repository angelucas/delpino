document.addEventListener( 'DOMContentLoaded', function () {
  new Splide( '.splide', {
    cover     : true,
    perPage   : 1,
	  height    : '10rem',
  } ).mount();
} );






// ------------JQUERY

$(document).ready(function(){
	$('.js--section-features').waypoint(function(direction){

		/*direction indica a direcao 
		do scrolling: para cima, para baixo*/
		/*Se tiver indo para baixo*/
		if(direction=="down"){
			/*Adicionar a classe sticky ao elemento nav*/
			$('nav').addClass('sticky');
		}else{
			$('nav').removeClass('sticky');
		}

	},{
		offset:'60px;'
});

});

// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1100, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });