<?php
/*
 *  Adds a custom feed to template page
 */
$custom_feed = CFS()->get( 'cp_feed_published' );
if ( $custom_feed ){ ;?>
  <section class="page-category-post-list">
    <div class="container">  
      
      <div class="row">
        <h2>Meet our team</h2>
      </div>
      
      <div class="row">

          <?php 
          // News post item category

          // WP_Query arguments
          $col_args = array (

            'category_name' => 'meet-our-staff',
            'posts_per_page' => 4,
            'tag' => CFS()->get( 'cp_tag_name' ),
          );

          // the query
          $cat_query = new WP_Query( $col_args ); ?>

          <?php if ( $cat_query->have_posts() ) : ?>

            <!-- the loop -->
            <?php while ( $cat_query->have_posts() ) : $cat_query->the_post(); ?>

          <div class="col-md-3">
            <div class="page-category-card">
              <?php if ( has_post_thumbnail() ) :?>
                  <a href="<?php the_permalink() ;?>">
                    <?php the_post_thumbnail('medium', array('class' => 'img-responsive img-full')); ?>
                  </a>
                <?php else :?>
                  <a href="<?php the_permalink() ;?>">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri() . "/images/news.jpg"; ?>" alt="News">
                  </a>
                <?php endif ;?>

                <?php the_title( sprintf( '<h4 class="category-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
                <?php if (!empty(CFS()->get( 'staff_job_title' ))) :?>
                   <a href="<?php the_permalink() ;?>"><?php echo CFS()->get( 'staff_job_title' );?></a>
                <?php endif ;?>
            </div>
        </div>

            <?php endwhile; ?>
            <!-- end of the loop -->

            <?php wp_reset_postdata(); ?>


          <?php else : ?>
            <p><?php _e( 'Please write a post...' ); ?></p>
          <?php endif; ?>


        </div>


    </div>
  </section>
<?php };?>