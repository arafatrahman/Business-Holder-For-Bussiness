<header id="kau-header" class="fixed-top">

    <div class="container d-flex align-items-center">

        <?php if (has_custom_logo()) {
            the_custom_logo();
            ?>
            <h1 class="logo mr-auto"></h1>
        <?php } else {
            ?>
            <h1 class="logo mr-auto"><a href="index.html"><?php bloginfo('name'); ?><span>.</span></a></h1>
<?php } ?>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="#"><?php echo get_theme_mod('kau-frontpage-menu-one', __('Home')) ?></a></li>
                <li><a href="#kau-our-feature"><?php echo get_theme_mod('kau-frontpage-menu-two', __('Features')) ?></a></li>
                <li><a href="#whyus"><?php echo get_theme_mod('kau-frontpage-menu-three', __('Why US')) ?></a></li>
                <li><a href="#documentation"><?php echo get_theme_mod('kau-frontpage-menu-four', __('Documentation')) ?> </a></li>
                <li><a href="#kau-contact"><?php echo get_theme_mod('kau-frontpage-menu-five', __('Contact US')) ?></a></li>
                <li><a href="<?php echo get_theme_mod('kau-frontpage-menu-blog-url', __(get_permalink(get_option('page_for_posts')))) ?>"><?php echo get_theme_mod('kau-frontpage-menu-six', __('Blog')) ?></a></li>
            </ul>
        </nav>

    </div>

</header>
