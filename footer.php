<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div id="wrapper-footer" class="bg-light footer-understrap">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
                      <div class="row">
                        <div class="col-sm-12 social-footer">
                          <a href="http://github.com/thachert1d"><i class="socialIcons fa fa-github fa-2x"></i></a>
                          <a href="http://twitter.com/thachert1d"><i class="socialIcons fa fa-twitter fa-2x"></i></a>
                          <a href="http://linkedin.com/in/sophiethacher"><i class="socialIcons fa fa-linkedin-square fa-2x"></i></a>
                        </div>
                      </div>
					  <p class="site-footer-inner">
				&copy; <?php echo date("Y") ?> <a href="<?php echo home_url(); ?>"> Thacher</a>
			          </p>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

