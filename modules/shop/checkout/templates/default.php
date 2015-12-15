<?php

/*

type: layout

name: Default

description: Default cart template

*/
 
?>

<div class="container">
  <div class="margin-spacer-element-20"></div>
  <div class="margin-spacer-element-20"></div>
</div>
<?php if($requires_registration and is_logged() == false): ?>
<module type="users/register" />
<?php else: ?>
<?php if ($payment_success == false): ?>
<?php 
$shop_page = get_content('is_shop=1');     
$step = 1;

if(isset($_GET['step'])){
	$step = intval($_GET['step']);
}

$cart = get_cart();

?>
<div class="mw-checkout-holder">
  <?php if ($cart == false): ?>
  <?php if (is_array($shop_page)): ?>
  <h4 class="alert alert-warning"> Your cart is empty </h4>
  <a href="<?php print page_link($shop_page[0]['id']); ?>" class="btn btn-default pull-left"
                   type="button">
  <?php _e("Continue Shopping"); ?>
  </a>
  <?php endif; ?>
  <?php else: ?>
  <script>
$(document).ready(function(){
    $("#checkout_form_<?php print $params['id'] ?>").validationEngine('attach', {promptPosition : "centerRight", scroll: false});
	
	
	
	
	$( ".step-next-btn-validate" ).click(function( event ) {
 
		
	var is_valid = $("#checkout_form_<?php print $params['id'] ?>").validationEngine('validate')	
	 if(!is_valid){
      event.stopPropagation();
  	 event.preventDefault();
  
	 }
     });
	
	
	 
	
	
 	
	
	
   });

 
   
   
   





</script>
  <form class="mw-checkout-form" id="checkout_form_<?php print $params['id'] ?>" method="post"
          action="<?php print api_link('checkout') ?>">
    <?php $cart_show_enanbled = get_option('data-show-cart', $params['id']); ?>
    <?php if ($cart_show_enanbled != 'n'): ?>
    <br />
    <?php if($step == 1): ?>
    <module type="shop/cart" template="big" id="cart_checkout_<?php print $params['id'] ?>"
                    data-checkout-link-enabled="n"/>
    <div class="step-btn-holder">
      <?php if (is_array($shop_page)): ?>
      <a href="<?php print page_link($shop_page[0]['id']); ?>" class="step-btn step-btn-left"> <span>Continue Shopping</span></a>
      <?php endif; ?>
      <a href="?step=2" class="step-btn step-btn-right"><span>Proceed Checkout</span></a> </div>
    <?php endif;?>
    <?php endif; ?>
    <?php if($step == 2): ?>
    <div class="mw-ui-row shipping-and-payment mw-shop-checkout-personal-info-holder">
      <div class="mw-ui-col mw-shop-checkout-shipping-holder">
        <div class="mw-ui-col-container">
          <module type="shop/shipping"/>
        </div>
      </div>
    </div>
    <div class="step-btn-holder"> <a href="?step=1" class="step-btn step-btn-left xpull-left"> <span>Back</span></a> <a href="?step=3"   class="step-next-btn-validate step-btn step-btn-right xpull-right"><span>Save and Continue</span></a> </div>
    <?php endif; ?>
    <?php if($step == 3): ?>
    <module type="shop/cart" template="summary" id="cart_checkout_<?php print $params['id'] ?>"
                    data-checkout-link-enabled="n"/>
    <div class="step-btn-holder"> <a href="?step=2" class="step-btn step-btn-left xpull-left"> <span>Back</span></a> <a href="?step=4" class="step-btn step-btn-right xpull-right"><span>Continue</span></a> </div>
    <?php endif; ?>
    <?php if($step == 4): ?>
    <div class="mw-ui-row shipping-and-payment mw-shop-checkout-payments-info-holder">
      <div class="mw-ui-col">
        <div class="mw-ui-col-container mw-shop-checkout-payments-holder">
          <module type="shop/payments"/>
        </div>
      </div>
    </div>
    <div class="alert hide"></div>
    <div class="mw-cart-action-holder">
      <hr/>
      <?php
$tems = get_option('shop_require_terms', 'website') == 1;	
 

 ?>
      <?php if($tems): ?>
      <script>



$( document ).ready(function() {
   
  
   
       $('#i_agree_with_terms_row').click(function() {
		var el = $('#i_agree_with_terms');
		if(el.is(':checked')) {
			 $('#complete_order_button').removeAttr('disabled');
		} else {
		 	 $('#complete_order_button').attr('disabled','disabled');

		}
	});
   
   
});


    
    </script>
      <div class="mw-ui-row" id="i_agree_with_terms_row">
        <label class="mw-ui-check">
          <input type="checkbox" name="terms" id="i_agree_with_terms" value="1" autocomplete="off" />
          <span class="edit" field="i_agree_with_terms_text" rel="shop_checkout"> I agree with <a href="<?php print site_url('tems') ?>" target="_blank"> terms and conditions </a> </span> </label>
      </div>
      <br>
      <?php endif; ?>
      <div style="display:none">
        <module type="shop/shipping"/>
      </div>
      <div class="step-btn-holder">
        <?php if (is_array($shop_page)): ?>
        <a href="?step=3" class="step-btn step-btn-left"> <span>Cart summary</span></a>
        <?php endif; ?>
        <button class="step-btn step-btn-right mw-checkout-btn"
                    onclick="mw.cart.checkout('#checkout_form_<?php print $params['id'] ?>');"
                    type="button" id="complete_order_button" <?php if($tems): ?> disabled="disabled"   <?php endif; ?>>
        <?php _e("Complete order"); ?>
        </button>
      </div>
      <?php if (is_array($shop_page)): ?>
      <a href="<?php print page_link($shop_page[0]['id']); ?>" class="btn btn-default pull-left"
                   type="button">
      <?php _e("Continue Shopping"); ?>
      </a>
      <?php endif; ?>
      <div class="clear"></div>
    </div>
    <?php endif; ?>
  </form>
  <?php endif; ?>
</div>
<div class="mw-checkout-responce"></div>
<?php else: ?>
<h2>
  <?php _e("Your payment was successfull."); ?>
</h2>
<?php endif; ?>
<?php endif; ?>
