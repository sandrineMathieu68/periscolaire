<?php
//======================================================
//=================   Chargement des scripts   =========
//======================================================
define('LGMAC_VERSION', '1.0.1');
// Chargement dans le front-end
function lgmac_scripts() {
	// Chargement des styles
	wp_enqueue_style( 'lgmac_bootstrap-core', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), LGMAC_VERSION, 'all');
	wp_enqueue_style( 'lgmac_custom', get_template_directory_uri() . '/style.css', array('lgmac_bootstrap-core'), LGMAC_VERSION, 'all');
	// Chargement des scripts
	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), LGMAC_VERSION, true); 
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery', 'popper-js'), LGMAC_VERSION, true); 		
	wp_enqueue_script( 'lgmac_admin_script', get_template_directory_uri() . '/js/app.js', array('jquery', 'bootstrap-js'), LGMAC_VERSION, true); 
	
}// fin function lgmac_scripts
add_action('wp_enqueue_scripts', 'lgmac_scripts');
// Chargement dans l'admin
function lgmac_admin_scripts() {
	// Chargement des styles
	wp_enqueue_style( 'bootstrap-adm-core', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), LGMAC_VERSION);
}// fin function lgmac_scripts
add_action('admin_init', 'lgmac_admin_scripts');

//======================================================
//=======  ajout des icons // Font Awesome   ===========
//======================================================

function yourtheme_enqueue_scripts() {

        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', array(), LGMAC_VERSION );
}
add_action( 'wp_enqueue_scripts', 'yourtheme_enqueue_scripts' );


//======================================================
//======================  Utilitaires   ================
//======================================================
function lgmac_setup(){
	//support des vignettes image à la une
	add_theme_support('post-thumbnails');
	//enlève générateur de version wordpress
	remove_action('wp_head', 'wp_generator');
	//enlève les guillemets à la française
	//remove_filter('the_content', 'wptexturize');
	//affichage du tittle
	add_theme_support('title-tag');
	//Register custom navigation walker
	require_once('includes/class-wp-bootstrap-navwalker.php');
	//active la gestion des menus
	register_nav_menus(array('primary' => 'principal'));
}// fin function lgmac_setup
add_action('after_setup_theme', 'lgmac_setup');

//======================================================
//=============   Affichage date + categorie  ==========
//======================================================

// Modèle du résultat
// <!-- saison 1 episode 10/13 12MN -->
function lgmac_give_me_meta_01($date1, $date2, $cat, $tags){

	$chaine  = 'publié le <time class="entry-date" datetime="';
	$chaine .= $date1;
	$chaine .= '">';
	$chaine .= $date2;
	$chaine .= '</time> dans la catégorie ';
	$chaine .= $cat;
	$chaine .= ' avec les étiquettes: '.$tags;

	return $chaine;
}

