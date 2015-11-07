<script type="text/javascript">
    $(document).ready(function () {
        $(".mw-subscribe-form").submit(function (event) {
            event.preventDefault();
            var data = $(this).serialize();
            var url = "<?php print api_url('save_subscribe'); ?>";
            var post = $.post(url, data);
            post.done(function (data) {
				Alert('Thank you for subscribing');
                mw.reload_module("subscribe");
            });
        });
    });
</script>

<div class="mw-subscribe-form-holder">
  <!--<h2 class="mw-subscribe-form-title">Subscribe to Newsletter</h2>-->
  <form class="mw-subscribe-form">
    <input type="email" class="mw-ui-field mw-subscribe-form-email" name="email" placeholder="Your email address" required="required">
    <button type="submit" name="submit" class="btn btn-default mw-subscribe-form-btn">Submit</button>
  </form>
</div>
