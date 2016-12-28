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
<?php get_template_part( 'template-parts/front-page/custom', 'jumbotron' ); ?>  
<?php get_template_part( 'template-parts/landing-page/custom', 'feature' ); ?>

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

<?php get_template_part( 'template-parts/global/custom', 'marketing-columns' ); ?>

<?php get_template_part( 'template-parts/front-page/custom', 'category-feed' ); ?> 

<?php get_footer(); ?>