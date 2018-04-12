<!-- <div class="social-nav">
        <a href="#">
        <i class="fa fa-facebook"></i>
        </a>
        <a href="#">
        <i class="fa fa-twitter"></i>
        </a>
        <a href="#">
        <i class="fa fa-instagram"></i>
        </a>
    </div>
 -->

    <?php
        wp_nav_menu([
            'theme_location'    => 'social',
            'container'         => 'div',
            'container_class'   => 'social-nav',
            'depth'             => 0,
            'link_before'       => '<i class="fa fa-',
            'link_after'        => '"aria-hidden=true></i>'
        ]);
    ?>