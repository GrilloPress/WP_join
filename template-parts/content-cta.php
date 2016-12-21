<?php
/**
 * This template is used for displaying a call to action (CTA) at the bottom of all pages but the get involved page
 * 
 * 
 * @package sth
 */
;?>
<section class="page-cta">
  <div class="container">
    
    <?php if ( is_page() ) :?>
      <?php $RPB_published = CFS()->get( 'rpb_published' );
      if ( $RPB_published ) {;?>
        <div class="row">
          <div class="col-md-12">
            <h3>Find out more about working at Sheffield Teaching Hospitals</h3>
          </div>
      
        <?php $RPB_pages = array("one", "two", "three", "four");
          foreach ($RPB_pages as $rp) { ;?>
      
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="card-marketing card-footer">
          
              <a href="<?php echo get_permalink( get_page_by_title( CFS()->get('rpb_link_' . $rp) ) ) ;?>">
              <?php $rp_image_id = CFS()->get( 'rpb_image_' . $rp );
              echo wp_get_attachment_image( $rp_image_id, 'full', "", array( "class" => "img-marketing" ) );?>
              </a>

              <a href="<?php echo get_permalink( get_page_by_title( CFS()->get('rpb_link_' . $rp) ) ) ;?>">
                <h4><?php echo CFS()->get('rpb_heading_' . $rp); ?></h4>
              </a>
          
            </div>
          </div>
      
      <?php } reset($RPB_pages);?>
      <?php };?>
    </div>
    <?php endif ;?>
    
    <?php if ( ! is_page( 'Current vacancies' ) ) :?>
    <div class="row">
      <div class="col-md-12">
        <a href="<?php echo get_permalink( get_page_by_title( 'Current vacancies' ) ) ; ?>" class="" title="Find our latest vacancies">
          Find our latest vacancies here
        </a>
      </div>
    </div>
    <?php endif ;?>
    
    
    
  </div>
</section>