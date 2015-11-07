<?php include template_dir(). "header.php"; ?>

<div class="container" id="careers-container">
  <div class="margin-spacer-element-20"></div>
  <module type="breadcrumb" template="unitile-breadcrumb" />
  <div class="margin-spacer-element-20"></div>
  <div id="careers-content-<?php print CONTENT_ID; ?>">
    <div class="row">
      <div class="col-sm-9" id="careers-main-inner">
        <h3 class="edit" field="title" rel="content">Page Title</h3>
        <div class="edit post-content" field="content" rel="content">
          <div class="edit"  field="content_body" rel="content">
            <div class="element">
              <p align="justify">This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it anywhere on the site. Get creative, Make Web.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3" id="careers-sidebar">
      <module type="posts" template="sidebar" related=true />
      
      </div>
    </div>
  </div>
</div>
<?php include   template_dir().  "footer.php"; ?>
