<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress Theme
 */
  get_header(); ?>
	
	<main>
		<div class="container">
			<?php
				if( have_posts()):
				// loop starts
				while( have_posts()): the_post(); ?>
					<article>
						<h2><?php the_title();?></h2>
						<div><?php the_content();?></div>
					</article>
				<?php endwhile; 
				 else: ?>
					<p>Nothing to display</p>
			<?php endif; ?>
		</div>
	</main>

<?php get_footer(); ?>