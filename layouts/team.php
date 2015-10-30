<?php

/*

type: layout
content_type: dynamic
name: Team
position: 30
description: Team

*/


?>
<?php include template_dir(). "header.php"; ?>

<div id="content">
  <div class="container" id="team-page-container">
    <?php  include template_dir(). "layouts/team_top.php";  ?>
    <div class="row">
      <div class="col-md-6 " id="team-page-left">
        <?php  include template_dir(). "layouts/team_left.php";  ?>
      </div>
      <div class="col-md-6" id="team-page-right">
        <?php
	  $post = next_post();
  //dd($post);
	  if(isset($post['content'])){
		 print $post['content']; 
	  }
	  
	    ?>
      </div>
    </div>
  </div>
</div>
<?php include template_dir(). "footer.php"; ?>
