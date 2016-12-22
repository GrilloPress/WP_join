<?php

/*
 * To change this template use Tools | Templates.
 */
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