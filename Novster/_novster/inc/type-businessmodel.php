<?php

add_action( 'init', 'theme_businessmodel_post_types' );

function theme_businessmodel_post_types()
{
	$labels = array(
		'name' => 'Business Models',
		'singular_name' => 'Business Models',
		'menu_name' => 'Business Models',
		'name_admin_bar' => 'Business Models',
		'all_items' => 'All Business Models',
		'add_new' => 'Ajouter',
		'add_new_item' => 'Ajouter un Business Model',
		'edit_item' => 'Editer',
		'new_item' => 'Nouveau',
		'view_item' => 'Voir',
		'search_items' => 'Rechercher',
		'not_found' =>  'Non trouvé',
		'not_found_in_trash' => 'Non trouvé dans la corbeille',
		'parent_item_colon' => 'Parent',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => false,
		'has_archive' => true,
		'menu_position' => null,
		'menu_icon' => null,
		'hierarchical' => false,
		'rewrite' => array( 'slug' => 'businessmodel','with_front' => true,'feeds' => false,'pages' => true ),
		'query_var' => true,
		'can_export' => true,
		'supports' => array( 'author', 'editor', 'title' ),
        'capability_type'     => 'page',
        //'map_meta_cap'        => true,
	);
	register_post_type( 'businessmodel', $args );
}

function quotation_hide_seo_columns() {

	global $post;
	if( $post && $post->post_type != 'businessmodel' ) return;

	echo '<style media="screen" id="so-hide-seo-bloat" type="text/css">';
	echo '.column-wpseo-score,.column-wpseo_score,.column-wpseo-title,.column-wpseo-metadesc,.column-wpseo-score-readability{display:none!important;}';
	echo '</style>';
}

add_action( 'admin_head', 'quotation_hide_seo_columns');
