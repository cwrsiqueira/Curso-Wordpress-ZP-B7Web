<!DOCTYPE html>
<html lang="en">
    <head>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <header>
            <?php 
                if(has_custom_logo()) {
                    the_custom_logo();
                }
            ?>
            <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>

            <div style="clear: both;"></div>

            <?php 
                if(has_nav_menu('primary')) {
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => 'nav',
                        'container_class' => 'main-menu',
                        'fallback_cb' => false
                    ]);
                }
            ?>
        </header>
        <hr>
