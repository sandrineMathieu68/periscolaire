var menu = 0;
$('.menu-burger').click(function(){
  var menu_r = $(".menu").html();
  menu++;
  if(menu == 1){
    $('.menu_tel').css('width','79vw');
    $('.menu_tel').css('display','flex');
    $('.menu_tel').html("<ul>"+menu_r+"</ul>");
  } else if( menu == 2){
    $('.menu_tel').css('width','0%');
    $('.menu_tel').html('');
    menu = 0;
  }
});

  // On gère le scroll vers les différentes sections du site
  $(".scroll").click(function() {
    var section = $("." + this.id);
    $("html,body").animate({scrollTop: section.offset().top}, 'slow');
  });
