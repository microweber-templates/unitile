<?php

/*

type: layout

name: x slider

description: Bootstrap Carousel

*/

  ?>
<?php if(is_array($data )): ?>

<div class="xslider">
  <?php foreach($data  as $item): ?>
  <div><img src="<?php print ($item['filename']); ?>" class="img img-responsive"> </div>
  <?php endforeach ; ?>
</div>
<?php endif; ?>
