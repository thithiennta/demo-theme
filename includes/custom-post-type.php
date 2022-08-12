<?php
// if ( ! function_exists( 'film_post_type' ) ) {
	function film_post_type() {
		$labels = array(
			'name'                  => _x( 'Films', 'Post Type General Name', 'cde-theme' ),
			'singular_name'         => _x( 'Film', 'Post Type Singular Name', 'cde-theme' ),
			'menu_name'             => _x( 'Films', 'Admin Menu text', 'cd-theme' ),
			'name_admin_bar'        => _x( 'Film', 'Add New on Toolbar', 'cde-theme' ),
			'add_new'               => __( 'Add New', 'cde-theme' ),
			'add_new_item'          => __( 'Add New Film', 'cde-theme' ),
			'new_item'              => __( 'New film', 'cde-theme' ),
			'edit_item'             => __( 'Edit film', 'cde-theme' ),
			'view_item'             => __( 'View film', 'cde-theme' ),
			'all_items'             => __( 'All films', 'cde-theme' ),
			'search_items'          => __( 'Search films', 'cde-theme' ),
			'parent_item_colon'     => __( 'Parent films:', 'cde-theme' ),
			'not_found'             => __( 'No films found.', 'cde-theme' ),
			'not_found_in_trash'    => __( 'No films found in Trash.', 'cde-theme' ),
			'featured_image'        => _x( 'Film Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'cde-theme' ),
			'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'cde-theme' ),
			'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'cde-theme' ),
			'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'cde-theme' ),
			'archives'              => _x( 'Film archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'cde-theme' ),
			'insert_into_item'      => _x( 'Insert into film', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'cde-theme' ),
			'uploaded_to_this_item' => _x( 'Uploaded to this film', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'cde-theme' ),
			'filter_items_list'     => _x( 'Filter films list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'cde-theme' ),
			'items_list_navigation' => _x( 'Films list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'cde-theme' ),
			'items_list'            => _x( 'Films list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'cde-theme' ),
		);
		$args   = array(
			'labels'             => $labels,
			'description'        => 'Film custom post type.',
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_nav_menus'  => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'film' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => true,
			'menu_position'      => 20,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
			'taxonomies'         => array( 'genre' ),
			'show_in_rest'       => true,
		);

		register_post_type( 'film', $args );
	}
	add_action( 'init', 'film_post_type', 0 );
// }

// if ( ! function_exists( 'custom_taxonomy_for_film' ) ) {
	function custom_taxonomy_for_film() {
		$genre_labels = array(
			'name'                       => _x( 'Genres', 'taxonomy general name', 'cde-theme' ),
			'singular_name'              => _x( 'Genre', 'taxonomy singular name', 'cde-theme' ),
			'search_items'               => __( 'Search Genres', 'cde-theme' ),
			'popular_items'              => __( 'Popular Genres', 'cde-theme' ),
			'all_items'                  => __( 'All Genres', 'cde-theme' ),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => __( 'Edit Genre', 'cde-theme' ),
			'update_item'                => __( 'Update Genre', 'cde-theme' ),
			'add_new_item'               => __( 'Add New Genre', 'cde-theme' ),
			'new_item_name'              => __( 'New Genre Name', 'cde-theme' ),
			'separate_items_with_commas' => __( 'Separate Genres with commas', 'cde-theme' ),
			'add_or_remove_items'        => __( 'Add or remove Genres', 'cde-theme' ),
			'choose_from_most_used'      => __( 'Choose from the most used Genres', 'cde-theme' ),
			'not_found'                  => __( 'No Genres found.', 'cde-theme' ),
			'menu_name'                  => __( 'Genres', 'cde-theme' ),
		);

		$genre_args = array(
			'hierarchical'          => true,
			'labels'                => $genre_labels,
			'show_ui'               => true,
			'show_admin_column'     => true,
			'show_in_nav_menus'  => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var'             => true,
			'rewrite'               => array( 'slug' => 'genre' ),
		);
		register_taxonomy( 'genre', 'film', $genre_args );
	}
	add_action( 'init', 'custom_taxonomy_for_film', 0 );
// }

if ( ! function_exists( 'insert_film_term' ) ) {

	function insert_film_term() {
		wp_insert_term(
			'Actions',
			'genre',
			array(
				'description' => 'Associated with particular types of spectacle',
				'slug'        => 'action',
			)
		);
		wp_insert_term(
			'Drama',
			'genre',
			array(
				'description' => 'Focused on emotions and defined by conflict, often looking to reality rather than sensationalism',
				'slug'        => 'drama',
			)
		);
		wp_insert_term(
			'Adventure',
			'genre',
			array(
				'description' => 'Implies a narrative that is defined by a journey (often including some form of pursuit) and is usually located within a fantasy or exoticized setting. Typically, though not always, such stories include the quest narrative.',
				'slug'        => 'adventure',
			)
		);
		wp_insert_term(
			'Animated',
			'genre',
			array(
				'description' => 'A film medium in which the film\'s images are primarily created by computer or hand and the characters are voiced by actors.',
				'slug'        => 'animated',
			)
		);
		wp_insert_term(
			'Comedy',
			'genre',
			array(
				'description' => 'Defined by events that are primarily intended to make the audience laugh',
				'slug'        => 'comedy',
			)
		);
		wp_insert_term(
			'Horror',
			'genre',
			array(
				'description' => 'Films that seek to elicit fear or disgust in the audience for entertainment purposes.',
				'slug'        => 'horror',
			)
		);
	}
	add_action( 'init', 'insert_film_term', 0 );
}
