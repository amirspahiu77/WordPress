<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
            <div class="logo">
                <?php 
                if (the_costum_logo(); ){
                    the_custom_logo();
                }else{
                ?>
                    <a href="<?php echo home_url('/') ?>" <span><?php bloginfo(' name '); ?>></a>
                    <?php
                }
                ?>
                
                
            </div>
            <div class="searchbox">
                Search Box
            </div>
        </section>
        <section class="menu-area">
            <nav class="main-menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'wp_devs_main_menu',
                        'depth' => 2
                    )
                );
                ?>
            </nav>
        </section>
    </header>
</body>
</html>