<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after

 *

 * @package Graphy

 */

?>



	</div><!-- #content -->



	<footer id="colophon" class="site-footer">



		<?php get_sidebar( 'footer' ); ?>



		<div class="site-bottom">



			<div class="site-info">

				<div class="site-copyright">

					&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

				</div><!-- .site-copyright -->

			</div><!-- .site-info -->



		</div><!-- .site-bottom -->



	</footer><!-- #colophon -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</div><!-- #page -->



<?php wp_footer(); ?>



</body>

</html>

