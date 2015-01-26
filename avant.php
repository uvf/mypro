<!doctype html>
<?php
require_once("control/config.php");

$Main = new Main;

/*$db = new PDO("mysql:hostname=localhost; dbname=tpkit_hm", "root", "");
$db->query("SET NAMES 'utf8';");*/
$db = $Main->CTDB;


?>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr" ><!--<![endif]-->
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <base href="http://demo.virtuemarttemplates.net/joomla3/avant/" />
    <!--<base href="http://localhost/avant/" />-->
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="cleartype" content="on" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="description" content="Avant Joomla 3 VirtueMart Template Demo site" />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <title>Avant Joomla 3 VirtueMart Template Demo - Wlecome to my web site</title>
  <link href="http://demo.virtuemarttemplates.net/joomla3/avant/" rel="canonical" />
  <link href="/joomla3/avant/?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
  <link href="/joomla3/avant/?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0" />
  <link href="/joomla3/avant/templates/avant/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link rel="stylesheet" href="/joomla3/avant/media/jui/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="/joomla3/avant/media/jui/css/bootstrap-responsive.min.css" type="text/css" />
  <link rel="stylesheet" href="/joomla3/avant/media/jui/css/bootstrap-extended.css" type="text/css" />
  <link rel="stylesheet" href="/joomla3/avant/components/com_virtuemart/assets/css/jquery.fancybox-1.3.4.css?vmver=8615" type="text/css" />
  <link rel="stylesheet" href="/joomla3/avant/media/system/css/modal.css" type="text/css" />
  <script src="/joomla3/avant/media/jui/js/jquery.min.js" type="text/javascript"></script>
  <script src="/joomla3/avant/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
  <script src="/joomla3/avant/media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="/joomla3/avant/media/system/js/caption.js" type="text/javascript"></script>
  <script src="/joomla3/avant/media/system/js/mootools-core.js" type="text/javascript"></script>
  <script src="/joomla3/avant/media/system/js/core.js" type="text/javascript"></script>
  <script src="/joomla3/avant/media/system/js/mootools-more.js" type="text/javascript"></script>
  <script src="/joomla3/avant/media/jui/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="/joomla3/avant/media/system/js/modal.js" type="text/javascript"></script>
  <script src="/joomla3/avant/templates/avant/js/easypaginate.js" type="text/javascript"></script>
  <script src="/joomla3/avant/components/com_virtuemart/assets/js/vmsite.js?vmver=8615" type="text/javascript"></script>
  <script src="/joomla3/avant/components/com_virtuemart/assets/js/fancybox/jquery.fancybox-1.3.4.pack.js?vmver=8615" type="text/javascript" defer="defer"></script>
  <script src="/joomla3/avant/components/com_virtuemart/assets/js/vmprices.js?vmver=8615" type="text/javascript" defer="defer"></script>
  <script src="/joomla3/avant/modules/mod_virtuemart_cart/assets/js/update_cart.js?vmver=8615" type="text/javascript"></script>
  <script type="text/javascript">
jQuery(window).on('load',  function() {
				new JCaption('img.caption');
			});
		jQuery(function($) {
			SqueezeBox.initialize({});
			SqueezeBox.assign($('a.modal').get(), {
				parse: 'rel'
			});
		});
window.setInterval(function(){var r;try{r=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP")}catch(e){}if(r){r.open("GET","./",true);r.send(null)}},840000);
  </script>
  <script type="text/javascript">
			jQuery(function($){
				$('ul#slider130').easyPaginate({
					delay: 150,
					numeric: true,
					nextprev: false,
					auto:false,
					loop:false,
					pause:4000,
					clickstop:false,
					controls: 'pagination-130',
					step: 4
				});
			}); 
		</script>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="/joomla3/avant/templates/avant/js/selectivizr-min.js"></script>
<script src="/joomla3/avant/templates/avant/js/modernizr.js"></script>
<![endif]-->

	<link rel="stylesheet" type="text/css" href="/joomla3/avant/templates/avant/css/ie9-10.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="/joomla3/avant/templates/avant/css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/joomla3/avant/templates/avant/css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/joomla3/avant/templates/avant/css/nav.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/joomla3/avant/templates/avant/css/typography.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/joomla3/avant/templates/avant/css/template.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="/joomla3/avant/templates/avant/css/responsive-template.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="/joomla3/avant/templates/avant/css/print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="/joomla3/avant/templates/avant/css/vm-avant.css" media="screen" />

<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Ubuntu:400,700,400italic,700italic:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
<script type="text/javascript">  
(function(){
  // if firefox 3.5+, hide content till load (or 3 seconds) to prevent FOUT
  var d = document, e = d.documentElement, s = d.createElement('style');
  if (e.style.MozTransform === ''){ // gecko 1.9.1 inference
    s.textContent = 'body{visibility:hidden}';
    var r = document.getElementsByTagName('script')[0];
    r.parentNode.insertBefore(s, r);
    function f(){ s.parentNode && s.parentNode.removeChild(s); }
    addEventListener('load',f,false);
    setTimeout(f,3000);
  }
})();
 </script>
	<script src="/joomla3/avant/templates/avant/js/selectnav.min.js"></script>
<!--[if IE 6]> <link rel="stylesheet" type="text/css" href="/joomla3/avant/templates/avant/css/ie6.css" media="screen" /> <![endif]-->
<!--[if IE 7]> <link rel="stylesheet" type="text/css" href="/joomla3/avant/templates/avant/css/ie.css" media="screen" /> <![endif]-->
        <link rel="stylesheet" type="text/css" href="/joomla3/avant/templates/avant/css/presets/style1.css" media="screen" />
    	 
	<script type="text/javascript" src="/joomla3/avant/templates/avant/js/superfish.js"></script>
	<script type="text/javascript" src="/joomla3/avant/templates/avant/js/supersubs.js"></script>
	<script type="text/javascript">
    jQuery(document).ready(function(){ 
        jQuery("ul.menu-nav").supersubs({ 
			minWidth: 15,
            extraWidth:  1
        }).superfish({ 
            delay:500,
            animation:{opacity:'show',height:'show',width:'show'},
            speed:'normal',
            autoArrows:true,
            dropShadows:false 
        });
    }); 
	
	jQuery(function() {                      
		jQuery(".closeMenu").click(function() { 
			jQuery('#social-links').attr('style','display:none');		
		});
	});
	</script>
			<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#menupanel').on('click', function() {
			jQuery('div.panel1').animate({
				'width': 'show'
			}, 300, function() {
				jQuery('div.menupanel').fadeIn(200);
			});
		});
		jQuery('span.closemenu').on('click', function() {
			jQuery('div.menupanel').fadeOut(200, function() {
				jQuery('div.panel1').animate({
					'width': 'hide'
				}, 300);
			});
		});
	});
	</script>
				<script type="text/javascript" src="/joomla3/avant/templates/avant/js/jquery.dropkick-1.0.0.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('.default-currency').dropkick();
	});
	</script>
			
		<!-- Built-in Slideshow -->
			<link rel="stylesheet" id="camera-css" href="/joomla3/avant/templates/avant/css/camera.css" type="text/css" media="all" /> 
		<script type="text/javascript" src="/joomla3/avant/templates/avant/js/jquery.mobile.customized.min.js"></script>
		<script type="text/javascript" src="/joomla3/avant/templates/avant/js/jquery.easing.1.3.js"></script> 
		<script type="text/javascript" src="/joomla3/avant/templates/avant/js/camera.min.js"></script> 
		<script>
			jQuery(function(){		
				jQuery('#ph-camera-slideshow').camera({
					alignment: 'topCenter',
					autoAdvance: true,
					mobileAutoAdvance: true, 
					slideOn: 'next',	
					thumbnails: false,
					time: 7000,
					transPeriod: 1500,
					cols: 10,
					rows: 10,
					slicedCols: 10,	
					slicedRows: 10,
					fx: 'simpleFade',
					gridDifference: 250,
					height: '40%',
					minHeight: '400px',
					imagePath: '/joomla3/avant/templates/avant/images/',	
					hover: true,
					loader: 'pie',
					barDirection: 'leftToRight',
					barPosition: 'bottom',	
					pieDiameter: 38,
					piePosition: 'rightTop',
					loaderColor: '#eeeeee', 
					loaderBgColor: '#222222', 
					loaderOpacity: 0.8,
					loaderPadding: 1,
					loaderStroke: 5,
					navigation: true,
					playPause: true,
					navigationHover: true,
					mobileNavHover: true,
					opacityOnGrid: false,
					pagination: true,
					pauseOnClick: true,
					portrait: false				});
			});
		</script>
		<!-- End of Built-in Slideshow -->
		
	<script type="text/javascript">	
		equalheight = function(container){

		var currentTallest = 0,
			 currentRowStart = 0,
			 rowDivs = new Array(),
			 $el,
			 topPosition = 0;
		 jQuery(container).each(function() {

		   $el = jQuery(this);
		   jQuery($el).height('auto')
		   topPostion = $el.position().top;

		   if (currentRowStart != topPostion) {
			 for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
			   rowDivs[currentDiv].height(currentTallest);
			 }
			 rowDivs.length = 0; // empty the array
			 currentRowStart = topPostion;
			 currentTallest = $el.height();
			 rowDivs.push($el);
		   } else {
			 rowDivs.push($el);
			 currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
		  }
		   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
			 rowDivs[currentDiv].height(currentTallest);
		   }
		 });
		}

		jQuery(window).load(function() {
		  equalheight('.moduletable_style1');

		});


		jQuery(window).resize(function(){
		  equalheight('.moduletable_style1');

		});

	</script>
	
	<script type="text/javascript">	
	jQuery(window).on("scroll touchmove", function () {
		jQuery('#top-sticky-panel').toggleClass('tiny', jQuery(document).scrollTop() > 120 );
	});
	</script>
	
	<style type="text/css">
	#top-sticky-panel {
		padding:0px;
		position:fixed;
		top: 0px;
		left:0;
		right:0;
		z-index: 1039;
	}
	
	#top-sticky-panel #info-line,#top-sticky-panel #top {
		transition: all 500ms;
	}
	
	#top-sticky-panel.tiny #info-line, #top-sticky-panel.tiny #top {
		opacity: 0;
		height: 0px;
		position: absolute;
		top: -50px;
		display: none;
	}
	
	#top-sticky-panel.tiny #top .h1, #top-sticky-panel.tiny #top .h2{display:none;}

		body {font-size: 14px;
	
	padding-top: 255px;
	
	}
	#site-name-handler, #search-position{height:112px; }
	#sn-position .h1{left:10px;top:36px;color:#2b2b2b;font-size:24px;}
	#sn-position .h1 a {color:#2b2b2b;}
	#sn-position .h2 {left:145px;top:56px;color:#8e8e8e;font-size:11px;}
	#top-header-handler{margin-top:34px;}
	
	ul.columns-2 {width: 360px !important;}
	ul.columns-3 {width: 500px !important;}
	ul.columns-4 {width: 660px !important;}
	ul.columns-5 {width: 860px !important;}
		
	.camera_pie {
		width: 38px;
		height: 38px;
	}
	#slideshow-handler { min-height: 400px; }
	
</style>
	</head>
<body>
<div id="top-sticky-panel">
	<header id="top-handler">
		<div id="info-line">
			<div class="container">
				<div class="row-fluid">
					<div class="span12">
						
<div class="custom"  >
	<p><strong>CONTACT US:   <img src="/joomla3/avant/images/phone-icon.png" border="0" /> 1 800 123 456   <img src="/joomla3/avant/images/email-icon.png" border="0" />  <a href="#">SALES@AVANT.TEMPLATE</a></strong></p></div>

					</div>
				</div>
			</div>
		</div>
		<div id="nav-line">
			<div class="container">
				<div class="row-fluid">
					<div class="span6">
												<ul class="log-panel">
							<li><a data-toggle="modal" href="#LoginForm" class="open-register-form">My Account</a></li><li><a class="v_register" href="/joomla3/avant/using-joomla/extensions/components/users-component/registration-form.html">Register</a></li>
													</ul>
																		<div class="quick-menu">
							
<ul class="menu">
<li class="item-485"><a href="#" ><span class="link-no-image">Our Blog</span></a></li><li class="item-487"><a href="#" ><span class="link-no-image">Special Offers</span></a></li><li class="item-486"><a href="/joomla3/avant/using-joomla/extensions/components/contact-component/single-contact.html" ><span class="link-no-image">Contact Us</span></a></li></ul>


						</div>
											</div>
					<div class="span6">
											<div class="search-panel">
							<!--BEGIN Search Box -->
<form action="/joomla3/avant/online-store/search.html" method="get">
<div class="search">
<input name="keyword" id="mod_virtuemart_search" maxlength="20" alt="Search" class="inputbox" type="text" size="20" value="Search Our Store"  onblur="if(this.value=='') this.value='Search Our Store';" onfocus="if(this.value=='Search Our Store') this.value='';" /><input type="submit" value="Search" class="button" onclick="this.form.keyword.focus();"/></div>
		<input type="hidden" name="limitstart" value="0" />
		<input type="hidden" name="option" value="com_virtuemart" />
		<input type="hidden" name="view" value="category" />

	  </form>

<!-- End Search Box -->

						</div>
																<div class="cl-handler">
							<div class="vmCartModule " id="vmCartModule">
<div class="total_products">
<a href="#" class="cart-button"><div class="popover bottom"><div class="arrow"></div><div class="popover-content"><p>Cart empty</p></div></div></a><div class="is-empty">Cart empty</div>
</div>	


<noscript>
Please wait</noscript>
</div>



<script id="jsVars_js" type="text/javascript">//<![CDATA[ 
//vmSiteurl = 'http://demo.virtuemarttemplates.net/joomla3/avant/' ;
vmLang = '&lang=en' ;
Virtuemart.addtocart_popup = '1' ; 
usefancy = true;
 //]]></script>


<script id="vm.CartModule.UpdateModule_js" type="text/javascript">//<![CDATA[ 
jQuery(document).ready(function(){
    jQuery("body").live("updateVirtueMartCartModule", function(e) {
        jQuery("#vmCartModule").updateVirtueMartCartModule();
    });
});
 //]]></script>

						</div>
										</div>
				</div>
			</div>
		</div>
		<div id="top">
			<div class="container">
				<div class="row-fluid">
					<div id="site-name-handler" class="span4">
						<div id="sn-position">
																		<div class="h1"> <a href="http://demo.virtuemarttemplates.net/joomla3/avant/"><img alt="Avant" src="/joomla3/avant/images/avant.png" /></a></div>
																								<div class="h2"> <img alt="VirtueMart Template" src="/joomla3/avant/images/slogan.png" /> </div>
												</div>
					</div>
										<div class="span8">
						<div id="top-header-handler">
							
<div class="custom"  >
	<div class="row-fluid">
<div class="span4"><a class="button icon" href="#"><img src="/joomla3/avant/images/delivery-icon.png" border="0" /></a><span class="top-icon-label"><strong>FREE SHIPPING</strong><br />orders €100 and more</span></div>
<div class="span4"><a class="button icon" href="#"><img src="/joomla3/avant/images/money-icon.png" border="0" /></a><span class="top-icon-label"><strong>100% MONEY BACK</strong><br />GUARANTEE!</span></div>
<div class="span4"><a class="button icon" href="#"><img src="/joomla3/avant/images/sale-icon.png" border="0" /></a> <span class="top-icon-label"><strong>PROMOTIONS</strong><br />Get Coupons Today!</span></div>
</div></div>

						</div>
					</div>
									</div>
			</div>
		</div>
	</header>

<!-------------++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++----------------->

	<?php require_once("avant_menu_req.php"); //exit; ?>

<!--------------++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++------------>
	</div>		
<div class="container msc-container">

		
		
		<div class="row-fluid" id="slideshow-header">
				
						<div id="slideshow-handler-bg" class="span12">
				<div id="slideshow-handler"> 
										<div class="camera_wrap" id="ph-camera-slideshow">					<div data-thumb="/joomla3/avant/images/slide-1.jpg" data-src="/joomla3/avant/images/slide-1.jpg">
					
						<div class="camera_caption title fadeFromTop" style="">
							<div>BUILT-IN SLIDESHOW</div>
						</div>
					
						<div class="camera_caption fadeFromBottom" style="">
							<div><div class="camera_caption_bg"><p style="text-align: center;">YOU CAN USE THE TEMPLATE BUILT-IN SLIDESHOW TO PROMOTE PRODUCTS AND SERVICES YOU ARE SELLING. THIS IS THE BEST WAY TO TAKE YOUR CUSTOMERS ATTENTION</p></div></div>
						</div>
					</div>
										<div data-thumb="/joomla3/avant/images/slide-2.jpg" data-src="/joomla3/avant/images/slide-2.jpg">
					
						<div class="camera_caption title fadeFromTop" style="">
							<div>MOBILE READY</div>
						</div>
					
						<div class="camera_caption fadeFromBottom" style="">
							<div><div class="camera_caption_bg"><p style="text-align: center;">SELL YOUR PRODUCTS ON DESKTOPS, TABLETS AND MOBILE PHONES. THANKS TO THE RESPONSIVE LAYOUT OF AVANT TEMPLATE YOU CAN BE NOW VISIBLE ON ALL DEVICES</p></div></div>
						</div>
					</div>
										<div data-thumb="/joomla3/avant/images/slide-3.jpg" data-src="/joomla3/avant/images/slide-3.jpg">
					
						<div class="camera_caption title fadeFromTop" style="">
							<div>POWERFUL</div>
						</div>
					
						<div class="camera_caption fadeFromBottom" style="">
							<div><div class="camera_caption_bg"><p style="text-align: center;">THANKS TO LOTS OF BUILT-IN TEMPLATE FEATURES YOU CAN CUSTOMIZE AND FIT THE TEMPLATE TO YOUR VERY SPECIFIC NEEDS. ENJOY AND ATTRACT YOUR CUSTOMERS TODAY!</p></div></div>
						</div>
					</div>
					</div> 
									</div>
			</div>
						
				</div>
		
				<section id="tab-modules">
			<div id="tab-modules-handler" class="row-fluid">
				<div class="span4" style="">		<div class="moduletable_banner">
			
		
										<div class="module-content">
<div class="custom_banner has-image2">
	<div class="img_style2">
		<img src="/joomla3/avant/images/top-banner-1.jpg">
		<div class="con_style2"><p><a href="#">YOUR LINK HERE</a></p></div>
	</div>
	<div class="clear"> </div>
</div>
</div>
		</div>
	</div>				<div class="span4" style="">		<div class="moduletable_banner">
			
		
										<div class="module-content">
<div class="custom_banner has-image2">
	<div class="img_style2">
		<img src="/joomla3/avant/images/top-banner-2.jpg">
		<div class="con_style2"><p><a href="#">YOUR LINK HERE</a></p></div>
	</div>
	<div class="clear"> </div>
</div>
</div>
		</div>
	</div>				<div class="span4" style="">		<div class="moduletable_banner horiz">
			
		
										<div class="module-content">
<div class="custom_banner horiz has-image2">
	<div class="img_style2">
		<img src="/joomla3/avant/images/top-banner-3.jpg">
		<div class="con_style2"><p><a href="#">YOUR LINK HERE</a></p></div>
	</div>
	<div class="clear"> </div>
</div>
</div>
		</div>
			<div class="moduletable_banner horiz">
			
		
										<div class="module-content">
<div class="custom_banner horiz has-image2">
	<div class="img_style2">
		<img src="/joomla3/avant/images/top-banner-4.png">
		<div class="con_style2"><p><a href="#">YOUR LINK HERE</a></p></div>
	</div>
	<div class="clear"> </div>
</div>
</div>
		</div>
	</div>															</div>
		</section>
		
				<div id="top-long">
					<div class="moduletable_empty">
			
		
										<div class="module-content">
<div class="custom_empty"  >
	<div class="row-fluid">
<div class="span4">
<h3 class="heading-cloud" style="padding: 15px 15px; text-align: center;">OUR HOT OFFER</h3>
</div>
<div class="span8">To reduce a space taken by the products grid and other webstore elements we incorporated the tabs module position. This will allow you to put more and more in one place!</div>
</div></div>
</div>
		</div>
	
		</div>
				
		
		
				<div id="tabs-1" class="nav-tabs-handler">
			<ul class="nav nav-tabs" id="Tab1">
						  <li class="active"><a href="#tabid119" data-toggle="tab">LATEST PRODUCTS</a></li>			  
						  <li ><a href="#tabid147" data-toggle="tab">FEATURED PRODUCTS</a></li>			  
						  <li ><a href="#tabid148" data-toggle="tab">CUSTOMERS CHOICE</a></li>			  
						  <li ><a href="#tabid149" data-toggle="tab">HOW TO BUY</a></li>			  
						</ul>
			<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery( ".tab-content .tab-pane:first-child" ).addClass( "active" );
			});
			</script>
			<div class="tab-content">
						<div class="tab-pane" id="tabid119">
			<div class="vmgroup_products">

	
		<ul class="vmproduct productdetails row-fluid">
						<li class="span3 floatleft">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-black-red-12-detail.html" title="Puma Shoes Black/Red"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/shoes-2_250x285.jpg" alt="shoes-2" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="shoes-2" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/shoes-2.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/shoes-2_250x285.jpg" alt="shoes-2" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-black-red-12-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-black-red-12-detail.html">Puma Shoes Black/Red</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >79,00 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity40" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Puma Shoes Black/Red"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="40"/>
										<input type="hidden" name="virtuemart_category_id[]" value="3"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
						<li class="span3 floatleft">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-white-blue-11-detail.html" title="Puma Shoes White/Blue"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/shoes-3_250x285.jpg" alt="shoes-3" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="shoes-3" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/shoes-3.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/shoes-3_250x285.jpg" alt="shoes-3" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-white-blue-11-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-white-blue-11-detail.html">Puma Shoes White/Blue</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >79,00 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity39" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Puma Shoes White/Blue"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="39"/>
										<input type="hidden" name="virtuemart_category_id[]" value="3"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
						<li class="span3 floatleft">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-black-white-10-detail.html" title="Puma Shoes Black/White"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/shoes-1_250x285.jpg" alt="shoes-1" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="shoes-1" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/shoes-1.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/shoes-1_250x285.jpg" alt="shoes-1" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-black-white-10-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-black-white-10-detail.html">Puma Shoes Black/White</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >79,00 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity38" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Puma Shoes Black/White"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="38"/>
										<input type="hidden" name="virtuemart_category_id[]" value="3"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
						<li class="span3 floatleft">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/electronics-computers/canon-d20-blue-detail.html" title="Canon D20 Blue"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/canon-d20-blue4_256x285.jpg" alt="canon-d20-blue4" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="canon-d20-blue4" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/canon-d20-blue4.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/canon-d20-blue4_256x285.jpg" alt="canon-d20-blue4" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/electronics-computers/canon-d20-blue-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/electronics-computers/canon-d20-blue-detail.html">Canon D20 Blue</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >119,99 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity37" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Canon D20 Blue"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="37"/>
										<input type="hidden" name="virtuemart_category_id[]" value="4"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
					</ul>
		<div class="clear"></div>

		</div>			
		</div>
			<div class="tab-pane" id="tabid147">
			<div class="vmgroup_products">

	
		<ul class="vmproduct productdetails row-fluid">
						<li class="span3 floatleft">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-detail.html" title="Sport Jacket BWB"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/jacket-23_256x285.jpg" alt="jacket-23" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="jacket-23" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/jacket-23.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/jacket-23_256x285.jpg" alt="jacket-23" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-detail.html">Sport Jacket BWB</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >109,00 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity32" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Sport Jacket BWB"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="32"/>
										<input type="hidden" name="virtuemart_category_id[]" value="3"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
						<li class="span3 floatleft">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/movies/ace-age-4-dvd-detail.html" title="Ace Age 4 DVD"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/movies-1_250x285.jpg" alt="movies-1" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="movies-1" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/movies-1.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/movies-1_250x285.jpg" alt="movies-1" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/movies/ace-age-4-dvd-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/movies/ace-age-4-dvd-detail.html">Ace Age 4 DVD</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >29,00 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity25" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Ace Age 4 DVD"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="25"/>
										<input type="hidden" name="virtuemart_category_id[]" value="8"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
						<li class="span3 floatleft">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-32-33-detail.html" title="Sport Jacket White"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/jacket-48_256x285.jpg" alt="jacket-48" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="jacket-48" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/jacket-48.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/jacket-48_256x285.jpg" alt="jacket-48" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-32-33-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-32-33-detail.html">Sport Jacket White</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >109,00 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity34" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Sport Jacket White"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="34"/>
										<input type="hidden" name="virtuemart_category_id[]" value="3"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
						<li class="span3 floatleft">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/movies/up-dvd-bd-detail.html" title="UP DVD/BD"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/movies-3_250x285.jpg" alt="movies-3" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="movies-3" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/movies-3.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/movies-3_250x285.jpg" alt="movies-3" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/movies/up-dvd-bd-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/movies/up-dvd-bd-detail.html">UP DVD/BD</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >29,00 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity27" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="UP DVD/BD"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="27"/>
										<input type="hidden" name="virtuemart_category_id[]" value="8"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
					</ul>
		<div class="clear"></div>

		</div>			
		</div>
			<div class="tab-pane" id="tabid148">
			<div class="vmgroup_products">

	
		<ul class="vmproduct productdetails row-fluid">
						<li class="span3 floatleft">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-detail.html" title="Sport Jacket White/Red"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/jacket-11_256x285.jpg" alt="jacket-11" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="jacket-11" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/jacket-11.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/jacket-11_256x285.jpg" alt="jacket-11" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-detail.html">Sport Jacket White/Red</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >75,99 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity31" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Sport Jacket White/Red"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="31"/>
										<input type="hidden" name="virtuemart_category_id[]" value="3"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
						<li class="span3 floatleft">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-detail.html" title="Sport Jacket BWB"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/jacket-23_256x285.jpg" alt="jacket-23" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="jacket-23" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/jacket-23.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/jacket-23_256x285.jpg" alt="jacket-23" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-detail.html">Sport Jacket BWB</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >109,00 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity32" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Sport Jacket BWB"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="32"/>
										<input type="hidden" name="virtuemart_category_id[]" value="3"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
						<li class="span3 floatleft">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-32-detail.html" title="Sport Jacket Bl/Wh"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/jacket-32_256x285.jpg" alt="jacket-32" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="jacket-32" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/jacket-32.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/jacket-32_256x285.jpg" alt="jacket-32" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-32-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-32-detail.html">Sport Jacket Bl/Wh</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >75,99 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity33" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Sport Jacket Bl/Wh"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="33"/>
										<input type="hidden" name="virtuemart_category_id[]" value="3"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
						<li class="span3 floatleft">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-32-33-detail.html" title="Sport Jacket White"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/jacket-48_256x285.jpg" alt="jacket-48" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="jacket-48" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/jacket-48.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/jacket-48_256x285.jpg" alt="jacket-48" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-32-33-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-32-33-detail.html">Sport Jacket White</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >109,00 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity34" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Sport Jacket White"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="34"/>
										<input type="hidden" name="virtuemart_category_id[]" value="3"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
					</ul>
		<div class="clear"></div>

		</div>			
		</div>
			<div class="tab-pane" id="tabid149">
			
<div class="custom"  >
	<h3>HOW TO BUY!</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
<div class="row-fluid">
<div class="span3">
<p><img src="/joomla3/avant/images/how-to-buy-1.jpg" border="0" /></p>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
</div>
<div class="span3">
<p><img src="/joomla3/avant/images/how-to-buy-2.jpg" border="0" /></p>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
</div>
<div class="span3">
<p><img src="/joomla3/avant/images/how-to-buy-3.jpg" border="0" /></p>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
</div>
<div class="span3">
<p><img src="/joomla3/avant/images/how-to-buy-4.jpg" border="0" /></p>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
</div>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p></div>
			
		</div>
				
			</div>
		</div>
				
				<div id="top-modules">
			<div class="row-fluid">
				<div class="span6" style="">		<div class="moduletable_banner horiz">
			
		
										<div class="module-content">
<div class="custom_banner horiz has-image2">
	<div class="img_style2">
		<img src="/joomla3/avant/images/banner-1.jpg">
		<div class="con_style2"><p><a href="#">YOUR LINK HERE</a></p></div>
	</div>
	<div class="clear"> </div>
</div>
</div>
		</div>
	</div>				<div class="span6" style="">		<div class="moduletable_banner horiz">
			
		
										<div class="module-content">
<div class="custom_banner horiz has-image2">
	<div class="img_style2">
		<img src="/joomla3/avant/images/banner-2.jpg">
		<div class="con_style2"><p><a href="#">YOUR LINK HERE</a></p></div>
	</div>
	<div class="clear"> </div>
</div>
</div>
		</div>
	</div>																			</div>
		</div>
				

				<div id="LoginForm" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-header"><span id="myModalLabel">My Account</span></div>
			<div class="modal-body"><form action="/joomla3/avant/" method="post" id="login-form" class="form-horizontal" >
		<fieldset class="userdata">
	
  <div class="control-group">
    <label class="control-label" for="modlgn-username">Username</label>
    <div class="controls">
      <input type="text" id="modlgn-username" name="username" placeholder="Username">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="modlgn-passwd">Password</label>
    <div class="controls">
      <input type="password" id="modlgn-passwd" placeholder="Password" name="password">
    </div>
  </div>
  
	<div class="control-group">
		<div class="control-label">
		
			<div class="btn-group">
			  <button class="button" type="submit" name="Submit">Log in</button>
			  <button class="button dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			  </button>
				<ul class="dropdown-menu">
					<li>
						<a href="/joomla3/avant/using-joomla/extensions/components/users-component/password-reset.html">
						Forgot your password?</a>
					</li>
					<li>
						<a href="/joomla3/avant/using-joomla/extensions/components/users-component/username-reminder.html">
						Forgot your username?</a>
					</li>
										<li>
						<a href="/joomla3/avant/using-joomla/extensions/components/users-component/registration-form.html">
							Create an account</a>
					</li>
									</ul>
			</div>
			
			
		</div>


						<div class="controls">
			<label class="inline" for="modlgn-remember">
			
			<input type="checkbox" name="remember" class="checkbox" value="yes" id="modlgn-remember"> Remember Me			
			</label>
		</div>
	</div>


		
	</fieldset>
	<input type="hidden" name="option" value="com_users" />
	<input type="hidden" name="task" value="user.login" />
	<input type="hidden" name="return" value="aW5kZXgucGhwP0l0ZW1pZD00MzU=" />
	<input type="hidden" name="cad9029e6451f36fddb761b10750cd6a" value="1" />	</fieldset>
	

	

	</form>
</div>
			<div class="modal-footer"><a class="button" data-dismiss="modal">Close</a></div>
		</div>
		
				<div id="welcome-box">
			<div class="row-fluid">
				<div class="span10 offset1">
<div class="custom"  >
	<p style="text-align: center;"><img src="/joomla3/avant/images/avant-big.png" border="0" /></p>
<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p style="text-align: center;"><a class="button" href="#"><img src="/joomla3/avant/images/add-to-cart-button.png" border="0" /> Buy Now</a></p></div>
</div>
			</div>
		</div>
				
		<div class="main-bg" id="main-handler">
			<div id="content-handler">
				<div id="tmp-container">
					<div id="main-content-handler">
						<div class="row-fluid">
														<div class="span12">

																<div id="top-content-modules">
									<div class="row-fluid">
										<div class="span12">		<div class="moduletable_products">
			
		
											<h3><span class="h-cl">LATEST</span> PRODUCTS</h3>
							<div class="module-content"><div class="vmgroup_products product-sl-handler">

			
		
				<ul class="sl-products vmproduct productdetails row-fluid" id="slider130">
						<li class="span3 floatleft sl-item-0">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-black-red-12-detail.html" title="Puma Shoes Black/Red"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/shoes-2_250x285.jpg" alt="shoes-2" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="shoes-2" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/shoes-2.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/shoes-2_250x285.jpg" alt="shoes-2" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-black-red-12-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-black-red-12-detail.html">Puma Shoes Black/Red</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >79,00 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity40" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Puma Shoes Black/Red"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="40"/>
										<input type="hidden" name="virtuemart_category_id[]" value="3"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
						<li class="span3 floatleft sl-item-1">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-white-blue-11-detail.html" title="Puma Shoes White/Blue"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/shoes-3_250x285.jpg" alt="shoes-3" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="shoes-3" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/shoes-3.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/shoes-3_250x285.jpg" alt="shoes-3" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-white-blue-11-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-white-blue-11-detail.html">Puma Shoes White/Blue</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >79,00 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity39" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Puma Shoes White/Blue"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="39"/>
										<input type="hidden" name="virtuemart_category_id[]" value="3"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
						<li class="span3 floatleft sl-item-2">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-black-white-10-detail.html" title="Puma Shoes Black/White"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/shoes-1_250x285.jpg" alt="shoes-1" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="shoes-1" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/shoes-1.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/shoes-1_250x285.jpg" alt="shoes-1" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-black-white-10-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/clothes-shoes/puma-shoes-black-white-10-detail.html">Puma Shoes Black/White</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >79,00 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity38" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Puma Shoes Black/White"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="38"/>
										<input type="hidden" name="virtuemart_category_id[]" value="3"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
						<li class="span3 floatleft sl-item-3">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/electronics-computers/canon-d20-blue-detail.html" title="Canon D20 Blue"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/canon-d20-blue4_256x285.jpg" alt="canon-d20-blue4" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="canon-d20-blue4" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/canon-d20-blue4.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/canon-d20-blue4_256x285.jpg" alt="canon-d20-blue4" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/electronics-computers/canon-d20-blue-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/electronics-computers/canon-d20-blue-detail.html">Canon D20 Blue</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >119,99 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity37" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Canon D20 Blue"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="37"/>
										<input type="hidden" name="virtuemart_category_id[]" value="4"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
						<li class="span3 floatleft sl-item-0">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/electronics-computers/canon-d20-yellow-detail.html" title="Canon D20 Yellow"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/canon-d20-yellow5_256x285.jpg" alt="canon-d20-yellow5" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="canon-d20-yellow5" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/canon-d20-yellow5.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/canon-d20-yellow5_256x285.jpg" alt="canon-d20-yellow5" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/electronics-computers/canon-d20-yellow-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/electronics-computers/canon-d20-yellow-detail.html">Canon D20 Yellow</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >119,99 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity36" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Canon D20 Yellow"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="36"/>
										<input type="hidden" name="virtuemart_category_id[]" value="4"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
						<li class="span3 floatleft sl-item-1">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/electronics-computers/canon-d20-silver-detail.html" title="Canon D20 Silver"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/canon-d20-silver8_256x285.jpg" alt="canon-d20-silver8" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="canon-d20-silver8" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/canon-d20-silver8.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/canon-d20-silver8_256x285.jpg" alt="canon-d20-silver8" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/electronics-computers/canon-d20-silver-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/electronics-computers/canon-d20-silver-detail.html">Canon D20 Silver</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >119,99 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity35" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Canon D20 Silver"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="35"/>
										<input type="hidden" name="virtuemart_category_id[]" value="4"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
						<li class="span3 floatleft sl-item-2">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-32-33-detail.html" title="Sport Jacket White"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/jacket-48_256x285.jpg" alt="jacket-48" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="jacket-48" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/jacket-48.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/jacket-48_256x285.jpg" alt="jacket-48" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-32-33-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-32-33-detail.html">Sport Jacket White</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >109,00 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity34" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Sport Jacket White"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="34"/>
										<input type="hidden" name="virtuemart_category_id[]" value="3"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
						<li class="span3 floatleft sl-item-3">
				<div class="spacer">
				<div class="pr-img-handler">
				<a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-32-detail.html" title="Sport Jacket Bl/Wh"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/jacket-32_256x285.jpg" alt="jacket-32" class="featuredProductImage" border="0" /></a>
					<div class="popout-price">
					
					</div>
									<div class="popout-price">
						<div class="popout-price-buttons-handler">
							<div class="show-pop-up-image"><a title="jacket-32" class="modal" href="http://demo.virtuemarttemplates.net/joomla3/avant/images/stories/virtuemart/product/jacket-32.jpg"><img src="/joomla3/avant/images/stories/virtuemart/product/resized/jacket-32_256x285.jpg" alt="jacket-32" class="featuredProductImage" /></a></div><a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-32-detail.html" class="product-details">Product details</a>
						</div>
					</div>

					
				</div>
					<div class="action-handler">

							<h3 class="h-pr-title">
								<a href="/joomla3/avant/online-store/clothes-shoes/puma-jacket-black-white-9-31-32-detail.html">Sport Jacket Bl/Wh</a>
							</h3>
							<span class="product-price">
							<div class="product-price"><div class="PricesalesPrice vm-display vm-price-value" ><span class="PricesalesPrice" >75,99 €</span></div></div>							</span>

															<div class="addtocart-area">

									<form method="post" class="product" action="index.php">
										
										<div class="addtocart-bar">

																						<!-- <label for="quantity33" class="quantity_box">Quantity: </label> -->



																																	<span class="addtocart-button">
												<input type="submit" name="addtocart" class="addtocart-button" value="Add to Cart" title="Add to Cart" />											</span>
											<span class="quantity-box">
											<input type="text" class="quantity-input" name="quantity[]" value="1"/>
											</span>
											<span class="quantity-controls">
											<input type="button" class="quantity-controls quantity-plus"/>
											<input type="button" class="quantity-controls quantity-minus"/>
											</span>
											<div class="clear"></div>
										</div>

										<input type="hidden" class="pname" value="Sport Jacket Bl/Wh"/>
										<input type="hidden" name="option" value="com_virtuemart"/>
										<input type="hidden" name="view" value="cart"/>
										<noscript><input type="hidden" name="task" value="add"/></noscript>
										<input type="hidden" name="virtuemart_product_id[]" value="33"/>
										<input type="hidden" name="virtuemart_category_id[]" value="3"/>
									</form>
									<div class="clear"></div>
								</div>
								
						<div class="clear"></div>
						<div class="gr-cover"></div>
					</div>
						
				</div>
			</li>
					</ul>
		<div class="clear"></div>

		</div></div>
		</div>
	</div>																																							</div>
								</div>
																<div class="tmp-content-area">
								
																
								<div class="blog-featured" itemscope itemtype="http://schema.org/Blog">




</div>

								</div>
															</div>
													</div>
					</div>
				</div>
			</div>
		</div>
				<section id="bottom-long">
			<div class="row-fluid">
				<div class="span12">
							<div class="moduletable_products move-up-40">
			
		
											<h3><span class="h-cl">OUR</span> PARTNERS & BRANDS</h3>
							<div class="module-content"><div class="vmgroup_products move-up-40">

	<div class="man-main-handler">
	<ul class="row-fluid vmmanufacturer">
			<li class="span2">
			<div class="man-sp-handle">
				<a href="/joomla3/avant/online-store/manufacturers/disney.html">
				
									<img src="/joomla3/avant/images/stories/virtuemart/manufacturer/b26.png" alt="b26" />								</a>
			</div>
		</li>
				<li class="span2">
			<div class="man-sp-handle">
				<a href="/joomla3/avant/online-store/manufacturers/ea-sports.html">
				
									<img src="/joomla3/avant/images/stories/virtuemart/manufacturer/b6.png" alt="b6" />								</a>
			</div>
		</li>
				<li class="span2">
			<div class="man-sp-handle">
				<a href="/joomla3/avant/online-store/manufacturers/nike.html">
				
									<img src="/joomla3/avant/images/stories/virtuemart/manufacturer/b43.png" alt="b43" />								</a>
			</div>
		</li>
				<li class="span2">
			<div class="man-sp-handle">
				<a href="/joomla3/avant/online-store/manufacturers/paramount.html">
				
									<img src="/joomla3/avant/images/stories/virtuemart/manufacturer/b38.png" alt="b38" />								</a>
			</div>
		</li>
				<li class="span2">
			<div class="man-sp-handle">
				<a href="/joomla3/avant/online-store/manufacturers/puma.html">
				
									<img src="/joomla3/avant/images/stories/virtuemart/manufacturer/b14.png" alt="b14" />								</a>
			</div>
		</li>
				<li class="span2">
			<div class="man-sp-handle">
				<a href="/joomla3/avant/online-store/manufacturers/sony-vaio.html">
				
									<img src="/joomla3/avant/images/stories/virtuemart/manufacturer/b5.png" alt="b5" />								</a>
			</div>
		</li>
			</ul>
	</div>

</div>
</div>
		</div>
	
				</div>
			</div>
		</section>
				</div>
<footer id="footer">
	<div class="container">
				<div id="bot-modules-2">
			<div class="row-fluid">
				<div class="span3" style="">		<div class="moduletable_empty">
			
		
											<h3><span class="h-cl">ABOUT</span> THE VIVID</h3>
							<div class="module-content">
<div class="custom_empty"  >
	<p><span style="line-height: 1.3em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore <strong>et dolore magna aliqua</strong>.</span></p>
<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex <a href="#">ea commodo consequat</a>.</p></div>
</div>
		</div>
	</div>				<div class="span3" style="">		<div class="moduletable_empty">
			
		
											<h3><span class="h-cl">CONTACT</span> US</h3>
							<div class="module-content">
<div class="custom_empty"  >
	<p>+123 056 789 123 1234<br />+123 056 789 123 2345</p>
<p><span id="cloak86831">This email address is being protected from spambots. You need JavaScript enabled to view it.</span><script type='text/javascript'>
 //<!--
 document.getElementById('cloak86831').innerHTML = '';
 var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
 var path = 'hr' + 'ef' + '=';
 var addy86831 = 'c&#111;nt&#97;ct' + '&#64;';
 addy86831 = addy86831 + 'c&#111;nt&#97;ct&#117;s' + '&#46;' + 'c&#111;m';
 document.getElementById('cloak86831').innerHTML += '<a ' + path + '\'' + prefix + ':' + addy86831 + '\'>' +addy86831+'<\/a>';
 //-->
 </script><br /><a href="#"><span id="cloak575">This email address is being protected from spambots. You need JavaScript enabled to view it.</span><script type='text/javascript'>
 //<!--
 document.getElementById('cloak575').innerHTML = '';
 var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
 var path = 'hr' + 'ef' + '=';
 var addy575 = 'sh&#111;p' + '&#64;';
 addy575 = addy575 + 'c&#111;nt&#97;ct&#117;s' + '&#46;' + 'c&#111;m';
 document.getElementById('cloak575').innerHTML += '<a ' + path + '\'' + prefix + ':' + addy575 + '\'>' +addy575+'<\/a>';
 //-->
 </script></a></p>
<p>Nice Avenue 78a<br />06 78A London United Kingdom</p></div>
</div>
		</div>
	</div>				<div class="span3" style="">		<div class="moduletable_empty">
			
		
											<h3><span class="h-cl">CUSTOMER</span> SUPPORT</h3>
							<div class="module-content">
<div class="custom_empty"  >
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
</div>
		</div>
	</div>				<div class="span3" style="">		<div class="moduletable_empty">
			
		
											<h3><span class="h-cl">CUSTOMER</span> SERVICE</h3>
							<div class="module-content">
<ul class="menu">
<li class="item-567"><a href="/joomla3/avant/" ><span class="link-no-image">Terms &amp; Conditions</span></a></li><li class="item-568"><a href="/joomla3/avant/" ><span class="link-no-image">Privacy Policy</span></a></li></ul>

</div>
		</div>
	</div>											</div>
						<ul id="social-links">
			<li><a href="#TYPE-URL-HERE" title="Twitter" id="twitter" target="_blank"><span><img src="/joomla3/avant/templates/avant/images/twitter.png"></span></a></li>			<li><a href="#TYPE-URL-HERE" title="Google Plus" id="gplus" target="_blank"><span><img src="/joomla3/avant/templates/avant/images/gplus.png"></span></a></li>			<li><a href="#TYPE-URL-HERE" title="Facebook" id="facebook" target="_blank"><span><img src="/joomla3/avant/templates/avant/images/facebook.png"></span></a></li>			<li><a href="#TYPE-URL-HERE" title="RSS" id="rss" target="_blank"><span><img src="/joomla3/avant/templates/avant/images/rss.png"></span></a></li>			<li><a href="#TYPE-URL-HERE" title="Linkedin" id="linkedin" target="_blank"><span><img src="/joomla3/avant/templates/avant/images/linkedin.png"></span></a></li>			<li><a href="#TYPE-URL-HERE" title="youtube" id="youtube" target="_blank"><span><img src="/joomla3/avant/templates/avant/images/youtube.png"></span></a></li>			<li><a href="#TYPE-URL-HERE" title="vimeo" id="vimeo" target="_blank"><span><img src="/joomla3/avant/templates/avant/images/vimeo.png"></span></a></li>			<li><a href="#TYPE-URL-HERE" title="stumbleupon" id="stumbleupon" target="_blank"><span><img src="/joomla3/avant/templates/avant/images/stumbleupon.png"></span></a></li>			<li><a href="#TYPE-URL-HERE" title="digg" id="digg" target="_blank"><span><img src="/joomla3/avant/templates/avant/images/digg.png"></span></a></li>			<li><a href="#TYPE-URL-HERE" title="Blogger" id="blogger" target="_blank"><span><img src="/joomla3/avant/templates/avant/images/blogger.png"></span></a></li>			</ul>
					</div>
		<div class="clear"> </div>
		
		<div id="footer-line" class="row-fluid">
			<div class="span12">
<div class="custom"  >
	<p style="text-align: center;">© 2014 Add your web site copyright information here<br /> Add more information here in the web site footer</p></div>
</div>					</div>
	</div>
</footer>


<script type="text/javascript" src="/joomla3/avant/templates/avant/js/jquery.backstretch.min.js"></script>
<script type="text/javascript">
jQuery("#welcome-box").backstretch("/joomla3/avant/images/welcome-box-bg.jpg");
jQuery("footer").backstretch("/joomla3/avant/images/footer-bg.jpg");
</script>


</body>
</html>