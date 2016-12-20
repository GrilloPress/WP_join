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

<?php get_footer(); ?>