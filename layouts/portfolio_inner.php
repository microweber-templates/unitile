<?php include template_dir(). "header.php"; ?>

<div id="content">
<?php include template_dir(). "top_bar_on_pages.php"; ?>

  <div class="container"> 
    
    <!-- Portfolio Item Heading -->
    <div class="edit"  field="content_header_text" rel="content">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Page Heading <small>Secondary Text</small> </h1>
        </div>
      </div>
    </div>
    <div class="edit post-content"  field="content" rel="content"> 
      
      <!-- Portfolio Item Row -->
      <div class="row">
        <div class="col-md-8">
          <div class="edit"  field="content_body" rel="content">
            <h3>Project Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
          </div>
        </div>
        <div class="col-md-4">
          <module type="pictures" template="bootstrap_carousel"  rel="content"  />
          
          <div class="edit"  field="project_details" rel="content">
          <div class="project-details-inner-block">
            <h3 class="project-details-inner-block-title">Project Details</h3>
            <div class="project-details-inner-block-content">
            <ul>
              <li>Lorem Ipsum</li>
              <li>Dolor Sit Amet</li>
              <li>Consectetur</li>
              <li>Adipiscing Elit</li>
            </ul>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row --> 
    
  </div>
</div>
<?php include   template_dir().  "footer.php"; ?>
