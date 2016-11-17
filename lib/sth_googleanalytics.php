<?php
add_action('wp_footer', 'add_googleanalytics');

function add_googleanalytics() {
  
$sth_googletag = <<<END
<script>


</script>
END;

  echo $sth_googletag;

};