<?php
get_header(); ?>

    <?php if (have_posts()) :
        // Queue the first post.
        the_post(); ?>


        <div class="container">
        <?php
        // Rewind the loop back
        rewind_posts();
        ?>
        <div class="row">
        <?php while (have_posts()) : the_post(); ?>
        
            <?php // Post thumbnail conditional display.
            //if ( bootstrapwp_autoset_featured_img() !== false ) : ?>
            <div class="col-md-6 archive-post-page">
                <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php the_title();?></h3></a>
                <div><?php the_excerpt(); ?></div>
            </div>
            
        
    <?php endwhile; ?>
    </div>

       

    <?php endif; ?>
        

    <?php //get_sidebar('blog'); ?>
    </div>

    <?php get_footer(); ?>