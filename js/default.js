








$(window).load(function(){

    $(".xslider").owlCarousel({
        items:4
    })
    $(".cslider").owlCarousel({
        items:1
    })

   // Simple way to enable the 'placeholder' attribute for browsers that doesn't support it
   if('placeholder' in document.createElement('input') === false){
       mw.$("[placeholder]").each(function(){
          var el = $(this), p = el.attr("placeholder");
          el.val() == '' ? el.val(p) : '' ;
          el.bind('focus', function(e){ el.val() == p ? el.val('') : ''; });
          el.bind('blur', function(e){ el.val() == '' ? el.val(p) : '';});
       });
   }


   /* Fixed shop cart */

   if(typeof _shop === 'boolean'){
      var header = document.getElementById('header');
      $(window).bind("scroll", function(){
          var cart = mw.$(".mw-cart-small", header)[0];
          var cart_module = mw.tools.firstParentWithClass(cart, 'module');
          if($(window).scrollTop() > $(header).outerHeight()){
            $(cart_module).addClass("mw-cart-small-fixed");
          }
          else{
             $(cart_module).removeClass("mw-cart-small-fixed");
          }
      });
  }
 });
 
 
 
 
 
 
 
 
$(document).ready(function(){

    
	if(typeof(mw.msg.product_added) == "undefined"){
	    mw.msg.product_added = 	"Your product is added to the shopping cart";
	}

	$(window).bind('mw.cart.add', function(){
   var modal_html = ''
        + '<div id="mw-product-added-popup-holder"> '
		+ '<h4>'+mw.msg.product_added+'</h4>'
		+ '<div id="mw-product-added-popup" class="text-center" style="width:210px;"> '
		+ ' </div>';
        + ' </div>';
		Alert(modal_html)
	mw.load_module('shop/cart','#mw-product-added-popup', false,{template:'small'});
	
	setTimeout(function(){
			 
 
	}, 10)


	});
 


   $(".lmclose").on('click', function(){
    $(".login-overlay").hide()
   })

   $(".reset-password-link").on('click', function(){
     LoginTabs.set(2)
    return false;
   })


});
