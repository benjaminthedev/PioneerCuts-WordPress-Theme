 <?php get_header(); while(have_posts()): the_post(); ?>

<section class="pages py-7">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

 <?php get_footer(); endwhile; ?>