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
    'text' => array(
        'type'   => 'wp-editor',
        'teeny'  => true,
        'reinit' => true,
        'label'  => __( 'Content', 'fw' ),
        'desc'   => __( 'Enter some content for this text block', 'fw' )
    ),

);
