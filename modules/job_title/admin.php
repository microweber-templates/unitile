<?php

only_admin_access(); ?>
<?php 


if(!isset($params['content-id']) or $params['content-id'] == 0){
return;	
}
$cid = intval($params['content-id']);
$needed = '';
$email = '';
$data = content_data($params['content-id']);
if(isset($data['team_member_title'])){
$needed = $data['team_member_title'];
}
 if(isset($data['team_member_email'])){
$email = $data['team_member_email'];
}

?>
<script>

    







$( document ).ready(function() {
			$(document.querySelectorAll('[name="data_team_member_title"]')).bind('keyup paste', function(){
                mw.on.stopWriting(this, function(){
					var val = $('#data_team_member_title').val();
					$.post( mw.settings.api_url+"save_content_admin", { id: "<?php print $cid ?>", data_team_member_title: val },function( data ) {
						   mw.reload_module_parent('#<?php print $params['id'] ?>');
				  }); 

                });
            });
			$(document.querySelectorAll('[name="data_team_member_email"]')).bind('keyup paste', function(){
                mw.on.stopWriting(this, function(){
					var val = $('#data_team_member_email').val();
					$.post( mw.settings.api_url+"save_content_admin", { id: "<?php print $cid ?>", data_team_member_email: val },function( data ) {
						   mw.reload_module_parent('#<?php print $params['id'] ?>');
				  }); 

                });
            });
			
});

</script>
<div class="module-live-edit-settings">
<div class="mw-ui-field-holder">
  <label class="mw-ui-label"> Job Title </label>
  <input type="text" value="<?php print $needed ?>" placeholder="CEO,CTO,etc." class="mw-ui-field w100" name="data_team_member_title" id="data_team_member_title">
</div>
 <div class="mw-ui-field-holder">
  <label class="mw-ui-label"> Email </label>
  <input type="text" value="<?php print $email ?>" placeholder="name@example.com" class="mw-ui-field w100" name="data_team_member_email" id="data_team_member_email">
</div></div>