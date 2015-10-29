<?php
only_admin_access();
$reg_date = date('Y-m-d H:i:s');
?>
<link rel="stylesheet" href="<?php print $config['url_to_module']; ?>css/subscribe.css" />
<script src="<?php print $config['url_to_module']; ?>js/subscribe.js"></script>
<script>
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
<div class="mw-module-admin-wrap">
    <div class=" module module-admin-modules-info " id="module-admin-modules-info-admin-689192197" data-parent-module="comments" data-parent-module-id="mw-main-module-backend" data-type="admin/modules/info">
        <div id="mw-modules-toolbar">
            <div class="mw-ui-row-nodrop">
                <div class="mw-ui-col">
                    <img src="<?php print $config['url_to_module']; ?>/subscribe.png" alt="">
            <span class="module-toolbar-info-description"> Subscribe Users</span> </div>
                <div class="mw-ui-col mw-modules-toolbar-back-icon">
                    <a title="Back" href="<?php echo site_url()?>admin/view:modules" class="pull-right">
                        <span class="mw-icon-back"></span>
                        <span>Back</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form id="add-subscribe-form">
        <div class="form-group inline">
            <div class="form-control">
                <input type="text" name="name" class="mw-ui-field" placeholder="Full Name">
            </div>
            <div class="form-control">
                <input type="text" name="email" class="mw-ui-field" placeholder="Email">
            </div>
        <input type="hidden" name="active" class="mw-ui-field" value="1">
        <input type="hidden" name="reg_date" class="mw-ui-field" value="<?php echo $reg_date?>">
        <input type="submit" name="submit" value="Save" class="mw-ui-btn mw-ui-btn-info"/>
    </form>
</div>