<?php

/*
 * To change this template use Tools | Templates.
 */
?>
<section class="jumbotron jumbotron-marketing" 
         <?php if (!empty(CFS()->get( 'mj_background_img' ))) :?>
         style="background-image: url('<?php echo CFS()->get( 'mj_background_img' );?>')"
         <?php endif ;?>
         >
  <div class="container">
    <div class="col-md-6">
     
       <h1><?php echo CFS()->get( 'mj_title' );?></h1>
        <?php echo CFS()->get( 'mj_subtitle' );?>

    </div>
    <div class="col-md-6">
      <div class="jumbotron-sidebar hidden-xs">
        <?php echo CFS()->get( 'mj_iframe' );?>
      </div>
    </div>
  </div>
</section>