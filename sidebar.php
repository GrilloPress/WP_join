<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package sth
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
  
  <?php $PS_published = CFS()->get( 'ps_published' );
  if ( $PS_published ):?>
  
  <div class="panel panel-primary panel-page-sidebar">
    <div class="panel-heading">
      <h3 class="panel-title"><?php echo CFS()->get( 'ps_title' );?></h3>
    </div>
    <div class="panel-body">
      <?php echo CFS()->get( 'ps_body' );?>
    </div>
  </div>
  <?php endif;?>
  
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
  
</div><!-- #secondary -->