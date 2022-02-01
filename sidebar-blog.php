
    <?php
     // Get latest Blog posts
     $query_options = array(
         'posts_per_page' => '3',
         'post__not_in' => array( get_the_ID() )
     );
     $the_query = new WP_Query( $query_options ); 
    ?>
 
 
                <div class=""><H5><?php _e('Latest blog','atec') ?></H5></div>
                <?php
                 while ($the_query -> have_posts()) : $the_query -> the_post(); 

                //Get featured image
                if (has_post_thumbnail( $post->ID )) $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'image-small' ); 

                //Get feaured image ALT text
                $post_img_id = get_post_thumbnail_id($post->ID);
                $alt_feat_text = get_post_meta( $post_img_id, '_wp_attachment_image_alt', true );
                if(empty( $alt_feat_text )){
                    $alt_feat_text = get_the_title();
                } 
                ?>

                <div class="single-blog-box">
                    <div class="single-blog-inner">
                        <?php 
                        if (has_post_thumbnail( $post->ID )) { 
                        echo '<img src="'.$feat_image[0].'" alt="'.$alt_feat_text.'" />'; ?>
                    <?php } else { ?>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/blog-placeholder-415-310.jpg" alt="<?php the_title(); ?>" />
                    <?php } ?>
                        <h4><?php the_title(); ?></h4>
                        <div class="single-blog-text"><?php the_excerpt(__('(more…)')); ?></div>
                    </div>
                </div>
      

                <?php 
                     endwhile;
                     wp_reset_postdata();
                ?>
                
          
        
   
    </div>

</div>

