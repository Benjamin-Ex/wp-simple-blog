<header class="header">
            <div class="logo">
                <a href="<?php echo home_url();?>" class="logo__text"><?php bloginfo('name');?></a>
                <p class="logo__baseliine"><?php bloginfo('description');?></p>
                </div>
            <div id="hamburger">
            <div id="hamburger-content">
                <nav>
                <?php
                    $menuParameters = array(
                        'theme_location'  => 'main',
                        'container'       => 'ul',
                        'depth'           => 0,
                    );

                     echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                ?>
                </nav>
            </div>
            <button id="hamburger-button">&#9776;</button>
            <div id="hamburger-sidebar">
                <div id="hamburger-sidebar-header"></div>
                <div id="hamburger-sidebar-body"></div>
            </div>
            <div id="hamburger-overlay"></div>
            </div>
        </header>
