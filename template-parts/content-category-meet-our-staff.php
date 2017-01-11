<?php
/**
 * The template used for displaying page content in the category-our-staff.php feed
 *
 * @package sth
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('category-article'); ?>>
  <div class="col-md-3">
  
      <?php if ( has_post_thumbnail() ) :?>
        <a href="<?php the_permalink() ;?>">
          <?php the_post_thumbnail('medium', array('class' => 'img-responsive img-full')); ?>
        </a>
      <?php else :?>
        <a href="<?php the_permalink() ;?>">
          <img class="img-responsive" src="<?php echo get_template_directory_uri() . "/images/news.jpg"; ?>" alt="News">
        </a>
      <?php endif ;?>

      <header class="entry-header">
          <?php the_title( sprintf( '<h2 class="category-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        </header><!-- .entry-header -->

      <div class="entry-summary">
          <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->

        <footer class="entry-footer">
        </footer><!-- .entry-footer -->

  </div>
</article><!-- #post-## -->
