<?php

/*

type: layout

name: Top Menu

description: Top Menu skin

*/
$menu_filter['ul_class'] = 'nav pull-right';
?>

<script>mw.moduleCSS("<?php print $config['url_to_module']; ?>style.css", true);</script>



<div class="module-navigation module-navigation-default top-menu">
      <?php
      $mt =  menu_tree($menu_filter);
      if($mt != false){
        print ($mt);
        ?>
      	<div class="home-btn pull-right"><a hraf="#">home</a></div>
      <?php
      }
      else {
        print lnotif("There are no items in the menu <b>".$params['menu-name']. '</b>');
      }
      ?>
</div>
