<?php
require_once '../connection/db.php';
require_once '../config/config.php';

$title = "ចង់ដឹងពីយើង ";
ob_start();
?>
<div class="tdc_zone tdi_33  wpb_row td-pb-row">
    <style scoped="">
        .tdi_33 {
            min-height: 0
        }
    </style>
    <div id="tdi_34" class="tdc-row stretch_row_1200 td-stretch-content">
        <div class="vc_row tdi_35  wpb_row td-pb-row tdc-row-content-vert-center">
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

                @media (min-width:767px) {

                    .tdi_35.tdc-row-content-vert-center,
                    .tdi_35.tdc-row-content-vert-center .tdc-columns {
                        display: flex;
                        align-items: center;
                        flex: 1
                    }

                    .tdi_35.tdc-row-content-vert-bottom,
                    .tdi_35.tdc-row-content-vert-bottom .tdc-columns {
                        display: flex;
                        align-items: flex-end;
                        flex: 1
                    }

                    .tdi_35.tdc-row-content-vert-center .td_block_wrap {
                        vertical-align: middle
                    }

                    .tdi_35.tdc-row-content-vert-bottom .td_block_wrap {
                        vertical-align: bottom
                    }
                }

                .tdi_35 {
                    padding-top: 60px !important;
                    padding-right: 0px !important;
                    padding-bottom: 40px !important;
                    padding-left: 0px !important
                }

                .tdi_35 .td_block_wrap {
                    text-align: left
                }

                @media (max-width:767px) {
                    .tdi_35 {
                        padding-top: 20px !important
                    }
                }
            </style>
            <div class="vc_column tdi_37  wpb_column vc_column_container tdc-column td-pb-span6">
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
                <div class="wpb_wrapper">
                    <div class="wpb_wrapper td_block_single_image td_block_wrap  td-animation-stack td_block_wrap vc_single_image tdi_38  td-single-image- td-pb-border-top td_block_template_8 "
                        data-td-block-uid="tdi_38"><span
                            class="td_single_image_bg td-lazy-img td-animation-stack-type1-2"
                            data-type="css_image"
                            data-img-url="https://www.theseedcambodia.com/wp-content/uploads/2021/09/artwork-1-07.png"
                            style="background-image: url(&quot;https://www.theseedcambodia.com/wp-content/uploads/2021/09/artwork-1-07.png&quot;)"></span>
                        <style>
                            .tdi_38 {
                                margin-bottom: 1px !important
                            }

                            @media (max-width:767px) {
                                .tdi_38 {
                                    margin-bottom: 25px !important
                                }
                            }

                            @media (min-width:768px) and (max-width:1018px) {
                                .tdi_38 {
                                    margin-bottom: 0px !important
                                }
                            }
                        </style>
                        <style>
                            .td_block_single_image.td-image-video-modal {
                                cursor: pointer
                            }

                            .td_block_single_image .td_single_image_bg {
                                display: block
                            }

                            .td_block_single_image.td-no-img-custom-url .td_single_image_bg {
                                pointer-events: none;
                                cursor: default
                            }

                            .vc_single_image a {
                                position: relative
                            }

                            .td-single-image-style-rounded .td_single_image_bg,
                            .td-single-image-style-rounded .td_single_image_bg:before,
                            .td-single-image-style-rounded .td_single_image_bg:after {
                                border-radius: 4px
                            }

                            .td-single-image-style-border,
                            .td-single-image-style-round-border,
                            .td-single-image-style-circle-border,
                            .td-single-image-style-outline,
                            .td-single-image-style-bordered-shadow,
                            .td-single-image-style-round-outline,
                            .td-single-image-style-round-border-shadow,
                            .td-single-image-style-circle-outline,
                            .td-single-image-style-circle-border-shadow {
                                margin-bottom: 22px;
                                background-color: #EBEBEB
                            }

                            .td-single-image-style-border,
                            .td-single-image-style-round-border,
                            .td-single-image-style-circle-border {
                                padding: 6px
                            }

                            .td-single-image-style-outline,
                            .td-single-image-style-bordered-shadow,
                            .td-single-image-style-round-outline,
                            .td-single-image-style-round-border-shadow,
                            .td-single-image-style-circle-outline,
                            .td-single-image-style-circle-border-shadow {
                                padding: 1px
                            }

                            .td-single-image-style-outline .td_single_image_bg:before,
                            .td-single-image-style-bordered-shadow .td_single_image_bg:before,
                            .td-single-image-style-round-outline .td_single_image_bg:before,
                            .td-single-image-style-round-border-shadow .td_single_image_bg:before,
                            .td-single-image-style-circle-outline .td_single_image_bg:before,
                            .td-single-image-style-circle-border-shadow .td_single_image_bg:before,
                            .td-single-image-style-outline a:after,
                            .td-single-image-style-bordered-shadow .td_single_image_bg:after,
                            .td-single-image-style-round-outline .td_single_image_bg:after,
                            .td-single-image-style-round-border-shadow .td_single_image_bg:after,
                            .td-single-image-style-circle-outline .td_single_image_bg:after,
                            .td-single-image-style-circle-border-shadow .td_single_image_bg:after {
                                content: '';
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%
                            }

                            .td-single-image-style-outline .td_single_image_bg:after,
                            .td-single-image-style-bordered-shadow .td_single_image_bg:after,
                            .td-single-image-style-round-outline .td_single_image_bg:after,
                            .td-single-image-style-round-border-shadow .td_single_image_bg:after,
                            .td-single-image-style-circle-outline .td_single_image_bg:after,
                            .td-single-image-style-circle-border-shadow .td_single_image_bg:after {
                                color: #fff;
                                -webkit-box-shadow: inset 0px 0px 0px 6px;
                                box-shadow: inset 0px 0px 0px 6px
                            }

                            .td-single-image-style-outline .td_single_image_bg:before,
                            .td-single-image-style-bordered-shadow .td_single_image_bg:before,
                            .td-single-image-style-round-outline .td_single_image_bg:before,
                            .td-single-image-style-round-border-shadow .td_single_image_bg:before,
                            .td-single-image-style-circle-outline .td_single_image_bg:before,
                            .td-single-image-style-circle-border-shadow .td_single_image_bg:before {
                                color: #EBEBEB;
                                -webkit-box-shadow: inset 0px 0px 0px 7px;
                                box-shadow: inset 0px 0px 0px 7px
                            }

                            .td-single-image-style-shadow .td_single_image_bg,
                            .td-single-image-style-bordered-shadow .td_single_image_bg,
                            .td-single-image-style-round-shadow .td_single_image_bg,
                            .td-single-image-style-round-border-shadow .td_single_image_bg,
                            .td-single-image-style-circle-shadow .td_single_image_bg,
                            .td-single-image-style-circle-border-shadow .td_single_image_bg {
                                -webkit-box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
                                box-shadow: 0 0 6px rgba(0, 0, 0, 0.1)
                            }

                            .td-single-image-style-3d-shadow {
                                position: relative
                            }

                            .td-single-image-style-3d-shadow:before,
                            .td-single-image-style-3d-shadow:after {
                                content: '';
                                position: absolute;
                                bottom: 0;
                                height: 30%;
                                -webkit-box-shadow: 0 15px 10px rgba(0, 0, 0, 0.6);
                                box-shadow: 0 15px 10px rgba(0, 0, 0, 0.6);
                                z-index: 0
                            }

                            .td-single-image-style-3d-shadow:before {
                                left: 5px;
                                right: 50%;
                                -webkit-transform: skewY(-6deg);
                                transform: skewY(-6deg);
                                -webkit-transform-origin: 0 0;
                                transform-origin: 0 0
                            }

                            .td-single-image-style-3d-shadow:after {
                                left: 50%;
                                right: 5px;
                                -webkit-transform: skewY(6deg);
                                transform: skewY(6deg);
                                -webkit-transform-origin: 100% 0;
                                transform-origin: 100% 0
                            }

                            .td-single-image-style-3d-shadow .td_single_image_bg {
                                z-index: 1
                            }

                            .td-single-image-style-round,
                            .td-single-image-style-round-border,
                            .td-single-image-style-round-outline,
                            .td-single-image-style-round-shadow,
                            .td-single-image-style-round-border-shadow,
                            .td-single-image-style-circle,
                            .td-single-image-style-circle-border,
                            .td-single-image-style-circle-outline,
                            .td-single-image-style-circle-shadow,
                            .td-single-image-style-circle-border-shadow {
                                border-radius: 50%
                            }

                            .td-single-image-style-round .td_single_image_bg,
                            .td-single-image-style-round-border .td_single_image_bg,
                            .td-single-image-style-round-outline .td_single_image_bg,
                            .td-single-image-style-round-shadow .td_single_image_bg,
                            .td-single-image-style-round-border-shadow .td_single_image_bg,
                            .td-single-image-style-circle .td_single_image_bg,
                            .td-single-image-style-circle-border .td_single_image_bg,
                            .td-single-image-style-circle-outline .td_single_image_bg,
                            .td-single-image-style-circle-shadow .td_single_image_bg,
                            .td-single-image-style-circle-border-shadow .td_single_image_bg,
                            .td-single-image-style-round .td_single_image_bg:before,
                            .td-single-image-style-round-border .td_single_image_bg:before,
                            .td-single-image-style-round-outline .td_single_image_bg:before,
                            .td-single-image-style-round-shadow .td_single_image_bg:before,
                            .td-single-image-style-round-border-shadow .td_single_image_bg:before,
                            .td-single-image-style-circle .td_single_image_bg:before,
                            .td-single-image-style-circle-border .td_single_image_bg:before,
                            .td-single-image-style-circle-outline .td_single_image_bg:before,
                            .td-single-image-style-circle-shadow .td_single_image_bg:before,
                            .td-single-image-style-circle-border-shadow .td_single_image_bg:before,
                            .td-single-image-style-round .td_single_image_bg:after,
                            .td-single-image-style-round-border .td_single_image_bg:after,
                            .td-single-image-style-round-outline .td_single_image_bg:after,
                            .td-single-image-style-round-shadow .td_single_image_bg:after,
                            .td-single-image-style-round-border-shadow .td_single_image_bg:after,
                            .td-single-image-style-circle .td_single_image_bg:after,
                            .td-single-image-style-circle-border .td_single_image_bg:after,
                            .td-single-image-style-circle-outline .td_single_image_bg:after,
                            .td-single-image-style-circle-shadow .td_single_image_bg:after,
                            .td-single-image-style-circle-border-shadow .td_single_image_bg:after {
                                border-radius: 50%
                            }

                            .td-single-image-style-round-outline .td_single_image_bg:before,
                            .td-single-image-style-round-border-shadow .td_single_image_bg:before,
                            .td-single-image-style-circle-outline .td_single_image_bg:before,
                            .td-single-image-style-circle-border-shadow .td_single_image_bg:before,
                            .td-single-image-style-round-outline .td_single_image_bg:before:before,
                            .td-single-image-style-round-border-shadow .td_single_image_bg:before:before,
                            .td-single-image-style-circle-outline .td_single_image_bg:before:before,
                            .td-single-image-style-circle-border-shadow .td_single_image_bg:before:before,
                            .td-single-image-style-round-outline .td_single_image_bg:after:before,
                            .td-single-image-style-round-border-shadow .td_single_image_bg:after:before,
                            .td-single-image-style-circle-outline .td_single_image_bg:after:before,
                            .td-single-image-style-circle-border-shadow .td_single_image_bg:after:before,
                            .td-single-image-style-round-outline .td_single_image_bg:after,
                            .td-single-image-style-round-border-shadow .td_single_image_bg:after,
                            .td-single-image-style-circle-outline .td_single_image_bg:after,
                            .td-single-image-style-circle-border-shadow .td_single_image_bg:after,
                            .td-single-image-style-round-outline .td_single_image_bg:before:after,
                            .td-single-image-style-round-border-shadow .td_single_image_bg:before:after,
                            .td-single-image-style-circle-outline .td_single_image_bg:before:after,
                            .td-single-image-style-circle-border-shadow .td_single_image_bg:before:after,
                            .td-single-image-style-round-outline .td_single_image_bg:after:after,
                            .td-single-image-style-round-border-shadow .td_single_image_bg:after:after,
                            .td-single-image-style-circle-outline .td_single_image_bg:after:after,
                            .td-single-image-style-circle-border-shadow .td_single_image_bg:after:after {
                                border-radius: 50%
                            }

                            .td-single-image-style-circle .td_single_image_bg,
                            .td-single-image-style-circle-border .td_single_image_bg,
                            .td-single-image-style-circle-outline .td_single_image_bg,
                            .td-single-image-style-circle-shadow .td_single_image_bg,
                            .td-single-image-style-circle-border-shadow .td_single_image_bg {
                                height: 0;
                                padding-bottom: 100%
                            }

                            .vc_single_image .td_single_image_bg {
                                width: 100%;
                                display: block;
                                background-size: cover
                            }

                            .tdi_38 .td_single_image_bg {
                                height: 400px;
                                padding-bottom: 0;
                                background-size: 100% auto;
                                background-repeat: no-repeat;
                                background-position: center bottom
                            }

                            .tdi_38:hover .td_single_image_bg:before {
                                opacity: 0
                            }

                            @media (max-width:767px) {
                                .td-stretch-content .td_block_single_image {
                                    margin-right: -20px;
                                    margin-left: -20px
                                }
                            }

                            @media (max-width:767px) {

                                .td-single-image-style-border,
                                .td-single-image-style-round-border,
                                .td-single-image-style-circle-border,
                                .td-single-image-style-outline,
                                .td-single-image-style-bordered-shadow,
                                .td-single-image-style-round-outline,
                                .td-single-image-style-round-border-shadow,
                                .td-single-image-style-circle-outline,
                                .td-single-image-style-circle-border-shadow {
                                    margin-bottom: 32px
                                }
                            }

                            @media (min-width:768px) and (max-width:1018px) {
                                .tdi_38 .td_single_image_bg {
                                    height: 265px;
                                    padding-bottom: 0
                                }
                            }

                            @media (max-width:767px) {
                                .tdi_38 .td_single_image_bg {
                                    height: 250px;
                                    padding-bottom: 0
                                }
                            }
                        </style>
                    </div>
                </div>
            </div>
            <div class="vc_column tdi_40  wpb_column vc_column_container tdc-column td-pb-span6">
                <style scoped="">
                    .tdi_40 {
                        vertical-align: baseline
                    }

                    .tdi_40>.wpb_wrapper,
                    .tdi_40>.wpb_wrapper>.tdc-elements {
                        display: block
                    }

                    .tdi_40>.wpb_wrapper>.tdc-elements {
                        width: 100%
                    }

                    .tdi_40>.wpb_wrapper>.vc_row_inner {
                        width: auto
                    }

                    .tdi_40>.wpb_wrapper {
                        width: auto;
                        height: auto
                    }
                </style>
                <div class="wpb_wrapper">
                    <div class="td_block_wrap td_block_title tdi_41 td-pb-border-top td_block_template_2 td-fix-index"
                        data-td-block-uid="tdi_41">
                        <style>
                            .td-theme-wrap .tdi_41 .td-block-title>*,
                            .td-theme-wrap .tdi_41 .td-pulldown-filter-link:hover,
                            .td-theme-wrap .tdi_41 .td-subcat-item a:hover,
                            .td-theme-wrap .tdi_41 .td-subcat-item .td-cur-simple-item,
                            .td-theme-wrap .tdi_41 .td-subcat-dropdown:hover .td-subcat-more span,
                            .td-theme-wrap .tdi_41 .td-subcat-dropdown:hover .td-subcat-more i {
                                color: #bb0101
                            }

                            .td-theme-wrap .tdi_41 .td-subcat-dropdown ul:after {
                                background-color: #bb0101
                            }

                            .td-theme-wrap .tdi_41 .td_module_wrap:hover .entry-title a,
                            .td-theme-wrap .tdi_41 .td_quote_on_blocks,
                            .td-theme-wrap .tdi_41 .td-opacity-cat .td-post-category:hover,
                            .td-theme-wrap .tdi_41 .td-opacity-read .td-read-more a:hover,
                            .td-theme-wrap .tdi_41 .td-opacity-author .td-post-author-name a:hover,
                            .td-theme-wrap .tdi_41 .td-instagram-user a {
                                color: #bb0101
                            }

                            .td-theme-wrap .tdi_41 .td-next-prev-wrap a:hover,
                            .td-theme-wrap .tdi_41 .td-load-more-wrap a:hover {
                                background-color: #bb0101;
                                border-color: #bb0101
                            }

                            .td-theme-wrap .tdi_41 .td-read-more a,
                            .td-theme-wrap .tdi_41 .td-weather-information:before,
                            .td-theme-wrap .tdi_41 .td-weather-week:before,
                            .td-theme-wrap .tdi_41 .td-exchange-header:before,
                            .td-theme-wrap .td-footer-wrapper .tdi_41 .td-post-category,
                            .td-theme-wrap .tdi_41 .td-post-category:hover {
                                background-color: #bb0101
                            }

                            .tdi_41 {
                                margin-bottom: 0px !important
                            }
                        </style>
                        <style>
                            body .tdi_41 .td-block-title a,
                            body .tdi_41 .td-block-title span {
                                font-size: 35px !important;
                                line-height: 1.6 !important;
                                font-weight: 600 !important
                            }

                            body .tdi_41 .td-block-title {
                                text-align: left
                            }

                            body .tdi_41.td_block_template_4 .td-block-title>*:before {
                                right: auto;
                                left: 10px
                            }

                            body .tdi_41.td_block_template_5 .td-block-title>* {
                                border-width: 0 0 0 4px
                            }

                            body .tdi_41.td_block_template_8 .td-block-title>* {
                                padding-left: 0;
                                padding-right: 20px
                            }

                            body .tdi_41.td_block_template_9 .td-block-title:after {
                                right: auto;
                                left: 0
                            }

                            body .tdi_41.td_block_template_13 .td-block-subtitle {
                                right: auto;
                                left: -4px
                            }

                            body .tdi_41.td_block_template_17 .td-block-title:after {
                                right: auto;
                                left: 15px
                            }

                            @media (min-width:768px) and (max-width:1018px) {

                                body .tdi_41 .td-block-title a,
                                body .tdi_41 .td-block-title span {
                                    font-size: 33px !important
                                }
                            }

                            @media (max-width:767px) {

                                body .tdi_41 .td-block-title a,
                                body .tdi_41 .td-block-title span {
                                    font-size: 25px !important
                                }
                            }
                        </style>
                        <div class="td-block-title-wrap">
                            <h4 class="td-block-title"><span class="td-pulldown-size">The TRUTH
                                    ជាអ្វី?</span></h4>
                        </div>
                    </div>
                    <div class="wpb_wrapper wpb_text_column td_block_wrap td_block_wrap vc_column_text tdi_42  tagdiv-type td-pb-border-top td_block_template_8"
                        data-td-block-uid="tdi_42">
                        <style>
                            @media (max-width:767px) {
                                .tdi_42 {
                                    margin-bottom: 50px !important
                                }
                            }
                        </style>
                        <style>
                            .tdi_42,
                            .tdi_42 p {
                                font-size: 17px !important
                            }

                            @media (max-width:767px) {

                                .tdi_42,
                                .tdi_42 p {
                                    font-size: 15px !important
                                }
                            }
                        </style>
                        <div class="td-block-title-wrap"></div>
                        <div class="td-fix-index">
                            <p>​T​h​e​ TRUTH ​មិនមែន​ធ្វើការ​លើ​សារ​ព័ត៌មាន​
                                ​និង​បម្រើ​មនោគម​ន៍​វិជ្ជា​ណាមួយ​ឡើយ​។​ ​T​h​e​ TRUTH
                                ​គឺជា​ក្រុម​ដែល​ធ្វើ​កិច្ច​វិភាគ​លើ​ព្រឹត្តិការណ៍​ពិភពលោក​
                                ​និង​ជា​ថង់​ប្រាជ្ញា​សម្រាប់​សាធារណៈ​ជន​ដកស្រង់​ចំណេះ​ដឹង​និង​តាមដាន​ព្រឹត្តិ​កា​ណ៍​ពិភពលោក​។​
                                ​រាល់​ស្នាដៃ​វិភាគ​ ​និង​ការ​ចែករំលែក​ចំណេះ​ដឹង​ទាំងឡាយ​
                                ​គឺ​ក្រុម​ការងារ​ធ្វើឡើង​ដោយ​ជំនាញ​
                                ​ដោយ​ផ្អែកលើ​អំណះអំណាង​ច្បាស់លាស់​។</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tdi_43" class="tdc-row stretch_row_1200 td-stretch-content">
        <div class="vc_row tdi_44  wpb_row td-pb-row">
            <style scoped="">
                .tdi_44,
                .tdi_44 .tdc-columns {
                    min-height: 0
                }

                .tdi_44,
                .tdi_44 .tdc-columns {
                    display: block
                }

                .tdi_44 .tdc-columns {
                    width: 100%
                }
            </style>
            <div class="vc_column tdi_46  wpb_column vc_column_container tdc-column td-pb-span12">
                <style scoped="">
                    .tdi_46 {
                        vertical-align: baseline
                    }

                    .tdi_46>.wpb_wrapper,
                    .tdi_46>.wpb_wrapper>.tdc-elements {
                        display: block
                    }

                    .tdi_46>.wpb_wrapper>.tdc-elements {
                        width: 100%
                    }

                    .tdi_46>.wpb_wrapper>.vc_row_inner {
                        width: auto
                    }

                    .tdi_46>.wpb_wrapper {
                        width: auto;
                        height: auto
                    }
                </style>
                <div class="wpb_wrapper">
                    <div class="wpb_wrapper wpb_text_column td_block_wrap td_block_wrap vc_column_text tdi_47  tagdiv-type td-pb-border-top td_block_template_8"
                        data-td-block-uid="tdi_47">
                        <style>
                            .tdi_47 {
                                margin-bottom: 0px !important
                            }

                            @media (max-width:767px) {
                                .tdi_47 {
                                    margin-bottom: 50px !important
                                }
                            }
                        </style>
                        <style>
                            .tdi_47,
                            .tdi_47 p {
                                font-size: 16px !important
                            }

                            @media (max-width:767px) {

                                .tdi_47,
                                .tdi_47 p {
                                    font-size: 15px !important
                                }
                            }
                        </style>
                        <div class="td-block-title-wrap"></div>
                        <div class="td-fix-index"><div class="container">
    <div class="row row-counter">
        <div class="four col-md-3 col-sm-6 col-xs-6">
            <div class="counter-box"> <span class="counter count-number">363</span>
                <p class="count-label">ចំនួនអត្ថបទ</p>
            </div>
        </div>
        <div class="four col-md-3 col-sm-6 col-xs-6">
            <div class="counter-box"> <span class="counter count-number">26</span>
                <p class="count-label">ចំនួនសមាជិក</p>
            </div>
        </div>
        <div class="four col-md-3 col-sm-6 col-xs-6">
            <div class="counter-box"> <span class="counter count-number">1722</span>
                <p class="count-label">ចំនួនថ្ងៃបង្កើត</p>
            </div>
        </div>
        <div class="four col-md-3 col-sm-6 col-xs-6">
            <div class="counter-box"> <div class="avc_visit_counter_front" style="background-color: #transparent;font-size: 22px;font-weight: normal; width: 100%; max-width:100px; margin: 0 auto;">1</div>               <p class="count-label">ចំនួនអ្នកទស្សនា</p>
            </div>
        </div>
    </div>
</div>


</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tdi_48" class="tdc-row stretch_row_1200 td-stretch-content">
        <div class="vc_row tdi_49  wpb_row td-pb-row tdc-row-content-vert-center">
            <style scoped="">
                .tdi_49,
                .tdi_49 .tdc-columns {
                    min-height: 0
                }

                .tdi_49,
                .tdi_49 .tdc-columns {
                    display: block
                }

                .tdi_49 .tdc-columns {
                    width: 100%
                }

                @media (min-width:767px) {

                    .tdi_49.tdc-row-content-vert-center,
                    .tdi_49.tdc-row-content-vert-center .tdc-columns {
                        display: flex;
                        align-items: center;
                        flex: 1
                    }

                    .tdi_49.tdc-row-content-vert-bottom,
                    .tdi_49.tdc-row-content-vert-bottom .tdc-columns {
                        display: flex;
                        align-items: flex-end;
                        flex: 1
                    }

                    .tdi_49.tdc-row-content-vert-center .td_block_wrap {
                        vertical-align: middle
                    }

                    .tdi_49.tdc-row-content-vert-bottom .td_block_wrap {
                        vertical-align: bottom
                    }
                }

                @media (max-width:767px) {

                    .tdi_49,
                    .tdi_49 .tdc-columns {
                        display: flex
                    }

                    .tdi_49 .tdc-columns {
                        width: 100%
                    }

                    .tdi_49,
                    .tdi_49 .tdc-columns {
                        flex-direction: column-reverse;
                        flex-wrap: wrap;
                        justify-content: space-between;
                        align-items: flex-start
                    }
                }

                .tdi_49 {
                    padding-top: 70px !important;
                    padding-right: 0px !important;
                    padding-bottom: 30px !important;
                    padding-left: 0px !important
                }

                .tdi_49 .td_block_wrap {
                    text-align: left
                }

                @media (max-width:767px) {
                    .tdi_49 {
                        padding-top: 50px !important;
                        padding-bottom: 0px !important
                    }
                }

                @media (min-width:768px) and (max-width:1018px) {
                    .tdi_49 {
                        padding-bottom: 10px !important
                    }
                }
            </style>
            <div class="vc_column tdi_51  wpb_column vc_column_container tdc-column td-pb-span6">
                <style scoped="">
                    .tdi_51 {
                        vertical-align: baseline
                    }

                    .tdi_51>.wpb_wrapper,
                    .tdi_51>.wpb_wrapper>.tdc-elements {
                        display: block
                    }

                    .tdi_51>.wpb_wrapper>.tdc-elements {
                        width: 100%
                    }

                    .tdi_51>.wpb_wrapper>.vc_row_inner {
                        width: auto
                    }

                    .tdi_51>.wpb_wrapper {
                        width: auto;
                        height: auto
                    }
                </style>
                <div class="wpb_wrapper">
                    <div class="td_block_wrap td_block_title tdi_52 td-pb-border-top td_block_template_2 td-fix-index"
                        data-td-block-uid="tdi_52">
                        <style>
                            .td-theme-wrap .tdi_52 .td-block-title>*,
                            .td-theme-wrap .tdi_52 .td-pulldown-filter-link:hover,
                            .td-theme-wrap .tdi_52 .td-subcat-item a:hover,
                            .td-theme-wrap .tdi_52 .td-subcat-item .td-cur-simple-item,
                            .td-theme-wrap .tdi_52 .td-subcat-dropdown:hover .td-subcat-more span,
                            .td-theme-wrap .tdi_52 .td-subcat-dropdown:hover .td-subcat-more i {
                                color: #bb0101
                            }

                            .td-theme-wrap .tdi_52 .td-subcat-dropdown ul:after {
                                background-color: #bb0101
                            }

                            .td-theme-wrap .tdi_52 .td_module_wrap:hover .entry-title a,
                            .td-theme-wrap .tdi_52 .td_quote_on_blocks,
                            .td-theme-wrap .tdi_52 .td-opacity-cat .td-post-category:hover,
                            .td-theme-wrap .tdi_52 .td-opacity-read .td-read-more a:hover,
                            .td-theme-wrap .tdi_52 .td-opacity-author .td-post-author-name a:hover,
                            .td-theme-wrap .tdi_52 .td-instagram-user a {
                                color: #bb0101
                            }

                            .td-theme-wrap .tdi_52 .td-next-prev-wrap a:hover,
                            .td-theme-wrap .tdi_52 .td-load-more-wrap a:hover {
                                background-color: #bb0101;
                                border-color: #bb0101
                            }

                            .td-theme-wrap .tdi_52 .td-read-more a,
                            .td-theme-wrap .tdi_52 .td-weather-information:before,
                            .td-theme-wrap .tdi_52 .td-weather-week:before,
                            .td-theme-wrap .tdi_52 .td-exchange-header:before,
                            .td-theme-wrap .td-footer-wrapper .tdi_52 .td-post-category,
                            .td-theme-wrap .tdi_52 .td-post-category:hover {
                                background-color: #bb0101
                            }

                            .tdi_52 {
                                margin-bottom: 0px !important
                            }
                        </style>
                        <style>
                            body .tdi_52 .td-block-title a,
                            body .tdi_52 .td-block-title span {
                                font-size: 35px !important;
                                line-height: 1.6 !important;
                                font-weight: 600 !important
                            }

                            body .tdi_52 .td-block-title {
                                text-align: left
                            }

                            body .tdi_52.td_block_template_4 .td-block-title>*:before {
                                right: auto;
                                left: 10px
                            }

                            body .tdi_52.td_block_template_5 .td-block-title>* {
                                border-width: 0 0 0 4px
                            }

                            body .tdi_52.td_block_template_8 .td-block-title>* {
                                padding-left: 0;
                                padding-right: 20px
                            }

                            body .tdi_52.td_block_template_9 .td-block-title:after {
                                right: auto;
                                left: 0
                            }

                            body .tdi_52.td_block_template_13 .td-block-subtitle {
                                right: auto;
                                left: -4px
                            }

                            body .tdi_52.td_block_template_17 .td-block-title:after {
                                right: auto;
                                left: 15px
                            }

                            @media (min-width:768px) and (max-width:1018px) {

                                body .tdi_52 .td-block-title a,
                                body .tdi_52 .td-block-title span {
                                    font-size: 33px !important
                                }
                            }

                            @media (max-width:767px) {

                                body .tdi_52 .td-block-title a,
                                body .tdi_52 .td-block-title span {
                                    font-size: 25px !important
                                }
                            }
                        </style>
                        <div class="td-block-title-wrap">
                            <h4 class="td-block-title"><span
                                    class="td-pulldown-size">គោលបំណងនិងចក្ខុវិស័យ</span></h4>
                        </div>
                    </div>
                    <div class="tdm_block td_block_wrap tdm_block_list tdi_53 tdm-content-horiz-left td-pb-border-top td_block_template_8 tdm-list-with-icons"
                        data-td-block-uid="tdi_53">
                        <style>
                            .tdm_block_list .tdm-list-items {
                                display: flex;
                                flex-wrap: wrap;
                                margin: 0;
                                font-family: 'Open Sans', 'Open Sans Regular', sans-serif;
                                font-size: 15px;
                                line-height: 24px;
                                color: #666
                            }

                            .tdm_block_list.tdm-content-horiz-center .tdm-list-items {
                                align-items: center
                            }

                            .tdm_block_list.tdm-content-horiz-right .tdm-list-items {
                                align-items: flex-end
                            }

                            .tdm_block_list .tdm-list-item {
                                margin-bottom: 8px;
                                margin-left: 0
                            }

                            .tdm_block_list .tdm-list-item:after {
                                content: '';
                                display: table;
                                clear: both
                            }

                            .tdm_block_list .tdm-list-item .tdm-list-icon {
                                vertical-align: middle
                            }

                            .tdm_block_list .tdm-list-item i {
                                position: relative;
                                float: left;
                                line-height: inherit;
                                vertical-align: middle;
                                color: var(--td_theme_color, #4db2ec)
                            }

                            .tdm_block_list .tdm-list-item .tdm-list-icon-svg {
                                margin-top: -3px;
                                display: inline-flex;
                                align-items: center;
                                justify-content: center
                            }

                            .tdm_block_list .tdm-list-item svg {
                                width: 15px;
                                height: auto
                            }

                            .tdm_block_list .tdm-list-item svg,
                            .tdm_block_list .tdm-list-item svg * {
                                fill: var(--td_theme_color, #4db2ec)
                            }

                            .tdm_block_list.tdm-list-with-icons .tdm-list-item {
                                list-style-type: none
                            }

                            .tdi_53 .tdm-list-item {
                                width: 100%;
                                margin-bottom: 8px;
                                font-size: 17px !important;
                                line-height: 1.6 !important
                            }

                            .tdi_53 .tdm-list-item:nth-last-child(-n+1) {
                                margin-bottom: 0
                            }

                            .tdi_53 .tdm-list-item i {
                                color: #bb0101
                            }

                            .tdi_53 .tdm-list-item svg,
                            .tdi_53 .tdm-list-item svg * {
                                fill: #bb0101
                            }

                            .tdi_53 .tdm-list-item .tdm-list-icon {
                                margin-right: 11px
                            }

                            @media (min-width:1019px) and (max-width:1140px) {
                                .tdi_53 .tdm-list-item {
                                    margin-bottom: 8px !important
                                }

                                .tdi_53 .tdm-list-item:nth-last-child(-n+1) {
                                    margin-bottom: 0 !important
                                }

                                .tdi_53 .tdm-list-item {
                                    margin-bottom: 8px
                                }
                            }

                            @media (min-width:768px) and (max-width:1018px) {
                                .tdi_53 .tdm-list-item {
                                    margin-bottom: 8px !important
                                }

                                .tdi_53 .tdm-list-item:nth-last-child(-n+1) {
                                    margin-bottom: 0 !important
                                }

                                .tdi_53 .tdm-list-item {
                                    margin-bottom: 8px
                                }
                            }

                            @media (max-width:767px) {
                                .tdi_53 .tdm-list-item {
                                    margin-bottom: 8px !important
                                }

                                .tdi_53 .tdm-list-item:nth-last-child(-n+1) {
                                    margin-bottom: 0 !important
                                }

                                .tdi_53 .tdm-list-item {
                                    margin-bottom: 8px;
                                    font-size: 15px !important
                                }
                            }
                        </style>
                        <div class="tdm-col td-fix-index">
                            <ul class="tdm-list-items">
                                <li class="tdm-list-item"><i
                                        class="tdm-list-icon tdc-font-fa tdc-font-fa-check"></i><span
                                        class="tdm-list-text">​ជា​វេទិកា​រ​សម្រាប់​បង្ហាញ​និង​លើក​ក​ម្ពស់​សក្ដានុពល​របស់​យុវជន​កម្ពុជា​លើ​កិច្ច​វិភាគ​ព្រឹត្តិការណ៍​ពិភពលោក​និង​ចែករំលែក​ចំណេះ​ដឹង​
                                        ​ដោយ​ជំនាញ​និង​មាន​ក្រម​សីលធម៌​ខ្ពស់​</span></li>
                                <li class="tdm-list-item"><i
                                        class="tdm-list-icon tdc-font-fa tdc-font-fa-check"></i><span
                                        class="tdm-list-text">​ជា​ថង់​ប្រាជ្ញា​សម្រាប់​សាធារណៈ​ជន​ក្នុង​ការ​ទាញ​យកចំណេះ​ដឹង​
                                        ​និង​តាមដាន​ព្រឹត្ដិការណ៍​ពិភពលោក​</span></li>
                                <li class="tdm-list-item"><i
                                        class="tdm-list-icon tdc-font-fa tdc-font-fa-check"></i><span
                                        class="tdm-list-text">​បង្កើត​នូវ​ផ្នត់គំនិត​នៃ​ការ​តាមដាន​បរិ​បទ​ពិភពលោក​
                                        ​និង​លើក​ក​ម្ពស់​វប្បធម៌​អាន​ក្នុង​សង្គម​កម្ពុជា</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_column tdi_55  wpb_column vc_column_container tdc-column td-pb-span6">
                <style scoped="">
                    .tdi_55 {
                        vertical-align: baseline
                    }

                    .tdi_55>.wpb_wrapper,
                    .tdi_55>.wpb_wrapper>.tdc-elements {
                        display: block
                    }

                    .tdi_55>.wpb_wrapper>.tdc-elements {
                        width: 100%
                    }

                    .tdi_55>.wpb_wrapper>.vc_row_inner {
                        width: auto
                    }

                    .tdi_55>.wpb_wrapper {
                        width: auto;
                        height: auto
                    }
                </style>
                <div class="wpb_wrapper">
                    <div class="wpb_wrapper td_block_single_image td_block_wrap  td-animation-stack td_block_wrap vc_single_image tdi_56  td-single-image- td-pb-border-top td_block_template_8 "
                        data-td-block-uid="tdi_56"><span
                            class="td_single_image_bg td-lazy-img td-animation-stack-type1-2"
                            data-type="css_image"
                            data-img-url="https://www.theseedcambodia.com/wp-content/uploads/2021/09/artwork-1-02.png"
                            style="background-image: url(&quot;https://www.theseedcambodia.com/wp-content/uploads/2021/09/artwork-1-02.png&quot;)"></span>
                        <style>
                            .tdi_56 .td_single_image_bg {
                                height: 450px;
                                padding-bottom: 0
                            }

                            .tdi_56 .td_single_image_bg {
                                background-size: auto 100%;
                                background-repeat: no-repeat;
                                background-position: center bottom
                            }

                            .tdi_56:hover .td_single_image_bg:before {
                                opacity: 0
                            }

                            @media (min-width:768px) and (max-width:1018px) {
                                .tdi_56 .td_single_image_bg {
                                    height: 330px;
                                    padding-bottom: 0
                                }
                            }

                            @media (max-width:767px) {
                                .tdi_56 .td_single_image_bg {
                                    height: 300px;
                                    padding-bottom: 0
                                }
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tdi_57" class="tdc-row stretch_row_1200 td-stretch-content">
        <div class="vc_row tdi_58  wpb_row td-pb-row tdc-row-content-vert-center">
            <style scoped="">
                .tdi_58,
                .tdi_58 .tdc-columns {
                    min-height: 0
                }

                .tdi_58,
                .tdi_58 .tdc-columns {
                    display: block
                }

                .tdi_58 .tdc-columns {
                    width: 100%
                }

                @media (min-width:767px) {

                    .tdi_58.tdc-row-content-vert-center,
                    .tdi_58.tdc-row-content-vert-center .tdc-columns {
                        display: flex;
                        align-items: center;
                        flex: 1
                    }

                    .tdi_58.tdc-row-content-vert-bottom,
                    .tdi_58.tdc-row-content-vert-bottom .tdc-columns {
                        display: flex;
                        align-items: flex-end;
                        flex: 1
                    }

                    .tdi_58.tdc-row-content-vert-center .td_block_wrap {
                        vertical-align: middle
                    }

                    .tdi_58.tdc-row-content-vert-bottom .td_block_wrap {
                        vertical-align: bottom
                    }
                }

                .tdi_58 {
                    padding-top: 30px !important;
                    padding-right: 0px !important;
                    padding-bottom: 30px !important;
                    padding-left: 0px !important
                }

                .tdi_58 .td_block_wrap {
                    text-align: left
                }

                @media (max-width:767px) {
                    .tdi_58 {
                        padding-top: 15px !important
                    }
                }

                @media (min-width:768px) and (max-width:1018px) {
                    .tdi_58 {
                        padding-top: 10px !important;
                        padding-bottom: 10px !important
                    }
                }
            </style>
            <div class="vc_column tdi_60  wpb_column vc_column_container tdc-column td-pb-span6">
                <style scoped="">
                    .tdi_60 {
                        vertical-align: baseline
                    }

                    .tdi_60>.wpb_wrapper,
                    .tdi_60>.wpb_wrapper>.tdc-elements {
                        display: block
                    }

                    .tdi_60>.wpb_wrapper>.tdc-elements {
                        width: 100%
                    }

                    .tdi_60>.wpb_wrapper>.vc_row_inner {
                        width: auto
                    }

                    .tdi_60>.wpb_wrapper {
                        width: auto;
                        height: auto
                    }
                </style>
                <div class="wpb_wrapper">
                    <div class="wpb_wrapper td_block_single_image td_block_wrap  td-animation-stack td_block_wrap vc_single_image tdi_61  td-single-image- td-pb-border-top td_block_template_8 "
                        data-td-block-uid="tdi_61"><span
                            class="td_single_image_bg td-lazy-img td-animation-stack-type1-2"
                            data-type="css_image"
                            data-img-url="https://www.theseedcambodia.com/wp-content/uploads/2021/09/artwork-1-03.png"
                            style="background-image: url(&quot;https://www.theseedcambodia.com/wp-content/uploads/2021/09/artwork-1-03.png&quot;)"></span>
                        <style>
                            .tdi_61 .td_single_image_bg {
                                height: 450px;
                                padding-bottom: 0
                            }

                            .tdi_61 .td_single_image_bg {
                                background-size: 100% auto;
                                background-repeat: no-repeat;
                                background-position: center bottom
                            }

                            .tdi_61:hover .td_single_image_bg:before {
                                opacity: 0
                            }

                            @media (min-width:768px) and (max-width:1018px) {
                                .tdi_61 .td_single_image_bg {
                                    height: 330px;
                                    padding-bottom: 0
                                }
                            }

                            @media (max-width:767px) {
                                .tdi_61 .td_single_image_bg {
                                    height: 300px;
                                    padding-bottom: 0
                                }
                            }
                        </style>
                    </div>
                </div>
            </div>
            <div class="vc_column tdi_63  wpb_column vc_column_container tdc-column td-pb-span6">
                <style scoped="">
                    .tdi_63 {
                        vertical-align: baseline
                    }

                    .tdi_63>.wpb_wrapper,
                    .tdi_63>.wpb_wrapper>.tdc-elements {
                        display: block
                    }

                    .tdi_63>.wpb_wrapper>.tdc-elements {
                        width: 100%
                    }

                    .tdi_63>.wpb_wrapper>.vc_row_inner {
                        width: auto
                    }

                    .tdi_63>.wpb_wrapper {
                        width: auto;
                        height: auto
                    }
                </style>
                <div class="wpb_wrapper">
                    <div class="td_block_wrap td_block_title tdi_64 td-pb-border-top td_block_template_2 td-fix-index"
                        data-td-block-uid="tdi_64">
                        <style>
                            .td-theme-wrap .tdi_64 .td-block-title>*,
                            .td-theme-wrap .tdi_64 .td-pulldown-filter-link:hover,
                            .td-theme-wrap .tdi_64 .td-subcat-item a:hover,
                            .td-theme-wrap .tdi_64 .td-subcat-item .td-cur-simple-item,
                            .td-theme-wrap .tdi_64 .td-subcat-dropdown:hover .td-subcat-more span,
                            .td-theme-wrap .tdi_64 .td-subcat-dropdown:hover .td-subcat-more i {
                                color: #bb0101
                            }

                            .td-theme-wrap .tdi_64 .td-subcat-dropdown ul:after {
                                background-color: #bb0101
                            }

                            .td-theme-wrap .tdi_64 .td_module_wrap:hover .entry-title a,
                            .td-theme-wrap .tdi_64 .td_quote_on_blocks,
                            .td-theme-wrap .tdi_64 .td-opacity-cat .td-post-category:hover,
                            .td-theme-wrap .tdi_64 .td-opacity-read .td-read-more a:hover,
                            .td-theme-wrap .tdi_64 .td-opacity-author .td-post-author-name a:hover,
                            .td-theme-wrap .tdi_64 .td-instagram-user a {
                                color: #bb0101
                            }

                            .td-theme-wrap .tdi_64 .td-next-prev-wrap a:hover,
                            .td-theme-wrap .tdi_64 .td-load-more-wrap a:hover {
                                background-color: #bb0101;
                                border-color: #bb0101
                            }

                            .td-theme-wrap .tdi_64 .td-read-more a,
                            .td-theme-wrap .tdi_64 .td-weather-information:before,
                            .td-theme-wrap .tdi_64 .td-weather-week:before,
                            .td-theme-wrap .tdi_64 .td-exchange-header:before,
                            .td-theme-wrap .td-footer-wrapper .tdi_64 .td-post-category,
                            .td-theme-wrap .tdi_64 .td-post-category:hover {
                                background-color: #bb0101
                            }

                            .tdi_64 {
                                margin-bottom: 0px !important
                            }
                        </style>
                        <style>
                            body .tdi_64 .td-block-title a,
                            body .tdi_64 .td-block-title span {
                                font-size: 35px !important;
                                line-height: 1.6 !important;
                                font-weight: 600 !important
                            }

                            body .tdi_64 .td-block-title {
                                text-align: left
                            }

                            body .tdi_64.td_block_template_4 .td-block-title>*:before {
                                right: auto;
                                left: 10px
                            }

                            body .tdi_64.td_block_template_5 .td-block-title>* {
                                border-width: 0 0 0 4px
                            }

                            body .tdi_64.td_block_template_8 .td-block-title>* {
                                padding-left: 0;
                                padding-right: 20px
                            }

                            body .tdi_64.td_block_template_9 .td-block-title:after {
                                right: auto;
                                left: 0
                            }

                            body .tdi_64.td_block_template_13 .td-block-subtitle {
                                right: auto;
                                left: -4px
                            }

                            body .tdi_64.td_block_template_17 .td-block-title:after {
                                right: auto;
                                left: 15px
                            }

                            @media (min-width:768px) and (max-width:1018px) {

                                body .tdi_64 .td-block-title a,
                                body .tdi_64 .td-block-title span {
                                    font-size: 33px !important
                                }
                            }

                            @media (max-width:767px) {

                                body .tdi_64 .td-block-title a,
                                body .tdi_64 .td-block-title span {
                                    font-size: 25px !important
                                }
                            }
                        </style>
                        <div class="td-block-title-wrap">
                            <h4 class="td-block-title"><span
                                    class="td-pulldown-size">គុណតម្លៃស្នាដៃ</span></h4>
                        </div>
                    </div>
                    <div class="tdm_block td_block_wrap tdm_block_list tdi_65 tdm-content-horiz-left td-pb-border-top td_block_template_8 tdm-list-with-icons"
                        data-td-block-uid="tdi_65">
                        <style>
                            .tdi_65 .tdm-list-item {
                                width: 100%
                            }

                            .tdi_65 .tdm-list-item:nth-last-child(-n+1) {
                                margin-bottom: 0
                            }

                            .tdi_65 .tdm-list-item {
                                margin-bottom: 8px;
                                font-size: 17px !important;
                                line-height: 1.6 !important
                            }

                            .tdi_65 .tdm-list-item i {
                                color: #bb0101
                            }

                            .tdi_65 .tdm-list-item svg,
                            .tdi_65 .tdm-list-item svg * {
                                fill: #bb0101
                            }

                            .tdi_65 .tdm-list-item .tdm-list-icon {
                                margin-right: 11px
                            }

                            @media (min-width:1019px) and (max-width:1140px) {
                                .tdi_65 .tdm-list-item {
                                    margin-bottom: 8px !important
                                }

                                .tdi_65 .tdm-list-item:nth-last-child(-n+1) {
                                    margin-bottom: 0 !important
                                }

                                .tdi_65 .tdm-list-item {
                                    margin-bottom: 8px
                                }
                            }

                            @media (min-width:768px) and (max-width:1018px) {
                                .tdi_65 .tdm-list-item {
                                    margin-bottom: 8px !important
                                }

                                .tdi_65 .tdm-list-item:nth-last-child(-n+1) {
                                    margin-bottom: 0 !important
                                }

                                .tdi_65 .tdm-list-item {
                                    margin-bottom: 8px
                                }
                            }

                            @media (max-width:767px) {
                                .tdi_65 .tdm-list-item {
                                    margin-bottom: 8px !important
                                }

                                .tdi_65 .tdm-list-item:nth-last-child(-n+1) {
                                    margin-bottom: 0 !important
                                }

                                .tdi_65 .tdm-list-item {
                                    margin-bottom: 8px;
                                    font-size: 15px !important
                                }
                            }
                        </style>
                        <div class="tdm-col td-fix-index">
                            <ul class="tdm-list-items">
                                <li class="tdm-list-item"><i
                                        class="tdm-list-icon tdc-font-fa tdc-font-fa-check"></i><span
                                        class="tdm-list-text">មានទឡ្ហីករណ៍រឹងមាំ
                                        និងអំណះអំណាងច្បាស់លាស់</span></li>
                                <li class="tdm-list-item"><i
                                        class="tdm-list-icon tdc-font-fa tdc-font-fa-check"></i><span
                                        class="tdm-list-text">អក្ខរាវិរុទ្ធគោរព​តាម​វចនានុក្រម​ខ្មែរ​របស់​សម្ដេច​សង្ឃ​រាជ​ជួនណាត
                                        និងសទ្ទានុក្រមដែលបានកំណត់</span></li>
                                <li class="tdm-list-item"><i
                                        class="tdm-list-icon tdc-font-fa tdc-font-fa-check"></i><span
                                        class="tdm-list-text">គ្មានខ្លឹមសារឃោសនានយោបាយ
                                        និងវាយប្រហារបុគ្គលណាមួយ។</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tdi_66" class="tdc-row stretch_row_1200 td-stretch-content">
        <div class="vc_row tdi_67  wpb_row td-pb-row tdc-row-content-vert-center">
            <style scoped="">
                .tdi_67,
                .tdi_67 .tdc-columns {
                    min-height: 0
                }

                .tdi_67,
                .tdi_67 .tdc-columns {
                    display: block
                }

                .tdi_67 .tdc-columns {
                    width: 100%
                }

                @media (min-width:767px) {

                    .tdi_67.tdc-row-content-vert-center,
                    .tdi_67.tdc-row-content-vert-center .tdc-columns {
                        display: flex;
                        align-items: center;
                        flex: 1
                    }

                    .tdi_67.tdc-row-content-vert-bottom,
                    .tdi_67.tdc-row-content-vert-bottom .tdc-columns {
                        display: flex;
                        align-items: flex-end;
                        flex: 1
                    }

                    .tdi_67.tdc-row-content-vert-center .td_block_wrap {
                        vertical-align: middle
                    }

                    .tdi_67.tdc-row-content-vert-bottom .td_block_wrap {
                        vertical-align: bottom
                    }
                }

                @media (max-width:767px) {

                    .tdi_67,
                    .tdi_67 .tdc-columns {
                        display: flex
                    }

                    .tdi_67 .tdc-columns {
                        width: 100%
                    }

                    .tdi_67,
                    .tdi_67 .tdc-columns {
                        flex-direction: column-reverse;
                        flex-wrap: nowrap;
                        justify-content: flex-start;
                        align-items: flex-start
                    }
                }

                .tdi_67 {
                    padding-top: 30px !important;
                    padding-right: 0px !important;
                    padding-bottom: 30px !important;
                    padding-left: 0px !important
                }

                .tdi_67 .td_block_wrap {
                    text-align: left
                }

                @media (max-width:767px) {
                    .tdi_67 {
                        padding-top: 0px !important
                    }
                }

                @media (min-width:768px) and (max-width:1018px) {
                    .tdi_67 {
                        padding-top: 10px !important;
                        padding-bottom: 10px !important
                    }
                }
            </style>
            <div class="vc_column tdi_69  wpb_column vc_column_container tdc-column td-pb-span6">
                <style scoped="">
                    .tdi_69 {
                        vertical-align: baseline
                    }

                    .tdi_69>.wpb_wrapper,
                    .tdi_69>.wpb_wrapper>.tdc-elements {
                        display: block
                    }

                    .tdi_69>.wpb_wrapper>.tdc-elements {
                        width: 100%
                    }

                    .tdi_69>.wpb_wrapper>.vc_row_inner {
                        width: auto
                    }

                    .tdi_69>.wpb_wrapper {
                        width: auto;
                        height: auto
                    }
                </style>
                <div class="wpb_wrapper">
                    <div class="td_block_wrap td_block_title tdi_70 td-pb-border-top td_block_template_2 td-fix-index"
                        data-td-block-uid="tdi_70">
                        <style>
                            .td-theme-wrap .tdi_70 .td-block-title>*,
                            .td-theme-wrap .tdi_70 .td-pulldown-filter-link:hover,
                            .td-theme-wrap .tdi_70 .td-subcat-item a:hover,
                            .td-theme-wrap .tdi_70 .td-subcat-item .td-cur-simple-item,
                            .td-theme-wrap .tdi_70 .td-subcat-dropdown:hover .td-subcat-more span,
                            .td-theme-wrap .tdi_70 .td-subcat-dropdown:hover .td-subcat-more i {
                                color: #bb0101
                            }

                            .td-theme-wrap .tdi_70 .td-subcat-dropdown ul:after {
                                background-color: #bb0101
                            }

                            .td-theme-wrap .tdi_70 .td_module_wrap:hover .entry-title a,
                            .td-theme-wrap .tdi_70 .td_quote_on_blocks,
                            .td-theme-wrap .tdi_70 .td-opacity-cat .td-post-category:hover,
                            .td-theme-wrap .tdi_70 .td-opacity-read .td-read-more a:hover,
                            .td-theme-wrap .tdi_70 .td-opacity-author .td-post-author-name a:hover,
                            .td-theme-wrap .tdi_70 .td-instagram-user a {
                                color: #bb0101
                            }

                            .td-theme-wrap .tdi_70 .td-next-prev-wrap a:hover,
                            .td-theme-wrap .tdi_70 .td-load-more-wrap a:hover {
                                background-color: #bb0101;
                                border-color: #bb0101
                            }

                            .td-theme-wrap .tdi_70 .td-read-more a,
                            .td-theme-wrap .tdi_70 .td-weather-information:before,
                            .td-theme-wrap .tdi_70 .td-weather-week:before,
                            .td-theme-wrap .tdi_70 .td-exchange-header:before,
                            .td-theme-wrap .td-footer-wrapper .tdi_70 .td-post-category,
                            .td-theme-wrap .tdi_70 .td-post-category:hover {
                                background-color: #bb0101
                            }

                            .tdi_70 {
                                margin-bottom: 0px !important
                            }
                        </style>
                        <style>
                            body .tdi_70 .td-block-title a,
                            body .tdi_70 .td-block-title span {
                                font-size: 35px !important;
                                line-height: 1.6 !important;
                                font-weight: 600 !important
                            }

                            body .tdi_70 .td-block-title {
                                text-align: left
                            }

                            body .tdi_70.td_block_template_4 .td-block-title>*:before {
                                right: auto;
                                left: 10px
                            }

                            body .tdi_70.td_block_template_5 .td-block-title>* {
                                border-width: 0 0 0 4px
                            }

                            body .tdi_70.td_block_template_8 .td-block-title>* {
                                padding-left: 0;
                                padding-right: 20px
                            }

                            body .tdi_70.td_block_template_9 .td-block-title:after {
                                right: auto;
                                left: 0
                            }

                            body .tdi_70.td_block_template_13 .td-block-subtitle {
                                right: auto;
                                left: -4px
                            }

                            body .tdi_70.td_block_template_17 .td-block-title:after {
                                right: auto;
                                left: 15px
                            }

                            @media (min-width:768px) and (max-width:1018px) {

                                body .tdi_70 .td-block-title a,
                                body .tdi_70 .td-block-title span {
                                    font-size: 33px !important
                                }
                            }

                            @media (max-width:767px) {

                                body .tdi_70 .td-block-title a,
                                body .tdi_70 .td-block-title span {
                                    font-size: 25px !important
                                }
                            }
                        </style>
                        <div class="td-block-title-wrap">
                            <h4 class="td-block-title"><span class="td-pulldown-size">គោលដៅ</span>
                            </h4>
                        </div>
                    </div>
                    <div class="tdm_block td_block_wrap tdm_block_list tdi_71 tdm-content-horiz-left td-pb-border-top td_block_template_8 tdm-list-with-icons"
                        data-td-block-uid="tdi_71">
                        <style>
                            .tdi_71 .tdm-list-item {
                                width: 100%
                            }

                            .tdi_71 .tdm-list-item:nth-last-child(-n+1) {
                                margin-bottom: 0
                            }

                            .tdi_71 .tdm-list-item {
                                margin-bottom: 8px;
                                font-size: 17px !important;
                                line-height: 1.6 !important
                            }

                            .tdi_71 .tdm-list-item i {
                                color: #bb0101
                            }

                            .tdi_71 .tdm-list-item svg,
                            .tdi_71 .tdm-list-item svg * {
                                fill: #bb0101
                            }

                            .tdi_71 .tdm-list-item .tdm-list-icon {
                                margin-right: 11px
                            }

                            @media (min-width:1019px) and (max-width:1140px) {
                                .tdi_71 .tdm-list-item {
                                    margin-bottom: 8px !important
                                }

                                .tdi_71 .tdm-list-item:nth-last-child(-n+1) {
                                    margin-bottom: 0 !important
                                }

                                .tdi_71 .tdm-list-item {
                                    margin-bottom: 8px
                                }
                            }

                            @media (min-width:768px) and (max-width:1018px) {
                                .tdi_71 .tdm-list-item {
                                    margin-bottom: 8px !important
                                }

                                .tdi_71 .tdm-list-item:nth-last-child(-n+1) {
                                    margin-bottom: 0 !important
                                }

                                .tdi_71 .tdm-list-item {
                                    margin-bottom: 8px
                                }
                            }

                            @media (max-width:767px) {
                                .tdi_71 .tdm-list-item {
                                    margin-bottom: 8px !important
                                }

                                .tdi_71 .tdm-list-item:nth-last-child(-n+1) {
                                    margin-bottom: 0 !important
                                }

                                .tdi_71 .tdm-list-item {
                                    margin-bottom: 8px;
                                    font-size: 15px !important
                                }
                            }
                        </style>
                        <div class="tdm-col td-fix-index">
                            <ul class="tdm-list-items">
                                <li class="tdm-list-item"><i
                                        class="tdm-list-icon tdc-font-fa tdc-font-fa-check"></i><span
                                        class="tdm-list-text">បង្ហាញពីសក្ដានុពល
                                        និង​ទេព​កោសល្យ​របស់​យុវជន​កម្ពុជា</span></li>
                                <li class="tdm-list-item"><i
                                        class="tdm-list-icon tdc-font-fa tdc-font-fa-check"></i><span
                                        class="tdm-list-text">បណ្ដុះយុវជនដែលជា​គ្រាប់​ពូជ​របស់​កម្ពុជា​បន្ថែមទៀត
                                        និង​លើក​កម្ពស់វិស័យ
                                        វិចារណកថា​លើ​ព្រឹត្ដិការណ៍​ពិភពលោក​និង​អត្ថបទ​ចែករំលែក
                                        ឱ្យមានគុណភាពល្អ​ប្រសើរ​មួយ​កម្រិត​ទៀត​នៅ​ក្នុង​ប្រទេសកម្ពុជា។</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_column tdi_73  wpb_column vc_column_container tdc-column td-pb-span6">
                <style scoped="">
                    .tdi_73 {
                        vertical-align: baseline
                    }

                    .tdi_73>.wpb_wrapper,
                    .tdi_73>.wpb_wrapper>.tdc-elements {
                        display: block
                    }

                    .tdi_73>.wpb_wrapper>.tdc-elements {
                        width: 100%
                    }

                    .tdi_73>.wpb_wrapper>.vc_row_inner {
                        width: auto
                    }

                    .tdi_73>.wpb_wrapper {
                        width: auto;
                        height: auto
                    }
                </style>
                <div class="wpb_wrapper">
                    <div class="wpb_wrapper td_block_single_image td_block_wrap  td-animation-stack td_block_wrap vc_single_image tdi_74  td-single-image- td-pb-border-top td_block_template_8 "
                        data-td-block-uid="tdi_74"><span
                            class="td_single_image_bg td-lazy-img td-animation-stack-type1-2"
                            data-type="css_image"
                            data-img-url="https://www.theseedcambodia.com/wp-content/uploads/2021/09/artwork-1-2-05.png"
                            style="background-image: url(&quot;https://www.theseedcambodia.com/wp-content/uploads/2021/09/artwork-1-2-05.png&quot;)"></span>
                        <style>
                            .tdi_74 .td_single_image_bg {
                                height: 450px;
                                padding-bottom: 0
                            }

                            .tdi_74 .td_single_image_bg {
                                background-size: auto 100%;
                                background-repeat: no-repeat;
                                background-position: center bottom
                            }

                            .tdi_74:hover .td_single_image_bg:before {
                                opacity: 0
                            }

                            @media (min-width:1019px) and (max-width:1140px) {
                                .tdi_74 .td_single_image_bg {
                                    height: 430px;
                                    padding-bottom: 0
                                }
                            }

                            @media (min-width:768px) and (max-width:1018px) {
                                .tdi_74 .td_single_image_bg {
                                    height: 320px;
                                    padding-bottom: 0
                                }
                            }

                            @media (max-width:767px) {
                                .tdi_74 .td_single_image_bg {
                                    height: 300px;
                                    padding-bottom: 0
                                }
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tdi_75" class="tdc-row stretch_row_1200 td-stretch-content">
        <div class="vc_row tdi_76  wpb_row td-pb-row tdc-element-style">
            <style scoped="">
                .tdi_76,
                .tdi_76 .tdc-columns {
                    min-height: 0
                }

                .tdi_76 {
                    position: relative
                }

                .tdi_76 .tdc-row-divider {
                    overflow: hidden
                }

                .tdi_76 .tdc-row-divider-top .tdm-svg {
                    height: 200px;
                    fill: #faf5ee
                }

                .tdi_76 .tdc-row-divider-top .tdc-divider-space {
                    background-color: #faf5ee;
                    top: 100%;
                    height: px
                }

                .tdi_76 .tdc-row-divider-top {
                    top: px
                }

                .tdi_76,
                .tdi_76 .tdc-columns {
                    display: block
                }

                .tdi_76 .tdc-columns {
                    width: 100%
                }

                .tdi_76 {
                    padding-top: 90px !important;
                    padding-bottom: 60px !important;
                    position: relative
                }

                .tdi_76 .td_block_wrap {
                    text-align: left
                }

                @media (max-width:767px) {
                    .tdi_76 {
                        padding-top: 60px !important;
                        padding-bottom: 30px !important
                    }
                }
            </style>
            <div class="tdi_75_rand_style td-element-style">
                <style>
                    .tdi_75_rand_style {
                        background-color: #ffffff !important
                    }
                </style>
            </div>
            <div class="tdc-row-divider">
                <div class="tdc-divider17 tdc-row-divider-top">
                    <div class="tdc-divider-space"></div><svg class="tdm-svg"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 400"
                        preserveAspectRatio="none">
                        <path
                            d="M0,513V373l15.793,15.882L30.633,373l15.458,15.881L60.931,373,76.39,388.882,91.23,373l15.458,15.881L121.528,373l15.458,15.881L151.826,373l15.459,15.881L182.125,373l15.458,15.881L212.423,373l15.459,15.881L242.721,373l15.459,15.881L273.02,373l15.458,15.881L303.318,373l15.459,15.881L333.616,373l15.459,15.881L363.915,373l15.458,15.881L394.213,373l15.459,15.881L424.512,373l15.458,15.881L454.81,373l15.458,15.881L485.108,373l15.459,15.881L515.407,373l15.458,15.881L545.705,373l15.459,15.881L576,373l15.459,15.881L606.3,373l15.458,15.881L636.6,373l15.459,15.881L666.9,373l15.459,15.881L697.2,373l15.458,15.881L727.5,373l15.459,15.881L757.794,373l15.458,15.881L788.092,373l15.458,15.881L818.39,373l15.459,15.881L848.689,373l15.458,15.881L878.987,373l15.458,15.881L909.285,373l15.459,15.881L939.584,373l15.458,15.881L969.882,373l15.458,15.881L1000.18,373l15.46,15.881L1030.48,373l15.46,15.881L1060.78,373l15.46,15.881L1091.08,373l15.45,15.881L1121.37,373l15.46,15.881L1151.67,373l15.46,15.881L1181.97,373l15.46,15.881L1212.27,373l15.46,15.881L1242.57,373l15.46,15.881L1272.87,373l15.45,15.881L1303.16,373l15.46,15.881L1333.46,373l15.46,15.881L1363.76,373l15.46,15.881L1394.06,373l15.46,15.881L1424.36,373l15.46,15.881L1454.66,373l15.45,15.881L1484.95,373l15.46,15.881L1515.25,373l15.46,15.881L1545.55,373l15.46,15.881L1575.85,373l15.46,15.881L1606.15,373l15.46,15.881L1636.45,373l15.45,15.881L1666.74,373l15.46,15.881L1697.04,373l15.46,15.881L1727.34,373l15.46,15.881L1757.64,373l15.46,15.881L1787.94,373l15.46,15.881L1818.24,373l15.45,15.881L1848.53,373l15.46,15.881L1878.83,373l15.46,15.881L1909.13,373l15.46,15.881L1939.43,373l15.46,15.881L1969.73,373l15.46,15.881L2000,373V513H0Z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="vc_column tdi_78  wpb_column vc_column_container tdc-column td-pb-span12">
                <style scoped="">
                    .tdi_78 {
                        vertical-align: baseline
                    }

                    .tdi_78>.wpb_wrapper,
                    .tdi_78>.wpb_wrapper>.tdc-elements {
                        display: block
                    }

                    .tdi_78>.wpb_wrapper>.tdc-elements {
                        width: 100%
                    }

                    .tdi_78>.wpb_wrapper>.vc_row_inner {
                        width: auto
                    }

                    .tdi_78>.wpb_wrapper {
                        width: auto;
                        height: auto
                    }
                </style>
                <div class="wpb_wrapper">
                    <div class="td_block_wrap td_block_title tdi_79 td-pb-border-top td_block_template_2 td-fix-index"
                        data-td-block-uid="tdi_79">
                        <style>
                            .td-theme-wrap .tdi_79 .td-block-title>*,
                            .td-theme-wrap .tdi_79 .td-pulldown-filter-link:hover,
                            .td-theme-wrap .tdi_79 .td-subcat-item a:hover,
                            .td-theme-wrap .tdi_79 .td-subcat-item .td-cur-simple-item,
                            .td-theme-wrap .tdi_79 .td-subcat-dropdown:hover .td-subcat-more span,
                            .td-theme-wrap .tdi_79 .td-subcat-dropdown:hover .td-subcat-more i {
                                color: #bb0101
                            }

                            .td-theme-wrap .tdi_79 .td-subcat-dropdown ul:after {
                                background-color: #bb0101
                            }

                            .td-theme-wrap .tdi_79 .td_module_wrap:hover .entry-title a,
                            .td-theme-wrap .tdi_79 .td_quote_on_blocks,
                            .td-theme-wrap .tdi_79 .td-opacity-cat .td-post-category:hover,
                            .td-theme-wrap .tdi_79 .td-opacity-read .td-read-more a:hover,
                            .td-theme-wrap .tdi_79 .td-opacity-author .td-post-author-name a:hover,
                            .td-theme-wrap .tdi_79 .td-instagram-user a {
                                color: #bb0101
                            }

                            .td-theme-wrap .tdi_79 .td-next-prev-wrap a:hover,
                            .td-theme-wrap .tdi_79 .td-load-more-wrap a:hover {
                                background-color: #bb0101;
                                border-color: #bb0101
                            }

                            .td-theme-wrap .tdi_79 .td-read-more a,
                            .td-theme-wrap .tdi_79 .td-weather-information:before,
                            .td-theme-wrap .tdi_79 .td-weather-week:before,
                            .td-theme-wrap .tdi_79 .td-exchange-header:before,
                            .td-theme-wrap .td-footer-wrapper .tdi_79 .td-post-category,
                            .td-theme-wrap .tdi_79 .td-post-category:hover {
                                background-color: #bb0101
                            }

                            .tdi_79 {
                                margin-bottom: 0px !important
                            }
                        </style>
                        <style>
                            body .tdi_79 .td-block-title a,
                            body .tdi_79 .td-block-title span {
                                font-size: 35px !important;
                                line-height: 1.6 !important;
                                font-weight: 600 !important
                            }

                            body .tdi_79 .td-block-title {
                                text-align: center
                            }

                            body .tdi_79.td_block_template_4 .td-block-title>*:before,
                            body .tdi_79.td_block_template_17 .td-block-title:after,
                            body .tdi_79.td_block_template_13 .td-block-subtitle,
                            body .tdi_79.td_block_template_9 .td-block-title:after {
                                right: 0;
                                left: 0
                            }

                            body .tdi_79.td_block_template_5 .td-block-title>* {
                                border-width: 0 0 0 4px
                            }

                            body .tdi_79.td_block_template_8 .td-block-title>* {
                                padding-left: 20px;
                                padding-right: 20px
                            }

                            @media (min-width:768px) and (max-width:1018px) {

                                body .tdi_79 .td-block-title a,
                                body .tdi_79 .td-block-title span {
                                    font-size: 33px !important
                                }
                            }

                            @media (max-width:767px) {

                                body .tdi_79 .td-block-title a,
                                body .tdi_79 .td-block-title span {
                                    font-size: 25px !important
                                }
                            }
                        </style>
                        <div class="td-block-title-wrap">
                            <h4 class="td-block-title"><span
                                    class="td-pulldown-size">សាវតាបន្ថែម</span></h4>
                        </div>
                    </div>
                    <div class="vc_row_inner tdi_81  vc_row vc_inner wpb_row td-pb-row">
                        <style scoped="">
                            .tdi_81 {
                                position: relative !important;
                                top: 0;
                                transform: none;
                                -webkit-transform: none
                            }

                            .tdi_81,
                            .tdi_81 .tdc-inner-columns {
                                display: block
                            }

                            .tdi_81 .tdc-inner-columns {
                                width: 100%
                            }
                        </style>
                        <div
                            class="vc_column_inner tdi_83  wpb_column vc_column_container tdc-inner-column td-pb-span3">
                            <style scoped="">
                                .tdi_83 {
                                    vertical-align: baseline
                                }

                                .tdi_83 .vc_column-inner>.wpb_wrapper,
                                .tdi_83 .vc_column-inner>.wpb_wrapper .tdc-elements {
                                    display: block
                                }

                                .tdi_83 .vc_column-inner>.wpb_wrapper .tdc-elements {
                                    width: 100%
                                }

                                div.tdi_83 {
                                    width: 15% !important
                                }

                                @media (max-width:767px) {
                                    div.tdi_83 {
                                        width: 100% !important
                                    }
                                }
                            </style>
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper"></div>
                            </div>
                        </div>
                        <div
                            class="vc_column_inner tdi_85  wpb_column vc_column_container tdc-inner-column td-pb-span6">
                            <style scoped="">
                                .tdi_85 {
                                    vertical-align: baseline
                                }

                                .tdi_85 .vc_column-inner>.wpb_wrapper,
                                .tdi_85 .vc_column-inner>.wpb_wrapper .tdc-elements {
                                    display: block
                                }

                                .tdi_85 .vc_column-inner>.wpb_wrapper .tdc-elements {
                                    width: 100%
                                }

                                div.tdi_85 {
                                    width: 70% !important
                                }

                                @media (max-width:767px) {
                                    div.tdi_85 {
                                        width: 100% !important
                                    }
                                }
                            </style>
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_wrapper wpb_text_column td_block_wrap td_block_wrap vc_column_text tdi_86  tagdiv-type td-pb-border-top td_block_template_8"
                                        data-td-block-uid="tdi_86">
                                        <style>
                                            .tdi_86 {
                                                margin-bottom: 0px !important
                                            }
                                        </style>
                                        <style>
                                            .tdi_86,
                                            .tdi_86 p {
                                                font-size: 17px !important
                                            }

                                            @media (max-width:767px) {

                                                .tdi_86,
                                                .tdi_86 p {
                                                    font-size: 15px !important
                                                }
                                            }
                                        </style>
                                        <div class="td-block-title-wrap"></div>
                                        <div class="td-fix-index">
                                            <p style="text-align: center;">​T​h​e​ TRUTH
                                                ​ត្រូវ​បាន​ផ្ដួចផ្ដើម​ឡើង​ដោយ​ ​លោក​ ​ហ៊ុយ​
                                                ​បញ្ញា​វ័ន្ដ ​និង​បង្កើត​ឡើង​ដោយក្រុម​យុវជន​ចំនួន​៥​
                                                ​នាក់​ ​នៅ​ខែ​កក្កដា​ ​ឆ្នាំ​២​០​២​០​។​
                                                ​ហើយ​បច្ចុប្បន្ន​មាន​សមាជិក​កំពុង​បំពេញ​បេ​សកម្ម​ចំនួន​
                                                ​១​២​នាក់​ ​ដែល​មាន​ជំនាញ​ចម្រុះ​។​
                                                ​ក្នុង​នោះ​មាន​ការចូលរួម​ធ្វើការ​ដោយ​យុវជន​ស្ម័គ្រចិត្ដ​ចំនួន​
                                                ​៧​ ​នាក់​។​ ​កន្លងមក​ ​ក្រុម​ការងារ​ទាំងមូល​បាន​
                                                ​និង​កំពុង​បន្ត​អនុវត្ដ​សង្វាក់​ការងារ​យ៉ាង​ខ្ជាប់ខ្ជួន​
                                                ​រួម​ជាមួយ​គោលការណ៍​សាមគ្គី​គ្នា​និង​អភិ​វ​ឌ្ឈ​ទៅមុខ​ទាំងអស់គ្នា​។
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="vc_column_inner tdi_88  wpb_column vc_column_container tdc-inner-column td-pb-span3">
                            <style scoped="">
                                .tdi_88 {
                                    vertical-align: baseline
                                }

                                .tdi_88 .vc_column-inner>.wpb_wrapper,
                                .tdi_88 .vc_column-inner>.wpb_wrapper .tdc-elements {
                                    display: block
                                }

                                .tdi_88 .vc_column-inner>.wpb_wrapper .tdc-elements {
                                    width: 100%
                                }

                                div.tdi_88 {
                                    width: 15% !important
                                }

                                @media (max-width:767px) {
                                    div.tdi_88 {
                                        width: 100% !important
                                    }
                                }
                            </style>
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
include BASE_PATH . 'views/master.php';
?>