<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'column_id' => array(
		'label'        => __('Column ID', 'uid'),
		'type'         => 'text',
	),
	'column_class' => array(
		'label'        => __('Column Class', 'uid'),
		'type'         => 'text',
	),
	
	'xs_class' => array(
	'label'   => __('XS class', 'uid'),
	'desc'    => __('Extra small devices - Phones  (<768px)', 'uid'),
	'type'    => 'select',
	'choices' => array(
		'empty'  		=> __('empty', 'uid'),
		'col-xs-15'  	=> __('col-xs-15 - 20%', 'uid'),
		'col-xs-12'  	=> __('col-xs-12', 'uid'),
		'col-xs-11'  	=> __('col-xs-11', 'uid'),
		'col-xs-10'  	=> __('col-xs-10', 'uid'),
		'col-xs-9'  	=> __('col-xs-9', 'uid'),
		'col-xs-8'  	=> __('col-xs-8', 'uid'),
		'col-xs-7'  	=> __('col-xs-7', 'uid'),
		'col-xs-6'  	=> __('col-xs-6', 'uid'),
		'col-xs-5'  	=> __('col-xs-5', 'uid'),
		'col-xs-4'  	=> __('col-xs-4', 'uid'),
		'col-xs-3'  	=> __('col-xs-3', 'uid'),
		'col-xs-2'  	=> __('col-xs-2', 'uid'),
		'col-xs-1'  	=> __('col-xs-1', 'uid')	
        ),
        'value'   => "col-xs-12"
    ),
    
	'sm_class' => array(
	'label'   => __('SM class', 'uid'),
	'desc'    => __('Small devices - Tablets (≥768px and  <991px)', 'uid'),
	'type'    => 'select',
	'choices' => array(
		'empty'  		=> __('empty', 'uid'),
		'col-sm-15'  => __('col-sm-15 - 20%', 'uid'),
		'col-sm-12'  => __('col-sm-12', 'uid'),
		'col-sm-11'  => __('col-sm-11', 'uid'),
		'col-sm-10'  => __('col-sm-10', 'uid'),
		'col-sm-9'  	=> __('col-sm-9', 'uid'),
		'col-sm-8'  	=> __('col-sm-8', 'uid'),
		'col-sm-7'  	=> __('col-sm-7', 'uid'),
		'col-sm-6'  	=> __('col-sm-6', 'uid'),
		'col-sm-5'  	=> __('col-sm-5', 'uid'),
		'col-sm-4'  	=> __('col-sm-4', 'uid'),
		'col-sm-3'  	=> __('col-sm-3', 'uid'),
		'col-sm-2'  	=> __('col-sm-2', 'uid'),
		'col-sm-1'  	=> __('col-sm-1', 'uid')	
        ),   
    ),

	'md_class' => array(
		'label'   => __('MD class', 'uid'),
		'desc'    => __('Desktop devices (≥992px and  <1199px)', 'uid'),
		'type'    => 'select',
		'choices' => array(
			'empty'  		=> __('empty', 'uid'),
			'col-md-15'  	=> __('col-md-15 - 20%', 'uid'),
			'col-md-12'  	=> __('col-md-12', 'uid'),
			'col-md-11'  	=> __('col-md-11', 'uid'),
			'col-md-10'  	=> __('col-md-10', 'uid'),
			'col-md-9'  	=> __('col-md-9', 'uid'),
			'col-md-8'  	=> __('col-md-8', 'uid'),
			'col-md-7'  	=> __('col-md-7', 'uid'),
			'col-md-6'  	=> __('col-md-6', 'uid'),
			'col-md-5'  	=> __('col-md-5', 'uid'),
			'col-md-4'  	=> __('col-md-4', 'uid'),
			'col-md-3'  	=> __('col-md-3', 'uid'),
			'col-md-2'  	=> __('col-md-2', 'uid'),
			'col-md-1'  	=> __('col-md-1', 'uid')
		),
	),


	'lg_class' => array(
	'label'   => __('LG class', 'uid'),
	'desc'    => __('Large devices - Desktops (≥1200px)', 'uid'),
	'type'    => 'select',
	'choices' => array(
		'empty'  		=> __('empty', 'uid'),
		'col-lg-15'  	=> __('col-lg-15 - 20%', 'uid'),
		'col-lg-12'  	=> __('col-lg-12', 'uid'),
		'col-lg-11'  	=> __('col-lg-11', 'uid'),
		'col-lg-10'  	=> __('col-lg-10', 'uid'),
		'col-lg-9'  	=> __('col-lg-9', 'uid'),
		'col-lg-8'  	=> __('col-lg-8', 'uid'),
		'col-lg-7'  	=> __('col-lg-7', 'uid'),
		'col-lg-6'  	=> __('col-lg-6', 'uid'),
		'col-lg-5'  	=> __('col-lg-5', 'uid'),
		'col-lg-4'  	=> __('col-lg-4', 'uid'),
		'col-lg-3'  	=> __('col-lg-3', 'uid'),
		'col-lg-2'  	=> __('col-lg-2', 'uid'),
		'col-lg-1'  	=> __('col-lg-1', 'uid')	
        ),
    ),

	
	'md_class_offset' => array(
	'label'   => __('MD class - Offset', 'uid'),
	'desc'    => __('Move columns to the right - Extra small devices - Phones  (<768px)', 'uid'),
	'type'    => 'select',
	'choices' => array(
		'empty'  		=> __('empty', 'uid'),
		'col-md-offset-12'  	=> __('col-md-offset-12', 'uid'),
		'col-md-offset-11'  	=> __('col-md-offset-11', 'uid'),
		'col-md-offset-10'  	=> __('col-md-offset-10', 'uid'),
		'col-md-offset-9'  	=> __('col-md-offset-9', 'uid'),
		'col-md-offset-8'  	=> __('col-md-offset-8', 'uid'),
		'col-md-offset-7'  	=> __('col-md-offset-7', 'uid'),
		'col-md-offset-6'  	=> __('col-md-offset-6', 'uid'),
		'col-md-offset-5'  	=> __('col-md-offset-5', 'uid'),
		'col-md-offset-4'  	=> __('col-md-offset-4', 'uid'),
		'col-md-offset-3'  	=> __('col-md-offset-3', 'uid'),
		'col-md-offset-2'  	=> __('col-md-offset-2', 'uid'),
		'col-md-offset-1'  	=> __('col-md-offset-1', 'uid')	
        ),
    ),
    
	'sm_class_offset' => array(
	'label'   => __('SM class - Offset', 'uid'),
	'desc'    => __('Move columns to the right - Small devices - Tablets (≥768px and  <991px)', 'uid'),
	'type'    => 'select',
	'choices' => array(
		'empty'  		=> __('empty', 'uid'),
		'col-sm-offset-12'  	=> __('col-sm-offset-12', 'uid'),
		'col-sm-offset-11'  	=> __('col-sm-offset-11', 'uid'),
		'col-sm-offset-10'  	=> __('col-sm-offset-10', 'uid'),
		'col-sm-offset-9'  	=> __('col-sm-offset-9', 'uid'),
		'col-sm-offset-8'  	=> __('col-sm-offset-8', 'uid'),
		'col-sm-offset-7'  	=> __('col-sm-offset-7', 'uid'),
		'col-sm-offset-6'  	=> __('col-sm-offset-6', 'uid'),
		'col-sm-offset-5'  	=> __('col-sm-offset-5', 'uid'),
		'col-sm-offset-4'  	=> __('col-sm-offset-4', 'uid'),
		'col-sm-offset-3'  	=> __('col-sm-offset-3', 'uid'),
		'col-sm-offset-2'  	=> __('col-sm-offset-2', 'uid'),
		'col-sm-offset-1'  	=> __('col-sm-offset-1', 'uid')	
        ),   
    ),
    
	'lg_class_offset' => array(
	'label'   => __('LG class - Offset', 'uid'),
	'desc'    => __('Move columns to the right - Large devices - Desktops (≥1200px)', 'uid'),
	'type'    => 'select',
	'choices' => array(
		'empty'  		=> __('empty', 'uid'),
		'col-lg-offset-12'  	=> __('col-lg-offset-12', 'uid'),
		'col-lg-offset-11'  	=> __('col-lg-offset-11', 'uid'),
		'col-lg-offset-10'  	=> __('col-lg-offset-10', 'uid'),
		'col-lg-offset-9'  	=> __('col-lg-offset-9', 'uid'),
		'col-lg-offset-8'  	=> __('col-lg-offset-8', 'uid'),
		'col-lg-offset-7'  	=> __('col-lg-offset-7', 'uid'),
		'col-lg-offset-6'  	=> __('col-lg-offset-6', 'uid'),
		'col-lg-offset-5'  	=> __('col-lg-offset-5', 'uid'),
		'col-lg-offset-4'  	=> __('col-lg-offset-4', 'uid'),
		'col-lg-offset-3'  	=> __('col-lg-offset-3', 'uid'),
		'col-lg-offset-2'  	=> __('col-lg-offset-2', 'uid'),
		'col-lg-offset-1'  	=> __('col-lg-offset-1', 'uid')	
        ),
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
	)
);
