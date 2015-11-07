<?php
$reg_date = date('Y-m-d H:i:s');
?>
<script type="text/javascript">
    $(document).ready(function () {
        $("#add-subscribe-form").submit(function (event) {
            event.preventDefault();
            var data = $(this).serialize();
            var url = "<?php print api_url('save_subscribe'); ?>";
            var post = $.post(url, data);
            post.done(function (data) {
                mw.reload_module("subscribe");
                mw.reload_module("subscribe/list");
            });
        });
    });
</script>

<!--<form class="form-horizontal" id="add-subscribe-form">-->
<!--    <div class="form-group">-->
<!--        <div class="col-sm-10">-->
<!--            <input type="text" class="form-control" id="inputName3" name="name" placeholder="Full Name">-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <div class="col-sm-10">-->
<!--            <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <input type="hidden" name="active" class="" value="1">-->
<!--        <input type="hidden" name="reg_date" class="" value="--><?php //echo $reg_date?><!--">-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <div class="col-sm-10">-->
<!--            <input type="submit" name="submit" value="Save" class="btn btn-default"/>-->
<!--        </div>-->
<!--    </div>-->
<!--</form>-->
<div class="single-widget">
    <h2>Newsletter</h2>
    <form id="add-subscribe-form" class="searchform">
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Full Name" required="required">
            <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Your email address" required="required">
            <input type="hidden" name="active" class="" value="1">
            <input type="hidden" name="reg_date" class="" value="<?php echo $reg_date?>">
<!--            <input type="submit" name="submit" value="Subscribe" class="btn btn-default"/>-->
            <button type="submit" name="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
        </div>

        <p>Get the most recent updates from <br />our site and be updated your self...</p>
    </form>
</div>