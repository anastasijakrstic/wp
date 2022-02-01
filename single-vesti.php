<?php
get_header(); ?>
<?php while (have_posts()) : the_post(); 
?>
  <section class="breadcrumb-top">
    <div class="container">
      <div class="row">
		<div class="header-bc">
				<h1><?php echo get_the_title(); ?></h1>
			<ul>
			  <li><a href="<?php echo home_url(); ?>"><?php _e('Početna','atec') ?></a></li>
			  <li>></li>
			  <li><?php echo get_the_title(); ?></li>
			</ul>
		</div>
      </div>
    </div>
  </section>

<div class="container-fluid content-section">
	<div class="container">
		<div class="row content">
			<div class="col-md-4">
				<?php get_sidebar(''); ?>
			</div>
			<div class="col-md-8">
				<span class="date"><?php echo get_the_date("d/m/Y"); ?></span>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<?php the_tags('<p>Tags: ', ', ', '</p>'); ?>
			</div>
		</div>
	</div>
</div>
<?php endwhile; // end of the loop. ?>
    
<?php get_footer(); ?>