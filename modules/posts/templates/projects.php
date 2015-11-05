<?php

/*

type: layout

name: Projects small grid

description: Clients

*/

  ?>
<?php if (!empty($data)): ?>
<?php
$count = 0;
$len =  count($data);
 
?>
<?php
    foreach ($data as $item): 

    $count++;
?>
<?php if($count == 1 or ($count-1) % 3 == 0) { ?>

<div class="row padding-left-no padding-bottom-30">
  <?php } ?>
  <div class="col-md-4 project-small-item">
    <?php if($item['link']):  ?>
    <a href="<?php print $item['link'] ?>" class="project-small-list-item-img" style="background-image:url('<?php print $item['tn_image']; ?>')"><span><?php print $item['title'] ?></span></a>
    <?php endif; ?>
  </div>
  <?php if($count % 3 == 0 or $count == $len){ ?>
</div>
<?php  } ?>
<?php endforeach ; ?>
<?php endif; ?>
<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
<div class="row text-center">
  <div class="col-lg-12"> <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}&limit=7") ?> </div>
</div>
<?php endif; ?>
