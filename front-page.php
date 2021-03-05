<?php 
   // Template Name: Homepage
   get_header(); ?>
<!-- Banner Section -->
<section class="banner-section" style="background:url(<?php the_field('banner_background'); ?>) no-repeat center center/cover #1a1d29;">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-6 align-self-center">
            <?php the_field('banner_content'); ?>
         </div>
         <div class="col-12 col-md-6 align-self-center text-right">
            <div class="banner-gear">
               <img class="banner-gear-image" src="<?php echo get_template_directory_uri();?>/assets/images/big-gear.png" alt="">
               <div class="display-table">
                  <div class="display-table-cell"> <a href="" class="upload-btn" id="form-btn">
                     <img src="<?php echo get_template_directory_uri();?>/assets/images/cloud-upload.png" alt="">
                     <?php the_field('upload_file_title'); ?>
                     </a> 
                  </div>
               </div>
            </div>
            <div class="trouble-title">
               <?php the_field('having_trouble_title'); ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Banner Section End -->
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
                     <div class="about-video-button"> <a href="<?php echo esc_url( $link_more_url ); ?>" class="site-btn">
                     <?php echo esc_html( $link_more_title ); ?>
                        </a> 
                     </div>
                  </div>
               </div>
      <?php endif; ?>
      
   </div>
</section>
<!-- Our Company Section End -->
<!-- About Us Section -->
<div class="about__usWrapper p--80">
   <div class="container">
   <?php if( have_rows('about_row_first') ): ?>
    <?php while( have_rows('about_row_first') ): the_row(); 

        $imageFirstAbout = get_sub_field('about_first_row_image');
        ?>
      <div class="row aboutus-specific-section">
         <div class="col-md-6  order-md-1">
            <div class="about__usRightBox" data-aos="zoom-in" data-aos-easing="ease-in-out"> 
               <img src="<?php echo esc_url( $imageFirstAbout['url'] ); ?>" alt="<?php echo esc_attr( $imageFirstAbout['alt'] ); ?>" class="about__usImage"/>
            </div>
         </div>
         <div class="col-md-6">
            <div class="about__usLeftBox" data-aos="zoom-in" data-aos-easing="ease-in-out">
               <?php the_sub_field('about_first_row_content'); ?>
            </div>
         </div>
      </div>
         <?php endwhile; ?>
      <?php endif; ?>

   <?php if( have_rows('about_row_secound') ): ?>
    <?php while( have_rows('about_row_secound') ): the_row(); 
        $imagesecndAbout = get_sub_field('about_second_row_image');

        ?>
         <div class="row">
            <div class="col-md-6">
               <div class="about__usRightBox" data-aos="zoom-in" data-aos-easing="ease-in-out"> 
               <img src="<?php echo esc_url( $imagesecndAbout['url'] ); ?>" alt="<?php echo esc_attr( $imagesecndAbout['alt'] ); ?>" class="about__usImage"/>
               </div>
            </div>
            <div class="col-md-6">
               <div class="about__usLeftBox" data-aos="zoom-in" data-aos-easing="ease-in-out">
                   <?php the_sub_field('about_second_row_content'); ?>
               </div>
            </div>
         </div>
         <?php endwhile; ?>
      <?php endif; ?>

      <?php 
         $linkAbout = get_field('about_button_link');
         if( $linkAbout ): 
            $linkAbout_url = $linkAbout['url'];
            $linkAbout_title = $linkAbout['title'];?>
               <div class="row specific-aboutus-knwbtn"> <a href="<?php echo esc_url( $linkAbout_url ); ?>" class="site-btn"><?php echo esc_html( $linkAbout_title ); ?></a> </div>
      <?php endif; ?>
      
   </div>
</div>
<!-- About Us Section End-->
<!-- Capabilities Section -->
<section class="capabilities-section text-center p--80">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h2>Capabilities<?php //the_field('capabilities_title'); ?></h2>
         </div>
      </div>
      <div class="row">
         <?php if( have_rows('capabilities_boxs') ): ?>
         <?php while ( have_rows('capabilities_boxs') ) : the_row(); $item++; ?>
         <div class="col-12 col-md-4">
            <div class="capabilities-box box-<?php echo $item; ?>">
               <?php the_sub_field('capabilities_content'); ?>
            </div>
         </div>
         <?php endwhile; else : endif; ?>
      </div>
   </div>
</section>
<!-- Capabilities Section End -->
<!-- Service Section -->
<section class="service-section py-7 home--service-sec">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-6 offset-md-3 our-company-head text-center">
            <h2><?php the_field('service_section_title'); ?></h2>
            <h2><?php the_field('service_section_sub_title'); ?></h2>
            <!-- <a class="site-btn" href="<?php //the_field('all_service_btn_link'); ?>">All Services</a> -->
         </div>
      </div>
      <div class="row justify-center">
         <?php
            global $post;
            $args = array( 'posts_per_page' =>6, 'post_type'=> 'service','orderby'=>'menu_order','order'=>'ASC' );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) : setup_postdata($post); ?>
         <div class="col-12 col-md-6 col-lg-4">
            <div class="service-box" style="background:rgba(0, 0, 0, 0.96);background:url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center/cover;">
               <div class="display-table">
                  <div class="display-table-bottom">
                     <div class="services__textBackground">
                        <a href="<?php the_permalink();?>">
                           <h2>
                              <?php the_title(); ?>
                              <i class="fa fa-long-arrow-right"></i>
                           </h2>
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
<!-- Why Choose Us Section -->
<section class="whychooseus-section p--80">
   <div class="container">
      <div class="row whychooseus-title">
		 <!-- <h2>Why Choose Us?</h2> -->
		<h2> <?php the_field('why_choose_us_title'); ?></h2>
      </div>
      <div class="row">
	  <?php if( have_rows('why_choose_boxes') ): ?>
         <?php while ( have_rows('why_choose_boxes') ) : the_row(); ?>
         <div class="col-md-4">
            <div class="why-choose-blocks">
               <?php the_sub_field('why_choose_content'); ?>
            </div>
         </div>
         <?php endwhile; else : endif; ?>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="whychoose-bigblocks">
               <div class="why-bigblock-left">
			   	<?php the_field('why_choose_boxes_full'); ?>
               </div>
               <div class="why-bigblock-right"> <a id="form-btn" class="site-btn mb-0 mt-0"><?php the_field('why_choose_boxes_full_button'); ?></a> </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Why Choose Us Section End -->
<!-- Call to Action -->
<section class="call-to-action" style="background:url(<?php the_field('cta_background');?>) no-repeat center center/cover;">
   <img class="half-gear" src="<?php echo get_template_directory_uri();?>/assets/images/half-gear.png" alt="">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-8 col-lg-6 align-self-center">
            <div class="cta-left">
               <?php the_field('cta_left_content'); ?>
            </div>
         </div>
         <div class="col-12 col-md-4 col-lg-6 align-self-center">
            <div class="cta-right">
               <div class="display-table">
                  <div class="display-table-cell"> <a href="<?php the_field('cta_btn_link');?>" class="site-btn">
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
<!-- Testimonial Section -->
<section class="testimonial-section p--80" style="background:#EEF0F0 url(<?php echo get_template_directory_uri();?>/assets/images/map.png) no-repeat center center;">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="section-head text-center">
               <!-- <h3><?php //the_field('testimonial_top_title');?></h3> -->
               <h2><?php the_field('testimonial_title'); ?></h2>
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
                           <h2><?php the_title(); ?></h2>
                           <span><?php the_field('client_position'); ?></span> 
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-content">
                     <p>
                        <?php the_field('client_comments'); ?>
                     </p>
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
<!-- Logos Section -->
<section class="logo-section p--80">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="section-head text-center">
               <h2>Our Clients</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="logo-carousel">
               <?php
                  global $post;
                  $args = array( 'posts_per_page' =>-1, 'post_type'=> 'logos','orderby'=>'menu_order','order'=>'ASC');
                  $myposts = get_posts( $args );
                  foreach( $myposts as $post ) : setup_postdata($post); ?>
               <div class="logo-box">
                  <div class="logo-meta">
                     <div class="display-table">
                        <div class="display-table-cell">
                           <img src="<?php the_field('logo'); ?>" class="logo-imgs">
                           <!-- <h3><?php //the_title(); ?></h3> -->
                        </div>
                     </div>
                  </div>
               </div>
               <?php endforeach; ?>
               <?php wp_reset_query(); ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Logos Section End -->
<?php get_footer(); ?>