<?php if(isset($_GET['reset_password_link'])) {  ?>
<?php }  ?>

<div class="module-forgot-password user-section-styles">
  <div id="form-holder{rand}">
    <h2 class="r-title">Forgot password</h2>
    <h4 class="ct-em-title">
      <?php if(!isset($form_title) or $form_title == false): ?>
Please enter your email id for unitile
to send your new password.
      <?php else: ?>
      <?php  print $form_title; ?>
      <?php endif; ?>
    </h4>
    <form id="user_forgot_password_form{rand}" method="post" class="clearfix">
      <div class="control-group form-group has-feedback has-feedback-left">
        <div class="has-feedback has-feedback-left">
          <input type="text" class="large-field form-control"  name="username" placeholder="<?php _e("Email or Username"); ?>">
          <i class="glyphicon glyphicon-envelope form-control-feedback"></i></div>
      </div>
      <div class="mw-ui-row vertical-middle captcha-row">
        <div class="mw-ui-col">
          <div class="mw-captcha-image-holder"> <img class="mw-captcha-img" src="<?php print api_link('captcha') ?>" onclick="mw.tools.refresh_image(this);" /> </div>
        </div>
        <div class="mw-ui-col">
          <input type="text" placeholder="Enter code" class="form-control mw-captcha-input" name="captcha">
        </div>
      </div>
      <br>
      <div class="xc-btn">
            <button type="submit">SUBMIT</button>
          </div>
    </form>
    <div class="alert" style="margin: 0;display: none;"></div>
  </div>
</div>
