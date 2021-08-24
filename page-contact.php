<?php 
/*
* Template Name: Contact
*/
get_header(); ?>
<main class="container page section no-sidebar">
    <div class="main">
    <h1 class="text-center primary-text"><?php the_title() ?></h1>
    <?php the_field('location'); ?> 
    <?php the_content() ?>
    </div>
</main>

<?php get_footer() ?>