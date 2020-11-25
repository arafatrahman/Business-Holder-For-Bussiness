
<?php
$footerBackgroundImg = wp_get_attachment_url(get_theme_mod('kau-footer-banner-image'));
$footerImg = '';
if ($footerBackgroundImg == '') {
    $footerImg = 'https://riyadly.com/wp-content/uploads/2020/11/kauheader.jpg';
} else {
    $footerImg = $footerBackgroundImg;
}
?>

<div id="footer" class="kau-footer-container" style="background: url('<?php echo $footerImg ?>')repeat;">
     <div class="row justify-content-center ">

        <div class="col-1 ">


        </div>
        <div class="col-7" >
            <div class="text-white" >
                <h4 class="" style="margin-top:20px;"><b><?php echo get_theme_mod('kau-footer-banner-heading', __('Solve Your Email Deliverability Problems')) ?></b></h4>
                <p style=""><b><?php echo get_theme_mod('kau-footer-banner-desc', __('Lets solve the problem of sending emails from your Wordpress site now without delay')) ?></b></p>
            </div>
        </div>
        <div class="col-1 ">
        </div>

        <div class="col-3 " style="margin-top: 20px;">

            <div class="">
                <button class="kau-button head-button "><b>GET IT NOW FREE</b></button>

            </div>
        </div>

    </div> 
</div>

<?php wp_footer(); ?>

</body>
</html>
