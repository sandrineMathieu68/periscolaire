/* **************************************************** */
/*           Gestion du carrousel/Animation             */
/*        <!--  modifier saison 3 episode 6 -->         */
/* **************************************************** */

// la methode jQuery.data permet de récuperer dynamiquement l'attribut data-

jQuery(document).ready(function($) {

  if(document.getElementById("slider-01")) {

    var $myCarousel = $('.carousel') ;

    // start carousel
    $myCarousel.carousel({
      interval: 5000
    });
  } // fin document.getElementById

  $myCarousel.on('slide.bs.carousel', function (e) {
    var $animatingElems =  $(e.relatedTarget).find("[data-animation ^= 'animated']") ;
    doAnimations($animatingElems);
  });

  var $firstAnimatedElement = $myCarousel.find(".carousel-item:first").find("[data-animation ^= 'animated']") ; // ^ signifi qui commence par la chaîne animated
  doAnimations($firstAnimatedElement);

  function doAnimations(elems) {   
    var animEndev = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

      elems.each(function() {

        var $this = $(this); // transformer objet js en objet jQuery pour appliquer des méthodes
        $animationType = $this.data('animation');

        //console.log($animationType + Math.random());
        $this.addClass($animationType).one(animEndev,function() {
          $this.removeClass($animationType);
        });

      });// fin du each  

  } // fin function doAnimations

  // Pause du carousel
  //$myCarousel.carousel('pause');  changement d'image manuel
  // et l'on redemarre automatique avec .carousel('cycle') a paramétré au click de la flêche


}); // fin du ready



//$('#yourElement').addClass('animated bounceOutLeft');



