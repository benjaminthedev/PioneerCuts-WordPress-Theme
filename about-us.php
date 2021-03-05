<?php 
// Template Name: About Us

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

<!-- Our Company Section -->
<section class="our-company p--80">
	<div class="container">
		<div class="row">
			<div class="about-video-title">
				<div class="our-company-head">
					<h2><?php the_field('top_title'); ?></h2>
					<h2><?php the_field('our_company_title'); ?></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-6 align-self-center order-lg-first about-video--cont">
				<?php the_field('video_link'); ?>
			</div>
			<div class="col-12 col-lg-6 align-self-center order-first">
				<div class="row">
					<div class="col-12">
						<div class="our-company-right">
							<div class="service-list">
							<?php if( have_rows('service_lists') ): ?>
							<?php while ( have_rows('service_lists') ) : the_row(); ?>
								<div class="service-list-box">
									<div class="display-table">
										<div class="display-table-cell">
											<?php the_sub_field('service_content');?>
										</div>
									</div>
								</div>
							<?php endwhile; else : endif; ?>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
         $link_more = get_field('more_btn_link');
			if( $link_more ): 
				$link_more_url = $link_more['url'];
				$link_more_title = $link_more['title'];?>
				<div class="row">
					<div class="col-md-12">
						<div class="about-video-button"> <a href="<?php echo esc_url( $link_more_url ); ?>" class="site-btn"><?php echo esc_html( $link_more_title ); ?></a> 
						</div>
					</div>
				</div>
		<?php endif; ?>
	</div>
	
</section>
<!-- Our Company Section End -->



<section class="main-content-style">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>   
    
    
<section class="team-member-section">
<div class="container">
	<?php if( have_rows('team') ): ?>
	<div class="title-section-style">
		<h2 class="text-center">Our Team</h2>
	</div>
	<ul class="team-style team-list-main">

	<?php while( have_rows('team') ): the_row(); 

		// vars
		$image = get_sub_field('image');
		$staffName = get_sub_field('staff_name');
		$jobTitle = get_sub_field('job_title');

		?>

		<li class="staff-member-style">
			<div class="image-content-list">
				<?php if( $image ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
				<?php endif; ?>
			</div>
			<div class="inner-body-content">
				<?php if( $staffName ): ?>
				<p class="name"><?php echo $staffName; ?></p>
				<?php endif; ?>


				<?php if( $jobTitle ): ?>
				<p class="job"> <?php echo $jobTitle; ?></p>
				<?php endif; ?>
			</div>
		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>
    
    
    
    
    
    
    
    
    
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
							<a  href="<?php the_field('cta_btn_link', 24);?>" class="site-btn">
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