<?php if (have_rows('section_two')): ?>
    <?php while (have_rows('section_two')): the_row(); ?>
        <div class="accordion" id="accordion-<?php echo get_row_index(); ?>">
            <?php if (have_rows('grid_items')): ?>
                <?php while (have_rows('grid_items')): the_row(); ?>
                    <?php $grid_title = get_sub_field('grid_title'); ?>
                    <?php $grid_description = get_sub_field('grid_item_description'); ?>

                    <?php $grid_button = get_sub_field('grid_button'); ?>


                    <h5><?php echo ($grid_title); ?></h5>
                    <p><?php echo ($grid_description); ?></p>
                    <?php 
                    $a_title = $grid_button['title'];
                    $a_url = $grid_button['url'];
                    ?>
				<a href="<?php echo $a_url; ?>"> <?php echo $a_title; ?></a>


                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    <?php endwhile; ?>
<?php endif; ?>