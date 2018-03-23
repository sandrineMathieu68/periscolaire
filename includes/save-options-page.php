<?php  
// Sauvegarde des options dans wp
function lgmac_save_options() {

//var_dump($_POST); die();
	if(!current_user_can('publish_pages')) {
		wp_die('Vous n\'êtes pas autorisé à effectuer cette opération');
	}

	check_admin_referer('lgmac_options_verify');

	$opts = get_option('lgmac_opts');

	//sauvegarde légende
	$opts['legend_01'] = sanitize_text_field($_POST['lgmac_legend_01']);

	//sauvegarde image
	$opts['image_01_url'] = sanitize_text_field($_POST['lgmac_image_url_01']);

	//valeur de legende dans la bdd
	update_option('lgmac_opts', $opts);

	// redirection vers la page des options avec l'url de la page
	wp_redirect(admin_url('admin.php?page=lgmac_theme_opts&status=1'));
	exit;

} // fin function lgmac_save_options