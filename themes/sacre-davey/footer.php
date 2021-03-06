<?php
/**
 * The template for displaying the footer.
 *
 * @package Sacre Davey Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <section class="site-info container">
   <div class="footer-logo">
    <img src="<?php echo get_template_directory_uri() .'/assets/images/footer-logo.png'?>" alt="Sacre Davey footer logo"/>    
  </div>
  <div class="more-info">
    <h1>Need more info?</h1>
    <a href="/sacre-davey/contact">
    <button type="submit">Contact Us</button>
    </a>
  </div>
  <div class="social-media">
    <h1>Follow Us</h1>
    <i class="fa fa-linkedin" aria-hidden="true"></i>
    <i class="fa fa-facebook" aria-hidden="true"></i>
    <i class="fa fa-youtube" aria-hidden="true"></i>
  </div>


</section><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
