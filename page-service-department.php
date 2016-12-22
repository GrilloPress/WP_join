<?php
/**
 * The template for displaying marketing, full-width pages for services and departments
 *
 * @package sth
 * 
 * 
 * Template Name: Service marketing page
 * 
 */
get_header(); ?>

<section class="jumbotron jumbotron-marketing">
  <div class="container">
    <div class="col-md-6">
     
       <h1><?php echo CFS()->get( 'mj_title' );?></h1>
       <p>
        <?php echo CFS()->get( 'mj_subtitle' );?>
       </p>

    </div>
    <div class="col-md-6">
      <div class="jumbotron-sidebar hidden-xs">
        <?php echo CFS()->get( 'mj_iframe' );?>
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

<?php // Section that publishes a loop of featurettes starting with a conditional if a conditional is set to published in the WP admin
$featurette_published = CFS()->get( 'featurette_published' );
if ( $featurette_published ) {
  $featurettes = CFS()->get( 'featurette_sections' );
  foreach ( $featurettes as $featurette ) { ?>

    <main class="page-featurette-section" role="main">
      <div class="container">

        <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <h2><?php echo $featurette['featurette_header'];?></h2>
            <hr>
          </div>
        </div>

        <?php // Featurette inner loop start
        $featurette_inners = $featurette['featurette_inner'];
        foreach ( $featurette_inners as $featurette_inner ) { ?>

        <div class="col-md-12">
          <div class="page-featurette-section-inner">
            <div class="row">
              <div class="col-md-12">
                <h3><?php echo $featurette_inner['featurette_card_header'];?></h3>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <?php $featurette_image_id = $featurette_inner[ 'featurette_card_image' ];
                echo wp_get_attachment_image( $featurette_image_id, 'large', "", array( "class" => "img-marketing" ) );?>
              </div>
              <div class="col-md-8">
                <?php echo $featurette_inner['featurette_card_body'];?>
              </div>
            </div> 
          </div>
        </div>     
        <?php };?>

      </div>
    </main>
  <?php };
};?>

<div id="primary" class="container">
     
    <div class="row">
      <main id="main" class="col-md-7 col-sm-8" role="main">

			<?php while ( have_posts() ) : the_post(); ?> 
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
              <?php // the_title( '<h1 class="marketing-title">', '</h1>' ); ?>
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
        
        <div class="page-service-marketing-columns">
          <div class="row">
            <div class="col-md-6">
              <div class="page-service-marketing-left">
                <?php echo CFS()->get('marketing_section_left');?>
              </div>
            </div>

            <div class="col-md-6">
              <div class="page-service-marketing-right">
                <?php echo CFS()->get('marketing_section_right'); ?>
              </div>
            </div>
          </div>
        </div>

			<?php endwhile; // End of the loop. ?>

		  </main><!-- #main -->
      
      <aside class="col-md-4 col-md-offset-1 col-sm-4">
        <?php get_sidebar(); ?>
      </aside>
      
	  </div><!-- #primary -->
  </div>

<?php // Section that publishes a loop of featurettes starting with a conditional if a conditional is set to published in the WP admin
$custom_feed = CFS()->get( 'cp_feed_published' );
if ( $custom_feed ){ ;?>
  <section class="page-category-post-list">
    <div class="container">  
      <div class="row">

          <?php 
          // News post item category

          // WP_Query arguments
          $col_args = array (

            'category_name' => 'meet-our-staff',
            'posts_per_page' => 8,
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


        </div>


    </div>
  </section>
<?php };?>

<?php get_template_part( 'template-parts/content', 'marketing-columns' ); ?>

<?php get_footer(); ?>