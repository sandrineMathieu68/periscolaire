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

/* **************************************************** */
/*          Gestion second titre avec Romain            */
/* **************************************************** */
/*var a = 0;
 $(function(){
   $(window).scroll(function () {//Au scroll dans la fenetre on déclenche la fonction
      if ($(this).scrollTop() > 314) { //si on a défilé de plus de 160px du haut vers le bas
        a++;
        if(a == 1){
          alert("hello");
        }

      } else {
        a++;
        if(a == 2){
          console.log('r');
          a = 0;
          
        }
      $('header').removeClass("fixe");//sinon on retire la classe "fixe" (c'est pour laisser le header à son endroit de départ lors de la remontée
      }
   });
 });*/


 $(document).ready(function( $ ) {
  $('#entete').hide();

  $(function(){
    $(window).scroll(function(){

      if ($(this).scrollTop() > 150) {
        $('#entete').fadeIn();
         $('#entete').css('background-color', '#fff');
          $('li').css('background-color', '#FFFD73');
        //$('li').css('border-radius', '50%');
        //$('ul').css('margin', '15px');
        //$('ul').css('margin-top', '50px');
        //$('ul').css('background-color', '#B4BDB3');
        $('a').css('color', '#3b3a39');
      }else{

        $('#entete').fadeOut();
        $('li').css('background-color', '#B4BDB3');
        //$('li').css('background-color', '#b4bdb3');
        //$('a').css('color', '#fff');
        //$('li').css('border-radius', '0%');
        
        //$('ul').css('margin', '0px');
      }

    });

  });

});




