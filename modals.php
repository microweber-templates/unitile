<script>
    $(document).ready(function () {
       LoginTabs = mw.tabs({
            nav: '.login-modal-content .login-modal-tab-link',
            tabs: '.login-modal-content .login-modal-tab'
        });

        LoginTabs.set(0);
    });
</script>

<div class="login-overlay">




  <div class="login-modal-content">

   <div id="cstlogintop" ></div>
   <div id="cstlogintoptitle">Do not have an account? <span onclick="LoginTabs.set(1);">Register</span></div>


  <div class="login-modal-container">

    <div class="login-modal-content-tabs-holder">
<div class="lm-left">      <div class="login-modal-content-tabs-links-holder"> <a href="javascript:;" class="login-modal-tab-link">Login</a> <a href="javascript:;" class="login-modal-tab-link">Register</a> </div>
        <div class="login-modal-tab">
          <module type="users/login" template="modal" />
        </div>
        <div class="login-modal-tab">
          <h2 class="tab-title">Register</h2>
          <module type="users/register" template="modal" />
        </div>
        <div class="login-modal-tab">
          <h2 class="tab-title">Forgot password</h2>
          <module type="users/forgot_password" template="modal" />
        </div></div>



      <div class="lm-right">  <module type="users/login" template="social" />  </div>
    </div>
  </div>
  </div>
</div>
