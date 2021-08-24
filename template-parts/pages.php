<?php

while(have_posts()): the_post();
?>
<h1 class="text-center primary-text"><?php the_title() ?></h1>
<?php the_post_thumbnail('square', array('class' => 'feature-img')); ?>
<?php 
// Check is the custom post type is classes
if(get_post_type() === 'classes') {
        $inscriptions = get_field('start_date');
        $graduation = get_field('final_date');
?>
        <p class="information-class">On <?php the_field('class_days'); ?> from <?php echo $inscriptions . ' to ' . $graduation ?></p>
 <?php       
}
?>
<?php the_content() ?>
<?//php the_author()?>
<?php //the_date_xml() ?>
<?php
endwhile;
?>