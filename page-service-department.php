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

<?php get_footer(); ?>