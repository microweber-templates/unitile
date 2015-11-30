<?php

/*

  type: layout
  content_type: static
  name: Home
  position: 11
  description: Home layout

*/

?>
<?php include template_dir(). "header.php"; ?>
<div class="jumbotron edit">
  <div class="container">
    <div class="row">
      <div class="baner-text">
        <h1>Evolving workplaces, evolve nations. Stellar Raised access floor systems</h1>
        <p>Raised floor installation for emergency control rooms, telecommunication central offices, operation control centers has become essential for heavy duty, maintenance-free and a durable structural element of the facility. Incorporation of Raised flooring access systems, and our cavalry of UNITILE ensures a safe and better environment to accommodate the needs of tomorrow. The combination of a wide range of access panels in conjunction with an exquisite range provides the most economic series of performance grades, capable of performing in the most demanding applications at different areas of businesses.</p>      
        <p class="pull-right margin-none"><a class="btn btn-primary btn-sm" href="<?php print site_url('shop') ?>" role="button">»</a></p>
      </div>
    </div>
  </div>
</div>
<div class="welcome" id="welcome-layout"  rel="page" field="content">
  <div class="container">
    <div class="mw-row row clearfix">
      <div class="mw-col home-title col-md-12 edit">
        <center>
          <h2>Welcome to <strong>UNITILE</strong></h2>
          <span class="title-under"></span>
          <div class="center">United Group, founded in 1994, is name to reckon within the field of modern Construction & <br />Building Materials industry with its vast presence established in India and spread over 
          Middle East & South East Asia.</div>
        </center>
      </div>
    </div>
    <div class="mw-row row clearfix narrow-font">
      <div class="col-md-4 col-sm-4">
        <div class="mw-col-container">
          <div class="element">
            <h3 class="home-title"><i class="fa fa-fw about-icon pull-left"></i><span class="bordered-bottom"> ABOUT US </span></h3>
            <p> UNITILE is name to reckon within the field of modern Construction & Building Materials industry in India. Since the inception in 1994, over two decades, Comprehensive experience has been the key for UNITILE to successful and efficacious flooring solutions for the modernised world. Providing exceptional product quality , industry leading delivery times and an unsurpassed technical support services has backed up our revolution for modern structure of today’s data centre ...</p>
            <div class="btn-group pull-right">
              <button  type="button" class="btn btn-default" href="#">View details  &nbsp;&nbsp;&nbsp;<span class="fa fa-chevron-right"></span></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="mw-col-container">
          <div class="element">
            <h3 class="home-title"><i class="fa fa-fw why-icon pull-left"></i><span class="bordered-bottom"> WHY US</span></h3>
            <div class="row">
              <div class="col-sm-4">
                <img src="{TEMPLATE_URL}img/whyus.jpg" class="img-responsive">
              </div>
              <div class="col-sm-8 padding-left-no">
                <ul class="front">
                  <li>Meticulously tested and researched products by in-house team.</li>
                  <li>Innovation and complete customer satisfaction is our driving force.</li>
                  <li>Exemplary vision of armed professionals ensuring uncompromised expertise solutions.</li>
                  <li>Nonpareil technical support services.</li>
                </ul>
              </div>
              <div class="btn-group pull-right">
                <a  type="button" class="btn btn-default" href="<?php print site_url('about-us') ?>">View details  &nbsp;&nbsp;&nbsp;<span class="fa fa-chevron-right"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="mw-col-container">
          <div class="element">
            <h3 class="home-title"><i class="fa fa-fw testimonials-icon pull-left"></i><span class="bordered-bottom"> TESTIMONIALS </span></h3>
            <module type="testimonials" />
			<?php 
			
			/*<div class="testimonials">
              <i class="fa fa-fw fa-quote-left"></i> 
              <center>
                <p class="center">Cancelbots or other computer <br> programs that have the purpose <br> or effect of disabling,</p>
              </center>
                <i class="fa fa-fw fa-quote-right pull-right"></i>
              <center> 
                <p><small><strong>Cynthia Whorton-BCIITV.com</strong></small><br><small><cite title="Source Title">Opetation Manager</cite></small></p>
              </center>
            </div>*/ 
			
			?>
            <div class="btn-group pull-right">
              <button  type="button" class="btn btn-default" href="#">View details  &nbsp;&nbsp;&nbsp;<span class="fa fa-chevron-right"></span></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Start Video Layout -->
<div class="video edit" id="video-layout"  rel="page" field="content">
  <div class="container">
    <div class="mw-row row">
      <div class="col-md-6 col-sm-6 right-border">
        <h3>UNITILE CORPORATE PROFILE</h3>
        <a href="#">
          <img src="{TEMPLATE_URL}img/video.jpg" class="img img-responsive">
        </a>
      </div>
      <div class="col-md-6 col-sm-6">
        <h3>FACTORY UNIT WALKTHROUGH</h3>
        <a href="#">
          <img src="{TEMPLATE_URL}img/video2.jpg" class="img img-responsive">
        </a>
      </div>
    </div>
  </div>
</div>
<!-- End Video Layout -->
<!-- Star Products Layout -->



<?php include(__DIR__.DS.'home_products.php'); ?>  

  
<!-- End Products Layout -->
<!-- Start Project Layout -->
<div class="container edit" id="project-layout"  rel="page" field="content">
  <div class="container">
    <div class="mw-row">
      <div class="col-md-8 col-sm-8" >
        <h3>PROJECT EXECUTED</h3>
        <div class="col-sm-12 padding-left-no padding-bottom-30">
          <span>
            <img src="{TEMPLATE_URL}img/proj_1.png" class="img img-responsive" >
          </span>
        </div>
        <module type="posts" template="projects" id="projects_list_galery_home" limit=9 hide_paging=true />
        <?php
		
		/*
		<div class="col-md-12 col-sm-12 padding-left-no" >
          <div class="col-md-4 col-sm-4 padding-bottom-30 box">
            <img src="{TEMPLATE_URL}img/project-img_1.jpg" class="img img-responsive">
          </div>
          <div class="col-md-4 col-sm-4 padding-bottom-30">
            <img src="{TEMPLATE_URL}img/project-img_2.jpg" class="img img-responsive">
          </div>
          <div class="col-md-4 col-sm-4 padding-bottom-30">
            <img src="{TEMPLATE_URL}img/project-img_3.jpg" class="img img-responsive">
          </div>
        </div>
        <div class="col-md-12 col-sm-12 padding-left-no">
          <div class="col-md-4 col-sm-4">
            <img src="{TEMPLATE_URL}img/project-img_4.jpg" class="img img-responsive">
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="{TEMPLATE_URL}img/project-img_5.jpg" class="img img-responsive">
          </div>
          <div class="col-md-4 col-sm-4">
            <img src="{TEMPLATE_URL}img/project-img_6.jpg" class="img img-responsive">
          </div>
        </div>
		*/
		
		 ?>
      </div>
      <div class="col-md-4 col-sm-4">
        <h3>CERTIFICATIONS</h3>
        <div class="col-sm-12 padding-left-no">
          <img src="{TEMPLATE_URL}img/proj_2.png" class="img img-responsive">
        </div>
        <div class="col-md-12 col-sm-12" >
        <div class="cslider">
            <div><img src="{TEMPLATE_URL}img/sertification.png" >     </div>
            <div><img src="{TEMPLATE_URL}img/sertification.png" >     </div>
        </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Project Layout -->
<!-- Start Client Layout  -->
<div class="container edit" id="clients-layout"  rel="page" field="content">
  <div class="container">
    <center>
      <h3>CLIENTS</h3>
      <span class="clients-title-under"></span>
    </center>

       <div class="xslider">
        <div><img src="{TEMPLATE_URL}img/clients_1.jpg" class="img img-responsive"> </div>
        <div><img src="{TEMPLATE_URL}img/clients_2.jpg" class="img img-responsive"> </div>
        <div><img src="{TEMPLATE_URL}img/clients_3.jpg" class="img img-responsive"> </div>
        <div><img src="{TEMPLATE_URL}img/clients_3.jpg" class="img img-responsive"> </div>
        <div><img src="{TEMPLATE_URL}img/clients_1.jpg" class="img img-responsive"> </div>
        <div><img src="{TEMPLATE_URL}img/clients_2.jpg" class="img img-responsive"> </div>
        <div><img src="{TEMPLATE_URL}img/clients_3.jpg" class="img img-responsive"> </div>
        <div><img src="{TEMPLATE_URL}img/clients_3.jpg" class="img img-responsive"> </div>
       </div>


  </div>
</div>
<!-- End Client Layout -->
<?php include template_dir().  "footer.php"; ?>
