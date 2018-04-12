<?php 

//==============================================================
//===   custom post type lgmac_anniversaires SAISON 4 EPISODE 2
//==============================================================

//initialise cpt lgmac-vacances
function lgmac_anniversaires_init() {

	$labels = array(
		'name'               =>  'Contenu perso' ,
		'singular_name'      =>  'CD' ,
		'add_new'            =>  'Ajouter un élément',
		'add_new_item'       =>  'Ajouter un élément',
		'edit_item'          =>  'Modifier un élément ',
		'new_item'           =>  'Nouvel élément',
		'all_items'          =>  'Voir la liste',
		'view_item'          =>  'Voir l\'élément' ,
		'search_items'       =>  'Chercher des élément',
		'not_found'          =>  'Aucun élément trouvé',
		'not_found_in_trash' =>  'Aucun élément dans la corbeille', 
		'menu_name'          =>  'Ajouts CPT' 
		);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'publicly_queryable' => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'conditions'),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,//mettre a true si un sous parent video 4 a 9mn
		'menu_position'      => 10,// VERIFIER LES DIFFERENT PLACEMENT AVEC CHIFFRE DANS CODEX POUR POSSITION DANS WP
		'menu_icon'          => get_stylesheet_directory_uri() . '/img/', // pour ajouter icon devant
		//'publicly_queryable' => false,
		'exclude_from_search'=> false,// pour affichage selon taxonomie.php avec soirée festive dans le menu 
		//'register_meta_box_cb' => 'lgmac_anniversaires_register_meta_box',//, si on souhaite l'utiliser saison4 video6 à 5mn
		// 'taxonomies'  => array('post-tag', 'category'), // si on souhaite mettre des categories
		'supports'           => array( 'title', 'editor', 'thumbnail') // definit les élément visibles ds admin
								// si on souhaite saissir directement dans admin, mais l'utilisateur risque de mettre trop de contenu array( 'title', 'editor', 'page-attributes', 'thumbnail')			
	);	


	register_post_type('lgmac_anniversaires', $args);

}// fin lgmac_anniversaires_init

//------ se Coller au hook initiale
add_action('init', 'lgmac_anniversaires_init');

//===============================================================================
//===   meta boxes pour custom post type lgmac_anniversaires  SAISON 4 EPISODE 5  ====
//===============================================================================
function lgmac_anniversaires_register_meta_box() {
	add_meta_box('lgmac_anniversaires_meta', 'Thème des anniversaires', 'lgmac_anniversaires_meta_building', 'lgmac_anniversaires', 'normal', 'high');
}//end lgmac_anniversaires_meta_box

function lgmac_anniversaires_meta_building($post) {
	$lgmac_meta_an 	= get_post_meta($post->ID, '_vacances_meta_an',  true);
	$lgmac_meta_theme 	= get_post_meta($post->ID, '_vacances_meta_theme',  true);// pour aller chercher l'élément afin de retourner la valeur
	wp_nonce_field('lgmac_anniversaires_meta_box_saving', 'lgmac_25896');// nom de la valeur et parametre aux choix

	$lgmac_week = array();
	$lgmac_week[0] = 'Semaine';
	for($i=1; $i<53; $i++) { $lgmac_week[] = $i; }

	echo '<div>';
	echo '<p><label for="vacances_detail_an"> Semaines -&gt;&nbsp;</label>';
	echo '<select id="vacances_detail_an" name="vacances_detail_an">';
		foreach($lgmac_week as $lgmac_week):
			//echo '<option value"' . $lgmac_year . '">' . $lgmac_year . '</option>';
			echo '<option value"' . $lgmac_week . '"' . selected($lgmac_meta_an, $lgmac_week, false). '>'. $lgmac_week . '</option>';
		endforeach;
	echo '</select></p>';


	echo '<p><label for="vacances_detail_theme">  Thème </label>';
	echo '<input type="text" size="30" value="'.$lgmac_meta_theme .'" id="vacances_detail_theme" name="vacances_detail_theme"></p>';

	echo '</div';		
} // end lgmac_anniversaires_meta_building


//hook d'initialisation pour box d' lgmac_anniversaires
add_action('add_meta_boxes', 'lgmac_anniversaires_register_meta_box');


//======================================================================================
//===   sauvegarde meta boxes pour custom post type lgmac_anniversaires SAISON 4 EPISODE 5  ====
//======================================================================================
function lgmac_anniversaires_save_meta_box($post_id) {

	if ( get_post_type( $post_id) == 'lgmac_anniversaires' && isset( $_POST['vacances_detail_an']) ) {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) { return;}
		check_admin_referer('lgmac_anniversaires_meta_box_saving', 'lgmac_25896'); // pour wp de verifier pas de piratage , d'intrusion
		update_post_meta($post_id, '_vacances_meta_an',	sanitize_text_field($_POST['vacances_detail_an']));// sauvegarde ds la bdd si elle n'xiste pas
		update_post_meta($post_id, '_vacances_meta_theme',	sanitize_text_field($_POST['vacances_detail_theme']));
	}

} // end lgmac_anniversaires_save_meta_box

add_action('save_post', 'lgmac_anniversaires_save_meta_box');

//================================================================================
//==   ajout de l'image, de année et de l'éditeur dans la colonne admin  =========
//================================================================================
// <!-- RETOUR saison 3 episode 3 à 10 mn -->

add_filter('manage_edit-lgmac_anniversaires_columns', 'lgmac_col_change2'); //change de colonne

function lgmac_col_change2($columns) {
	$columns['lgmac_anniversaires_annee'] = "Semaine";
	$columns['lgmac_anniversaires_theme'] = "Thème";
	$columns['lgmac_anniversaires_image'] = "Image affichée";

	return $columns;
}

add_action('manage_lgmac_anniversaires_posts_custom_column', 'lgmac_content_show2', 10, 2); //affiche

function lgmac_content_show2($columns, $post_id){
	global $post;
	if($columns == 'lgmac_anniversaires_image') {
		echo the_post_thumbnail(array(120, 120));
	}
	if($columns == 'lgmac_anniversaires_theme') {
		$lgmac_meta_theme = get_post_meta($post_id, '_vacances_meta_theme',  true);
		echo $lgmac_meta_theme;
	}		
	if($columns == 'lgmac_anniversaires_annee') {
		$lgmac_meta_annee  = get_post_meta($post_id, '_vacances_meta_an',  true);
		echo $lgmac_meta_annee;
	}	
}

//=======================================================
//=======   Custom taxonomy for lgmac-vacances  ========= // episode 7 saison 4
//=======================================================

function lgmac_define_taxononomy_vacances() {

	$labels = array(
		'name'      		 => "Sujets",
		'singular_name'      => 'classements',
		'all_items'      	 => 'toutes les classements',
		'edit_item'      	 => 'mofifier une classement',
		'update_item'     	 => 'mettre à jour classements',
		'add_new_item'       => 'ajouter des classements',
		'search_items'       => 'Rechercher dans les classements',
		'new_item_name'      => "nouveau nom de l'info",
		'menu_name'      	 => "classement"
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'hierarchical'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'style'),
		'show_admin_column'  => true		
	);	

	register_taxonomy('condi_inscription', 'lgmac_anniversaires', $args);	
}

add_action('init', 'lgmac_define_taxononomy_vacances');

//=======================================================================================
//===   Ajoute lgmac-vacances a la requête par defaut de taxonomy.php  // episode 7 saison 6
//=======================================================================================

function lgmac_anniversaires_in_main_query($query){
	if(is_tax('condi_inscription') ) {
		//$query->set( 'post_type', array( 'post', 'page', 'nav_menu_item', 'lgmac_anniversaires'));
	}
}

add_action('pre_get_posts', 'lgmac_anniversaires_in_main_query');


