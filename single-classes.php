<?php 
get_header(); ?>
<main class="container page section with-sidebar">
    <div class="main">
        <?php get_template_part('template-parts/pages'); ?> 
    </div>
    <?php get_sidebar('classes'); ?>
</main>
<?php get_footer() ?>