<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'section_id' => array(
		'label'        => __('Section ID', 'uid'),
		'type'         => 'text',
	),
    'section_class' => array(
        'label'        => __('Section Class', 'uid'),
        'type'         => 'text',
    ),
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'uid'),
		'type'         => 'switch',
	),
	'is_classic' => array(
		'label'        => __('Classic container', 'uid'),
		'type'         => 'switch',
	),
	'background_color' => array(
		'label' => __('Background Color', 'uid'),
		'desc'  => __('Please select the background color', 'uid'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => __('Background Image', 'uid'),
		'desc'    => __('Please select the background image', 'uid'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'video' => array(
		'label' => __('Background Video', 'uid'),
		'desc'  => __('Insert Video URL to embed this video', 'uid'),
		'type'  => 'text',
	),
    'min_height' => array(
        'label' => __('Min Height', 'uid'),
        'desc'  => __('Insert min height for this section (Example: 200px or 50%)', 'uid'),
        'type'  => 'text',
    ),
    'min_width' => array(
        'label' => __('Min Width', 'uid'),
        'desc'  => __('Insert min width for this section (Example: 200px or 50%)', 'uid'),
        'type'  => 'text',
    )
);
