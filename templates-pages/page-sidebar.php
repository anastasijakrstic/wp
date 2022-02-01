<?php
/**
 * Template Name: Page - Sidebar
 * Description: Displays a page title and content without displaying a sidebar.
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

  <div class="container">
    <div class="row">
        <div class="fw-col-md-12">
            <?php if (function_exists('bootstrapwp_breadcrumbs')) {
            bootstrapwp_breadcrumbs();
        } ?>
        </div><!--/.fw-col-md-12 -->
    </div><!--/.row -->

    <header class="page-title">
        <h1><?php the_title();?></h1>
    </header>

  <div class="row content">
    <div class="fw-col-md-8">
        <?php the_content(); ?>
        <?php wp_link_pages( array('before' => '<div class="page-links">' . __('Pages:', 'bootstrapwp'), 'after' => '</div>')); ?>
        <?php edit_post_link(__('Edit', 'bootstrapwp'), '<span class="edit-link">', '</span>'); ?>
        <?php endwhile; // end of the loop. ?>
    </div><!-- /.fw-col-md-8 -->

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>