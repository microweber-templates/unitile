<?php

/*

type: layout

name: default

description: default

*/

?>
<div class="team-card-holder">
  <?php
$count = 0;
foreach($data as $slide){
    $count++;
    ?>
  <div class="team-card-item" style="background-image: url(<?php print thumbnail($slide['file'],1000);?>);">
    <?php /*  <img src="<?php print thumbnail($slide['file'],1000);?>" alt=""> */ ?>
    <div class="portfolio_description"> <span class="tctitle" ><?php print $slide['name'];?></span> <br>
      <span class="tcposition"> <?php print $slide['url'];?></span> </div>
  </div>
  <!-- /.row -->
  <?php } ?>
</div>
<style>


.team-card-item{
    position: relative;
    float: left;
    width:25%;
    border: 1px solid white;
    height:375px;
    background-size: cover;
    background-position: center top;
}

    .portfolio_description {
        position:absolute;
        width:100%;
        bottom:0;
        background-color: white;
        max-width: 200px;
        left: 0;
        max-height: 375px;
		padding:12px;
    }
    .tctitle{
        color: #ef3943;
    font-family: "CircularStd-Book";
    font-size: 15px;
    text-transform: uppercase;
    }
    .tcposition{
        color: #black;
        font-family: 'CircularStd-Book';
        font-size: 16px;
    }
</style>
