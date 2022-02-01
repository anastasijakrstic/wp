<?php
// Register Custom Post Type


//Create News CPT
function news_init() {
    $args = array(
	'label' => 'Vesti',
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'has_archive'        => true, 
	'hierarchical' => false,
	'rewrite' => array('slug' => 'vesti'),
	'query_var' => true,
	'menu_icon' => 'dashicons-format-aside',
	'supports' => array(
	            'title',
	            'editor',
	            'excerpt',
	            'thumbnail',
	            'author',
	            'page-attributes',)
        );
    register_post_type( 'news', $args );
}
add_action( 'init', 'news_init' );


?>