<?php include template_dir(). "header.php"; ?>

<section id="content" class="shop-page shop-page-inner">
  <?php include template_dir(). 'layouts' . DS."shop_top.php"; ?>
  <div class="margin-spacer-element-20"></div>
  <div class="product-inner-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 xsidebar-lined-border-right" data-mw=main>
          <div class="edit"  field="content" rel="categoty_content<?php print category_id(); ?>" rel-id="<?php print category_id(); ?>">
            <div class="mw-row">
              <div class="mw-col" style="width:60%">
                <div class="mw-col-container">
                  <module type="pictures"  template="product_gallery" id="category-pic-<?php print category_id(); ?>" />
                </div>
              </div>
              <div class="mw-col" style="width:40%">
                <div class="mw-col-container">
                  <h2 class="edit product-inner-page-title">Category page</h2>
                  <hr>
                  <div class="product-description">
                    <p class="element">This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it anywhere on the site. Get creative &amp; <strong style="font-weight: 600">Make Web</strong>.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <!------------ Sidebar -------------->
        <div class="col-sm-4 sidebar-lined-border-left"> 
          <?php $data_fields_values = mw()->data_fields_manager->get_values('rel_type=categories&rel_id='.category_id()); ?>
          <div class="sidebar-boxes-wrapper">
               <div class="edit"  field="product_sidebar_category" rel="caregory_<?php print category_id() ?>">
              <div class="sidebar-boxes-spacer"></div>
              <module type="menu" template="collaterals" menu-name="collaterals" />
              <div class="sidebar-boxes-spacer"></div>
              <module type="staticbox" id="staticbox_<?php print category_id() ?>"  /> 
              <div class="sidebar-boxes-spacer"></div>
              <module type="staticbox" template="presence" id="staticbox_presence_<?php print category_id() ?>"  />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include template_dir(). "footer.php"; ?>
