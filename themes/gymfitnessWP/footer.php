<footer class="site-footer" container>
    <div class="footer-content">
        <?php

        $args = array(
            'theme_location' => 'main-menu',
            'container' => 'nav',
            'container_class' => 'main-menu' // to target with css

        );

        wp_nav_menu($args);



        ?>

    </div>
</footer>






</body>

</html>