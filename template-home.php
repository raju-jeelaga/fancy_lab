<?php
/*
	Template Name: Home page
*/

get_header(); ?>
	
	<main>
		<section class="">
			<div class="container">
				<div class="row">
					
				</div>
			</div>
		</section>
		<section class="">
			<div class="container">
				<div class="row">

				</div>
			</div>
		</section>
		<section class="lab-blog">
			<div class="container">
				<div class="row">
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
					<?php endif;
					?>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>