<?php
    register_sidebar();

    add_theme_support('post-thumbnails');

	add_action('init','create_menu_content_type');

	function create_menu_content_type(){
		$labels = array(
		 'name' => ('Menu')
		 );

		$args = array(
			'labels' => $labels,
			'public' => true,
			'taxonomies' => array('category'),
			'has_archive' => true,
			'supports' => array('title','editor','excerpt','thumbnail','page-attributes'),
			'has_archive' => true
		);

		register_post_type('Menu',$args);
	}

?>