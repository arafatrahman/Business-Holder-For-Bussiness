<?php if (get_theme_mod('plugin-setup-checkbox-display') == "1") { ?>

    <section id="documentation" class="about kau-setup-section-bg">
        <div class="container" >

            <div class="kau-section-title text-center" data-aos="fade-down">
                <h3 class=""><?php echo get_theme_mod('plugin-setup-callout-headline', __('HOW TO SETUP')) ?></h3>
                <p><?php echo wpautop(get_theme_mod('plugin-setup-callout-text', __('You can easily connect with the email provider of your choice and send the email later in the way we have shown. Click on your email provider to setup instructions.'))) ?></p>
            </div>

            <div class="row justify-content-center">


                <div class="col-xl-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <?php
                                $kauGmailIcon = wp_get_attachment_url(get_theme_mod('plugin-setup-callout-gmail-icon'));
                                $Gmailicon = '';
                                if ($kauGmailIcon == '') {
                                    $Gmailicon = 'https://riyadly.com/wp-content/uploads/2020/11/google.png';
                                } else {
                                    $Gmailicon = $kauGmailIcon;
                                }
                                ?>
                                <div class="col-auto" style="margin-left: 20px">
                                    <img src="<?php echo $Gmailicon ?>" class="img-fluid" alt="" width="50" height="50"/>
                                </div>
                                <div class="col mr-2" style="margin-left: 20px">
                                    <div class="text-xs font-weight-bold text-info text-uppercase"><?php echo get_theme_mod('plugin-setup-callout-gmail', __('GOOGLE MAIL')) ?></div>

                                    <div class="">
                                        <div class=""><?php echo get_theme_mod('plugin-setup-callout-gmail-desc', __('Click here for simple rules for Gmail authentication')) ?></div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">

                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <?php
                                $kauOutlookIcon = wp_get_attachment_url(get_theme_mod('plugin-setup-callout-outlook-icon'));
                                $Outlookicon = '';
                                if ($kauOutlookIcon == '') {
                                    $Outlookicon = 'https://riyadly.com/wp-content/uploads/2020/11/outlook.png';
                                } else {
                                    $Outlookicon = $kauOutlookIcon;
                                }
                                ?>
                                <div class="col-auto" style="margin-left: 20px">
                                    <img src="<?php echo $Outlookicon ?>" class="img-fluid" alt="" width="50" height="50"/>
                                </div>
                                <div class="col mr-2" style="margin-left: 20px">
                                    <div class="text-xs font-weight-bold text-info text-uppercase"><?php echo get_theme_mod('plugin-setup-callout-outlook', __('MS OUTLOOK')) ?></div>

                                    <div class="">
                                        <div class=""><?php echo get_theme_mod('plugin-setup-callout-outlook-desc', __('Click here for simple rules for Outlook authentication')) ?></div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
    <?php
    $kauMailgunIcon = wp_get_attachment_url(get_theme_mod('plugin-setup-callout-mailgun-icon'));
    $Mailgunicon = '';
    if ($kauMailgunIcon == '') {
        $Mailgunicon = 'https://riyadly.com/wp-content/uploads/2020/11/mailgunicon.png';
    } else {
        $Mailgunicon = $kauMailgunIcon;
    }
    ?>
                                <div class="col-auto" style="margin-left: 20px">
                                    <img src="<?php echo $Mailgunicon ?>" class="img-fluid" alt="" width="50" height="50"/>
                                </div>
                                <div class="col mr-2" style="margin-left: 20px">
                                    <div class="text-xs font-weight-bold text-info text-uppercase"><?php echo get_theme_mod('plugin-setup-callout-mailgun', __('MAILGUN')) ?></div>

                                    <div class="">
                                        <div class=""><?php echo get_theme_mod('plugin-setup-callout-mailgun-desc', __('Click here for how to set mailgun tutorial')) ?></div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row justify-content-center">


                <div class="col-xl-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="350">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
    <?php
    $kauZohomailIcon = wp_get_attachment_url(get_theme_mod('plugin-setup-callout-zohomail-icon'));
    $Zohomailicon = '';
    if ($kauZohomailIcon == '') {
        $Zohomailicon = 'https://riyadly.com/wp-content/uploads/2020/11/zohomail.png';
    } else {
        $Zohomailicon = $kauZohomailIcon;
    }
    ?>
                                <div class="col-auto" style="margin-left: 20px">
                                    <img src="<?php echo $Zohomailicon ?>" class="img-fluid" alt="" width="50" height="50"/>
                                </div>
                                <div class="col mr-2" style="margin-left: 20px">
                                    <div class="text-xs font-weight-bold text-info text-uppercase"><?php echo get_theme_mod('plugin-setup-callout-zohomail', __('ZOHO MAIL')) ?></div>

                                    <div class="">
                                        <div class=""><?php echo get_theme_mod('plugin-setup-callout-zohomail-desc', __('Click here for how to set zohomail tutorial')) ?></div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
    <?php
    $kauDefaultIcon = wp_get_attachment_url(get_theme_mod('plugin-setup-callout-default-icon'));
    $Defaulticon = '';
    if ($kauDefaultIcon == '') {
        $Defaulticon = 'https://riyadly.com/wp-content/uploads/2020/11/success.png';
    } else {
        $Defaulticon = $kauDefaultIcon;
    }
    ?>
                                <div class="col-auto" style="margin-left: 20px">
                                    <img src="<?php echo $Defaulticon ?>" class="img-fluid" alt="" width="50" height="50"/>
                                </div>
                                <div class="col mr-2" style="margin-left: 20px">
                                    <div class="text-xs font-weight-bold text-info text-uppercase"><?php echo get_theme_mod('plugin-setup-callout-default', __('DEFAULT MAIL')) ?></div>

                                    <div class="">
                                        <div class=""><?php echo get_theme_mod('plugin-setup-callout-default-desc', __('Click for see others smtp default mailer setup')) ?></div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
<?php } ?>
