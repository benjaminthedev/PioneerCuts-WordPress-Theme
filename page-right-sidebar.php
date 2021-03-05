<?php 
// Template Name:Sidebar Right

get_header(); while(have_posts()): the_post(); ?>

<section class="pages py-7">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-9">
				<?php the_content(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

 <?php get_footer(); endwhile; ?>