<?php

/*

type: layout

name: Unitile Breadcrump

description: Default


*/
 


  
   ?>
<?php if(isset($data) and is_array($data)): ?>
<div class="mw-breadcrumb">
<a href="<?php print site_url(); ?>" class="pull-right">Home</a>
  <?php foreach($data as $item): ?>
  <?php if(!($item['is_active'])): ?>
  <a href="<?php print($item['url']); ?>" class="pull-right"><?php print($item['title']); ?><i class="fa fa-fw fa-angle-right"></i></a>
  <?php else: ?>
  <span class="mw-breadcrumb-current pull-right"> <?php print($item['title']); ?><i class="fa fa-fw fa-angle-right"></i></span>
  <?php endif; ?>
  <?php endforeach; ?>
</div>
<?php endif; ?>
