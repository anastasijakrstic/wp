<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$section_id = '';
if ( ! empty( $atts['section_id'] ) ) {
	$section_id = 'id="'.$atts['section_id'].'"';
}

$section_class = '';
if ( ! empty( $atts['section_class'] ) ) {
	$section_class = $atts['section_class'];
}

$min_height = '';
if ( ! empty( $atts['min_height'] ) ) {
    $min_height = "min-height:" . $atts['min_height'] .";";
}

$min_width = '';
if ( ! empty( $atts['min_width'] ) ) {
    $min_width = "min-width:" . $atts['min_width'] . ";";
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
$section_extra_classes = '';
if ( ! empty( $atts['video'] ) ) {
	$filetype           = wp_check_filetype( $atts['video'] );
	$filetypes          = array( 'mp4' => 'mp4', 'ogv' => 'ogg', 'webm' => 'webm', 'jpg' => 'poster' );
	$filetype           = array_key_exists( (string) $filetype['ext'], $filetypes ) ? $filetypes[ $filetype['ext'] ] : 'video';
	$data_name_attr = version_compare( fw_ext('shortcodes')->manifest->get_version(), '1.3.9', '>=' ) ? 'data-background-options' : 'data-wallpaper-options';
	$bg_video_data_attr = $data_name_attr.'="' . fw_htmlspecialchars( json_encode( array( 'source' => array( $filetype => $atts['video'] ) ) ) ) . '"';
	$section_extra_classes .= ' background-video';
}

$section_style   = ( $bg_color || $bg_image || $min_height || $min_width) ? 'style=' . esc_attr($bg_color . $bg_image . $min_height . $min_width) . '' : '';
$container_class = ( isset( $atts['is_fullwidth'] ) && $atts['is_fullwidth'] ) ? 'container-fluid' : 'container';
$container_class_classic = ( isset( $atts['is_classic'] ) && $atts['is_classic'] );
?>
<section <?php echo $section_id; ?> class="main-row <?php echo esc_attr($section_extra_classes); ?><?php echo esc_attr($section_class); ?>" <?php echo esc_attr($section_style); ?> <?php echo esc_attr($bg_video_data_attr); ?>>
    <div class="<?php echo esc_attr($container_class); ?>">
        <?php if($container_class_classic): ?>
            <div class="container">
                <div class="row">
                    <?php echo do_shortcode( $content ); ?>
                </div>
            </div>
        <?php else: ?>
            <?php echo do_shortcode( $content ); ?>
        <?php endif; ?>
    </div>
</section>
