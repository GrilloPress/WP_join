<?php

/*
 * To change this template use Tools | Templates.
 */
?>
<section class="page-category-post-list">
  <div class="container">  
    
    <div class="row">
      
      <div class="col-md-12">
        <h2>Meet our amazing staff</h2>
      </div>
      
      
        <?php 
        // News post item category
        
        // WP_Query arguments
        $col_args = array (
          
          'category_name' => 'meet-our-staff',
          'posts_per_page' => 6,
          'tag' => 'Featured',
        );
   
        // the query
        $cat_query = new WP_Query( $col_args ); ?>

        <?php if ( $cat_query->have_posts() ) : ?>

          <!-- the loop -->
          <?php while ( $cat_query->have_posts() ) : $cat_query->the_post(); ?>
          
        <article id="post-<?php the_ID(); ?>" class="col-md-4 col-sm-6 col-xs-12">
          <div class="page-category-card">
            <?php if ( has_post_thumbnail() ) :?>
                <a href="<?php the_permalink() ;?>">
                  <?php the_post_thumbnail('full', array('class' => 'img-responsive img-full')); ?>
                </a>
              <?php else :?>
                <a href="<?php the_permalink() ;?>">
                  <img class="img-responsive" src="<?php echo get_template_directory_uri() . "/images/news.jpg"; ?>" alt="News">
                </a>
              <?php endif ;?>
            <div class="page-category-card-inner">
              <?php the_title( sprintf( '<h4 class="category-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
            </div>
              
          </div>
      </article>
        
          <?php endwhile; ?>
          <!-- end of the loop -->

          <?php wp_reset_postdata(); ?>
        
        
        <?php else : ?>
          <p><?php _e( 'Please write a post...' ); ?></p>
        <?php endif; ?>
        
      <!-- see all block -->
      <div class="col-md-12">
          <div class="page-category-footer">
            <?php $cat_link = get_cat_ID('meet our staff');?>
            <a href="<?php echo esc_url( get_category_link( $cat_link ) ); ?>" title="meet our staff" rel="bookmark">See all</a>
          </div>
      </div>
    </div>
    
  </div>
</section>