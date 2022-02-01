<?php
/**
 * Created by PhpStorm.
 * User: Goran
 * Date: 1/16/17
 * Time: 4:58 PM
 */
/**
 * Template Name: Page - Home
 * Description: Displays a home page tpl
 */

get_header();
    while (have_posts()) : the_post(); ?>

    <div class="container-fluid">
        <div class="row">
            <?php the_content(); ?>
        </div><!-- .row -->
    </div><!--/.container -->
<?php endwhile; // end of the loop.
    get_footer();
?>
