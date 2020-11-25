<?php if (get_theme_mod('kau-why-us-section-display') == "1") { ?>

    <section id="whyus" class="featured-services why-us-section" >


        <div class="text-center" data-aos="fade-up"> 
            <h1 class="why-us-section-title "> <b><?php echo get_theme_mod('kau-why-us-heading', __('Why would you like this plugin of ours')) ?></h1>
            <p class="why-us-section-title-desc"><?php echo get_theme_mod('kau-why-section-desc', __('FREE WP SMTP allows you to easily set up WordPress to use a trusted provider to send emails.')) ?>
            </p>
        </div>

        <div class="container" >

            <div data-aos="zoom-out-down" class="row justify-content-center text-center" style="margin-top: 40px;">
                <div  class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box"  data-aos="zoom-in-left" data-aos-delay="100">
                        <div class="icon"><?php echo get_theme_mod('kau-why-section-card-one-icon', __('<i class="bx bx-code-block"></i>')) ?></div>
                        <h4 class="title "><?php echo get_theme_mod('kau-why-section-card-one-title', __('NO CODING SKILL')) ?></h4>
                        <p class="description font-italic"><b><?php echo get_theme_mod('kau-why-section-card-one-desc', __('You do not need any coding skills to use this plugin.You can easily use this plugin without any coding skill')) ?></b></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="100">
                        <div class="icon"><?php echo get_theme_mod('kau-why-section-card-two-icon', __('<i class="bx bxs-message-alt-check"></i>')) ?></div>
                        <h4 class="title "><?php echo get_theme_mod('kau-why-section-card-two-title', __('Best SMTP PROVIDER')) ?></h4>
                        <p class="description font-italic"><b><?php echo get_theme_mod('kau-why-section-card-two-desc', __('Our pluins integrates with all integrates with all of the best secure SMTP providers No matter how many emails send')) ?></b></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box"  data-aos="zoom-in-right" data-aos-delay="100">
                        <div class="icon"><?php echo get_theme_mod('kau-why-section-card-three-icon', __("<i class='bx bxs-badge-dollar'></i>")) ?></div>
                        <h4 class="title "><?php echo get_theme_mod('kau-why-section-card-three-title', __('FREE OF COST')) ?></h4>
                        <p class="description font-italic"><b><?php echo get_theme_mod('kau-why-section-card-three-desc', __('We have this plugin for completely free.if you want to use this kind of plugin, you have to count the money elsewhere')) ?></b></p>
                    </div>
                </div>

            </div>

        </div>
    </section>
<?php } ?>

