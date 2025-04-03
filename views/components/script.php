

<script>
        (function() {
            document.addEventListener("DOMContentLoaded", function(e) {
                if (document.hasOwnProperty("visibilityState") && document.visibilityState === "prerender") {
                    return;
                }

                if (navigator.webdriver || /bot|crawler|spider|crawling/i.test(navigator.userAgent)) {
                    return;
                }

                const params = location.search.slice(1).split('&').reduce((acc, s) => {
                    const [k, v] = s.split('=')
                    return Object.assign(acc, {
                        [k]: v
                    })
                }, {})

                const url = "https://www.theseedcambodia.com/wp-json/apvc/track_view"
                const body = {
                    utm_source: params.utm_source,
                    utm_medium: params.utm_medium,
                    utm_campaign: params.utm_campaign,
                    utm_term: params.utm_term,
                    utm_content: params.utm_content,
                    ...{
                        "rawData": {
                            "type": "singular",
                            "singular_id": 6225,
                            "author_id": 0,
                            "page": 1
                        },
                        "signature": "46fd93f478a766def133772e7bebb896"
                    }
                }
                const xhr = new XMLHttpRequest()
                xhr.open("POST", url, true)
                xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8")
                xhr.send(JSON.stringify(body))
            })
        })();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <div id="bravepop_element_tooltip"></div>
    <div id="bravepop_element_lightbox">
        <div id="bravepop_element_lightbox_close" onclick="brave_lightbox_close()"></div>
        <div id="bravepop_element_lightbox_content"></div>
    </div>

    <!--

        Theme: Newspaper by tagDiv.com 2023
        Version: 12.6.2 (rara)
        Deploy mode: deploy
        
        uid: 67e0c49be317a
    -->


    <!-- Custom css from theme panel -->
    <style type="text/css" media="screen">
        .td-error-activate {
            display: none !important
        }

        @font-face {
            font-family: 'KhmerKoulen';
            src: url('https://www.theseedcambodia.com/wp-content/uploads/myfonts/KhmerOSKoulen.eot');
            src: url('https://www.theseedcambodia.com/wp-content/uploads/myfonts/KhmerOSKoulen.eot?iefix') format('eot'), url('hhttps://www.theseedcambodia.com/wp-content/uploads/myfonts/KhmerOSKoulen.woff') format('woff'), url('https://www.theseedcambodia.com/wp-content/uploads/myfonts/KhmerOSKoulen.ttf') format('truetype'), url('https://www.theseedcambodia.com/wp-content/uploads/myfonts/KhmerOSKoulen.svg#webfont') format('svg');
            font-weight: normal;
            font-style: normal;
            unicode-range: U+1780-17FF, U+200B-200C, U+25CC
        }

        body,
        .td-container-wrap {
            background: #faf5ee !important
        }

        .td-crumb-container,
        .td-page-title {
            display: none
        }

        .td-page-content {
            padding-top: 60px
        }

        .page-content-title {
            text-align: center;
            color: #bb0101;
            margin-bottom: 40px
        }

        .td-excerpt,
        .td_module_wrap .entry-title,
        .break-content .td-module-meta-info,
        .break-content-100 .td-module-meta-info {
            word-wrap: break-word;
            overflow-wrap: break-word
        }

        .break-content .td-module-meta-info {
            width: 60%
        }

        .break-content-100 .td-module-container {
            width: 100%
        }

        .post {
            background-color: transparent
        }

        body,
        p,
        a,
        .tdb-search-txt,
        .td-excerpt,
        .tdm-descr,
        .td-editor-date,
        .tdb-title-text,
        .td-current-sub-category,
        .td-module-meta-info a,
        .td-block-title span,
        .tdb-block-inner,
        .tdb-block-inner span,
        .brave_element__text_inner,
        .tdm-list-item,
        .icon-style-2 .iconbox .icon-list li .icon-desc .icon-title,
        .td-post-category,
        .td_ajax_load_more {
            font-family: 'KhmerOSSiemreap', 'Roboto', sans-serif
        }

        .td-block-title span,
        .tdb-single-title .tdb-title-text,
        .page-content-title,
        .popup-text {
            font-family: 'Kantumruy', 'Roboto', sans-serif
        }

        .brave_element__text_inner {
            font-family: 'Kantumruy', 'Roboto', sans-serif !important
        }

        .td-excerpt {
            height: 70px;
            overflow: hidden;
            line-height: 24px !important
        }

        .tdm-list-item .tdm-list-icon {
            margin-left: -20px;
            margin-right: 0 !important
        }

        .tdm_block_list .tdm-list-item {
            padding-left: 25px
        }

        .dropdown-toggle:after {
            display: none
        }

        .tdb_header_menu .tdb-menu>li>a:after {
            bottom: 37px;
            left: -10px;
            margin: 0;
            border-radius: 5px
        }

        #td-mobile-nav .td-social-icon-wrap i,
        #td-mobile-nav .td-social-icon-wrap .td-icon-instagram {
            font-size: 30px
        }

        .td-mobile-container .td-menu-socials-wrap {
            border-bottom: 1px solid #d71b1b;
            padding-bottom: 13px
        }

        .blog-list.style-number .td_module_flex {
            padding-left: 50px
        }

        .blog-list.style-number .td-module-container {
            border-bottom: 1px solid #a0a0a0
        }

        .blog-list.style-number .td_module_flex:before {
            content: '១';
            position: absolute;
            left: 30px;
            top: 5px;
            font-size: 40px;
            font-family: 'Kantumruy', 'Roboto', sans-serif !important;
            color: #bb0000
        }

        .blog-list.style-number .td_module_flex:nth-child(2):before {
            content: '២'
        }

        .blog-list.style-number .td_module_flex:nth-child(3):before {
            content: '៣'
        }

        .blog-list.style-number .td_module_flex:nth-child(4):before {
            content: '៤'
        }

        .blog-list.style-number .td_module_flex:nth-child(5):before {
            content: '៥'
        }

        .blog-list.num6to10 .td_module_flex:nth-child(1):before {
            content: '៦'
        }

        .blog-list.num6to10 .td_module_flex:nth-child(2):before {
            content: '៧'
        }

        .blog-list.num6to10 .td_module_flex:nth-child(3):before {
            content: '៨'
        }

        .blog-list.num6to10 .td_module_flex:nth-child(4):before {
            content: '៩'
        }

        .blog-list.num6to10 .td_module_flex:nth-child(5):before {
            content: '១០';
            left: 5px
        }

        .td-scroll-up {
            bottom: 5px;
            border-radius: 50px
        }

        .td-scroll-up .td-icon-menu-up {
            font-size: 15px;
            top: 11px
        }

        .tnp-subscription-minimal input.tnp-submit {
            border-color: #b00;
            background-color: #b00;
            border-radius: 22px;
            margin-left: 10px;
            padding: 8px
        }

        .tnp-subscription-minimal input.tnp-email {
            width: 66%;
            padding: 15px;
            border: 1px solid #fff;
            background-color: #fff;
            border-radius: 22px
        }

        .tdb_search_form .tdb-search-form-inner {
            background-color: transparent
        }

        div.wpforms-container .wpforms-form div.wpforms-field-container .wpforms-field input,
        div.wpforms-container .wpforms-form div.wpforms-field-container .wpforms-field textarea {
            font-family: 'KhmerOSSiemreap', 'Roboto', sans-serif !important;
            border-color: #8c8c8c;
            color: #222;
            font-size: 16px
        }

        div.wpforms-container-full .wpforms-form textarea {
            border: 1px solid #8c8c8c !important;
            border-radius: 30px !important;
            padding: 30px !important
        }

        div.wpforms-container-full .wpforms-form input[type="date"],
        div.wpforms-container-full .wpforms-form input[type="datetime"],
        div.wpforms-container-full .wpforms-form input[type="datetime-local"],
        div.wpforms-container-full .wpforms-form input[type="email"],
        div.wpforms-container-full .wpforms-form input[type="month"],
        div.wpforms-container-full .wpforms-form input[type="number"],
        div.wpforms-container-full .wpforms-form input[type="password"],
        div.wpforms-container-full .wpforms-form input[type="range"],
        div.wpforms-container-full .wpforms-form input[type="search"],
        div.wpforms-container-full .wpforms-form input[type="tel"],
        div.wpforms-container-full .wpforms-form input[type="text"],
        div.wpforms-container-full .wpforms-form input[type="time"],
        div.wpforms-container-full .wpforms-form input[type="url"],
        div.wpforms-container-full .wpforms-form input[type="week"],
        div.wpforms-container-full .wpforms-form select,
        div.wpforms-container-full .wpforms-form textarea {
            background-color: transparent;
            font-family: 'KhmerOSSiemreap', 'Roboto', sans-serif !important
        }

        div.wpforms-container .wpforms-form div.wpforms-field-container .wpforms-field .wpforms-field-label,
        div.wpforms-container-full .wpforms-form .wpforms-field-description,
        div.wpforms-container-full .wpforms-form .wpforms-field-limit-text {
            color: #222;
            font-size: 16px;
            font-family: 'KhmerOSSiemreap', 'Roboto', sans-serif !important
        }

        div.wpforms-container-full .wpforms-form .wpforms-submit-container {
            margin: 0 auto;
            text-align: center
        }

        div.wpforms-container .wpforms-form div.wpforms-submit-container button[type="submit"] {
            font-family: 'KhmerOSSiemreap', 'Roboto', sans-serif !important;
            border-radius: 40px;
            margin-top: 30px
        }

        .blog-list-image-right .td-module-meta-info {
            width: 60%
        }

        .tdi_62 .tdb-featured-image-bg {
            background-size: contain !important
        }

        .single-post .tdb_single_content h1 .single-post .tdb_single_content h2,
        .single-post .tdb_single_content h3,
        .single-post .tdb_single_content h4,
        .single-post .tdb_single_content h5,
        .single-post .tdb_single_content h6,
        .single-post .tdb_single_content h1 span,
        .single-post .tdb_single_content h2 span,
        .single-post .tdb_single_content h3 span,
        .single-post .tdb_single_content h4 span,
        .single-post .tdb_single_content h5 span,
        .single-post .tdb_single_content h6 span {
            margin-top: 0;
            font-family: 'Kantumruy', 'Roboto', sans-serif !important
        }

        .painting {
            font-size: 12px;
            position: absolute;
            top: -60px
        }

        .telegram-link {
            background: #dd3333;
            color: #fff;
            padding: 2px 15px 0px;
            border-radius: 15px;
            font-size: 13px
        }

        .blog-list-image-left .td-module-meta-info {
            width: 52%
        }

        .team,
        .team .team-list {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            flex-flow: row wrap;
            margin-left: -15px;
            margin-right: -15px
        }

        .team .team-list .list {
            width: 25%;
            float: left;
            padding: 0px 15px;
            margin: 0 !important;
            margin-bottom: 30px !important;
            display: flex;
            flex-wrap: wrap
        }

        .team .team-list .profile {
            cursor: pointer;
            text-align: center;
            position: relative;
            margin: auto
        }

        .team-circle {
            position: absolute;
            height: 300px;
            width: 300px;
            border-radius: 50%;
            background: #ddd;
            top: 0;
            right: 0;
            z-index: 1
        }

        .team .team-list .profile .team-img {
            width: 240px;
            height: 240px;
            margin: auto;
            position: relative;
            margin-bottom: 25px
        }

        .team .team-list .profile .team-img img {
            border-radius: 50%;
            padding: 15px;
            position: relative;
            z-index: 9;
            margin-bottom: 0
        }

        .team .team-list .profile .team-img:before {
            content: '';
            position: absolute;
            height: 100%;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 50%;
            z-index: 1
        }

        .team .team-list .profile .team-img:after {
            content: '';
            position: absolute;
            height: 100%;
            width: 100%;
            border: 2px solid #bb0101;
            border-radius: 50%;
            z-index: 2;
            left: 0;
            top: 0;
            -webkit-transition: -webkit-transform 0.3s;
            transition: -webkit-transform 0.3s;
            transition: transform 0.3s;
            transition: transform 0.3s, -webkit-transform 0.3s;
            transform: scale(0)
        }

        .team .team-list .profile:hover .team-img:after {
            transform: scale(1)
        }

        .team .team-list .profile .team-name {
            font-size: 18px;
            color: #bb0101
        }

        .team .team-list .profile .team-position {
            font-size: 14px
        }

        .modal-body {
            display: inline-flex;
            padding: 0
        }

        .user-icon {
            position: absolute;
            bottom: 10px;
            right: 15px;
            z-index: 999;
            display: initial
        }

        .profile-detail .close {
            position: absolute;
            right: 0;
            font-size: 14px;
            padding: 18px;
            opacity: 1;
            color: #000;
            z-index: 999
        }

        .modal-content {
            border-radius: 0
        }

        .profile-name {
            width: 5%;
            background: #fff
        }

        .profile-name h5 {
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            right: -87px;
            margin-top: 0;
            position: absolute;
            text-align: center;
            top: 50%;
            width: 222px;
            z-index: 9999;
            font-size: 18px
        }

        .profile-detail .profile-img {
            width: 40%;
            min-height: 666px;
            max-height: 100%;
            background-size: cover;
            background-position: top center;
            background-repeat: no-repeat
        }

        .profile-detail .profile-content {
            width: 55%;
            padding: 40px 30px
        }

        .profile-detail .profile-content .team-name {
            color: #bb0101;
            font-size: 22px
        }

        .profile-detail .profile-content .team-position {
            font-size: 15px
        }

        .profile-detail .profile-content p,
        .profile-detail .profile-content ul li {
            font-size: 13px;
            font-family: 'KhmerOSSiemreap', 'Roboto', sans-serif !important
        }

        .nav-tab .nav-item {
            margin-left: 30px !important;
            margin-bottom: 0 !important
        }

        .nav-tab .nav-item:first-child {
            margin-left: 0 !important
        }

        .profile-content .nav-tab {
            border-bottom: 1px solid #ddd;
            border-top: 2px solid #666
        }

        .nav-tab .nav-link {
            padding: 6px 0;
            background: #1a9a75;
            background: #ffffff;
            border-radius: 0;
            text-decoration: none !important;
            color: #000;
            font-weight: bold;
            margin-bottom: -1px
        }

        .nav-tab .nav-link:hover,
        .nav-tab .nav-link.active {
            background: #fff;
            color: #bb0101;
            border-bottom: 3px solid #bb0101
        }

        .tab-content ul {
            list-style: disc
        }

        .tab-content ul li {
            margin-left: 12px;
            margin-bottom: 5px !important
        }

        @media (min-width:992px) {
            .modal-lg {
                max-width: 1050px
            }
        }

        .iconbox .icon-list {
            list-style: none;
            float: left;
            margin-top: 0
        }

        .iconbox .icon-list li {
            width: 33.33%;
            float: left;
            margin: 0 0 25px 0;
            padding: 22px 10px !important
        }

        .iconbox .icon-list li a {
            display: block
        }

        .iconbox .icon-list li a:hover .icon-title,
        .iconbox .icon-list li a:hover .icon-desc {
            color: #bb0000
        }

        .iconbox .icon-list li .icon-img {
            width: 35%;
            float: left
        }

        .iconbox .icon-list li .icon-img img {
            margin-bottom: 0
        }

        .iconbox .icon-list li .icon-desc {
            width: 65%;
            float: left;
            padding-left: 6;
            margin-top: 30px
        }

        .iconbox .icon-list li .icon-desc .icon-title {
            font-size: 20px;
            line-height: 1.5;
            margin: 0;
            font-weight: 600
        }

        .iconbox .icon-list li .icon-desc .short-text {
            font-size: 13.5px;
            line-height: 1.6;
            padding-top: 4px;
            margin: 0;
            color: #444444
        }

        .icon-style-2 .iconbox .icon-list li .icon-desc {
            margin-top: 10px
        }

        .icon-style-2 .iconbox .icon-list li {
            width: 100%;
            background: #fff;
            padding: 25px 10px;
            margin-bottom: 20px
        }

        .icon-style-2 .iconbox .icon-list li .icon-desc .icon-title {
            font-size: 14px
        }

        .icon-style-2 .iconbox .icon-list li .icon-desc .short-text {
            font-size: 12px
        }

        .row-counter {
            margin-left: -30px;
            margin-right: -30px
        }

        .counter-box {
            display: block;
            background: #fff;
            padding: 40px 20px 37px;
            text-align: center
        }

        .counter-box p {
            margin: 5px 0 0;
            padding: 0;
            color: #44444;
            font-size: 18px;
            font-weight: 500;
            font-family: 'Kantumruy', 'Roboto', sans-serif;
            margin-bottom: 0 !important
        }

        .counter-box i {
            font-size: 60px;
            margin: 0 0 15px;
            color: #d2d2d2
        }

        .counter,
        .avc_visit_counter_front {
            display: block;
            font-size: 50px !important;
            font-weight: 900 !important;
            color: #000 !important;
            line-height: 1;
            padding: 0 !important;
            font-family: 'Kantumruy', 'Roboto', sans-serif !important;
            max-width: initial !important
        }

        .counter-box.colored {
            background: #3acf87
        }

        .counter-box.colored p,
        .counter-box.colored i,
        .counter-box.colored .counter {
            color: #fff
        }

        @media (min-width:768px) and (max-width:1018px) {
            .team .team-list .list {
                width: 33.33%
            }
        }

        @media (max-width:767px) {
            .share-icon-top .td-social-network {
                margin: 0 5px 5px;
                height: 35px;
                min-width: 20px
            }

            .share-icon-top .td-social-but-icon {
                width: 20px
            }

            .share-icon-top .td-social-but-icon {
                padding-left: 3px;
                padding-right: 10px
            }

            .iconbox .icon-list {
                padding: 0;
                margin-top: 15px;
                margin-bottom: 30px
            }

            .iconbox .icon-list li .icon-img {
                width: 22%
            }

            .iconbox .icon-list li .icon-desc {
                width: 78%
            }

            .blog-list.style-number .td_module_flex:before {
                left: 8px;
                font-size: 30px
            }

            .blog-list-image-left .td-module-meta-info {
                width: 60%
            }

            .painting {
                font-size: 10px;
                top: -53px
            }

            .footer-social .td-post-sharing {
                text-align: center
            }

            .nav-tab .nav-item {
                margin-left: 15px !important
            }

            .modal-body {
                display: block
            }

            .team .team-list .list {
                width: 100%
            }

            .profile-detail .profile-content,
            .profile-detail .profile-img {
                width: 100%
            }

            .profile-name {
                display: none
            }

            .row-counter {
                margin-left: -20px;
                margin-right: -20px
            }

            .row-counter .four {
                width: 50%;
                padding-right: 5px;
                padding-left: 5px;
                margin-top: 10px
            }

            .counter,
            .avc_visit_counter_front {
                font-size: 35px
            }
        }
    </style>

    <script type="text/javascript">
        $(document).ready(function() {

            $('.counter').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        });


        $(document).ready(function() {

            $('.avc_visit_counter_front').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            brave_popup_data[8539] = {
                title: 'Donation',
                type: 'popup',
                fonts: ["Khmer"],
                advancedAnimation: false,
                hasAnimation: false,
                hasContAnim: false,
                animationData: [{
                    "desktop": {
                        "elements": [],
                        "totalDuration": 0
                    },
                    "mobile": {
                        "elements": [],
                        "totalDuration": 0
                    }
                }],
                videoData: [],
                hasYoutube: false,
                hasVimeo: false,
                settings: {
                    "goal": "newsletter",
                    "goalAction": {
                        "step": 0,
                        "type": "click",
                        "elementIDs": {}
                    },
                    "audience": {
                        "devices": "all"
                    },
                    "frequency": {
                        "repeatCount": "2",
                        "repeatCountType": "day",
                        "repeat": true
                    },
                    "placement": {
                        "placementType": "sitewide",
                        "pages": ["front"],
                        "posts": []
                    },
                    "trigger": {
                        "triggerType": "load"
                    }
                },
                close: [{
                    "desktop": {},
                    "mobile": {}
                }],
                forceLoad: false,
                forceStep: false,
                hasDesktopEmbed: false,
                hasMobileEmbed: false,
                hasLoginElement: false,
                schedule: {},
                parentID: false,
                variants: [],
                embedLock: false,
                ajaxLoad: false,
                ajaxLoaded: false,
                timers: [],
            }
            brave_init_popup(8539, brave_popup_data[8539]);
        });
    </script>
    <style type="text/css">
        #brave_popup_8539__step__0 .brave_popup__step__desktop .brave_popup__step__inner {
            width: 700px;
            height: 450px;
            margin-top: -225px;
            font-family: Arial;
        }

        #brave_popup_8539__step__0 .brave_popup__step__desktop .brave_element__wrap {
            font-family: Arial;
        }

        #brave_popup_8539__step__0 .brave_popup__step__desktop .brave_popup__step__content {
            background-color: rgba(255, 255, 255, 1);
        }

        #brave_popup_8539__step__0 .brave_popup__step__desktop .brave_popup__step__overlay {
            background-color: rgba(0, 0, 0, 0.7);
        }

        #brave_popup_8539__step__0 .brave_popup__step__desktop .brave_popup__close {
            font-size: 24px;
            width: 24px;
            color: rgba(0, 0, 0, 1);
            top: -32px
        }

        #brave_popup_8539__step__0 .brave_popup__step__desktop .brave_popup__close svg {
            width: 24px;
            height: 24px;
        }

        #brave_popup_8539__step__0 .brave_popup__step__desktop .brave_popup__close svg path {
            fill: rgba(0, 0, 0, 1);
        }

        #brave_popup_8539__step__0 #brave_element--NKrVxxGbkKjFKLgVuLG {
            width: 711px;
            height: 460px;
            top: -3px;
            left: -3px;
            z-index: 0;
        }

        #brave_popup_8539__step__0 #brave_element--NKrVAmpTnmfAr7-1ojt {
            width: 305.016px;
            height: 432.0846624858px;
            top: 10px;
            left: 18.46875px;
            z-index: 1;
        }

        #brave_popup_8539__step__0 #brave_element--NKrWPOBdhobVKzKj-yz {
            width: 303px;
            height: 186px;
            top: 176px;
            left: 357px;
            z-index: 2;
        }

        #brave_popup_8539__step__0 #brave_element--NKrWq79HZqkFXzqGG5p {
            width: 123px;
            height: 123px;
            top: 58px;
            left: 445px;
            z-index: 3;
        }

        #brave_popup_8539__step__0 .brave_popup__step__mobile .brave_popup__step__inner {
            width: 300px;
            height: 471px;
            margin-top: -236px;
            font-family: Arial;
        }

        #brave_popup_8539__step__0 .brave_popup__step__mobile .brave_element__wrap {
            font-family: Arial;
        }

        #brave_popup_8539__step__0 .brave_popup__step__mobile .brave_popupMargin__wrap {
            top: 0px;
            left: 0px;
        }

        #brave_popup_8539__step__0 .brave_popup__step__mobile .brave_popup__step__content {
            background-color: rgba(255, 255, 255, 1);
        }

        #brave_popup_8539__step__0 .brave_popup__step__mobile .brave_popup__step__overlay {
            background-color: rgba(0, 0, 0, 0.7);
        }

        #brave_popup_8539__step__0 .brave_popup__step__mobile .brave_popup__close {
            font-size: 24px;
            width: 24px;
            color: rgba(0, 0, 0, 1);
            top: -32px
        }

        #brave_popup_8539__step__0 .brave_popup__step__mobile .brave_popup__close svg {
            width: 24px;
            height: 24px;
        }

        #brave_popup_8539__step__0 .brave_popup__step__mobile .brave_popup__close svg path {
            fill: rgba(0, 0, 0, 1);
        }

        #brave_popup_8539__step__0 #brave_element--NKr_4AxNTST6jV278ta {
            width: 711px;
            height: 480px;
            top: 0px;
            left: -5px;
            z-index: 0;
        }

        #brave_popup_8539__step__0 #brave_element--NKr_8iK2h1g4bRiej9t {
            width: 223.641px;
            height: 316.79412422461px;
            top: 148px;
            left: 38.875px;
            z-index: 1;
        }

        #brave_popup_8539__step__0 #brave_element--NKr_FdiCAJP-O8jweKi {
            width: 279px;
            height: 64px;
            top: 73px;
            left: 11px;
            z-index: 2;
        }

        #brave_popup_8539__step__0 #brave_element--NKr_cxR8JjqwPDKUGAX {
            width: 91px;
            height: 91px;
            top: -2px;
            left: 105px;
            z-index: 3;
        }

        #brave_popup_8539__step__0 #brave_element--NKrVxxGbkKjFKLgVuLG .brave_element_shape-icon {
            font-size: 701px;
        }

        #brave_popup_8539__step__0 #brave_element--NKrVAmpTnmfAr7-1ojt .brave_element__styler {
            border-radius: 34px;
        }

        #brave_popup_8539__step__0 #brave_element--NKrVAmpTnmfAr7-1ojt img {
            filter: contrast(75%) brightness(119%);
        }

        #brave_popup_8539__step__0 #brave_element--NKrWPOBdhobVKzKj-yz .brave_element__text_inner {
            text-align: center;
            font-size: 30px;
            font-family: 'Khmer';
            line-height: 1.7em;
            color: rgba(244, 236, 236, 1);
        }

        #brave_popup_8539__step__0 #brave_element--NKrWq79HZqkFXzqGG5p .brave_element__styler {}

        #brave_popup_8539__step__0 #brave_element--NKrWq79HZqkFXzqGG5p img {}

        #brave_popup_8539__step__0 #brave_element--NKr_4AxNTST6jV278ta .brave_element_shape-icon {
            font-size: 701px;
        }

        #brave_popup_8539__step__0 #brave_element--NKr_8iK2h1g4bRiej9t .brave_element__styler {
            border-radius: 34px;
        }

        #brave_popup_8539__step__0 #brave_element--NKr_8iK2h1g4bRiej9t img {
            filter: contrast(75%) brightness(119%);
        }

        #brave_popup_8539__step__0 #brave_element--NKr_FdiCAJP-O8jweKi .brave_element__text_inner {
            text-align: center;
            font-size: 20px;
            font-family: 'Khmer';
            line-height: 1.7em;
            color: rgba(244, 236, 236, 1);
        }

        #brave_popup_8539__step__0 #brave_element--NKr_cxR8JjqwPDKUGAX .brave_element__styler {}

        #brave_popup_8539__step__0 #brave_element--NKr_cxR8JjqwPDKUGAX img {}
    </style>
    <link rel="stylesheet" id="bravepop_front_css-css"
        href="https://www.theseedcambodia.com/wp-content/plugins/brave-popup-builder/assets/css/frontend.min.css?ver=6.4.5"
        type="text/css" media="all">
    <script type="text/javascript"
        src="https://www.theseedcambodia.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tagdiv_theme.min.js?ver=12.6.2"
        id="td-site-min-js"></script>
    <script type="text/javascript"
        src="https://www.theseedcambodia.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tdPostImages.js?ver=12.6.2"
        id="tdPostImages-js"></script>
    <script type="text/javascript"
        src="https://www.theseedcambodia.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tdSocialSharing.js?ver=12.6.2"
        id="tdSocialSharing-js"></script>
    <script type="text/javascript"
        src="https://www.theseedcambodia.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tdModalPostImages.js?ver=12.6.2"
        id="tdModalPostImages-js"></script>
    <script type="text/javascript" src="https://www.theseedcambodia.com/wp-includes/js/comment-reply.min.js?ver=6.4.5"
        id="comment-reply-js" async="async" data-wp-strategy="async"></script>
    <script type="text/javascript"
        src="https://www.theseedcambodia.com/wp-content/plugins/td-cloud-library/assets/js/js_files_for_front.min.js?ver=34c58173fa732974ccb0ca4df5ede162"
        id="tdb_js_files_for_front-js"></script>
    <script type="text/javascript" id="bravepop_front_js-js-extra">
        /* <![CDATA[ */
        var bravepop_global = {
            "loggedin": "false",
            "isadmin": "false",
            "referer": "https:\/\/www.theseedcambodia.com\/%e1%9e%9f%e1%9f%81%e1%9e%8a%e1%9f%92%e1%9e%8b%e1%9e%80%e1%9e%b7%e1%9e%85%e1%9f%92%e1%9e%85\/",
            "security": "19589c2f23",
            "goalSecurity": "d016a183e2",
            "couponSecurity": "4ff8c6d218",
            "cartURL": "",
            "checkoutURL": "",
            "ajaxURL": "https:\/\/www.theseedcambodia.com\/wp-admin\/admin-ajax.php",
            "field_required": "Required",
            "no_html_allowed": "No Html Allowed",
            "invalid_number": "Invalid Number",
            "invalid_email": "Invalid Email",
            "invalid_url": "Invalid URL",
            "invalid_date": "Invalid Date",
            "fname_required": "First Name is Required.",
            "lname_required": "Last Name is Required.",
            "username_required": "Username is Required.",
            "email_required": "Email is Required.",
            "email_invalid": "Invalid Email addresss.",
            "pass_required": "Password is Required.",
            "pass_short": "Password is too Short.",
            "yes": "Yes",
            "no": "No",
            "login_error": "Something Went Wrong. Please contact the Site administrator.",
            "pass_reset_success": "Please check your Email for the Password reset link.",
            "customFonts": [],
            "disableGoogleFonts": "false"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.theseedcambodia.com/wp-content/plugins/brave-popup-builder/assets/frontend/brave.js?ver=6.4.5"
        id="bravepop_front_js-js"></script>
    <script>
    </script>


    <script type="text/javascript"
        src="https://www.theseedcambodia.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tdLoadingBox.js?ver=12.6.2"
        id="tdLoadingBox-js"></script>

    <script type="text/javascript"
        src="https://www.theseedcambodia.com/wp-content/plugins/td-cloud-library/assets/js/tdbMenu.js?ver=34c58173fa732974ccb0ca4df5ede162"
        id="tdbMenu-js"></script>

    <script type="text/javascript"
        src="https://www.theseedcambodia.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tdAjaxSearch.js?ver=12.6.2"
        id="tdDatei18n-js"></script>

    <script type="text/javascript"
        src="https://www.theseedcambodia.com/wp-content/plugins/td-cloud-library/assets/js/tdbSearch.js?ver=34c58173fa732974ccb0ca4df5ede162"
        id="tdbSearch-js"></script>

    <script type="text/javascript"
        src="https://www.theseedcambodia.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tdMenu.js?ver=12.6.2"
        id="tdMenu-js"></script>

    <script type="text/javascript"
        src="https://www.theseedcambodia.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tdInfiniteLoader.js?ver=12.6.2"
        id="tdInfiniteLoader-js"></script>

    <script type="text/javascript"
        src="https://www.theseedcambodia.com/wp-content/plugins/td-composer/legacy/Newspaper/js/tdSmartSidebar.js?ver=12.6.2"
        id="tdSmartSidebar-js"></script>
    <!-- JS generated by theme -->

    <script>
        /* global jQuery:{} */
        jQuery(document).ready(function() {

            var tdbMenuItem = new tdbMenu.item();
            tdbMenuItem.blockUid = 'tdi_1';
            tdbMenuItem.jqueryObj = jQuery('.tdi_1');


            tdbMenuItem.isMegaMenuFull = true;



            tdbMenuItem.megaMenuLoadType = '';


            tdbMenu.addItem(tdbMenuItem);

        });




        /* global jQuery:{} */
        jQuery(document).ready(function() {

            var tdbMenuItem = new tdbMenu.item();
            tdbMenuItem.blockUid = 'tdi_4';
            tdbMenuItem.jqueryObj = jQuery('.tdi_4');


            tdbMenuItem.isMegaMenuFull = true;



            tdbMenuItem.megaMenuLoadType = '';


            tdbMenu.addItem(tdbMenuItem);

        });




        jQuery().ready(function() {

            var tdbSearchItem = new tdbSearch.item();

            //block unique ID
            tdbSearchItem.blockUid = 'tdi_28';
            tdbSearchItem.blockAtts = '{"inline":"yes","form_align":"content-horiz-right","results_msg_align":"content-horiz-left","image_floated":"","image_width":"100","image_size":"td_485x360","show_cat":"","show_btn":"none","show_date":"none","show_review":"none","show_com":"none","show_excerpt":"","show_author":"none","all_modules_space":"20","icon_padding":"eyJhbGwiOjEuMSwicG9ydHJhaXQiOiIxIn0=","icon_color":"#000000","title_txt_hover":"#bb0000","btn_bg_h":"#222222","tdc_css":"eyJhbGwiOnsibWFyZ2luLWJvdHRvbSI6IjAiLCJib3JkZXItY29sb3IiOiJyZ2JhKDAsMCwwLDAuMTIpIiwiZGlzcGxheSI6IiJ9LCJwb3J0cmFpdCI6eyJkaXNwbGF5IjoiIn0sInBvcnRyYWl0X21heF93aWR0aCI6MTAxOCwicG9ydHJhaXRfbWluX3dpZHRoIjo3NjgsImxhbmRzY2FwZSI6eyJtYXJnaW4tcmlnaHQiOiItOCIsImRpc3BsYXkiOiIifSwibGFuZHNjYXBlX21heF93aWR0aCI6MTE0MCwibGFuZHNjYXBlX21pbl93aWR0aCI6MTAxOX0=","tdicon":"td-icon-magnifier-medium-short","show_form":"yes","input_shadow_shadow_color":"rgba(0,0,0,0.15)","f_input_font_family":"file_1","f_placeholder_font_family":"file_1","f_btn_font_family":"file_1","f_btn_font_transform":"","form_width":"eyJhbGwiOiI4ODAiLCJsYW5kc2NhcGUiOiI3NjAiLCJwb3J0cmFpdCI6IjYxMCJ9","input_border":"1px 0 1px 1px ","f_placeholder_font_transform":"","placeholder_opacity":"0.4","btn_icon_pos":"","results_msg_padding":"10px 25px 20px","mc1_tl":"20","results_limit":"3","modules_gap":"eyJhbGwiOiIyMCIsInBvcnRyYWl0IjoiMTAiLCJsYW5kc2NhcGUiOiIxMCJ9","image_height":"60","modules_category":"image","modules_category_padding":"eyJhbGwiOiI2cHggMTBweCIsInBvcnRyYWl0IjoiNHB4IDZweCIsImxhbmRzY2FwZSI6IjVweCA4cHgifQ==","f_results_msg_font_family":"file_1","f_results_msg_font_transform":"uppercase","f_results_msg_font_style":"normal","results_msg_color":"#bb0101","results_msg_color_h":"#141e29","f_title_font_family":"file_1","f_title_font_size":"eyJhbGwiOiIxNSIsInBvcnRyYWl0IjoiMTMiLCJwaG9uZSI6IjE4IiwibGFuZHNjYXBlIjoiMTcifQ==","f_title_font_weight":"400","f_title_font_line_height":"1.4","all_underline_color":"#bb0000","f_cat_font_weight":"400","f_cat_font_transform":"uppercase","cat_bg":"#bb0000","cat_bg_hover":"#bb0000","f_input_font_size":"eyJhbGwiOiIxNCIsInBvcnRyYWl0IjoiMTIifQ==","f_input_font_transform":"","f_placeholder_font_size":"eyJhbGwiOiIxNCIsInBvcnRyYWl0IjoiMTIifQ==","f_results_msg_font_size":"eyJhbGwiOiIxMiIsInBvcnRyYWl0IjoiMTEifQ==","form_shadow_shadow_size":"20","form_shadow_shadow_color":"rgba(22,35,58,0.1)","form_border":"0","cat_txt":"#ffffff","cat_txt_hover":"#ffffff","icon_size":"eyJhbGwiOiIyMCIsInBvcnRyYWl0IjoiMTYifQ==","icon_color_h":"#bb0000","modules_on_row":"33.33333333%","meta_padding":"eyJhbGwiOiIyMHB4IDVweCAwIDAiLCJsYW5kc2NhcGUiOiIyNXB4IDEwcHggMCAwIiwicG9ydHJhaXQiOiIxNXB4IDAgMCAwIn0=","art_title":"eyJwb3J0cmFpdCI6IjEwcHggMCJ9","art_excerpt":"eyJhbGwiOiIxNXB4IDAgMCAwIiwicG9ydHJhaXQiOiI4cHggMCAwIDAifQ==","f_btn_font_weight":"500","arrow_color":"#ffffff","form_shadow_shadow_offset_vertical":"4","input_color":"#000000","placeholder_color":"#555555","f_cat_font_family":"file_1","f_cat_font_size":"eyJhbGwiOiIxMSIsInBvcnRyYWl0IjoiMTAifQ==","image_alignment":"30","title_txt":"#000000","form_padding":"eyJhbGwiOiIyNXB4IiwicG9ydHJhaXQiOiIxNSJ9","results_padding":"eyJhbGwiOiIyMHB4IDI1cHggMTVweCIsInBvcnRyYWl0IjoiMCAxNXB4IDE1cHgifQ==","input_border_color":"rgba(211,219,226,0.7)","input_padding":"eyJhbGwiOiIxMHB4IDIwcHgiLCJwb3J0cmFpdCI6IjJweCA0cHgiLCJsYW5kc2NhcGUiOiI0cHggNnB4In0=","btn_padding":"eyJhbGwiOiI0cHggMjJweCA1cHgiLCJwb3J0cmFpdCI6IjJweCAxMnB4IDNweCIsImxhbmRzY2FwZSI6IjRweCAxNHB4IDVweCJ9","toggle_txt":"\u179f\u17d2\u179c\u17c2\u1784\u179a\u1780","toggle_txt_space":"eyJhbGwiOiIxMCIsInBvcnRyYWl0IjoiNSIsImxhbmRzY2FwZSI6IjYifQ==","f_toggle_txt_font_family":"file_1","f_toggle_txt_font_weight":"400","f_toggle_txt_font_size":"eyJhbGwiOiIxNSIsInBvcnRyYWl0IjoiMTQiLCJsYW5kc2NhcGUiOiIxMyJ9","toggle_txt_color":"#000000","toggle_txt_color_h":"#bb0000","author_photo_size":"26","f_input_font_weight":"500","f_placeholder_font_weight":"500","btn_text":"\u179a\u1780\u17a2\u178f\u17d2\u1790\u1794\u1791","f_results_msg_font_weight":"500","f_meta_font_family":"file_1","f_meta_font_transform":"uppercase","f_meta_font_size":"12","f_ex_font_family":"file_1","f_ex_font_size":"eyJhbGwiOiIxNSIsInBvcnRyYWl0IjoiMTEiLCJsYW5kc2NhcGUiOiIxMyJ9","f_ex_font_line_height":"1.6","mc1_el":"0","f_meta_font_weight":"700","date_txt":"#555555","ex_txt":"#555555","btn_bg":"#bb0000","toggle_horiz_align":"content-horiz-left","float_block":"yes","f_toggle_txt_font_line_height":"eyJhbGwiOiI4MHB4IiwicG9ydHJhaXQiOiI2MHB4IiwibGFuZHNjYXBlIjoiNzBweCJ9","f_title_font_transform":"","all_underline_height":"eyJwb3J0cmFpdCI6IjIifQ==","modules_category_margin":"8px ","f_meta_font_spacing":"0.5","f_ex_font_weight":"400","f_btn_font_size":"eyJwb3J0cmFpdCI6IjExIiwibGFuZHNjYXBlIjoiMTMifQ==","mc1_title_tag":"h4","f_vid_time_font_weight":"400","modules_category_radius":"12","btn_radius":"25","input_radius":"25","block_type":"tdb_header_search","post_type":"","disable_trigger":"","show_results":"yes","separator":"","disable_live_search":"","exclude_pages":"","exclude_posts":"","search_section_header":"","results_section_1_title":"","results_section_1_taxonomies":"","results_section_1_level":"","results_section_2_title":"","results_section_2_taxonomies":"","results_section_2_level":"","results_section_3_title":"","results_section_3_taxonomies":"","results_section_3_level":"","results_section_search_query_terms":"","results_section_search_query_terms_title":"","results_section_search_query_terms_taxonomies":"","sec_title_space":"","sec_title_color":"","tax_space":"","tax_title_color":"","tax_title_color_h":"","f_sec_title_font_header":"","f_sec_title_font_title":"Section title text","f_sec_title_font_settings":"","f_sec_title_font_family":"","f_sec_title_font_size":"","f_sec_title_font_line_height":"","f_sec_title_font_style":"","f_sec_title_font_weight":"","f_sec_title_font_transform":"","f_sec_title_font_spacing":"","f_sec_title_":"","f_tax_title_font_title":"Taxonomy title text","f_tax_title_font_settings":"","f_tax_title_font_family":"","f_tax_title_font_size":"","f_tax_title_font_line_height":"","f_tax_title_font_style":"","f_tax_title_font_weight":"","f_tax_title_font_transform":"","f_tax_title_font_spacing":"","f_tax_title_":"","toggle_txt_pos":"","toggle_txt_align":"0","form_offset":"","form_offset_left":"","form_content_width":"","form_align_screen":"","input_placeholder":"","placeholder_travel":"0","btn_tdicon":"","btn_icon_size":"","btn_icon_space":"","btn_icon_align":"0","btn_margin":"","btn_border":"","results_border":"","results_msg_border":"","open_in_new_window":"","m_padding":"","modules_border_size":"","modules_border_style":"","modules_border_color":"#eaeaea","modules_divider":"","modules_divider_color":"#eaeaea","h_effect":"","image_radius":"","hide_image":"","video_icon":"","show_vid_t":"block","vid_t_margin":"","vid_t_padding":"","vid_t_color":"","vid_t_bg_color":"","f_vid_time_font_header":"","f_vid_time_font_title":"Video duration text","f_vid_time_font_settings":"","f_vid_time_font_family":"","f_vid_time_font_size":"","f_vid_time_font_line_height":"","f_vid_time_font_style":"","f_vid_time_font_transform":"","f_vid_time_font_spacing":"","f_vid_time_":"","meta_info_align":"","meta_info_horiz":"content-horiz-left","meta_width":"","meta_margin":"","meta_info_border_size":"","meta_info_border_style":"","meta_info_border_color":"#eaeaea","art_btn":"","modules_cat_border":"","modules_extra_cat":"","author_photo":"","author_photo_space":"","author_photo_radius":"","show_modified_date":"","time_ago":"","time_ago_add_txt":"ago","time_ago_txt_pos":"","review_space":"","review_size":"2.5","review_distance":"","excerpt_col":"1","excerpt_gap":"","excerpt_middle":"","btn_title":"","btn_border_width":"","form_general_bg":"","f_toggle_txt_font_header":"","f_toggle_txt_font_title":"Text","f_toggle_txt_font_settings":"","f_toggle_txt_font_style":"","f_toggle_txt_font_transform":"","f_toggle_txt_font_spacing":"","f_toggle_txt_":"","form_bg":"","form_border_color":"","form_shadow_shadow_header":"","form_shadow_shadow_title":"Shadow","form_shadow_shadow_offset_horizontal":"","form_shadow_shadow_spread":"","input_bg":"","input_shadow_shadow_header":"","input_shadow_shadow_title":"Input shadow","input_shadow_shadow_size":"","input_shadow_shadow_offset_horizontal":"","input_shadow_shadow_offset_vertical":"","input_shadow_shadow_spread":"","btn_color":"","btn_color_h":"","btn_icon_color":"","btn_icon_color_h":"","btn_border_color":"","btn_border_color_h":"","btn_shadow_shadow_header":"","btn_shadow_shadow_title":"Button shadow","btn_shadow_shadow_size":"","btn_shadow_shadow_offset_horizontal":"","btn_shadow_shadow_offset_vertical":"","btn_shadow_shadow_spread":"","btn_shadow_shadow_color":"","f_input_font_header":"","f_input_font_title":"Input text","f_input_font_settings":"","f_input_font_line_height":"","f_input_font_style":"","f_input_font_spacing":"","f_input_":"","f_placeholder_font_title":"Placeholder text","f_placeholder_font_settings":"","f_placeholder_font_line_height":"","f_placeholder_font_style":"","f_placeholder_font_spacing":"","f_placeholder_":"","f_btn_font_title":"Button text","f_btn_font_settings":"","f_btn_font_line_height":"","f_btn_font_style":"","f_btn_font_spacing":"","f_btn_":"","results_bg":"","results_border_color":"","results_msg_bg":"","results_msg_border_color":"","f_results_msg_font_header":"","f_results_msg_font_title":"Text","f_results_msg_font_settings":"","f_results_msg_font_line_height":"","f_results_msg_font_spacing":"","f_results_msg_":"","m_bg":"","color_overlay":"","shadow_module_shadow_header":"","shadow_module_shadow_title":"Module Shadow","shadow_module_shadow_size":"","shadow_module_shadow_offset_horizontal":"","shadow_module_shadow_offset_vertical":"","shadow_module_shadow_spread":"","shadow_module_shadow_color":"","cat_border":"","cat_border_hover":"","meta_bg":"","author_txt":"","author_txt_hover":"","com_bg":"","com_txt":"","rev_txt":"","shadow_meta_shadow_header":"","shadow_meta_shadow_title":"Meta info shadow","shadow_meta_shadow_size":"","shadow_meta_shadow_offset_horizontal":"","shadow_meta_shadow_offset_vertical":"","shadow_meta_shadow_spread":"","shadow_meta_shadow_color":"","btn_bg_hover":"","btn_txt":"","btn_txt_hover":"","btn_border_hover":"","f_title_font_header":"","f_title_font_title":"Article title","f_title_font_settings":"","f_title_font_style":"","f_title_font_spacing":"","f_title_":"","f_cat_font_title":"Article category tag","f_cat_font_settings":"","f_cat_font_line_height":"","f_cat_font_style":"","f_cat_font_spacing":"","f_cat_":"","f_meta_font_title":"Article meta info","f_meta_font_settings":"","f_meta_font_line_height":"","f_meta_font_style":"","f_meta_":"","f_ex_font_title":"Article excerpt","f_ex_font_settings":"","f_ex_font_style":"","f_ex_font_transform":"","f_ex_font_spacing":"","f_ex_":"","el_class":"","block_template_id":"","td_column_number":1,"header_color":"","ajax_pagination_infinite_stop":"","offset":"","limit":"5","td_ajax_preloading":"","td_ajax_filter_type":"","td_filter_default_txt":"","td_ajax_filter_ids":"","color_preset":"","ajax_pagination":"","ajax_pagination_next_prev_swipe":"","border_top":"","css":"","class":"tdi_28","tdc_css_class":"tdi_28","tdc_css_class_style":"tdi_28_rand_style"}';
            tdbSearchItem.jqueryObj = jQuery('.tdi_28');
            tdbSearchItem._openSearchFormClass = 'tdb-drop-down-search-open';
            tdbSearchItem._resultsLimit = '3';




            tdbSearch.addItem(tdbSearchItem);

        });




        /* global jQuery:{} */
        jQuery(document).ready(function() {

            var tdbMenuItem = new tdbMenu.item();
            tdbMenuItem.blockUid = 'tdi_29';
            tdbMenuItem.jqueryObj = jQuery('.tdi_29');


            tdbMenuItem.isMegaMenuFull = true;



            tdbMenuItem.megaMenuLoadType = '';


            tdbMenu.addItem(tdbMenuItem);

        });
    </script>


    <script>
        var td_res_context_registered_atts = ["style_general_mobile_menu", "style_general_header_align", "style_general_header_logo", "style_general_mobile_search", "style_general_module_header", "style_general_header_search", "style_general_header_search_trigger_enabled", "style_general_header_menu", "style_general_bgf", "style_general_bgf_1_specific", "style_general_single_title", "style_bg_space", "style_general_socials", "style_general_list_menu", "style_specific_list_menu_vertical", "style_specific_list_menu_accordion", "style_specific_list_menu_horizontal", "style_general_text_with_title", "style_general_button", "style_general_inline_text", "style_general_icon"];
    </script>