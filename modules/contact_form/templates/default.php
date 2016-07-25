<?php

/*

  type: layout

  name: newsletter

  description: newsletter template for Contact form
  
 


*/

?>

<form class="c-form" style="padding-top: 11px;" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>">
  <input type="hidden" name="for_id" value="<?php print $params['id'] ?>" />
  <div class="message-sent" id="msg<?php print $form_id ?>" style="display:none; color:white; background:#090; padding:10px;"> <span class="message-sent-icon message-sent-icon-orange"></span>
    <p>Your message has been sent</p>
  </div>
  <script>
                        $(document).ready(function(){
                            $(".s-field").on('click', function(e){
                                if(e.target.nodeName != 'INPUT'){
                                    $('input,textarea', this).focus();
                                }
                            });
                            $('.s-field input,.s-field textarea').on('focus blur', function(e){
                                $(this.parentNode)[e.type=='focus'?'addClass':'removeClass']('focused');
                                $(this.parentNode)[this.value.replace(/ /g,'') != ''?'addClass':'removeClass']('hasValue');
                            });


                            $(".c-form").on('submit', function(){
                               var data = {};
                               $(".c-form input,.c-form textarea").each(function(){
                                    data[this.name] = this.value;
                               });
                            });
                        });
                    </script>
  <div class="mw-ui-row">
    <div class="mw-ui-col">
      <div class="mw-ui-col-container">
        <div class="s-field"> <span class="s-field-title">First Name</span>
          <input type="text" name="First Name" required="required">
        </div>
      </div>
    </div>
    <div class="mw-ui-col">
      <div class="mw-ui-col-container">
        <div class="s-field"> <span class="s-field-title">Last Name</span>
          <input type="text" name="Last Name" required="required">
        </div>
      </div>
    </div>
  </div>
  <div class="s-field"> <span class="s-field-title">Email</span> <span class="s-field-description">This Can Be Change Later</span>
    <input type="email" name="Email" required="required">
  </div>
  <div class="s-field s-area"> <span class="s-field-title">Message</span>
    <textarea name="Message" required="required"></textarea>
  </div>
  <?php if(get_option('disable_captcha', $params['id']) !='y'): ?>
  <label class="custom-field-title">
    <?php _e("Enter Security code"); ?>
  </label>
  <div class="mw-ui-row captcha-holder">
    <div class="mw-ui-col">
      <input name="captcha" type="text" required class="mw-captcha-input"/>
    </div>
    <div class="mw-ui-col"> <img onclick="mw.tools.refresh_image(this);" class="mw-captcha-img" id="captcha-<?php print $form_id; ?>" src="<?php print api_link('captcha') ?>?id=<?php print $params['id'] ?>" /> </div>
    <div class="mw-ui-col"> <span class="ico irefresh" onclick="mw.tools.refresh_image(mwd.getElementById('captcha-<?php print $form_id; ?>'));"></span> </div>
  </div>
  <?php endif; ?>
  <div class="cform-footer"> <i> hereby certify that the information above is true and accurate.</i>
    <button type="submit" class="csubmit" id="contact_submit">&nbsp;</button>
  </div>
</form>
