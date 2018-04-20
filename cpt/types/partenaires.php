<?php
add_action( 'init', 'register_partenaires' );

function register_partenaires() {

	$labels = array(
		'name'               => 'Partenaires',
		'singular_name'      => 'Exemple partenaires',
		'menu_name'          => 'Partenaires',
		'name_admin_bar'     => 'Partenaires',
		'add_new'            => 'ajouter un partenaire',
		'add_new_item'       => 'ajouter une Nouvelle informations',
		'new_item'           => 'Nouveau partenaire',
		'edit_item'          => 'Éditer un partenaire',
		'view_item'          =>'voir l\'information',
		'all_items'          => 'tous les partenaires',
		'search_items'       => 'Rechercher un partenaire',
		'parent_item_colon'  => '',
		'not_found'          => 'aucun partenaire',
		'not_found_in_trash' => 'aucune partenaire dans la corbeille'
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'partenaires' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 40,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
	);

	register_post_type( 'partenaires', $args );
}