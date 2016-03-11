<?php
define('MAGENTO_ROOT', (dirname(__FILE__).'../../../../../../'));
$mageFilename = MAGENTO_ROOT . '/app/Mage.php';
require_once $mageFilename;
umask(0);
Mage::app();

$config = Mage::getStoreConfig('mdloption');
$color_helper = Mage::helper('mdloption/color');

header("Content-type: text/css; charset: UTF-8");
?>

<?php if ( $config['genral_theme_setting']['page-width'] ) : ?>
.page,.headerfix .globle-width .header-container .container, .hideTopNav .header-wrapper02 + .header-wrapper02 .container
{max-width:<?php echo $config['genral_theme_setting']['page-width']; ?>px;}
<?php endif; ?>

<?php if ( $config['genral_theme_setting']['page-bg'] ) : ?>
.page,.hideTopNav .header-wrapper02 + .header-wrapper02, .hideTopNav .header-container 
{background-color:<?php echo $config['genral_theme_setting']['page-bg']; ?>;}
<?php endif; ?>

<?php if ( $config['genral_theme_setting']['theme-color-option'] ) : ?>

<?php if ( $config['genral_theme_setting']['enable_font'] ) : ?>
body
{font-family:"<?php echo $config['genral_theme_setting']['font']; ?>"} 
<?php endif; ?>

<?php if ( $config['genral_theme_setting']['font_size'] ) : ?>
body
{font-size:<?php echo $config['genral_theme_setting']['font_size']; ?>px;}
<?php endif; ?>

<?php if($config['genral_theme_setting']['header_bg'] ) : ?>
.mainHeaderPan, .hideTopNav .mainHeaderPan 
{background-color:<?php echo $config['genral_theme_setting']['header_bg']; ?>}
<?php endif; ?>
<?php if($config['genral_theme_setting']['header_anchore_color'] ) : ?>
.header-container .header-top .top-links.staticLink a, .header-container .header-top .top-links li span, .header-container .header-top .social-media li a,
.header-wrapper03 .header-top .links li a
{color:<?php echo $config['genral_theme_setting']['header_anchore_color']; ?>}
<?php endif; ?>

<?php if($config['genral_theme_setting']['header_toplink_color'] ) : ?>
.header-container .header-wrapper03 .header-top .links li a,
.mainHeaderPan .header a, .header-container .header-top .top-links li a
{color:<?php echo $config['genral_theme_setting']['header_toplink_color']; ?>}
<?php endif; ?>

<?php if($config['genral_theme_setting']['header_text_color'] ) : ?>
.mainHeaderPan .header-top, 
.select_lang span, 
.currency_pan span, 
.header .welcome-msg, 
.header_cart .classy a, 
.header_cart .classy span,
.header-container .header-top .language-switcher label, .header-container  .header-top .header_currency label, .header-container .header-top .call-us label, .header-container  .header-top .welcome-msg
{color:<?php echo $config['genral_theme_setting']['header_text_color']; ?>}
<?php endif; ?>

<?php if($config['genral_theme_setting']['header_top_bar'] ) : ?>
.header-container .header-top
{background:<?php echo $config['genral_theme_setting']['header_top_bar']; ?>}
<?php endif; ?>

<?php if($config['genral_theme_setting']['block_content_bg'] ) : ?>
.block-content,
.cart .discount, 
.cart .shipping,  
.cart .totals
{background:<?php echo $config['genral_theme_setting']['block_content_bg']; ?>}
<?php endif; ?>

<?php if($config['genral_theme_setting']['block_content_border_color'] ) : ?>
.block-content,
.cart .discount, 
.cart .shipping,  
.cart .totals,
.block-layered-nav .block-content
{border-color:<?php echo $config['genral_theme_setting']['block_content_border_color']; ?>}
<?php endif; ?>

<?php if($config['genral_theme_setting']['header_cart_bg'] ) : ?>
.header .header_cart{background:<?php echo $config['genral_theme_setting']['header_cart_bg']; ?>}
<?php endif; ?>

<?php if($config['genral_theme_setting']['header_cart_color'] ) : ?>
.block-cart.header_cart .bag, .block-cart.header_cart .classy a, .block-cart.header_cart .classy span{color:<?php echo $config['genral_theme_setting']['header_cart_color']; ?>}
<?php endif; ?>

<?php if($config['genral_theme_setting']['breadcrumbs_anchore'] ) : ?>
.breadcrumbs ul li a{color:<?php echo $config['genral_theme_setting']['breadcrumbs_anchore']; ?>}
<?php endif; ?>

<?php if($config['genral_theme_setting']['breadcrumbs_text'] ) : ?>
.breadcrumbs ul li{color:<?php echo $config['genral_theme_setting']['breadcrumbs_text']; ?>}
<?php endif; ?>





<?php if ( $config['genral_theme_setting']['color'] ) : ?>
.nav-container.span12, 
.social-link a:hover, 
.headingBox .headingIcons, 
.bullet, .viewAll, 
.headingBox .headingIcons, 
ul.add-to-links li a.link-wishlist, 
ul.add-to-links li a.link-compare, 
.mix_wrapper .jcarousel-prev, 
.mix_wrapper .jcarousel-next, 
.nav-width.scrollNav, .goTop a, 
.direction, 
.sbOptions, 
.form-subscribe button.button span, 
.dec.add, 
.add, 
.product_custom_content ul li span, 
.block-progress .block-title, 
.mobMenu h1, 
.bottomBox .link-wishlist, 
.bottomBox .compareR, 
.block .block-title,
.pager .pages li span, .pager .pages li a,
.footer-container,
.customNavigation a, .product-view .product-shop .nextPre a, .product-view .more-views .jcarousel-prev, .product-view .more-views .jcarousel-next,
.bottomBox button.button span, .compareR, .sliderNab a, .viewAll, .bottomBox .fancybox, .product-view .product-shop .add-to-links a, .email-friend a, .link-wishlist, .testimonial-3 .pagination a,
.quick_product .add-to-cart .qty_pan .add, .product-shop .add-to-cart .qty_pan .add,
.quick_product button.button span, .product-shop button.button span,
.cart .discount button span, .cart .shipping button span,
button.btn-checkout span, button.btn-checkout span span,
.cart-table .btn-empty span, .cart-table .btn-continue span, .cart-table .btn-update span,
.button-b, button.button span, 
.sorter .direction, 
.pro-static-block li .f-left, 
.add-to-cart .qty_pan .add, 
.opc .active .step-title .number, 
.opc .allow .step-title .number ,
.goTop,
.mix_wrapper ul li a.link-wishlist, 
.mix_wrapper ul li a.compareR, 
.bottomBox .link-wishlist, 
.block-poll button.button span,
#fancybox-close,
.product-view .box-tags .form-add button.button span,
.account-login .content h2,
.account-login .form-list .input-box:before,
.header-wrapper02 .header-top .language-switcher, .header-wrapper02 .header-top .header_currency,
.header-wrapper02 .block-cart .summary,
.bottomBox .compareR{
    background-color:<?php echo $config['genral_theme_setting']['color']; ?>;
}

.subtitle, 
.sub-title, 
.sorter , 
.toolbar .sorter .view-mode strong, 
.banner-top .container li em, 
.featured-block li .fa,
.twitter-twets li:before,
.block-layered-nav dt .toggleBtn,
.item .bottomBox2 button.button > span .fa, .item .bottomBox2 .fancybox.btn .fa, .secondViewInner .itemInner .fancybox .fa,
.item .bottomBox2 .link-wishlist .fa, .item .bottomBox2 .compareR .fa
{color:<?php echo $config['genral_theme_setting']['color']; ?>;}


.quick_product button.button span, .product-shop button.button span,
.button-b, button.button span,
#fancybox-close,
.cart-table .btn-empty span, .cart-table .btn-continue span, .cart-table .btn-update span,
.block-poll button.button span
{border-color:<?php echo $config['genral_theme_setting']['color']; ?>;}



.flexsliderSide, 
.opc .active .step-title .number, 
.opc .allow .step-title .number
{border-color:<?php echo $config['genral_theme_setting']['color']; ?>;}
<?php endif; ?>

<?php if ( $config['genral_theme_setting']['hover_color'] ) : ?>
.mix_wrapper .jcarousel-prev:hover, 
.mix_wrapper .jcarousel-next:hover, 
ul.add-to-links li a.link-wishlist:hover, 
ul.add-to-links li a.link-compare:hover, 
.prod-next:hover, 
.prod-prev:hover, 
.prod-next:hover, 
.prod-prev:hover, 
.more-views .jcarousel-next.jcarousel-next-horizontal:hover, 
.more-views .jcarousel-prev.jcarousel-prev-horizontal:hover, 
.product_custom_content ul li:hover span, 
.viewAll:hover, 
.flexslider .flex-prev:hover, 
.theme-default a.nivo-prevNav:hover, 
.theme-default a.nivo-nextNav:hover, 
.flexslider .flex-next:hover
{background-color:<?php echo $config['genral_theme_setting']['hover_color']; ?>;}
<?php endif; ?>

<?php if ( $config['genral_theme_setting']['body_font_color'] ) : ?>
body
{color:<?php echo $config['genral_theme_setting']['body_font_color']; ?>;}
<?php endif; ?>
<?php if ( $config['genral_theme_setting']['color'] ) : ?>
ul.promo li, #nav li.level-top.active > a, #nav li.level-top > a:hover, .searchPan, .compare-content, .remain_cart, #nav li.level-top.over > a {border-bottom-color:<?php echo $config['genral_theme_setting']['color']; ?>;}
<?php endif; ?>
<?php if ( $config['genral_theme_setting']['color'] ) : ?>
.free-shipping span, .footer ul.footer_links.about li a {color:<?php echo $config['genral_theme_setting']['color']; ?>;}
<?php endif; ?>
<?php if ( $config['genral_theme_setting']['anchor_color'] ) : ?>
a{color:<?php echo $config['genral_theme_setting']['anchor_color']; ?>;}
<?php endif; ?>
<?php if ( $config['genral_theme_setting']['anchor_hover'] ) : ?>
a:hover{color:<?php echo $config['genral_theme_setting']['anchor_hover']; ?>;}
<?php endif; ?>
<?php if ( $config['genral_theme_setting']['left_menu_bg'] ) : ?>
.magicat-container{background-color:<?php echo $config['genral_theme_setting']['left_menu_bg']; ?>;}
<?php endif; ?>
<?php if ( $config['genral_theme_setting']['block_heading_bg'] ) : ?>
.block .block-title strong, .block .block-title{background-color:<?php echo $config['genral_theme_setting']['block_heading_bg']; ?>; }
<?php endif; ?>
<?php if ( $config['genral_theme_setting']['block_heading_color'] ) : ?>
.block .block-title strong, .block-title h2{color:<?php echo $config['genral_theme_setting']['block_heading_color']; ?>; }
<?php endif; ?>
<?php if ( $config['genral_theme_setting']['content_heading'] ) : ?>
.page-title h1, .page-title h2{color:<?php echo $config['genral_theme_setting']['content_heading']; ?>; }
<?php endif; ?>
<?php if ( $config['genral_theme_setting']['new_batch'] ) : ?>
.badge span.new{background-color:<?php echo $config['genral_theme_setting']['new_batch']; ?>;}
<?php endif; ?>
<?php if ( $config['genral_theme_setting']['new_batch_color'] ) : ?>
.badge span.new strong{color:<?php echo $config['genral_theme_setting']['new_batch_color']; ?>;}
<?php endif; ?>

<?php if ( $config['genral_theme_setting']['sale_batch'] ) : ?>
.badge span.sale{background-color:<?php echo $config['genral_theme_setting']['sale_batch']; ?>;}
<?php endif; ?>
<?php if ( $config['genral_theme_setting']['sale_batch_color'] ) : ?>
.badge span.sale strong{color:<?php echo $config['genral_theme_setting']['sale_batch_color']; ?>;}
<?php endif; ?>
<?php endif; ?>
/*----*/

<?php if ( $config['top_menu']['theme-color-option'] ) : ?>
<?php if ( $config['top_menu']['contact_bg_color'] ) : ?>
.header .links a.contact{background-color:<?php echo $config['top_menu']['contact_bg_color']; ?>;}
<?php endif; ?>
<?php if ( $config['top_menu']['my_account_bg'] ) : ?>
.header .links li.myaccount a{background-color:<?php echo $config['top_menu']['my_account_bg']; ?>;}
<?php endif; ?>
<?php if ( $config['top_menu']['my_wishlist_bg'] ) : ?>
.header .links li a.wishlist{background-color:<?php echo $config['top_menu']['my_wishlist_bg']; ?>;}
<?php endif; ?>
<?php if ( $config['top_menu']['checkout_bg_color'] ) : ?>
.header .links li a.top-link-checkout{background-color:<?php echo $config['top_menu']['checkout_bg_color']; ?>;}
<?php endif; ?>
<?php if ( $config['top_menu']['login_bg_color'] ) : ?>
.header .links li.last a{background-color:<?php echo $config['top_menu']['login_bg_color']; ?>;}
<?php endif; ?>
<?php if ( $config['top_menu']['shopping_cart_bg'] ) : ?>
.block-cart .summary{background-color:<?php echo $config['top_menu']['shopping_cart_bg']; ?>;}
<?php endif; ?>
<?php endif; ?>

/*Navigation*/
    
<?php if ( $config['navsettings']['theme-color-option'] ) : ?>

     
      <?php if ( $config['navsettings']['main_nav_active_color'] ) : ?>
      .header-container ul#nav > li.active > a,
      .header-container ul.sf-menu > li.active > a
        {color:<?php echo $config['navsettings']['main_nav_active_color']; ?>;}
     <?php endif; ?>
   
     <?php if ( $config['navsettings']['nav_color_hover'] ) : ?>
        .header-container ul#nav > li:hover > a,
        .header-container ul#nav > li.active:hover > a,
        .header-container .sf-menu > li:hover > a,
        .header-container ul.sf-menu > li.active:hover > a
    	{color:<?php echo $config['navsettings']['nav_color_hover']; ?>;}
     <?php endif; ?>
    
    <?php if ( $config['navsettings']['nav_color'] ) : ?>
       .mainHeaderPan #nav > li > a,
       .mainHeaderPan .sf-menu > li > a
    	{color:<?php echo $config['navsettings']['nav_color']; ?>;}
    <?php endif; ?>
    
    <?php if ( $config['navsettings']['nav_submenu_background'] ) : ?>
     .header-container ul#nav li ul.level0,
     .header-container ul#nav li ul.level0:after,
     ul#nav li ul.level0 li.level1:before,
     .mainHeaderPan .sf-menu li ul li
      {background:<?php echo $config['navsettings']['nav_submenu_background']; ?>;}
    <?php endif; ?>
    
    
    <?php if ( $config['navsettings']['nav_submenu_heading_bg'] ) : ?>
      #nav li ul.level0 li.level1 > a 
       {background:<?php echo $config['navsettings']['nav_submenu_heading_bg']; ?>;}
    <?php endif; ?>
    
     <?php if ( $config['navsettings']['nav_submenu_heading_color'] ) : ?>
      #nav li ul.level0 li.level1 > a 
       {color:<?php echo $config['navsettings']['nav_submenu_heading_color']; ?>;}
    <?php endif; ?>
     
    <?php if ( $config['navsettings']['nav_submenu_color'] ) : ?>
     .mainHeaderPan ul#nav li ul.level0 li li a,
     .mainHeaderPan .header .sf-menu li li a
     {color:<?php echo $config['navsettings']['nav_submenu_color']; ?>;}
    <?php endif; ?>
     
    <?php if ( $config['navsettings']['nav_submenu_color_hover'] ) : ?>
     .mainHeaderPan ul#nav li ul.level0 li li:hover a,
     .mainHeaderPan .header .sf-menu li li:hover > a
     {color:<?php echo $config['navsettings']['nav_submenu_color_hover']; ?>;}
    <?php endif; ?>
     
     <?php if ( $config['navsettings']['nav_submenu_hover_bg'] ) : ?>
     .mainHeaderPan ul#nav li ul.level0 li li:hover,
     .mainHeaderPan ul#nav li ul.level0 li li:hover a ,
     .mainHeaderPan .header .sf-menu li li:hover
    	{background:<?php echo $config['navsettings']['nav_submenu_hover_bg']; ?>;}
     <?php endif; ?>
      
     <?php if ( $config['navsettings']['sub_menu_bottom_border'] ) : ?>
    	{border-color:<?php echo $config['navsettings']['sub_menu_bottom_border']; ?>;}
     <?php endif; ?>
     
        
<?php endif; ?>


/*button setting*/
<?php if ( $config['buttonSetting']['theme-color-option'] ) : ?>
<?php if ($config['buttonSetting']['enable_font']==1) :?>
<?php if ( $config['buttonSetting']['button_font'] ) : ?>
button.button span, .viewCart, a.btn{font-family:"<?php echo $config['buttonSetting']['button_font']; ?>"} 
<?php endif; ?>
<?php endif; ?>

<?php if ( $config['buttonSetting']['button_color'] ) : ?>
.item .bottomBox2 .fancybox.btn, 
.secondViewInner .itemInner .fancybox,
.item .bottomBox2 button.button > span,
.item .bottomBox2 button.button > span span,
.page button.button span, 
.page button.button span span, 
.viewCart, 
.form-subscribe button.button span, 
button.button.btn-mdlcart span, 
button.button.btn-mdlcart span span,
.bottomBox a.btn, .button-b,
.cart-table .btn-empty span, 
.cart-table .btn-continue span, 
.cart-table .btn-update span,
.cart .discount button span, 
.cart .shipping button span
{background-color:<?php echo $config['buttonSetting']['button_color']; ?>;}
<?php endif; ?>

<?php if ( $config['buttonSetting']['button_hover'] ) : ?>
.item .bottomBox2 .fancybox.btn:hover, 
.secondViewInner .itemInner .fancybox:hover,
.item .bottomBox2 button.button:hover > span,
.item .bottomBox2 button.button:hover > span span,
.page button.button:hover span, 
.page button.button:hover span span, 
.viewCart, 
.form-subscribe button.button:hover span, 
button.button.btn-mdlcart:hover span, 
button.button.btn-mdlcart:hover span span,
.bottomBox a.btn:hover, .button-b:hover
{background-color:<?php echo $config['buttonSetting']['button_hover']; ?>;}
<?php endif; ?>

<?php if ( $config['buttonSetting']['button_text'] ) : ?>
.item .bottomBox2 .fancybox.btn, 
.secondViewInner .itemInner .fancybox,
.item .bottomBox2 button.button > span,
.item .bottomBox2 button.button > span span,
.item .bottomBox2 button.button > span .fa, 
.item .bottomBox2 .fancybox.btn .fa, 
.secondViewInner .itemInner .fancybox .fa,
.page button.button span, 
.page button.button span span, 
.viewCart, 
.form-subscribe button.button span, 
button.button.btn-mdlcart span, 
button.button.btn-mdlcart span span,
.bottomBox a.btn, .button-b
{color:<?php echo $config['buttonSetting']['button_text']; ?>;}
<?php endif; ?>

<?php if ( $config['buttonSetting']['button_text_hover'] ) : ?>
.item .bottomBox2 .fancybox.btn:hover, 
.secondViewInner .itemInner .fancybox:hover,
.item .bottomBox2 button.button:hover > span,
.item .bottomBox2 button.button:hover > span span,
.item .bottomBox2 button.button:hover > span .fa, 
.item .bottomBox2 .fancybox.btn:hover .fa, 
.secondViewInner .itemInner .fancybox:hover .fa,
.page button.button:hover span, 
.page button.button:hover span span, 
.viewCart, 
.form-subscribe button.button:hover span, 
button.button.btn-mdlcart:hover span, 
button.button.btn-mdlcart:hover span span,
.bottomBox a.btn:hover, .button-b:hover
{color:<?php echo $config['buttonSetting']['button_text_hover']; ?>;}
<?php endif; ?>

<?php if ( $config['buttonSetting']['next_pre_btn'] ) : ?>
.mix_wrapper .jcarousel-prev, .mix_wrapper .jcarousel-next, .slider-box .viewAll, .nextPre .prod-prev, .nextPre .prod-next,
.mix_wrapper .pagination .prev5, .mix_wrapper .pagination .next5
{background-color:<?php echo $config['buttonSetting']['next_pre_btn']; ?>; }
<?php endif; ?>
<?php endif; ?>
/*-----------*/

/*price setting*/
<?php if ( $config['priceSetting']['theme-color-option'] ) : ?>
<?php if ($config['priceSetting']['enable_font']==1) :?>
<?php if ( $config['priceSetting']['price_font'] ) : ?>
.price-box{font-family:"<?php echo $config['priceSetting']['price_font']; ?>"} 
<?php endif; ?>
<?php endif; ?>

<?php if ( $config['priceSetting']['regular_price'] ) : ?>
.item .regular-price .price, 
.item .price-box .price, 
.item .minimal-price .price-label,
.regular-price .price{color:<?php echo $config['priceSetting']['regular_price']; ?>;}
<?php endif; ?>

<?php if ( $config['priceSetting']['special_price'] ) : ?>
.item .minimal-price-link .price, 
.special-price .price, 
.minimal-price-link .price
{color:<?php echo $config['priceSetting']['special_price']; ?>;}
<?php endif; ?>

<?php if ( $config['priceSetting']['special_price_label'] ) : ?>
.special-price .price-label, .minimal-price-link .label{color:<?php echo $config['priceSetting']['special_price_label']; ?>;}
<?php endif; ?>
<?php endif; ?>

/*footer setting*/
<?php if ( $config['footer_setting']['theme-color-option'] ) : ?>
<?php if ( $config['footer_setting']['footer_bg'] ) : ?>
.footer-container{background-color:<?php echo $config['footer_setting']['footer_bg']; ?>; }
<?php endif; ?>

<?php if ( $config['footer_setting']['footer_bg_bottom'] ) : ?>
.copyright{background-color:<?php echo $config['footer_setting']['footer_bg_bottom']; ?>; }
<?php endif; ?>

<?php if ( $config['footer_setting']['footer_heading'] ) : ?>
.footer-links h3, .footer-bottom h3, .mainFooterPan .footer_bottom h3{color:<?php echo $config['footer_setting']['footer_heading']; ?>; }
<?php endif; ?>
<?php if ( $config['footer_setting']['footer_heading'] ) : ?>
.footer-container .footer-links h3:after{background:<?php echo $config['footer_setting']['footer_heading']; ?>; }
<?php endif; ?>

<?php if ( $config['footer_setting']['footer_text'] ) : ?>
.footer-bottom p, .footer-info-box li:before, .footer-info-box li , .mainFooterPan03 .footer-links ul li, .mainFooterPan .copyright .copyText ,.mainFooterPan .footer_bottom p, .footer ul.connect li{color:<?php echo $config['footer_setting']['footer_text']; ?>; }
<?php endif; ?>
<?php if ( $config['footer_setting']['footer_anchor'] ) : ?>
.mainFooterPan03 .footer-links ul li a, .footer-bottom-links li a, .footer-links ul li a, .mainFooterPan .footer a, .mainFooterPan .footer ul.footer_links li a{color:<?php echo $config['footer_setting']['footer_anchor']; ?>; }
<?php endif; ?>
<?php if ( $config['footer_setting']['footer_hover'] ) : ?>
.footer-links ul li:hover a,.mainFooterPan .footer a:hover, .mainFooterPan .footer ul.footer_links li a:hover{color:<?php echo $config['footer_setting']['footer_hover']; ?>; }
<?php endif; ?>
<?php endif; ?>

