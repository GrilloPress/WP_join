<?php

/*
 * To change this template use Tools | Templates.
 */
?>
<section class="jumbotron"
         <?php if (!empty(CFS()->get( 'jumbotron_img' ))) :?>
         style="background-image: url('<?php echo CFS()->get( 'jumbotron_img' );?>')"
         <?php endif ;?>
         >
  <div class="container">
    <div class="col-md-6">
     
       <h1><?php echo CFS()->get( 'jumbotron_title' );?></h1>
       <p>
        <?php echo CFS()->get( 'jumbotron_subtitle' );?>
       </p>
       <p>
        <a class="btn btn-warning btn-lg" href="<?php echo get_permalink( get_page_by_title( 'Current vacancies' ) ) ; ?>" title="Current vacancies" target="" role="button">Current vacancies</a>
        <a href="<?php echo get_permalink( get_page_by_title( 'About us' ) ) ; ?>" title="<?php echo get_bloginfo('description'); ?>" class="btn btn-primary btn-lg">Learn more</a>
      </p>

    </div>
    <div class="col-md-6">
      <div class="jumbotron-sidebar hidden-xs">
        <iframe width="100%" height="300" src="https://www.youtube.com/embed/kQT98jP37g8?rel=0&amp;controls=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>