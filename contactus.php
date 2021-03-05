<?php
// Template Name: Contact Us

get_header(); while(have_posts()): the_post(); ?>

<section class="banner-section-main" style="background-image:url(<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>)">
	<div class="container">
		<div class="title-banner-content">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</section>

<section class="pages py-7">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>


<style>
img.header-images {
    margin: 120px 0 -60px 0;
}
</style>


 <?php get_footer(); endwhile; ?>
