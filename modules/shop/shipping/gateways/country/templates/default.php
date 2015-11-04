<?php

/*

type: layout

name: Default

description: Default

*/
?>
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
<?php
$s = mw()->user_manager->session_all();

d($s);



?>

<div class="<?php print $config['module_class'] ?>">
  <div id="shipping_country_unite">
    <label>
      <?php _e("Choose country:"); ?>
    </label>
    <?php  $selected_country = mw()->user_manager->session_get('shipping_country'); ?>
    <select name="shipping_country" class="field-full form-control mw-checkout-fields">
      <option value="">
      <?php _e("Choose country"); ?>
      </option>
      <?php foreach($data  as $item): ?>
      <option value="<?php print $item['shipping_country'] ?>"  <?php if(isset($selected_country) and $selected_country == $item['shipping_country']): ?> selected="selected" <?php endif; ?>><?php print $item['shipping_country'] ?></option>
      <?php endforeach ; ?>
    </select>
  </div>
  <?php $user = get_user(); ?>
  <h2 style="margin-top:0">
    <?php _e("Personal Information"); ?>
  </h2>
  <hr/>
  <label>
    <?php _e("First Name"); ?>
  </label>
  <input name="first_name" class="field-full form-control mw-checkout-fields" type="text"
                               value="<?php if (isset($user['first_name'])) {
                                   print $user['first_name'];
                               } ?>"/>
  <label>
    <?php _e("Last Name"); ?>
  </label>
  <input name="last_name" class="field-full form-control mw-checkout-fields" type="text"
                               value="<?php if (isset($user['last_name'])) {
                                   print $user['last_name'];
                               } ?>"/>
  <label>
    <?php _e("Email"); ?>
  </label>
  <input name="email" class="field-full form-control mw-checkout-fields" type="text"
                               value="<?php if (isset($user['email'])) {
                                   print $user['email'];
                               } ?>"/>
  <label>
    <?php _e("Phone"); ?>
  </label>
  <input name="phone" class="field-full form-control mw-checkout-fields" type="text"
                               value="<?php if (isset($user['phone'])) {
                                   print $user['phone'];
                               } ?>"/>
</div>
