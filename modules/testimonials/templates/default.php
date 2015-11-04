<?php

/*

type: layout

name: Default

description: Default testimonials template

*/
 

$limit = 1000;
  
   ?>

<div class="testimonials">
  <?php if ($data): ?>
  <?php 
  $i = 0;
  foreach ($data as $item): ?>
  <div> <i class="fa fa-fw fa-quote-left"></i>
    <center>
      <p class="center">
        <?php

                print character_limiter($item['content'], $limit, '...');

              ?>
      </p>
    </center>
    <i class="fa fa-fw fa-quote-right pull-right"></i>
    <center>
      <p><small><strong><?php print $item['name'] ?>
        <?php if(isset($item['client_company']) and $item['client_company'] != ''){ ?>
        - <?php print $item['client_company'] ?>
        <?php } ?>
        </strong></small>
        <?php if(isset($item['client_role']) and $item['client_role'] != ''){ ?>
        <br>
        <small><cite title=""><?php print $item['client_role']; ?> </cite></small>
        <?php } ?>
      </p>
    </center>
  </div>
  <?php 
  $i++;
  endforeach; ?>
  <?php endif; ?>
</div>
<?php 
/*

<div id="rotator_<?php print $params['id'] ?>
" class="testimonials-wrapper">
<div class="carousel-controls" style="margin-right: 18px;text-align: right;"> <a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a> <a class="next" href="#testimonials-carousel" data-slide="next"><i class="fa fa-chevron-right"></i></a> </div>
<div class="section-content">
  <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
    <div class="carousel-inner">
      <?php if ($data): ?>
      <?php 
  $i = 0;
  foreach ($data as $item): ?>
      
      <!--//item-->
      <div class="item <?php if ($i == 0): ?>active <?php endif; ?>">
        <div class="quote mw-quote">
          <div class="mw-ui-row">
            <div class="mw-ui-col" style="width: 33%;">
              <div class="mw-ui-col-container">
                <div class="mw-nameimages"> <span <?php if(isset($item['client_picture']) and $item['client_picture'] != ''){ ?> style="background-image:url('<?php print $item['client_picture']; ?>')"   <?php } ?> ></span> </div>
              </div>
            </div>
            <div class="mw-ui-col">
              <div class="mw-ui-col-container">
                <div class="mw-nametext">
                  <h1><?php print $item['name'] ?></h1>
                  <p><b>
                    <?php if(isset($item['client_role']) and $item['client_role'] != ''){ ?>
                    <?php print $item['client_role']; ?> |
                    <?php } ?>
                    <?php if(isset($item['client_company']) and $item['client_company'] != ''){ ?>
                    <?php if(isset($item['client_website']) and $item['client_website'] != ''){ ?>
                    <?php } ?>
                    <a href="<?php print $item['client_website']; ?>"><?php print $item['client_company']; ?> </a>
                    <?php } ?>
                    </b></p>
                  <p style="text-align: center;">
                    <?php

                print character_limiter($item['content'], $limit, '...');

              ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
  $i++;
  endforeach; ?>
      <?php endif; ?>
    </div>
    <!--//carousel-inner--> 
  </div>
  <!--//testimonials-carousel--> 
  
</div>
</div>
<?php if(count($data) > 1): ?>
<?php endif; ?>
*/