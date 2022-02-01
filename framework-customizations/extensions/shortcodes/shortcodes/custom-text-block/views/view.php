<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$text_id = '';
if ( ! empty( $atts['text_id'] ) ) {
    $text_id = $atts['text_id'];
}
$text_class = '';
if ( ! empty( $atts['text_class'] ) ) {
    $text_class = $atts['text_class'];
}

$editor = '';
if ( ! empty( $atts['text'] ) ) {
    $editor = $atts['text'];
}
?>
<?php if(empty($text_id) && empty($text_class))
        echo do_shortcode( $editor );
      else
      {
          if(empty($text_id) && !empty($text_class)):
?>

              <div class="<?php echo $text_class;?>">
                  <?php echo do_shortcode( $editor ); ?>
              </div>
<?php
          elseif (!empty($text_id) && empty($text_class)):
?>
              <div id="<?php echo $text_id;?>">
                  <?php echo do_shortcode( $editor ); ?>
              </div>
<?php
          else:
?>
              <div id="<?php echo $text_id;?>" class="<?php echo $text_class;?>">
                  <?php echo do_shortcode( $editor ); ?>
              </div>

<?php
          endif;
      }

?>