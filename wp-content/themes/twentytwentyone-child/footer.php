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

<?php get_template_part('template-parts/footer/custom-footer-widget'); ?>

<!-- Modal -->
<div class="modal fade" id="popupForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-top mt-5 pt-3">
		<div class="modal-content">
			<div class="modal-header pb-0 border-0">
				<h5 class="modal-title mb-0 fs-5" id="ModalLabel">Subscribe to our newsletter
					<div class="small-divider1"></div>
				</h5>
				<button type="button" class="popup-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="fa-solid fa-xmark"></i>
				</button>
			</div>
			<div class="modal-body">
				<?php echo apply_shortcodes('[contact-form-7 id="420" title="Subscribe to our newsletter"]'); ?>
			</div>

		</div>
	</div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>