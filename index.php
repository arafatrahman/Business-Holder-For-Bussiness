<?php
get_header();
?>
<?php if ( have_posts() ) { ?>

        <div class="container kau-post-container">        
            <div class="row">
             
                <div class="col-md-9">
                    <div class="kau-post-grid-view">   
                                          
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php
                                get_template_part('home-templates/post-content');
                            ?>
                        <?php endwhile; ?>      
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
               
               <div class="kau-post-sidebar col-md-3"><?php get_sidebar(); ?></div>
            </div>
        </div>

<?php } ?>    

<?php get_footer(); ?>
