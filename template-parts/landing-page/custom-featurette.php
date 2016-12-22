<?php

/*
 * To change this template use Tools | Templates.
 */
// Section that publishes a loop of featurettes starting with a conditional if a conditional is set to published in the WP admin
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