<?php

/*

type: layout

name: Full

description: Default testimonials template

*/
 


  
   ?>

  <script>
    mw.require('http://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js', true);

    $(document).ready(function(){
        $('.testimonials-masonry').masonry({
            gutter:20

        });
    })
  </script>
   <style>

   .tmm-item{
       width:23%;
        box-shadow: 0 0 10px #ccc;
        overflow: hidden;
        margin: 0 0 20px;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
   }

   .tmm-header{
        height: 105px;
        overflow: visible;
        position: relative;
        margin-bottom: 40px;
        background: #b44c4e url(<?php print template_url(); ?>mw_static/icon.png) no-repeat 10px 90%;
   }

   .tmm-2 .tmm-header{background-color: #349393;}
   .tmm-3 .tmm-header{background-color: #55ce87;}
   .tmm-4 .tmm-header{background-color: #ef8b5e;}


   .tmm-header span{
       display: block;
       position: relative;
       margin: 0 auto;
       top:7px;
       width: 120px;
       height: 120px;
       border: solid 2px white;
       background-position: center;
       background-size: cover;
       border-radius: 120px;
   }

   .tmm-content{
       padding: 0 10px 10px;
       text-align: center;
   }

   .tmm-description{
       color:#444; font-style:italic; padding:4px; text-align:center; width:100%;
   }
   .tmm-name-info{
       color: #00718f;
       padding: 8px 0;
   }

   </style>

<div class="testimonials-masonry">
  <?php if ($data): ?>
  <?php
  $i = 0;
  foreach ($data as $item):

  ?>

  <?php

  $rand = rand(1,4);

   ?>

  <div class="tmm-item tmm-<?php print $rand; ?>">
    <div class="tmm-header">
        <span <?php if(isset($item['client_picture']) and $item['client_picture'] != ''){ ?> style="background-image:url('<?php print $item['client_picture']; ?>')"   <?php } ?> ></span>
    </div>
    <div class="tmm-content">
        <div class="tmm-description">
            <?php print character_limiter($item['content'], 5000, '...');  ?>
        </div>
        <div class="tmm-name-info"><?php print $item['name'] ?>
        <?php if(isset($item['client_role']) and $item['client_role'] != ''){ ?>
                    | <?php print $item['client_role']; ?>
                <?php } ?>
        </div>

      <?php if(isset($item['client_company']) and $item['client_company'] != ''){ ?>
                    <?php if(isset($item['client_website']) and $item['client_website'] != ''){ ?>

                    <?php } ?>
                    <a href="<?php print $item['client_website']; ?>"><?php print $item['client_company']; ?> </a>
                <?php } ?>
    </div>
  </div>





  <?php
  $i++;
  endforeach;

  ?>
  <?php endif; ?>
</div>
<?php if(count($data) > 1): ?>
<?php endif; ?>
