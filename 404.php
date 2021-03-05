<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Pioneer_Cuts
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found p--100">
				<div class="container">
					<div class="inner-404-page">
						<header class="page-header">
							<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/404.png" alt="error" title="error">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'pioneer-cuts' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p>It looks like nothing was found at this location.</p>
							<a href="/" class="site-btn mb-10">Go to Home</a>
						</div><!-- .page-content -->
					</div>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
