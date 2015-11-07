<?php

/*

type: layout

name: careers

description: careers

*/
?>
<?php 
$tn = $tn_size;
if(!isset($tn[0]) or ($tn[0]) == 150){
     $tn[0] = 300;

}
if(!isset($tn[1])){
     $tn[1] = $tn[0];
}
 
?>

<div class="clearfix module-posts-template-careers container">
  <?php if (!empty($data)): ?>
  <?php
$count = 0;
$len =  count($data);
?>
  <?php
    foreach ($data as $item): 
$data_fields = content_data($item['id']);
 
    $count++;
?>
  <?php if($count == 1 or ($count-1) % 4 == 0) { ?>
  <div class="row module-posts-template-careers-row">
    <?php } ?>
    <div class="col-md-3 career-post-item"> <span class="career-post-item-bg-element"><span class="career-post-item-bg-element-inner"></span></span>
      <?php if($item['link']):  ?>
      <a href="<?php print $item['link'] ?>" class="career-post-item-link"><span><?php print $item['title'] ?></span></a>
      <ul class="career-post-item-reqs">
        <?php if(isset($data_fields['education'])):  ?>
        <li class="career-post-item-education"><i class="fa fa-graduation-cap"></i> <?php print $data_fields['education'] ?></li>
        <?php endif; ?>
        <?php if(isset($data_fields['years'])):  ?>
        <li class="career-post-item-years"><i class="fa fa-briefcase"></i> <?php print $data_fields['years'] ?></li>
        <?php endif; ?>
        <?php if(isset($data_fields['location'])):  ?>
        <li class="career-post-item-location"><i class="fa fa-map-marker"></i> <?php print $data_fields['location'] ?></li>
        <?php endif; ?>
      </ul>
      <?php endif; ?>
      <a href="<?php print $item['link'] ?>" class="career-post-item-details-link"><span>Details <span class="mw-icon-app-arrow-down"></span></span></a> </div>
    <?php if($count % 4 == 0 or $count == $len){ ?>
  </div>
  <?php  } ?>
  <?php endforeach ; ?>
  <?php endif; ?>
  <?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
  <div class="row text-center">
    <div class="col-lg-12"> <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}&limit=7") ?> </div>
  </div>
  <?php endif; ?>
</div>
