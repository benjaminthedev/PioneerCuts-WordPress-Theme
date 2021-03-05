<?php 
// Template Name: Pay Now

get_header(); while(have_posts()): the_post(); ?>





<section class="banner-section-main" style="background-image:url(<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>)">
	<div class="container">
		<div class="title-banner-content">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</section>

<!-- Get a free Quote -->
<section class="get-freequote-section">
<div class="getfree-quoteleft">
	<h2>Get A<br> Free Quote</h2>
</div>
<div class="getfree-quoteright">
	<?php echo do_shortcode( '[contact-form-7 id="2759" title="Get a free quote"]' ); ?>
</div>
</section>
<!-- Get a free Quote End -->

<section class="pages p--80">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_content(); ?>
			</div>
		</div>
    </div>
</section>


<!-- Call to Action -->
<section class="call-to-action" style="background:url(<?php the_field('cta_background', 24);?>) no-repeat center center/cover;">
<img class="half-gear" src="<?php echo get_template_directory_uri();?>/assets/images/half-gear.png" alt="">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8 col-lg-6 align-self-center">
				<div class="cta-left">
					<?php the_field('cta_left_content', 24); ?>
				</div>				
			</div>
			<div class="col-12 col-md-4 col-lg-6 align-self-center">
				<div class="cta-right">
					<div class="display-table">
						<div class="display-table-cell">
							<a href="<?php the_field('cta_btn_link', 24);?>" class="site-btn">
								Get A Quote
							</a>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</section>

<!-- Call to Action End -->

 <?php get_footer(); endwhile; ?>