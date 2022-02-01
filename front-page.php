<?php
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
 // <header class="page-title">
    //    <h1><?php the_title();  </h1>
 //</header>
    ?>
    
<!--  <div class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php //if (function_exists('bootstrapwp_breadcrumbs')) {
            //bootstrapwp_breadcrumbs();
        //} ?>
        </div>
    </div>

    <div class="row">
            <?php //the_content(); ?>
    </div>
  </div>
  </div> -->
    <?php endwhile; // end of the loop. ?>
    <?php else: ?>
        
    <?php endif; ?>

    <?php
     // Get latest Blog posts
     $query_options = array(
         'posts_per_page' => '5',
     );
     $the_query = new WP_Query( $query_options ); 
    ?>

    <section class="fp-categories container-fluid">
        <div class="container">
            <div class="row title">
                <div class="col-md-12">
                    <div class="subtitle">naši proizvodi</div>
                    <h3>Kategorije</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 categories-box">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/kategorije3.png" alt="">
                    <h2>Zidne dekoracije</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
                <div class="col-md-3 categories-box">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/kategorije2.png" alt="">
                    <h2>Ramovi</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
                <div class="col-md-3 categories-box">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/kategorije1.png" alt="">
                    <h2>Personalizovani pokloni</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
                <div class="col-md-3 categories-box">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/kategorije4.png" alt="">
                    <h2>Razno</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>
        </div>
    </section>

    <section class="fp-products container-fluid">
        <div class="row title">
            <div class="col-md-12">
                <div class="subtitle">online prodavnica</div>
                <h3>Naši proizvodi</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 product-switch">
                <div class="sale-txt">Na akciji</div>
                <div class="new-txt">Novo</div>
                <div class="popular-txt">Najprodavanije</div>
            </div>  
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php echo do_shortcode( '[recent_products limit="8" columns="4" orderby="date" order="desc"]' ); ?>
            </div>
        </div>
    </section>

    <section class="fp-blog">
        <div class="container">
            <div class="row title">
                <div class="col-md-12">
                    <div class="subtitle">najnovije objave</div>
                    <h3>Naš blog</h3>
                </div>
            </div>
            <div class="row">
                <?php
                 while ($the_query -> have_posts()) : $the_query -> the_post(); 

                //Get featured image
                if (has_post_thumbnail( $post->ID )) $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'image-blog' ); 

                //Get feaured image ALT text
                $post_img_id = get_post_thumbnail_id($post->ID);
                $alt_feat_text = get_post_meta( $post_img_id, '_wp_attachment_image_alt', true );
                if(empty( $alt_feat_text )){
                    $alt_feat_text = get_the_title();
                } 
                ?>

                <div class="col-md-6 section-fp-blog-box">
                    <div class="section-fp-blog-inner">
                        <?php 
                        if (has_post_thumbnail( $post->ID )) { 
                        echo '<img src="'.$feat_image[0].'" alt="'.$alt_feat_text.'" />'; ?>
                    <?php } else { ?>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/blog-placeholder-415-310.jpg" alt="<?php the_title(); ?>" />
                    <?php } ?>
                        <span><i class="far fa-calendar-alt"></i><?php echo get_the_date( 'd-m-Y' ); ?></span>
                        <h4><?php the_title(); ?></h4>
                        <div class="section-fp-blog-text"><?php the_excerpt(__('(more…)')); ?></div>
                    </div>
                </div>
      

                <?php 
                     endwhile;
                     wp_reset_postdata();
                ?>
                
            </div>
        </div>
    </section>

<?php get_footer(); ?>




