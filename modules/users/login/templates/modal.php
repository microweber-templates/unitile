<?php

/*

type: layout

name: Login default

description: Login default

*/

?>
<?php $user = user_id(); ?>
<?php $have_social_login = false; ?>
<script>mw.moduleCSS("<?php print modules_url(); ?>users/login/templates.css")</script>

<div id="mw-login" class="module-login user-section-styles">
  <?php if($user != false): ?>
  <div>
    <module type="users/profile" />
  </div>
  <?php else:  ?>
  <div id="user_login_holder_<?php print $params['id'] ?>">
    <form   method="post" id="user_login_<?php print $params['id'] ?>"  class="clearfix" action="#"  >
      <div class="mw-ui-row">
        <div class="mw-ui-col" style="width: auto">
          <div class="mw-ui-col-container">
            <div class="control-group form-group">
              <div class="form-group has-feedback has-feedback-left">
                <input  class="large-field form-control"   name="username" type="text" placeholder="Email or Username"   />
                <i class="glyphicon glyphicon-user  form-control-feedback"></i> </div>
            </div>
            <div class="control-group form-group">
              <div class="form-group has-feedback has-feedback-left">
                <input  class="large-field form-control"  name="password" type="password" placeholder="<?php _e("Password"); ?>"   />
                <i class="glyphicon glyphicon-asterisk  form-control-feedback"></i> </div>
            </div>
            <a class="reset-password-link" href="<?php print forgot_password_url(); ?>">
            <?php _e("Forgot password"); ?>
            ?</a>
            <div class="alert" style="margin: 0;display: none;"></div>
          </div>
          <div class="xc-btn">
            <button type="submit">LOGIN</button>
          </div>
        </div>
        <?php /*
		
		<div class="mw-ui-col" style="width: 300px">
          <div class="mw-ui-col-container">
            <?php include(__DIR__.DS."social.php"); ?>
          </div>
        </div>
		
		*/ ?>
      </div>
    </form>
  </div>
  <?php endif;  ?>
</div>
