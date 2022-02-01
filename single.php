<?php
get_header(); ?>
<?php while (have_posts()) : the_post(); 
?>
  <section class="breadcrumb-top">
    <div class="container">
      <div class="row">
        <ul>
          <li><a href="<?php echo home_url(); ?>"><?php _e('Početna','atec') ?></a></li>
          <li>/</li>
          <li><?php echo '<a href="' . get_permalink( get_option( 'page_for_posts' ) ) . '">Blog</a>'; ?></li>
          <li>/</li>
          <li><?php echo get_the_title(); ?></li>
        </ul>
      </div>
    </div>
  </section>



<div class="container">
    <div class="row content">
        <div class="col-md-9">
             <p class="meta"><?php //echo bootstrapwp_posted_on();?></p>
            <?php the_content(); ?>
            <?php the_tags('<p>Tags: ', ', ', '</p>'); ?>
            <hr/><br><br>
        </div>
        <div class="col-md-3">
            <?php get_sidebar('blog'); ?>
        </div>
    </div>
</div>
<?php endwhile; // end of the loop. ?>
    
<?php get_footer(); ?>