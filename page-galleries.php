<?php 
/*
* Template Name: Gallery
*/
get_header(); ?>
<main class="container page section no-sidebar">
    <div class="main">
    <?php

while(have_posts()): the_post();
?>
<h1 class="text-center primary-text"><?php the_title() ?></h1>

<?php 
the_content();
?>
<?//php the_author()?>
<?php //the_date_xml() ?>
<?php
endwhile;
?> 
    </div>
</main>
<?php get_footer() ?>