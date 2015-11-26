<?php

/*

type: layout
content_type: static
name: Page with picture on top
position: 300

description: Page with 2 sidebars

*/
 

?>
<?php include template_dir(). "header.php"; ?>

<div id="content">
  <?php include template_dir(). "top_bar_on_pages.php"; ?>
  <?php include template_dir(). "top_menu_on_pages.php"; ?>

  <module type="pictures" rel="content" template="wide_top" class="wide-top-container-pics" />

  <div class="container wide-top-container">
    <div class="row">
      <div class="col-sm-8 wide-top-container-col wide-top-container-padding">
        <h2 class="edit heading-style-projects"  field="title" rel="content">New page</h2>
        <div class="edit"  field="content" rel="content">
          <p>You can edit this text</p>
        </div>
      </div>
       
      <div class="col-sm-3  wide-top-sidebar-boxes-wrapper wide-top-container-col">
        <div class="edit wide-top-sidebar-boxes-wrapper-edit-sidebar"  field="sidebar-inner" rel="inherit">
          <module type="staticbox"  template="download2"  />
        </div>
      </div>
    </div>
  </div>

</div>
<?php include template_dir(). "footer.php"; ?>
