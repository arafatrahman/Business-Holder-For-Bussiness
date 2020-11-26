<?php get_header(); ?>

<div class="inside-page">
    <div class="container">
        <div class="row"> 

            <div class="col-md-9">
                <section class="page-section kau-single-post-view">
                    <div class="detail-content">

<?php
while (have_posts()) {
    the_post();
    get_template_part('home-templates/kau-content-single');
}
?>


                    </div>
                </section> 
            </div>
            <div class="kau-post-sidebar col-md-3"><?php get_sidebar(); ?></div>
        </div>
    </div>

    <?php
    get_footer();
    