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
  <div id="shipping_country_unite">
    <div class="mw-row">
      <div class="mw-col"> Shipping info
        <label>
          <?php _e("Choose country:"); ?>
        </label>
        <?php   ?>
        <select name="shipping_country" class="field-full form-control mw-checkout-fields">
          <option value="">
          <?php _e("Choose country"); ?>
          </option>
          <?php foreach($data  as $item): ?>
          <option value="<?php print $item['shipping_country'] ?>"  <?php if(isset($selected_country) and $selected_country == $item['shipping_country']): ?> selected="selected" <?php endif; ?>><?php print $item['shipping_country'] ?></option>
          <?php endforeach ; ?>
        </select>
        <?php if($states) { ?>
        <label> State </label>
        <select name="state" class="field-full form-control mw-checkout-fields">
          <option value="">
          <?php _e("Choose state"); ?>
          </option>
          <?php foreach($states  as $item): ?>
          <option value="<?php print $item ?>"  <?php if(isset($selected_country) and $vals['shipping_state'] == $item): ?> selected="selected" <?php endif; ?>><?php print $item ?></option>
          <?php endforeach ; ?>
        </select>
        <?php } ?>
        <h2 style="margin-top:0">
          <?php _e("Shipping Information"); ?>
        </h2>
        <hr/>
        <label>
          <?php _e("First Name"); ?>
        </label>
        <input name="first_name" class="field-full form-control mw-checkout-fields" type="text"
                               value="<?php if (isset($vals['shipping_first_name'])) {
                                   print $vals['shipping_first_name'];
                               } ?>"/>
        <label>
          <?php _e("Last Name"); ?>
        </label>
        <input name="last_name" class="field-full form-control mw-checkout-fields" type="text"
                               value="<?php if ($vals['shipping_last_name']) {
                                   print $vals['shipping_last_name'];
                               } ?>"/>
        <label>
          <?php _e("Email"); ?>
        </label>
        <input name="email" class="field-full form-control mw-checkout-fields" type="text"
                               value="<?php if (isset($vals['shipping_email'])) {
                                   print $vals['shipping_email'];
                               } ?>"/>
        <label>
          <?php _e("Phone"); ?>
        </label>
        <input name="phone" class="field-full form-control mw-checkout-fields" type="text"
                               value="<?php if (isset($vals['shipping_phone'])) {
                                   print $vals['shipping_phone'];
                               } ?>"/>
        <label>city </label>
        <input name="city" class="field-full form-control mw-checkout-fields" type="text"
                               value="<?php if ($vals['shipping_city']) {
                                   print $vals['shipping_city'];
                               } ?>"/>
        <label> zip </label>
        <input name="zip" class="field-full form-control mw-checkout-fields" type="text"
                               value="<?php if (isset($vals['shipping_zip'])) {
                                   print $vals['shipping_zip'];
                               } ?>"/>
        <label> address </label>
        <textarea class="field-full form-control mw-checkout-fields" name="address"><?php if (isset($vals['shipping_address'])) {
                                   print $vals['shipping_address'];
                               } ?>
</textarea>
      </div>
      <div class="mw-col"> Billing info
        <label>
          <?php _e("Choose country:"); ?>
        </label>
        <?php 
		
 
		?>
        <select name="payment_country" class="field-full form-control mw-checkout-fields">
          <option value="">
          <?php _e("Choose country"); ?>
          </option>
          <?php foreach($data  as $item): ?>
          <option value="<?php print $item['shipping_country'] ?>"  <?php if(isset($billing_selected_country) and $billing_selected_country == $item['shipping_country']): ?> selected="selected" <?php endif; ?>><?php print $item['shipping_country'] ?></option>
          <?php endforeach ; ?>
        </select>
        <?php 
		 
		 
		 if($billing_states) { ?>
        <label> payment_state </label>
        <select name="payment_state" class="field-full form-control mw-checkout-fields">
          <option value="">
          <?php _e("Choose state"); ?>
          </option>
          <?php foreach($billing_states  as $item): ?>
          <option value="<?php print $item ?>"  <?php if(isset($selected_country) and $vals['shipping_payment_state'] == $item): ?> selected="selected" <?php endif; ?>><?php print $item ?></option>
          <?php endforeach ; ?>
        </select>
        <?php } ?>
        <h2 style="margin-top:0">
          <?php _e("Billing Information"); ?>
        </h2>
        <hr/>
        <label>
          <?php _e("Full Name"); ?>
        </label>
        <input name="payment_name" class="field-full form-control mw-checkout-fields" type="text"
                               value="<?php if (isset($vals['shipping_payment_name'])) {
                                   print $vals['shipping_payment_name'];
                               } ?>"/>
        <label>payment_city </label>
        <input name="payment_city" class="field-full form-control mw-checkout-fields" type="text"
                               value="<?php if ($vals['shipping_payment_city']) {
                                   print $vals['shipping_payment_city'];
                               } ?>"/>
        <label> payment_zip </label>
        <input name="payment_zip" class="field-full form-control mw-checkout-fields" type="text"
                               value="<?php if (isset($vals['shipping_payment_zip'])) {
                                   print $vals['shipping_payment_zip'];
                               } ?>"/>
        <label> payment_address </label>
        <textarea class="field-full form-control mw-checkout-fields" name="payment_address"><?php if (isset($vals['shipping_payment_address'])) {
                                   print $vals['shipping_payment_address'];
                               } ?>
</textarea>
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