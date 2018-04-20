<?php
add_action( 'init', 'register_tarifs' );

function register_tarifs() {

	$labels = array(
		'name'               => 'Tarifs',
		'singular_name'      => 'Exemple tarifs',
		'menu_name'          => 'Tarifs',
		'name_admin_bar'     => 'Tarifs',
		'add_new'            => 'ajouter un tarif',
		'add_new_item'       => 'ajouter un Nouveau tarif',
		'new_item'           => 'Nouveau tarif',
		'edit_item'          => 'Éditer un tarif',
		'view_item'          =>'voir le tarif',
		'all_items'          => 'Tous les tarifs',
		'search_items'       => 'Rechercher une heure',
		'parent_item_colon'  => '',
		'not_found'          => 'aucune informations',
		'not_found_in_trash' => 'aucune informations dans la corbeille'
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'tarifs' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 40,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
	);

	register_post_type( 'tarifs', $args );
}

//dimensionner une immage

if((isset($_REQUEST['post_id']) && get_post_type($_REQUEST['post_id']) == 'tarifs') || (isset($_REQUEST['action']) && $_REQUEST['action'] == 'delete')){

	set_post_thumbnail_size(240,240,true);

}