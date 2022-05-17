<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" >
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <?php if(get_theme_mod("gm_topmenu")): ?>
        <div class="top_header">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <div class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                            <div class="icon-bar"></div>
                            <div class="icon-bar"></div>
                            <div class="icon-bar"></div>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar">
                        <?php 
                            if(has_nav_menu("top")) {
                                wp_nav_menu([
                                    "theme_location" => "top",
                                    "container" => false,
                                    "fallback_cb" => false,
                                    "menu_class" => "nav navbar-nav",
                                ]);
                            }
                        ?>
                    </div>
                </div>
            </nav>
        </div>
        <?php endif; ?>
        <div class="main_header">
            <div class="container">
                <div class="logo">
                    <?php 
                        if(has_custom_logo()) {
                            the_custom_logo();
                        }
                    ?>
                </div>
                <div class="main_nav_border">
                    <div class="main_nav">
                        <?php 
                            if(has_nav_menu("primary")) {
                                wp_nav_menu([
                                    "theme_location" => "primary",
                                    "container" => false,
                                    "fallback_cb" => false,
                                    "menu_class" => "nav navbar-nav",
                                ]);
                            }
                        ?>
                        <?php if(get_theme_mod("gm_search")): ?>
                        <div class="search_area">
                            <?php get_search_form(); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="main_info">
                        <div class="row">
                            <div class="col-sm-8 random_post">
                                <strong>Você já leu?</strong>
                                <?php 
                                    $gm_query = new WP_Query([
                                        'posts_per_page' => 1,
                                        'post_type' => 'post',
                                        'orderby' => 'rand'
                                    ]);
                                    if($gm_query->have_posts()) {
                                        while($gm_query->have_posts()) {
                                            $gm_query->the_post();
                                            ?>
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            <?php
                                        }
                                        wp_reset_postdata();
                                    }
                                ?>
                            </div>
                            <div class="col-sm-4 social_area">
                                <div class="social_txt">
                                    SIGA:
                                </div>
                                <div class="social_icons">
                                    <?php if(get_theme_mod("gm_facebook")): ?>
                                        <a href="<?php echo get_theme_mod("gm_facebook"); ?>" target="blank">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/facebook.png' ?>" alt="Facebook">
                                        </a>
                                    <?php endif; ?>
                                    <?php if(get_theme_mod("gm_googleplus")): ?>
                                        <a href="<?php echo get_theme_mod("gm_googleplus"); ?>" target="blank">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/gplus.png' ?>" alt="Google Plus">
                                        </a>
                                    <?php endif; ?>
                                    <?php if(get_theme_mod("gm_instagram")): ?>
                                        <a href="<?php echo get_theme_mod("gm_instagram"); ?>" target="blank">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/instagram.png' ?>" alt="Instagram">
                                        </a>
                                    <?php endif; ?>
                                    <?php if(get_theme_mod("gm_twitter")): ?>
                                        <a href="<?php echo get_theme_mod("gm_twitter"); ?>" target="blank">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/twitter.png' ?>" alt="Twitter">
                                        </a>
                                    <?php endif; ?>
                                    <?php if(get_theme_mod("gm_youtube")): ?>
                                        <a href="<?php echo get_theme_mod("gm_youtube"); ?>" target="blank">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/youtube.png' ?>" alt="Youtube">
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>