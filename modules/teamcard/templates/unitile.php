<?php

/*

type: layout

name: unitile

description: unitile

*/

?>

<div class="team-card-holder-unitile">
  <?php
$count = 0;
foreach($data as $slide){
    $count++;
    ?>
  <div class="team-card-item" style="background-image: url(<?php print thumbnail($slide['file'],1000);?>);">
    <div class="team-card-item-description"> <span class="tctitle" ><?php print $slide['name'];?></span> <br>
      <span class="tcposition"> <?php print $slide['url'];?></span> </div>
  </div>
  <?php } ?>
</div>
