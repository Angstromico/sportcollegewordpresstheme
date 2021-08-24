<?php 
/*
* Template Name: Sidebar On 
*/
get_header(); ?>
<main class="container page section with-sidebar">
    <div class="main">
        <?php get_template_part('template-parts/pages'); ?> 
    </div>
    <?php get_sidebar(); ?>
</main>
<?php get_footer() ?>