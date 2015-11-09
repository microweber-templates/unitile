<?php // require_once($config['path_to_module'].'shipping_api.php');  ?>
<?php

$shipping_options = mw('shop\shipping\shipping_api')->get_active();


?>
<?php if (is_array($shipping_options) and !empty($shipping_options)) : ?>
<script type="text/javascript">
        Gateway = function (el) {
            var val = $(el).val();
            mwd.querySelector('.mw-shipping-gateway-selected-<?php print $params['id']; ?> .module').setAttribute('data-selected-gw', val);
            mw.load_module(val, '#mw-shipping-gateway-selected-<?php print $params['id']; ?>');
        }
    </script>

 
  <?php if (isset($shipping_options[0]) and isset($shipping_options[0]['module_base'])): ?>
  <div id="mw-shipping-gateway-selected-<?php print $params['id']; ?>">
    <module type="<?php print $shipping_options[0]['module_base'] ?>"/>
  </div>
  <?php endif; ?>
 
<?php else : ?>
<?php print lnotif("Click here to edit Shipping Options"); ?>
<?php endif; ?>
