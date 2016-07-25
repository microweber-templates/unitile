<!DOCTYPE HTML>
<html prefix="og: http://ogp.me/ns#">
<head>
<title>{content_meta_title}</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="{content_meta_title}">
<meta name="keywords" content="{content_meta_keywords}">
<meta name="description" content="{content_meta_description}">
<meta property="og:type" content="{og_type}">
<meta property="og:url" content="{content_url}">
<meta property="og:image" content="{content_image}">
<meta property="og:description" content="{og_description}">
<meta property="og:site_name" content="{og_site_name}">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php $theme_css_file = get_option("bootswatch_theme_css_file", "bootswatch_theme"); ?>
<?php if($theme_css_file == ''): ?>
<link rel="stylesheet" id="bootstrap_theme" href="<?php print template_url() ?>css/bootstrap.min.css" type="text/css" media="all">
<?php else: ?>
<link rel="stylesheet" id="bootstrap_theme" href="<?php print $theme_css_file; ?>" type="text/css" media="all">
<?php endif; ?>
<link rel="stylesheet" href="{TEMPLATE_URL}css/modern-business.css" type="text/css" media="all">
<link rel="stylesheet" href="{TEMPLATE_URL}css/boxes.css" type="text/css" media="all">
<link rel="stylesheet" href="{TEMPLATE_URL}css/teamcard.css" type="text/css" media="all">
<link rel="stylesheet" href="{TEMPLATE_URL}css/styles.css" type="text/css" media="all">
<link rel="stylesheet" href="{TEMPLATE_URL}css/ornaments.css" type="text/css" media="all">
<link rel="stylesheet" href="{TEMPLATE_URL}css/user_profile.css" type="text/css" media="all">
<link rel="stylesheet" href="{TEMPLATE_URL}css/responsive.css" type="text/css" media="all">
<link rel="stylesheet" href="{TEMPLATE_URL}font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="{TEMPLATE_URL}js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{TEMPLATE_URL}js/owl.carousel.2.0.0-beta.2.4/assets/owl.carousel.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="{TEMPLATE_URL}js/owl.carousel.2.0.0-beta.2.4/owl.carousel.min.js"></script>
<script type="text/javascript" src="{TEMPLATE_URL}js/default.js"></script>

<script type="text/javascript" src="{TEMPLATE_URL}js/validation-engine/js/languages/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="{TEMPLATE_URL}js/validation-engine/js/jquery.validationEngine.js"></script>

<link rel="stylesheet" href="{TEMPLATE_URL}js/validation-engine/css/validationEngine.jquery.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="{TEMPLATE_URL}css/icons.css" type="text/css" media="all" data-iconset=true>

<script>
  var img_array = ['home.jpg', 'home2.jpg', 'home3.jpg'];
    var home_banner_index = 0;

    function fadeToNext() {
        home_banner_index = (home_banner_index + 1) % img_array.length;
 		 
		   $('.jumbotron.home-baner' ).css( "background-image", "url({TEMPLATE_URL}img/" + img_array[home_banner_index] + ")" );

		 
   
        waitNext();
    }  

    function waitNext() {
        setTimeout(function() {
            fadeToNext();
        }, 5000);
    }
$(document).ready(function(){
waitNext(); 
});

</script>
</head>
<body>
<nav role="navigation" class="navbar navbar-default navbar-static"  id="menu" >
  <div class="container" id="site-header-container">
    <div id="menurow" style="height: auto;" class="mw-row">
      <div style="width: 26.4%; height: auto;" class="mw-col">
        <div class="mw-col-container"> <a href="<?php print site_url(); ?>"> <img class="" data-pin-nopin="true" alt="Logo image for Unitile company" src="<?php print template_url(); ?>img/logo_unitile.png"></a> </div>
      </div>
      <div style="width: 73.6%; height: auto;" class="mw-col">
        <div class="mw-col-container">
          <div id="main-sub-navigation-holder">
            <div class="main-sub-navigation-container">
              <ul id="main-sub-navigation" class="nav navbar-nav pull-right header-contact">
                <?php if(is_logged()) { ?>
                <li> <a id="login-register-link-header" href="<?php print site_url(); ?>profile"><i class="fa fa-fw fa-user"></i> Hello, <?php print user_name() ?></a></li>
                <?php  } else { ?>
                <li> <a id="login-register-link-header" href="<?php print site_url(); ?>login" onclick='$("#login-overlay-footer").toggle(); return false;'><i class="fa fa-fw fa-user"></i> <span onclick="LoginTabs.set(0)">Login </span>|<span onclick="LoginTabs.set(1)"> Register </span> </a></li>
                <?php  }  ?>
                <li> <i class="fa fa-fw fa-phone"></i>+91 22 2630 5270</li>
                <li> <i class="fa fa-fw fa-envelope"></i>info@united-group.in</li>
                <li>
                  <module type="shop/cart" id="small_cart_header" template="header_small" />
                </li>
          <li>
                <a class="download" target="_blank" href="http://www.unitileindia.com/pdfs/unitile_catalogue.pdf"></a></li>
              </ul>
            </div>
          </div>
          <module type="menu" name="header_menu" id="main-navigation" template="topmenu" />
        </div>
      </div>
    </div>
  </div>
</nav>
