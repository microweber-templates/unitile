<?php include template_dir(). "header.php"; ?>

<div id="content">
  <div class="container" id="team-page-container">
    <?php  include template_dir(). "layouts/team_top.php";  ?>
    <div class="row">
      <div class="col-md-6 " id="team-page-left">
        <?php  include template_dir(). "layouts/team_left.php";  ?>
      </div>
      <div class="col-md-6" id="team-page-right">
        <div class="edit content" field="content" rel="content">
                  <img src="<?php print template_url() ?>img/moiz.png" style="float:right;margin-left:60px;" />

          <h2>Page title</h2>
          <div>
            <p align="justify">This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it anywhere on the site. Get creative, Make Web.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include template_dir(). "footer.php"; ?>
