<?php

/*

type: layout

name: flexslider

description: Default testimonials template

*/
 


  
   ?>

<h3><span class="cust">Testimonials</span></h3>

<?php if ($data): ?>

<!-- Hook up the FlexSlider--> 
<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider();
		});
</script>
<div class="flexslider" >
  <ul class="slides">
    <?php 
  $i = 0;
  foreach ($data as $item): ?>
    <li>
      <div style="height:auto; width:100%; background:#FFF;" >
        <span class="vsf-item-header"><span style=" <?php if(isset($item['client_picture']) and $item['client_picture'] != ''){ ?>background-image:url('<?php print $item['client_picture']; ?>');  <?php } ?>"  > </span></span>
        <p class="p" style="color:#444; font-style:italic; padding:4px; text-align:center; width:100%;">
          <?php

                print character_limiter($item['content'], $limit, '...');

              ?>
        </p>
        <p class="p" style="color:#00718f; padding:8px; text-align:center; width:100%;"><?php print $item['name'] ?> |
          <?php if(isset($item['client_role']) and $item['client_role'] != ''){ ?>
          <?php print $item['client_role']; ?> |
          <?php } ?>
        </p>
        <p class="p" style="color:#000; font-style:italic; padding:4px; text-align:center; width:100%;">
          <?php if(isset($item['client_company']) and $item['client_company'] != ''){ ?>
          <?php if(isset($item['client_website']) and $item['client_website'] != ''){ ?>
          <?php } ?>
          <a href="<?php print $item['client_website']; ?>"><?php print $item['client_company']; ?> </a>
          <?php } ?>
        </p>
      </div>
    </li>
    <?php 
  $i++;
  endforeach; ?>
  </ul>
</div>
<?php endif; ?>
<?php if(count($data) > 1): ?>
<?php endif; ?>
