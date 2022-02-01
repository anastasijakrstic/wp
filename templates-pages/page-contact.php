<?php
/**
 * Template Name: Contact Page
 * Description: Displays a page with contact information.
 */

get_header(); 
global $atec; //Global variable for Redux
?>
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
    
  <div class="content contact-page page-content">
    <div class="container">
      <div class="row">
        <?php the_content(); ?>
      </div>
      <div class="row">
      	<div class="col-md-8">
      		<?php echo do_shortcode( '[contact-form-7 id="15" title="Contact form"]' ); ?>
      	</div>
      	<div class="col-md-4">
      		<div class="cf-contact-info">
	<h3><?php _e('Contact Info','atec') ?></h3>
	<p>
		<strong><?php echo $atec["atec-company-name"] ?></strong>
	</p>
	<div class="contact-detail-list">
		<ul>
			<?php if (!empty($atec["atec-phone"])) { ?>
			<?php $header_phone = $atec["atec-phone"];
			$header_phone_clean = str_replace(array("/", "-", " "),"", $header_phone); ?>
				<a href="tel:<?php echo $header_phone_clean ?>"><li class="contact-list">
				<span class="small"><?php _e('Телефон: ','atec') ?></span>
				<span class="contact-detail"><?php echo $atec["atec-phone"] ?></span>
			</li></a>
			<?php } ?>

			<?php if (!empty($atec["atec-mobile"])) { ?>
			<?php $header_phone2 = $atec["atec-mobile"];
			$header_phone_clean = str_replace(array("/", "-", " "),"", $header_phone2); ?>
			<a href="tel:<?php echo $header_phone_clean ?>"><li class="contact-list">
				<span class="small"><?php _e('Мобилни: ','atec') ?></span>
				<span class="contact-detail"><?php echo $atec["atec-mobile"] ?></span>
			</li></a>
			<?php } ?>

			<?php if (!empty($atec["atec-fax"])) { ?>
			<li class="contact-list ">
			<span class="contact-icon">
				<img class="alignnone size-full wp-image-2030" src="<?php echo get_stylesheet_directory_uri() ?>/images/ico-contact-fax.png" alt="ico-contact-fax" width="24" height="23">
				</span>
				<span class="small"><?php _e('Fax','atec') ?></span>
				<span class="contact-detail"><?php echo $atec["atec-fax"] ?></span>
			</li>
			<?php } ?>

			<?php if (!empty($atec["atec-email"])) { ?>
			<a href="mailto:<?php echo $atec["atec-email"] ?>"><li class="contact-list ">
				<span class="small"><?php _e('Емаил адреса: ','atec') ?></span>
				<span class="contact-detail"><?php echo $atec["atec-email"] ?></span>
			</li></a>
			<?php } ?>

			<?php if (!empty($atec["atec-address"])) { ?>
			<li class="contact-list ">
			<span class="contact-icon">
				<img class="alignnone size-full wp-image-81" src="<?php echo get_stylesheet_directory_uri() ?>/images/ico-contact-address.png" alt="ico-contact-address" width="24" height="25">
				</span>
				<span class="small"><?php _e('Adresa','atec') ?></span>
				<span class="contact-detail"><?php echo $atec["atec-address"] ?></span>
			</li>
			<?php } ?>
		</ul>
				</div>
			</div>
      	</div>
      	
      </div>
    </div>
  </div>
  <?php endwhile; // end of the loop. ?>
<?php else: ?>
        
<?php endif; ?>

<?php get_footer(); ?>