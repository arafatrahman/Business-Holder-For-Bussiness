
<?php
$kauHeaderImg = wp_get_attachment_url(get_theme_mod('kau-header-banner-image'));
$backgroundImg = '';
if ($kauHeaderImg == '') {
    $backgroundImg = 'https://riyadly.com/wp-content/uploads/2020/11/kauheader.jpg';
} else {
    $backgroundImg = $kauHeaderImg;
}
?>
<section id="kau-theme-banner" class="d-flex justify-content-center text-center" style="background-image: url('<?php echo $backgroundImg ?>');">
    <div class="container" data-aos="zoom-out" data-aos-delay="10" style="margin-top:50px;">
        <p class="text-white" style="letter-spacing: 8px;"><?php echo get_theme_mod('kau-header-banner-subheading', __('FOR WORDPRESS')) ?></p>
        <h1 class="text-white "><?php echo get_theme_mod('kau-header-banner-heading', __('SENDING EMAIL IS <span>VERY EASY</span>')) ?></h1>
        <h2 class="text-white " ><?php echo get_theme_mod('kau-header-banner-desc', __('Our goal is to make email deliverability easy and reliable. We want to ensure your emails reach the inbox. Making Email Deliverability Easy for WordPress The Most Popular WordPress SMTP and PHP Mailer Plugin')) ?></h2>
        <div class="justify-content-center">
            <button class="kau-button head-button"><b><?php echo get_theme_mod('kau-header-banner-button-one', __('GET IT NOW FREE')) ?></b></button>
            <button class="kau-button head-button2"><b><?php echo get_theme_mod('kau-header-banner-button-two', __('DOCUMENTATION')) ?></b></button>

        </div>
    </div>
</section>

