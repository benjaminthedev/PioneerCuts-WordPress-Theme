<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pioneer_Cuts
 */

?>
  

	<footer id="colophon" class="site-footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 offset-md-3">
						<div class="section-head text-center">
							<!-- <h3><?php //the_field('contact_top_title','options'); ?></h3> -->
							<h2><?php the_field('contact_title','options'); ?></h2>
							<p><?php the_field('contact_sub_title','options'); ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- <div class="col-12 col-md-8 col-md-offset-2"> -->
						<div class="footer__quotationBox">
						<div class="contact-form">
							<?php the_field('contact_right_content','options'); ?>

							<p class="email__warning"><em>If You Require ITAR Compliant File Transfers Do Not Upload Documents to This Form-For ITAR compliance email your files directly to <a href="mailto:quotes@pioneercuts.com">quotes@pioneercuts.com</a> </em></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-4">
						<!-- <div class="footer-copy">
							<?php //the_field('footer_copy','options'); ?>
						</div> -->
					</div>
					<div class="col-12 col-md-8">
						<div class="footer-menu">
		                    <?php wp_nav_menu( array(
		                        'theme_location'   =>  'mainMenu',
		                        ));
		                     ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->



<footer class="footer__final">
<div class="container">
	
<div class="footer-inner-cotent-main">
<div class="footer__box">
	<?php the_field('contact_left_content','options'); ?>

	<a id="form-btn" href="" class="header-btn">
		Get A Quote Now!					
	</a>
</div>

<div class="footer__box">
	<h3 class="footer-headings">Services</h3>

	<ul class="footer__servicesMenu">
		<li><a href="/service/assembly-services/">Assembly Services</a></li>
		<li><a href="/service/cnc-milling/">CNC Milling</a></li>
		<li><a href="/service/metal-finishing/">Metal Finishing</a></li>
		<li><a href="/service/project-inspection/">Inspection & Certification</a></li>
		<li><a href="/service/cnc-turning/">CNC Tuning</a></li>
	</ul>
</div>

<div class="footer__box footer__boxPosts">
	<h3 class="footer-headings">Recent Posts</h3>

	
<?php $args_query = array(
	'posts_per_page' => 2,
	'order' => 'ASC',
	'orderby' => 'date',
	'cat' => 201,
); 

$query = new WP_Query( $args_query );


if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		?>
	<div class="footer__postWrapper">

		<div class="footer__image">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</div>

		<div class="footer__contentWrapper">
			<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
		 
			<p><?php the_excerpt(); ?></p> 
		</div>

	</div>

	<?php 
	}
} else {}

wp_reset_postdata();
?>


</div>

<div class="footer__box">
	<!-- <h3 class="footer-headings">Get Your Quote Today!</h3>

	<p>It Takes 30 seconds, upload your project files, and receive a fast free quote.</p>

	<a id="form-btn" href="" class="header-btn">
		Get A Quote Now					
	</a> -->
	<h3 class="footer-headings">Subscribe For Newsletter</h3>
	<!-- <p>Join our mailing list to receive the latest news and updates from our team.</p> -->
	<p>10% of your first order</p>
	<?php //dynamic_sidebar( 'newsletter-footer' ); ?>
	<?php echo do_shortcode('[mo-optin-form id="tUVFnmkRUU"]');?>
	<?php if ( is_active_sidebar( 'image-itar' ) ) { ?>
	<div class="text-right Badge-image-style">
		<?php dynamic_sidebar( 'image-itar' ); ?>
	</div>
	<?php } ?>
</div>
</div>
</div>
</footer>

<div class="footer-copy">
	<?php the_field('footer_copy','options'); ?>
</div>

<?php wp_footer(); ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" ></script>
<script>
jQuery(window).on("load", function (e) {
	if(jQuery.cookie('modal-newsletter') != 'newsletter'){
		setTimeout(function(){
			jQuery('.modal-newsletter').modal('show');
			jQuery.cookie('modal-newsletter', 'newsletter',{ expires: 2 });
		}, 6000);
	}
});

</script>
<script>
	jQuery('.main-mobile-menu .menu > li').click(function() {
		jQuery(this).toggleClass('active').siblings().removeClass('active');
	});
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
		
	});
  </script>
<script>
jQuery(document).ready(function(){
    jQuery('.yarpp-related').attr('id', 'stop-sidebar');
});

jQuery(document).ready(function(){
	jQuery('.yarpp-related').attr('id', 'stop-sidebar');
});

</script>
<script type="text/javascript">
_linkedin_partner_id = "2992508";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2992508&fmt=gif" />
</noscript>
</body>
</html>
