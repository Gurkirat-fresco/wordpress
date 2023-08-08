<?php
/*
Template Name: Testing Template
*/
get_header();
?>

<div class="container-fluid my-0">
	<div class="container-sm">
		<div class="row align-items-center py-sm-5">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h1 class="h1"><?php the_field('section_title'); ?></h1>
				<div class="small-divider"></div>
				<p class="me-5"><?php the_field('description'); ?></p>
			</div>
		</div>
	</div>
</div>


<!-------section two start here------>

<div class="container-fluid my-0 mt-0 py-5">
	<div class="container-sm">
		<div class="row align-items-center py-sm-3">
        <?php 
$images = get_field('gallery');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>
    <ul>
        <?php foreach( $images as $image_id ): ?>
            <li>
                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
        </div>
    </div>
</div>


<div class="container-fluid my-0 mt-0 py-5">
	<div class="container-sm">
		<div class="row align-items-center py-sm-3">
			<?php
$file = get_field('random');
if( $file ):
    $url = wp_get_attachment_url( $file ); ?>
    <a href="<?php echo esc_html($url); ?>" >Download File</a>
<?php endif; 
?>
		</div>
	</div>
</div>

<?php
get_footer();
?>