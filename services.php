<?php 
// Template Name: Services

get_header(); while(have_posts()): the_post(); ?>

<!-- Our Company Section -->

<!-- Service Section -->
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
<section class="service-section py-7">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 offset-md-3  our-company-head text-center">
				<h2 class="text-center"><?php the_title(); ?></h2>
				<h2><?php the_field('service_section_sub_title', 24); ?></h2>
			</div>
		</div>
		<div class="row justify-center">
		<?php
		global $post;
		$args = array( 'posts_per_page' =>6, 'post_type'=> 'service','orderby'=>'menu_order','order'=>'ASC' );
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>
			<div class="col-12 col-md-6 col-lg-4">
				<div class="service-box" style="background:url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center/cover;">
					<div class="display-table">
						<div class="display-table-bottom">
							<div class="services__textBackground">
								<a href="<?php the_permalink();?>">
									<h2>
									<?php the_title(); ?>
									<i class="fa fa-long-arrow-right"></i></h2>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		<?php wp_reset_query(); ?>
		</div>
	</div>
</section>
<!-- Service Section End -->
<!-- About Us Section -->
<div class="about__usWrapper p--80 cnc-machine-service-about">
	<div class="container">
	<?php if( have_rows('service_section_first_row') ): ?>
    <?php while( have_rows('service_section_first_row') ): the_row(); 
        $image_service = get_sub_field('service_first_image');

		?>
		<div class="row servive-about--section">
			<div class="col-md-6 order-md-2">
				<div class="about__usRightBox"  data-aos="zoom-in" data-aos-easing="ease-in-out">
					<img src="<?php echo esc_url( $image_service['url'] ); ?>" alt="<?php echo esc_attr( $image_service['alt'] ); ?>" class="about__usImage"/>
				</div>
			</div>
			<div class="col-md-6">
				<div class="about__usLeftBox" data-aos="zoom-in" data-aos-easing="ease-in-out">
					<?php the_sub_field('service_first_content'); ?>
				</div>
			</div>
		</div>
         <?php endwhile; ?>
      <?php endif; ?>
	<div class="row service-about-imp">
		<div class="col-md-12">
			<?php if( get_field('first_card') ): ?>
				<div>
					<?php the_field('first_card'); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="row service-scope-benefit">
		<div class="col-md-6">
			<?php if( get_field('second_card') ): ?>
				<div>
					<?php the_field('second_card'); ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="col-md-6">
			<?php if( get_field('third_card') ): ?>
				<div>
					<?php the_field('third_card'); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	</div>
</div>
<!-- About Us Section End-->
<!-- Testimonial Section -->

<section class="testimonial-section py-7" style="background:#EEF0F0 url(<?php echo get_template_directory_uri();?>/assets/images/map.png) no-repeat center center;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-head text-center title-section-style">
					<h2><?php the_field('testimonial_title', 24); ?></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="testimonial-carousel">
				<?php
				global $post;
				$args = array( 'posts_per_page' =>-1, 'post_type'=> 'testimonial','orderby'=>'menu_order','order'=>'ASC');
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) : setup_postdata($post); ?>
					<div class="testimonial-box">
						<div class="testimonial-meta">
							<div class="display-table">
								<div class="display-table-cell">
									<img src="<?php the_field('client_photo'); ?>" alt="">
									<h3><?php the_title(); ?></h3>
									<span><?php the_field('client_position'); ?></span>
								</div>
							</div>
						</div>
						<div class="testimonial-content">
							<p><?php the_field('client_comments'); ?></p>
							<a href="<?php the_permalink();?>" class="more-btn">
								Read More
							</a>
						</div>
					</div>
				<?php endforeach; ?>
				<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Testimonial Section End -->
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