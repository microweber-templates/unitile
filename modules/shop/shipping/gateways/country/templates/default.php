<?php

/*

type: layout

name: Default

description: Default

*/
?>
<?php
$s = mw()->user_manager->session_all();

$vals = array();
$vals['shipping_country'] = '';
$vals['shipping_first_name'] = '';
$vals['shipping_last_name'] = '';
$vals['shipping_email'] = '';
$vals['shipping_phone'] = '';
$vals['shipping_city'] = '';
$vals['shipping_state'] = '';
$vals['shipping_zip'] = '';
$vals['shipping_address'] = '';
$vals['shipping_address2'] = '';


$vals['shipping_payment_email'] = '';
$vals['shipping_payment_name'] = '';
$vals['shipping_payment_country'] = '';
$vals['shipping_payment_address'] = '';
$vals['shipping_payment_city'] = '';
$vals['shipping_payment_state'] = '';
$vals['shipping_payment_zip'] = '';
$vals['shipping_payment_phone'] = '';




$user = get_user(); 
if(isset($user['first_name'])){
$vals['shipping_first_name'] = $user['first_name'];	
}
if(isset($user['last_name'])){
$vals['shipping_last_name'] = $user['last_name'];	
}
$sess_val = mw()->user_manager->session_get('shipping_first_name');
if($sess_val){
$vals['shipping_first_name'] = $sess_val;	
}

foreach($vals as $k=>$v){
	$sess_val = mw()->user_manager->session_get($k);
	if($sess_val){
		$vals[$k] = $sess_val;	
	}

}
$selected_country = mw()->user_manager->session_get('shipping_country');
$states = mw()->forms_manager->states_list($selected_country);


$billing_selected_country = mw()->user_manager->session_get('shipping_payment_country');  
$billing_states = mw()->forms_manager->states_list($billing_selected_country);

 
 
?>

<div class="<?php print $config['module_class'] ?>">
  <div class="shipping_country_unite_wrapper_shipping_form_main">
    <div id="shipping_country_unite" class="shipping_country_unite_wrapper_shipping_form">
      <div class="mw-row" style="margin:0px;">
        <div class="mw-col" style="width:50%; margin:0px;">
          <h4 class="box-style-1-heading ico-cart-white">Shipping Information</h4>
        </div>
        <div class="mw-col" style="width:50%;margin:0px;">
          <h4 class="box-style-1-heading ico-none">Billing Information</h4>
        </div>
      </div>
      <div class="mw-row">
        <div class="mw-col shipping_country_unite_wrapper_shipping_form_col_left">
          <div class="mw-ui-field-holder">
            <label>
              <?php _e("Choose country:"); ?>
            </label>
            <?php   ?>
            <div class="form-group has-feedback has-feedback-left">
              <select name="shipping_country" class="field-full form-control mw-checkout-fields">
                <option value="">
                <?php _e("Choose country"); ?>
                </option>
                <?php foreach($data  as $item): ?>
                <option value="<?php print $item['shipping_country'] ?>"  <?php if(isset($selected_country) and $selected_country == $item['shipping_country']): ?> selected="selected" <?php endif; ?>><?php print $item['shipping_country'] ?></option>
                <?php endforeach ; ?>
              </select>
              <i class="glyphicon glyphicon-globe form-control-feedback"></i> </div>
          </div>
          <?php if($states) { ?>
          <div class="mw-ui-field-holder">
            <label> State </label>
            <div class="form-group has-feedback has-feedback-left">
              <select name="state" class="field-full form-control mw-checkout-fields">
                <option value="">
                <?php _e("Choose state"); ?>
                </option>
                <?php foreach($states  as $item): ?>
                <option value="<?php print $item ?>"  <?php if(isset($selected_country) and $vals['shipping_state'] == $item): ?> selected="selected" <?php endif; ?>><?php print $item ?></option>
                <?php endforeach ; ?>
              </select>
              <i class="fa glyphicon glyphicon-user  fa fa-university form-control-feedback"></i> </div>
          </div>
          <?php } ?>
          <div class="mw-ui-field-holder">
            <label>city</label>
            <div class="form-group has-feedback has-feedback-left">
              <input name="city" class="field-full form-control mw-checkout-fields" type="text"
                               value="<?php if ($vals['shipping_city']) {
                                   print $vals['shipping_city'];
                               } ?>"/>
              <i class="glyphicon glyphicon-user fa fa-map-marker form-control-feedback"></i> </div>
          </div>
          <div class="mw-ui-field-holder">
            <label>
              <?php _e("First Name"); ?>
            </label>
            <div class="form-group has-feedback has-feedback-left">
              <input name="first_name" class="field-full form-control mw-checkout-fields" placeholder="First name" type="text"
                               value="<?php if (isset($vals['shipping_first_name'])) {
                                   print $vals['shipping_first_name'];
                               } ?>"/>
              <i class="glyphicon glyphicon-user form-control-feedback"></i> </div>
          </div>
          <div class="mw-ui-field-holder">
            <label>
              <?php _e("Last Name"); ?>
            </label>
            <div class="form-group has-feedback has-feedback-left">
              <input name="last_name" class="field-full form-control mw-checkout-fields" placeholder="<?php _e("Last Name"); ?>" type="text"
                               value="<?php if ($vals['shipping_last_name']) {
                                   print $vals['shipping_last_name'];
                               } ?>"/>
              <i class="glyphicon glyphicon-user form-control-feedback"></i> </div>
          </div>
          <div class="mw-ui-field-holder">
            <label>
              <?php _e("Email"); ?>
            </label>
            <div class="form-group has-feedback has-feedback-left">
              <input name="email" class="field-full form-control mw-checkout-fields" placeholder="<?php _e("Email"); ?>" type="text"
                               value="<?php if (isset($vals['shipping_email'])) {
                                   print $vals['shipping_email'];
                               } ?>"/>
              <i class="glyphicon glyphicon-user fa fa-paper-plane form-control-feedback"></i> </div>
          </div>
          <div class="mw-ui-field-holder">
            <label>
              <?php _e("Phone"); ?>
            </label>
            <div class="form-group has-feedback has-feedback-left">
              <input name="phone" class="field-full form-control mw-checkout-fields" placeholder="<?php _e("Phone"); ?>" type="text"
                               value="<?php if (isset($vals['shipping_phone'])) {
                                   print $vals['shipping_phone'];
                               } ?>"/>
              <i class="glyphicon glyphicon-user fa fa-phone form-control-feedback"></i> </div>
          </div>
          <div class="mw-ui-field-holder">
            <label>zip</label>
            <div class="form-group has-feedback has-feedback-left">
              <input name="zip" class="field-full form-control mw-checkout-fields" type="text"
                               value="<?php if (isset($vals['shipping_zip'])) {
                                   print $vals['shipping_zip'];
                               } ?>"/>
              <i class="glyphicon glyphicon-user fa fa-asterisk form-control-feedback"></i> </div>
          </div>
          <div class="mw-ui-field-holder">
            <div class="form-group has-feedback has-feedback-left">
              <label> address </label>
              <textarea class="field-full form-control mw-checkout-fields" name="address"><?php if (isset($vals['shipping_address'])) {
                                   print $vals['shipping_address'];
                               } ?> 
</textarea>
              <i class="glyphicon glyphicon-map-marker form-control-feedback"></i> </div>
          </div>
          <span class="unitile-mw-ui-field-holder-item-bg-element-col"><span class="unitile-mw-ui-field-holder-bg-element-inner"></span></span> </div>
        <div class="mw-col shipping_country_unite_wrapper_shipping_form_col_right">
          <div class="mw-ui-field-holder">
            <label>
              <?php _e("Choose country:"); ?>
            </label>
            <div class="form-group has-feedback has-feedback-left">
              <select name="payment_country" class="field-full form-control mw-checkout-fields">
                <option value="">
                <?php _e("Choose country"); ?>
                </option>
                <?php foreach($data  as $item): ?>
                <option value="<?php print $item['shipping_country'] ?>"  <?php if(isset($billing_selected_country) and $billing_selected_country == $item['shipping_country']): ?> selected="selected" <?php endif; ?>><?php print $item['shipping_country'] ?></option>
                <?php endforeach ; ?>
              </select>
              <i class="glyphicon glyphicon-globe form-control-feedback"></i> </div>
          </div>
          <?php 
		 
		 
		 if($billing_states) { ?>
          <div class="mw-ui-field-holder">
            <label> payment_state </label>
            <div class="form-group has-feedback has-feedback-left">
              <select name="payment_state" class="field-full form-control mw-checkout-fields">
                <option value="">
                <?php _e("Choose state"); ?>
                </option>
                <?php foreach($billing_states  as $item): ?>
                <option value="<?php print $item ?>"  <?php if(isset($selected_country) and $vals['shipping_payment_state'] == $item): ?> selected="selected" <?php endif; ?>><?php print $item ?></option>
                <?php endforeach ; ?>
              </select>
              <i class="glyphicon fa fa-university form-control-feedback"></i> </div>
          </div>
          <?php } ?>
          <div class="mw-ui-field-holder">
            <label>payment_city </label>
            <div class="form-group has-feedback has-feedback-left">
              <input name="payment_city" class="field-full form-control mw-checkout-fields" placeholder="<?php _e("Billing City"); ?>" type="text"
                               value="<?php if ($vals['shipping_payment_city']) {
                                   print $vals['shipping_payment_city'];
                               } ?>"/>
              <i class="glyphicon glyphicon-user fa fa-map-marker form-control-feedback"></i> </div>
          </div>
          <div class="mw-ui-field-holder">
            <label>
              <?php _e("Full Name"); ?>
            </label>
            <div class="form-group has-feedback has-feedback-left">
              <input name="payment_name" class="field-full form-control mw-checkout-fields" placeholder="<?php _e("Billing Name"); ?>" type="text"
                               value="<?php if (isset($vals['shipping_payment_name'])) {
                                   print $vals['shipping_payment_name'];
                               } ?>"/>
              <i class="glyphicon glyphicon-user form-control-feedback"></i> </div>
          </div>
          <div class="mw-ui-field-holder">
            <label>
              <?php _e("Phone"); ?>
            </label>
            <div class="form-group has-feedback has-feedback-left">
              <input name="payment_phone" class="field-full form-control mw-checkout-fields" placeholder="<?php _e("Billing Phone"); ?>" type="text"
                               value="<?php if (isset($vals['shipping_payment_phone'])) {
                                   print $vals['shipping_payment_phone'];
                               } ?>"/>
              <i class="glyphicon fa fa-phone form-control-feedback"></i> </div>
          </div>
          <div class="mw-ui-field-holder">
            <label> payment_zip </label>
            <div class="form-group has-feedback has-feedback-left">
              <input name="payment_zip" class="field-full form-control mw-checkout-fields" placeholder="<?php _e("Billing zip"); ?>" type="text"
                               value="<?php if (isset($vals['shipping_payment_zip'])) {
                                   print $vals['shipping_payment_zip'];
                               } ?>"/>
              <i class="glyphicon fa fa-asterisk form-control-feedback"></i> </div>
          </div>
          <div class="mw-ui-field-holder">
            <label> payment_address </label>
            <div class="form-group has-feedback has-feedback-left">
              <textarea class="field-full form-control mw-checkout-fields" placeholder="<?php _e("Billing Address"); ?>" name="payment_address"><?php if (isset($vals['shipping_payment_address'])) {
                                   print $vals['shipping_payment_address'];
                               } ?>
</textarea>
              <i class="glyphicon glyphicon-map-marker form-control-feedback"></i> </div>
          </div>
          <span class="unitile-mw-ui-field-holder-item-bg-element-col"><span class="unitile-mw-ui-field-holder-bg-element-inner"></span></span> </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

    function mw_shipping_set_vals(data){



 


        $.post( "<?php print $config['module_api']; ?>/shipping_to_country/set", data)
            .done(function( msg ) {

                if(msg.shipping_country != undefined){
                    //	 		 mw.$("[name='country']").val(this.shipping_country)
                }
                mw.reload_module('shop/cart');
                mw.reload_module('shop/shipping');
                mw.reload_module('<?php print $config['module']; ?>');

            });
    }



    $(document).ready(function(){
        mw.$(".mw-checkout-fields").change(function() {
            var data = mw.form.serialize('#shipping_country_unite');
            mw_shipping_set_vals(data);
        });
    });



</script>