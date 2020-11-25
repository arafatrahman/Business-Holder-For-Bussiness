<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="kau-post-card">        
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark" class="kau-post-featured-image">
                <?php the_post_thumbnail('full'); ?>
            </a>            
        <?php endif; ?>
        <div class="kau-post-card-summary">

            <?php
            $categories = get_the_category();
            if (!empty($categories)) :
                foreach ($categories as $value) {
                    ?>
                    <h6 class="category"><a href="<?php echo esc_url(get_category_link($value->term_id)); ?>"><?php echo esc_html($value->name); ?></a></h6>
                    <?php
                }
            endif;
            ?>

            <h4 class=""><a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark"><?php the_title(); ?></a></h4>

            <div class="kau-post-info">
                <ul class="list-inline">
                    <?php
                    $archive_year = get_the_time('Y');
                    $archive_month = get_the_time('m');
                    $archive_day = get_the_time('d');
                    ?>
                    <li><i class="fa fa-clock-o"></i> <a href="<?php echo esc_url(get_day_link($archive_year, $archive_month, $archive_day)); ?>"><?php echo get_the_date(); ?></a></li>



                </ul>
            </div>

            <?php the_excerpt(); ?>

            <a href="<?php echo esc_url(get_permalink()); ?>"<button class="btn kau-readmore-btn">Read More <i class="fa fa-arrow-circle-right ml-1"></i></button></a>

        </div>
    </div>
</div>
