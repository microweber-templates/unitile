<?php

/*

type: layout

name: Blog

description: Blog

*/
?>

<div class="post-list mw-post-list-blog">
  <style scoped>
.mw-post-list-blog-content .lead{
margin-top: 0;
}
.mw-post-list-blog-image img{
max-width:100%
}
</style>
  <?php if (!empty($data)): ?>
  <?php foreach ($data as $item): ?>
  <div class="clearfix post-single posts-skin-blog-item" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
    <div class="row">
      <?php if(!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
      <div class="col-md-4 mw-post-list-blog-image"> <a  href="<?php print $item['link'] ?>" itemprop="url" class="mw-post-list-blog-image-pic pull-right" style="background-image:url('<?php print thumbnail($item['image'], 270); ?>')"></a> </div>
      <?php endif; ?>
      <div class="col-md-8 mw-post-list-blog-post-details">
        <div class="mw-post-list-blog-content">
          
            <?php if(!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
            <h2 class="heading-style-projects"><a href="<?php print $item['link'] ?>"><?php print $item['title'] ?></a></h2>
            <?php endif; ?>

          <?php if(!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
          <p class="description" itemprop="headline"><?php print $item['description'] ?></p>
          <?php endif; ?>
          <?php if(!isset($show_fields) or $show_fields == false or in_array('read_more', $show_fields)): ?>
          <a href="<?php print $item['link'] ?>" class="pull-right"> <img  src="<?php print template_url() ?>img/read_more_blog.png" /> </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
  <?php endif; ?>
</div>
<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
<?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
<?php endif; ?>
