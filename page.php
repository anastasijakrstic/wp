<?php
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="breadcrumb-top">
    <div class="container">
      <div class="row">
        <ul>
          <li><a href="<?php echo home_url(); ?>"><?php _e('Početna','atec') ?></a></li>
          <li>/</li>
          <li><?php echo get_the_title(); ?></li>
        </ul>
      </div>
    </div>
  </section>
    
  <div class="content page-content">
    <div class="container">
      <div class="row">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <?php endwhile; // end of the loop. ?>
<?php else: ?>
        
<?php endif; ?>

<?php get_footer(); ?>




