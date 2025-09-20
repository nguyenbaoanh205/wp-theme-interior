<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="<?php echo get_field('acf_favicon', 'option')['url']; ?>" type="image/x-icon" />
   <?php wp_head(); ?>

   <!-- <meta charset="UTF-8" />
      <link rel="profile" href="http://gmpg.org/xfn/11" />
      <link rel="pingback" href="https://happyliving.com.vn/xmlrpc.php" /> -->
   <script>
      (function(html) {
         html.className = html.className.replace(/\bno-js\b/, 'js')
      })(document.documentElement);
   </script>
   <!-- <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' /> -->
   <style>
      img:is([sizes="auto" i], [sizes^="auto," i]) {
         contain-intrinsic-size: 3000px 1500px
      }
   </style>
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
   <!-- This site is optimized with the Yoast SEO plugin v25.0 - https://yoast.com/wordpress/plugins/seo/ -->
   <!-- <title>Trang chủ - Happy Living Interior</title>
      <link rel="canonical" href="https://happyliving.com.vn/" />
      <meta property="og:locale" content="vi_VN" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Trang chủ - Happy Living Interior" />
      <meta property="og:url" content="https://happyliving.com.vn/" />
      <meta property="og:site_name" content="Happy Living Interior" />
      <meta property="article:modified_time" content="2025-07-29T04:00:03+00:00" />
      <meta name="twitter:card" content="summary_large_image" /> -->
   <!-- <script type="application/ld+json" class="yoast-schema-graph">
      {
         "@context": "https://schema.org",
         "@graph": [{
            "@type": "WebPage",
            "@id": "https://happyliving.com.vn/",
            "url": "https://happyliving.com.vn/",
            "name": "Trang chủ - Happy Living Interior",
            "isPartOf": {
               "@id": "https://happyliving.com.vn/#website"
            },
            "datePublished": "2024-01-02T03:13:10+00:00",
            "dateModified": "2025-07-29T04:00:03+00:00",
            "breadcrumb": {
               "@id": "https://happyliving.com.vn/#breadcrumb"
            },
            "inLanguage": "vi",
            "potentialAction": [{
               "@type": "ReadAction",
               "target": ["https://happyliving.com.vn/"]
            }]
         }, {
            "@type": "BreadcrumbList",
            "@id": "https://happyliving.com.vn/#breadcrumb",
            "itemListElement": [{
               "@type": "ListItem",
               "position": 1,
               "name": "Trang chủ"
            }]
         }, {
            "@type": "WebSite",
            "@id": "https://happyliving.com.vn/#website",
            "url": "https://happyliving.com.vn/",
            "name": "Happy Living Interior",
            "description": "Nơi mua sắm thiết bị cao cấp, định hình phong cách sống của giới tinh hoa",
            "potentialAction": [{
               "@type": "SearchAction",
               "target": {
                  "@type": "EntryPoint",
                  "urlTemplate": "https://happyliving.com.vn/?s={search_term_string}"
               },
               "query-input": {
                  "@type": "PropertyValueSpecification",
                  "valueRequired": true,
                  "valueName": "search_term_string"
               }
            }],
            "inLanguage": "vi"
         }]
      }
   </script> -->
   <!-- / Yoast SEO plugin. -->
   <link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
   <link rel='prefetch' href='<?php echo get_template_directory_uri(); ?>/js/flatsome.js?ver=a0a7aee297766598a20e' />
   <link rel='prefetch' href='<?php echo get_template_directory_uri(); ?>/js/chunk.slider.js?ver=3.18.7' />
   <link rel='prefetch' href='<?php echo get_template_directory_uri(); ?>/js/chunk.popups.js?ver=3.18.7' />
   <link rel='prefetch' href='<?php echo get_template_directory_uri(); ?>/js/chunk.tooltips.js?ver=3.18.7' />
   <link rel='prefetch' href='<?php echo get_template_directory_uri(); ?>/js/woocommerce.js?ver=49415fe6a9266f32f1f2' />
   <link rel="alternate" type="application/rss+xml" title="Dòng thông tin Happy Living Interior &raquo;" href="https://happyliving.com.vn/feed/" />
   <link rel="alternate" type="application/rss+xml" title="Happy Living Interior &raquo; Dòng bình luận" href="https://happyliving.com.vn/comments/feed/" />
   <script type="text/javascript">
      /* <![CDATA[ */
      window._wpemojiSettings = {
         "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/",
         "ext": ".png",
         "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/",
         "svgExt": ".svg",
         "source": {
            "concatemoji": "https:\/\/happyliving.com.vn\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.2"
         }
      };
      /*! This file is auto-generated */
      ! function(s, n) {
         var o, i, e;

         function c(e) {
            try {
               var t = {
                  supportTests: e,
                  timestamp: (new Date).valueOf()
               };
               sessionStorage.setItem(o, JSON.stringify(t))
            } catch (e) {}
         }

         function p(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
               a = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
            return t.every(function(e, t) {
               return e === a[t]
            })
         }

         function u(e, t) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            for (var n = e.getImageData(16, 16, 1, 1), a = 0; a < n.data.length; a++)
               if (0 !== n.data[a]) return !1;
            return !0
         }

         function f(e, t, n, a) {
            switch (t) {
               case "flag":
                  return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\udde8\ud83c\uddf6", "\ud83c\udde8\u200b\ud83c\uddf6") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
               case "emoji":
                  return !a(e, "\ud83e\udedf")
            }
            return !1
         }

         function g(e, t, n, a) {
            var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : s.createElement("canvas"),
               o = r.getContext("2d", {
                  willReadFrequently: !0
               }),
               i = (o.textBaseline = "top", o.font = "600 32px Arial", {});
            return e.forEach(function(e) {
               i[e] = t(o, e, n, a)
            }), i
         }

         function t(e) {
            var t = s.createElement("script");
            t.src = e, t.defer = !0, s.head.appendChild(t)
         }
         "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", i = ["flag", "emoji"], n.supports = {
            everything: !0,
            everythingExceptFlag: !0
         }, e = new Promise(function(e) {
            s.addEventListener("DOMContentLoaded", e, {
               once: !0
            })
         }), new Promise(function(t) {
            var n = function() {
               try {
                  var e = JSON.parse(sessionStorage.getItem(o));
                  if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
               } catch (e) {}
               return null
            }();
            if (!n) {
               if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                  var e = "postMessage(" + g.toString() + "(" + [JSON.stringify(i), f.toString(), p.toString(), u.toString()].join(",") + "));",
                     a = new Blob([e], {
                        type: "text/javascript"
                     }),
                     r = new Worker(URL.createObjectURL(a), {
                        name: "wpTestEmojiSupports"
                     });
                  return void(r.onmessage = function(e) {
                     c(n = e.data), r.terminate(), t(n)
                  })
               } catch (e) {}
               c(n = g(i, f, p, u))
            }
            t(n)
         }).then(function(e) {
            for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
            n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
               n.DOMReady = !0
            }
         }).then(function() {
            return e
         }).then(function() {
            var e;
            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
         }))
      }((window, document), window._wpemojiSettings);
      /* ]]> */
   </script>
   <style id='wp-emoji-styles-inline-css' type='text/css'>
      img.wp-smiley,
      img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 0.07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
      }
   </style>
   <style id='wp-block-library-inline-css' type='text/css'>
      :root {
         --wp-admin-theme-color: #007cba;
         --wp-admin-theme-color--rgb: 0, 124, 186;
         --wp-admin-theme-color-darker-10: #006ba1;
         --wp-admin-theme-color-darker-10--rgb: 0, 107, 161;
         --wp-admin-theme-color-darker-20: #005a87;
         --wp-admin-theme-color-darker-20--rgb: 0, 90, 135;
         --wp-admin-border-width-focus: 2px;
         --wp-block-synced-color: #7a00df;
         --wp-block-synced-color--rgb: 122, 0, 223;
         --wp-bound-block-color: var(--wp-block-synced-color)
      }

      @media (min-resolution:192dpi) {
         :root {
            --wp-admin-border-width-focus: 1.5px
         }
      }

      .wp-element-button {
         cursor: pointer
      }

      :root {
         --wp--preset--font-size--normal: 16px;
         --wp--preset--font-size--huge: 42px
      }

      :root .has-very-light-gray-background-color {
         background-color: #eee
      }

      :root .has-very-dark-gray-background-color {
         background-color: #313131
      }

      :root .has-very-light-gray-color {
         color: #eee
      }

      :root .has-very-dark-gray-color {
         color: #313131
      }

      :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
         background: linear-gradient(135deg, #00d084, #0693e3)
      }

      :root .has-purple-crush-gradient-background {
         background: linear-gradient(135deg, #34e2e4, #4721fb 50%, #ab1dfe)
      }

      :root .has-hazy-dawn-gradient-background {
         background: linear-gradient(135deg, #faaca8, #dad0ec)
      }

      :root .has-subdued-olive-gradient-background {
         background: linear-gradient(135deg, #fafae1, #67a671)
      }

      :root .has-atomic-cream-gradient-background {
         background: linear-gradient(135deg, #fdd79a, #004a59)
      }

      :root .has-nightshade-gradient-background {
         background: linear-gradient(135deg, #330968, #31cdcf)
      }

      :root .has-midnight-gradient-background {
         background: linear-gradient(135deg, #020381, #2874fc)
      }

      .has-regular-font-size {
         font-size: 1em
      }

      .has-larger-font-size {
         font-size: 2.625em
      }

      .has-normal-font-size {
         font-size: var(--wp--preset--font-size--normal)
      }

      .has-huge-font-size {
         font-size: var(--wp--preset--font-size--huge)
      }

      .has-text-align-center {
         text-align: center
      }

      .has-text-align-left {
         text-align: left
      }

      .has-text-align-right {
         text-align: right
      }

      #end-resizable-editor-section {
         display: none
      }

      .aligncenter {
         clear: both
      }

      .items-justified-left {
         justify-content: flex-start
      }

      .items-justified-center {
         justify-content: center
      }

      .items-justified-right {
         justify-content: flex-end
      }

      .items-justified-space-between {
         justify-content: space-between
      }

      .screen-reader-text {
         border: 0;
         clip-path: inset(50%);
         height: 1px;
         margin: -1px;
         overflow: hidden;
         padding: 0;
         position: absolute;
         width: 1px;
         word-wrap: normal !important
      }

      .screen-reader-text:focus {
         background-color: #ddd;
         clip-path: none;
         color: #444;
         display: block;
         font-size: 1em;
         height: auto;
         left: 5px;
         line-height: normal;
         padding: 15px 23px 14px;
         text-decoration: none;
         top: 5px;
         width: auto;
         z-index: 100000
      }

      html :where(.has-border-color) {
         border-style: solid
      }

      html :where([style*=border-top-color]) {
         border-top-style: solid
      }

      html :where([style*=border-right-color]) {
         border-right-style: solid
      }

      html :where([style*=border-bottom-color]) {
         border-bottom-style: solid
      }

      html :where([style*=border-left-color]) {
         border-left-style: solid
      }

      html :where([style*=border-width]) {
         border-style: solid
      }

      html :where([style*=border-top-width]) {
         border-top-style: solid
      }

      html :where([style*=border-right-width]) {
         border-right-style: solid
      }

      html :where([style*=border-bottom-width]) {
         border-bottom-style: solid
      }

      html :where([style*=border-left-width]) {
         border-left-style: solid
      }

      html :where(img[class*=wp-image-]) {
         height: auto;
         max-width: 100%
      }

      :where(figure) {
         margin: 0 0 1em
      }

      html :where(.is-position-sticky) {
         --wp-admin--admin-bar--position-offset: var(--wp-admin--admin-bar--height, 0px)
      }

      @media screen and (max-width:600px) {
         html :where(.is-position-sticky) {
            --wp-admin--admin-bar--position-offset: 0px
         }
      }
   </style>
   <link rel='stylesheet' id='contact-form-7-css' href='<?php echo get_template_directory_uri(); ?>/css/styles.css?ver=6.0.6' type='text/css' media='all' />
   <style id='woocommerce-inline-inline-css' type='text/css'>
      .woocommerce form .form-row .required {
         visibility: visible;
      }
   </style>
   <link rel='stylesheet' id='brands-styles-css' href='<?php echo get_template_directory_uri(); ?>/css/brands.css?ver=9.8.3' type='text/css' media='all' />
   <link rel='stylesheet' id='font-awesome-5-css' href='<?php echo get_template_directory_uri(); ?>/css/all.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='font-awesome-6-css' href='<?php echo get_template_directory_uri(); ?>/css/all.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='dflip-style-css' href='<?php echo get_template_directory_uri(); ?>/css/dflip.min.css?ver=2.3.65' type='text/css' media='all' />
   <link rel='stylesheet' id='flatsome-main-css' href='<?php echo get_template_directory_uri(); ?>/css/flatsome.css?ver=3.18.7' type='text/css' media='all' />
   <style id='flatsome-main-inline-css' type='text/css'>
      @font-face {
         font-family: "fl-icons";
         font-display: block;
         src: url("<?php echo get_template_directory_uri(); ?>/css/icons/fl-icons.eot?v=3.18.7");
         src:
            url("<?php echo get_template_directory_uri(); ?>/css/icons/fl-icons.eot#iefix?v=3.18.7") format("embedded-opentype"),
            url("<?php echo get_template_directory_uri(); ?>/css/icons/fl-icons.woff2?v=3.18.7") format("woff2"),
            url("<?php echo get_template_directory_uri(); ?>/css/icons/fl-icons.ttf?v=3.18.7") format("truetype"),
            url("<?php echo get_template_directory_uri(); ?>/css/icons/fl-icons.woff?v=3.18.7") format("woff"),
            url("<?php echo get_template_directory_uri(); ?>/css/icons/fl-icons.svg?v=3.18.7#fl-icons") format("svg");
      }
   </style>
   <link rel='stylesheet' id='flatsome-shop-css' href='<?php echo get_template_directory_uri(); ?>/css/flatsome-shop.css?ver=3.18.7' type='text/css' media='all' />
   <link rel='stylesheet' id='flatsome-style-css' href='<?php echo get_template_directory_uri(); ?>/css/style.css?ver=3.0' type='text/css' media='all' />
   <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
   <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
   <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.blockUI.min.js?ver=2.7.0-wc.9.8.3" id="jquery-blockui-js" data-wp-strategy="defer"></script>
   <script type="text/javascript" id="wc-add-to-cart-js-extra">
      /* <![CDATA[ */
      var wc_add_to_cart_params = {
         "ajax_url": "\/wp-admin\/admin-ajax.php",
         "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
         "i18n_view_cart": "Xem gi\u1ecf h\u00e0ng",
         "cart_url": "https:\/\/happyliving.com.vn\/gio-hang\/",
         "is_cart": "",
         "cart_redirect_after_add": "no"
      };
      /* ]]> */
   </script>
   <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/add-to-cart.min.js?ver=9.8.3" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
   <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/js.cookie.min.js?ver=2.1.4-wc.9.8.3" id="js-cookie-js" data-wp-strategy="defer"></script>
   <link rel="https://api.w.org/" href="https://happyliving.com.vn/wp-json/" />
   <link rel="alternate" title="JSON" type="application/json" href="https://happyliving.com.vn/wp-json/wp/v2/pages/14" />
   <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://happyliving.com.vn/xmlrpc.php?rsd" />
   <meta name="generator" content="WordPress 6.8.2" />
   <meta name="generator" content="WooCommerce 9.8.3" />
   <link rel='shortlink' href='https://happyliving.com.vn/' />
   <link rel="alternate" title="oNhúng (JSON)" type="application/json+oembed" href="https://happyliving.com.vn/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fhappyliving.com.vn%2F" />
   <link rel="alternate" title="oNhúng (XML)" type="text/xml+oembed" href="https://happyliving.com.vn/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fhappyliving.com.vn%2F&#038;format=xml" />
   <style>
      .bg {
         opacity: 0;
         transition: opacity 1s;
         -webkit-transition: opacity 1s;
      }

      .bg-loaded {
         opacity: 1;
      }
   </style>
   <noscript>
      <style>
         .woocommerce-product-gallery {
            opacity: 1 !important;
         }
      </style>
   </noscript>
   <!-- <link rel="icon" href="https://happyliving.com.vn/wp-content/uploads/2025/02/cropped-Untitled-design-21-32x32.png" sizes="32x32" />
   <link rel="icon" href="https://happyliving.com.vn/wp-content/uploads/2025/02/cropped-Untitled-design-21-192x192.png" sizes="192x192" /> -->
   <link rel="apple-touch-icon" href="https://happyliving.com.vn/wp-content/uploads/2025/02/cropped-Untitled-design-21-180x180.png" />
   <meta name="msapplication-TileImage" content="https://happyliving.com.vn/wp-content/uploads/2025/02/cropped-Untitled-design-21-270x270.png" />
   <style id="custom-css" type="text/css">
      :root {
         --primary-color: #c49b7d;
         --fs-color-primary: #c49b7d;
         --fs-color-secondary: #000000;
         --fs-color-success: #7a9c59;
         --fs-color-alert: #b20000;
         --fs-experimental-link-color: #cc8a40;
         --fs-experimental-link-color-hover: #dd3333;
      }

      .tooltipster-base {
         --tooltip-color: #cc8a40;
         --tooltip-bg-color: #dc3636;
      }

      .off-canvas-right .mfp-content,
      .off-canvas-left .mfp-content {
         --drawer-width: 300px;
      }

      .off-canvas .mfp-content.off-canvas-cart {
         --drawer-width: 360px;
      }

      .container-width,
      .full-width .ubermenu-nav,
      .container,
      .row {
         max-width: 1270px
      }

      .row.row-collapse {
         max-width: 1240px
      }

      .row.row-small {
         max-width: 1262.5px
      }

      .row.row-large {
         max-width: 1300px
      }

      .sticky-add-to-cart--active,
      #wrapper,
      #main,
      #main.dark {
         background-color: #e8dfd6
      }

      .header-main {
         height: 80px
      }

      #logo img {
         max-height: 80px
      }

      #logo {
         width: 278px;
      }

      #logo img {
         padding: 3px 0;
      }

      .header-top {
         min-height: 30px
      }

      .transparent .header-main {
         height: 80px
      }

      .transparent #logo img {
         max-height: 80px
      }

      .has-transparent+.page-title:first-of-type,
      .has-transparent+#main>.page-title,
      .has-transparent+#main>div>.page-title,
      .has-transparent+#main .page-header-wrapper:first-of-type .page-title {
         padding-top: 110px;
      }

      .transparent .header-wrapper {
         background-color: rgba(0, 0, 0, 0.5) !important;
      }

      .transparent .top-divider {
         display: none;
      }

      .header.show-on-scroll,
      .stuck .header-main {
         height: 80px !important
      }

      .stuck #logo img {
         max-height: 80px !important
      }

      .header-bg-color {
         background-color: rgba(0, 0, 0, 0.5)
      }

      .header-bottom {
         background-color: #f1f1f1
      }

      .top-bar-nav>li>a {
         line-height: 16px
      }

      .header-main .nav>li>a {
         line-height: 16px
      }

      @media (max-width: 549px) {
         .header-main {
            height: 70px
         }

         #logo img {
            max-height: 70px
         }
      }

      .nav-dropdown {
         font-size: 100%
      }

      .nav-dropdown-has-arrow li.has-dropdown:after {
         border-bottom-color: rgba(0, 0, 0, 0.5);
      }

      .nav .nav-dropdown {
         background-color: rgba(0, 0, 0, 0.5)
      }

      .header-top {
         background-color: #0a0a0a !important;
      }

      body {
         color: #000000
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      .heading-font {
         color: #000000;
      }

      @media screen and (max-width: 549px) {
         body {
            font-size: 100%;
         }
      }

      body {
         font-family: Montserrat, sans-serif;
      }

      body {
         font-weight: 400;
         font-style: normal;
      }

      .nav>li>a {
         font-family: Montserrat, sans-serif;
      }

      .mobile-sidebar-levels-2 .nav>li>ul>li>a {
         font-family: Montserrat, sans-serif;
      }

      .nav>li>a,
      .mobile-sidebar-levels-2 .nav>li>ul>li>a {
         font-weight: 700;
         font-style: normal;
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      .heading-font,
      .off-canvas-center .nav-sidebar.nav-vertical>li>a {
         font-family: Montserrat, sans-serif;
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      .heading-font,
      .banner h1,
      .banner h2 {
         font-weight: 700;
         font-style: normal;
      }

      .alt-font {
         font-family: "Dancing Script", sans-serif;
      }

      .alt-font {
         font-weight: 400 !important;
         font-style: normal !important;
      }

      .header:not(.transparent) .top-bar-nav>li>a {
         color: #ffffff;
      }

      .header:not(.transparent) .top-bar-nav.nav>li>a:hover,
      .header:not(.transparent) .top-bar-nav.nav>li.active>a,
      .header:not(.transparent) .top-bar-nav.nav>li.current>a,
      .header:not(.transparent) .top-bar-nav.nav>li>a.active,
      .header:not(.transparent) .top-bar-nav.nav>li>a.current {
         color: #dbdada;
      }

      .top-bar-nav.nav-line-bottom>li>a:before,
      .top-bar-nav.nav-line-grow>li>a:before,
      .top-bar-nav.nav-line>li>a:before,
      .top-bar-nav.nav-box>li>a:hover,
      .top-bar-nav.nav-box>li.active>a,
      .top-bar-nav.nav-pills>li>a:hover,
      .top-bar-nav.nav-pills>li.active>a {
         color: #FFF !important;
         background-color: #dbdada;
      }

      .header:not(.transparent) .header-nav-main.nav>li>a {
         color: #ffffff;
      }

      .header:not(.transparent) .header-nav-main.nav>li>a:hover,
      .header:not(.transparent) .header-nav-main.nav>li.active>a,
      .header:not(.transparent) .header-nav-main.nav>li.current>a,
      .header:not(.transparent) .header-nav-main.nav>li>a.active,
      .header:not(.transparent) .header-nav-main.nav>li>a.current {
         color: #cc8a40;
      }

      .header-nav-main.nav-line-bottom>li>a:before,
      .header-nav-main.nav-line-grow>li>a:before,
      .header-nav-main.nav-line>li>a:before,
      .header-nav-main.nav-box>li>a:hover,
      .header-nav-main.nav-box>li.active>a,
      .header-nav-main.nav-pills>li>a:hover,
      .header-nav-main.nav-pills>li.active>a {
         color: #FFF !important;
         background-color: #cc8a40;
      }

      .shop-page-title.featured-title .title-overlay {
         background-color: #1a1a1a;
      }

      .has-equal-box-heights .box-image {
         padding-top: 100%;
      }

      .price del,
      .product_list_widget del,
      del .woocommerce-Price-amount {
         color: #cc8a40;
      }

      @media screen and (min-width: 550px) {
         .products .box-vertical .box-image {
            min-width: 300px !important;
            width: 300px !important;
         }
      }

      .header-main .social-icons,
      .header-main .cart-icon strong,
      .header-main .menu-title,
      .header-main .header-button>.button.is-outline,
      .header-main .nav>li>a>i:not(.icon-angle-down) {
         color: #ffffff !important;
      }

      .header-main .header-button>.button.is-outline,
      .header-main .cart-icon strong:after,
      .header-main .cart-icon strong {
         border-color: #ffffff !important;
      }

      .header-main .header-button>.button:not(.is-outline) {
         background-color: #ffffff !important;
      }

      .header-main .current-dropdown .cart-icon strong,
      .header-main .header-button>.button:hover,
      .header-main .header-button>.button:hover i,
      .header-main .header-button>.button:hover span {
         color: #FFF !important;
      }

      .header-main .menu-title:hover,
      .header-main .social-icons a:hover,
      .header-main .header-button>.button.is-outline:hover,
      .header-main .nav>li>a:hover>i:not(.icon-angle-down) {
         color: #cc8a40 !important;
      }

      .header-main .current-dropdown .cart-icon strong,
      .header-main .header-button>.button:hover {
         background-color: #cc8a40 !important;
      }

      .header-main .current-dropdown .cart-icon strong:after,
      .header-main .current-dropdown .cart-icon strong,
      .header-main .header-button>.button:hover {
         border-color: #cc8a40 !important;
      }

      .absolute-footer,
      html {
         background-color: #353535
      }

      .nav-vertical-fly-out>li+li {
         border-top-width: 1px;
         border-top-style: solid;
      }

      /* Custom CSS */
      #button-contact-vr {
         position: fixed;
         bottom: 18px;
         z-index: 99999;
      }

      #button-contact-vr {
         bottom: 20px;
         left: 20px;
      }

      .row-box-shadow-3 .col-inner,
      .row-box-shadow-3-hover .col-inner:hover,
      .box-shadow-3,
      .box-shadow-3-hover:hover {
         box-shadow: 0 0 32px 0 rgb(103 115 129 / 20%);
      }

      /*phone*/
      #button-contact-vr .button-contact {
         position: relative;
      }

      #button-contact-vr .button-contact .phone-vr {
         position: relative;
         visibility: visible;
         background-color: transparent;
         width: 75px;
         height: 75px;
         cursor: pointer;
         z-index: 11;
         -webkit-backface-visibility: hidden;
         -webkit-transform: translateZ(0);
         transition: visibility .5s;
         left: 0;
         bottom: 0;
         display: block;
      }

      .phone-vr-circle-fill {
         width: 50px;
         height: 50px;
         top: 12px;
         left: 12px;
         position: absolute;
         box-shadow: 0 0 0 0 #fda613;
         background-color: rgba(230, 8, 8, 0.7);
         border-radius: 50%;
         border: 0px solid transparent;
         -webkit-animation: phone-vr-circle-fill 2.3s infinite ease-in-out;
         animation: phone-vr-circle-fill 2.3s infinite ease-in-out;
         transition: all .5s;
         -webkit-transform-origin: 50% 50%;
         -ms-transform-origin: 50% 50%;
         transform-origin: 50% 50%;
         -webkit-animuiion: zoom 1.3s infinite;
         animation: zoom 1.3s infinite;
      }

      .phone-vr-img-circle {
         background-color: #e60808;
         width: 34px;
         height: 34px;
         line-height: 34px;
         top: 20px;
         left: 20px;
         position: absolute;
         border-radius: 50%;
         display: flex;
         justify-content: center;
         -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
         animation: phone-vr-circle-fill 1s infinite ease-in-out;
      }

      .phone-vr-img-circle a {
         display: block;
         line-height: 37px;
      }

      div#facebook-vr .phone-vr-circle-fill {
         box-shadow: 0 0 0 0 #1976D2;
         background-color: #1976D2;
      }

      div#facebook-vr .phone-vr-img-circle {
         background-color: #1976D2;
      }

      div#ins-vr .phone-vr-circle-fill {
         background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
      }

      .phone-vr-img-circle img {
         max-height: 25px;
         max-width: 27px;
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         -moz-transform: translate(-50%, -50%);
         -webkit-transform: translate(-50%, -50%);
         -o-transform: translate(-50%, -50%);
      }

      @-webkit-keyframes phone-vr-circle-fill {
         0% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
         }

         10% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
         }

         20% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
         }

         30% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
         }

         40% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
         }

         50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
         }

         100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
         }
      }

      @-webkit-keyframes zoom {
         0% {
            transform: scale(.9)
         }

         70% {
            transform: scale(1);
            box-shadow: 0 0 0 15px transparent
         }

         100% {
            transform: scale(.9);
            box-shadow: 0 0 0 0 transparent
         }
      }

      @keyframes zoom {
         0% {
            transform: scale(.9)
         }

         70% {
            transform: scale(1);
            box-shadow: 0 0 0 15px transparent
         }

         100% {
            transform: scale(.9);
            box-shadow: 0 0 0 0 transparent
         }
      }

      .phone-bar a {
         position: fixed;
         bottom: 113px;
         right: 55px;
         z-index: -1;
         color: #fff;
         font-size: 15px;
         padding: 8px 35px 7px 15px;
         border-radius: 100px;
         white-space: nowrap;
      }

      .phone-bar a:hover {
         opacity: 0.8;
         color: #fff;
      }

      @media(max-width: 736px) {
         .phone-bar {
            display: none;
         }
      }

      #zalo-vr .phone-vr-circle-fill {
         box-shadow: 0 0 0 0 #2196F3;
         background-color: rgba(33, 150, 243, 0.7);
      }

      #zalo-vr .phone-vr-img-circle {
         background-color: #2196F3;
      }

      #viber-vr .phone-vr-circle-fill {
         box-shadow: 0 0 0 0 #714497;
         background-color: rgba(113, 68, 151, 0.8);
      }

      #viber-vr .phone-vr-img-circle {
         background-color: #714497;
      }

      #contact-vr .phone-vr-circle-fill {
         box-shadow: 0 0 0 0 #2196F3;
         background-color: rgba(33, 150, 243, 0.7);
      }

      #contact-vr .phone-vr-img-circle {
         background-color: #2196F3;
      }

      /*css all in one*/
      #gom-all-in-one #phone-vr {
         transition: 0.7s all;
         -moz-transition: 0.7s all;
         -webkit-transition: 0.7s all;
      }

      #gom-all-in-one #zalo-vr {
         transition: 1s all;
         -moz-transition: 1s all;
         -webkit-transition: 1s all;
      }

      #gom-all-in-one #viber-vr {
         transition: 1.3s all;
         -moz-transition: 1.3s all;
         -webkit-transition: 1.3s all;
      }

      #gom-all-in-one #contact-vr {
         transition: 1.6s all;
         -moz-transition: 1.6s all;
         -webkit-transition: 1.6s all;
      }

      #button-contact-vr.active #gom-all-in-one .button-contact {
         margin-left: -100%;
      }

      #all-in-one-vr .phone-bar {
         position: absolute;
         top: 50%;
         transform: translateY(-50%);
         left: 100%;
         color: #fff;
         padding: 5px 15px 5px 48px;
         border-radius: 50px;
         margin-left: -64px;
         width: max-content;
         cursor: pointer;
      }

      .phone-bar a,
      #phone-vr .phone-vr-circle-fill,
      #phone-vr .phone-vr-img-circle,
      #phone-vr .phone-bar a {
         background-color: #fda613;
      }

      /* Custom CSS Mobile */
      @media (max-width: 549px) {
         h3.title-banner {
            font-size: 13px;
         }

         p.text-banner {
            font-size: 10px;
         }
      }

      .label-new.menu-item>a:after {
         content: "Mới";
      }

      .label-hot.menu-item>a:after {
         content: "Thịnh hành";
      }

      .label-sale.menu-item>a:after {
         content: "Giảm giá";
      }

      .label-popular.menu-item>a:after {
         content: "Phổ biến";
      }
   </style>
   <style type="text/css" id="wp-custom-css">
      .has-hover:hover img.show-on-hover {
         display: none;
      }

      .gallery-col {
         display: flex;
         align-items: center;
         justify-content: center;
      }

      .box-image {
         text-align: center;
      }

      .logo-slide {
         max-width: 100%;
         height: auto;
      }

      input.wpcf7-form-control.wpcf7-submit.has-spinner {
         margin: 0
      }

      textarea {
         min-height: 90px;
         padding-top: 0.7em;
      }

      .lightbox-content {
         background: #f9f2ed
      }
   </style>
   <style id="kirki-inline-styles">
      /* cyrillic-ext */
      @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 400;
         font-display: swap;
         src: url(https://happyliving.com.vn/wp-content/fonts/montserrat/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
      }

      /* cyrillic */
      @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 400;
         font-display: swap;
         src: url(https://happyliving.com.vn/wp-content/fonts/montserrat/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
         unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
      }

      /* vietnamese */
      @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 400;
         font-display: swap;
         src: url(https://happyliving.com.vn/wp-content/fonts/montserrat/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
      }

      /* latin-ext */
      @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 400;
         font-display: swap;
         src: url(https://happyliving.com.vn/wp-content/fonts/montserrat/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
         unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
      }

      /* latin */
      @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 400;
         font-display: swap;
         src: url(https://happyliving.com.vn/wp-content/fonts/montserrat/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
      }

      /* cyrillic-ext */
      @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 700;
         font-display: swap;
         src: url(https://happyliving.com.vn/wp-content/fonts/montserrat/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
      }

      /* cyrillic */
      @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 700;
         font-display: swap;
         src: url(https://happyliving.com.vn/wp-content/fonts/montserrat/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
         unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
      }

      /* vietnamese */
      @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 700;
         font-display: swap;
         src: url(https://happyliving.com.vn/wp-content/fonts/montserrat/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
      }

      /* latin-ext */
      @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 700;
         font-display: swap;
         src: url(https://happyliving.com.vn/wp-content/fonts/montserrat/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
         unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
      }

      /* latin */
      @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 700;
         font-display: swap;
         src: url(https://happyliving.com.vn/wp-content/fonts/montserrat/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
      }

      /* vietnamese */
      @font-face {
         font-family: 'Dancing Script';
         font-style: normal;
         font-weight: 400;
         font-display: swap;
         src: url(https://happyliving.com.vn/wp-content/fonts/dancing-script/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7BMSo3Rep8ltA.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
      }

      /* latin-ext */
      @font-face {
         font-family: 'Dancing Script';
         font-style: normal;
         font-weight: 400;
         font-display: swap;
         src: url(https://happyliving.com.vn/wp-content/fonts/dancing-script/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7BMSo3ROp8ltA.woff2) format('woff2');
         unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
      }

      /* latin */
      @font-face {
         font-family: 'Dancing Script';
         font-style: normal;
         font-weight: 400;
         font-display: swap;
         src: url(https://happyliving.com.vn/wp-content/fonts/dancing-script/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7BMSo3Sup8.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
      }
   </style>

   <!--CSS-->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?ver=7.1">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
   <script>
      var ajax_url = "<?php echo admin_url('admin-ajax.php'); ?>";
   </script>
   <div id="fb-root"></div>
</head>

<body <?php body_class(); ?>>
   <div id="wrapper">
      <header id="header" class="header transparent has-transparent header-full-width has-sticky sticky-jump">
         <div class="header-wrapper">
            <div id="top-bar" class="header-top hide-for-sticky nav-dark">
               <div class="flex-row container">
                  <div class="flex-col hide-for-medium flex-left">
                     <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                        <li id="menu-item-1671" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1671 menu-item-design-default"><a href="#" class="nav-top-link">BLUE SANITARY</a></li>
                        <li id="menu-item-1123" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1123 menu-item-design-default"><a href="#" class="nav-top-link">SANEI</a></li>
                        <li id="menu-item-155" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-155 menu-item-design-default"><a href="#" class="nav-top-link">TOYOURA</a></li>
                     </ul>
                  </div>
                  <div class="flex-col hide-for-medium flex-center">
                     <ul class="nav nav-center nav-small  nav-divided">
                     </ul>
                  </div>
                  <div class="flex-col hide-for-medium flex-right">
                     <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
                        <li class="html custom html_topbar_left"><a title="Điện Thoại" class="phone" href="tel:0904591986">Hotline:19004522</a></li>
                        <li class="header-search-form search-form html relative has-icon">
                           <div class="header-search-form-wrapper">
                              <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                                 <form role="search" method="get" class="searchform" action="#">
                                    <div class="flex-row relative">
                                       <div class="flex-col flex-grow">
                                          <label class="screen-reader-text" for="woocommerce-product-search-field-0">Tìm kiếm:</label>
                                          <input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="Tìm kiếm&hellip;" value="" name="s" />
                                          <input type="hidden" name="post_type" value="product" />
                                       </div>
                                       <div class="flex-col">
                                          <button type="submit" value="Tìm kiếm" class="submit-button secondary button  icon mb-0" aria-label="Nộp">
                                             <i class="icon-search"></i> </button>
                                       </div>
                                    </div>
                                    <div class="live-search-results text-left z-top"></div>
                                 </form>
                              </div>
                           </div>
                        </li>
                        <li class="cart-item has-icon has-dropdown">
                           <a href="#" class="header-cart-link is-small" title="Giỏ hàng">
                              <i class="icon-shopping-cart"
                                 data-icon-label="0">
                              </i>
                           </a>
                           <ul class="nav-dropdown nav-dropdown-simple dark">
                              <li class="html widget_shopping_cart">
                                 <div class="widget_shopping_cart_content">
                                    <div class="ux-mini-cart-empty flex flex-row-col text-center pt pb">
                                       <p class="woocommerce-mini-cart__empty-message empty">Chưa có sản phẩm trong giỏ hàng.</p>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <div class="flex-col show-for-medium flex-grow">
                     <ul class="nav nav-center nav-small mobile-nav  nav-divided">
                        <li class="html custom html_topbar_left"><a title="Điện Thoại" class="phone" href="tel:0904591986">Hotline:19004522</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div id="masthead" class="header-main ">
               <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                  <!-- Logo -->
                  <div id="logo" class="flex-col logo">
                     <!-- Header logo -->
                     <a href="<?php echo esc_url(home_url('/')); ?>" title="Happy Living Interior - Nơi mua sắm thiết bị cao cấp, định hình phong cách sống của giới tinh hoa" rel="home"></a>
                     <?php
                     $logo = get_field('acf_option_logo', 'option');
                     ?>
                     <img width="1020" height="267" src="<?php echo esc_url($logo['url']); ?>" class="header_logo header-logo" alt="Happy Living Interior" />
                     <!-- <img width="1020" height="267" src="https://happyliving.com.vn/wp-content/uploads/2024/01/Happy-living-05-1024x268.png" class="header-logo-dark" alt="Happy Living Interior" /></a> -->
                  </div>

                  <!-- Mobile Left Elements -->
                  <div class="flex-col show-for-medium flex-left">
                     <ul class="mobile-nav nav nav-left ">
                        <li class="nav-icon has-icon">
                           <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
                              <i class="icon-menu"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <!-- Mobile Sidebar Menu -->
                  <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
                     <div class="sidebar-menu no-scrollbar">
                        <!-- Search form -->
                        <ul class="nav nav-sidebar nav-vertical nav-uppercase">
                           <li class="header-search-form search-form html relative has-icon">
                              <div class="header-search-form-wrapper">
                                 <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                                    <form role="search" method="get" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                                       <div class="flex-row relative">
                                          <div class="flex-col flex-grow">
                                             <label class="screen-reader-text" for="woocommerce-product-search-field">Tìm kiếm:</label>
                                             <input type="search" id="woocommerce-product-search-field" class="search-field mb-0"
                                                placeholder="Tìm kiếm…" value="<?php echo get_search_query(); ?>" name="s" autocomplete="off">
                                             <input type="hidden" name="post_type" value="product">
                                          </div>
                                          <div class="flex-col">
                                             <button type="submit" value="Tìm kiếm"
                                                class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Tìm kiếm">
                                                <i class="icon-search"></i>
                                             </button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </li>
                        </ul>
                        <?php
                        wp_nav_menu(array(
                           'theme_location' => 'main_menu',
                           'menu_class'     => 'nav nav-sidebar nav-vertical nav-uppercase',
                           'container'      => false,
                           'fallback_cb'    => false,
                           'items_wrap'     => '<ul id="%1$s" class="%2$s" data-tab="1">%3$s</ul>',
                        ));
                        ?>
                     </div>
                  </div>

                  <!-- Left Elements -->
                  <div class="flex-col hide-for-medium flex-left
                        flex-grow">
                     <ul class="header-nav header-nav-main nav nav-left  nav-spacing-xlarge">
                     </ul>
                  </div>
                  <!-- Right Elements -->
                  <div class="flex-col hide-for-medium flex-right">
                     <?php
                     wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'menu_class' => 'header-nav header-nav-main nav nav-right nav-spacing-xlarge',
                        'container' => false
                     ));
                     ?>
                  </div>
                  <!-- Mobile Right Elements -->
                  <div class="flex-col show-for-medium flex-right">
                     <ul class="mobile-nav nav nav-right ">
                        <li class="cart-item has-icon">
                           <a href="https://happyliving.com.vn/gio-hang/" class="header-cart-link is-small off-canvas-toggle nav-top-link" title="Giỏ hàng" data-open="#cart-popup" data-class="off-canvas-cart" data-pos="right">
                              <i class="icon-shopping-cart"
                                 data-icon-label="0">
                              </i>
                           </a>
                           <!-- Cart Sidebar Popup -->
                           <div id="cart-popup" class="mfp-hide">
                              <div class="cart-popup-inner inner-padding cart-popup-inner--sticky">
                                 <div class=" cart-popup-title text-center">
                                    <span class="heading-font uppercase">Giỏ hàng</span>
                                    <div class="is-divider"></div>
                                 </div>
                                 <div class="widget woocommerce widget_shopping_cart">
                                    <div class="widget_shopping_cart_content"></div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="container">
                  <div class="top-divider full-width"></div>
               </div>
            </div>
            <div class="header-bg-container fill">
               <div class="header-bg-image fill"></div>
               <div class="header-bg-color fill"></div>
            </div>
         </div>
      </header>