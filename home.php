<?php
get_header();
?>
<main class="page no-sidebar section container">
<ul class="list-blog">
<?php while(have_posts()): the_post(); ?>
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
<?php endwhile; ?>
</ul>
</main>
<?php
get_footer();