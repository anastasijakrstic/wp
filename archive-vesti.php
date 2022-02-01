<?php
get_header(); ?>

    <?php if (have_posts()) :
        // Queue the first post.
        the_post(); ?>

  <section class="breadcrumb-top">
    <div class="container">
      <div class="row">
		<div class="header-bc">
				<h1>Vesti</h1>
			<ul>
			  <li><a href="<?php echo home_url(); ?>"><?php _e('Pocetna','atec') ?></a></li>
			  <li>></li>
			  <li>Vesti</li>
			</ul>
		</div>
      </div>
    </div>
  </section>

<div class="container-fluid archive-home content-section">
	<div class="container">
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

				<div class="col-md-6 section-fp-blog-box">
					<div class="section-fp-blog-inner">
						<span class="date"><?php echo get_the_date("d/m/Y"); ?></span>
						<?php 
						if (has_post_thumbnail( $post->ID )) { 
						echo '<img src="'.$feat_image[0].'" alt="'.$alt_feat_text.'" />'; ?>
					<?php } else { ?>
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/news-placeholder-415-310.jpg" alt="<?php the_title(); ?>" />
					<?php } ?>
                    <div class="blog-text">
                        <h4><?php the_title(); ?></h4>
                        <div class="section-fp-blog-text"><?php the_excerpt(__('(more…)')); ?>
							<a href="<?php echo get_permalink( $post ->ID ); ?>" class="view-full-post-btn">Detaljnije</a>
						</div>
                    </div>
					</div>
				</div>
				
		<?php endwhile; ?>
		</div>

		<?php endif; ?>
		
	</div>
 </div>

    <?php get_footer(); ?>