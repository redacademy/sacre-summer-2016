<?php
/**
 * The template for displaying all sector types
 *
 * @package Sacre Davey Theme
 */

get_header(); 
wp_nav_menu( array('theme_location' => 'sector-posts', 'container_class' => 'sector-menu' ) ); ?>
<div class="mobile-nav-title"><span>Sectors</span><i class="fa fa-angle-down" aria-hidden="true"></i></div>
<?php wp_nav_menu( array('theme_location' => 'sector-mobile', 'container_class' => 'sector-mobile') ); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php $developments = CFS()->get( 'development' );
        foreach( $developments as $development ): ?>
        <section class="development">
          <div class="development-overlay">
            <h1 class="development-title">
              <?php echo $development['development_title']; ?>
            </h1>
            <div class="development-description">
              <?php echo $development['development_description']; ?>
            </div>
          </div>
          <div class="read-more-button">Read More</div>
        </section>
        <div class="read-more">
          <?php echo $development['read_more']; ?>
        </div>
      <?php endforeach; ?>
      
      <?php $sub_sectors = CFS()->get('sub_sector');
      if($sub_sectors) : 
      foreach($sub_sectors as $sub_sector): ?>
      <section class="sub-sector">
        <div class="sub-sector-title">
          <?php echo $sub_sector['sub_sector_title']; ?>
        </div>
        <div class="sub-sector-lists">
          <?php echo $sub_sector['sub_sector_lists']; ?>
        </div>
      </section>
    <?php endforeach; ?> 
  <?php endif; ?>
    <section class="more-projects">
      <h2>Learn more about <?php echo get_the_title(); ?> projects.</h2>
      <div class="link-to-projects"><a href="/sacre-davey/project-type/oil-gas">
      <?php echo get_the_title(); ?> Projects</a>
      </div>
    </section>
  </article><!-- #post-## -->
<?php endwhile; // End of the loop. ?>
</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>