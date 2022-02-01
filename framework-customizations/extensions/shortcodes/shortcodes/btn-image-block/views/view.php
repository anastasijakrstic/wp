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
if ( ! empty( $atts['image'] ) )
    $image = $atts['image'];


$link_text = "";
if ( ! empty( $atts['link_text'] ) )
    $link_text = $atts['link_text'];

$link = "";
if ( ! empty( $atts['link'] ) )
    $link = $atts['link'];


if (empty($text_id))  $text_id = "atec-img-block-id";
if (empty($text_class)) $text_class = "atec-img-block-id";
?>

<div id="<?php echo $text_id;?>" class="atec-img-block-container <?php echo $text_class;?>">
    <div class="atec-img-block-image">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $link_text;?>" />
    </div>
    <div class="atec-img-block-box">
      <div class="atec-img-block-text">
          <?php echo $textarea; ?>
      </div>
      <div class="atec-img-block-btn">
        <a href="<?php echo $link; ?>"><i class="fas fa-paw"></i> <?php echo $link_text; ?> <i class="fas fa-paw"></i></a>
      </div>
    </div>
</div>



