<?php

/*

type: layout

name: header_small

description: Small cart template

*/
  ?>
<?php if(is_array($data)) :?>
<?php
        $total_qty = 0;
        $total_price = 0;
        foreach ($data as $item) {
            $total_qty += $item['qty'];
            $total_price +=  $item['price']* $item['qty'];
        }
      ?>

<div class="mw-ui-col cart-header-small"> <a class="" href="<?php print checkout_url() ?>"> <span class="glyphicon glyphicon-shopping-cart"></span> </a> <span class="badge badge-notify"><?php print $total_qty; ?></span> </div>
<?php endif ; ?>
