<?php
/**
 * The template for displaying case studies
 *
 * This is the template that displays single case studies by default.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$size = "full"; ?>

				<article class="case-study">
					<aside class = "case-study-sidebar">
						<h2><?php the_title(); ?></h2>
						<h5><?php echo $services; ?></h5>
						<h6>Client: <?php echo $client; ?></h6>

				    <?php the_content(); ?>

						<p><strong><a href="<?php echo $link; ?>">Site Link</a></strong></p>
					</aside>

					<div class="case-study-images">
						<?php if($image_1) {
							echo wp_get_attachment_image( $image_1, $size );
					   } ?>
						<?php if($image_2) {
							echo wp_get_attachment_image( $image_2, $size );
						} ?>
						<?php if($image_3) {
							echo wp_get_attachment_image( $image_3, $size );
						 } ?>

			   </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

	<div id="navigation" class="container">
		<div class="left"><a href="<?php echo site_url('/blog/') ?>">&larr; <span>Back to posts</span></a></div>
	</div>
	
<?php get_footer(); ?>
