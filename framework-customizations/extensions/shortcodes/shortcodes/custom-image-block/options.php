<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'text_id' => array(
		'label'        => __('Text ID', 'uid'),
		'type'         => 'text',
	),
    'text_class' => array(
        'label'        => __('Text Class', 'uid'),
        'type'         => 'text',
    ),
    'image' => array(
        'type'   => 'upload',
        'teeny'  => true,
        'reinit' => true,
        'label'  => __( 'Image', 'uid' ),
    ),

	'textarea' => array(
		'type'   => 'wp-editor',
		'label'  => __( 'Description', 'uid' ),
		'desc'   => __( 'Add your text here (visible under image)', 'uid' )
	),

);
