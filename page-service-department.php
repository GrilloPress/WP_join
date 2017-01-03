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

<?php get_template_part( 'template-parts/landing-page/custom', 'header' ); ?>

<?php get_template_part( 'template-parts/landing-page/custom', 'feature' ); ?>

<?php get_template_part( 'template-parts/landing-page/custom', 'featurette' ); ?>

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

<?php get_template_part( 'template-parts/landing-page/custom', 'snapshots' ); ?>

<?php get_template_part( 'template-parts/landing-page/custom', 'feed' ); ?>

<?php get_template_part( 'template-parts/global/content', 'marketing-columns' ); ?>

<?php get_footer(); ?>