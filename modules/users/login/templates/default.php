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
          <div class="control-group form-group">
            <input class="btn pull-right btn-main-action" type="submit" value="<?php _e("Login"); ?>" />
          </div>
        </div>
        <div class="mw-ui-col" style="width: 300px">
          <div class="mw-ui-col-container">
            <div class="social-login">
              <?php
        # Login Providers
        $facebook = get_option('enable_user_fb_registration','users') =='y';
        $twitter = get_option('enable_user_twitter_registration','users') =='y';
        $google = get_option('enable_user_google_registration','users') =='y';
        $windows = get_option('enable_user_windows_live_registration','users') =='y';
        $github = get_option('enable_user_github_registration','users') =='y';
		$linkedin = get_option('enable_user_linkedin_registration','users') =='y';


        if($facebook or $twitter or $google or $windows or $github){
           $have_social_login = true;
        }
        else{
          $have_social_login = false;
        }
    ?>
              <?php if($have_social_login){ ?>
              <h5>
                <?php _e("Login with"); ?>
                :</h5>
              <?php } ?>
              <?php if($have_social_login){ ?>
              <ul class="social-logins-btns">
                <?php } ?>
                <?php if($facebook): ?>
                <li class="mw-signin-with-facebook-li"><a href="<?php print api_link('user_social_login?provider=facebook') ?>" class="mw-signin-with-facebook"><span class="mw-icon-social-facebook"></span>Facebook</a></li>
                <?php endif; ?>
                <?php if($twitter): ?>
                <li class="mw-signin-with-twitter-li"><a href="<?php print api_link('user_social_login?provider=twitter') ?>" class="mw-signin-with-twitter"><span class="mw-icon-social-twitter"></span>Twitter</a></li>
                <?php endif; ?>
                <?php if($google): ?>
                <li class="mw-signin-with-google-li"><a href="<?php print api_link('user_social_login?provider=google') ?>" class="mw-signin-with-google"><span class="mw-icon-social-google"></span>Google+</a></li>
                <?php endif; ?>
                <?php if($github): ?>
                <li class="mw-signin-with-github-li"><a href="<?php print api_link('user_social_login?provider=github') ?>" class="mw-signin-with-github"><span class="mw-icon-social-github"></span>Github</a></li>
                <?php endif; ?>
                <?php if($linkedin): ?>
                <li class="mw-signin-with-linkedin-li"><a href="<?php print api_link('user_social_login?provider=linkedin') ?>" class="mw-signin-with-linkedin"><span class="mw-icon-social-linkedin"></span>Linkedin</a></li>
                <?php endif; ?>
                <?php if($have_social_login){ ?>
              </ul>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <?php endif;  ?>
</div>
