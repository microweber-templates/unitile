<?php
 
if(!isset($params['content-id']) or $params['content-id'] == 0){
return;	
}
$hideempty = false;
if(isset($params['hide-empty'])){
$hideempty = $params['hide-empty'];	
}
$data = content_data($params['content-id']);


$title = false;
$email = false;
$data = content_data($params['content-id']);
if(isset($data['team_member_title'])){
$title = $data['team_member_title'];
}
if(isset($data['team_member_email'])){
$email = $data['team_member_email'];
}







if(!$title and !$email){
	if(!$hideempty){
	print lnotif('Job title');
	}
return;	
}
 


 ?>
<div class="team-member-post-inner-title-and-email">
<?php print $title; ?>
<br />
<?php print $email; ?>

</div>