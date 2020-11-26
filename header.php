<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if (is_singular() && pings_open()) { ?>
            <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
        <?php } ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php
        if (function_exists('wp_body_open')) {
            wp_body_open();
        } else {
            do_action('wp_body_open');
        }
        ?>


        <div id="header">

            <div class="header-inner container">
                <div class="logo text-white">

                    <h1><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php esc_html(bloginfo('name')); ?></a></h1>

                    <?php
                    $description = get_bloginfo('description', 'display');
                    if ($description || is_customize_preview()) :
                        ?>
                        <p><?php echo esc_html($description); ?></p>
                    <?php endif; ?>
                </div><!-- .logo -->                 
                <div id="navigation">
                    <div class="toggle" >
                        <a class="toggleMenu" href="#" ><?php esc_html_e('Menu', 'flydecor'); ?></a>
                    </div><!-- toggle --> 	
                    <nav id="main-navigation" class="site-navigation primary-navigation sitenav" role="navigation">		
                        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>	
                    </nav>
                </div><!-- navigation -->
            </div><!-- .header-inner--><div class="clear"></div>  
        </div><!-- #header -->