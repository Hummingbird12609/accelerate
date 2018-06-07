<?php
/**
 * The template for displaying the About page
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

<section id="primary" class="about-page hero-content">
		
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2 class="hero-text">Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h2>
				<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</section><!-- #primary -->
	
	
		
		<section class="services">
			<div class="main-services"> 
			
			<section class="about-us">

			<div class="about-headline">
				<h4>Our services</h4>
					<p>We take pride in our clients and the content we create for them.</p>
					<p>Here's a brief overview of our offered services.</p>
			</div>
				
			
			<div class="our-services">
			
				<?php query_posts ('posts_per_page=4&post_type=our_services'); ?>	
				<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field('image_1');
				$size = "medium";
						
				?>
					
						
						
				<article class="about-services">
					
					

					<figure class="service-images">
						<?php if($image_1) {  
						echo wp_get_attachment_image( $image_1, $size );
						} ?>					
					</figure>
					
					<div class="individual-services">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>							
					</div>
						
				</article>
				
						
			
				<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); ?>
			
			</div>	
			
		</section>
		
		</div><!-- .main-content -->


	</section><!-- #primary --> 					
						
					 
				
		

	

<?php get_footer(); ?>
