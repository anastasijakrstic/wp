<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$title = "";
if ( ! empty( $atts["title"] ) )
    $title = $atts["title"];

$phone = "";
$call = "";
if ( ! empty( $atts["phone"] ) ){
    $phone = $atts["phone"];
    $call = str_replace("(0)", "", $phone);
    $call = str_replace(" ","", $call);
}

$skype = "";
if ( ! empty( $atts["skype"] ) )
    $skype = $atts["skype"];


$email = "";
$domain = "";
if ( ! empty( $atts["email"] ) ){
    $explode = explode("@", $atts["email"]);
    $email = $explode[0];
    $domain = $explode[1];
}




$title_2 = "";
if ( ! empty( $atts["title_2"] ) )
    $title_2 = $atts["title_2"];

$facebook = "";
if ( ! empty( $atts["facebook"] ) )
    $facebook = $atts["facebook"];


$twitter = "";
if ( ! empty( $atts["twitter"] ) )
    $twitter = $atts["twitter"];

$linkedin = "";
if ( ! empty( $atts["linkedin"] ) )
    $linkedin = $atts["linkedin"];

$title_3 = "";
if ( ! empty( $atts["title_3"] ) )
    $title_3 = $atts["title_3"];

$p1 = "";
if ( ! empty( $atts["desc_1"] ) )
    $p1 = $atts["desc_1"];

$p2 = "";
if ( ! empty( $atts["desc_2"] ) )
    $p2 = $atts["desc_2"];

?>
<div id="sidebar-box">
    <h4 class="text-uppercase"><?php echo $title; ?></h4>
    <p>
        <a href="tel:<?php echo $call; ?>"><i class="fa fa-phone fa-lg color-mid-green" aria-hidden="true"></i> <?php echo $phone; ?> </a>
    </p>
    <p>
        <a href="skype:<?php echo $skype; ?>?call"><i class="fa fa-skype fa-lg color-blue" aria-hidden="true"></i> @<?php echo $skype; ?> </a>
    </p>
    <p>
        <script>
            document.write('<a href="mailto:' + '<?php echo $email; ?>' + '@' + '<?php echo $domain; ?>t' + '"><i class="fa fa-envelope fa-lg color-mid-cyan" aria-hidden="true"></i> ' + '<?php echo $email; ?>' + '@' + '<?php echo $domain; ?>' + '</a>');
        </script>
        <noscript>
            <i class="fa fa-envelope fa-lg color-mid-cyan" aria-hidden="true"></i> <?php echo $email ?> - at - <?php echo $domain; ?>
        </noscript>
    </p>

    <h4 class="text-uppercase"><?php echo $title_2; ?></h4>
    <p>
        <a href="https://www.facebook.com/<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook fa-lg color-dark-blue" aria-hidden="true"></i> facebook.com </a>
    </p>
    <p>
        <a href="https://www.twitter.com/<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter fa-lg color-light-cyan" aria-hidden="true"></i> Twitter </a>
    </p>
    <p>
        <a href="https://linkedin.com/company/<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin fa-lg color-mid-blue" aria-hidden="true"></i> linkedin.com</a>
    </p>

    <h4 class="text-uppercase"><?php echo $title_3; ?></h4>
    <p>
        <?php echo $p1; ?>
    </p>
    <p>
        <?php echo $p2; ?>
    </p>
</div>