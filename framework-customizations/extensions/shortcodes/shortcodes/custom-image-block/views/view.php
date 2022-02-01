<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$text_id = "";
if ( ! empty( $atts['text_id'] ) )
    $text_id = $atts['text_id'];

$text_class = "";
if ( ! empty( $atts['text_class'] ) )
    $text_class = $atts['text_class'];


$textarea = "";
if ( ! empty( $atts['textarea'] ) )
    $textarea = $atts['textarea'];


$image = "";
if ( ! empty( $atts['image'] ) ) {
    $image = $atts['image'];
    $alt = get_post_meta($image['attachment_id'], '_wp_attachment_image_alt', true);
}
?>
<?php if(empty($text_id) && empty($text_class)):
?>

        <div class="thumbnail">
            <div class="thumb-mobile">
                <img src="<?php echo $image['url']; ?>" alt="" />
            </div>
            <div class="caption caption-mobile">
                <?php echo $textarea; ?>
            </div>
        </div>
<?php
      else:

          if(empty($text_id) && !empty($text_class)):
?>

              <div class="<?php echo $text_class;?>">
                  <div class="thumbnail">
                      <div class="thumb-mobile">
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $alt; ?>" />
                      </div>
                      <div class="caption caption-mobile">
                          <?php echo $textarea; ?>
                      </div>
                  </div>
              </div>
<?php
          elseif (!empty($text_id) && empty($text_class)):
?>
              <div id="<?php echo $text_id;?>">
                  <div class="thumbnail">
                      <div class="thumb-mobile">
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $alt; ?>" />
                      </div>
                      <div class="caption caption-mobile">
                          <?php echo $textarea; ?>
                      </div>
                  </div>
              </div>
<?php
          else:
?>
              <div id="<?php echo $text_id;?>" class="<?php echo $text_class;?>">
                  <div class="thumbnail">
                      <div class="thumb-mobile">
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $alt; ?>" />
                      </div>
                      <div class="caption caption-mobile">
                          <?php echo $textarea; ?>
                      </div>
                  </div>
              </div>

<?php
          endif;
      endif;

?>


