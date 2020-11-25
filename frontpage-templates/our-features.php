<?php if (get_theme_mod('kau-our-features-section-checkbox-display') == "1") { ?>
    <section id="kau-our-feature" class="featured-services kau-our-feature" data-aos="flip-right">


        <div class="text-center"> 
            <h1 class="our-feature-section-title "> <b><?php echo get_theme_mod('kau-our-features-headline', __('OUR FEATURES')) ?></h1>
            <p class="our-feature-section-title-desc "><?php echo get_theme_mod('kau-our-features-desc', __('Having problems with your WordPress site not sending emails?<br>You are not alone!This problem faces by many people . Keeping your problems in mind ,<br>We have come up with this plugin Take a look at the features of our plugin ')) ?></p>
        </div>


        <div id="kaufeatureslide" class="carousel slide" data-ride="carousel">


            <!-- The slideshow -->
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="row d-flex justify-content-center">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body text-center">
                                    <?php
                                    $kauFIconOne = wp_get_attachment_url(get_theme_mod('kau-our-features-one-icon'));
                                    $iconOne = '';
                                    if ($kauFIconOne == '') {
                                        $iconOne = 'https://riyadly.com/wp-content/uploads/2020/11/neurall.png';
                                    } else {
                                        $iconOne = $kauFIconOne;
                                    }
                                    ?>
                                    <p><img class=" img-fluid  z-depth-2 kau-featured-img" src="<?php echo $iconOne ?>" alt="card image" ></p>
                                    <h5 class="card-title "><b><?php echo get_theme_mod('kau-our-features-one', __('EASY TO CONNECT')) ?></b></h5>
                                    <p class="card-text"><?php echo get_theme_mod('kau-our-features-one-desc', __('Easily authenticate with your email provider without signing in your account')) ?></p>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">

    <?php
    $kauFIconTwo = wp_get_attachment_url(get_theme_mod('kau-our-features-two-icon'));
    $iconTwo = '';
    if ($kauFIconTwo == '') {
        $iconTwo = 'https://riyadly.com/wp-content/uploads/2020/11/user.png';
    } else {
        $iconTwo = $kauFIconTwo;
    }
    ?>

                                <div class="card-body text-center">
                                    <p><img class=" img-fluid  z-depth-2 kau-featured-img" src="<?php echo $iconTwo ?>" alt="card image"></p>
                                    <h5 class="card-title "><b><?php echo get_theme_mod('kau-our-features-two', __('EMAIL LOGS')) ?></b></h5>
                                    <p class="card-text"><?php echo get_theme_mod('kau-our-features-two-desc', __('Now you can Keep track of every email sent from your WordPress website.')) ?></p>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">

    <?php
    $kauFIconthree = wp_get_attachment_url(get_theme_mod('kau-our-features-three-icon'));
    $iconthree = '';
    if ($kauFIconthree == '') {
        $iconthree = 'https://riyadly.com/wp-content/uploads/2020/11/google.png';
    } else {
        $iconthree = $kauFIconthree;
    }
    ?>

                                <div class="card-body text-center">
                                    <p><img class=" img-fluid  z-depth-2 kau-featured-img" src="<?php echo $iconthree ?>" alt="card image"></p>
                                    <h5 class="card-title "><b><?php echo get_theme_mod('kau-our-features-three', __('GOOGLE MAIL')) ?></b></h5>
                                    <p class="card-text"><?php echo get_theme_mod('kau-our-features-three-desc', __('Uses OAuth to authenticate your account, keeping your login info secure.')) ?></p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-flex justify-content-center">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
    <?php
    $kauFIconfour = wp_get_attachment_url(get_theme_mod('kau-our-features-four-icon'));
    $iconfour = '';
    if ($kauFIconfour == '') {
        $iconfour = 'https://riyadly.com/wp-content/uploads/2020/11/outlook.png';
    } else {
        $iconfour = $kauFIconfour;
    }
    ?>
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid  z-depth-2 kau-featured-img" src="<?php echo $iconfour ?>" alt="card image"></p>
                                    <h5 class="card-title "><b><?php echo get_theme_mod('kau-our-features-four', __('MS OUTLOOK')) ?></b></h5>
                                    <p class="card-text"><?php echo get_theme_mod('kau-our-features-four-desc', __('Our Microsoft mailer also supports other services, including Outlook.com.')) ?></p>

                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
    <?php
    $kauFIconfive = wp_get_attachment_url(get_theme_mod('kau-our-features-five-icon'));
    $iconfive = '';
    if ($kauFIconfive == '') {
        $iconfive = 'https://riyadly.com/wp-content/uploads/2020/11/zohomail.png';
    } else {
        $iconfive = $kauFIconfive;
    }
    ?>
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid  z-depth-2 kau-featured-img" src="<?php echo $iconfive ?>" alt="card image"></p>
                                    <h5 class="card-title "><b><?php echo get_theme_mod('kau-our-features-five', __('ZOHO MAIL')) ?></b></h5>
                                    <p class="card-text"><?php echo get_theme_mod('kau-our-features-five-desc', __('Use your Zoho Mail account to reliably send all WordPress emails.')) ?></p>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
    <?php
    $kauFIconsix = wp_get_attachment_url(get_theme_mod('kau-our-features-six-icon'));
    $iconsix = '';
    if ($kauFIconsix == '') {
        $iconsix = 'https://riyadly.com/wp-content/uploads/2020/11/mailgunicon.png';
    } else {
        $iconsix = $kauFIconsix;
    }
    ?>
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid  z-depth-2 kau-featured-img" src="<?php echo $iconsix ?>" alt="card image"></p>
                                    <h5 class="card-title "><b><?php echo get_theme_mod('kau-our-features-six', __('MAILGUN')) ?></b></h5>
                                    <p class="card-text"><?php echo get_theme_mod('kau-our-features-six-desc', __('Use your Mailgun account to reliably send all WordPress emails.')) ?></p>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-flex justify-content-center">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
    <?php
    $kauFIconseven = wp_get_attachment_url(get_theme_mod('kau-our-features-seven-icon'));
    $iconseven = '';
    if ($kauFIconseven == '') {
        $iconseven = 'https://riyadly.com/wp-content/uploads/2020/11/computer.png';
    } else {
        $iconseven = $kauFIconseven;
    }
    ?>
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid  z-depth-2 kau-featured-img" src="<?php echo $iconseven ?>" alt="card image"></p>
                                    <h5 class="card-title "><b><?php echo get_theme_mod('kau-our-features-seven', __('All IN ONE')) ?></b></h5>
                                    <p class="card-text"><?php echo get_theme_mod('kau-our-features-seven-desc', __('Leverage your web host or a third party SMTP server to send your emails.')) ?></p>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
    <?php
    $kauFIconeight = wp_get_attachment_url(get_theme_mod('kau-our-features-eight-icon'));
    $iconeight = '';
    if ($kauFIconeight == '') {
        $iconeight = 'https://riyadly.com/wp-content/uploads/2020/11/success.png';
    } else {
        $iconeight = $kauFIconeight;
    }
    ?>
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid  z-depth-2 kau-featured-img" src="<?php echo $iconeight ?>" alt="card image"></p>
                                    <h5 class="card-title "><b><?php echo get_theme_mod('kau-our-features-eight', __('Email Testing')) ?></b></h5>
                                    <p class="card-text"><?php echo get_theme_mod('kau-our-features-eight-desc', __('You can also check easyly by sending a testing email for free')) ?></p>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
    <?php
    $kauFIconnine = wp_get_attachment_url(get_theme_mod('kau-our-features-nine-icon'));
    $iconnine = '';
    if ($kauFIconnine == '') {
        $iconnine = 'https://riyadly.com/wp-content/uploads/2020/11/customer-support.png';
    } else {
        $iconnine = $kauFIconnine;
    }
    ?>
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid  z-depth-2 kau-featured-img" src="<?php echo $iconnine ?>" alt="card image"></p>
                                    <h5 class="card-title "><b><?php echo get_theme_mod('kau-our-features-nine', __('24/7 SUPPORT')) ?></b></h5>
                                    <p class="card-text"><?php echo get_theme_mod('kau-our-features-nine-desc', __('Contact us by email to resolve any issues related to our plugin')) ?></p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#kaufeatureslide" data-slide="prev">
                <i class='bx bxs-left-arrow-circle kau-next-slide-icon'style="font-size:40px; color: #8146E2" ></i>
            </a>
            <a class="carousel-control-next" href="#kaufeatureslide" data-slide="next">
                <i class='bx bxs-right-arrow-circle kau-next-slide-icon'style="font-size:40px; color: #A64CB6" ></i>
            </a>
        </div>


    </section>
<?php } ?>