<?php

/*

type: layout
content_type: dynamic
name: Careers
position: 30
description: Careers

*/


?>
<?php include template_dir(). "header.php"; ?>

<div id="content">
  <div class="container" id="careers-container">
    <div class="margin-spacer-element-20"></div>
    <module type="breadcrumb" template="unitile-breadcrumb" />
    <div class="row">
      <div class="col-md-12 " id="careers-main">
        <div class="edit"  field="content" rel="page">
          <div class="home-title">
            <center>
              <h2>Current Openings</strong></h2>
              <span class="title-under"></span>
              <p class="center">United Group, founded in 1994, is name to reckon within the field of modern Construction & <br />
                Building Materials industry with its vast presence established in India and spread over 
                Middle East & South East Asia.</p>
            </center>
          </div>
          <div class="margin-spacer-element-20"></div>
          <module data-type="posts" template="careers" />
        </div>
      </div>
    </div>
  </div>
</div>
<?php include template_dir(). "footer.php"; ?>
