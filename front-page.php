<?php get_header('front') ?>
<section class="welcome text-center section">
    <h2 class="primary-text"><?php the_field('header') ?></h2>
    <p><?php the_field('text_welcome') ?></p>
</section>
<div class="areas">
    <ul class="container container-areas">
        <li class="area">
        <?php 
        $area1 = get_field('area1');
        $image1 = wp_get_attachment_image_src($area1['image'], 'midle')[0];
        $area2 = get_field('area2');
        $image2 = wp_get_attachment_image_src($area2['image'], 'midle')[0];
        $area3 = get_field('area3');
        $image3 = wp_get_attachment_image_src($area3['image'], 'midle')[0];
        $area4 = get_field('area4');
        $image4 = wp_get_attachment_image_src($area4['image'], 'midle')[0];
        ?>
            <img src="<?php echo esc_attr($image1) ?>" alt="students">
            
            
            <!---->
        </li>
        <li class="area"><img src="<?php echo esc_attr($image2) ?>" alt="students"></li>
        <li class="area center"><img src="<?php echo esc_attr($image3) ?>" alt="students"></li>
        <!--<li><img src="<?php echo esc_attr($image4) ?>" alt="students"></li>-->
    </ul>
</div>
<section class="classes">
    <div class="container section">
        <h2 class="text-center primary-text">Our Majors</h2>
        <?php sportlist_classes(4); ?>
        <div class="container-button">
            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Our Majors'))) ?>"
            class="button primary-button">
            View all The Classes
        </a>

        </div>
        
    </div>
</section>
<section class="instructors">
    <div class="container section">
        <h2 class="text-center primary-text">Our Professionals</h2>
        <p class="text-center">Profecionals to Help You Achive yours Goals</p>
        <ul class="list-instructors">
        <?php 
        $arg = array(
            'post_type' => 'instructors',
            'post_per_page' => 30,
        );
        $instructors = new WP_Query($arg);
        while($instructors->have_posts()): $instructors->the_post(); 
        ?>
        <li class="instructor">
            <?php the_post_thumbnail('square') ?>
            <div class="content text-center">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
                <div class="skill">
                    <?php 
                        $esp = get_field('skill');
                        foreach($esp as $e):
                    ?>
                    <span class="label"><?php echo esc_html($e) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </li>
        <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    </div>
</section>
<section class="testimonials">
    <h2 class="text-center white-text">Ex Students Testimonials</h2>
    <div class="container-testimonials">
        <ul class="testimonials-list">
            <?php 
            $args = array(
                'post_type' => 'testimonials',
                'post_per_page' => 10,
            );
            $testimonials = new WP_Query($args);
            while($testimonials->have_posts()): $testimonials->the_post();
            ?>
            <li class="text-center testimonial">
                <blockquote><?php the_content(); ?></blockquote>
                <footer class="testimonial-footer">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <p><?php the_title(); ?></p>
            </footer>
            </li>
            <?php endwhile; wp_reset_postdata();  ?>
        </ul>
    </div>
</section>
<section class="blog container section">
    <h2 class="text-center primary-text">Our Blog</h2>
    <p class="text-center">Tips About Our University</p>
    <div class="page no-sidebar section container">
    <ul class="list-blog">
    <?php 
    $others = array(
        'post_type' => 'post',
        'posts_per_page' => 4
    );
    $blog = new WP_Query($others);
    while($blog->have_posts()): $blog->the_post();
    ?>
    <li class="card">
 <?php the_post_thumbnail('blog'); ?>
 <?php the_category(); ?>
     <div class="content">
         <a href="<?php the_permalink(); ?>">
             <h3><?php the_title(); ?></h3>
         </a> 
         <p class="meta">
             <span>By:</span>
             <a href=">?php echo get_the_author_posts_url(get_the_author_meta('user_description')); ?>">
             <?php echo get_the_author_meta('display_name'); ?>
             </a>
         </p>
         <p class="meta">
             <span>Date:</span>
             <?php the_time(get_option('date_format')); ?>
         </p>
     </div>
 </li>
    <?php endwhile; wp_reset_postdata();  ?>    
    </ul>
    </div>
</section>
<?php get_footer() ?>
