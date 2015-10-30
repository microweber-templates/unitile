<?php only_admin_access() ?>
<?php



$params['option-group'] = 'teamcard';
//option-group="<?php print $params['option-group']  
$custom_group = get_option('show_custom_group',$params['id']);
if($custom_group){
$params['option-group'] = $params['id'];	
}
 



$settings = get_option('settings', $params['option-group']);

$defaults = array(
    'name' => '',
    'url' => '',
    'file' => ''
);

$json = json_decode($settings, true);

if (isset($json) == false or count($json) == 0) {
    $json = array(0 => $defaults);
}

?>
<script>

    teamcards = {
        init:function(item){
            $(item.querySelectorAll('input[type="text"]')).bind('keyup', function(){
                mw.on.stopWriting(this, function(){
                    teamcards.save();
                });
            });
            var up = mw.uploader({
                filetypes:'*',
                element:item.querySelector('.teamcard-file-up')
            });
            $(up).bind('FileUploaded', function(event, data){
                item.querySelector('.teamcard-file').value = data.src
                teamcards.save();
            });
        },

        collect : function(){
            var data = {}, all = mwd.querySelectorAll('.teamcard-setting-item'), l = all.length, i = 0;
            for( ; i < l ; i++){
                var item = all[i];
                data[i] = {};
                data[i]['name'] = item.querySelector('.teamcard-name').value;
                data[i]['url'] = item.querySelector('.teamcard-url').value;
                data[i]['file'] = item.querySelector('.teamcard-file').value;

            }
            return data;
        },
        save: function(){
            mw.$('#settingsfield').val(JSON.stringify(teamcards.collect())).trigger('change');
        },


        create:function(){
            var last = $('.teamcard-setting-item:last');
            var html = last.html();
            var item = mwd.createElement('div');
            item.className = last.attr("class");
            item.innerHTML = html;
            $(item.querySelectorAll('input')).val('');
            $(item.querySelectorAll('.mw-uploader')).remove();
            last.after(item);
            teamcards.init(item);
        },

        remove: function(element){
            var txt;
            var r = confirm("Are you sure?");
            if (r == true) {
                $(element).remove();
                teamcards.save();
            }
        },



    }




    $( document ).ready(function() {
        var all = mwd.querySelectorAll('.teamcard-setting-item'), l = all.length, i = 0;
        for( ; i < l ; i++){
            if(!!all[i].prepared) continue;
            var item = all[i];
            item.prepared = true;
            teamcards.init(item);
        }
    });







$( document ).ready(function() {

    $('#teamcard-settings').sortable({
        handle: '.mw-ui-box-header',
		items: ".teamcard-setting-item",

        update: function(event, ui) {
            teamcards.save();
        }
    });
});

</script>
<script>
        $(document).ready(function(){
			 
            mw.tabs({
              nav:"#ttabnav a",
              tabs:".mw-ui-box-content .ttab"
            });

        })

    </script>

<div class="mw-ui-btn-nav mw-ui-btn-nav-tabs" id="ttabnav"> <a class="mw-ui-btn active" href="javascript:;">Team members</a> <a class="mw-ui-btn" href="javascript:;">Options</a> </div>
<div class="mw-ui-box mw-ui-box-content">
  <div class="ttab" style="display: block;">
    <input type="hidden" class="mw_option_field" name="settings" id="settingsfield"  option-group="<?php print $params['option-group']; ?>"  />
    <a class="mw-ui-btn mw-ui-btn-notification" href="javascript:teamcards.create()"><span class="mw-icon-web-social-user"></span>Add new team member</a>
    <div id="teamcard-settings" style="margin-top:5px;">
      <?php
    $count = 0;
    foreach($json as $slide){
        $count++;


        ?>
      <div class="mw-ui-box  teamcard-setting-item" id="teamcard-setting-item-<?php print $count; ?>">
        <div class="mw-ui-box-header"> <a class="pull-right" href="javascript:teamcards.remove('#teamcard-setting-item-<?php print $count; ?>');">x</a></div>
        <div class="mw-ui-box-content mw-accordion-content">
          <div class="mw-ui-row-nodrop">
            <div class="mw-ui-col">
              <div class="mw-ui-col-container">
                <label class="mw-ui-label">Name</label>
                <input type="text" class="mw-ui-field teamcard-name w100 " option-group="<?php print $params['option-group']; ?>" value="<?php print $slide['name']; ?>" >
              </div>
            </div>
            <div class="mw-ui-col">
              <div class="mw-ui-col-container">
                <label class="mw-ui-label">Position</label>
                <input type="text" class="mw-ui-field teamcard-url w100"  option-group="<?php print $params['option-group']; ?>" value="<?php print $slide['url']; ?>">
              </div>
            </div>
          </div>
          <div class="mw-ui-field-holder">
            <label class="mw-ui-label">File</label>
            <input type="hidden" class="mw-ui-field teamcard-file"  option-group="<?php print $params['option-group']; ?>" value="<?php print $slide['file']; ?>">
            <span class="mw-ui-btn teamcard-file-up"> <span class="ico iupload"></span> <span>Upload picture </span> </span> </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <div class="ttab" style="display:none">
    <?php


 
 

        ?>
    <div class="mw-ui-field-holder">
      <label class="mw-ui-label">Show custom group</label>
      <select class="mw-ui-field mw_option_field" name="show_custom_group" onchange="mw.reload_module_parent('#<?php print $params['id']; ?>');window.location.reload()" >
        <option value="1" <?php if($custom_group == 1): ?> selected="selected" <?php endif; ?> >Yes</option>
        <option value="0" <?php if($custom_group == 0): ?> selected="selected" <?php endif; ?> >No</option>
      </select>
    </div>
    <module type="admin/modules/templates" simple=true  />
  </div>
</div>
