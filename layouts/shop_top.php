<div class="container">
  <module type="breadcrumb" template="unitile-breadcrumb" />
  
  <!-- TABS -->
  
  <?php


$cat_params = array();
$cat_params['rel'] = 'content';
$cat_params['parent_id'] = 0;
$cat_params['rel_id'] = intval(MAIN_PAGE_ID);


 
$categories = get_categories($cat_params);

 
?>
  <script>

      $(document).ready(function(){
         mw.tabs({
            nav:'#shop-category-tab-nav a',
            tabs:'.shop-top-posts-list-category-row'
         });
      });


      </script>
  <?php if(!empty($categories)){ ?>
  <div id="shop-category-tab-nav">
    <?php foreach($categories as $category){ ?>
    <a href="javascript:;" id="category-tab-<?php print  url_title($category['title']) ?>"><?php print ($category['title']) ?></a>
    <?php } ?>
  </div>
  <?php } ?>
  <?php if(!empty($categories)){ ?>
  <?php $count=0;?>
  <?php foreach($categories as $category){ ?>
  <?php 
	$skip_posts = array();
	$posts = get_content('limit=10&category='.$category['id']);
 	$sub_categories = get_categories('parent_id='.$category['id']);
 	$is_tab_active = false;
	if($count == 0){ 
	$is_tab_active = true;
	}
 	?>
  <div class="shop-top-posts-list-category-row" <?php if(!$is_tab_active){ ?>  style="display:none"   <?php } ?> >
    <?php if(!empty($sub_categories)){ ?>
    <?php foreach($sub_categories as $sub_category){ ?>
    <?php $sub_posts = get_content('limit=100&category='.$sub_category['id']); ?>
    <ul class="shop-top-nav-cat-sub-menu">
      <li> <a href="javascript:;"><?php print  $sub_category['title'] ?></a> </li>
      <?php if(!empty($sub_posts)){ ?>
      <?php foreach($sub_posts as $post){ ?>
      <li> <a class="shop-top-posts-list-category-row-sub-post-item" href="<?php print content_link( $post['id'] ) ?>"><?php print  $post['title'] ?></a></li>
      <?php $skip_posts[] = $post['id']; ?>
      <?php } ?>
      <?php } ?>
    </ul>
    <?php } ?>
    <?php } ?>
    <?php if(!empty($posts)){ ?>
    <ul class="shop-top-nav-cat-main-items-menu">
      <?php foreach($posts as $post){ ?>
      <?php if(!in_array($post['id'],$skip_posts)){ ?>
      <li> <a href="<?php print content_link( $post['id'] ) ?>"><?php print  $post['title'] ?></a></li>
      <?php } ?>
      <?php } ?>
    </ul>
    <?php } ?>
  </div>
  <?php $count++;?>
  <?php } ?>
  <?php } ?>
</div>
