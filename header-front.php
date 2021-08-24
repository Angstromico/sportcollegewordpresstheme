<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Sport College</title>
</head>
<body <?php body_class() ?>>
<header class="header" >
    <!--<h1>Sports College</h1>-->
    <div class="container header-grid">
        <div class="navigation-bar-front navigation-bar">
            <div class="logo">
                <a href="<?php echo esc_url(site_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri()?>/img/sports-colleges.svg" alt="Logo">
                </a>
            </div>
            <?php
                $argc = array(
                    "theme-location" => "primary-menu",
                    "container" => 'nav',
                    "container_class" => "primary-menu"
                );
                wp_nav_menu($argc);
            ?>
            </div>
            <div class="text-center tagline">
                <h1><?php the_field('header_hero') ?></h1>
                <p><?php the_field('content_hero') ?></p>
            </div>
    </div>
</header> 
</body>
</html>