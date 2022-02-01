<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$text_class = "";
if ( ! empty( $atts["class_name"] ) )
    $text_class = $atts["class_name"];

$title = "";
if ( ! empty( $atts["title"] ) )
    $title = $atts["title"];

$textarea = "";
if ( ! empty( $atts["textarea"] ) )
    $textarea = $atts["textarea"];


$image = "";
if ( ! empty( $atts["image"] ) )
    $image = $atts["image"];

$big_image = "";
if ( ! empty( $atts["big_image"] ) )
    $big_image = $atts["big_image"];

$link = "";
if ( ! empty( $atts["link"] ) )
    $link = $atts["link"];

$services = array();
$services_data = "";
if ( ! empty( $atts["services"] ) ) {
    $services_data = $atts['services'];
    $explode = explode(",", $services_data);
    foreach ($explode as $data){
        array_push($services, $data);
    }
}

?>

<?php

    $block = '<h4 class=\'lightbox-title\'>'. $title . '</h4>';
    $block .= '<p class=\'lightbox-desc\'>'. $textarea . '</p>';
    $block .= '<p class=\'lightbox-link\'><a href=\''. $link . '\' target=\'_blank\'>'.$link .'</a></p>';
    $block .= '<h4>Services Provided</h4>';
    $block .= '<div class=\'lightbox-skills\'>';
    $block .= '<ul class=\'list-unstyled\'>';
                foreach ($services as $service)
                {
                    $block .= '<li>' . $service . '</li>';
                }
    $block .= '</ul>';
    $block .= '</div>';

?>
<?php if(empty($text_class)):
    ?>
    <img class="case-studies img-responsive" src="<?php echo $image['url']; ?>" alt="" />
    <p class="caption-title"><?php echo $title; ?></p>
    <a href="<?php echo $big_image['url']; ?>"  data-title="<?php echo $block;?>">
        <div class="hover-box">
            <h3 class="case-title"><?php echo $title; ?></h3>
            <button class="btn link-studies">View</button>
        </div>
    </a>
    <?php
else:
    ?>

        <div class="<?php echo $text_class;?>">
            <img class="case-studies img-responsive" src="<?php echo $image['url']; ?>" alt="" />
            <p class="caption-title"><?php echo $title; ?></p>
            <a href="<?php echo $big_image['url']; ?>" data-lightbox="gorillahub" data-title="<?php echo $block;?>">
                <div class="hover-box">
                    <h3 class="case-title"><?php echo $title; ?></h3>
                    <button class="btn link-studies">View</button>
                </div>
            </a>
        </div>
<?php
endif;
?>

