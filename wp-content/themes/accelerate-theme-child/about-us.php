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
 			<?php endwhile; // end of the loop. ?>
 		 </div><!-- .main-content -->
 	</section><!-- #primary -->

	<!--OUR SERVICES -->
	 <section class="site-content">
		 <div class="our-services">
			 <?php while ( have_posts() ) : the_post();
			 	$center_title_1 = get_field ('center_title_1');
				$text_1 = get_field ('text_1'); ?>

				<h4><?php echo $center_title_1; ?></h4>
				<p><?php echo $text_1; ?></p>

				<?php while ( have_posts() ) : the_post ();
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
				
				$left_title_3
				$text_3
				$icon_3
				$center_title_4
				$left_title_4
				$text_4
				$icon_4

			<a class="button" href="<?php echo site_url('/blog/') ?>">View Our Work</a>

<?php get_footer(); ?>
