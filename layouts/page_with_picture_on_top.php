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

  <div class="container">
    <div class="row">
      <div class="col-sm-9">
        <h2 class="edit heading-style-projects"  field="title" rel="content">New page</h2>
        <div class="edit"  field="content" rel="content">
          <p>You can edit this text</p>
        </div>
      </div>
      <div class="col-sm-3 sidebar-boxes-wrapper">
        <div class="edit"  field="sidebar" rel="inherit">
          <module type="staticbox"  template="iso" />
        </div>
      </div>
    </div>
  </div>
</div>
<?php include template_dir(). "footer.php"; ?>
