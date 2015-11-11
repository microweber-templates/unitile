<?php

/*

type: layout

name: Default

description: Default register template

*/

?>
<?php

$coutries = mw()->forms_manager->countries_list();
 
?>
<script  type="text/javascript">
    mw.require('forms.js', true);
    mw.require('url.js', true);
    $(document).ready(function(){
	    mw.$('.user_registration_form_holder').submit(function() {
            mw.form.post(mw.$('.user_registration_form_holder') , '<?php print site_url('api') ?>/user_register', function(){
                mw.response('#register_form_holder',this);
                if(typeof this.success !== 'undefined'){
                   mw.form.post(mw.$('.user_registration_form_holder') , '<?php print site_url('api') ?>/user_login', function(){
                      mw.load_module('users/login', '#<?php print $params['id'] ?>');
					  window.location.href = window.location.href;
                   });
                }
        	 });
        return false;
       });
    });
</script>

<div class="user-section-styles">
  <div class="module-register ">
    <div id="register_form_holder">
      <form   method="post" class="user_registration_form_holder">
        <?php print csrf_form(); ?> .
        <div class="mw-ui-row">
          <div class="mw-ui-col">
            <div class="mw-ui-col-container">
              <div class="control-group form-group">
                <div class="controls">
                  <div class="has-feedback has-feedback-left">
                    <input type="text" class="large-field form-control"  name="first_name" placeholder="First Name">
                    <i class="glyphicon glyphicon-user form-control-feedback"></i></div>
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <div class="has-feedback has-feedback-left">
                    <input type="text" class="large-field form-control"  name="email" placeholder="Email ID">
                    <i class="glyphicon glyphicon-envelope form-control-feedback"></i></div>
                </div>
              </div>
              <?php  if(!empty($coutries)){    ?>
              <div class="control-group form-group">
                <div class="has-feedback has-feedback-left">
                  <select name="attributes[country]" class="field-full form-control mw-checkout-fields">
                    <option value="">
                    <?php _e("Choose country"); ?>
                    </option>
                    <?php foreach($coutries  as $item): ?>
                    <option value="<?php print $item ?>" ><?php print $item ?></option>
                    <?php endforeach ; ?>
                  </select>
                  <i class="glyphicon glyphicon-globe form-control-feedback"></i> </div>
              </div>
              <?php  }   ?>
              <div class="control-group form-group">
                <div class="controls">
                  <div class="has-feedback has-feedback-left">
                    <input type="text" class="large-field form-control"  name="attributes[phone]" placeholder="Phone">
                    <i class="glyphicon glyphicon-phone form-control-feedback"></i></div>
                </div>
              </div>
            </div>
          </div>
          <div class="mw-ui-col">
            <div class="mw-ui-col-container">
              <div class="control-group form-group">
                <div class="controls">
                  <div class="has-feedback has-feedback-left">
                    <input type="text" class="large-field form-control"  name="last_name" placeholder="Last Name">
                    <i class="glyphicon glyphicon-user form-control-feedback"></i></div>
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <div class="has-feedback has-feedback-left">
                    <input type="password" class="large-field form-control" name="password" placeholder="<?php _e("Password"); ?>">
                    <i class="glyphicon glyphicon-asterisk form-control-feedback"></i></div>
                </div>
              </div>
              <?php  if(!empty($coutries)){    ?>
              <div class="control-group form-group">
                <div class="controls">
                  <div class="has-feedback has-feedback-left">
                    <input type="text" class="large-field form-control"  name="attributes[city]" placeholder="City">
                    <i class="glyphicon glyphicon-home form-control-feedback"></i></div>
                </div>
              </div>
              <?php  }   ?>
              <div class="control-group form-group">
                <div class="controls">
                  <div class="has-feedback has-feedback-left">
                    <input type="text" class="large-field form-control"  name="attributes[zip]" placeholder="Zip code">
                    <i class="glyphicon glyphicon-certificate form-control-feedback"></i></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--
        
         <!--<div class="control-group form-group">
                <div class="controls">
                  <input type="text" class="large-field form-control"  name="attributes[mobile]" placeholder="Mobile No.">
                </div>
              </div> 
        
        
        <div class="control-group form-group">
          <div class="controls">
            <input type="text" class="large-field form-control"  name="attributes[company]" placeholder="Company Name">
          </div>
        </div>-->
        <div class="mw-ui-row vertical-middle captcha-row">
          <div class="mw-ui-col">
            <div class="mw-captcha-image-holder"><img class="mw-captcha-img" src="<?php print api_link('captcha') ?>" onclick="mw.tools.refresh_image(this);" /></div>
          </div>
          <div class="mw-ui-col">
            <input type="text" placeholder="Enter code" class="form-control mw-captcha-input" name="captcha">
          </div>
        </div>
        <div class="alert" style="margin: 0;display: none;"></div>
        <button type="submit" class="btn btn-default btn-main-action pull-right"><?php print $form_btn_title ?></button>
        <div style="clear: both"></div>
      </form>
    </div>
  </div>
</div>
