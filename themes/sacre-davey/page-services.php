<?php
/** Template Name: Services
 * The template for displaying all pages.
 *
 * @package Sacre Davey Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header>

				<div class="entry-content">
					<h2>One-stop-shop for all your engineering needs</h2>
					<div class="engineering-needs-wrapper">
						
						<div class="engineering-needs-block">
							<h4>Multi-disciplinary engineering</h4>
							<ul class="engineering-needs-list">
								<li>Process engineering</li>
								<li>Mechanical engineering</li>
								<li>Structural engineering</li>
								<li>Civil engineering</li>
								<li>Electrical engineering</li>
								<li>Instrumentation</li>
							</ul>
						</div>
						<div class="engineering-needs-block">
							<h4>Project Delivery</h4>
							<ul class="engineering-needs-list">
								<li>Project estimating</li>
								<li>Procurement</li>
								<li>Scheduling</li>
								<li>Cost management</li>
								<li>Expediting</li>
								<li>Site supervision services</li>
								<li>Project integration</li>
								<li>Project and construction</li>
							</ul>
						</div>
						<div class="engineering-needs-block">
							<h4>Services</h4>
							<ul class="engineering-needs-list">
								<li>Design and Engineering</li>
								<li>Feasibility Studies</li>
								<li>Brownfield CapEx and OpEx</li>
								<li>Turnaround engineering</li>
								<li>Code compliance</li>
								<li>Commissioning &amp; discomissioning</li>
								<li>Funding strategies &amp; capital planning</li>
								<li>Asset rationalization</li>
								<li>Energy efficiency studies</li>
								<li>Asset integrity management</li>
							</ul>
						</div>
					</div>
					
					<div class="banner">
					<h3>Engineers and project managers you can trust.</h3>
					</div>
					<div class="certification-block">
						<h2>Sacre-Davey Engineering Inc. was one of the first companies to be certified under the APEG of BC in Organizational Quality Management Program.</h2>
						<p>Our in-house quality controls system is compliant with the Organizational Quality Management Program as outlined by the Association of Professional Engineers &amp; Geoscientists of British Columbia.</p>
						<img src="<?php echo get_template_directory_uri() . '/assets/images/ServicesTriangleDown.png' ?>">
						
						<p>Our OQM System ensures that we are able to consistently deliver high quality, high value project assistance.</p>
					</div>
					<div class="advantage-banner">
						<h3>Advantage</h3>
						<p>Clients choose Sacré-Davey for our superior customer support, technical expertise, and entrepreneurial approach.</p>
					</div>
					<section class="attributes">
					<h3>We add measurable value to your project by providing</h3>
					<div class="icon-list carousel" data-flickity='{
					"prevNextButtons": false,
					"cellAlign": "center"}'>
						<div class="carousel-cell">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/ServicesRapidResponseIcon.png' ?>">
						</div>
						<div class="carousel-cell">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/ServicesSuperiorservicesIcon.png' ?>">
						</div>
						<div class="carousel-cell">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/ServicesInnovativeIcon.png' ?>">
						</div>
						<div class="carousel-cell">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/ServicesAccessIcon.png' ?>">
						</div>
						<div class="carousel-cell">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/ServicesSafeIcon.png' ?>">
						</div>
						<div class="carousel-cell">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/ServicesProjectIcon.png' ?>">
						</div>
					</div>
					</section>
					<div class="updates-banner">
						<p>We don’t believe clients like to be in the dark, so we keep you informed during all phases of a project- updating you and checking in throughout all project milestones.</p>
					</div>
					
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


	<?php get_footer(); ?>
