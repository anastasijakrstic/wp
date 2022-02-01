<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'id'         => array( 'type' => 'unique' ),
    'class_name' => array(
        'type'  => 'text',
        'label'  => __( 'Classes', 'uid' ),
        'desc'   => __( 'Add your classes here', 'uid' )
    ),
    'image' => array(
        'type'   => 'upload',
        'teeny'  => true,
        'reinit' => true,
        'label'  => __( 'Image', 'uid' ),
    ),
	'big_image' => array(
		'type'   => 'upload',
		'teeny'  => true,
		'reinit' => true,
		'label'  => __( 'Big Image', 'uid' ),
	),
	'title' => array(
		'type'   => 'text',
		'label'  => __( 'Title', 'uid' ),
		'desc'   => __( 'Add your title here', 'uid' )
	),

	'textarea' => array(
		'type'   => 'textarea',
		'label'  => __( 'Description', 'uid' ),
		'desc'   => __( 'Add your text here (visible in modal)', 'uid' )
	),

    'link' => array(
        'type'  => 'text',
        'label'  => __( 'Link', 'uid' ),
        'desc'   => __( 'Add external link to the project', 'uid' )
    ),

    'services' => array(
        'type'   => 'textarea',
        'label'  => __( 'Services provided', 'uid' ),
        'desc'   => __( 'Add services provide separated with comma', 'uid' )
    ),



);
