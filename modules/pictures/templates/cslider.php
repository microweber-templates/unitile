<?php

/*

type: layout

name: c slider

description: Bootstrap Carousel

*/

  ?>
<?php if(is_array($data )): ?>


    <div class="cslider">
    
    
    <?php foreach($data  as $item): ?>
          <div><img src="<?php print ($item['filename']); ?>" class="img img-responsive"> </div>

     <?php endforeach ; ?>
    
      
    </div>
    
  
 
<?php endif; ?>
