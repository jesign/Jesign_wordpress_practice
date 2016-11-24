<?php 


function recipe_init(){
	$labels = array(
			'name'               => __( 'Recipes', 'post type general name', 'recipe' ),
			'singular_name'      => __( 'Recipe', 'post type singular name', 'recipe' ),
			'menu_name'          => __( 'Recipes', 'admin menu', 'recipe' ),
			'name_admin_bar'     => __( 'Recipe', 'add new on admin bar', 'recipe' ),
			'add_new'            => __( 'Add New', 'Recipe', 'recipe' ),
			'add_new_item'       => __( 'Add New Recipe', 'recipe' ),
			'new_item'           => __( 'New Recipe', 'recipe' ),
			'edit_item'          => __( 'Edit Recipe', 'recipe' ),
			'view_item'          => __( 'View Recipe', 'recipe' ),
			'all_items'          => __( 'All Recipes', 'recipe' ),
			'search_items'       => __( 'Search Recipes', 'recipe' ),
			'parent_item_colon'  => __( 'Parent Recipes:', 'recipe' ),
			'not_found'          => __( 'No Recipes found.', 'recipe' ),
			'not_found_in_trash' => __( 'No Recipes found in Trash.', 'recipe' )
		);

		$args = array(
			'labels'             => $labels,
            'description'        => __( 'A custom post type for the recipes.', 'recipe' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'recipe' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 20,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail'),
			'taxonomies'		 => array('category', 'post_tag')
		);

		register_post_type( 'recipe', $args );
}