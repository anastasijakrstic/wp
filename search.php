<?php
get_header(); ?>

  <section class="breadcrumb-top">
    <div class="container">
      <div class="row">
		<div class="header-bc">
				<h1>Pretraga</h1>
			<ul>
			  <li><a href="<?php echo home_url(); ?>"><?php _e('Pocetna','atec') ?></a></li>
			  <li>></li>
			  <li>Pretraga</li>
			</ul>
		</div>
      </div>
    </div>
  </section>

	<div class="container content-section">
        <div class="row">
			<div class="col-md-3 col-sm-3 shop-sidebar">
				
			</div>
			<div class="col-md-9 search-content">
                <?php if (have_posts()) : ?>

                         <h1><?php printf( __('Rezultati pretrage za: %s', 'bootstrapwp'),'<span>' . get_search_query() . '</span>'); ?></h1>

        		  <?php while (have_posts()) : the_post(); ?>
					<div class="col-md-4 search-box">
						<?php
						 //Get featured image
							if (has_post_thumbnail( $post->ID )) $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); 

							//Get feaured image ALT text
							$post_img_id = get_post_thumbnail_id($post->ID);
							$alt_feat_text = get_post_meta( $post_img_id, '_wp_attachment_image_alt', true );
							if(empty( $alt_feat_text )){
								$alt_feat_text = get_the_title();
							} 
							?>
							<?php 
								if (has_post_thumbnail( $post->ID )) { 
								echo '<img src="'.$feat_image[0].'" alt="'.$alt_feat_text.'" />'; ?>
							<?php } else { ?>
								<img src="<?php echo get_stylesheet_directory_uri() ?>/images/news-placeholder-415-310.jpg" alt="<?php the_title(); ?>" />
							<?php } ?>
                            <h3><?php the_title();?></h3>
							<?php $product = wc_get_product( $post->ID );

							<div class="more-button"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>">Detaljnije</a></div>
                        </div>
							<?php endwhile; ?>
					
			</div>
                <?php else : ?>
            <div class="col-md-9">
                <h1><?php _e('Ne postoje rezultati za datu pretragu', 'bootstrapwp'); ?></h1>
                <?php endif;?>
    		</div>
        </div>
    </div>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>