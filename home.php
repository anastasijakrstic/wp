<?php
get_header(); ?>

    <?php if (have_posts()) :
        // Queue the first post.
        the_post(); ?>

       

        <div class="container archive-home">
        <?php
        // Rewind the loop back
        rewind_posts();
        ?>
        <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <?php
             //Get featured image
                if (has_post_thumbnail( $post->ID )) $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'image-blog' ); 

                //Get feaured image ALT text
                $post_img_id = get_post_thumbnail_id($post->ID);
                $alt_feat_text = get_post_meta( $post_img_id, '_wp_attachment_image_alt', true );
                if(empty( $alt_feat_text )){
                    $alt_feat_text = get_the_title();
                } 
                ?>

                <div class="col-md-4 home-blog-box">
                    <div class="home-blog-inner">
                        <?php 
                        if (has_post_thumbnail( $post->ID )) { 
                        echo '<img src="'.$feat_image[0].'" alt="'.$alt_feat_text.'" />'; ?>
                    <?php } else { ?>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/blog-placeholder-415-310.jpg" alt="<?php the_title(); ?>" />
                    <?php } ?>
                        <h4><?php the_title(); ?></h4>
                        <div class="home-blog-text"><?php the_excerpt(__('(more…)')); ?></div>
                    </div>
                </div>
            
        
    <?php endwhile; ?>
    </div>

       

    <?php endif; ?>
        

    </div>

    <?php get_footer(); ?>