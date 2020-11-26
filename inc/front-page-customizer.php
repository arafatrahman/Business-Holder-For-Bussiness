<?php

add_action( 'customize_register', 'kau_theme_front_page_customize_register' );
function kau_theme_front_page_customize_register($kauWpCustomize) {
    
    
    $kauWpCustomize->add_section('kau-frontpage-menu-section', array(
        'title' => 'Change Front Page Menu Name'
    ));
    
    $kauWpCustomize->add_setting('kau-frontpage-menu-one', array(
        'default' => 'Home'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-frontpage-menu-one-control', array(
        'label' => 'Menu One',
        'section' => 'kau-frontpage-menu-section',
        'settings' => 'kau-frontpage-menu-one'
    )));
    
    
    $kauWpCustomize->add_setting('kau-frontpage-menu-two', array(
        'default' => 'Features'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-frontpage-menu-two-control', array(
        'label' => 'Menu two',
        'section' => 'kau-frontpage-menu-section',
        'settings' => 'kau-frontpage-menu-two'
    )));
    
    
    $kauWpCustomize->add_setting('kau-frontpage-menu-three', array(
        'default' => 'Why US'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-frontpage-menu-three-control', array(
        'label' => 'Menu three',
        'section' => 'kau-frontpage-menu-section',
        'settings' => 'kau-frontpage-menu-three'
    )));
    
    $kauWpCustomize->add_setting('kau-frontpage-menu-four', array(
        'default' => 'Documentation'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-frontpage-menu-four-control', array(
        'label' => 'Menu four',
        'section' => 'kau-frontpage-menu-section',
        'settings' => 'kau-frontpage-menu-four'
    )));
    
    
    $kauWpCustomize->add_setting('kau-frontpage-menu-five', array(
        'default' => 'Contact US'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-frontpage-menu-five-control', array(
        'label' => 'Menu five',
        'section' => 'kau-frontpage-menu-section',
        'settings' => 'kau-frontpage-menu-five'
    )));
    
    $kauWpCustomize->add_setting('kau-frontpage-menu-six', array(
        'default' => 'Blog'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-frontpage-menu-six-control', array(
        'label' => 'Menu six',
        'section' => 'kau-frontpage-menu-section',
        'settings' => 'kau-frontpage-menu-six'
    )));
    
    
    $kauWpCustomize->add_setting('kau-frontpage-menu-blog-url', array(
        'default' => get_permalink( get_option( 'page_for_posts' ) )
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-frontpage-menu-blog-url-control', array(
        'label' => 'Blog Page URL',
        'section' => 'kau-frontpage-menu-section',
        'settings' => 'kau-frontpage-menu-blog-url'
    )));
    
    
    

    
    $kauWpCustomize->add_section('kau-header-banner-section', array(
        'title' => 'Header Banner Section'
    ));

    
    $kauWpCustomize->add_setting('kau-header-banner-image');

    $kauWpCustomize->add_control(new WP_Customize_Cropped_Image_Control($kauWpCustomize, 'kau-header-banner-image-control', array(
        'label' => 'Choose Your Banner Image',
        'section' => 'kau-header-banner-section',
        'settings' => 'kau-header-banner-image',
        'width' => 1200,
        'height' => 628
    )));
    
    

    $kauWpCustomize->add_setting('kau-header-banner-subheading', array(
        'default' => 'FOR WORDPRESS'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-header-banner-subheading-control', array(
        'label' => 'Sub Heading',
        'section' => 'kau-header-banner-section',
        'settings' => 'kau-header-banner-subheading'
    )));
    
    
    $kauWpCustomize->add_setting('kau-header-banner-heading', array(
        'default' => 'SENDING EMAIL IS <span>VERY EASY</span>'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-header-banner-heading-control', array(
        'label' => 'Heading',
        'section' => 'kau-header-banner-section',
        'settings' => 'kau-header-banner-heading'
    )));


    $kauWpCustomize->add_setting('kau-header-banner-desc', array(
        'default' => 'Our goal is to make email deliverability easy and reliable. We want to ensure your emails reach the inbox. Making Email Deliverability Easy for WordPress The Most Popular WordPress SMTP and PHP Mailer Plugin'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-why-section-desc-control', array(
        'label' => 'Header Banner description',
        'section' => 'kau-header-banner-section',
        'settings' => 'kau-header-banner-desc',
        'type' => 'textarea'
    )));
    
    
    
    $kauWpCustomize->add_setting('kau-header-banner-button-one', array(
        'default' => 'GET IT NOW FREE'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-header-banner-button-one-control', array(
        'label' => 'Button One Text',
        'section' => 'kau-header-banner-section',
        'settings' => 'kau-header-banner-button-one'
    )));
    
    $kauWpCustomize->add_setting('kau-header-banner-button-two', array(
        'default' => 'DOCUMENTATION'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-header-banner-button-two', array(
        'label' => 'Button Two Text',
        'section' => 'kau-header-banner-section',
        'settings' => 'kau-header-banner-button-two'
    )));
    
    
    
    
    
    $kauWpCustomize->add_section('kau-our-features-section', array(
        'capability'     => 'edit_theme_options',
        'title' => 'Our Features'
    ));

    $kauWpCustomize->add_setting('kau-our-features-section-checkbox-display', array(
        'default' => '0'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-section-checkbox-display-control', array(
        'label' => 'Would you like to Display Our Features section',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-section-checkbox-display',
        'type' => 'checkbox',
    )));
    
    
    

    $kauWpCustomize->add_setting('kau-our-features-headline', array(
        'default' => 'OUR FEATURES'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-headline-control', array(
        'label' => 'Our Features Headline',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-headline'
    )));


    $kauWpCustomize->add_setting('kau-our-features-desc', array(
        'default' => 'Having problems with your WordPress site not sending emails?<br>You are not alone!This problem faces by many people . Keeping your problems in mind ,<br>We have come up with this plugin Take a look at the features of our plugin '
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-desc-control', array(
        'label' => 'Our Features Description',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-desc',
        'type' => 'textarea'
    )));



    //our feature card one

    $kauWpCustomize->add_setting('kau-our-features-one', array(
        'default' => 'EASY TO CONNECT'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-one-control', array(
        'label' => 'Features One Title',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-one'
    )));
    
    
    
    $kauWpCustomize->add_setting('kau-our-features-one-desc', array(
        'default' => 'Easily authenticate with your email provider without signing in your account'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-one-desc-control', array(
        'label' => 'Features one Description',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-one-desc',
        'type' => 'textarea'
    )));


     $kauWpCustomize->add_setting('kau-our-features-one-icon', array(
    'default' => 'https://riyadly.com/wp-content/uploads/2020/11/https://riyadly.com/wp-content/uploads/2020/11/neurall.png.png',));

    $kauWpCustomize->add_control(new WP_Customize_Cropped_Image_Control($kauWpCustomize, 'kau-our-features-one-icon-control', array(
        'label' => 'Features One Icon',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-one-icon',
        'width' => 87,
        'height' => 87
    )));   
    
    //our feature card two
    $kauWpCustomize->add_setting('kau-our-features-two', array(
        'default' => 'EMAIL LOGS'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-two-control', array(
        'label' => 'Features Two Title',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-two'
    )));
    
    
    
    $kauWpCustomize->add_setting('kau-our-features-two-desc', array(
        'default' => 'Now you can Keep track of every email sent from your WordPress website.'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-two-desc-control', array(
        'label' => 'Features Two Description',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-two-desc',
        'type' => 'textarea'
    )));


     $kauWpCustomize->add_setting('kau-our-features-two-icon', array(
    'default' => 'https://riyadly.com/wp-content/uploads/2020/11/user.png',));

    $kauWpCustomize->add_control(new WP_Customize_Cropped_Image_Control($kauWpCustomize, 'kau-our-features-two-icon-control', array(
        'label' => 'Features Two Icon',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-two-icon',
        'width' => 87,
        'height' => 87
    )));
    
    
    //our feature card three
    $kauWpCustomize->add_setting('kau-our-features-three', array(
        'default' => 'GOOGLE MAIL'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-three-control', array(
        'label' => 'Features Three Title',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-three'
    )));
    
    
    
    $kauWpCustomize->add_setting('kau-our-features-three-desc', array(
        'default' => 'Uses OAuth to authenticate your account, keeping your login info secure.'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-three-desc-control', array(
        'label' => 'Features Three Description',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-three-desc',
        'type' => 'textarea'
    )));


     $kauWpCustomize->add_setting('kau-our-features-three-icon', array(
    'default' => 'https://riyadly.com/wp-content/uploads/2020/11/google.png',));

    $kauWpCustomize->add_control(new WP_Customize_Cropped_Image_Control($kauWpCustomize, 'kau-our-features-three-icon-control', array(
        'label' => 'Features Three Icon',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-three-icon',
        'width' => 87,
        'height' => 87
    )));
    
    
    //our feature card four
    $kauWpCustomize->add_setting('kau-our-features-four', array(
        'default' => 'MS OUTLOOK'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-four-control', array(
        'label' => 'Features Four Title',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-four'
    )));
    
    
    
    $kauWpCustomize->add_setting('kau-our-features-four-desc', array(
        'default' => 'Our Microsoft mailer also supports other services, including Outlook.com.'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-four-desc-control', array(
        'label' => 'Features Four Description',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-four-desc',
        'type' => 'textarea'
    )));


     $kauWpCustomize->add_setting('kau-our-features-four-icon', array(
    'default' => 'https://riyadly.com/wp-content/uploads/2020/11/outlook.png',));

    $kauWpCustomize->add_control(new WP_Customize_Cropped_Image_Control($kauWpCustomize, 'kau-our-features-four-icon-control', array(
        'label' => 'Features Four Icon',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-four-icon',
        'width' => 87,
        'height' => 87
    )));
    
    
    //our feature card five
    $kauWpCustomize->add_setting('kau-our-features-five', array(
        'default' => 'ZOHO MAIL'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-five-control', array(
        'label' => 'Features Five Title',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-five'
    )));
    
    
    
    $kauWpCustomize->add_setting('kau-our-features-five-desc', array(
        'default' => 'Use your Zoho Mail account to reliably send all WordPress emails.'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-five-desc-control', array(
        'label' => 'Features Five Description',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-five-desc',
        'type' => 'textarea'
    )));


     $kauWpCustomize->add_setting('kau-our-features-five-icon', array(
    'default' => 'https://riyadly.com/wp-content/uploads/2020/11/zohomail.png',));

    $kauWpCustomize->add_control(new WP_Customize_Cropped_Image_Control($kauWpCustomize, 'kau-our-features-five-icon-control', array(
        'label' => 'Features Five Icon',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-five-icon',
        'width' => 87,
        'height' => 87
    )));
    
    
    
    
    //our feature card six
    $kauWpCustomize->add_setting('kau-our-features-six', array(
        'default' => 'MAILGUN'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-six-control', array(
        'label' => 'Features Six Title',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-six'
    )));
    
    
    
    $kauWpCustomize->add_setting('kau-our-features-six-desc', array(
        'default' => 'Use your Mailgun account to reliably send all WordPress emails.'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-six-desc-control', array(
        'label' => 'Features Six Description',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-six-desc',
        'type' => 'textarea'
    )));


     $kauWpCustomize->add_setting('kau-our-features-six-icon', array(
    'default' => 'https://riyadly.com/wp-content/uploads/2020/11/mailgunicon.png',));

    $kauWpCustomize->add_control(new WP_Customize_Cropped_Image_Control($kauWpCustomize, 'kau-our-features-six-icon-control', array(
        'label' => 'Features Six Icon',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-six-icon',
        'width' => 87,
        'height' => 87
    )));
    
    //our feature card seven
    $kauWpCustomize->add_setting('kau-our-features-seven', array(
        'default' => 'All IN ONE'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-seven-control', array(
        'label' => 'Features Seven Title',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-seven'
    )));
    
    
    
    $kauWpCustomize->add_setting('kau-our-features-seven-desc', array(
        'default' => 'Leverage your web host or a third party SMTP server to send your emails.'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-seven-desc-control', array(
        'label' => 'Features Seven Description',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-seven-desc',
        'type' => 'textarea'
    )));


     $kauWpCustomize->add_setting('kau-our-features-seven-icon', array(
    'default' => 'https://riyadly.com/wp-content/uploads/2020/11/computer.png',));

    $kauWpCustomize->add_control(new WP_Customize_Cropped_Image_Control($kauWpCustomize, 'kau-our-features-seven-icon-control', array(
        'label' => 'Features Seven Icon',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-seven-icon',
        'width' => 87,
        'height' => 87
    )));
    
    
    //our feature card eight
    $kauWpCustomize->add_setting('kau-our-features-eight', array(
        'default' => 'Email Testing'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-eight-control', array(
        'label' => 'Features Eight Title',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-eight'
    )));
    
    
    
    $kauWpCustomize->add_setting('kau-our-features-eight-desc', array(
        'default' => 'You can also check easyly by sending a testing email for free'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-eight-desc-control', array(
        'label' => 'Features Eight Description',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-eight-desc',
        'type' => 'textarea'
    )));


     $kauWpCustomize->add_setting('kau-our-features-eight-icon', array(
    'default' => 'https://riyadly.com/wp-content/uploads/2020/11/success.png',));

    $kauWpCustomize->add_control(new WP_Customize_Cropped_Image_Control($kauWpCustomize, 'kau-our-features-eight-icon-control', array(
        'label' => 'Features Eight Icon',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-eight-icon',
        'width' => 87,
        'height' => 87
    )));
    
    
    
    //our feature card nine
    $kauWpCustomize->add_setting('kau-our-features-nine', array(
        'default' => '24/7 SUPPORT'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-nine-control', array(
        'label' => 'Features Nine Title',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-nine'
    )));
    
    
    
    $kauWpCustomize->add_setting('kau-our-features-nine-desc', array(
        'default' => 'Contact us by email to resolve any issues related to our plugin'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-our-features-nine-desc-control', array(
        'label' => 'Features Nine Description',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-nine-desc',
        'type' => 'textarea'
    )));


     $kauWpCustomize->add_setting('kau-our-features-nine-icon', array(
    'default' => 'https://riyadly.com/wp-content/uploads/2020/11/customer-support.png',));

    $kauWpCustomize->add_control(new WP_Customize_Cropped_Image_Control($kauWpCustomize, 'kau-our-features-nine-icon-control', array(
        'label' => 'Features Nine Icon',
        'section' => 'kau-our-features-section',
        'settings' => 'kau-our-features-nine-icon',
        'width' => 87,
        'height' => 87
    )));
    
    
    
   
}





add_action('customize_register', 'kau_plugin_setup_section');
function kau_why_us_section($kauWpCustomize) {
    $kauWpCustomize->add_section('kau-why-us-section', array(
        'title' => 'Why To Choose US'
    ));

    $kauWpCustomize->add_setting('kau-why-us-section-display', array(
        'default' => '0'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'plugin-setup-callout-display-control', array(
        'label' => 'Would you like to Display why to choose us section?',
        'section' => 'kau-why-us-section',
        'settings' => 'kau-why-us-section-display',
        'type' => 'checkbox',
    )));

    $kauWpCustomize->add_setting('kau-why-us-heading', array(
        'default' => 'Why would you like this plugin of ours'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-why-us-heading-control', array(
        'label' => 'Heading',
        'section' => 'kau-why-us-section',
        'settings' => 'kau-why-us-heading'
    )));


    $kauWpCustomize->add_setting('kau-why-section-desc', array(
        'default' => 'FREE WP SMTP allows you to easily set up WordPress to use a trusted provider to send emails.'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-why-section-desc', array(
        'label' => 'Why us section description',
        'section' => 'kau-why-us-section',
        'settings' => 'kau-why-section-desc',
        'type' => 'textarea'
    )));




    $kauWpCustomize->add_setting('kau-why-section-card-one-title', array(
        'default' => 'NO CODING SKILL'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-why-section-card-one-title-control', array(
        'label' => 'Card One Title',
        'section' => 'kau-why-us-section',
        'settings' => 'kau-why-section-card-one-title'
    )));
    
    
    
    $kauWpCustomize->add_setting('kau-why-section-card-one-desc', array(
        'default' => 'You do not need any coding skills to use this plugin.You can easily use this plugin without any coding skill'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-why-section-card-one-desc-control', array(
        'label' => 'Card One Description',
        'section' => 'kau-why-us-section',
        'settings' => 'kau-why-section-card-one-desc',
        'type' => 'textarea'
    )));
    
    $kauWpCustomize->add_setting('kau-why-section-card-one-icon', array(
        'default' => '<i class="bx bx-code-block"></i>'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-why-section-card-one-icon-control', array(
        'label' => 'Card One Font Icon',
        'section' => 'kau-why-us-section',
        'settings' => 'kau-why-section-card-one-icon'
    )));
    
    
    
    
    
    
    $kauWpCustomize->add_setting('kau-why-section-card-two-title', array(
        'default' => 'Best SMTP PROVIDER'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-why-section-card-two-title-control', array(
        'label' => 'Card Two Title',
        'section' => 'kau-why-us-section',
        'settings' => 'kau-why-section-card-two-title'
    )));
    
    
    
    $kauWpCustomize->add_setting('kau-why-section-card-two-desc', array(
        'default' => 'Our pluins integrates with all integrates with all of the best secure SMTP providers No matter how many emails send'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-why-section-card-two-desc-control', array(
        'label' => 'Card Two Description',
        'section' => 'kau-why-us-section',
        'settings' => 'kau-why-section-card-two-desc',
        'type' => 'textarea'
    )));
    
    $kauWpCustomize->add_setting('kau-why-section-card-two-icon', array(
        'default' => '<i class="bx bxs-message-alt-check"></i>'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-why-section-card-two-icon-control', array(
        'label' => 'Card Two Font Icon',
        'section' => 'kau-why-us-section',
        'settings' => 'kau-why-section-card-two-icon'
    )));
    
    
    
    
    $kauWpCustomize->add_setting('kau-why-section-card-three-title', array(
        'default' => 'FREE OF COST'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-why-section-card-three-title-control', array(
        'label' => 'Card Three Title',
        'section' => 'kau-why-us-section',
        'settings' => 'kau-why-section-card-three-title'
    )));
    
    
    
    $kauWpCustomize->add_setting('kau-why-section-card-three-desc', array(
        'default' => 'We have this plugin for completely free.if you want to use this kind of plugin, you have to count the money elsewhere'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-why-section-card-three-desc-control', array(
        'label' => 'Card Three Description',
        'section' => 'kau-why-us-section',
        'settings' => 'kau-why-section-card-three-desc',
        'type' => 'textarea'
    )));
    
    $kauWpCustomize->add_setting('kau-why-section-card-three-icon', array(
        'default' => "<i class='bx bxs-badge-dollar'></i>"
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-why-section-card-three-icon-control', array(
        'label' => 'Card Three Font Icon',
        'section' => 'kau-why-us-section',
        'settings' => 'kau-why-section-card-three-icon'
    )));
    
    
   
    
}

add_action('customize_register', 'kau_why_us_section');
function kau_plugin_setup_section($kauWpCustomize) {
    $kauWpCustomize->add_section('plugin-setup-callout-section', array(
        'title' => 'How to Setup'
    ));

    $kauWpCustomize->add_setting('plugin-setup-checkbox-display', array(
        'default' => '0'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'plugin-setup-checkbox-display-control', array(
        'label' => 'Would you like to Display how to setup section',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-checkbox-display',
        'type' => 'checkbox',
    )));

    $kauWpCustomize->add_setting('plugin-setup-callout-headline', array(
        'default' => 'HOW TO SETUP'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'plugin-setup-callout-headline-control', array(
        'label' => 'Headline',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-callout-headline'
    )));


    $kauWpCustomize->add_setting('plugin-setup-callout-text', array(
        'default' => 'You can easily connect with the email provider of your choice and send the email later in the way we have shown. Click on your email provider to setup instructions.'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'plugin-setup-callout-text-control', array(
        'label' => 'Text',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-callout-text',
        'type' => 'textarea'
    )));




    $kauWpCustomize->add_setting('plugin-setup-callout-gmail', array(
        'default' => 'GOOGLE MAIL'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'plugin-setup-callout-gmail-control', array(
        'label' => 'GOOGLE MAIL',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-callout-gmail'
    )));
    
    
    
    $kauWpCustomize->add_setting('plugin-setup-callout-gmail-desc', array(
        'default' => 'Click here for simple rules for Gmail authentication'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'plugin-setup-callout-gmail-desc-control', array(
        'label' => 'GOOGLE Description',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-callout-gmail-desc',
        'type' => 'textarea'
    )));


     $kauWpCustomize->add_setting('plugin-setup-callout-gmail-icon');

    $kauWpCustomize->add_control(new WP_Customize_Cropped_Image_Control($kauWpCustomize, 'plugin-setup-callout-gmail-icon-control', array(
        'label' => 'Google Tab Icon',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-callout-gmail-icon',
        'width' => 50,
        'height' => 50
    )));
    
    
    
    
    
    
    
    
     $kauWpCustomize->add_setting('plugin-setup-callout-outlook', array(
        'default' => 'MS OUTLOOK'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'plugin-setup-callout-outlook-control', array(
        'label' => 'MS OUTLOOK',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-callout-outlook'
    )));
    
    
    
    $kauWpCustomize->add_setting('plugin-setup-callout-outlook-desc', array(
        'default' => 'Click here for simple rules for Outlook authentication'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'plugin-setup-callout-outlook-desc-control', array(
        'label' => 'Outlook Description',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-callout-outlook-desc',
        'type' => 'textarea'
    )));


    $kauWpCustomize->add_setting('plugin-setup-callout-outlook-icon');

    $kauWpCustomize->add_control(new WP_Customize_Cropped_Image_Control($kauWpCustomize, 'plugin-setup-callout-outlook-icon-control', array(
        'label' => 'outlook Tab Icon',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-callout-outlook-icon',
        'width' => 50,
        'height' => 50
    )));
    
    
    
    
    
    
    
    
    
    $kauWpCustomize->add_setting('plugin-setup-callout-mailgun', array(
        'default' => 'MAILGUN'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'plugin-setup-callout-mailgun-control', array(
        'label' => 'MAILGUN',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-callout-mailgun'
    )));
    
    
    
    $kauWpCustomize->add_setting('plugin-setup-callout-mailgun-desc', array(
        'default' => 'Click here for how to set mailgun tutorial'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'plugin-setup-callout-mailgun-desc-control', array(
        'label' => 'Mailgun Description',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-callout-mailgun-desc',
        'type' => 'textarea'
    )));


     $kauWpCustomize->add_setting('plugin-setup-callout-mailgun-icon');

    $kauWpCustomize->add_control(new WP_Customize_Cropped_Image_Control($kauWpCustomize, 'plugin-setup-callout-mailgun-icon-control', array(
        'label' => 'Mailgun Tab Icon',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-callout-mailgun-icon',
        'width' => 50,
        'height' => 50
    )));
    
    
    
    
    
    
    
    $kauWpCustomize->add_setting('plugin-setup-callout-zohomail', array(
        'default' => 'ZOHO MAIL'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'plugin-setup-callout-zohomail-control', array(
        'label' => 'ZOHO MAIL',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-callout-zohomail'
    )));
    
    
    
    $kauWpCustomize->add_setting('plugin-setup-callout-zohomail-desc', array(
        'default' => 'Click here for how to set zohomail tutorial'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'plugin-setup-callout-zohomail-desc-control', array(
        'label' => 'Zohomail Description',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-callout-zohomail-desc',
        'type' => 'textarea'
    )));


     $kauWpCustomize->add_setting('plugin-setup-callout-zohomail-icon');

    $kauWpCustomize->add_control(new WP_Customize_Cropped_Image_Control($kauWpCustomize, 'plugin-setup-callout-zohomail-icon-control', array(
        'label' => 'Zohomail Tab Icon',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-callout-zohomail-icon',
        'width' => 50,
        'height' => 50
    )));
    
    
    
    
    
    
    
    $kauWpCustomize->add_setting('plugin-setup-callout-default', array(
        'default' => 'DEFAULT MAIL'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'plugin-setup-callout-default-control', array(
        'label' => 'DEFAULT MAIL',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-callout-default'
    )));
    
    
    
    $kauWpCustomize->add_setting('plugin-setup-callout-default-desc', array(
        'default' => 'Click for see others smtp default mailer setup'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'plugin-setup-callout-default-desc-control', array(
        'label' => 'Default Description',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-callout-default-desc',
        'type' => 'textarea'
    )));


     $kauWpCustomize->add_setting('plugin-setup-callout-default-icon');

    $kauWpCustomize->add_control(new WP_Customize_Cropped_Image_Control($kauWpCustomize, 'plugin-setup-callout-default-icon-control', array(
        'label' => 'Default Tab Icon',
        'section' => 'plugin-setup-callout-section',
        'settings' => 'plugin-setup-callout-default-icon',
        'width' => 50,
        'height' => 50
    )));



   
}

add_action('customize_register', 'kau_footer_banner_section');
function kau_footer_banner_section($kauWpCustomize) {
    $kauWpCustomize->add_section('kau-footer-banner-section', array(
        'title' => 'Footer Banner Section'
    ));

    
    $kauWpCustomize->add_setting('kau-footer-banner-image');

    $kauWpCustomize->add_control(new WP_Customize_Cropped_Image_Control($kauWpCustomize, 'kau-footer-banner-image-control', array(
        'label' => 'Choose Your Footer Banner Image',
        'section' => 'kau-footer-banner-section',
        'settings' => 'kau-footer-banner-image',
        'width' => 1200,
        'height' => 400
    )));
    
    
    
    $kauWpCustomize->add_setting('kau-header-banner-image', array(
    'default' => 'https://riyadly.com/wp-content/uploads/2020/11/kauheader.jpg',));

    $kauWpCustomize->add_control(new WP_Customize_Cropped_Image_Control($kauWpCustomize, 'kau-footer-banner-image-control', array(
        'label' => 'Choose Your Banner Image',
        'section' => 'kau-footer-banner-section',
        'settings' => 'kau-footer-banner-image',
        'width' => 1220,
        'flex_width'=>true,
        'height' => 628
    )));
    
    
    $kauWpCustomize->add_setting('kau-footer-banner-heading', array(
        'default' => 'Solve Your Email Deliverability Problems'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-footer-banner-heading-control', array(
        'label' => 'Footer Banner Heading',
        'section' => 'kau-footer-banner-section',
        'settings' => 'kau-footer-banner-heading'
    )));


    $kauWpCustomize->add_setting('kau-footer-banner-desc', array(
        'default' => 'Lets solve the problem of sending emails from your Wordpress site now without delay'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-footer-banner-desc-control', array(
        'label' => 'Footer Banner description',
        'section' => 'kau-footer-banner-section',
        'settings' => 'kau-footer-banner-desc',
        'type' => 'textarea'
    )));
    
    
    
    $kauWpCustomize->add_setting('kau-footer-banner-button', array(
        'default' => 'GET IT NOW FREE'
    ));

    $kauWpCustomize->add_control(new WP_Customize_Control($kauWpCustomize, 'kau-footer-banner-button-control', array(
        'label' => 'Button Text',
        'section' => 'kau-footer-banner-section',
        'settings' => 'kau-footer-banner-button'
    )));
    
}
