<?php 
	
	function jesign_enqueue_script()
	{
		// bootstrap
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', false);
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array ('jquery'), false);
		
		// materialize
		// wp_enqueue_style('materialize', get_template_directory_uri() . '/css/materialize.css', false);
		// wp_enqueue_script('materialize', get_template_directory_uri() . '/js/materialize.js', array ('jquery'), false);
		// wp_enqueue_script('mine', get_template_directory_uri() . '/js/mine.js', array ('jquery'), false);
	}
	add_action('wp_enqueue_scripts', 'jesign_enqueue_script');

	function wp_theme_setup() {

		$defaults = array(
			'width'         => 920,
			'height'        => 300,
			'flex-height'            => true,
			'flex-width'             => true,
			'default-image' => get_template_directory_uri() . '/images/koala.jpg',
		);
		add_theme_support( 'custom-header', $defaults );
		add_theme_support( 'custom-background' );	
		add_theme_support('post-thumbnails');
		add_theme_support('post-formats', array('aside', 'image', 'video'));
		add_theme_support('html5', array('search-form') );
		// Nav Menus
		register_nav_menus(array(
			'primary' => __('Primary Menu')
			));

		// Post formats
		// add_theme_support('post-formats', array('aside', 'gallery'));
	}

	add_action('after_setup_theme', 'wp_theme_setup');


	register_sidebar(array(
			'name' => 'Right sidebar 1',
			'id' => 'first-right-sidebar',
			'description' => 'Oh yeaaah 1',
			'before_widget' => '<div class="widgetbar">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<span class="widgettitle">',
			'after_title' 	=> '</span>'
		));
	register_sidebar(array(
			'name' => 'Right sidebar 2',
			'id' => 'second-right-sidebar',
			'description' => 'Oh yeaaah 2',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => "</li>\n",
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => "</h2>\n",
		));

	require get_template_directory() . "/inc/walker.php";
	require get_template_directory() . "/inc/wp_bootstrap_navwalker.php";

	function maytim_remover_version(){
		return '';
	}
	add_filter('generator', 'awesome_remove_version' );

	/* custom post type */
	function jesign_custom_post_type(){
		$labels = array(
			'name' => 'Portfolio',
			'singular_name' => 'Portfolio',
			'add_new' => 'Add Portfolio Item',
			'all_items' => 'All Items',
			'add_new_item' => 'Add Item',
			'edit_item' => 'Edit Item',
			'new_item' => 'New Item',
			'view_item' => 'View Item',
			'search_item' => 'Search Portfolio',
			'not_found' => 'No items found',
			'not_found_in_trash' => 'No items found in trash',
			'parent_item_colon' => 'Parent Item'
			);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array('title', 
								'editor',
								'excerpt',
								'thumbnail',
								'revisions',
			),
			'taxonomies' => array('category' , 'post_tag'),
			'menu_position' => 5, 
			'exclude_from_search' => false,
		);
		register_post_type('portfolio', $args);
	}
	add_action('init', 'jesign_custom_post_type');

	// custom taxonomy 
	function jesign_custom_taxonomies(){
		$labels = array(
				'name' 	=> 'Types',
				'singular_name' => 'Type',
				'search_items' => 'Search Types',
				'all_items' => 'All Types',
				'parent_item' => 'Parent Type',
				'parent_item_colon' => 'Parent Type:',
				'edit_item' => 'Edit Type',
				'update_item' => 'Update Type',
				'add_new_item' => 'Add New Type',
				'new_item_name' => 'New type Name',
				'menu_name' => 'Types'
				);
		$args = array(
				'hierarchical' => true,
				'labels' => $labels,
				'show_ui' => true,
				'show_admin_column' => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'field')
			);
		register_taxonomy('field', array('portfolio'), $args);
		register_taxonomy('software', 'portfolio', array(
			'label' => 'Software',
			'rewrite' => array('slug' => 'software',
			'hierarchical' => false)
			));
	}
	add_action('init', 'jesign_custom_taxonomies');

	function jesign_get_terms($postID, $term){
		$term_list = wp_get_post_terms($postID, $term);
		$output = '';
		$i = 0;
		foreach( $term_list as $term){
			$i++;
			if($i > 1){
				$output .= ', ';
			}
			$output .= '<a href="' .  get_term_link($term) . '">' . $term->name .'</a>';
		}
		return $output;
	}
