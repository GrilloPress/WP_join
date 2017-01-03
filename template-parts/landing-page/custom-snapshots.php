<?php
/*
 * To change this template use Tools | Templates.
 */
$snapshot_published = CFS()->get( 'snapshot_published' );
if ( $snapshot_published ) {;?>
<section class="page-snapshot-container">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="page-snapshot-title"><?php echo CFS()->get( 'snapshot_title' );?></h2>
      </div>
    </div>
    
    <?php // Snapshot loop start
    $snapshots = CFS()->get( 'snapshot_row' );
    foreach ( $snapshots as $snapshot ) { ?>
    
    <div class="row">
      
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="row">
          <div class="col-md-4">
           <?php $snapshot_image_id_left = $snapshot[ 'snapshot_image_left' ];
                 if (!empty( $snapshot[ 'snapshot_link_left' ] ) ) { ?>
          
              <a href="<?php echo esc_url( $snapshot[ 'snapshot_link_left' ] ) ;?>" title="<?php echo $snapshot[ 'snapshot_title_left' ];?>">
               <?php echo wp_get_attachment_image( $snapshot_image_id_left, 'medium', "", array( "class" => "img-marketing" ) );?>
              </a>
          
            <?php } else {
              
              echo wp_get_attachment_image( $snapshot_image_id_left, 'medium', "", array( "class" => "img-marketing" ) );
              
            };?>
            
          </div>
          
          <div class="col-md-8">
           <h3><?php echo $snapshot[ 'snapshot_title_left' ];?></h3>
            <?php echo $snapshot[ 'snapshot_body_left' ];?>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="row">
          <div class="col-md-4">
           <?php $snapshot_image_id_right = $snapshot[ 'snapshot_image_right' ];
                 if (!empty( $snapshot[ 'snapshot_link_right' ] ) ) {;?>
          
              <a href="<?php echo esc_url( $snapshot[ 'snapshot_link_right' ] ) ;?>" title="<?php echo $snapshot[ 'snapshot_title_right' ];?>">
               <?php echo wp_get_attachment_image( $snapshot_image_id_right, 'medium', "", array( "class" => "img-marketing" ) );?>
              </a>
          
            <?php } else {
              
              echo wp_get_attachment_image( $snapshot_image_id_right, 'medium', "", array( "class" => "img-marketing" ) );
              
            };?>
            
          </div>
          
          <div class="col-md-8">
           <h3><?php echo $snapshot[ 'snapshot_title_right' ];?></h3>
            <?php echo $snapshot[ 'snapshot_body_right' ];?>
          </div>
        </div>
      </div>
      
    </div>
    
     <?php };?> 
  </div>
  
</section>
<?php };?>