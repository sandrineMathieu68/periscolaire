<?php
require_once('personnalisation-cpt/tarifs.php');
require_once('personnalisation-cpt/horaires.php');
require_once('personnalisation-cpt/partenaires.php');
//======================================================
//===   Chargement des styles/scripts Front End  =========
//======================================================
define('LGMAC_VERSION', '1.0.1');
// Chargement dans le front-end
function lgmac_scripts() {
	// Chargement des styles
	wp_enqueue_style( 'lgmac_bootstrap-core', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), LGMAC_VERSION, 'all');

// POUR FAIRE appel à la bibliotheque animate css seulement sur la page où il se trouve saison 3 dernière vidéo
	if(is_front_page()) :
	wp_enqueue_style( 'lgmac_animate', get_template_directory_uri() . '/assets/css/animate.css', array(), LGMAC_VERSION, 'all');
	wp_enqueue_style( 'lgmac_custom', get_template_directory_uri() . '/style.css', array('lgmac_bootstrap-core', 'lgmac_animate'), LGMAC_VERSION, 'all');
	else:
	wp_enqueue_style( 'lgmac_custom', get_template_directory_uri() . '/style.css', array('lgmac_bootstrap-core'), LGMAC_VERSION, 'all');		

	endif;	


	

	// Chargement des scripts
	if(!is_admin()){
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), LGMAC_VERSION, true);
		//wp_enqueue_script('jquery');
	}


	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), LGMAC_VERSION, true); 
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery', 'popper-js'), LGMAC_VERSION, true); 		
	wp_enqueue_script( 'lgmac_admin_script', get_template_directory_uri() . '/js/app.js', array('jquery', 'bootstrap-js'), LGMAC_VERSION, true);
	
}// fin function lgmac_scripts
add_action('wp_enqueue_scripts', 'lgmac_scripts');

//======================================================
//====   Activation des styles/scripts dashboard   ===== <!--  modifier saison 2 episode 3 -->
//======================================================

function lgmac_admin_init() {

	// *******************   Action 1 
	function lgmac_admin_scripts() {// pour garder dans réglage général la couleur d'origine sinon sur la page lgmac_theme_opts devient rouge
		// pour montrer une desinstallation par defaut et ajout autre bibliotheque
		// <!--  modifier saison 7 episode 5 -->
		if(!isset($_GET['page']) || $_GET['page'] != "lgmac_theme_opts") {
			return;
		}
		// Chargement des styles admin
		wp_enqueue_style( 'bootstrap-adm-core', get_template_directory_uri() . '/assets/css/bootstrap.min-3-3.css', array(), LGMAC_VERSION);

		// Chargement des scripts admin
		wp_enqueue_media();
		wp_enqueue_script( 'lgmac-admin-init', get_template_directory_uri() . '/js/admin-options.js', array(), LGMAC_VERSION, true);
		}// fin function lgmac_scripts

		add_action('admin_enqueue_scripts', 'lgmac_admin_scripts');

	// *******************   Action 2
	include('includes/save-options-page.php');//contient la function lgmac_save_options
	add_action('admin_post_lgmac_save_options', 'lgmac_save_options');

} // Fin de la function lgmac_admin_init

add_action('admin_init', 'lgmac_admin_init');

//======================================================
//=============   Activation des options   =============
//======================================================
// <!-- saison 2 episode 3 -->

function lgmac_activ_options() {
	if(!$theme_opts) {
		$opts = array(
			'image_01_url'	=> '',
			'legend_01'		=> ''
		);
		add_option('lgmac_opts', $opts);
	}
}
add_action('after_switch_theme', 'lgmac_activ_options');

//======================================================
//============   Menu option du theme    ===============
//======================================================
// <!-- saison 2 episode 3 -->

function lgmac_admin_menus() {
	add_menu_page(
		'periscolaire Options',
		'Option du thème',
		'publish_pages',
		'lgmac_theme_opts',
		'lgmac_build_options_page'
	);

	include('includes/build-options-page.php'); //contient la function lgmac_build_options_page

} //fin lgmac_admin_menus
add_action('admin_menu', 'lgmac_admin_menus');
// il faut penser à gerer les droits d'utilisateur depuis l'admin wp

//==========================================================================
//=======  Sidebar et widgetized (on peut les utiliser partout)  ===========// <!-- saison 2 episode 6 -->
//==========================================================================
     // <!-- saison 2 episode 6 -->
function lgmac_widgets_init(){
	register_sidebar(array(
		'name'     		  => 'Footer Widget Zone',
		'description'     => 'Widgets affichés dans le footer: 4 au maximum',
		'id'     		  => 'widgetized-footer',
		'before_widget'   => '<div id="%1$s" class="col-3 %2$s"><div class="inside-widget">',
		'after_widget'    => '</div></div>',
		'before_title'    => '<h2 class="h3 text-center">',
		'after_title'    => '</h2>'		

	));

}

add_action('widgets_init', 'lgmac_widgets_init');

//==========================================================================
//=======     Mon propre widget    ===========// <!-- saison 2 episode 6 -->
//==========================================================================
     // <!-- saison 2 episode 6 -->
function lgmac_widgets2_init(){
	register_sidebar(array(
		'name'     		  => 'Accueil Widget Zone',
		'description'     => 'Widgets affichés dans le milieu de page: 4 au maximum',
		'id'     		  => 'widgetized-milieu',
		'before_widget'   => '<div id="%1$s" class="col-3 %2$s mywid"><div class="inside-widget">',// code html qui encadre chacun des widget
		'after_widget'    => '</div></div>',
		'before_title'    => '<h2 class="h3 text-center">',
		'after_title'    => '</h2>'		

	));

}

add_action('widgets_init', 'lgmac_widgets2_init');

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

	// crée format image slider front
	add_image_size('front-slider', 1140, 420, true);

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


//============================================================
//===  Ajout de la taille Medium large dans la selection  ====  <!-- saison 2 episode 5 à 16MN -->
//============================================================

function my_images_sizes($sizes) {
	$addsizes = array(
		"medium_large" => "Medium Large"
	);

	$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}
add_filter('image_size_names_choose', 'my_images_sizes');

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
	// si l'article n'a pas d'étiquettes
	if(strlen($tags) > 0 ):
	$chaine .= ' avec les étiquettes: '.$tags;
	endif;

	return $chaine;
}

//======================================================
//==    Modifier le texte de suite d'excerpt  ==========
//======================================================
// <!-- saison 1 episode 13/13 5MN -->

function lgmac_excerpt_more($more) {

        return ' <a class="more-link"href="' .get_permalink() .'">' . ' [lire la suite]' . '</a>';
}
add_filter( 'excerpt_more', 'lgmac_excerpt_more' );

//======================================================
//======   CPT slider frontal page d'accueil   =========
//======================================================
// <!-- saison 3 episode 3 -->

function lgmac_slider_init() {

	$labels = array(
		'name'               =>  'Images Carousel Accueil' ,
		'singular_name'      =>  'Images Accueil' ,
		'add_new'            =>  'Ajouter une image',
		'add_new_item'       =>  'Ajouter une image accueil',
		'edit_item'          =>  'Modifier une image accueil',
		'new_item'           =>  'Nouveau',
		'all_items'          =>  'Voir la liste',
		'view_item'          =>  'Voir l\'élément' ,
		'search_items'       =>  'Chercher une Image accueil',
		'not_found'          =>  'Aucun élément trouvé',
		'not_found_in_trash' =>  'Aucun élément dans la corbeille', 
		'menu_name'          =>  'Slider Frontal' 
		);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 20,// VERIFIER LES DIIFERENT PLACEMENT AVEC CHIFFRE DANS CODEX POUR POSSITION DANS WP
		'menu_icon'          => get_stylesheet_directory_uri() . '/img/', // pour ajouter icon devant
		'publicly_queryable' => false,
		'exclude_from_search'=> true,
		'supports'           => array( 'title', 'page-attributes', 'thumbnail')
								// si on souhaite ssaissir directement dans admin, mais l'utilisateur risque de mettre trop de contenu array( 'title', 'editor', 'page-attributes', 'thumbnail')			
	);	
register_post_type('lgmac_slider', $args);

} // fin function lgmac_slider_init

add_action('init', 'lgmac_slider_init');


//=============================================================================
//==   ajout de l'image et ordre dans la colonne admin pour le slider  =========
//=============================================================================
// <!-- saison 3 episode 3 à 10 mn -->

add_filter('manage_edit-lgmac_slider_columns', 'lgmac_col_change'); //change de colonne

function lgmac_col_change($columns) {
	$columns['lgmac_slider_image_order'] = "Ordre";
	$columns['lgmac_slider_image'] = "Image affiché";

	return $columns;
}

add_action('manage_lgmac_slider_posts_custom_column', 'lgmac_content_show', 10, 2); //affiche

function lgmac_content_show($columns, $post_id){
	global $post;
	if($columns == 'lgmac_slider_image') {
		echo the_post_thumbnail(array(100, 100));
	}
	if($columns == 'lgmac_slider_image_order') {
		echo $post->menu_order;
	}	
}

//=============================================================================
//======   tri auto sur l'ordre dans la colonne admin pour le slider  =========
//=============================================================================
// <!-- saison 3 episode 3 à 19 mn -->

function lgmac_change_slides_order($query) {

	global $post_type, $pagenow;

	if($pagenow== 'edit.php' && $post_type == 'lgmac_slider') {
		$query->query_vars['orderby'] = 'menu_order';
		$query->query_vars['order'] = 'asc';
	}
}

add_action('pre_get_posts', 'lgmac_change_slides_order');


//============================================================
//======   rendre la colonne triable pour le slider  ====   autre façon sur admin direct avec flêche a coté d'ordre
//============================================================
// <!-- saison 3 episode 4 à 1 mn -->

/*add_filter('manage_edit-lgmac_slider_sortable_columns', 'my_sortable_cake_column');

function my_sortable_cake_column($columns) {

	$columns['lgmac_slider_image_order'] = 'menu_order';

	return $columns;
}*/
function ld_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'ld_custom_excerpt_length', 999 );

