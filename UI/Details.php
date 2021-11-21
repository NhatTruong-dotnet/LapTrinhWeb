<!doctype html>
<!--[if IE 9]> <html class="ie9 no-js" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
    content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <meta name="theme-color" content="#000000">
  <link rel="canonical" href="https://nuranium-electronic.myshopify.com/products/rimond-balo-stud-cum">


  <link rel="shortcut icon" href="images/TitleIcon.png" type="image/png">
    <?php
      include('config/connectdb.php');
      if(isset($_GET['id'])){
        //Truy xuất chi tiết sản phẩm
        $sqlSelectSanPham = "SELECT * FROM `product` sp 
                              JOIN `category` cate ON sp.category_id = cate.category_id
                              JOIN `product_image` pdi ON sp.product_id = pdi.product_id  
                              WHERE sp.product_id =".$_GET['id'];
        $resultSelectSanPham = mysqli_query($conn, $sqlSelectSanPham);
        $row = mysqli_fetch_row($resultSelectSanPham);
        //Truy xuất các sản phẩm liên quan
        $sqlSelectSanPhamRelated = "SELECT * FROM `product` sp
                              JOIN `product_image` pdi ON sp.product_id = pdi.product_id  
                              WHERE sp.category_id =".$row[5];
        $resultSelectSanPhamRelated = mysqli_query($conn, $sqlSelectSanPhamRelated);
        $sanphamRelatedRow = array();
        $i_length = 0;
        while ($rowRelated = mysqli_fetch_array($resultSelectSanPhamRelated, MYSQLI_ASSOC)) {
            $sanphamRelatedRow[] = array(
                $rowRelated['product_id'],
                $rowRelated['name'],
                $rowRelated['description'],
                $rowRelated['status'],
                $rowRelated['discount'],
                $rowRelated['category_id'],
                number_format($rowRelated['price'], 0, ",", "."),
                $rowRelated['unit'],
                $rowRelated['created_date'],
                $rowRelated['currency'],
                $rowRelated['amount'],
                $rowRelated['image_blob']
            );
            $i_length++;
        }
        // echo "<pre>";
        // print_r($row);
        // echo "<pre>";
        // print_r($sanphamRelatedRow);
        // echo "<pre>";
        // die;
      }
    ?>

  <title>
    <?php echo $row[1]; ?>&ndash; Hexa Food
  </title>


  <meta name="description"
    content="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridicu lus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringil">







  <meta property="og:site_name" content="Warehouse Electronic">
  <meta property="og:url" content="https://nuranium-electronic.myshopify.com/products/rimond-balo-stud-cum">
  <meta property="og:title" content="Rimond Balo Stud Cum">
  <meta property="og:type" content="product">
  <meta property="og:description"
    content="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridicu lus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringil">

  <meta property="og:price:amount" content="636.00">
  <meta property="og:price:currency" content="USD">

  <meta property="og:image"
    content="http://cdn.shopify.com/s/files/1/0272/1493/8165/products/15_85ddb99d-27d8-4425-9640-ca6307daade2_1200x1200.jpg?v=1603253183">
  <meta property="og:image"
    content="http://cdn.shopify.com/s/files/1/0272/1493/8165/products/9_903bd6e5-4773-4b43-8e5c-053061f35e15_1200x1200.jpg?v=1603253186">
  <meta property="og:image"
    content="http://cdn.shopify.com/s/files/1/0272/1493/8165/products/10_a56e67ac-4cfc-40fd-81b0-18aaa2704535_1200x1200.jpg?v=1603253186">
  <meta property="og:image:secure_url"
    content="https://cdn.shopify.com/s/files/1/0272/1493/8165/products/15_85ddb99d-27d8-4425-9640-ca6307daade2_1200x1200.jpg?v=1603253183">
  <meta property="og:image:secure_url"
    content="https://cdn.shopify.com/s/files/1/0272/1493/8165/products/9_903bd6e5-4773-4b43-8e5c-053061f35e15_1200x1200.jpg?v=1603253186">
  <meta property="og:image:secure_url"
    content="https://cdn.shopify.com/s/files/1/0272/1493/8165/products/10_a56e67ac-4cfc-40fd-81b0-18aaa2704535_1200x1200.jpg?v=1603253186">


  <meta name="twitter:site" content="@vinovatheme">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Rimond Balo Stud Cum">
  <meta name="twitter:description"
    content="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridicu lus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringil">




  <link href="//fonts.googleapis.com/css?family=Roboto:200,300,400,400i,500,600,700,700i,800,900" rel="stylesheet"
    type="text/css" media="all" />




  <link href="//fonts.googleapis.com/css?family=Poppins:400,200,300,400,400i,500,600,600i,700,700i,800,900,900i"
    rel="stylesheet" type="text/css" media="all" />


  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">




  <link href="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/bootstrap.min.css?v=1870661302080397320"
    rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/font-awesome.min.css?v=2186963269736709578"
    rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/animate.min.css?v=17994142116093151525"
    rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/common.scss.css?v=1783903928985450775"
    rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/owl.carousel.min.css?v=12020896668547037267"
    rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/owl.theme.default.css?v=7403898552657340749"
    rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/slick.scss.css?v=4183328445935139797"
    rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/jquery.mmenu.all.css?v=4886679590842084323"
    rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/jquery.fancybox.css?v=64276779368273403"
    rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/jquery.ui.min.css?v=134184973364075517"
    rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/layout.scss.css?v=18147943782365055731"
    rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/theme.scss.css?v=6260282728517554258"
    rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/magnific-popup.css?v=13248041680675607908"
    rel="stylesheet" type="text/css" media="all" />

  <link href="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/responsive.scss.css?v=6115984924464988315"
    rel="stylesheet" type="text/css" media="all" />


  <script>
    var theme = {
      strings: {
        select_options: "Select Options",
        addToCart: "Add to cart",
        soldOut: "Sold out",
        unavailable: "Unavailable",
        showMore: "Show More",
        showLess: "Show Less",
        addressError: "Error looking up that address",
        addressNoResults: "No results for that address",
        addressQueryLimit: "You have exceeded the Google API usage limit. Consider upgrading to a \u003ca href=\"https:\/\/developers.google.com\/maps\/premium\/usage-limits\"\u003ePremium Plan\u003c\/a\u003e.",
        authError: "There was a problem authenticating your Google Maps account.",
        total: "Total",
        spend: "Spend",
        content_threshold: "Congratulations! You\u0026#39;ve got free shipping!",
        spend__html: "for free shipping",
        check_out: "Check out",
        remove: "Remove",
        remove_wishlist: "Remove Wishlist",
        add_to_wishlist: "translation missing: en.wishlist.wishlist.add_to_wishlist",
        added_to_wishlist: "translation missing: en.wishlist.wishlist.added_to_wishlist",
        view_cart: "View Cart"
      },
      moneyFormat: "\u003cspan class=\"money\"\u003e${{amount}}\u003c\/span\u003e",
      moneyFormatnojson: "\u003cspan class=\"money\"\u003e${{amount}}\u003c\/span\u003e",
      freeshipping_value: 2000
    }
    window.ajaxcart_type = 'pop_up';
    window.file_url = '//cdn.shopify.com/s/files/1/0272/1493/8165/files/?37953';
    window.asset_url = '//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/?37953';
    window.sidebar_multichoise = true;
    document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
    window.router = "";
  </script>

  <!--[if (lte IE 9) ]><script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/match-media.min.js?v=133481920766363426" type="text/javascript"></script><![endif]-->

  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/jquery.2.2.4.min.js?v=17029281091488042083"
    type="text/javascript"></script>



  <!--[if (gt IE 9)|!(IE)]><!-->
  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/lazysizes.js?v=11108925680240414664"
    async="async"></script>
  <!--<![endif]-->

  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/vendor.js?v=17488561840499520118" defer="defer">
  </script>

  <script
    src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js"
    type="text/javascript"></script>
  <script
    src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js"
    type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/history.js?v=11918144862523007200"
    type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/javascripts/currencies.js" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/jquery.currencies.min.js?v=7811281348689238064"
    type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/jquery.owl.carousel.min.js?v=1202207770212250950"
    defer="defer"></script>
  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/jquery.mmenu.all.min.js?v=2270961737868857635"
    defer="defer"></script>

  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/jquery.sticky-kit.min.js?v=16047785878809509472"
    defer="defer"></script>

  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/handlebars.min.js?v=13774848309150936004"
    defer="defer"></script>
  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/ajax-cart.js?v=5586912308121472721" defer="defer">
  </script>
  <script>
    jQuery(function ($) {
      ajaxCart.init({
        moneyFormat: "\u003cspan class=\"money\"\u003e${{amount}}\u003c\/span\u003e"
      });
    });

    jQuery('body').on('afterCartLoad.ajaxCart', function (evt, cart) {});
  </script>



  <script type="text/javascript"
    src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/jquery.zoom.min.js?v=12765501454049967912"
    defer=”defer”>
  </script>
  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/jquery.countdown.js?v=12021617251275445820"
    defer="defer">
  </script>
  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/theme.js?v=15969572028892212420" defer="defer">
  </script>
  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/global.js?v=13338212605681253444" defer="defer">
  </script>
  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/lazysizes.min.js?v=2452739876120086881"
    defer="defer"></script>
  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/jquery.lazy.min.js?v=12302263741863665774"
    defer="defer"></script>
  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/jquery.magnific-popup.js?v=13313941312436081541"
    defer="defer"></script>
  <script>
    window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');
  </script>
  <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/27214938165/digital_wallets/dialog">
  <link rel="alternate" type="application/json+oembed"
    href="https://nuranium-electronic.myshopify.com/products/rimond-balo-stud-cum.oembed">
  <script id="shopify-features" type="application/json">
    {
      "accessToken": "d8efa478165ba201a438240f394cbbe5",
      "betas": ["rich-media-storefront-analytics"],
      "domain": "nuranium-electronic.myshopify.com",
      "predictiveSearch": true,
      "shopId": 27214938165,
      "smart_payment_buttons_url": "https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js",
      "dynamic_checkout_cart_url": "https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js",
      "locale": "en"
    }
  </script>
  <script>
    var Shopify = Shopify || {};
    Shopify.shop = "nuranium-electronic.myshopify.com";
    Shopify.locale = "en";
    Shopify.currency = {
      "active": "USD",
      "rate": "1.0"
    };
    Shopify.country = "US";
    Shopify.theme = {
      "name": "Electronic index 2",
      "id": 83808649269,
      "theme_store_id": null,
      "role": "unpublished"
    };
    Shopify.theme.handle = "null";
    Shopify.theme.style = {
      "id": null,
      "handle": null
    };
    Shopify.cdnHost = "cdn.shopify.com";
  </script>
  <script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
  <script>
    ! function (o) {
      function n() {
        var o = [];

        function n() {
          o.push(Array.prototype.slice.apply(arguments))
        }
        return n.q = o, n
      }
      var t = o.Shopify = o.Shopify || {};
      t.loadFeatures = n(), t.autoloadFeatures = n()
    }(window);
  </script>
  <script>
    (function () {
      function asyncLoad() {
        var urls = ["\/\/productreviews.shopifycdn.com\/assets\/v4\/spr.js?shop=nuranium-electronic.myshopify.com"];
        for (var i = 0; i < urls.length; i++) {
          var s = document.createElement('script');
          s.type = 'text/javascript';
          s.async = true;
          s.src = urls[i];
          var x = document.getElementsByTagName('script')[0];
          x.parentNode.insertBefore(s, x);
        }
      };
      if (window.attachEvent) {
        window.attachEvent('onload', asyncLoad);
      } else {
        window.addEventListener('load', asyncLoad, false);
      }
    })();
  </script>
  <script id="__st">
    var __st = {
      "a": 27214938165,
      "offset": -14400,
      "reqid": "9f009f92-4975-4cd7-b871-23127f99255b",
      "pageurl": "nuranium-electronic.myshopify.com\/products\/rimond-balo-stud-cum",
      "u": "dff22bb4302b",
      "cid": 5262876049461,
      "p": "product",
      "rtyp": "product",
      "rid": 4907756027957
    };
  </script>
  <script>
    window.ShopifyPaypalV4VisibilityTracking = true;
  </script>
  <script>
    ! function (o) {
      o.addEventListener("DOMContentLoaded", function () {
        window.Shopify = window.Shopify || {}, window.Shopify.recaptchaV3 = window.Shopify.recaptchaV3 || {
          siteKey: "6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"
        };
        var t = ['form[action*="/contact"] input[name="form_type"][value="contact"]',
          'form[action*="/comments"] input[name="form_type"][value="new_comment"]',
          'form[action*="/account"] input[name="form_type"][value="customer_login"]',
          'form[action*="/account"] input[name="form_type"][value="recover_customer_password"]',
          'form[action*="/account"] input[name="form_type"][value="create_customer"]',
          'form[action*="/contact"] input[name="form_type"][value="customer"]'
        ].join(",");

        function n(e) {
          e = e.target;
          null == e || null != (e = function e(t, n) {
            if (null == t.parentElement) return null;
            if ("FORM" != t.parentElement.tagName) return e(t.parentElement, n);
            for (var o = t.parentElement.action, r = 0; r < n.length; r++)
              if (-1 !== o.indexOf(n[r])) return t.parentElement;
            return null
          }(e, ["/contact", "/comments", "/account"])) && null != e.querySelector(t) && ((e = o.createElement(
              "script")).setAttribute("src",
              "https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"), o.body.appendChild(
              e), o.removeEventListener("focus", n, !0), o.removeEventListener("change", n, !0), o
            .removeEventListener("click", n, !0))
        }
        o.addEventListener("click", n, !0), o.addEventListener("change", n, !0), o.addEventListener("focus", n, !0)
      })
    }(document);
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const previewBarInjector = new Shopify.PreviewBarInjector({
        targetNode: document.body,
        iframeRoot: 'https://nuranium-electronic.myshopify.com',
        iframeSrc: 'https://nuranium-electronic.myshopify.com/preview_bar',
        previewToken: 'lvl9n2atav3sxald',
        themeStoreId: '',
        permanentDomain: 'nuranium-electronic.myshopify.com',
      });
      previewBarInjector.init();
    });
  </script>
  <script integrity="sha256-pVJhp6mHZ0dJmJmDtYierarGeV2NSFSPthRwqW7blSQ=" data-source-attribution="shopify.loadfeatures"
    defer="defer"
    src="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/load_feature-a55261a7a987674749989983b5889eadaac6795d8d48548fb61470a96edb9524.js"
    crossorigin="anonymous"></script>
  <script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4="
    data-source-attribution="shopify.dynamic-checkout" defer="defer"
    src="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js"
    crossorigin="anonymous"></script>
  <script integrity="sha256-HjpxOt032ssmooRgVOW/c8loNAwGy026qLmF3OAx9M0=" defer="defer"
    src="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/bars/preview_bar_injector-1e3a713add37dacb26a2846054e5bf73c968340c06cb4dbaa8b985dce031f4cd.js"
    crossorigin="anonymous"></script>

  <style id="shopify-dynamic-checkout">
    .shopify-payment-button__button--hidden {
      visibility: hidden;
    }

    .shopify-payment-button__button {
      border-radius: 4px;
      border: none;
      box-shadow: 0 0 0 0 transparent;
      color: white;
      cursor: pointer;
      display: block;
      font-size: 1em;
      font-weight: 500;
      line-height: 1;
      text-align: center;
      width: 100%;
      transition: background 0.2s ease-in-out;
    }

    .shopify-payment-button__button[disabled] {
      opacity: 0.6;
      cursor: default;
    }

    .shopify-payment-button__button--unbranded {
      background-color: #1990c6;
      padding: 1em 2em;
    }

    .shopify-payment-button__button--unbranded:hover:not([disabled]) {
      background-color: #136f99;
    }

    .shopify-payment-button__more-options {
      background: transparent;
      border: 0 none;
      cursor: pointer;
      display: block;
      font-size: 1em;
      margin-top: 1em;
      text-align: center;
      width: 100%;
    }

    .shopify-payment-button__more-options:hover:not([disabled]) {
      text-decoration: underline;
    }

    .shopify-payment-button__more-options[disabled] {
      opacity: 0.6;
      cursor: default;
    }

    .shopify-payment-button__button--branded {
      display: flex;
      flex-direction: column;
      min-height: 44px;
      position: relative;
      z-index: 1;
    }

    .shopify-payment-button__button--branded .shopify-cleanslate {
      flex: 1 !important;
      display: flex !important;
      flex-direction: column !important;
    }
  </style>
  <script>
    window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');
  </script>
  <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
  <script>
    (function () {
      if ("sendBeacon" in navigator && "performance" in window) {
        var session_token = document.cookie.match(/_shopify_s=([^;]*)/);

        function handle_abandonment_event(e) {
          var entries = performance.getEntries().filter(function (entry) {
            return /monorail-edge.shopifysvc.com/.test(entry.name);
          });
          if (!window.abandonment_tracked && entries.length === 0) {
            window.abandonment_tracked = true;
            var currentMs = Date.now();
            var navigation_start = performance.timing.navigationStart;
            var payload = {
              shop_id: 27214938165,
              url: window.location.href,
              navigation_start,
              duration: currentMs - navigation_start,
              session_token: session_token && session_token.length === 2 ? session_token[1] : "",
              page_type: "product"
            };
            window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({
              schema_id: "online_store_buyer_site_abandonment/1.1",
              payload: payload,
              metadata: {
                event_created_at_ms: currentMs,
                event_sent_at_ms: currentMs
              }
            }));
          }
        }
        window.addEventListener('pagehide', handle_abandonment_event);
      }
    }());
  </script>
  <script>
    window.ShopifyAnalytics = window.ShopifyAnalytics || {};
    window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
    window.ShopifyAnalytics.meta.currency = 'USD';
    var meta = {
      "product": {
        "id": 4907756027957,
        "gid": "gid:\/\/shopify\/Product\/4907756027957",
        "vendor": "nuranium-electronic",
        "type": "",
        "variants": [{
          "id": 33119332040757,
          "price": 63600,
          "name": "Rimond Balo Stud Cum",
          "public_title": null,
          "sku": "E-00214"
        }]
      },
      "page": {
        "pageType": "product",
        "customerId": 5262876049461,
        "resourceType": "product",
        "resourceId": 4907756027957
      },
      "evids": {
        "pv": "Page View",
        "vprd": "Viewed Product",
        "ps": "Performed Search"
      }
    };
    for (var attr in meta) {
      window.ShopifyAnalytics.meta[attr] = meta[attr];
    }
  </script>
  <script>
    window.ShopifyAnalytics.merchantGoogleAnalytics = function () {

    };
  </script>
  <script class="analytics">
    (function () {
      var customDocumentWrite = function (content) {
        var jquery = null;

        if (window.jQuery) {
          jquery = window.jQuery;
        } else if (window.Checkout && window.Checkout.$) {
          jquery = window.Checkout.$;
        }

        if (jquery) {
          jquery('body').append(content);
        }
      };

      var hasLoggedConversion = function (token) {
        if (token) {
          return document.cookie.indexOf('loggedConversion=' + token) !== -1;
        }
        return false;
      }

      var setCookieIfConversion = function (token) {
        if (token) {
          var twoMonthsFromNow = new Date(Date.now());
          twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

          document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
        }
      }

      var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
      if (trekkie.integrations) {
        return;
      }
      trekkie.methods = [
        'identify',
        'page',
        'ready',
        'track',
        'trackForm',
        'trackLink'
      ];
      trekkie.factory = function (method) {
        return function () {
          var args = Array.prototype.slice.call(arguments);
          args.unshift(method);
          trekkie.push(args);
          return trekkie;
        };
      };
      for (var i = 0; i < trekkie.methods.length; i++) {
        var key = trekkie.methods[i];
        trekkie[key] = trekkie.factory(key);
      }
      trekkie.load = function (config) {
        trekkie.config = config || {};
        trekkie.config.initialDocumentCookie = document.cookie;
        var first = document.getElementsByTagName('script')[0];
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.onerror = function (e) {
          var scriptFallback = document.createElement('script');
          scriptFallback.type = 'text/javascript';
          scriptFallback.onerror = function (error) {
            var Monorail = {
              produce: function produce(monorailDomain, schemaId, payload) {
                var currentMs = new Date().getTime();
                var event = {
                  schema_id: schemaId,
                  payload: payload,
                  metadata: {
                    event_created_at_ms: currentMs,
                    event_sent_at_ms: currentMs
                  }
                };
                return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(
                  event));
              },
              sendRequest: function sendRequest(endpointUrl, payload) {
                // Try the sendBeacon API
                if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' &&
                  typeof window.Blob === 'function' && !Monorail.isIos12()) {
                  var blobData = new window.Blob([payload], {
                    type: 'text/plain'
                  });

                  if (window.navigator.sendBeacon(endpointUrl, blobData)) {
                    return true;
                  } // sendBeacon was not successful

                } // XHR beacon   

                var xhr = new XMLHttpRequest();

                try {
                  xhr.open('POST', endpointUrl);
                  xhr.setRequestHeader('Content-Type', 'text/plain');
                  xhr.send(payload);
                } catch (e) {
                  console.log(e);
                }

                return false;
              },
              isIos12: function isIos12() {
                return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window
                  .navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
              }
            };
            Monorail.produce('monorail-edge.shopifysvc.com',
              'trekkie_storefront_load_errors/1.1', {
                shop_id: 27214938165,
                theme_id: 83808649269,
                app_name: "storefront",
                context_url: window.location.href,
                source_url: "https://cdn.shopify.com/s/trekkie.storefront.b7d58785709ced02e06617916a2e2f5b990d2a57.min.js"
              });

          };
          scriptFallback.async = true;
          scriptFallback.src =
            'https://cdn.shopify.com/s/trekkie.storefront.b7d58785709ced02e06617916a2e2f5b990d2a57.min.js';
          first.parentNode.insertBefore(scriptFallback, first);
        };
        script.async = true;
        script.src = 'https://cdn.shopify.com/s/trekkie.storefront.b7d58785709ced02e06617916a2e2f5b990d2a57.min.js';
        first.parentNode.insertBefore(script, first);
      };
      trekkie.load({
        "Trekkie": {
          "appName": "storefront",
          "development": false,
          "defaultAttributes": {
            "shopId": 27214938165,
            "isMerchantRequest": null,
            "themeId": 83808649269,
            "themeCityHash": "5937899173288242431",
            "contentLanguage": "en",
            "currency": "USD"
          },
          "isServerSideCookieWritingEnabled": true,
          "expectS2SEventId": true,
          "expectS2SEventEmit": true
        },
        "Session Attribution": {},
        "S2S": {
          "facebookCapiEnabled": false,
          "source": "trekkie-storefront-renderer"
        }
      });

      var loaded = false;
      trekkie.ready(function () {
        if (loaded) return;
        loaded = true;

        window.ShopifyAnalytics.lib = window.trekkie;


        var originalDocumentWrite = document.write;
        document.write = customDocumentWrite;
        try {
          window.ShopifyAnalytics.merchantGoogleAnalytics.call(this);
        } catch (error) {};
        document.write = originalDocumentWrite;
        (function () {
          if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
            return;
          }
          window.BOOMR = window.BOOMR || {};
          window.BOOMR.snippetStart = new Date().getTime();
          window.BOOMR.snippetExecuted = true;
          window.BOOMR.snippetVersion = 12;
          window.BOOMR.application = "storefront-renderer";
          window.BOOMR.themeName = "Vinova Minimart";
          window.BOOMR.themeVersion = "1.0.0";
          window.BOOMR.shopId = 27214938165;
          window.BOOMR.themeId = 83808649269;
          window.BOOMR.url =
            "https://cdn.shopify.com/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
          var where = document.currentScript || document.getElementsByTagName("script")[0];
          var parentNode = where.parentNode;
          var promoted = false;
          var LOADER_TIMEOUT = 3000;

          function promote() {
            if (promoted) {
              return;
            }
            var script = document.createElement("script");
            script.id = "boomr-scr-as";
            script.src = window.BOOMR.url;
            script.async = true;
            parentNode.appendChild(script);
            promoted = true;
          }

          function iframeLoader(wasFallback) {
            promoted = true;
            var dom, bootstrap, iframe, iframeStyle;
            var doc = document;
            var win = window;
            window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
            bootstrap = function (parent, scriptId) {
              var script = doc.createElement("script");
              script.id = scriptId || "boomr-if-as";
              script.src = window.BOOMR.url;
              BOOMR_lstart = new Date().getTime();
              parent = parent || doc.body;
              parent.appendChild(script);
            };
            if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
              window.BOOMR.snippetMethod = "s";
              bootstrap(parentNode, "boomr-async");
              return;
            }
            iframe = document.createElement("IFRAME");
            iframe.src = "about:blank";
            iframe.title = "";
            iframe.role = "presentation";
            iframe.loading = "eager";
            iframeStyle = (iframe.frameElement || iframe).style;
            iframeStyle.width = 0;
            iframeStyle.height = 0;
            iframeStyle.border = 0;
            iframeStyle.display = "none";
            parentNode.appendChild(iframe);
            try {
              win = iframe.contentWindow;
              doc = win.document.open();
            } catch (e) {
              dom = document.domain;
              iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
              win = iframe.contentWindow;
              doc = win.document.open();
            }
            if (dom) {
              doc._boomrl = function () {
                this.domain = dom;
                bootstrap();
              };
              doc.write("<body onload='document._boomrl();'>");
            } else {
              win._boomrl = function () {
                bootstrap();
              };
              if (win.addEventListener) {
                win.addEventListener("load", win._boomrl, false);
              } else if (win.attachEvent) {
                win.attachEvent("onload", win._boomrl);
              }
            }
            doc.close();
          }
          var link = document.createElement("link");
          if (link.relList &&
            typeof link.relList.supports === "function" &&
            link.relList.supports("preload") &&
            ("as" in link)) {
            window.BOOMR.snippetMethod = "p";
            link.href = window.BOOMR.url;
            link.rel = "preload";
            link.as = "script";
            link.addEventListener("load", promote);
            link.addEventListener("error", function () {
              iframeLoader(true);
            });
            setTimeout(function () {
              if (!promoted) {
                iframeLoader(true);
              }
            }, LOADER_TIMEOUT);
            BOOMR_lstart = new Date().getTime();
            parentNode.appendChild(link);
          } else {
            iframeLoader(false);
          }

          function boomerangSaveLoadTime(e) {
            window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
          }
          if (window.addEventListener) {
            window.addEventListener("load", boomerangSaveLoadTime, false);
          } else if (window.attachEvent) {
            window.attachEvent("onload", boomerangSaveLoadTime);
          }
          if (document.addEventListener) {
            document.addEventListener("onBoomerangLoaded", function (e) {
              e.detail.BOOMR.init({
                producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
                ResourceTiming: {
                  enabled: true,
                  trackedResourceTypes: ["script", "img", "css"]
                },
              });
              e.detail.BOOMR.t_end = new Date().getTime();
            });
          } else if (document.attachEvent) {
            document.attachEvent("onpropertychange", function (e) {
              if (!e) e = event;
              if (e.propertyName === "onBoomerangLoaded") {
                e.detail.BOOMR.init({
                  producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
                  ResourceTiming: {
                    enabled: true,
                    trackedResourceTypes: ["script", "img", "css"]
                  },
                });
                e.detail.BOOMR.t_end = new Date().getTime();
              }
            });
          }
        })();


        window.ShopifyAnalytics.lib.page(null, {
          "pageType": "product",
          "customerId": 5262876049461,
          "resourceType": "product",
          "resourceId": 4907756027957
        });

        var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
        var token = match ? match[1] : undefined;
        if (!hasLoggedConversion(token)) {
          setCookieIfConversion(token);
          window.ShopifyAnalytics.lib.track("Viewed Product", {
            "currency": "USD",
            "variantId": 33119332040757,
            "productId": 4907756027957,
            "productGid": "gid:\/\/shopify\/Product\/4907756027957",
            "name": "Rimond Balo Stud Cum",
            "price": "636.00",
            "sku": "E-00214",
            "brand": "nuranium-electronic",
            "variant": null,
            "category": "",
            "nonInteraction": true
          });
          window.ShopifyAnalytics.lib.track("monorail:\/\/trekkie_storefront_viewed_product\/1.1", {
            "currency": "USD",
            "variantId": 33119332040757,
            "productId": 4907756027957,
            "productGid": "gid:\/\/shopify\/Product\/4907756027957",
            "name": "Rimond Balo Stud Cum",
            "price": "636.00",
            "sku": "E-00214",
            "brand": "nuranium-electronic",
            "variant": null,
            "category": "",
            "nonInteraction": true,
            "referer": "https:\/\/nuranium-electronic.myshopify.com\/products\/rimond-balo-stud-cum"
          });
        }
      });


      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src =
        "//cdn.shopify.com/shopifycloud/shopify/assets/shop_events_listener-565deac0c7edc7850a7762c24c560f0a9670aa5c52a728e9dbb43d5a7887c1d4.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

    })();
  </script>
</head>

<head>
    <?php include 'config/heade_tag.php' ?>
</head>
<?php 
    require_once("config/conndb.php");

    function execResult ($sql){
        $conn = new mysqli(HOST, USER, PASS, DATABASE);
        
        if($conn->connect_error){
            die('ket noi that bai:' . $conn->connect_error);
        }

        $conn->set_charset("utf8");

        $result = $conn->query($sql);

        $data = array();

        while($row = $result->fetch_array(1)){
            $data[] = $row;
        }
        return $data;

        $conn->close();
    }

?>

<body class="template-page">
  <a class="in-page-link visually-hidden skip-link" href="#MainContent">Skip to content</a>
  <div id="shopify-section-nov-header" class="shopify-section">
    <div data-section-id="nov-header" data-section-type="header-section">
    <?php include 'Common/Header/header.php' ?>
      <div id="header-sticky" style="background-color: #ffffff;">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="contentstickynew_logo col-xl-3 col-lg-3 col-md-3"></div>
            <div class="contentstickynew_menu col-xl-6 col-lg-6 col-md-6 text-center"></div>
            <div class="contentstickynew_group col-xl-3 col-lg-3 col-md-3 d-flex justify-content-end"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <main class="main-content" id="MainContent">    
    <section class="page-container" id="PageContainer">
      <section id="NovBreadcrumbs">
        <div class="container">
          <ol class="breadcrumb list-inline" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="list-inline-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a href="/" title="Home" itemprop="item">
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1" />
            </li>
            <li class="active list-inline-item" itemprop="itemListElement" itemscope
              itemtype="http://schema.org/ListItem">
              <span itemprop="item"><span itemprop="name"><?php echo $row[1]; ?></span></span>
              <meta itemprop="position" content="2" />
            </li>
          </ol>
        </div>
      </section>
      <div class="page-width">
        <div class="container">
          <div id="shopify-section-nov-product-template" class="shopify-section">
            <div class="product-template__container tabdesc" itemscope itemtype="http://schema.org/Product"
              id="ProductSection-nov-product-template" data-section-id="nov-product-template"
              data-enable-history-state="true" data-type="product-template" data-wishlist-product>
              <meta itemprop="name" content="Rimond Balo Stud Cum">
              <meta itemprop="url" content="https://nuranium-electronic.myshopify.com/products/rimond-balo-stud-cum">
              <meta itemprop="image"
                content="//cdn.shopify.com/s/files/1/0272/1493/8165/products/15_85ddb99d-27d8-4425-9640-ca6307daade2_800x.jpg?v=1603253183">
              <div class="TopContent mb-115 pb-xs-60">
                <div class="product-single row position-static">
                  <div class="col-md-6 col-xs-12 position-static">
                    <div class="product-single__photos block_img_sticky">
                      <div class="proFeaturedImage">
                        <div class="block_content d-flex">
                          <img id="ProductPhotoImg" class="img-fluid image-zoom img-responsive lazyload"
                            src="<?php echo $row[16]; ?>" 
                            alt="<?php echo $row[1]; ?>" />
                        </div>
                      </div>
                      <div id="productThumbs" class="mt-10">
                        <div class="thumblist" data-pswp-uid="1">
                          <div class="owl-carousel owl-theme" data-autoplay="false" data-autoplayTimeout="6000"
                            data-items="5" data-margin="10" data-nav="false" data-dots="false" data-loop="false"
                            data-items_tablet="4" data-items_mobile="5">
                            <div class="thumbItem">
                              <a href="javascript:void(0)"
                                data-image="<?php echo $row[16]; ?>"
                                data-zoom-image="<?php echo $row[16]; ?>"
                                class="product-single__thumbnail">
                                <img id="ProductPhotoImg" class="img-fluid image-zoom img-responsive lazyload"
                                  src="<?php echo $row[16]; ?>" 
                                  alt="<?php echo $row[1]; ?>" />
                              </a>
                            </div>                          
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="block_information position-static col-md-6 col-xs-12 mt-xs-30">
                    <div class="info_content">
                      <h1 itemprop="name" class="product-single__title"><?php echo $row[1]; ?></h1>
                      <div class="product-single__meta">
                        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                          <meta itemprop="priceCurrency" content="USD">
                          <link itemprop="availability" href="http://schema.org/InStock">
                          <div class="group-reviews has-border d-flex align-items-center mb-25">
                            <div class="detail-reviews">
                              <span class="shopify-product-reviews-badge" data-id="4907756027957"></span>
                            </div>
                          </div>
                          <div class="available_product d-flex align-items-center">
                            <div class="available_name control-label">
                              Available:
                            </div>
                            <span class="product__available in-stock">
                              <span><?php echo $row[3]; ?></span>
                            </span>
                          </div>
                          <div class="group-single__sku has-border">                  
                            <p itemprop="cat" class="product-single__cat">
                              <span class="label control-label">Category:</span>
                              <span class="pr-lt__collec">                                
                                <a href="/collections/smartwatch" title="<?php echo $row[12]; ?>"><?php echo $row[12]; ?></a>
                              </span>
                            </p>                            
                            <div class="product-single__shortdes mb-20" itemprop="description">
                              Sản phẩm của Hexa Food tươi ngon được tuyển chọn từ các nguồn cung đạt chuẩn chất lượng về an toàn vệ sinh thực phẩm. Đảm bảo vừa tươi ngon vừa giàu chất dinh dưỡng.
                            </div>
                          </div>
                        </div>
                      </div>
                      <p
                        class="product-single__price product-single__price-nov-product-template d-flex align-items-center">
                        <span class="visually-hidden">Regular price</span>
                        <span>
                          <span>
                            <span class="money"><?php echo number_format($row[6], 0, ',', '.')." ".$row[9]; ?></span>
                          </span>
                          <span
                            class="money product-price__sale-label product-price__sale-label-nov-product-template d-none">Sale</span>
                        </span>
                        <s id="ComparePrice-nov-product-template"></s>
                      </p>
                      <form  action="addcart.php?id=%27<?php echo $row[0]; ?>%27" method="post">
                        <div class="selectorVariants">
                          <select name="id" id="productSelect" data-section="nov-product-template"
                            class="enable_swatch hide">
                            <option selected="selected" value="33119332040757">
                              Default Title
                            </option>
                          </select>
                        </div>
                        <div class="group-quantity">
                          <span class="control-label">Quantity:</span>
                          <div class="product-form__item product-form__item--quantity align-items-center mb-30">
                            <label for="Quantity" class="quantity-selector"></label>
                            <div class="quick_view_qty">
                              <a href="javascript:void(0);" class="quick_view-qty quick_view-qty-minus">-</a>
                              <input type="number" id="soluong" name="quantity" value="1" min="1" max="10" step="1"
                                class="quantity-selector product-form__input" pattern="[0-9]*">
                              <a href="javascript:void(0);" class="quick_view-qty quick_view-qty-plus">+</a>
                            </div>
                            <div class="productWishList">
                              <a class="wishlist btnProductWishlist" data-icon-wishlist href="#"
                                data-product-handle="rimond-balo-stud-cum" data-id="4907756027957">
                                <i class="zmdi zmdi-favorite"></i>
                                <span class="wishlist-text">Add To Wishlist</span>
                              </a>
                            </div>
                          </div>
                          <div class="product_option_sub">
                            <div class="product-form__item product-form__item--submit">
                                <button name="add-to-cart" onclick="addCart(<?php echo $row[0]?>)">
                                  <span id="AddToCartText">Add to cart</span>
                                </button>
                            </div>
                          </div>
                      </form>
                      <div class="productbuttons d-flex align-items-center mt-40 pb-30">
                        <a target="_blank"
                          href="//www.facebook.com/sharer.php?u=https://nuranium-electronic.myshopify.com/products/rimond-balo-stud-cum"
                          class="btn--share share-facebook" title="Share on Facebook">
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                          <span class="share-title" aria-hidden="true">Facebook</span>
                          <span class="visually-hidden">Share on Facebook</span>
                        </a>
                        <a target="_blank"
                          href="//twitter.com/share?text=&amp;url=https://nuranium-electronic.myshopify.com/products/rimond-balo-stud-cum"
                          class="btn--share share-twitter" title="Tweet on Twitter">
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                          <span class="share-title" aria-hidden="true">Tweeter</span>
                          <span class="visually-hidden">Tweet on Twitter</span>
                        </a>
                        <a target="_blank"
                          href="//pinterest.com/pin/create/button/?url=https://nuranium-electronic.myshopify.com/products/rimond-balo-stud-cum&amp;media=//cdn.shopify.com/s/files/1/0272/1493/8165/products/15_85ddb99d-27d8-4425-9640-ca6307daade2_1024x1024.jpg?v=1603253183"
                          class="btn--share share-pinterest" title="Pin on Pinterest">
                          <i class="fa fa-pinterest" aria-hidden="true"></i>
                          <span class="share-title" aria-hidden="true">Pin it</span>
                          <span class="visually-hidden">Pin on Pinterest</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-single__tabs mt-105 mt-lg-60">
                  <div class="block_nav d-flex justify-content-center">
                    <ul class="nav nav-tabs">
                      <li><a class="active" href="#proTabs1" data-toggle="tab">Description</a></li>
                    </ul>
                  </div>
                  <div class="tab-content">
                    <div class="tab-pane active" id="proTabs1">
                      <div>
                        <div><?php echo $row[2]; ?></div>
                        <div><br></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="BottomContent">
                <div class="ProductRelated block_margin" data-wishlist-related>
                  <div class="block_padding">
                    <div class="title_block">
                      <span>Related product</span>
                    </div>
                    <div class="block__content">
                      <div class="grid grid--view-items">
                        <div class="owl-relatedproduct owl-carousel owl-drag" data-autoplay="false"
                          data-autoplayTimeout="6000" data-items="4" data-nav="true" data-dots="false" data-loop="false"
                          data-items_tablet="3" data-items_mobile="2" data-margin="30">
                        <?php
                          for($i = 0 ;$i < $i_length;$i++){
                            include('module/RelatedProduct.php');
                        }
                        ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <script type="application/json" id="ProductJson-nov-product-template">
              {
                "id": 4907756027957,
                "title": "Rimond Balo Stud Cum",
                "handle": "rimond-balo-stud-cum",
                "description": "\u003cdiv\u003e\n\u003cdiv\u003eLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridicu lus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \u003c\/div\u003e\n\u003cdiv\u003e\u003cbr\u003e\u003c\/div\u003e\n\u003cdiv\u003e\u003cimg style=\"display: block; margin-left: auto; margin-right: auto;\" alt=\"\" src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/files\/20_large.jpg?v=1569387317\" data-mce-src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/files\/20_large.jpg?v=1569387317\"\u003e\u003c\/div\u003e\n\u003cdiv\u003e\u003cbr\u003e\u003c\/div\u003e\n\u003cdiv\u003eLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \u003c\/div\u003e\n\u003c\/div\u003e",
                "published_at": "2020-10-21T00:06:05-04:00",
                "created_at": "2020-10-21T00:06:05-04:00",
                "vendor": "nuranium-electronic",
                "type": "",
                "tags": ["apple", "black", "ios", "iphone", "iphone x", "m", "Pink", "Red", "White"],
                "price": 63600,
                "price_min": 63600,
                "price_max": 63600,
                "available": true,
                "price_varies": false,
                "compare_at_price": null,
                "compare_at_price_min": 0,
                "compare_at_price_max": 0,
                "compare_at_price_varies": false,
                "variants": [{
                  "id": 33119332040757,
                  "title": "Default Title",
                  "option1": "Default Title",
                  "option2": null,
                  "option3": null,
                  "sku": "E-00214",
                  "requires_shipping": true,
                  "taxable": true,
                  "featured_image": null,
                  "available": true,
                  "name": "Rimond Balo Stud Cum",
                  "public_title": null,
                  "options": ["Default Title"],
                  "price": 63600,
                  "weight": 0,
                  "compare_at_price": null,
                  "inventory_management": "shopify",
                  "barcode": ""
                }],
                "images": [
                  "\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/15_85ddb99d-27d8-4425-9640-ca6307daade2.jpg?v=1603253183",
                  "\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/9_903bd6e5-4773-4b43-8e5c-053061f35e15.jpg?v=1603253186",
                  "\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/10_a56e67ac-4cfc-40fd-81b0-18aaa2704535.jpg?v=1603253186",
                  "\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/11_9c812859-193f-4915-ba44-331db41a4e57.jpg?v=1603253186",
                  "\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/12_8166249c-3709-40c8-8b75-2c2602799b6c.jpg?v=1603253187",
                  "\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/13_ff24ac6c-f628-4b9a-9aaa-f2c058ec0ab6.jpg?v=1603253187"
                ],
                "featured_image": "\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/15_85ddb99d-27d8-4425-9640-ca6307daade2.jpg?v=1603253183",
                "options": ["Title"],
                "media": [{
                  "alt": null,
                  "id": 10547089539125,
                  "position": 1,
                  "preview_image": {
                    "aspect_ratio": 1.0,
                    "height": 600,
                    "width": 600,
                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/15_85ddb99d-27d8-4425-9640-ca6307daade2.jpg?v=1603253183"
                  },
                  "aspect_ratio": 1.0,
                  "height": 600,
                  "media_type": "image",
                  "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/15_85ddb99d-27d8-4425-9640-ca6307daade2.jpg?v=1603253183",
                  "width": 600
                }, {
                  "alt": null,
                  "id": 10547092979765,
                  "position": 2,
                  "preview_image": {
                    "aspect_ratio": 1.0,
                    "height": 600,
                    "width": 600,
                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/9_903bd6e5-4773-4b43-8e5c-053061f35e15.jpg?v=1603253186"
                  },
                  "aspect_ratio": 1.0,
                  "height": 600,
                  "media_type": "image",
                  "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/9_903bd6e5-4773-4b43-8e5c-053061f35e15.jpg?v=1603253186",
                  "width": 600
                }, {
                  "alt": null,
                  "id": 10547093012533,
                  "position": 3,
                  "preview_image": {
                    "aspect_ratio": 1.0,
                    "height": 600,
                    "width": 600,
                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/10_a56e67ac-4cfc-40fd-81b0-18aaa2704535.jpg?v=1603253186"
                  },
                  "aspect_ratio": 1.0,
                  "height": 600,
                  "media_type": "image",
                  "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/10_a56e67ac-4cfc-40fd-81b0-18aaa2704535.jpg?v=1603253186",
                  "width": 600
                }, {
                  "alt": null,
                  "id": 10547093045301,
                  "position": 4,
                  "preview_image": {
                    "aspect_ratio": 1.0,
                    "height": 600,
                    "width": 600,
                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/11_9c812859-193f-4915-ba44-331db41a4e57.jpg?v=1603253186"
                  },
                  "aspect_ratio": 1.0,
                  "height": 600,
                  "media_type": "image",
                  "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/11_9c812859-193f-4915-ba44-331db41a4e57.jpg?v=1603253186",
                  "width": 600
                }, {
                  "alt": null,
                  "id": 10547093078069,
                  "position": 5,
                  "preview_image": {
                    "aspect_ratio": 1.0,
                    "height": 600,
                    "width": 600,
                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/12_8166249c-3709-40c8-8b75-2c2602799b6c.jpg?v=1603253187"
                  },
                  "aspect_ratio": 1.0,
                  "height": 600,
                  "media_type": "image",
                  "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/12_8166249c-3709-40c8-8b75-2c2602799b6c.jpg?v=1603253187",
                  "width": 600
                }, {
                  "alt": null,
                  "id": 10547093110837,
                  "position": 6,
                  "preview_image": {
                    "aspect_ratio": 1.0,
                    "height": 600,
                    "width": 600,
                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/13_ff24ac6c-f628-4b9a-9aaa-f2c058ec0ab6.jpg?v=1603253187"
                  },
                  "aspect_ratio": 1.0,
                  "height": 600,
                  "media_type": "image",
                  "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/13_ff24ac6c-f628-4b9a-9aaa-f2c058ec0ab6.jpg?v=1603253187",
                  "width": 600
                }],
                "content": "\u003cdiv\u003e\n\u003cdiv\u003eLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridicu lus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \u003c\/div\u003e\n\u003cdiv\u003e\u003cbr\u003e\u003c\/div\u003e\n\u003cdiv\u003e\u003cimg style=\"display: block; margin-left: auto; margin-right: auto;\" alt=\"\" src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/files\/20_large.jpg?v=1569387317\" data-mce-src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/files\/20_large.jpg?v=1569387317\"\u003e\u003c\/div\u003e\n\u003cdiv\u003e\u003cbr\u003e\u003c\/div\u003e\n\u003cdiv\u003eLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \u003c\/div\u003e\n\u003c\/div\u003e"
              }
            </script>
          </div>
        </div>
      </div>
      <script>
        // Override default values of shop.strings for each template.
        // Alternate product templates can change values of
        // add to cart button, sold out, and unavailable states here.
        theme.productStrings = {
          addToCart: "Add to cart",
          soldOut: "Sold out",
          unavailable: "Unavailable"
        }
        if ($('.thumb_none').length != 0) {
          var selectCallbackProduct = function (variant, selector) {
            var moneyFormat = theme.moneyFormat;
            var $productImage = $('.thumb_none #productThumbs .active img'),
              $addToCart = $('.thumb_none #AddToCart'),
              $productPrice = $('.thumb_none .product-price__price'),
              $comparePrice = $('.thumb_none #ComparePrice-deal'),
              $quantityElements = $('.thumb_none .quantity-selector, .thumb_none label + .js-qty'),
              $addToCartText = $('.thumb_none #AddToCartText'),
              $quantity = $('.product-form__item--quantity');
            if (variant) {
              if (window.swatch_enable) {
                var form = $('#' + selector.domIdPrefix).closest('form');
                for (var i = 0, length = variant.options.length; i < length; i++) {
                  var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant
                    .options[i] + '"]');
                  if (radioButton.size()) {
                    radioButton.get(0).checked = true;
                  }
                }
              }
              if (variant.featured_image) {
                var newImage = variant.featured_image;
                var element = $productImage[0];
                Shopify.Image.switchImage(newImage, element, function (src, imgObject, el) {
                  console.log(imgObject);
                  $('.thumbItem').parent().removeClass('active');
                  $('.thumbItem[data-image-id="' + imgObject.id + '"]').parent().addClass('active');
                  $('.thumbItem[data-image-id="' + imgObject.id + '"]').find('img').attr('src', src);
                  $(".thumb_none #productThumbs .owl-carousel").trigger("to.owl.carousel", [$(
                    '.thumbItem[data-image-id="' + imgObject.id + '"]').attr('data-position'), 1]);
                });
              }
              if (variant.available) {
                $addToCart.removeClass('disabled').prop('disabled', false);
                $addToCartText.html("Add to cart");
                $quantityElements.show();
                $quantity.show();
                $('.group-quantity .control-label').show();
                $('.group-quantity').css('margin-top', '0');
              } else {
                $addToCart.addClass('disabled').prop('disabled', true);
                $addToCartText.html("Sold out");
                $quantityElements.hide();
                $quantity.hide();
                $('.group-quantity .control-label').hide();
                $('.group-quantity').css('margin-top', '30px');
              }
              $productPrice.html(theme.Currency.formatMoney(variant.price, moneyFormat));
              if (variant.compare_at_price > variant.price) {
                $comparePrice.html(theme.Currency.formatMoney(variant.compare_at_price, moneyFormat)).show();
              } else {
                $comparePrice.hide();
              }
              if ($('#currencies').length != 0) {
                Currency.convertAll(shopCurrency, $('#currencies span.selected').attr('data-currency'));
              }
            } else {
              $addToCart.addClass('disabled').prop('disabled', true);
              $addToCartText.html("Unavailable");
              $quantityElements.hide();
            }
          };
        } else if ($('.thumb_vertical').length != 0) {
          var selectCallbackProduct = function (variant, selector) {
            var moneyFormat = theme.moneyFormat;
            var $productImage = $('.thumb_vertical #productThumbs .active img'),
              $addToCart = $('.thumb_vertical #AddToCart'),
              $productPrice = $('.thumb_vertical .product-price__price'),
              $comparePrice = $('.thumb_vertical #ComparePrice-deal'),
              $quantityElements = $('.thumb_vertical .quantity-selector, .thumb_vertical label + .js-qty'),
              $addToCartText = $('.thumb_vertical #AddToCartText'),
              $quantity = $('.product-form__item--quantity');
            if (variant) {
              if (window.swatch_enable) {
                var form = $('#' + selector.domIdPrefix).closest('form');
                for (var i = 0, length = variant.options.length; i < length; i++) {
                  var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant
                    .options[i] + '"]');
                  if (radioButton.size()) {
                    radioButton.get(0).checked = true;
                  }
                }
              }
              if (variant.featured_image) {
                var newImage = variant.featured_image;
                var element = $productImage[0];
                Shopify.Image.switchImage(newImage, element, function (src, imgObject, el) {
                  $('.thumbItem').parent().removeClass('active');
                  $('.thumbItem[data-image-id="' + imgObject.id + '"]').parent().addClass('active');
                  $('.thumbItem[data-image-id="' + imgObject.id + '"]').find('img').attr('src', src);
                  var thumb = $('.thumb_vertical .item.active');
                  var hp = $('.site-header').height() + $('#NovBreadcrumbs').outerHeight() - 5;
                  var p = thumb.data('position');
                  var tl = $('.thumblist').height();
                  var hi = thumb.height() + 30;
                  var h = hi * p - hi + hp;
                  $("body,html").animate({
                    scrollTop: h
                  }, "normal");
                });
              }
              if (variant.available) {
                $addToCart.removeClass('disabled').prop('disabled', false);
                $addToCartText.html("Add to cart");
                $quantityElements.show();
                $quantity.show();
                $('.group-quantity .control-label').show();
                $('.group-quantity').css('margin-top', '0');
              } else {
                $addToCart.addClass('disabled').prop('disabled', true);
                $addToCartText.html("Sold out");
                $quantityElements.hide();
                $quantity.hide();
                $('.group-quantity .control-label').hide();
                $('.group-quantity').css('margin-top', '30px');
              }
              $productPrice.html(theme.Currency.formatMoney(variant.price, moneyFormat));
              if (variant.compare_at_price > variant.price) {
                $comparePrice.html(theme.Currency.formatMoney(variant.compare_at_price, moneyFormat)).show();
              } else {
                $comparePrice.hide();
              }
              if ($('#currencies').length != 0) {
                Currency.convertAll(shopCurrency, $('#currencies span.selected').attr('data-currency'));
              }
            } else {
              $addToCart.addClass('disabled').prop('disabled', true);
              $addToCartText.html("Unavailable");
              $quantityElements.hide();
            }
          };
        } else {
          var selectCallbackProduct = function (variant, selector) {
            novtheme.productPage({
              money_format: theme.moneyFormat,
              variant: variant,
              selector: selector
            })
          };
        }

        $(document).ready(function () {
          new Shopify.OptionSelectors('productSelect', {
            product: {
              "id": 4907756027957,
              "title": "Rimond Balo Stud Cum",
              "handle": "rimond-balo-stud-cum",
              "description": "\u003cdiv\u003e\n\u003cdiv\u003eLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridicu lus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \u003c\/div\u003e\n\u003cdiv\u003e\u003cbr\u003e\u003c\/div\u003e\n\u003cdiv\u003e\u003cimg style=\"display: block; margin-left: auto; margin-right: auto;\" alt=\"\" src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/files\/20_large.jpg?v=1569387317\" data-mce-src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/files\/20_large.jpg?v=1569387317\"\u003e\u003c\/div\u003e\n\u003cdiv\u003e\u003cbr\u003e\u003c\/div\u003e\n\u003cdiv\u003eLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \u003c\/div\u003e\n\u003c\/div\u003e",
              "published_at": "2020-10-21T00:06:05-04:00",
              "created_at": "2020-10-21T00:06:05-04:00",
              "vendor": "nuranium-electronic",
              "type": "",
              "tags": ["apple", "black", "ios", "iphone", "iphone x", "m", "Pink", "Red", "White"],
              "price": 63600,
              "price_min": 63600,
              "price_max": 63600,
              "available": true,
              "price_varies": false,
              "compare_at_price": null,
              "compare_at_price_min": 0,
              "compare_at_price_max": 0,
              "compare_at_price_varies": false,
              "variants": [{
                "id": 33119332040757,
                "title": "Default Title",
                "option1": "Default Title",
                "option2": null,
                "option3": null,
                "sku": "E-00214",
                "requires_shipping": true,
                "taxable": true,
                "featured_image": null,
                "available": true,
                "name": "Rimond Balo Stud Cum",
                "public_title": null,
                "options": ["Default Title"],
                "price": 63600,
                "weight": 0,
                "compare_at_price": null,
                "inventory_management": "shopify",
                "barcode": ""
              }],
              "images": [
                "\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/15_85ddb99d-27d8-4425-9640-ca6307daade2.jpg?v=1603253183",
                "\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/9_903bd6e5-4773-4b43-8e5c-053061f35e15.jpg?v=1603253186",
                "\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/10_a56e67ac-4cfc-40fd-81b0-18aaa2704535.jpg?v=1603253186",
                "\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/11_9c812859-193f-4915-ba44-331db41a4e57.jpg?v=1603253186",
                "\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/12_8166249c-3709-40c8-8b75-2c2602799b6c.jpg?v=1603253187",
                "\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/13_ff24ac6c-f628-4b9a-9aaa-f2c058ec0ab6.jpg?v=1603253187"
              ],
              "featured_image": "\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/15_85ddb99d-27d8-4425-9640-ca6307daade2.jpg?v=1603253183",
              "options": ["Title"],
              "media": [{
                "alt": null,
                "id": 10547089539125,
                "position": 1,
                "preview_image": {
                  "aspect_ratio": 1.0,
                  "height": 600,
                  "width": 600,
                  "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/15_85ddb99d-27d8-4425-9640-ca6307daade2.jpg?v=1603253183"
                },
                "aspect_ratio": 1.0,
                "height": 600,
                "media_type": "image",
                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/15_85ddb99d-27d8-4425-9640-ca6307daade2.jpg?v=1603253183",
                "width": 600
              }, {
                "alt": null,
                "id": 10547092979765,
                "position": 2,
                "preview_image": {
                  "aspect_ratio": 1.0,
                  "height": 600,
                  "width": 600,
                  "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/9_903bd6e5-4773-4b43-8e5c-053061f35e15.jpg?v=1603253186"
                },
                "aspect_ratio": 1.0,
                "height": 600,
                "media_type": "image",
                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/9_903bd6e5-4773-4b43-8e5c-053061f35e15.jpg?v=1603253186",
                "width": 600
              }, {
                "alt": null,
                "id": 10547093012533,
                "position": 3,
                "preview_image": {
                  "aspect_ratio": 1.0,
                  "height": 600,
                  "width": 600,
                  "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/10_a56e67ac-4cfc-40fd-81b0-18aaa2704535.jpg?v=1603253186"
                },
                "aspect_ratio": 1.0,
                "height": 600,
                "media_type": "image",
                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/10_a56e67ac-4cfc-40fd-81b0-18aaa2704535.jpg?v=1603253186",
                "width": 600
              }, {
                "alt": null,
                "id": 10547093045301,
                "position": 4,
                "preview_image": {
                  "aspect_ratio": 1.0,
                  "height": 600,
                  "width": 600,
                  "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/11_9c812859-193f-4915-ba44-331db41a4e57.jpg?v=1603253186"
                },
                "aspect_ratio": 1.0,
                "height": 600,
                "media_type": "image",
                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/11_9c812859-193f-4915-ba44-331db41a4e57.jpg?v=1603253186",
                "width": 600
              }, {
                "alt": null,
                "id": 10547093078069,
                "position": 5,
                "preview_image": {
                  "aspect_ratio": 1.0,
                  "height": 600,
                  "width": 600,
                  "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/12_8166249c-3709-40c8-8b75-2c2602799b6c.jpg?v=1603253187"
                },
                "aspect_ratio": 1.0,
                "height": 600,
                "media_type": "image",
                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/12_8166249c-3709-40c8-8b75-2c2602799b6c.jpg?v=1603253187",
                "width": 600
              }, {
                "alt": null,
                "id": 10547093110837,
                "position": 6,
                "preview_image": {
                  "aspect_ratio": 1.0,
                  "height": 600,
                  "width": 600,
                  "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/13_ff24ac6c-f628-4b9a-9aaa-f2c058ec0ab6.jpg?v=1603253187"
                },
                "aspect_ratio": 1.0,
                "height": 600,
                "media_type": "image",
                "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/products\/13_ff24ac6c-f628-4b9a-9aaa-f2c058ec0ab6.jpg?v=1603253187",
                "width": 600
              }],
              "content": "\u003cdiv\u003e\n\u003cdiv\u003eLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridicu lus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \u003c\/div\u003e\n\u003cdiv\u003e\u003cbr\u003e\u003c\/div\u003e\n\u003cdiv\u003e\u003cimg style=\"display: block; margin-left: auto; margin-right: auto;\" alt=\"\" src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/files\/20_large.jpg?v=1569387317\" data-mce-src=\"https:\/\/cdn.shopify.com\/s\/files\/1\/0272\/1493\/8165\/files\/20_large.jpg?v=1569387317\"\u003e\u003c\/div\u003e\n\u003cdiv\u003e\u003cbr\u003e\u003c\/div\u003e\n\u003cdiv\u003eLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \u003c\/div\u003e\n\u003c\/div\u003e"
            },
            onVariantSelected: selectCallbackProduct,
            enableHistoryState: true
          });
          // Add label if only one product option and it isn't 'Title'. Could be 'Size'.
          // Hide selectors if we only have 1 variant and its title contains 'Default'.
          $('.selector-wrapper').hide();
        });
      </script>
    </section>
  </main>
  <div id="shopify-section-nov-footer" class="shopify-section nov-footer wow fadeIn animated">
    <footer data-section-id="nov-footer">
      <div class="footer-top">
        <div class="block_footer">
          <div class="container">
            <div class="avenger">
              <div class="row">
                <div class="footer-contact footer-block footer-block__1 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="title-block">
                    Hexa Food
                  </div>
                  <div class="block-content">
                    <div class="contact d-flex">
                      <div class="icon-contact">
                        <i class="icon-phone"></i>
                      </div>
                      <div class="phone-content">
                        <div class="number">(+612) 2531 5600<p></p>
                        </div>
                      </div>
                    </div>
                    <div class="contact d-flex">
                      <div class="icon-contact">
                        <i class="icon-mail"></i>
                      </div>
                      <div class="email-content">
                        <div class="email">vinova@gmail.com<p></p>
                        </div>
                      </div>
                    </div>
                    <div class="contact d-flex">
                      <div class="icon-contact">
                        <i class="icon-location"></i>
                      </div>
                      <div class="address-content">
                        <div class="content-address">PO Box 1622 Visaosang Street West</div>
                      </div>
                    </div>
                    <div class="contact d-flex">
                      <div class="icon-contact">
                        <i class="icon-hours"></i>
                      </div>
                      <div class="hours-content">
                        <div class="content-hours">Opening Hours : 8.00AM - 21.00AM</div>
                      </div>
                    </div>
                    <div class="social_newsletter">
                      <div class="social-icons">
                        <ul class="site-footer__social-icons p-0">
                          <li>
                            <a class="social-icons__link" href="https://facebook.com/vinovatheme"
                              title="Warehouse Electronic on Facebook">
                              <i class="zmdi zmdi-facebook"></i>
                            </a>
                          </li>
                          <li>
                            <a class="social-icons__link" href="https://twitter.com/vinovatheme"
                              title="Warehouse Electronic on Twitter">
                              <i class="zmdi zmdi-twitter"></i>
                            </a>
                          </li>
                          <li>
                            <a class="social-icons__link" href="https://pinterest.com/vinovatheme"
                              title="Warehouse Electronic on Pinterest">
                              <i class="fa fa-pinterest" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li>
                            <a class="social-icons__link" href="https://vimeo.com/vinovatheme"
                              title="Warehouse Electronic on Vimeo">
                              <i class="fa fa-vimeo" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li>
                            <a class="social-icons__link" href="https://instagram.com/vinovatheme"
                              title="Warehouse Electronic on Instagram">
                              <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="footer-menu footer-block footer-block__2 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="title-block">
                    Customer Service
                  </div>
                  <ul class="site-footer__linklist list-unstyled">
                    <li class="site-footer__linklist-item">
                      <a href="/pages/contact-us">Contact us</a>
                    </li>
                    <li class="site-footer__linklist-item">
                      <a href="#">Help and advice</a>
                    </li>
                    <li class="site-footer__linklist-item">
                      <a href="#">Shipping & Returns</a>
                    </li>
                    <li class="site-footer__linklist-item">
                      <a href="#">Terms and conditions</a>
                    </li>
                    <li class="site-footer__linklist-item">
                      <a href="#">Refund Policy</a>
                    </li>
                  </ul>
                </div>
                <div
                  class="newsletter btn_icon footer-block footer-block__3 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="title-block">
                    Newsletter
                  </div>
                  <div class="des">Sign up for newsletter to receive special offers and exclusive news about Nuranium
                    products</div>
                  <div class="block-content">
                    <div class="site-footer__newsletter">
                      <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8"
                        class="contact-form"><input type="hidden" name="form_type" value="customer" /><input
                          type="hidden" name="utf8" value="✓" />
                        <div class="input-group">
                          <input type="hidden" name="contact[tags]" value="newsletter">
                          <input type="email" name="contact[email]" id="Email_Footer"
                            class="input-group__field newsletter__input form-control pl-15"
                            value="builehoangnhattruong@gmail.com" placeholder="Enter your email">
                          <span class="input-group__btn">
                            <button type="submit" class="btn newsletter__submit d-flex align-items-center" name="commit"
                              id="Subscribe_footer">
                              <span class="newsletter__submit-text--large">Subscribe</span>
                            </button>
                          </span>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_copyright">
        <div class="container">
          <div class="list_category">
            <ul class="site-footer__linklist list-unstyled">
              <li class="list-inline-item">
                <a href="#">Nokia</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Samsung</a>
              </li>
              <li class="list-inline-item">
                <a href="#">HTC</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Laptop</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Smartphone</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Tablet</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Vinova</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Smartwatch</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Wireless Charger</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Company</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Iphone 7S Plus</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Nova Fashion</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Android Phone</a>
              </li>
              <li class="list-inline-item">
                <a href="#">IOS Phone</a>
              </li>
              <li class="list-inline-item">
                <a href="#">OPPO</a>
              </li>
              <li class="list-inline-item">
                <a href="#">USB Kingston 128GB</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Bluetooth Motorcycle Headset</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Speaker </a>
              </li>
              <li class="list-inline-item">
                <a href="#">Headphone</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Huawei</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Zippo</a>
              </li>
            </ul>
          </div>
          <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mb-20 wow fadeIn animated">
              <img
                src="//cdn.shopify.com/s/files/1/0272/1493/8165/files/payment-footer_3cd5e244-331d-4433-ac29-eb0f0c257a18_300x.png?v=1601623316"
                alt="img">
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeIn animated">
              <div class="copyright">Copyright © 2020 Vinovathemes. All rights reserved.</div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div id="_mobile_vertical_menu" class="vertical_menu"></div>
  </div>
  <div class="canvas-menu drawer-left">
    <div class="canvas-header-box d-flex justify-content-center align-items-center">
      <div class="close-box"><i class="zmdi zmdi-close"></i></div>
    </div>
  </div>
  <div class="canvas-overlay"></div>
  <div class="sidebar-overlay"></div>
  <div class="overlay overlay-search style-light-bg">
    <!-- class open -->
    <div class="close-search">
      <i class="zmdi zmdi-close"></i>
    </div>
    <div class="search-container">
      <form class="search search-bar__form" action="/search" method="get" role="search">
        <div class="search__des text-center">
          <i class="zmdi zmdi-search"></i>
          <h2>Search your product</h2>
          <div>Find your product with fast search. Enter some keyword such as dress, shirts, shoes etc. Or can search by
            product sku.</div>
        </div>
        <div class="search-container-inner">
          <input class="search__input search-bar__input" type="search" name="q" value=""
            placeholder="Enter your keyword" aria-label="Enter your keyword">
          <button class="search-bar__submit search__submit btn--link" type="submit">
            <span class="icon__fallback-text"><i class="zmdi zmdi-search"></i></span>
          </button>
        </div>
      </form>
    </div>
  </div>
  <div id="mobile-blockcart" class="mobile-boxpage d-flex d-md-none">
    <div class="content-boxpage col">
      <div class="box-header d-flex justify-content-between align-items-center">
        <div class="title-box">Cart</div>
        <div class="close-box">Close</div>
      </div>
      <div id="_mobile_cart" class="box-content"></div>
    </div>
  </div>
  <div id="mobile-pageaccount" class="mobile-boxpage d-flex d-md-none" data-titlebox-parent="Account">
    <div class="content-boxpage col">
      <div class="box-header d-flex justify-content-between align-items-center">
        <div class="back-box">Back</div>
        <div class="title-box">Account</div>
        <div class="close-box">Close</div>
      </div>
      <div class="box-content d-flex justify-content-center align-items-center text-center">
        <div>
          <div id="_mobile_account_list"></div>

          <div class="links-currency" data-target="#box-currency" data-titlebox="Currency"><span>Currency</span><i
              class="zmdi zmdi-arrow-right"></i></div>
        </div>
      </div>
      <div id="box-currency" class="box-content list-unstyled">
        <div id="_mobile_currency_selector" class="currency-selector groups-selector"></div>
      </div>
    </div>
  </div>
  <div id="stickymenu_bottom_mobile" class="d-flex align-items-center justify-content-center d-md-none text-center">
    <div class="stickymenu-item"><a href="/"><i class="icon-home"></i><span>Home</span></a></div>
    <div class="stickymenu-item"><a href="/pages/page-wishlist"><i
          class="zmdi zmdi-favorite-outline"></i><span>Wishlist</span></a></div>
    <div class="stickymenu-item"><a href="#" class="nov-toggle-page" data-target="#mobile-blockcart"><span
          id="_mobile_cart_count" class="cart-products-count"></span><i
          class="icon-shopping-cart"></i><span>Cart</span></a></div>
    <div class="stickymenu-item"><a href="#" class="nov-toggle-page" data-target="#mobile-pageaccount"><i
          class="icon-account"></i><span>Setting</span></a></div>
    <div class="stickymenu-item">
      <div id="back_top">
        <div>
          <i class="fa fa-long-arrow-up"></i>
          <div class="on_top">On Top</div>
        </div>
      </div>
    </div>
  </div>
  <!-- Popup newsletter -->
  <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form">
    <input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" />
    <div id="popup-subscribe" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content row no-gutters">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                class="zmdi zmdi-hc-fw zmdi-close"></i></button>
          </div>
          <div class="modal-body col-md-6 text-center d-flex justify-content-center align-items-end">
            <div class="subscribe_form">
              <div class="inner">
                <div class="title_block">Newsletter</div>
                <p>Sign up for newsletter to receive special offers and exclusive news about Minimart products</p>
                <div class="input-subscribe-wrap">
                  <input type="hidden" name="contact[tags]" value="newsletter">
                  <input type="email" name="contact[email]" class="inputNew form-control grey newsletter-input" value=""
                    placeholder="Enter your email">
                  <span class="input-group-btn mt-10 d-block">
                    <button id="Subscribe" type="submit" name="commit" class="btn btn-primary">
                      Subscribe
                    </button>
                  </span>
                </div>
                <div class="checkbox">
                  <label id="myCheck" class="d-inline-flex">
                    <span class="custom-checkbox">
                      <input name="no-view" class="no-view" type="checkbox">
                    </span>
                    <span id="text">Don’t show this popup again</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 text-center"><img class="img-fluid lazyload" src="images/Popup Subscribe.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </form>
  <div id="CustomerAccountForm" class="form-vertical modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-6">
              <form method="post" action="/account" id="create_customer" accept-charset="UTF-8"><input type="hidden"
                  name="form_type" value="create_customer" /><input type="hidden" name="utf8" value="✓" />
                <div class="title_block"><span>Create an account</span></div>
                <div class="sub-title"><span>No account? Create one here:</span></div>
                <div class="block-form-register">
                  <div class="form-group novform-firstname">
                    <input type="text" name="customer[first_name]" id="FirstName" placeholder="First Name" required>
                  </div>
                  <div class="form-group novform-lastname">
                    <input type="text" name="customer[last_name]" id="LastName" placeholder="Last Name" required>
                  </div>
                  <div class="form-group novform-email">
                    <input type="email" name="customer[email]" id="email_rigester" class="" placeholder="Email"
                      required>
                  </div>
                  <div class="form-group novform-password">
                    <input type="password" name="customer[password]" id="CreatePassword" class="" placeholder="Password"
                      required>
                  </div>
                  <div class="form-checkbox novform-newsletter">
                    <label id="form-checkbox" class="custom_checkbox d-inline-flex">
                      <span class="custom-checkbox">
                        <input type="checkbox" name="newsletter" value="1">
                      </span>
                      <span class="text">Sign up for our newsletter</span>
                    </label>
                  </div>
                  <div class="form_submit">
                    <input type="submit" value="Register" class="btn">
                  </div>
                </div>
              </form>
            </div>
            <div class="col-6">
              <form method="post" action="/account/login" id="customer_login" accept-charset="UTF-8"><input
                  type="hidden" name="form_type" value="customer_login" /><input type="hidden" name="utf8" value="✓" />
                <div class="title-login">
                  <div class="title_block"><span class="text-bold">Login</span></div>
                </div>
                <div class="block-form-login">
                  <div class="title_form"><span>Insert your account information:</span></div>
                  <div class="form-group novform-email">
                    <input type="email" name="customer[email]" id="Email_login" class="" placeholder="Email" required
                      autofocus>
                  </div>
                  <div class="form-group novform-password">
                    <input type="password" value="" name="customer[password]" id="HeaderPassword" class=""
                      placeholder="Password" required>
                    <div class="hide_show_password" style="display: block;">
                      <span class="show"><i class="zmdi zmdi-eye-off"></i></span>
                    </div>
                  </div>
                  <div class="forgot_password">
                    <i class="zmdi zmdi-email"></i>
                    <a href="#recover" id="RecoversPassword">
                      Forgot your <strong>Password ?</strong>
                    </a>
                  </div>
                  <div class="form_submit">
                    <input type="submit" class="btn" value="Login">
                  </div>
                </div>
              </form>
              <div id="RecoverPasswordFormIndex" class="hide">
                <div class="title">
                  Reset your password
                </div>
                <div class="form-vertical">
                  <form method="post" action="/account/recover" accept-charset="UTF-8"><input type="hidden"
                      name="form_type" value="recover_customer_password" /><input type="hidden" name="utf8" value="✓" />
                    <div class="form-group novform-email">
                      <input type="email" value="" name="email" id="RecoverEmail" class="input-full" placeholder="Email"
                        required>
                    </div>
                    <div class="d-flex groups-sub">
                      <input type="submit" class="btn" value="Submit">
                      <button type="button" id="HideRecoverPasswordIndex" class="text-link">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="popup-Wishlist" class="loading-modal modal">
    <div class="overlay"></div>
    <div class="modal-header d-flex align-items-center">
      <div class="message_title">
        <i class="zmdi zmdi-notifications-active"></i>
        This item has been added to your Wishlist
      </div>
      <button type="button" class="close-modal popupwishlistClose">
        <i class="zmdi zmdi-hc-fw zmdi-close"></i>
      </button>
    </div>
    <div class="modal-body">
      <div class="wishlistprimary d-flex align-items-center">
        <div class="wishlistimage">
          <img class="product-image" alt="&nbsp;" src="" style="max-width: 50px; max-height:50px" />
        </div>
        <div class="product-title"></div>
        <div class="actions">
          <a class="btn btn-wishlist" href="/pages/page-wishlist">Go to wishlist</a>
        </div>
      </div>
    </div>
  </div>
  <div id="_desktop_back_top">
    <div id="back-top">
      <span>
        <i class="zmdi zmdi-chevron-up"></i>
      </span>
    </div>
  </div>
  <script src="//cdn.shopify.com/s/javascripts/currencies.js" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/jquery.currencies.min.js?v=7811281348689238064"
    type="text/javascript"></script>
  <script>
    // Pick your format here:
    // money_format or money_with_currency_format
    Currency.format = 'money_format';
    var shopCurrency = 'USD';
    /* Sometimes merchants change their shop currency, let's tell our JavaScript file */
    Currency.moneyFormats[shopCurrency].money_with_currency_format = "${{amount}} USD";
    Currency.moneyFormats[shopCurrency].money_format = "${{amount}}";
    var cookieCurrency = Currency.cookie.read();
    // Fix for customer account pages.
    jQuery('span.money span.money').each(function () {
      jQuery(this).parents('span.money').removeClass('money');
    });
    // Saving the current price.
    jQuery('span.money').each(function () {
      jQuery(this).attr('data-currency-USD', jQuery(this).html());
    });
    // Select all your currencies buttons.
    var buttons = jQuery('#currencies span');
    var title = jQuery('.currency-selector .current-currency');
    // If there's no cookie or it's the shop currency.
    if (cookieCurrency == null || cookieCurrency === shopCurrency) {
      buttons.removeClass('selected');
      jQuery('#currencies span[data-currency=' + shopCurrency + ']').addClass('selected');
      Currency.currentCurrency = shopCurrency;
    } else {
      Currency.convertAll(shopCurrency, cookieCurrency);
      buttons.removeClass('selected');
      jQuery('#currencies span[data-currency=' + cookieCurrency + ']').addClass('selected');
    }
    var txt = jQuery('#currencies span.selected').text();
    jQuery('.currency-selector .current-currency').text(txt);
    // // When customer clicks on a currency button.
    buttons.click(function () {
      buttons.removeClass('selected');
      jQuery(this).addClass('selected');
      var newCurrency = jQuery(this).attr('data-currency');
      var txt = jQuery('#currencies span.selected').text();
      jQuery('.currency-selector .current-currency').text(txt);
      Currency.convertAll(Currency.currentCurrency, newCurrency);
    });
    // For options.
    var original_selectCallback = window.selectCallback;
    var selectCallback = function (variant, selector) {
      original_selectCallback(variant, selector);
      Currency.convertAll(shopCurrency, jQuery('#currencies span.selected').attr('data-currency'));
      jQuery('.selected-currency').text(Currency.currentCurrency);
    };
    $('body').on('ajaxCart.afterCartLoad', function (cart) {
      Currency.convertAll(shopCurrency, jQuery('#currencies span.selected').attr('data-currency'));
      jQuery('.selected-currency').text(Currency.currentCurrency);
    });
    jQuery('.selected-currency').text(Currency.currentCurrency);
  </script>
  <script>
    jQuery(function () {
      jQuery('.swatch :radio').change(function () {
        var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
        var optionValue = jQuery(this).val();
        jQuery(this)
          .closest('form')
          .find('.single-option-selector')
          .eq(optionIndex)
          .val(optionValue)
          .trigger('change');

        jQuery(this).parents('.watch_availabel').find('span.variant_current').text(optionValue);
      });
    });
  </script>
  <script>
    function addCart(id){
      num = document.getElementById(`soluong`).value;
      // await fetch("Cart.php?id="+id+"&num="+num)
      $.get("Cart.php?id="+id+"&num="+num);
    }
  </script>
  <script src="//cdn.shopify.com/s/files/1/0272/1493/8165/t/30/assets/nuranium.js?v=9641916987731097208"
    type="text/javascript"></script>
</body>

</html>