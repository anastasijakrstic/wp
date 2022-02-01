<?php if (!defined('FW')) die('Forbidden');


$column_id = '';
if ( ! empty( $atts['column_id'] ) ) {
	$column_id = 'id="'.$atts['column_id'].'"';
}

$column_class= '';
if ( ! empty( $atts['column_class'] ) ) {
	$column_class = $atts['column_class'];
}

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . $atts['background_color'] . ';';
}

$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
	$bg_image = 'background-image:url(' . $atts['background_image']['data']['icon'] . ');';
}

$bg_video_data_attr    = '';
$column_extra_classes = '';
if ( ! empty( $atts['video'] ) ) {
	$filetype           = wp_check_filetype( $atts['video'] );
	$filetypes          = array( 'mp4' => 'mp4', 'ogv' => 'ogg', 'webm' => 'webm', 'jpg' => 'poster' );
	$filetype           = array_key_exists( (string) $filetype['ext'], $filetypes ) ? $filetypes[ $filetype['ext'] ] : 'video';
	$data_name_attr = version_compare( fw_ext('shortcodes')->manifest->get_version(), '1.3.9', '>=' ) ? 'data-background-options' : 'data-wallpaper-options';
	$bg_video_data_attr = $data_name_attr.'="' . fw_htmlspecialchars( json_encode( array( 'source' => array( $filetype => $atts['video'] ) ) ) ) . '"';
	$column_extra_classes .= ' background-video';
}

$column_style   = ( $bg_color || $bg_image ) ? 'style="' . esc_attr($bg_color . $bg_image) . '"' : '';


$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class')  ;

// Grid 
if ( ! empty( $atts['column_class'] ) ) {
	$class = $class . " " .  esc_attr($atts['column_class']);
}

if ( ! empty($atts['xs_class']) && ($atts['xs_class'] <> "empty")) {
	$class = $class . " " .  esc_attr($atts['xs_class']);
} 

if ( ! empty( $atts['sm_class']) && ($atts['sm_class'] <> "empty")) {
	$class = $class . " " .  esc_attr($atts['sm_class']);
}

if ( ! empty( $atts['lg_class']) && ($atts['lg_class'] <> "empty")) {
	$class = $class . " " .  esc_attr($atts['lg_class']);
}

// Offset
if ( ! empty( $atts['sm_class_offset']) && ($atts['sm_class_offset'] <> "empty")) {
	$class = $class . " " .  esc_attr($atts['sm_class_offset']);
}

if ( ! empty( $atts['md_class_offset']) && ($atts['md_class_offset'] <> "empty")) {
	$class = $class . " " .  esc_attr($atts['md_class_offset']);
}

if ( ! empty( $atts['lg_class_offset']) && ($atts['lg_class_offset'] <> "empty")) {
	$class = $class . " " .  esc_attr($atts['lg_class_offset']);
}

?>
<div class="<?php echo esc_attr($class); ?>" <?php  echo $column_id ?>>
	<?php echo do_shortcode($content); ?>
</div>