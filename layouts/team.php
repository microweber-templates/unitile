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
      <div class="col-md-6 styled-headings" id="team-page-right">
        <?php
	  $post = next_post();
  //dd($post);
	  if(isset($post['content'])){
		 //print $post['content']; 
	  }
	  
	    ?>
        <h1>United Group</h1>
        <p>Since its inception in 1994, United Group has carved a niche of its own in manufacturing and execution of raised flooring solutions in India. </p>
        <p>Raised flooring today is fast becoming an integral part of the corporate terrain of India, and it would be no exaggeration to say that our Company has been at the forefront of the movement. The founders of United Group, with their passion to walk a new path, followed their vision which has made it a force to reckon with. </p>
        <p> Today, the Company has successful operations in India, the Middle East & South East Asia, having proved its mettle by successfully meeting every challenge it has come across. </p>
      </div>
    </div>
  </div>
</div>
<?php include template_dir(). "footer.php"; ?>
