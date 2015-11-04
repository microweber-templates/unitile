<?php include template_dir(). "header.php"; ?>


<section id="content" class="shop-page shop-page-inner">


        <?php include template_dir(). 'layouts' . DS."shop_top.php"; ?>

  <div class="product-inner-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 sidebar-lined-border-right">
          <h2 class="edit"  field="title" rel="content">Product inner page</h2>
          <hr>
          <div class="edit"  field="content" rel="content">
            <div class="mw-row">
              <div class="mw-col" style="width:50%">
                <div class="mw-col-container">
                  <module type="pictures" rel="content" template="product_gallery" />
                </div>
              </div>
              <div class="mw-col" style="width:50%">
                <div class="mw-col-container">
                  <div class="product-description">
                    <div class="edit"  field="content_body" rel="content">
                      <p class="element">This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it anywhere on the site. Get creative &amp; <strong style="font-weight: 600">Make Web</strong>.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="edit"  field="product_tabs" rel="content">
            <module type="tabs"  />
          </div>
        </div>
        <!------------ Sidebar -------------->
        <div class="col-sm-4">
          <div class="sidebar-boxes-wrapper">
            <module type="shop/cart_add" template="sidebar" />
            <div class="sidebar-boxes-spacer"></div>
            <module type="menu" template="collaterals" menu-name="collaterals-<?php print CONTENT_ID ?>" />
            <div class="sidebar-boxes-spacer"></div>
            <module type="staticbox/download"  />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include template_dir(). "footer.php"; ?>
