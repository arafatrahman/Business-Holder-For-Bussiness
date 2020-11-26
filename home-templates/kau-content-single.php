
<h1 class="page-title"><?php the_title(); ?></h1>

<div class="single-post">
        
        
            <div class="info kau-post-card-summary">
              <ul class="list-inline">
                
                  <?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day = get_the_time('d'); ?>
                  <li><i class="fa fa-clock-o"></i> <a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) ); ?>"><?php echo get_the_date(); ?></a></li>
                            
                    <li>
                      <?php $categories = get_the_category();
                      if( ! empty( $categories ) ) :
                        foreach ( $categories as $value ) { ?>
                           <h6 class="category"><a href="<?php echo esc_url( get_category_link( $value->term_id ) ); ?>"><?php echo esc_html( $value->name ); ?></a></h6>
                        <?php }
                      endif; ?>
                    </li>
                 </ul>
            </div>
      

  <div class="post-content">
    
    <?php if ( has_post_thumbnail() ) : ?>
      <figure class="feature-image kau-single-post-feature-image">
        <?php the_post_thumbnail( 'full' ); ?>
      </figure>      
    <?php endif; ?>    
    
    <article>
      <?php the_content(); ?>
      
      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bootstrap-blog' ),
          'after'  => '</div>',
        ) );
      ?>     
    </article>

    </div>

    <?php $author_block = get_theme_mod( 'show_hide_author_block_details', 'author' ); ?>

    <?php if( is_array( $author_block ) && in_array( 'author', $author_block ) ) : ?>
      <div class="author-post clearfix">
        <?php $avatar = get_avatar( get_the_author_meta( 'ID' ), $size = 75 ); ?>
        <?php if( $avatar ) : ?>
          <div class="author-image"> 
            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo $avatar; ?></a>
          </div>
        <?php endif; ?>
        <div class="author-details">
        <h4><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></h4>
        <p><?php echo esc_html( get_the_author_meta('description') ); ?></p>
        </div>
      </div>
    <?php endif; ?>
    
  </div>


  
