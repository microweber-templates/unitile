<?php only_admin_access(); ?>

    <script>
        function delete_subscribe(id) {
            var are_you_sure = confirm("Are you sure?");
            if (are_you_sure == true) {
                var data = {};
                data.id = id;
                var url = "<?php print api_url('delete_subscribe'); ?>";
                var post = $.post(url, data);
                post.done(function (data) {
                    mw.reload_module("subscribe");
                    mw.reload_module("subscribe/list");
                });
            }
        }
    </script>
<?php $data = get_subscribe("no_limit=true"); ?>
<div class="mw-module-admin-wrap">
<?php if ($data): ?>
    <table width="100%" class="mw-ui-table">
        <thead>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Registration Date</th>
            <th>Active</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $item): ?>
            <tr>
                <td><?php print $item['name'] ?></td>
                <td><?php print $item['email'] ?></td>
                <td><?php print $item['reg_date'] ?></td>
                <td style="text-align: center;">
                    <?php if($item['active'] === 1):?>
                    <i class="icon mw-icon-check" style="color:green"></i>
                    <?php else :?>
                    <i class="icon mw-icon-close" style="color: red"></i>
                    <?php endif?>
                </td>
                <td style="text-align: center;">
                    <a class="mw-ui-btn mw-ui-btn-warn" href="javascript:delete_subscribe('<?php print $item['id'] ?>');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
</div>