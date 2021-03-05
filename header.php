<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pioneer_Cuts
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M5SNZTW');</script>
<!-- End Google Tag Manager -->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M5SNZTW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Modal-Email-Newsletter start -->
<?php if(is_front_page() || is_home() ) { ?>
<?php if ( is_active_sidebar( 'newsletter-popup' ) ) { ?>
<div class="modal modal-newsletter">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
         <div class="newsletter-popup-body">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
        	<?php dynamic_sidebar( 'newsletter-popup' ); ?>
			<p class="text-bottom-newsletter"><em>We promise not to spam you. You can unsubscribe at any time</em></p>
		 </div>
      </div>
    </div>
  </div>
</div>

<?php  }
  }
?>

<!-- Modal-Email-Newsletter end -->
<div id="page" class="site">
<?php if ( is_front_page() || is_home()) : ?>
	<header class="site-header" id="myHeader">
<?php else: ?>
	<header class="site-header inner-header" id="myHeader">
<?php endif;?>
		<div class="container">

			<!-- <div class="row">
				<div class="col-md-2 mobile-hide offset-md-6">
					<div class="telephone mt-3 p-0 text-right">
						<i class="fa fa-phone"></i> <a id="topbar-phone" href="tel:+15177984988">(517) 798-4988</a>
					</div>
				</div>
				<div class="col-md-3 mobile-hide mt-1">
					<a id="form-btn" href="<?php the_field('header_btn_link','options');?>" class="header-btn">
						<?php the_field('header_btn_title','options'); ?>
					</a>
				</div>
			</div> -->




<div class="row">
 <div class="col-6 col-lg-3">
	<div class="logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<!-- <img src="https://pioneercuts.com/wp-content/uploads/2020/10/Pioneer-Cuts-logo-white.png" alt="Pioneer Cuts Logo"> -->

		<img src="https://pioneercuts.com/wp-content/uploads/2020/12/Pioneer-Cuts-Quality-Parts-On-Your-Schedule.png" alt="Pioneer Cuts - Quality Parts On Your Schedule" />
		</a>
	</div>
</div>

	<div class="col-12 col-lg-8 offset-lg-1 mobile-hide">
		<div class="header-number-buttonpart">
			<?php if ( is_active_sidebar( 'image-itar' ) ) { ?>
				<div class="Badge-image-header">
					<?php dynamic_sidebar( 'image-itar' ); ?>
				</div>
			<?php } ?>
			<div class="telephone p-0 text-right">
				<i class="fa fa-phone"></i> <a id="topbar-phone" href="tel:+15177984988">(517) 798-4988</a>
			</div>
			<div class="header--buton">
				<a id="form-btn" href="<?php the_field('header_btn_link','options');?>" class="header-btn">
				<?php the_field('header_btn_title','options'); ?>
				</a>
			</div>
		</div>
		<div class="main-menu">
			<?php wp_nav_menu( array(
				'theme_location'   =>  'mainMenu',
				));
			?>
		</div>	
	</div>
	<div class="col-6 col-lg-6 hide-on-desk-togle">
			
			<div class="mobile-menu">
				<span></span>
				<span></span>
				<span></span>
			</div>
		
	</div>	
</div>





			
				


				

			
			
				
	

				
			</div>
		</div>
	</header>

	<div class="humbergur-menu">
		<div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php the_field('site_logo','options'); ?>" alt="">
			</a>
			<div class="menu-close">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/close-icon.png" alt="">
			</div>
		</div>

		<div class="main-mobile-menu">
            <?php wp_nav_menu( array(
                'theme_location'   =>  'mainMenu',
                ));
			 ?>
			<div class="quote-btn">
				<a id="form-btn" href="" class="header-btn">
							Get A Quote Now					
				</a>
			</div>
		</div>

	</div>
