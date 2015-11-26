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
  <?php 
$title = false;
$email = false;
$data_fields = content_data($item['id']);
if(isset($data_fields['team_member_title'])){
$title = $data_fields['team_member_title'];
}
if(isset($data_fields['team_member_email'])){
$email = $data_fields['team_member_email'];
}
 ?>
  <div class="col-sm-4" > <a class="team-member-post-link-image" href="<?php print $item['link'] ?>" style="background-image: url(<?php print get_picture($item['id']);?>);">
    <div class="sidebar-box-styled-add-item-title-holder-ornament-right"></div>
    <span class="team-member-post-link-title"> <span class="team-member-post-link-title-content"> <span class="team-member-post-link-title-name"> <?php print $item['title'] ?> </span>
    <?php if ($title): ?>
    <span class="team-member-post-link-sub-title-position"> <?php print $title ?> </span>
    <?php endif; ?>
    <?php if ($email): ?>
    <span class="team-member-post-link-sub-title-email"> <?php print $email ?> </span>
    <?php endif; ?>
    </span> </span> </a> </div>
  <?php endforeach; ?>
  <?php endif; ?>
</div>
<div class="clearfix"></div>
<div class="row team-row-2">
  <?php if (!empty($data2)): ?>
  <?php
        $count = 0;
		$len =  count($data2);

        foreach ($data2 as $item):
        $count++;
    ?>
  <?php 
$title = false;
$email = false;
$data_fields = content_data($item['id']);
if(isset($data_fields['team_member_title'])){
$title = $data_fields['team_member_title'];
}
if(isset($data_fields['team_member_email'])){
$email = $data_fields['team_member_email'];
}
 ?>
 
 
 <?php if($count == 1 or ($count-1) % 4 == 0) { ?>
<div class="row" style="margin-top:20px; padding:15px;">
  <?php  } ?>
  
  <div class="col-sm-3" > <a class="team-member-post-link-image-2 <?php if($count % 4 == 0) { ?> fourth <?php } ?>" href="<?php print $item['link'] ?>" style="background-image: url(<?php print get_picture($item['id']);?>);">
    <div class="sidebar-box-styled-add-item-title-holder-ornament-right"></div>
    <span class="team-member-post-link-title"> <span class="team-member-post-link-title-content"> <span class="team-member-post-link-title-name"> <?php print $item['title'] ?> </span> </span> </span> </a> </div>
    
      <?php if($count % 4 == 0 or $count == $len){ ?>
</div>
<?php  } ?>
    
  <?php endforeach; ?>
  <?php endif; ?>
</div>
<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
<?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
<?php endif; ?>
