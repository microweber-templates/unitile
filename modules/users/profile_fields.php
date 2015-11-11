<?php
        $user = get_user_by_id(user_id());
		
		
		
		
		
		$attrs = mw()->user_manager->attributes();
	 
		
     ?>

<div class="mw-ui-row">
  <div class="mw-ui-col">
    <div class="mw-ui-col-container">
      <label class="mw-ui-label">Username</label>
      <input type="text" name="username" value="<?php print $user['username']; ?>" class="mw-ui-field w100" />
    </div>
  </div>
  <div class="mw-ui-col">
    <div class="mw-ui-col-container">
      <label class="mw-ui-label">Email</label>
      <input type="text" name="email" class="mw-ui-field w100"  value="<?php print $user['email']; ?>" />
    </div>
  </div>
</div>
<div class="mw-ui-row">
  <div class="mw-ui-col">
    <div class="mw-ui-col-container">
      <label class="mw-ui-label">First Name</label>
      <input type="text" name="first_name" class="mw-ui-field w100" value="<?php print $user['first_name']; ?>" />
    </div>
  </div>
  <div class="mw-ui-col">
    <div class="mw-ui-col-container">
      <label class="mw-ui-label">Last Name</label>
      <input type="text" name="last_name" class="mw-ui-field w100" value="<?php print $user['last_name']; ?>" />
    </div>
  </div>
</div>
<div class="mw-ui-row">
  <div class="mw-ui-col">
    <div class="mw-ui-col-container">
      <div class="control-group form-group">
        <div class="controls">
          <?php
							$val = '';
							$key = 'mobile';
							if(isset($attrs[$key])){
							$val = $attrs[$key];	
							}
							
							
							 ?>
          <label>Mobile No.</label>
          <input type="text" class="large-field form-control"  name="attributes[mobile]" placeholder="Mobile No." value="<?php print $val; ?>">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="control-group form-group">
  <div class="controls">
    <label>Company Name</label>
    <?php
							$val = '';
							$key = 'company';
							if(isset($attrs[$key])){
							$val = $attrs[$key];	
							}
							
							
							 ?>
    <input type="text" class="large-field form-control"  name="attributes[company]" placeholder="Company Name" value="<?php print $val; ?>">
  </div>
</div>
