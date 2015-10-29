<?php

/*

type: layout

name: colaterals

description: colaterals bar

*/

?>
 

<div class="sidebar-collaterals-menu">
  <?php
	$menu_filter['ul_class'] = 'sidebar-collaterals-menu-ul';
	$menu_filter['ul_class_deep'] = 'sidebar-collaterals-menu-ul-deep';

 	$menu_filter['li_class'] = 'sidebar-collaterals-menu-li';
  	$menu_filter['max_depth'] = '1';

		$mt =  menu_tree($menu_filter);

		if($mt != false){
			?>
            <div class="sidebar-collaterals-menu-nav-title-holder">
            Collaterals
            </div>
            <div class="sidebar-collaterals-menu-nav-holder">
            
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
