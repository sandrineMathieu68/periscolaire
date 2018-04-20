<?php
add_action( 'init', 'register_horaires' );

function register_horaires() {

	$labels = array(
		'name'               => 'Horaires',
		'singular_name'      => 'Exemple horaires',
		'menu_name'          => 'Horaires',
		'name_admin_bar'     => 'Horaires',
		'add_new'            => 'ajouter un horaire',
		'add_new_item'       => 'ajouter un Nouvel horaire',
		'new_item'           => 'Nouvel Information',
		'edit_item'          => 'Éditer un horaire',
		'view_item'          =>'voir l\'information',
		'all_items'          => 'Tous les horaires',
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
		'rewrite'            => array( 'slug' => 'horaires' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 40,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
	);

	register_post_type( 'horaires', $args );
}