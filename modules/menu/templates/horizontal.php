<?php

/*

type: layout

name: colaterals

description: colaterals bar

*/

?>

<div class="horizontal-menu">
  <?php
	$menu_filter['ul_class'] = ' ';
	$menu_filter['ul_class_deep'] = ' ';

 	$menu_filter['li_class'] = ' ';
  	$menu_filter['max_depth'] = '1';
	//$menu_filter['ul_tag'] = 'div';
	//$menu_filter['li_tag'] = 'span';

		$mt =  menu_tree($menu_filter);

		if($mt != false){
			?>
  <div class="cxmenu">
    <?php
		 
		    print ($mt);
			?>
  </div>
  <?php
		} else {
		    print lnotif("There are no items in the menu <b>".$params['menu-name']. '</b>');
		}
   		?>
</div>
