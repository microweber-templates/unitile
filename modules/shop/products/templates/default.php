<?php

/*

type: layout

name: Default

description: Default - 3 Columns

*/

//dd($data);
?>
<?php if (!empty($data)): ?>
<?php
$count = 0;
$len =  count($data);
?>

<div class="products-layout">
  <?php
    foreach ($data as $item):

    $count++;
?>
  <?php if($count == 1 or ($count-1) % 4 == 0) { ?>
  <div class="mw-row row">
    <?php } ?>
    <div class="col-md-3 col-sm-3">
      <center>
        <a href="<?php print $item['link'] ?>">
        <?php if($item['tn_image']):  ?>
        <div class="products-layout-img-bg-holder" style="background-image:url('<?php print $item['tn_image']; ?>')"></div>
        <img src="<?php print $item['tn_image']; ?>" class="img img-responsive" style="display:none;">
        <?php endif; ?>
        <h5><?php print $item['title'] ?></h5>
        <p><?php print character_limiter( $item['full_description'],280,'...'); ?></p>
        <div class="pbtns"> <span class="pbtn" href="<?php print $item['link'] ?>">Read more</span> </div>
        </a>
      </center>
    </div>
    <?php if($count % 4 == 0 or $count == $len){ ?>
  </div>
  <?php  } ?>
  <?php endforeach ; ?>
  <?php endif; ?>
  <?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
  <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}&limit=7") ?>
  <?php endif; ?>
</div>
