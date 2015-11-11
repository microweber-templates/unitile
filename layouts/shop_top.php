
<div class="container">
<div class="margin-spacer-element-20"></div>
  <module type="breadcrumb" template="unitile-breadcrumb" />
  <div class="margin-spacer-element-20"></div>
  <!-- TABS -->
  <div class="shop-category-tab-nav-holder">
    <?php


$cat_params = array();
$cat_params['rel'] = 'content';
$cat_params['parent_id'] = 0;
$cat_params['rel_id'] = intval(MAIN_PAGE_ID);


 $par_cat_id = false;
$categories = get_categories($cat_params);
 $cur_cat=get_category_by_id(category_id());
 if(isset($cur_cat['parent_id'])){
 $par_cat_id = $cur_cat['parent_id'];	 
 }
 
?>
    <script>

      $(document).ready(function(){
         mw.tabs({
            nav:'#shop-category-tab-nav a',
            tabs:'.shop-top-posts-list-category-row',
			onclick:function(a){
			 $('.tab-link-active','#shop-category-tab-nav').removeClass('tab-link-active');
		 	  $(this).parent().addClass('tab-link-active');
			}
         });
      });


      </script>
    <?php if(!empty($categories)){ ?>
    <div id="shop-category-tab-nav" class="shop-category-tab-nav">
      <div class="mw-ui-row">
        <?php foreach($categories as $category){ ?>
        <div class="mw-ui-col category-tab-switch-link-holder <?php if(category_id()==$category['id'] or $par_cat_id == $category['id']) { ?> tab-link-active<?php } ?>"> <a href="javascript:;" id="category-tab-<?php print  url_title($category['title']) ?>" class="category-tab-switch-link"><?php print ($category['title']) ?></a> </div>
        <?php } ?>
         
      </div>
      <?php } ?>
    </div>
  </div>
  <div class="shop-top-posts-list-category-row-holder">
    <div class="shop-top-posts-list-category-row-holder-items">
      <?php if(!empty($categories)){ ?>
      <?php $count=0;?>
      <?php foreach($categories as $category){ ?>
      <?php 
	$skip_posts = array();
	$posts = get_content('limit=10&category='.$category['id']);
 	$sub_categories = get_categories('parent_id='.$category['id']);
 	$is_tab_active = false;
	$cur_cat = category_id();
	if($cur_cat != false){
			if(category_id()==$category['id'] or $par_cat_id == $category['id']){
				$is_tab_active = true;
			}
	} else {
		if($count == 0){ 
		$is_tab_active = true;
		}
	}
	
	
 	?>
      <div class="shop-top-posts-list-category-row" <?php if(!$is_tab_active){ ?>  style="display:none"   <?php } ?> >
        <div class="mw-ui-row">
          <?php if(!empty($sub_categories)){ ?>
          <?php foreach($sub_categories as $sub_category){ ?>
          <?php $sub_posts = get_content('limit=100&category='.$sub_category['id']); ?>
          <div class="mw-ui-col <?php if(category_id()==$sub_category['id']) { ?> link-active<?php } ?>">
          <div href="javascript:;" class="shop-top-nav-cat-sub-menu-open-link"><?php print  $sub_category['title'] ?>
          
          
          <ul class="shop-top-nav-cat-sub-menu">
              <?php if(!empty($sub_posts)){ ?>
              <?php foreach($sub_posts as $post){ ?>
              <li> <a class="shop-top-posts-list-category-row-sub-post-item" href="<?php print content_link( $post['id'] ) ?>"><span class="mw-icon mw-icon-arrowright"></span><span><?php print  $post['title'] ?></span></a></li>
              <?php $skip_posts[] = $post['id']; ?>
              <?php } ?>
              <?php } ?>
            </ul>
          
          </div>
            
          </div>
          <?php } ?>
          <?php } ?>
          <?php if(!empty($posts)){ ?>
          <?php foreach($posts as $post){ ?>
          <?php if(!in_array($post['id'],$skip_posts)){ ?>
          <div class="mw-ui-col <?php if(content_id()==$post['id']) { ?> link-active<?php } ?> "> <a <?php if(content_id()==$post['id']) { ?> class="active" <?php } ?> href="<?php print content_link( $post['id'] ) ?>"><?php print  $post['title'] ?></a> </div>
          <?php } ?>
          <?php } ?>
          <?php } ?>
        </div>
      </div>
      <?php $count++;?>
      <?php } ?>
      <?php } ?>
    </div>
  </div>
  <div class="margin-spacer-element-20"></div>
</div>
