<?php

/*

type: layout

name: One price

description: Add to cart default

*/
 ?>
<?php

if(!isset($params['content-id'])){
	$params['content-id'] = CONTENT_ID;
}

if(isset($params['content-id'])){
  $product = get_content_by_id($params["content-id"]);
  $title =  $product['title'];
}
else{
  $title =  _e("Product", true);
}
 
?>
<?php
$firstPrice = false;
$showPrice = false;

 $count = 0;
  $num = count($data);
  if(is_array($data)):
?>
<?php foreach($data  as $key => $v ){
	
	if(intval($v) > 0){
		$showPrice = 1;
	}
	
	} ?>
 
<div class="sidebar-box sidebar-box-styled-add">
  <div class="sidebar-box-styled-add-item-title-holder">
    <div class="sidebar-box-styled-add-item-title-holder-ornament-right"> </div>
    <h2 class="sidebar-box-styled-add-item-title"><?php print $title; ?></h2>
    <div class="sidebar-box-styled-add-item-title-holder-ornament"> </div>
  </div>
  <div class="padding-element">
    <div class="sidebar-box-styled-add-item-price-holder">
      <?php foreach($data  as $key => $v ): ?>
      <?php $count++; ?>
      <?php if($count == 1){ $firstPrice = $v; ?>
      <script>LocalPrice = "<?php print $v; ?>";</script>
      <div class="item-single-price"><?php print currency_format($firstPrice); ?> </div>
      <?php }  ?>
      <?php endforeach ; ?>
      <?php endif; ?>
    </div>
    <div class="sidebar-box-styled-add-item-btns-holder">
      <button class="btn btn-default btn-add-to-cart" type="button" onclick="mw.cart.add_item('<?php print $params['content-id'] ?>')">Add to cart</button>
      <button class="btn btn-default btn-add-to-cart" type="button" onclick="mw.cart.add_item('<?php print $params['content-id'] ?>',LocalPrice,function(){window.location.href='checkout'});">Buy Now</button>
    </div>
  </div>
</div>
 
