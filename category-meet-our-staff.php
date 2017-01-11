<?php
/*
 *  Template to individually style the meet the staff cateogry
 */
get_header(); ?>

<section class="breadcrumb-container">
  <div class="container">
    <div class="col-md-12">
      <?php sth_breadcrumbs(); ?>
    </div>
  </div>
</section>

<main id="primary" class="container" role="main">
  <?php if ( have_posts() ) : ?>
  <?php $cat_counter = 0 ;?>
  
  <div class="col-md-12">
    <header class="category-page-header">
      <h1 class="category-page-title"><?php single_cat_title();?></h1>
          <?php
            the_archive_description( '<div class="lead taxonomy-description">', '</div>' );
          ?>
		</header><!-- .page-header -->
  </div>
    <?php while ( have_posts() ) : the_post(); ?>
  <?php if ( $cat_counter % 4 == 0  ){
  
  echo "<div class='col-md-12'></div>";
  
}?>
				<?php
					//
					get_template_part( 'template-parts/content', 'category-meet-our-staff' );
				?>
<?php $cat_counter++ ;?>
    <?php endwhile; ?>

  
  <?php else :?>
  
    <?php get_template_part( 'template-parts/content', 'none' ); ?>
  
  <?php endif; ?>
</main>

<?php get_footer(); ?>