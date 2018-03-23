jQuery(document).ready(function( $ ) {

/* **************************************************** */
/*                Ajout image dans page                 */
/*        <!--  modifier saison 7 episode 5 -->         */
/* **************************************************** */

	var frame = wp.media({
		title: 'Sélectionner une image',
		button: {
			text: 'Utiliser ce Média'
		},
		multiple: false /* si l'on souhaite utiliser plusieurs img alors TRUE */
	});

$("#form-lgmac-options #btn_img_01").click(function(e){

	e.preventDefault();
frame.open();	

});


frame.on('select', function(){

	var objImg = frame.state().get('selection').first().toJSON();
	var mon_url = objImg.sizes.medium_large.url;/* bien nomme la taille qui sont defini dans wp */

	$("img#img_preview_01").attr('src', mon_url);
	$("input#lgmac_image_01").attr('value', mon_url);	
	$("input#lgmac_image_url_01").attr('value', mon_url);	

});

}); //fin du ready jQuery

