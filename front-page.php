<?php
/**
 * The template for displaying the front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sth
 * 
 */
get_header(); ?>
<section class="jumbotron" 
         <?php if (!empty(CFS()->get( 'jumbotron_img' ))) :?>
             style="background-image: url('<?php echo CFS()->get( 'jumbotron_img' );?>')"
             <?php endif ;?>
             >
  <div class="container">
    <div class="col-md-6">
     
       <h1><?php echo CFS()->get( 'jumbotron_title' );?></h1>
       <p>
        <?php echo CFS()->get( 'jumbotron_subtitle' );?>
       </p>
       <p>
        <?php $jbo_link = CFS()->get( 'jumbotron_btn' );?>
        <a class="btn btn-warning btn-lg" href="<?php echo get_permalink( get_page_by_title( 'Current vacancies' ) ) ; ?>" title="Current vacancies" target="" role="button">Current vacancies</a>
        <a href="<?php echo get_permalink( get_page_by_title( 'About us' ) ) ; ?>" title="<?php echo get_bloginfo('description'); ?>" class="btn btn-primary btn-lg">Learn more</a>
      </p>

    </div>
    <div class="col-md-6">
      <div class="jumbotron-sidebar hidden-xs">
        <iframe width="100%" height="300" src="https://www.youtube.com/embed/kQT98jP37g8?rel=0&amp;controls=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>
  
<?php
$featured_pages_published = CFS()->get( 'feature_published' );
if ( $featured_pages_published ) {;?>
<section class="page-feature-container under-jumbotron">
  <div class="container">
    <div class="row">
        
        <?php
        
      $featured_pages = array("one", "two", "three", "four");
      foreach ($featured_pages as $fp) { ;?>
      
      
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="page-feature-block">
          
          <a href="<?php echo get_permalink( get_page_by_title( CFS()->get('feature_link_' . $fp) ) ) ;?>">
            <?php $image_id = CFS()->get( 'feature_image_' . $fp );
            echo wp_get_attachment_image( $image_id, 'full', "", array( "class" => "img-marketing" ) );?>
          </a>

          <h4><?php echo CFS()->get('feature_title_' . $fp); ?></h4>

          <?php echo CFS()->get('feature_body_' . $fp); ?>
          
        </div>
      </div>
      
      <?php } reset($featured_pages);?>
      
      
    </div>
  </div>
</section>
<?php };?>

<section id="primary" class="page-service-marketing-container">
  <div class="container">
    <div class="row">
      <section id="main" class="col-md-12">

        <?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
              
            </header><!-- .entry-header -->

            <div class="entry-content">
              <?php the_content(); ?>
              <?php
                wp_link_pages( array(
                  'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sth' ),
                  'after'  => '</div>',
                ) );
              ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer">
              <?php edit_post_link( esc_html__( 'Edit', 'sth' ), '<span class="edit-link">', '</span>' ); ?>
            </footer><!-- .entry-footer -->
          </article><!-- #post-## -->

        <?php endwhile; // End of the loop. ?>

        <div class="page-service-marketing-columns">
          <div class="row">
            <div class="col-md-6">
              <div class="page-service-marketing-left">
                <?php echo CFS()->get('marketing_section_left'); ?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="page-service-marketing-right">
                <?php echo CFS()->get('marketing_section_right'); ?>
              </div>
            </div>
          </div>
        </div>
        
        </section><!-- #main -->

    </div><!-- #primary -->
    

  </div>
</section>

<?php get_template_part( 'template-parts/content', 'marketing-columns' ); ?>

<section class="page-category-post-list">
  <div class="container">  
    
    
    <div class="row">
      
        <?php 
        // News post item category
        
        // WP_Query arguments
        $col_args = array (
          
          'category_name' => 'meet-our-staff',
          'posts_per_page' => 8,
          // 'tag' => GET USER INPUT ADMINS ONLY
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

            <div class="category-label">
              Staff profile
            </div>
              <?php the_title( sprintf( '<h3 class="category-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
              <?php the_excerpt(); ?>
          </div>
      </div>
        
          <?php endwhile; ?>
          <!-- end of the loop -->

          <?php wp_reset_postdata(); ?>
        
        
        <?php else : ?>
          <p><?php _e( 'Please write a post...' ); ?></p>
        <?php endif; ?>
        
      <!-- see all block -->
      <div class="col-md-12">
          <div class="page-category-card">
            <h3 class="category-title"><a href="#" rel="bookmark">See all</a></h3>
          </div>
      </div>
      
      
      </div>
    

  </div>
</section>

<?php get_footer(); ?>