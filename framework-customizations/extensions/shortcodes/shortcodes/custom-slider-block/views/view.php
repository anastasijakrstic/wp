<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
?>
<section id="portfolio-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 gallery-box">

                    <?php
                    $q = new WP_Query( array( 'post_type' => 'portfolio',
                            'posts_per_page' => -1 )
                    );
                    while ( $q->have_posts() ) : $q->the_post();
                        if(get_field("featured"))
                        {
                            $services = array();
                            $services_data = get_field("portfolio_services");
                            $explode = explode(",", $services_data);
                            foreach ($explode as $data){
                                array_push($services, $data);
                            }
                            $link = get_field("portfolio_link");
                            $new_link = str_replace("http://", "", $link);
                            $new_link = str_replace("https://", "", $new_link);

                            $block = '<h4 class=\'lightbox-title\'>'. get_field("portfolio_name") . '</h4>';
                            $block .= '<p class=\'lightbox-desc\'>'. get_field("portfolio_description") . '</p>';
                            $block .= '<p class=\'lightbox-link\'><a href=\''. $link  . '\' target=\'_blank\'>'.$new_link .'</a></p>';
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

                            <div class="col-xs-12 col-sm-3">
                                <img class="case-studies img-responsive" src="<?php the_field("portfolio_image"); ?>" alt="" />
                                <p class="caption-title"><?php the_field("portfolio_name"); ?></p>
                                <a href="<?php the_field("portfolio_big_image"); ?>" data-lightbox="gorillahub" data-title="<?php echo $block;?>">
                                    <div class="hover-box">
                                        <h3 class="case-title"><?php the_field("portfolio_name"); ?></h3>
                                        <span class="btn link-studies">View</span>
                                    </div>
                                </a>
                            </div>


                        <?php }


                        ?>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
</section>


