<?php

/*

type: layout
content_type: static
name: Page with right sidebar
position: 10

description: Page with right sidebar

*/
 

?>
<?php include template_dir(). "header.php"; ?>

<div id="content">
  <div class="container">
    <module type="breadcrumb" template="unitile-breadcrumb" />
  </div>
  <div class="container styled-headings">
    <div class="row">
      <div class="col-sm-9 sidebar-lined-border-right">
        <h2 class="edit"  field="title" rel="content">New page</h2>
        <div class="edit"  field="content" rel="content">
          <p>You can edit this text</p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="edit"  field="sidebar" rel="inherit">
          <h2>Testimonials</h2>
          <module type="testimonials" />
        </div>
      </div>
    </div>
  </div>
</div>
<?php include template_dir(). "footer.php"; ?>
