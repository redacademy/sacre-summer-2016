<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Sacre Davey Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">	
				<div class="404-banner">
				<img src="<?php echo get_template_directory_uri() .'/assets/images/404Header.png'?>" alt="">
				</div>
					<h1 class="page-title"><?php echo esc_html( 'Oh no! Wrong Turn' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
				<p><?php echo esc_html( '404 page not found' ); ?></p>
				<a class="home-button" href="<?php echo home_url() ?>">Back To Home</a>

				

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
