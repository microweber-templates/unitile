<?php

/*

type: layout

name: c slider 4

description: Bootstrap Carousel

*/

  ?>
<?php if(is_array($data )): ?>
<?php $chunks = array_chunk($data, 4, true); ?>

    <div class="cslider">
    <?php foreach($chunks  as $data): ?>
    <div class="text-center">
    <center>
    <?php foreach($data  as $item): ?>
          <img src="<?php print ($item['filename']); ?>" class="img img-responsive pull-left" style="margin-left:10px; margin-right:10px; display:inline-block;"> 

     <?php endforeach ; ?>
      </center>
     </div>
    <?php endforeach ; ?>
      
    </div>
    
  
 
<?php endif; ?>
