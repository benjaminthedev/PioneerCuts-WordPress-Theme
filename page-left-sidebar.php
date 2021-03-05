<?php 
// Template Name:Sidebar Left

get_header(); while(have_posts()): the_post(); ?>

<section class="pages py-7">
	<div class="container">
		<div class="row">
			<?php get_sidebar(); ?>
			<div class="col-12 col-md-8">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

 <?php get_footer(); endwhile; ?>