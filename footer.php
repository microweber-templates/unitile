
<div id="footer">
  <div id="footer-top-wrapper">
  <span onclick="mw.tools.scrollTo('#menu');" id="bttop"></span>
    <div class="container">
      <div  rel="global" field="bootstrap3-site-footer">
        <div class="mw-row" style="height: auto;" id="element_1445281031537">
          <div class="mw-col" style="width: 55%; height: auto;">
            <div class="mw-col-container">
              <div class="footer-menu-table">
                    <span><a href="<?php print site_url(); ?>">Home</a></span>
                    <span><a href="<?php print site_url(); ?>shop">Products</a></span>
                    <span><a href="<?php print site_url(); ?>applications">Applications</a></span>
                    <span><a href="<?php print site_url(); ?>network">Network</a></span>
                    <span><a href="<?php print site_url(); ?>news">News</a></span>

                    <span><a href="<?php print site_url(); ?>about-us">About Us</a></span>
                    <span><a href="<?php print site_url(); ?>manifacturing-unit">Manufacturing Unit</a></span>
                    <span><a href="<?php print site_url(); ?>clients">Clients</a></span>
                    <span><a href="<?php print site_url(); ?>careers">Career</a></span>
                    <span><a href="<?php print site_url(); ?>contacts">Contact Us</a></span>
              </div>
              <br>
            </div>
          </div>
          <div class="mw-col" style="width: 25%; height: auto;">
            <div class="mw-col-container">
            <div>
                <h4  style="margin-bottom: 0px;
"><span class="" style="font-size: 20px;"><font face="Helvetica" color="#ffffff">Subscribe to Newsletter</font></span></h4>
                <hr  style="margin-top: 2px;" id="planehr">
              </div>
              <module type="subscribe" id="subscribe_footer"  />
            </div>
          </div>
          <div class="mw-col" style="width: 20%; height: auto;">
            <div class="mw-col-container">
              <div>
                <h4  style="margin-bottom: 0px;
"><span class="" style="font-size: 20px;"><font face="Helvetica" color="#ffffff">Get Social</font></span></h4>
                <hr   style="margin-top: 2px;" id="arrhr">
              </div>
              <module type="social_links" id="social_links_footer" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="footer-bottom-wrapper">
    <div class="container">
      <div id="footer-bottom">
        <div class="row">
          <div class="col-md-12">
            <center>
              <div class="edit" rel="footer" field="footer-copyright" style="color:white; font-size:12px;">&copy; <span class="unselectable" contentEditable="false"><?php print date('Y'); ?></span> Unitileindia. All Rights Reserved | Designed and Devoloped by <a href="#"><img src="{TEMPLATE_URL}img/logo-design.png"></a></div>
              <div class="col-md-4"></div>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php if(!is_logged()) { ?>
<?php include template_dir(). "modals.php"; ?>
<?php  } ?>
</body></html>