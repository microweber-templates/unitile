<?php

/*

type: layout

name: Clients

description: Clients

*/

  ?>
<?php if(is_array($data )): ?>
<?php
$count = 0;
$len =  count($data);
?>
<?php $count = 0; foreach($data  as $item): ?>
<?php $count++; ?>
<?php if($count == 1 or ($count-1) % 4 == 0) { ?>
<div class="row">
  <?php  } ?>
  <div class="col-md-3 col-sm-3">
    <div class="<?php if($count==0){ print 'active ';} ?>item"> <img class="thumbnail" style="border:none" src="<?php print thumbnail($item['filename'], 140); ?>"  />
      <?php if(isset($item['title']) and $item['title'] !=''){ ?>
      <div>
        <p><?php print $item['title']; ?></p>
      </div>
      <?php } ?>
    </div>
  </div>
  <?php if($count % 4 == 0 or $count == $len){ ?>
</div>
<?php  } ?>
<?php endforeach ; ?>
<?php else : ?>
<?php endif; ?>
