<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

 get_header(); ?>
 	<section class ="home-page about">
 		<div class="site-content">
 			<?php while ( have_posts() ) : the_post(); ?>
 				<div class='about-hero'>
 					<?php the_content(); ?>
 				</div>
  </section>

	<!--OUR SERVICES -->
	 <section class="site-content">
		 <div class="our-services">
			 <?php
			 	$center_title_1 = get_field ('center_title_1');
				$text_1 = get_field ('text_1'); ?>

				<h4><?php echo $center_title_1; ?></h4>
				<p><?php echo $text_1; ?></p>

		 </div><!-- .main-content -->

				<?php
				  $icon_2 = get_field('icon_2');
				  $center_title_2 = get_field('text_1');
				  $text_2 = get_field('text_2');
					$size = "small";
				?>

				<?php echo wp_get_attachment_image( $icon_2, $size); ?>
				<div class = "center-text">
					<h3><?php echo $center_title_2; ?></h3>
					<p><?php echo $text_2; ?></p>
				</div>

		 </div><!-- .main-content -->

     <div class=left-text>
				<?php
					$left_title_3 = get_field('left_title_3');
					$text_3 = get_field('text_3');
					$icon_3 = get_field('icon_3');
					$size = "small";
				?>

				<?php echo wp_get_attachment_image( $icon_3, $size); ?>
					<div class = "left-text">
						<h3><?php echo $left_title_3; ?></h3>
						<p><?php echo $text_3; ?></p>
					</div>

			 </div><!-- .main-content -->

       <div class=center-text>
				<?php
				  $center_title_4 = get_field('center_title_4');
				  $text_4 = get_field('text_4');
				  $icon_4 = get_field('icon_4');
				?>

				<?php echo wp_get_attachment_image( $icon_4, $size); ?>
					<div class = "center-text">
						<h3><?php echo $center_title_4; ?></h3>
						<p><?php echo $text_4; ?></p>
					</div>

   		 </div><!-- .main-content -->

       <div class=left-text>
         
			 <?php
				$left_title_5 = get_field('left_title_5');
				$text_5 = get_field('text_5');
				$icon_5 = get_field('icon_5');
			?>

				<?php echo wp_get_attachment_image ( $icon_5, $size); ?>
				 <div class = "left-text">
					 <h3><?php echo $left_title_5; ?></h3>
					 <p><?php echo $text_5; ?></p>
				 </div>

				<?php endwhile; // end of the loop. ?>
	 		 </div><!-- .main-content -->
  </section>

<?php get_footer(); ?>
