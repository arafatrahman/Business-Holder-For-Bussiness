<?php
add_action('after_setup_theme', 'kauThemeCustomHeaderSetup');
function kauThemeCustomHeaderSetup() {
    add_theme_support('custom-header', apply_filters('kau_theme_custom_header_args', array(
        'default-text-color' => 'ffffff',
        'width' => 1600,
        'height' => 400,
        'wp-head-callback' => 'kauThemeHeaderStyle',
    )));
}

if (!function_exists('kauThemeHeaderStyle')) :

    function kauThemeHeaderStyle() {
        $header_text_color = get_header_textcolor();
        ?>
        <style type="text/css">
        <?php
              
        if (!empty(get_header_image())) {
            ?>
                #header{
                    background-image: url(<?php echo esc_url(get_header_image()); ?>);
                    background-position: center top;
                  
                }
                  .logo h1 a { color:white;}
                #kau-header{
                    background-image: url(<?php echo esc_url(get_header_image()); ?>);
                    background-position: center top;
                }
               #kau-header .logo a{color:white;}
               .nav-menu a{color:white;}
                
        <?php } else{ ?>
                #header{
                     background-color : #9F73FA;
                   
                }
                  .logo h1 a { color:white;}
                #kau-header{
                     background-color : #9F73FA;   
                }
       `<?php }  ?>	
        </style>
        <?php
        if (display_header_text()) {
            return;
        }
        ?>
        <style type="text/css">
            .logo {
                margin: 0 auto 0 0;
            }

            .logo h1,
            .logo p{
                clip: rect(1px, 1px, 1px, 1px);
                position: absolute;
            }
        </style>

        <?php
    }


endif;