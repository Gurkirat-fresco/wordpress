<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>



</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->



<div class="footer-custom">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 border-one">
				<div class="footer-widget-area">
					<div id="c1" class="footer-widget-column">
						<?php dynamic_sidebar('footer-widget-area-1'); ?>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-12 border-two">
				<div id="c2" class="footer-widget-column">
					<?php dynamic_sidebar('footer-widget-area-2'); ?>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 border-three">
				<div id="c3" class="footer-widget-column">
					<?php dynamic_sidebar('footer-widget-area-3'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bottom-bar">
		<div class="container">
			<div class="row soc-list">
				<div class="col-lg-12 col-md-12 col-sm-12 d-block d-lg-flex justify-content-between">
					<?php dynamic_sidebar('footer-widget-area'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- #colophon -->

</div><!-- #page -->



</body>

</html>