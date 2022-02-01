
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');  ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri();?>/images/ico/apple-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri();?>/images/ico/apple-icon-60x60.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/images/ico/apple-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri();?>/images/ico/apple-icon-76x76.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/images/ico/apple-icon-114x114.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri();?>/images/ico/apple-icon-120x120.png"/>
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri();?>/images/ico/apple-icon-144x144.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri();?>/images/ico/apple-icon-152x152.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri();?>/images/ico/apple-icon-180x180.png"/>
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri();?>/images/ico/android-icon-192x192.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri();?>/images/ico/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri();?>/images/ico/favicon-96x96.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri();?>/images/ico/favicon-16x16.png"/>
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri();?>/images/ico/manifest.json"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri();?>/images/ico/ms-icon-144x144.png"/>
    <meta name="theme-color" content="#ffffff"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet"> 

    <?php 
        wp_head(); 
        global $atec; //Global variable for Redux
    ?>
</head>
<body <?php body_class(); ?>  data-spy="scroll" data-target=".bs-docs-sidebar" data-offset="10">
    <header class="header container-fluid">
        <div class="row header-bar">

            <nav class="navbar navbar-default col-md-5" role="navigation">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                    <?php
                        wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker())
                        );
                    ?>
                
            </nav>    
                        <div class="col-md-2 logo-header">
                 <?php
                if( ! empty($atec["main-logo"])) {
                    $header_logo = $atec["main-logo"];
                    ?>
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo $header_logo['url'] ?>"></a>
                    <?php
                }
                ?>
            </div>               
            <div class="col-md-3 socials">
                <p>Pratite nas</p>
                <ul class="list-inline">
                    <?php if( ! empty($atec["fb-link"])) { 
                        $fb = $atec["fb-link"]; ?>
                        <li>
                            <a class="btn-outline-light btn-social" target="_blank" href="<?php echo $fb;?>" title="Facebook"> <i class="fa fa-facebook fa-lg" aria-hidden="true"></i> </a>
                        </li>
                    <?php } ?>
                    
                    <?php if( ! empty($atec["tw-link"])) { 
                        $tw = $atec["tw-link"]; ?>
                        <li>
                            <a class="btn-outline-light btn-social" target="_blank" href="<?php echo $tw;?>" title="Twitter"> <i class="fa fa-twitter fa-lg" aria-hidden="true"></i> </a>
                        </li>
                        <?php } ?>
                        
                    <?php if( ! empty($atec["ln-link"])) { 
                        $ln = $atec["ln-link"]; ?>   
                        <li>
                            <a class="btn-outline-light btn-social" target="_blank" href="<?php echo $ln; ?>" title="LinkedIn"> <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i> </a>
                        </li>
                    <?php } ?>
                    <?php if( ! empty($atec["in-link"])) { 
                        $in = $atec["in-link"]; ?>   
                        <li>
                            <a class="btn-outline-light btn-social" target="_blank" href="<?php echo $in; ?>" title="Instagram"> <i class="fa fa-instagram fa-lg" aria-hidden="true"></i> </a>
                        </li>
                    <?php } ?>
                    <?php if( ! empty($atec["yt-link"])) { 
                        $yt = $atec["yt-link"]; ?>   
                        <li>
                            <a class="btn-outline-light btn-social" target="_blank" href="<?php echo $yt; ?>" title="Youtube"> <i class="fa fa-youtube fa-lg" aria-hidden="true"></i> </a>
                        </li>
                    <?php } ?>
                </ul>
                <i class="fas fa-shopping-cart"></i>
            </div>

            <div class="col-md-2 header-phone">
                <?php
                if( ! empty($atec["call-us-number"])) {
                    $header_phone = $atec["call-us-number"];
                    $header_phone_clean = str_replace(array("/", "-", " "),"", $header_phone); ?>
                    <a href="tel:<?php echo $header_phone_clean ?>"><?php echo $header_phone ?></a>
                    <?php
                }
                ?>
                     
            </div>

        </div>

        <section class="fp-top container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 header-sec">
                        <div class="subtitle">najbolje ponude</div>
                        <p>Lorem ipsum dolor sit amet elit</p>

                        <a href="#">Prodavnica<i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

    </header>
     <!-- header -->

    <!-- End Header. Begin Template Content -->

