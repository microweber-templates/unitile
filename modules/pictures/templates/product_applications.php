<?php

/*

type: layout

name: Product Gallery Applications

description: Product Gallery Applications 

*/

?>
<style>
.unitile-product-applications-gallery-holder {
}
.unitile-product-applications-gallery-item {
	height: 200px;
	width: 100%;
	display: block;
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
	position: relative;
}
.unitile-product-applications-gallery-item-desc {
	bottom: 0px;
	background-color: rgba(0, 42, 92, 0.5);
	position: absolute;
	width: 100%;
	font-size: 18px;
	color: white;
	text-align: center;
}
.applications-image-edit-field {
 margin-top:30px;	
}
</style>
<script>


unitile_application_change_image = function(id){
	var el = $('.unitile-product-applications-gallery-item-'+id);
	var src = el.attr('big_image');
	 
	if(src){
		$('.unitile-product-applications-gallery-holder-big-img img').attr('src',src);
	}
	$( ".applications-image-edit-field:visible" ).slideUp();
	//$('.applications-image-edit-field').hide();
	$('.image-content-'+id).slideDown();
}

</script>
<?php if(is_array($data )): ?>

<div class="unitile-product-applications-gallery-holder">
  <div class="unitile-product-applications-gallery-holder-big-img"> <img class="img-responsive" src="<?php print thumbnail($data[0]['filename'], 1500); ?>" /> </div>
  <?php
$count = 0;
$len =  count($data);
?>
  <?php $count = 0; foreach($data  as $item): ?>
  <?php $count++; ?>
  <?php if($count == 1 or ($count-1) % 3 == 0) { ?>
  <div class="row">
    <?php  } ?>
    <div class="col-md-4 col-sm-4"> <a href="javascript:unitile_application_change_image(<?php print ($item['id']); ?>)" class="<?php if($count==0){ print 'active ';} ?>item unitile-product-applications-gallery-item unitile-product-applications-gallery-item-<?php print ($item['id']); ?>" style="background-image:url('<?php print thumbnail($item['filename'], 500); ?>')" big_image="<?php print thumbnail($item['filename'], 1500); ?>" image_id="<?php print ($item['id']); ?>">
      <?php if(isset($item['title']) and $item['title'] !=''){ ?>
      <div class="unitile-product-applications-gallery-item-desc"> <?php print $item['title']; ?> </div>
      <?php } ?>
      </a> </div>
    <?php if($count % 3 == 0 or $count == $len){ ?>
  </div>
  <?php  } ?>
  <?php endforeach ; ?>
  <?php $count = 0; foreach($data  as $item): ?>
  <?php $count++; ?>
  <div class="edit allow-drop applications-image-edit-field image-content-<?php print $item['id']  ?>" field="image-content-<?php print $item['id']  ?>" rel="module"
  <?php if($count != 1) { ?> style="display:none" <?php } ?>
  
  >
  <?php if(isset($item['title']) and $item['title'] !=''){ ?>
  <p class="element"><?php print $item['title']; ?></p>
  <?php } else { ?>
  <p class="element">Image <?php print $item['id']  ?></p>
  <?php  } ?>
</div>
<?php endforeach ; ?>
</div>
<?php else : ?>
<?php endif; ?>
