<?php

/*

type: layout

name: 3 Columns

description: 3 Columns

*/
?>
<?php


$tn = $tn_size;
if(!isset($tn[0]) or ($tn[0]) == 150){
     $tn[0] = 400;
}
if(!isset($tn[1])){
     $tn[1] = $tn[0];
}

$data1 = array_slice($data, 0, 3);
 
$data2 = array_slice($data, 3,count($data));
 
 

?>

<div class="row">
  <?php if (!empty($data1)): ?>
  <?php
        $count = 0;
        foreach ($data1 as $item):
        $count++;
    ?>
  <div class="col-sm-4" > <a class="team-member-post-link-image" href="<?php print $item['link'] ?>" style="background-image: url(<?php print get_picture($item['id']);?>);"> <span class="team-member-post-link-title"><?php print $item['title'] ?></span> </a> </div>
  <?php endforeach; ?>
  <?php endif; ?>
</div>
<div class="clearfix"></div>
<div class="row">
  <?php if (!empty($data2)): ?>
  <?php
        $count = 0;
        foreach ($data2 as $item):
        $count++;
    ?>
  <div class="col-sm-3" > <a class="team-member-post-link-image-2 <?php if($count % 4 == 0) { ?> fourth <?php } ?>" href="<?php print $item['link'] ?>" style="background-image: url(<?php print get_picture($item['id']);?>);"> </a> </div>
  <?php endforeach; ?>
  <?php endif; ?>
</div>
<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
<?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
<?php endif; ?>
