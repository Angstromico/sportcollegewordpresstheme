<footer class="footer container">
<hr>
<div class="content-footer">
<?php
                $argc = array(
                    "theme-location" => "primary-menu",
                    "container" => 'nav',
                    "container_class" => "primary-menu"
                );
                wp_nav_menu($argc);
            ?>
            <p class="copyright">Manuel Morales all rights reserved. <?php echo get_bloginfo('name'). ' '. date('Y'); ?> &copy;</p>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>