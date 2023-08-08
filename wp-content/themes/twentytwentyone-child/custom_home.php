<?php
/*
Template Name: Home Template
*/
get_header();
?>
<div class="container-fluid my-0">
	<div class="container-sm">
		<div class="row align-items-center py-sm-5">
			<div class="col-lg-6 col-md-12 col-sm-12 wow fadeInUp">
				<h1 class="h1"><?php the_field('banner_heading') ?></h1>
				<div class="small-divider"></div>
				<p class="me-5"><?php the_field('description') ?></p>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 my-5 my-sm-4 my-md-5 my-lg-0 wow fadeInUp banner_img position-relative">
				<img src='<?php the_field('banner_image') ?>' class="img-fluid">
			</div>
		</div>
	</div>
</div>


<!-------section two start here------>

<div class="container-fluid my-0 mt-0 py-5">
	<div class="container-sm">
		<div class="row align-items-center py-sm-3">
			<?php
			$sectionTitle = get_field('section_two');
			if ($sectionTitle) : ?>
				<h3><?php echo $sectionTitle['section_heading']; ?>
					<div class="small-divider"></div>
				</h3>
		</div>
	<?php endif; ?>
	<div class="row same-het-colms mt-3">
		<?php
		if (have_rows('section_two')) {
			while (have_rows('section_two')) {
				the_row();

				if (have_rows('grid_items')) {

					while (have_rows('grid_items')) {
						the_row();
		?>
						<div class="col-lg-6 col-md-12 col-sm-12 mrgn-mob mb-4">
							<div class="card wow fadeInUp <?php echo get_sub_field('grid_class'); ?>">
								<div class="card-body">
									<h5><?php echo get_sub_field('grid_title'); ?></h5>
									<?php echo get_sub_field('grid_item_description'); ?>
									<?php $grid_button = get_sub_field('grid_button'); ?>
									<?php $a_title = $grid_button['title'];
									$a_url = $grid_button['url']; ?>
									<div class="button-area">
										<a href="<?php echo $a_url; ?>" class="<?php echo get_sub_field('button_class'); ?>"> <?php echo $a_title; ?> </a>
									</div>
								</div>
							</div>
						</div>
		<?php
					}
				}
			}
		}
		?>
	</div>
	</div>
</div>


<!---------section two end here------>



<!---------blog section start here-------->

<div class="container-fluid my-0 my-sm-0 my-md-0 py-5" id="blog_sec">
	<div class="container">


		<?php
		$section_three = get_field('blog_section');

		if ($section_three) : ?>
			<h3><?php echo $section_three['blog_section_heading']; ?>
				<div class="small-divider"></div>
			</h3>

		<?php endif; ?>
		<div class="row mt-5">

			<?php
			/* Template Name: Custom Blog Template */


			$args = array(
				'post_type' => 'post', // Fetch blog posts
				'posts_per_page' => 3, // Number of posts to display
			);

			$custom_query = new WP_Query($args);

			if ($custom_query->have_posts()) :
				while ($custom_query->have_posts()) :
					$custom_query->the_post();
					// Your custom template code here for each blog post
			?>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="card blog-secc">
							<div class="card-image-sect">
								<?php
								// Display the featured image if it exists
								if (has_post_thumbnail()) {
								}
								?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</div>
							<div class="card-body">
								<h4 class="card-title">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h4>
								<div class="post-content">
									<?php the_excerpt(); ?>
								</div>
								<div class="read-more-button">
									<a href="<?php the_permalink(); ?>" class="outline-savoir-button">En savoir plus </a>
								</div>
							</div>


						</div>
					</div>
			<?php
				endwhile;
			else :
				echo "No posts found.";
			endif;

			wp_reset_postdata(); // Reset post data to prevent conflicts with the main loop

			?>
		</div>
	</div>
</div>
<!-------section four start here--------->


<div class="container-fluid my-0 mt-0 py-5">
	<div class="container-sm">
		<div class="row align-items-center py-sm-3">
			<?php
			$sectionTitle = get_field('section_four');
			if ($sectionTitle) : ?>
				<h3><?php echo $sectionTitle['section_title']; ?>
					<div class="small-divider"></div>
				</h3>
		</div>
	<?php endif; ?>
	<div class="row section_four mt-3">
		<?php
		if (have_rows('section_four')) {
			while (have_rows('section_four')) {
				the_row();

				if (have_rows('row_items')) {

					while (have_rows('row_items')) {
						the_row();
		?>
						<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
							<div class="card">
								<div class="card-body p-0">
									<div class="card-img">
										<img src="<?php echo get_sub_field('card_image'); ?>">
									</div>
									<?php echo get_sub_field('card_description'); ?>

								</div>
							</div>
						</div>
		<?php
					}
				}
			}
		}
		?>
	</div>
	</div>
</div>

<!--------------section four end here------------>


<!--------------section five ----------------------->


<div class="container-fluid my-0 mt-0 p-0">
	<div class="row p-0 m-0">

		<div class="row section_five mt-3 p-0 m-0">
			<div class=" col-lg-6 col-sm-12 blue-bg mb-sm-0 mb-md-0 mb-lg-4 py-5">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-sm-12"></div>
						<div class="col-md-10 col-lg-10 col-sm-12">
							<?php
							$sectionTitle = get_field('section_five');
							if ($sectionTitle) : ?>
								<h3 class="white-text"><?php echo $sectionTitle['section_title']; ?>
									<div class="white-divider"></div>
								</h3>

							<?php endif; ?>
							<div class="time-line-main">
								<?php
								if (have_rows('section_five')) {
									while (have_rows('section_five')) {
										the_row();

										if (have_rows('timeline')) {

											while (have_rows('timeline')) {
												the_row();
								?>

												<div class="timeline">
													<div class="timeline-content">
														<div class="timeline-year">
															<?php echo get_sub_field('date'); ?>
														</div>
														<div class="timeline_des">
															<?php echo get_sub_field('timeline_description'); ?>
														</div>
													</div>

												</div>
								<?php
											}
										}
									}
								}
								?>

								<?php $section_button = $sectionTitle['section_button']; ?>
								<?php $a_title = $section_button['title'];
								$a_url = $section_button['url']; ?>
								<a href="<?php echo $a_url; ?>" class="timeline-button"> <?php echo $a_title; ?> </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 mb-4 backgroundimage" style="background-image:url(<?php echo $sectionTitle['section_image']; ?>);">

			</div>
		</div>

	</div>

</div>

<!--------------section five end here ----------------------->


<!--------------section sixth ----------------------->

<div class="section-sixth mt-0 py-5">
	<div class="container">
		<div class="row">
			<?php
			$section_sixth = get_field('section_sixth');
			if ($section_sixth) : ?>
			<?php endif; ?>

			<?php
			if (have_rows('section_sixth')) {
				while (have_rows('section_sixth')) {
					the_row();

					if (have_rows('grid_columns')) {

						while (have_rows('grid_columns')) {
							the_row();
			?>
							<div class="col-md-12 col-lg-6 mb-lg-0 mb-3">
								<div class="card">
									<div class="card-body">
										<h3 class="card-title">
											<?php echo get_sub_field('column_title'); ?>
										</h3>
										<div class="small-divider"></div>
										<div class="card-text">
											<p>
												<?php echo get_sub_field('column_description'); ?>
											</p>
										</div>
										<?php $sixth_section_button = get_sub_field('column_button'); ?>
										<?php $a_title = $sixth_section_button['title'];
										$a_url = $sixth_section_button['url']; ?>
										<a href="<?php echo $a_url; ?>" class="btn btn-sixth-sec"> <?php echo $a_title; ?>

											<i class="fa fa-arrow-right-long"></i></a>
									</div>
								</div>
							</div>
			<?php
						}
					}
				}
			}
			?>

		</div>



	</div>
</div>



<!--------------section sixth end ----------------------->

<?php
get_footer();
?>