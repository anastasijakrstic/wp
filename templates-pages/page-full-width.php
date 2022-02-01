<?php
/**
 * Template Name: Page - Full-width
 * Description: Displays a page title and content without displaying a sidebar.
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<?php
if (is_front_page() ) {
    echo do_shortcode('[smartslider3 slider=2]');
} else {
?>
 <header class="page-title">
        <h1><?php the_title();?></h1>
    </header>
<?php
}
?>

    <div class="container-fluid full-width-strech">
        


        <div class="row content">
            <?php the_content(); ?>
        </div><!-- .row content -->
    </div><!--/.container -->

	<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>