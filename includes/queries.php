<?php 
function sportlist_classes($quantity = -1) { ?>
    <ul class="list">
    <?php
    $args = array(
        'post_type' => 'classes',
        'posts_per_page' => $quantity,
        'order' => 'ASC'
    );
    $classes = new WP_Query($args);
    while($classes->have_posts()): $classes->the_post();
    ?>
    <li class="class card">
    <?php the_post_thumbnail('classes'); ?>
    <div class="content">
        <a href="<?php the_permalink(); ?>">
        <h3><?php the_title() ?></h3>
        </a>
        <?php 
        $inscriptions = get_field('start_date');
        $graduation = get_field('final_date');
        ?>
        <p>On <?php the_field('class_days'); ?> from <?php echo $inscriptions . ' to ' . $graduation ?></p>
    </div>
    </li>
    <?php endwhile; wp_reset_postdata(); ?>
    </ul>
    <?php
}