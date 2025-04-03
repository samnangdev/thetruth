<?php
require_once '../connection/db.php';
require_once '../config/config.php';
require_once __DIR__ . '/../controllers/ContentController.php';

$title = "អត្ថបទ​​​ ";
ob_start();

$contentController = new ContentController();
$articleId = isset($_GET['id']) ? intval($_GET['id']) : 0; // Get ID from URL

$article = $contentController->listArticle($articleId);

?>
<article id="template-id-6320"
    class="post-6320 tdb_templates type-tdb_templates status-publish post" itemscope=""
    itemtype="https://schema.org/Article">
    <div id="tdi_32" class="tdc-zone">
        <div class="tdc_zone tdi_33  wpb_row td-pb-row">

            <div id="tdi_34" class="tdc-row stretch_row_1200 td-stretch-content">
                <div class="vc_row tdi_35  wpb_row td-pb-row tdc-element-style">

                    <div class="tdi_34_rand_style td-element-style">

                    </div>
                    <div
                        class="vc_column tdi_37  wpb_column vc_column_container tdc-column td-pb-span8">

                        <div class="wpb_wrapper">
                            <div class="td_block_wrap tdb_title tdi_38 tdb-single-title td-pb-border-top td_block_template_8"
                                data-td-block-uid="tdi_38">

                                <div class="tdb-block-inner td-fix-index">
                                    <h1 class="tdb-title-text"><?php echo isset($article['TITLE']) ? $article['TITLE'] : ''; ?></h1>
                                    <div></div>
                                    <div class="tdb-title-line"></div>
                                </div>
                            </div>
                            <div class="td_block_wrap tdb_single_categories tdi_39 td-pb-border-top td_block_template_8 "
                                data-td-block-uid="tdi_39">

                                <div class="tdb-category td-fix-index"><a class="tdb-entry-category"
                                        href="https://www.theseedcambodia.com/article/category/%e1%9e%9c%e1%9e%b7%e1%9e%85%e1%9e%b6%e1%9e%9a%e1%9e%8e%e1%9e%80%e1%9e%90%e1%9e%b6%e1%9e%90%e1%9f%92%e1%9e%84%e1%9f%83%e1%9e%9f%e1%9e%bb%e1%9e%80%e1%9f%92%e1%9e%9a/"><span
                                            class="tdb-cat-bg"></span>វិចារណកថាថ្ងៃសុក្រ</a><a
                                        class="tdb-entry-category"
                                        href="https://www.theseedcambodia.com/article/category/%e1%9e%9c%e1%9e%b7%e1%9e%85%e1%9e%b6%e1%9e%9a%e1%9e%8e%e1%9e%80%e1%9e%90%e1%9e%b6%e1%9e%90%e1%9f%92%e1%9e%84%e1%9f%83%e1%9e%9f%e1%9e%bb%e1%9e%80%e1%9f%92%e1%9e%9a/%e1%9e%93%e1%9e%99%e1%9f%84%e1%9e%94%e1%9e%b6%e1%9e%99%e1%9e%80%e1%9e%b6%e1%9e%9a%e1%9e%94%e1%9e%9a%e1%9e%91%e1%9f%81%e1%9e%9f/"><span
                                            class="tdb-cat-bg"></span>នយោបាយការបរទេស</a><a
                                        class="tdb-entry-category"
                                        href="https://www.theseedcambodia.com/article/category/%e1%9e%9c%e1%9e%b7%e1%9e%85%e1%9e%b6%e1%9e%9a%e1%9e%8e%e1%9e%80%e1%9e%90%e1%9e%b6%e1%9e%90%e1%9f%92%e1%9e%84%e1%9f%83%e1%9e%9f%e1%9e%bb%e1%9e%80%e1%9f%92%e1%9e%9a/%e1%9e%96%e1%9e%b6%e1%9e%8e%e1%9e%b7%e1%9e%87%e1%9f%92%e1%9e%87%e1%9e%80%e1%9e%98%e1%9f%92%e1%9e%98/"><span
                                            class="tdb-cat-bg"></span>ពាណិជ្ជកម្ម</a></div>
                            </div>
                            <div class="td_block_wrap tdb_single_date tdi_40 td-pb-border-top td_block_template_8 tdb-post-meta"
                                data-td-block-uid="tdi_40">

                                <div class="tdb-block-inner td-fix-index">
                                <time datetime="<?php echo !empty($article['PUBLISHED_DATE']) ? date('c', strtotime($article['PUBLISHED_DATE'])) : ''; ?>">
    <?php echo !empty($article['PUBLISHED_DATE']) ? date('F j, Y', strtotime($article['PUBLISHED_DATE'])) : 'No Date'; ?>
</time>
                                </div>
                            </div> <!-- ./block -->
                        </div>
                    </div>
                    <div
                        class="vc_column tdi_42  wpb_column vc_column_container tdc-column td-pb-span4">

                        <div class="wpb_wrapper"></div>
                    </div>
                </div>
            </div>
            <div id="tdi_43" class="tdc-row stretch_row_1200 td-stretch-content">
                <div class="vc_row tdi_44  wpb_row td-pb-row tdc-element-style">

                    <div class="tdi_43_rand_style td-element-style">

                    </div>
                    <div
                        class="vc_column tdi_46  wpb_column vc_column_container tdc-column td-pb-span8">

                        <div class="wpb_wrapper">
                            <div class="clearfix"></div>
                            <div class="td_block_wrap tdb_single_bg_featured_image tdi_47 tdb-content-horiz-left td-pb-border-top td_block_template_8"
                                data-td-block-uid="tdi_47">

                                <!-- <div class="tdb-featured-image-bg" style="background-image: url('https://www.theseedcambodia.com/wp-content/uploads/2025/01/website-cover-1.png');"></div> -->
                                <?php
                                $imageUrl = BASE_URL . 'storage/uploads/article/' . $article['IMAGE_URL'];
                                ?>
                                <div class="tdb-featured-image-bg" style="background-image: url('<?php echo htmlspecialchars($imageUrl, ENT_QUOTES, 'UTF-8'); ?>');"></div>


                            </div>
                            <div style="margin-top: 10px;" class="td_block_wrap tdb_single_post_share tdi_48  td-pb-border-top share-icon-top td_block_template_8"
                                data-td-block-uid="tdi_48">

                                <div id="tdi_48"
                                    class="td-post-sharing d-ps-notext td-ps-icon-color">
                                    <div class="td-post-sharing-visible"><a
                                            class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook"
                                            href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.theseedcambodia.com%2Farticle%2F9171%2F"
                                            title="Facebook"
                                            style="transition: opacity 0.2s; opacity: 1;">
                                            <div class="td-social-but-icon"><i
                                                    class="td-icon-font bi bi-facebook"></i></div>
                                            <div class="td-social-but-text">Facebook</div>
                                        </a><a
                                            class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-twitter"
                                            href="https://twitter.com/intent/tweet?text=%E1%9E%9C%E1%9E%B7%E1%9E%85%E1%9E%B6%E1%9E%9A%E1%9E%8E%E1%9E%80%E1%9E%90%E1%9E%B6%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9F%E1%9E%BB%E1%9E%80%E1%9F%92%E1%9E%9A%E1%9F%96+%E1%9E%A2%E1%9E%8F%E1%9F%92%E1%9E%90%E1%9E%94%E1%9F%92%E1%9E%9A%E1%9E%99%E1%9F%84%E1%9E%87%E1%9E%93%E1%9F%8D%E1%9E%93%E1%9F%83%E1%9E%9F%E1%9F%81%E1%9E%9A%E1%9E%B8%E1%9E%97%E1%9E%B6%E1%9E%9C%E1%9E%BC%E1%9E%94%E1%9E%93%E1%9E%B8%E1%9E%99%E1%9E%80%E1%9E%98%E1%9F%92%E1%9E%98%E1%9E%96%E1%9E%B6%E1%9E%8E%E1%9E%B7%E1%9E%87%E1%9F%92%E1%9E%87%E1%9E%80%E1%9E%98%E1%9F%92%E1%9E%98&amp;url=https%3A%2F%2Fwww.theseedcambodia.com%2Farticle%2F9171%2F&amp;via=The+SEED+Cambodia"
                                            title="Twitter"
                                            style="transition: opacity 0.2s; opacity: 1;">
                                            <div class="td-social-but-icon"><i class="bi bi-twitter-x"></i></div>
                                            <div class="td-social-but-text">Twitter</div>
                                        </a><a
                                            class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-linkedin"
                                            href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.theseedcambodia.com/article/9171/&amp;title=%E1%9E%9C%E1%9E%B7%E1%9E%85%E1%9E%B6%E1%9E%9A%E1%9E%8E%E1%9E%80%E1%9E%90%E1%9E%B6%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9F%E1%9E%BB%E1%9E%80%E1%9F%92%E1%9E%9A%E1%9F%96+%E1%9E%A2%E1%9E%8F%E1%9F%92%E1%9E%90%E1%9E%94%E1%9F%92%E1%9E%9A%E1%9E%99%E1%9F%84%E1%9E%87%E1%9E%93%E1%9F%8D%E1%9E%93%E1%9F%83%E1%9E%9F%E1%9F%81%E1%9E%9A%E1%9E%B8%E1%9E%97%E1%9E%B6%E1%9E%9C%E1%9E%BC%E1%9E%94%E1%9E%93%E1%9E%B8%E1%9E%99%E1%9E%80%E1%9E%98%E1%9F%92%E1%9E%98%E1%9E%96%E1%9E%B6%E1%9E%8E%E1%9E%B7%E1%9E%87%E1%9F%92%E1%9E%87%E1%9E%80%E1%9E%98%E1%9F%92%E1%9E%98"
                                            title="Linkedin"
                                            style="transition: opacity 0.2s; opacity: 1;">
                                            <div class="td-social-but-icon"><i class="bi bi-linkedin"></i></div>
                                            <div class="td-social-but-text">Linkedin</div>
                                        </a><a
                                            class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-telegram"
                                            href="https://telegram.me/share/url?url=https://www.theseedcambodia.com/article/9171/&amp;text=%E1%9E%9C%E1%9E%B7%E1%9E%85%E1%9E%B6%E1%9E%9A%E1%9E%8E%E1%9E%80%E1%9E%90%E1%9E%B6%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9F%E1%9E%BB%E1%9E%80%E1%9F%92%E1%9E%9A%E1%9F%96+%E1%9E%A2%E1%9E%8F%E1%9F%92%E1%9E%90%E1%9E%94%E1%9F%92%E1%9E%9A%E1%9E%99%E1%9F%84%E1%9E%87%E1%9E%93%E1%9F%8D%E1%9E%93%E1%9F%83%E1%9E%9F%E1%9F%81%E1%9E%9A%E1%9E%B8%E1%9E%97%E1%9E%B6%E1%9E%9C%E1%9E%BC%E1%9E%94%E1%9E%93%E1%9E%B8%E1%9E%99%E1%9E%80%E1%9E%98%E1%9F%92%E1%9E%98%E1%9E%96%E1%9E%B6%E1%9E%8E%E1%9E%B7%E1%9E%87%E1%9F%92%E1%9E%87%E1%9E%80%E1%9E%98%E1%9F%92%E1%9E%98"
                                            title="Telegram"
                                            style="transition: opacity 0.2s; opacity: 1;">
                                            <div class="td-social-but-icon"><i
                                                    class="td-icon-font bi bi-telegram"></i></div>
                                            <div class="td-social-but-text">Telegram</div>
                                        </a></div>
                                    <div class="td-social-sharing-hidden" style="display: none;">
                                        <ul class="td-pulldown-filter-list"></ul><a
                                            class="td-social-sharing-button td-social-handler td-social-expand-tabs"
                                            href="#" data-block-uid="tdi_48" title="More">
                                            <div class="td-social-but-icon"><i
                                                    class="td-icon-plus td-social-expand-tabs-icon"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row_inner tdi_50  vc_row vc_inner wpb_row td-pb-row">

                                <div
                                    class="vc_column_inner tdi_52  wpb_column vc_column_container tdc-inner-column td-pb-span12">

                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="td_block_wrap tdb_single_content tdi_53 td-pb-border-top td_block_template_8 td-post-content tagdiv-type"
                                                data-td-block-uid="tdi_53">
                                                <div class="tdb-block-inner td-fix-index">

                                                    <div class="painting" >
                                                        <span
                                                            class="painting-by">សរសេរដោយ៖
                                                        </span>
                                                        <span class="by-name">
                                                        <?php echo isset($article['REFERENCE']) ? $article['REFERENCE'] : ''; ?>
                                                        <!-- <?php echo isset($article['AUTHOR_ID']) ? $article['AUTHOR_ID'] : ''; ?> -->
                                                        </span>
                                                    </div>
                                                    <br/>
                                                    <?php
                                                    if (isset($article['CONTENT'])) {
                                                        $content = $article['CONTENT'];

                                                        // If CONTENT is an OCILob, convert it to a string
                                                        if ($content instanceof OCILob) {
                                                            $content = $content->load();
                                                        }

                                                        // If it's an array, loop through and display
                                                        if (is_array($content)) {
                                                            foreach ($content as $paragraph) {
                                                                echo "<p class='s7'><span class='s6'>" . $paragraph . "</span></p>";
                                                            }
                                                        } else {
                                                            // Otherwise, just display the content as a single text block
                                                            echo "<p class='s7'><span class='s6'>" . $content . "</span></p>";
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="wpb_wrapper wpb_text_column td_block_wrap td_block_wrap vc_column_text tdi_54  tagdiv-type td-pb-border-top td_block_template_8"
                                                data-td-block-uid="tdi_54">
                                                <style></style>
                                                <div class="td-block-title-wrap"></div>
                                                <div class="td-fix-index">
                                                    <div class="author-list">
                                                        <div>ចួលរួម 1$ ដើម្បីគាំទ្រអ្នកសរសេរអត្ថបទ
                                                            និង វិចិត្រករ</div>
                                                        <div class="btn-donate">
                                                            <a href="https://link.payway.com.kh/aba?id=06B8C67F56D0&amp;code=820757&amp;acc=002474927&amp;amount=1.0"
                                                                target="_blank"
                                                                class="telegram-link">
                                                                <span>ABA Donate</span>
                                                            </a>
                                                            <a href="https://qrla.acledabank.com.kh/acleda?payment_data=qWY5B2SAUfIhLblxzOtfu7HJYJVYXQbirYweb5jfDQB+vlWzzDNVhiLFfMrkbeR4qTExpoBG0ptuiIljb1yYHd3zCIPcBMWYUAUAlfsiYyEtS6Xh+IzVThAk8gsUsxFvZ5GpkSMWj1nbfRkxDMYAbpQxRelheHPn9LEDspYuG30HhqDwAwWysoqvrOydGdb5la2tMUx3LLtzDgfJEEHQPwYHlclxdc7wJGucsffQmh4y1mTIl0TmdFDGdCe43Zpf&amp;key=khqr"
                                                                target="_blank"
                                                                class="telegram-link">
                                                                <span>Acleda Donate</span>
                                                            </a>
                                                        </div>
                                                        <div><span class="by">អត្ថបទដោយ៖
                                                            </span><span class="by-name"><?php echo $article['NAME_IN_KH'] ?></span></div>
                                                    </div>



                                                </div>
                                            </div>
                                            <div
                                                class="wpb_wrapper td_block_separator td_block_wrap vc_separator tdi_56  td_separator_solid td_separator_center">
                                                <span
                                                    style="border-color:#c6c6c6;border-width:1px;width:100%;"></span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="vc_row_inner tdi_58  vc_row vc_inner wpb_row td-pb-row tdc-row-content-vert-center">

                                <div
                                    class="vc_column_inner tdi_60  wpb_column vc_column_container tdc-inner-column td-pb-span7">

                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                                
                                <div
                                    class="vc_column_inner tdi_63  wpb_column vc_column_container tdc-inner-column td-pb-span5">

                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="td_block_wrap tdb_single_post_share tdi_64  td-pb-border-top footer-social td_block_template_8"
                                                data-td-block-uid="tdi_64">

                                                <div id="tdi_64"
                                                    class="td-post-sharing tdb-block td-ps-bg td-ps-notext td-ps-rounded td-post-sharing-style3 ">
                                                    <div class="td-post-sharing-visible"><a
                                                            class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook"
                                                            href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.theseedcambodia.com%2Farticle%2F9171%2F"
                                                            title="Facebook"
                                                            style="transition: opacity 0.2s; opacity: 1;">
                                                            <div class="td-social-but-icon"><i
                                                            class="td-icon-font bi bi-facebook"></i>
                                                            </div>
                                                            <div class="td-social-but-text">Facebook
                                                            </div>
                                                        </a><a
                                                            class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-twitter"
                                                            href="https://twitter.com/intent/tweet?text=%E1%9E%9C%E1%9E%B7%E1%9E%85%E1%9E%B6%E1%9E%9A%E1%9E%8E%E1%9E%80%E1%9E%90%E1%9E%B6%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9F%E1%9E%BB%E1%9E%80%E1%9F%92%E1%9E%9A%E1%9F%96+%E1%9E%A2%E1%9E%8F%E1%9F%92%E1%9E%90%E1%9E%94%E1%9F%92%E1%9E%9A%E1%9E%99%E1%9F%84%E1%9E%87%E1%9E%93%E1%9F%8D%E1%9E%93%E1%9F%83%E1%9E%9F%E1%9F%81%E1%9E%9A%E1%9E%B8%E1%9E%97%E1%9E%B6%E1%9E%9C%E1%9E%BC%E1%9E%94%E1%9E%93%E1%9E%B8%E1%9E%99%E1%9E%80%E1%9E%98%E1%9F%92%E1%9E%98%E1%9E%96%E1%9E%B6%E1%9E%8E%E1%9E%B7%E1%9E%87%E1%9F%92%E1%9E%87%E1%9E%80%E1%9E%98%E1%9F%92%E1%9E%98&amp;url=https%3A%2F%2Fwww.theseedcambodia.com%2Farticle%2F9171%2F&amp;via=The+SEED+Cambodia"
                                                            title="Twitter"
                                                            style="transition: opacity 0.2s; opacity: 1;">
                                                            <div class="td-social-but-icon"><i class="bi bi-twitter-x"></i>
                                                            </div>
                                                            <div class="td-social-but-text">Twitter
                                                            </div>
                                                        </a><a
                                                            class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-linkedin"
                                                            href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.theseedcambodia.com/article/9171/&amp;title=%E1%9E%9C%E1%9E%B7%E1%9E%85%E1%9E%B6%E1%9E%9A%E1%9E%8E%E1%9E%80%E1%9E%90%E1%9E%B6%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9F%E1%9E%BB%E1%9E%80%E1%9F%92%E1%9E%9A%E1%9F%96+%E1%9E%A2%E1%9E%8F%E1%9F%92%E1%9E%90%E1%9E%94%E1%9F%92%E1%9E%9A%E1%9E%99%E1%9F%84%E1%9E%87%E1%9E%93%E1%9F%8D%E1%9E%93%E1%9F%83%E1%9E%9F%E1%9F%81%E1%9E%9A%E1%9E%B8%E1%9E%97%E1%9E%B6%E1%9E%9C%E1%9E%BC%E1%9E%94%E1%9E%93%E1%9E%B8%E1%9E%99%E1%9E%80%E1%9E%98%E1%9F%92%E1%9E%98%E1%9E%96%E1%9E%B6%E1%9E%8E%E1%9E%B7%E1%9E%87%E1%9F%92%E1%9E%87%E1%9E%80%E1%9E%98%E1%9F%92%E1%9E%98"
                                                            title="Linkedin"
                                                            style="transition: opacity 0.2s; opacity: 1;">
                                                            <div class="td-social-but-icon"><i class="bi bi-linkedin"></i>
                                                            </div>
                                                            <div class="td-social-but-text">Linkedin
                                                            </div>
                                                        </a><a
                                                            class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-telegram"
                                                            href="https://telegram.me/share/url?url=https://www.theseedcambodia.com/article/9171/&amp;text=%E1%9E%9C%E1%9E%B7%E1%9E%85%E1%9E%B6%E1%9E%9A%E1%9E%8E%E1%9E%80%E1%9E%90%E1%9E%B6%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9F%E1%9E%BB%E1%9E%80%E1%9F%92%E1%9E%9A%E1%9F%96+%E1%9E%A2%E1%9E%8F%E1%9F%92%E1%9E%90%E1%9E%94%E1%9F%92%E1%9E%9A%E1%9E%99%E1%9F%84%E1%9E%87%E1%9E%93%E1%9F%8D%E1%9E%93%E1%9F%83%E1%9E%9F%E1%9F%81%E1%9E%9A%E1%9E%B8%E1%9E%97%E1%9E%B6%E1%9E%9C%E1%9E%BC%E1%9E%94%E1%9E%93%E1%9E%B8%E1%9E%99%E1%9E%80%E1%9E%98%E1%9F%92%E1%9E%98%E1%9E%96%E1%9E%B6%E1%9E%8E%E1%9E%B7%E1%9E%87%E1%9F%92%E1%9E%87%E1%9E%80%E1%9E%98%E1%9F%92%E1%9E%98"
                                                            title="Telegram"
                                                            style="transition: opacity 0.2s; opacity: 1;">
                                                            <div class="td-social-but-icon"><i
                                                            class="td-icon-font bi bi-telegram"></i>
                                                            </div>
                                                            <div class="td-social-but-text">Telegram
                                                            </div>
                                                        </a></div>
                                                    <div class="td-social-sharing-hidden"
                                                        style="display: none;">
                                                        <ul class="td-pulldown-filter-list"></ul><a
                                                            class="td-social-sharing-button td-social-handler td-social-expand-tabs"
                                                            href="#" data-block-uid="tdi_64"
                                                            title="More">
                                                            <div class="td-social-but-icon"><i
                                                                    class="td-icon-plus td-social-expand-tabs-icon"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="td_block_wrap td-a-rec td-a-rec-id-custom-spot td-a-rec-img tdi_65 td_block_template_8">

                                <div style="display: inline-block"><a
                                        href="https://www.youtube.com/channel/UC04ID6s_adcUDQ1Mp6JNH6g"
                                        target="blank" class="td_spot_img_all"><img
                                            src="https://www.theseedcambodia.com/wp-content/uploads/2021/08/The-SEED-is-on.png"
                                            alt="spot_img"></a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div
                        class="vc_column tdi_67  wpb_column vc_column_container tdc-column td-pb-span4 td-is-sticky">

                        <div class="wpb_wrapper" data-sticky-offset="20"
                            data-sticky-is-width-auto="W3RydWUsZmFsc2UsZmFsc2UsZmFsc2Vd"
                            style="width: 282px; position: static; top: auto; bottom: auto; z-index: 1;">
                            <div class="clearfix"></div>
                            <div
                                class="td_block_wrap td-a-rec td-a-rec-id-custom-spot td-a-rec-img tdi_68 td_block_template_8">

                                <div style="display: inline-block"><a
                                        href="https://www.instagram.com/the_seed_cambodia/"
                                        target="blank" class="td_spot_img_all"><img
                                            src="https://www.theseedcambodia.com/wp-content/uploads/2021/08/Subscribe-Instagr-The-SEED-2.png"
                                            alt="spot_img"></a></div>
                            </div>
                            <div class="td_block_wrap td_flex_block_1 tdi_69 td-pb-border-top blog-list-image-right  td_block_template_8 td_flex_block"
                                data-td-block-uid="tdi_69">

                                <div class="td-block-title-wrap">
                                    <h4 class="td-block-title"><span>អត្ថបទពេញនិយម</span></h4>
                                </div>
                                <div id="tdi_69" class="td_block_inner td-mc1-wrap">
                                    <div
                                        class="td_module_flex td_module_flex_1 td_module_wrap td-animation-stack td-cpt-post">
                                        <div class="td-module-container td-category-pos-">
                                            <div class="td-image-container">
                                                <div class="td-module-thumb"><a
                                                        href="https://www.theseedcambodia.com/article/6151/"
                                                        rel="bookmark" class="td-image-wrap "
                                                        title="តើកិច្ចសន្យាការងារ​មានប៉ុន្មានប្រភេទ?"><span
                                                            class="entry-thumb td-thumb-css td-animation-stack-type1-2"
                                                            data-type="css_image"
                                                            data-img-url="https://www.theseedcambodia.com/wp-content/uploads/2021/08/website-cover-11.png"
                                                            style="background-image: url(&quot;https://www.theseedcambodia.com/wp-content/uploads/2021/08/website-cover-11.png&quot;)"></span></a>
                                                </div>
                                            </div>

                                            <div class="td-module-meta-info">

                                                <h3 class="entry-title td-module-title"><a
                                                        href="https://www.theseedcambodia.com/article/6151/"
                                                        rel="bookmark"
                                                        title="តើកិច្ចសន្យាការងារ​មានប៉ុន្មានប្រភេទ?">តើកិច្ចសន្យាការងារ​មានប៉ុន្មានប្រភេទ?</a>
                                                </h3>




                                            </div>
                                        </div>
                                    </div>


                                    <div
                                        class="td_module_flex td_module_flex_1 td_module_wrap td-animation-stack td-cpt-post">
                                        <div class="td-module-container td-category-pos-">
                                            <div class="td-image-container">
                                                <div class="td-module-thumb"><a
                                                        href="https://www.theseedcambodia.com/article/7895/"
                                                        rel="bookmark" class="td-image-wrap "
                                                        title="ការវិវត្តនៃបដិវត្តន៍ឧស្សាហកម្ម"><span
                                                            class="entry-thumb td-thumb-css td-animation-stack-type1-2"
                                                            data-type="css_image"
                                                            data-img-url="https://www.theseedcambodia.com/wp-content/uploads/2021/10/website-cover-33-1-696x392.png"
                                                            style="background-image: url(&quot;https://www.theseedcambodia.com/wp-content/uploads/2021/10/website-cover-33-1-696x392.png&quot;)"></span></a>
                                                </div>
                                            </div>

                                            <div class="td-module-meta-info">

                                                <h3 class="entry-title td-module-title"><a
                                                        href="https://www.theseedcambodia.com/article/7895/"
                                                        rel="bookmark"
                                                        title="ការវិវត្តនៃបដិវត្តន៍ឧស្សាហកម្ម">ការវិវត្តនៃបដិវត្តន៍ឧស្សាហកម្ម</a>
                                                </h3>




                                            </div>
                                        </div>
                                    </div>


                                    <div
                                        class="td_module_flex td_module_flex_1 td_module_wrap td-animation-stack td-cpt-post">
                                        <div class="td-module-container td-category-pos-">
                                            <div class="td-image-container">
                                                <div class="td-module-thumb"><a
                                                        href="https://www.theseedcambodia.com/article/6041/"
                                                        rel="bookmark" class="td-image-wrap "
                                                        title="វិបត្តិសេដ្ឋកិច្ចពិភពលោកឆ្នាំ ១៩២៩"><span
                                                            class="entry-thumb td-thumb-css td-animation-stack-type1-2"
                                                            data-type="css_image"
                                                            data-img-url="https://www.theseedcambodia.com/wp-content/uploads/2021/06/website-cover-13.png"
                                                            style="background-image: url(&quot;https://www.theseedcambodia.com/wp-content/uploads/2021/06/website-cover-13.png&quot;)"></span></a>
                                                </div>
                                            </div>

                                            <div class="td-module-meta-info">

                                                <h3 class="entry-title td-module-title"><a
                                                        href="https://www.theseedcambodia.com/article/6041/"
                                                        rel="bookmark"
                                                        title="វិបត្តិសេដ្ឋកិច្ចពិភពលោកឆ្នាំ ១៩២៩">វិបត្តិសេដ្ឋកិច្ចពិភពលោកឆ្នាំ
                                                        ១៩២៩</a></h3>




                                            </div>
                                        </div>
                                    </div>


                                    <div
                                        class="td_module_flex td_module_flex_1 td_module_wrap td-animation-stack td-cpt-post">
                                        <div class="td-module-container td-category-pos-">
                                            <div class="td-image-container">
                                                <div class="td-module-thumb"><a
                                                        href="https://www.theseedcambodia.com/article/5964/"
                                                        rel="bookmark" class="td-image-wrap "
                                                        title="តើសង្គមនិយម និង កុម្មុយនីស្ដនិយម មានអ្វីខុសគ្នាខ្លះ?"><span
                                                            class="entry-thumb td-thumb-css td-animation-stack-type1-2"
                                                            data-type="css_image"
                                                            data-img-url="https://www.theseedcambodia.com/wp-content/uploads/2021/06/website-cover-5.png"
                                                            style="background-image: url(&quot;https://www.theseedcambodia.com/wp-content/uploads/2021/06/website-cover-5.png&quot;)"></span></a>
                                                </div>
                                            </div>

                                            <div class="td-module-meta-info">

                                                <h3 class="entry-title td-module-title"><a
                                                        href="https://www.theseedcambodia.com/article/5964/"
                                                        rel="bookmark"
                                                        title="តើសង្គមនិយម និង កុម្មុយនីស្ដនិយម មានអ្វីខុសគ្នាខ្លះ?">តើសង្គមនិយម
                                                        និង កុម្មុយនីស្ដនិយម មានអ្វីខុសគ្នាខ្លះ?</a>
                                                </h3>




                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tdi_70" class="tdc-row stretch_row_1200 td-stretch-content">
                <div class="vc_row tdi_71  wpb_row td-pb-row tdc-element-style">

                    <div class="tdi_70_rand_style td-element-style">

                    </div>
                    <div
                        class="vc_column tdi_73  wpb_column vc_column_container tdc-column td-pb-span12">

                        <div class="wpb_wrapper">
                            <div class="td_block_wrap td_flex_block_5 tdi_74 td-pb-border-top break-content-100 td_block_template_8 td_ajax_preloading_preload td_flex_block"
                                data-td-block-uid="tdi_74">

                                <div class="td-block-title-wrap">
                                    <h4 class="td-block-title"><span>អត្ថបទទាក់ទង</span></h4>
                                </div>
                                <div id="tdi_74" class="td_block_inner td-mc1-wrap">
                                    <div
                                        class="td_module_flex td_module_flex_5 td_module_wrap td-animation-stack td-cpt-post">
                                        <div class="td-module-container td-category-pos-">
                                            <div
                                                class="td-module-meta-info td-module-meta-info-top">
                                            </div>
                                            <div class="td-image-container">
                                                <div class="td-module-thumb"><a
                                                        href="https://www.theseedcambodia.com/article/9213/"
                                                        rel="bookmark" class="td-image-wrap "
                                                        title="វិចារណកថាថ្ងៃសុក្រ៖ ប្រៀបធៀបប្រព័ន្ធនយោបាយរវាងសហរដ្ឋអាមេរិក និង ចក្រភពអង់គ្លេស"><span
                                                            class="entry-thumb td-thumb-css td-animation-stack-type1-2"
                                                            style="background-image: url('https://www.theseedcambodia.com/wp-content/uploads/2025/03/website-cover-25-696x392.png')"></span></a>
                                                </div>
                                            </div>

                                            <div
                                                class="td-module-meta-info td-module-meta-info-bottom">
                                                <div class="td-editor-date"><a
                                                        href="https://www.theseedcambodia.com/article/category/%e1%9e%9c%e1%9e%b7%e1%9e%85%e1%9e%b6%e1%9e%9a%e1%9e%8e%e1%9e%80%e1%9e%90%e1%9e%b6%e1%9e%90%e1%9f%92%e1%9e%84%e1%9f%83%e1%9e%9f%e1%9e%bb%e1%9e%80%e1%9f%92%e1%9e%9a/%e1%9e%93%e1%9e%99%e1%9f%84%e1%9e%94%e1%9e%b6%e1%9e%99%e1%9e%80%e1%9e%b6%e1%9e%9a%e1%9e%94%e1%9e%9a%e1%9e%91%e1%9f%81%e1%9e%9f/"
                                                        class="td-post-category">នយោបាយការបរទេស</a><span
                                                        class="td-author-date"><span
                                                            class="td-post-author-name"><a
                                                                href="https://www.theseedcambodia.com/article/author/theseed/">The
                                                                Seed Cambodia</a> <span>-</span>
                                                        </span><span class="td-post-date"><time
                                                                class="entry-date updated td-module-date"
                                                                datetime="2025-03-19T15:42:48+07:00">5
                                                                days មុន</time></span></span></div>
                                                <h3 class="entry-title td-module-title"><a
                                                        href="https://www.theseedcambodia.com/article/9213/"
                                                        rel="bookmark"
                                                        title="វិចារណកថាថ្ងៃសុក្រ៖ ប្រៀបធៀបប្រព័ន្ធនយោបាយរវាងសហរដ្ឋអាមេរិក និង ចក្រភពអង់គ្លេស">វិចារណកថាថ្ងៃសុក្រ៖
                                                        ប្រៀបធៀបប្រព័ន្ធនយោបាយរវាងសហរដ្ឋអាមេរិក និង
                                                        ចក្រភពអង់គ្លេស</a></h3>
                                            </div>
                                        </div>
                                    </div>


                                    <div
                                        class="td_module_flex td_module_flex_5 td_module_wrap td-animation-stack td-cpt-post">
                                        <div class="td-module-container td-category-pos-">
                                            <div
                                                class="td-module-meta-info td-module-meta-info-top">
                                            </div>
                                            <div class="td-image-container">
                                                <div class="td-module-thumb"><a
                                                        href="https://www.theseedcambodia.com/article/9194/"
                                                        rel="bookmark" class="td-image-wrap "
                                                        title="វិចារណកថាថ្ងៃសុក្រ៖​ តើហេតុអ្វីបានជារដ្ឋបាលរបស់ដូណាល់ត្រាំតម្លើងពន្ធគយទៅកាណាដា និងមិចស៊ិកូច្រើនជាងចិន?"><span
                                                            class="entry-thumb td-thumb-css td-animation-stack-type1-2"
                                                            style="background-image: url('https://www.theseedcambodia.com/wp-content/uploads/2025/02/website-cover-22-696x392.png')"></span></a>
                                                </div>
                                            </div>

                                            <div
                                                class="td-module-meta-info td-module-meta-info-bottom">
                                                <div class="td-editor-date"><a
                                                        href="https://www.theseedcambodia.com/article/category/%e1%9e%9c%e1%9e%b7%e1%9e%85%e1%9e%b6%e1%9e%9a%e1%9e%8e%e1%9e%80%e1%9e%90%e1%9e%b6%e1%9e%90%e1%9f%92%e1%9e%84%e1%9f%83%e1%9e%9f%e1%9e%bb%e1%9e%80%e1%9f%92%e1%9e%9a/%e1%9e%93%e1%9e%99%e1%9f%84%e1%9e%94%e1%9e%b6%e1%9e%99%e1%9e%80%e1%9e%b6%e1%9e%9a%e1%9e%94%e1%9e%9a%e1%9e%91%e1%9f%81%e1%9e%9f/"
                                                        class="td-post-category">នយោបាយការបរទេស</a><span
                                                        class="td-author-date"><span
                                                            class="td-post-author-name"><a
                                                                href="https://www.theseedcambodia.com/article/author/theseed/">The
                                                                Seed Cambodia</a> <span>-</span>
                                                        </span><span class="td-post-date"><time
                                                                class="entry-date updated td-module-date"
                                                                datetime="2025-02-14T17:15:17+07:00">February
                                                                14, 2025</time></span></span></div>
                                                <h3 class="entry-title td-module-title"><a
                                                        href="https://www.theseedcambodia.com/article/9194/"
                                                        rel="bookmark"
                                                        title="វិចារណកថាថ្ងៃសុក្រ៖​ តើហេតុអ្វីបានជារដ្ឋបាលរបស់ដូណាល់ត្រាំតម្លើងពន្ធគយទៅកាណាដា និងមិចស៊ិកូច្រើនជាងចិន?">វិចារណកថាថ្ងៃសុក្រ៖​
                                                        តើហេតុអ្វីបានជារដ្ឋបាលរបស់ដូណាល់ត្រាំតម្លើងពន្ធគយទៅកាណាដា
                                                        និងមិចស៊ិកូច្រើនជាងចិន?</a></h3>
                                            </div>
                                        </div>
                                    </div>


                                    <div
                                        class="td_module_flex td_module_flex_5 td_module_wrap td-animation-stack td-cpt-post">
                                        <div class="td-module-container td-category-pos-">
                                            <div
                                                class="td-module-meta-info td-module-meta-info-top">
                                            </div>
                                            <div class="td-image-container">
                                                <div class="td-module-thumb"><a
                                                        href="https://www.theseedcambodia.com/article/9183/"
                                                        rel="bookmark" class="td-image-wrap "
                                                        title="កម្មវិធីវិចារណកថាថ្ងៃសុក្រ៖ ការចូលរួមរបស់ឥណ្ឌូនេស៊ីជាសមាជិក BRICS និងការសម្លឹងចូលរួមពីសមាជិកអាស៊ានមួយចំនួន"><span
                                                            class="entry-thumb td-thumb-css td-animation-stack-type1-2"
                                                            style="background-image: url('https://www.theseedcambodia.com/wp-content/uploads/2025/02/website-cover-18-696x392.png')"></span></a>
                                                </div>
                                            </div>

                                            <div
                                                class="td-module-meta-info td-module-meta-info-bottom">
                                                <div class="td-editor-date"><a
                                                        href="https://www.theseedcambodia.com/article/category/%e1%9e%9c%e1%9e%b7%e1%9e%85%e1%9e%b6%e1%9e%9a%e1%9e%8e%e1%9e%80%e1%9e%90%e1%9e%b6%e1%9e%90%e1%9f%92%e1%9e%84%e1%9f%83%e1%9e%9f%e1%9e%bb%e1%9e%80%e1%9f%92%e1%9e%9a/%e1%9e%93%e1%9e%99%e1%9f%84%e1%9e%94%e1%9e%b6%e1%9e%99%e1%9e%80%e1%9e%b6%e1%9e%9a%e1%9e%94%e1%9e%9a%e1%9e%91%e1%9f%81%e1%9e%9f/"
                                                        class="td-post-category">នយោបាយការបរទេស</a><span
                                                        class="td-author-date"><span
                                                            class="td-post-author-name"><a
                                                                href="https://www.theseedcambodia.com/article/author/theseed/">The
                                                                Seed Cambodia</a> <span>-</span>
                                                        </span><span class="td-post-date"><time
                                                                class="entry-date updated td-module-date"
                                                                datetime="2025-02-07T16:03:45+07:00">February
                                                                7, 2025</time></span></span></div>
                                                <h3 class="entry-title td-module-title"><a
                                                        href="https://www.theseedcambodia.com/article/9183/"
                                                        rel="bookmark"
                                                        title="កម្មវិធីវិចារណកថាថ្ងៃសុក្រ៖ ការចូលរួមរបស់ឥណ្ឌូនេស៊ីជាសមាជិក BRICS និងការសម្លឹងចូលរួមពីសមាជិកអាស៊ានមួយចំនួន">កម្មវិធីវិចារណកថាថ្ងៃសុក្រ៖
                                                        ការចូលរួមរបស់ឥណ្ឌូនេស៊ីជាសមាជិក BRICS
                                                        និងការសម្លឹងចូលរួមពីសមាជិកអាស៊ានមួយចំនួន</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>


                                    <div
                                        class="td_module_flex td_module_flex_5 td_module_wrap td-animation-stack td-cpt-post">
                                        <div class="td-module-container td-category-pos-">
                                            <div
                                                class="td-module-meta-info td-module-meta-info-top">
                                            </div>
                                            <div class="td-image-container">
                                                <div class="td-module-thumb"><a
                                                        href="https://www.theseedcambodia.com/article/9158/"
                                                        rel="bookmark" class="td-image-wrap "
                                                        title="វិចារណកថាថ្ងៃសុក្រ៖ ស្ថានភាពនៃទំនាក់ទំនងភូមិសាស្ត្រចិន និងវៀតណាម"><span
                                                            class="entry-thumb td-thumb-css td-animation-stack-type1-2"
                                                            style="background-image: url('https://www.theseedcambodia.com/wp-content/uploads/2025/01/website-cover-696x392.png')"></span></a>
                                                </div>
                                            </div>

                                            <div
                                                class="td-module-meta-info td-module-meta-info-bottom">
                                                <div class="td-editor-date"><a
                                                        href="https://www.theseedcambodia.com/article/category/%e1%9e%9c%e1%9e%b7%e1%9e%85%e1%9e%b6%e1%9e%9a%e1%9e%8e%e1%9e%80%e1%9e%90%e1%9e%b6%e1%9e%90%e1%9f%92%e1%9e%84%e1%9f%83%e1%9e%9f%e1%9e%bb%e1%9e%80%e1%9f%92%e1%9e%9a/%e1%9e%93%e1%9e%99%e1%9f%84%e1%9e%94%e1%9e%b6%e1%9e%99%e1%9e%80%e1%9e%b6%e1%9e%9a%e1%9e%94%e1%9e%9a%e1%9e%91%e1%9f%81%e1%9e%9f/"
                                                        class="td-post-category">នយោបាយការបរទេស</a><span
                                                        class="td-author-date"><span
                                                            class="td-post-author-name"><a
                                                                href="https://www.theseedcambodia.com/article/author/theseed/">The
                                                                Seed Cambodia</a> <span>-</span>
                                                        </span><span class="td-post-date"><time
                                                                class="entry-date updated td-module-date"
                                                                datetime="2025-01-24T17:43:38+07:00">January
                                                                24, 2025</time></span></span></div>
                                                <h3 class="entry-title td-module-title"><a
                                                        href="https://www.theseedcambodia.com/article/9158/"
                                                        rel="bookmark"
                                                        title="វិចារណកថាថ្ងៃសុក្រ៖ ស្ថានភាពនៃទំនាក់ទំនងភូមិសាស្ត្រចិន និងវៀតណាម">វិចារណកថាថ្ងៃសុក្រ៖
                                                        ស្ថានភាពនៃទំនាក់ទំនងភូមិសាស្ត្រចិន
                                                        និងវៀតណាម</a></h3>
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
    </div> <span class="td-page-meta" itemprop="author" itemscope=""
        itemtype="https://schema.org/Person">
        <meta itemprop="name" content="The Seed Cambodia">
        <meta itemprop="url" content="https://www.theseedcambodia.com/article/author/theseed/">
    </span>
    <meta itemprop="datePublished" content="2025-01-31T17:28:25+07:00">
    <meta itemprop="dateModified" content="2025-01-31T17:28:25+07:00">
    <meta itemscope="" itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage"
        itemid="https://www.theseedcambodia.com/article/9171/"><span class="td-page-meta"
        itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization"><span
            class="td-page-meta" itemprop="logo" itemscope=""
            itemtype="https://schema.org/ImageObject">
            <meta itemprop="url"
                content="https://www.theseedcambodia.com/wp-content/uploads/2021/01/cropped-THE-SEED-300x300.png">
        </span>
        <meta itemprop="name" content="The SEED Cambodia">
    </span>
    <meta itemprop="headline"
        content="វិចារណកថាថ្ងៃសុក្រ៖ អត្ថប្រយោជន៍នៃសេរីភាវូបនីយកម្មពាណិជ្ជកម្ម"><span
        class="td-page-meta" itemprop="image" itemscope=""
        itemtype="https://schema.org/ImageObject">
        <meta itemprop="url"
            content="https://www.theseedcambodia.com/wp-content/uploads/2025/01/website-cover-1.png">
        <meta itemprop="width" content="1280">
        <meta itemprop="height" content="720">
    </span>
</article>

<style>
    .tdi_68 {
        margin-top: 30px !important;
        margin-bottom: 40px !important
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_68 {
            margin-bottom: 30px !important
        }
    }
</style>
<style>
    .tdi_68.td-a-rec {
        text-align: center
    }

    .tdi_68.td-a-rec:not(.td-a-rec-no-translate) {
        transform: translateZ(0)
    }

    .tdi_68 .td-element-style {
        z-index: -1
    }

    .tdi_68 .td-spot-id-spot_img_hidden {
        display: none
    }

    .tdi_68 .td-adspot-title {
        display: block
    }
</style>
<style>
    .tdi_65 {
        margin-top: 30px !important
    }
</style>
<style>
    .tdi_65.td-a-rec {
        text-align: center
    }

    .tdi_65.td-a-rec:not(.td-a-rec-no-translate) {
        transform: translateZ(0)
    }

    .tdi_65 .td-element-style {
        z-index: -1
    }

    .tdi_65 .td-spot-id-spot_img_hidden {
        display: none
    }

    .tdi_65 .td-adspot-title {
        display: block
    }
</style>
<style scoped="">
    .tdi_67 {
        vertical-align: baseline
    }

    .tdi_67>.wpb_wrapper,
    .tdi_67>.wpb_wrapper>.tdc-elements {
        display: block
    }

    .tdi_67>.wpb_wrapper>.tdc-elements {
        width: 100%
    }

    .tdi_67>.wpb_wrapper>.vc_row_inner {
        width: auto
    }

    .tdi_67>.wpb_wrapper {
        width: auto;
        height: auto
    }

    .tdi_67 {
        width: 28% !important
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_67 {
            width: 240px !important
        }
    }

    @media (max-width:767px) {
        .tdi_67 {
            width: auto !important;
            display: none !important
        }
    }
</style>
<style scoped="">
    .tdi_58 {
        position: relative !important;
        top: 0;
        transform: none;
        -webkit-transform: none
    }

    .tdi_58,
    .tdi_58 .tdc-inner-columns {
        display: block
    }

    .tdi_58 .tdc-inner-columns {
        width: 100%
    }

    @media (min-width:767px) {

        .tdi_58.tdc-row-content-vert-center,
        .tdi_58.tdc-row-content-vert-center .tdc-inner-columns {
            display: flex;
            align-items: center;
            flex: 1
        }

        .tdi_58.tdc-row-content-vert-bottom,
        .tdi_58.tdc-row-content-vert-bottom .tdc-inner-columns {
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
</style>
<style scoped="">
    .tdi_60 {
        vertical-align: baseline
    }

    .tdi_60 .vc_column-inner>.wpb_wrapper,
    .tdi_60 .vc_column-inner>.wpb_wrapper .tdc-elements {
        display: block
    }

    .tdi_60 .vc_column-inner>.wpb_wrapper .tdc-elements {
        width: 100%
    }
</style>
<style scoped="">
    .tdi_63 {
        vertical-align: baseline
    }

    .tdi_63 .vc_column-inner>.wpb_wrapper,
    .tdi_63 .vc_column-inner>.wpb_wrapper .tdc-elements {
        display: block
    }

    .tdi_63 .vc_column-inner>.wpb_wrapper .tdc-elements {
        width: 100%
    }
</style>
<style>
    @media (max-width:767px) {
        .tdi_64 {
            margin-top: 20px !important
        }
    }
</style>
<style>
    .tdi_64 .td-post-sharing,
    .tdi_64 .tdb-share-classic {
        text-align: right
    }

    .tdi_64 .td-post-sharing-visible {
        align-items: flex-end
    }

    .tdi_64 .td-social-handler {
        border-color: rgba(163, 163, 163, 0)
    }

    .tdi_64 .td-social-share-text:before {
        border-color: transparent transparent transparent rgba(163, 163, 163, 0)
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

    .tdi_69 .td-block-title>* {
        color: #bb0000 !important
    }

    .tdi_69 .td-block-title>*:before,
    .tdi_69 .td-block-title>*:after {
        background-color: #bb0000 !important
    }
</style>
<style>
    .tdi_69 .td-image-wrap {
        padding-bottom: 70%
    }

    .tdi_69 .entry-thumb {
        background-position: center 50%
    }

    .tdi_69 .td-image-container {
        flex: 0 0 40%;
        width: 40%;
        display: block;
        order: 1
    }

    .ie10 .tdi_69 .td-image-container,
    .ie11 .tdi_69 .td-image-container {
        flex: 0 0 auto
    }

    .tdi_69 .td-module-container {
        flex-direction: row;
        border-color: #eaeaea !important
    }

    .tdi_69 .td-module-meta-info {
        flex: 1;
        border-color: #eaeaea
    }

    body .tdi_69 .td-favorite {
        font-size: 36px;
        box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.2)
    }

    .tdi_69 .td_module_wrap {
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 15px;
        margin-bottom: 15px
    }

    .tdi_69 .td_block_inner {
        margin-left: -20px;
        margin-right: -20px
    }

    .tdi_69 .td-module-container:before {
        bottom: -15px;
        border-color: #eaeaea
    }

    .tdi_69 .td-post-vid-time {
        display: block
    }

    .tdi_69 .td-post-category:not(.td-post-extra-category) {
        display: none
    }

    .tdi_69 .td-author-photo .avatar {
        width: 20px;
        height: 20px;
        margin-right: 6px;
        border-radius: 50%
    }

    .tdi_69 .td-excerpt {
        display: none;
        column-count: 1;
        column-gap: 48px
    }

    .tdi_69 .td-audio-player {
        opacity: 1;
        visibility: visible;
        height: auto;
        font-size: 13px
    }

    .tdi_69 .td-read-more {
        display: none
    }

    .tdi_69 .td-author-date {
        display: none
    }

    .tdi_69 .td-post-author-name {
        display: none
    }

    .tdi_69 .td-post-date,
    .tdi_69 .td-post-author-name span {
        display: none
    }

    .tdi_69 .entry-review-stars {
        display: none
    }

    .tdi_69 .td-icon-star,
    .tdi_69 .td-icon-star-empty,
    .tdi_69 .td-icon-star-half {
        font-size: 15px
    }

    .tdi_69 .td-module-comments {
        display: none
    }

    .tdi_69 .td_module_wrap:nth-last-child(1) {
        margin-bottom: 0;
        padding-bottom: 0
    }

    .tdi_69 .td_module_wrap:nth-last-child(1) .td-module-container:before {
        display: none
    }

    .tdi_69 .td-module-title a {
        box-shadow: inset 0 0 0 0 #000
    }

    .tdi_69 .entry-title {
        margin: 0 12px 0 0;
        font-size: 13.5px !important;
        line-height: 1.4 !important
    }

    .tdi_69 .td-block-title a,
    .tdi_69 .td-block-title span {
        font-size: 18px !important;
        line-height: 1.6 !important;
        font-weight: 500 !important
    }

    html:not([class*='ie']) .tdi_69 .td-module-container:hover .entry-thumb:before {
        opacity: 0
    }

    @media (min-width:768px) {
        .tdi_69 .td-module-title a {
            transition: all 0.2s ease;
            -webkit-transition: all 0.2s ease
        }
    }

    @media (min-width:1019px) and (max-width:1140px) {
        .tdi_69 .td_module_wrap {
            padding-bottom: 15px;
            margin-bottom: 15px
        }

        .tdi_69 .td-module-container:before {
            bottom: -15px
        }

        .tdi_69 .td_module_wrap {
            padding-bottom: 15px !important;
            margin-bottom: 15px !important
        }

        .tdi_69 .td_module_wrap:nth-last-child(1) {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important
        }

        .tdi_69 .td_module_wrap .td-module-container:before {
            display: block !important
        }

        .tdi_69 .td_module_wrap:nth-last-child(1) .td-module-container:before {
            display: none !important
        }

        .tdi_69 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        @media (min-width:768px) {
            .tdi_69 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_69 .td_module_wrap {
            padding-bottom: 15px;
            margin-bottom: 15px
        }

        .tdi_69 .td-module-container:before {
            bottom: -15px
        }

        .tdi_69 .td_module_wrap {
            padding-bottom: 15px !important;
            margin-bottom: 15px !important
        }

        .tdi_69 .td_module_wrap:nth-last-child(1) {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important
        }

        .tdi_69 .td_module_wrap .td-module-container:before {
            display: block !important
        }

        .tdi_69 .td_module_wrap:nth-last-child(1) .td-module-container:before {
            display: none !important
        }

        .tdi_69 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        @media (min-width:768px) {
            .tdi_69 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }
    }

    @media (max-width:767px) {
        .tdi_69 .td_module_wrap {
            padding-bottom: 15px;
            margin-bottom: 15px
        }

        .tdi_69 .td-module-container:before {
            bottom: -15px
        }

        .tdi_69 .td_module_wrap {
            padding-bottom: 15px !important;
            margin-bottom: 15px !important
        }

        .tdi_69 .td_module_wrap:nth-last-child(1) {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important
        }

        .tdi_69 .td_module_wrap .td-module-container:before {
            display: block !important
        }

        .tdi_69 .td_module_wrap:nth-last-child(1) .td-module-container:before {
            display: none !important
        }

        .tdi_69 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        @media (min-width:768px) {
            .tdi_69 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }
    }
</style>
<script>
    var block_tdi_69 = new tdBlock();
    block_tdi_69.id = "tdi_69";
    block_tdi_69.atts = '{"modules_on_row":"","limit":"4","hide_audio":"yes","custom_title":"\u17a2\u178f\u17d2\u1790\u1794\u1791\u1796\u17c1\u1789\u1793\u17b7\u1799\u1798","block_template_id":"td_block_template_8","border_color":"#bb0000","sort":"popular","all_modules_space":"30","image_height":"70","image_floated":"float_right","image_width":"40","show_excerpt":"none","show_review":"none","show_date":"none","show_author":"none","show_cat":"none","show_com":"none","show_btn":"none","f_header_font_size":"18","f_header_font_weight":"500","header_text_color":"#bb0000","f_title_font_size":"13.5","f_title_font_line_height":"1.4","art_title":"0 12px 0 0","el_class":"blog-list-image-right ","f_header_font_family":"file_2","f_header_font_line_height":"1.6","block_type":"td_flex_block_1","separator":"","custom_url":"","title_tag":"","mc1_tl":"","mc1_title_tag":"","mc1_el":"","post_ids":"-9171","category_id":"","taxonomies":"","category_ids":"","in_all_terms":"","tag_slug":"","autors_id":"","installed_post_types":"","include_cf_posts":"","exclude_cf_posts":"","linked_posts":"","favourite_only":"","offset":"","open_in_new_window":"","show_modified_date":"","time_ago":"","time_ago_add_txt":"ago","time_ago_txt_pos":"","review_source":"","td_query_cache":"","td_query_cache_expiration":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","td_ajax_preloading":"","container_width":"","modules_gap":"","m_padding":"","modules_border_size":"","modules_border_style":"","modules_border_color":"#eaeaea","modules_border_radius":"","modules_divider":"","modules_divider_color":"#eaeaea","h_effect":"","image_size":"","image_alignment":"50","image_radius":"","hide_image":"","show_favourites":"","fav_size":"2","fav_space":"","fav_ico_color":"","fav_ico_color_h":"","fav_bg":"","fav_bg_h":"","fav_shadow_shadow_header":"","fav_shadow_shadow_title":"Shadow","fav_shadow_shadow_size":"","fav_shadow_shadow_offset_horizontal":"","fav_shadow_shadow_offset_vertical":"","fav_shadow_shadow_spread":"","fav_shadow_shadow_color":"","video_icon":"","video_popup":"yes","video_rec":"","spot_header":"","video_rec_title":"","video_rec_color":"","video_rec_disable":"","autoplay_vid":"yes","show_vid_t":"block","vid_t_margin":"","vid_t_padding":"","video_title_color":"","video_title_color_h":"","video_bg":"","video_overlay":"","vid_t_color":"","vid_t_bg_color":"","f_vid_title_font_header":"","f_vid_title_font_title":"Video pop-up article title","f_vid_title_font_settings":"","f_vid_title_font_family":"","f_vid_title_font_size":"","f_vid_title_font_line_height":"","f_vid_title_font_style":"","f_vid_title_font_weight":"","f_vid_title_font_transform":"","f_vid_title_font_spacing":"","f_vid_title_":"","f_vid_time_font_title":"Video duration text","f_vid_time_font_settings":"","f_vid_time_font_family":"","f_vid_time_font_size":"","f_vid_time_font_line_height":"","f_vid_time_font_style":"","f_vid_time_font_weight":"","f_vid_time_font_transform":"","f_vid_time_font_spacing":"","f_vid_time_":"","meta_info_align":"","meta_info_horiz":"layout-default","meta_width":"","meta_margin":"","meta_padding":"","meta_space":"","art_btn":"","meta_info_border_size":"","meta_info_border_style":"","meta_info_border_color":"#eaeaea","meta_info_border_radius":"","modules_category":"","modules_category_margin":"","modules_category_padding":"","modules_cat_border":"","modules_category_radius":"0","modules_extra_cat":"","author_photo":"","author_photo_size":"","author_photo_space":"","author_photo_radius":"","review_space":"","review_size":"2.5","review_distance":"","art_excerpt":"","excerpt_col":"1","excerpt_gap":"","excerpt_middle":"","excerpt_inline":"","show_audio":"block","art_audio":"","art_audio_size":"1.5","btn_title":"","btn_margin":"","btn_padding":"","btn_border_width":"","btn_radius":"","pag_space":"","pag_padding":"","pag_border_width":"","pag_border_radius":"","prev_tdicon":"","next_tdicon":"","pag_icons_size":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_style":"","f_header_font_transform":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_family":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_family":"","f_more_font_size":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_weight":"","f_more_font_transform":"","f_more_font_spacing":"","f_more_":"","f_title_font_header":"","f_title_font_title":"Article title","f_title_font_settings":"","f_title_font_family":"","f_title_font_style":"","f_title_font_weight":"","f_title_font_transform":"","f_title_font_spacing":"","f_title_":"","f_cat_font_title":"Article category tag","f_cat_font_settings":"","f_cat_font_family":"","f_cat_font_size":"","f_cat_font_line_height":"","f_cat_font_style":"","f_cat_font_weight":"","f_cat_font_transform":"","f_cat_font_spacing":"","f_cat_":"","f_meta_font_title":"Article meta info","f_meta_font_settings":"","f_meta_font_family":"","f_meta_font_size":"","f_meta_font_line_height":"","f_meta_font_style":"","f_meta_font_weight":"","f_meta_font_transform":"","f_meta_font_spacing":"","f_meta_":"","f_ex_font_title":"Article excerpt","f_ex_font_settings":"","f_ex_font_family":"","f_ex_font_size":"","f_ex_font_line_height":"","f_ex_font_style":"","f_ex_font_weight":"","f_ex_font_transform":"","f_ex_font_spacing":"","f_ex_":"","f_btn_font_title":"Article read more button","f_btn_font_settings":"","f_btn_font_family":"","f_btn_font_size":"","f_btn_font_line_height":"","f_btn_font_style":"","f_btn_font_weight":"","f_btn_font_transform":"","f_btn_font_spacing":"","f_btn_":"","mix_color":"","mix_type":"","fe_brightness":"1","fe_contrast":"1","fe_saturate":"1","mix_color_h":"","mix_type_h":"","fe_brightness_h":"1","fe_contrast_h":"1","fe_saturate_h":"1","m_bg":"","color_overlay":"","shadow_shadow_header":"","shadow_shadow_title":"Module Shadow","shadow_shadow_size":"","shadow_shadow_offset_horizontal":"","shadow_shadow_offset_vertical":"","shadow_shadow_spread":"","shadow_shadow_color":"","title_txt":"","title_txt_hover":"","all_underline_height":"","all_underline_color":"","cat_bg":"","cat_bg_hover":"","cat_txt":"","cat_txt_hover":"","cat_border":"","cat_border_hover":"","meta_bg":"","author_txt":"","author_txt_hover":"","date_txt":"","ex_txt":"","com_bg":"","com_txt":"","rev_txt":"","audio_btn_color":"","audio_time_color":"","audio_bar_color":"","audio_bar_curr_color":"","shadow_m_shadow_header":"","shadow_m_shadow_title":"Meta info shadow","shadow_m_shadow_size":"","shadow_m_shadow_offset_horizontal":"","shadow_m_shadow_offset_vertical":"","shadow_m_shadow_spread":"","shadow_m_shadow_color":"","btn_bg":"","btn_bg_hover":"","btn_txt":"","btn_txt_hover":"","btn_border":"","btn_border_hover":"","pag_text":"","pag_h_text":"","pag_bg":"","pag_h_bg":"","pag_border":"","pag_h_border":"","ajax_pagination":"","ajax_pagination_next_prev_swipe":"","ajax_pagination_infinite_stop":"","css":"","tdc_css":"","td_column_number":1,"header_color":"","color_preset":"","border_top":"","class":"tdi_69","tdc_css_class":"tdi_69","tdc_css_class_style":"tdi_69_rand_style"}';
    block_tdi_69.td_column_number = "1";
    block_tdi_69.block_type = "td_flex_block_1";
    block_tdi_69.post_count = "4";
    block_tdi_69.found_posts = "360";
    block_tdi_69.header_color = "";
    block_tdi_69.ajax_pagination_infinite_stop = "";
    block_tdi_69.max_num_pages = "90";
    tdBlocksArray.push(block_tdi_69);
</script>
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
<style>
    .tdi_70_rand_style {
        background-color: #ffffff !important
    }
</style>
<style scoped="">
    .tdi_71,
    .tdi_71 .tdc-columns {
        min-height: 0
    }

    .tdi_71,
    .tdi_71 .tdc-columns {
        display: block
    }

    .tdi_71 .tdc-columns {
        width: 100%
    }

    .tdi_71 {
        padding-top: 50px !important;
        padding-bottom: 50px !important;
        position: relative
    }

    .tdi_71 .td_block_wrap {
        text-align: left
    }
</style>
<style>
    .tdi_74 .td-block-title>* {
        color: #bb0000 !important
    }

    .tdi_74 .td-block-title>*:before,
    .tdi_74 .td-block-title>*:after {
        background-color: #dddddd !important
    }

    .tdi_74 {
        margin-bottom: 0px !important
    }
</style>
<style>
    .tdi_74 .td_module_wrap {
        width: 25%;
        float: left
    }

    .tdi_74 .td_module_wrap:nth-child(4n+1) {
        clear: both
    }

    .tdi_74 .td_module_wrap:nth-last-child(-n+4) {
        margin-bottom: 0;
        padding-bottom: 0
    }

    .tdi_74 .td_module_wrap:nth-last-child(-n+4) .td-module-container:before {
        display: none
    }

    .tdi_74 .td_module_wrap {
        padding-left: 12.5px;
        padding-right: 12.5px;
        padding-bottom: 15px;
        margin-bottom: 15px;
        display: flex
    }

    .tdi_74 .td_block_inner {
        margin-left: -12.5px;
        margin-right: -12.5px;
        display: flex;
        flex-wrap: wrap
    }

    .tdi_74 .td-module-container:before {
        bottom: -15px
    }

    .tdi_74 .td-module-container {
        border-color: #eaeaea;
        flex-grow: 1
    }

    .tdi_74 .entry-thumb {
        background-position: center 50%
    }

    .tdi_74 .td-image-wrap {
        padding-bottom: 55%
    }

    body .tdi_74 .td-favorite {
        box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.2);
        font-size: 36px
    }

    .tdi_74 .td-post-vid-time {
        display: block
    }

    .tdi_74 .td-module-meta-info-bottom {
        padding: 20px 10px 0 0;
        background-color: #ffffff
    }

    .tdi_74 .td-module-meta-info {
        border-color: #eaeaea
    }

    .tdi_74 .entry-title {
        margin: 15px 0 0;
        font-size: 15px !important;
        line-height: 1.5 !important;
        font-weight: 500 !important
    }

    .tdi_74 .td-excerpt {
        display: none
    }

    .tdi_74 .td-audio-player {
        opacity: 1;
        visibility: visible;
        height: auto;
        font-size: 13px
    }

    .tdi_74 .td-post-category {
        padding: 3px 0 4px;
        background-color: rgba(0, 0, 0, 0);
        color: #bb0000;
        font-family: KhmerOSSiemreap !important
    }

    .tdi_74 .td-author-date {
        display: inline
    }

    .tdi_74 .td-post-author-name {
        display: none
    }

    .tdi_74 .td-author-photo .avatar {
        width: 20px;
        height: 20px;
        margin-right: 6px;
        border-radius: 50%
    }

    .tdi_74 .td-post-date,
    .tdi_74 .td-post-author-name span {
        display: inline-block;
        color: #000000
    }

    .tdi_74 .entry-review-stars {
        display: inline-block
    }

    .tdi_74 .td-icon-star,
    .tdi_74 .td-icon-star-empty,
    .tdi_74 .td-icon-star-half {
        font-size: 15px
    }

    .tdi_74 .td-module-comments {
        display: none
    }

    .tdi_74 .td-read-more {
        display: none
    }

    .tdi_74.td_with_ajax_pagination .td-next-prev-wrap a,
    .tdi_74 .td-load-more-wrap a {
        border-width: 0px;
        color: #e3382b;
        background-color: #ffffff
    }

    .tdi_74 .td-module-title a {
        color: #000000;
        box-shadow: inset 0 0 0 0 #000
    }

    .tdi_74 .td_module_wrap:hover .td-module-title a {
        color: #e3382b !important
    }

    .tdi_74 .td-post-author-name a {
        color: #000000
    }

    .tdi_74 .td-post-author-name:hover a {
        color: #dd3333
    }

    .tdi_74 .td-load-more-wrap a .td-load-more-icon-svg svg,
    .tdi_74 .td-load-more-wrap a .td-load-more-icon-svg svg *,
    .tdi_74.td_with_ajax_pagination .td-next-prev-wrap .td-next-prev-icon-svg svg,
    .tdi_74.td_with_ajax_pagination .td-next-prev-wrap .td-next-prev-icon-svg svg * {
        fill: #e3382b
    }

    .tdi_74.td_with_ajax_pagination .td-next-prev-wrap a:hover,
    .tdi_74 .td-load-more-wrap a:hover {
        color: #000000;
        background-color: #ffffff !important;
        border-color: #ffffff !important
    }

    .tdi_74 .td-load-more-wrap a .td-load-more-icon-svg svg,
    .tdi_74 .td-load-more-wrap a .td-load-more-icon-svg svg *,
    .tdi_74.td_with_ajax_pagination .td-next-prev-wrap a:hover .td-next-prev-icon-svg svg,
    .tdi_74.td_with_ajax_pagination .td-next-prev-wrap a:hover .td-next-prev-icon-svg svg * {
        fill: #000000
    }

    .tdi_74 .td-block-title a,
    .tdi_74 .td-block-title span {
        font-size: 24px !important;
        line-height: 1.6 !important;
        font-weight: 500 !important;
        text-transform: uppercase !important
    }

    .tdi_74 .td-editor-date,
    .tdi_74 .td-editor-date .td-post-author-name a,
    .tdi_74 .td-editor-date .entry-date,
    .tdi_74 .td-module-comments a {
        font-family: KhmerOSSiemreap !important;
        font-size: 12px !important;
        line-height: 1 !important;
        font-weight: 500 !important;
        letter-spacing: 0.5px !important
    }

    .tdi_74 .td-read-more a {
        text-transform: uppercase !important
    }

    .tdi_74 .td-load-more-wrap a {
        font-size: 11px !important;
        font-weight: 500 !important;
        text-transform: uppercase !important
    }

    .tdi_74 .td-image-container {
        flex: 0 0 0
    }

    html:not([class*='ie']) .tdi_74 .td-module-container:hover .entry-thumb:before {
        opacity: 0
    }

    @media (min-width:768px) {
        .tdi_74 .td-module-title a {
            transition: all 0.2s ease;
            -webkit-transition: all 0.2s ease
        }
    }

    @media (min-width:1019px) and (max-width:1140px) {
        .tdi_74 .td_module_wrap {
            clear: none !important
        }

        .tdi_74 .td_module_wrap:nth-child(4n+1) {
            clear: both !important
        }

        .tdi_74 .td_module_wrap {
            padding-bottom: 15px !important;
            margin-bottom: 15px !important;
            padding-bottom: 15px;
            margin-bottom: 15px
        }

        .tdi_74 .td_module_wrap:nth-last-child(-n+4) {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important
        }

        .tdi_74 .td_module_wrap .td-module-container:before {
            display: block !important
        }

        .tdi_74 .td_module_wrap:nth-last-child(-n+4) .td-module-container:before {
            display: none !important
        }

        .tdi_74 .td-module-container:before {
            bottom: -15px
        }

        .tdi_74 .td-module-meta-info {
            max-width: 100%
        }

        .tdi_74 .td-image-container {
            margin: 0 0 0;
            width: auto
        }

        .tdi_74 .entry-title {
            margin: 10px 0 0
        }

        .tdi_74 .td-post-category {
            padding: 3px 0px 4px
        }

        .tdi_74 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        @media (min-width:768px) {
            .tdi_74 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_74 .td_module_wrap {
            clear: none !important
        }

        .tdi_74 .td_module_wrap:nth-child(4n+1) {
            clear: both !important
        }

        .tdi_74 .td_module_wrap {
            padding-bottom: 15px !important;
            margin-bottom: 15px !important;
            padding-left: 5px;
            padding-right: 5px;
            padding-bottom: 15px;
            margin-bottom: 15px
        }

        .tdi_74 .td_module_wrap:nth-last-child(-n+4) {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important
        }

        .tdi_74 .td_module_wrap .td-module-container:before {
            display: block !important
        }

        .tdi_74 .td_module_wrap:nth-last-child(-n+4) .td-module-container:before {
            display: none !important
        }

        .tdi_74 .td_block_inner {
            margin-left: -5px;
            margin-right: -5px
        }

        .tdi_74 .td-module-container:before {
            bottom: -15px
        }

        .tdi_74 .td-module-meta-info {
            max-width: 100%
        }

        .tdi_74 .td-module-meta-info-bottom {
            padding: 15px 5px 0 0
        }

        .tdi_74 .td-image-container {
            margin: 0 0 0;
            width: auto
        }

        .tdi_74 .entry-title {
            margin: 10px 0 0
        }

        .tdi_74 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        .tdi_74 .td-block-title a,
        .tdi_74 .td-block-title span {
            font-size: 14px !important
        }

        .tdi_74 .td-editor-date,
        .tdi_74 .td-editor-date .td-post-author-name a,
        .tdi_74 .td-editor-date .entry-date,
        .tdi_74 .td-module-comments a {
            font-size: 11px !important
        }

        @media (min-width:768px) {
            .tdi_74 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }
    }

    @media (max-width:767px) {
        .tdi_74 .td_module_wrap {
            width: 100%;
            float: left
        }

        .tdi_74 .td_module_wrap {
            padding-bottom: 12.5px !important;
            margin-bottom: 12.5px !important;
            padding-bottom: 12.5px;
            margin-bottom: 12.5px
        }

        .tdi_74 .td_module_wrap:nth-last-child(1) {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important
        }

        .tdi_74 .td_module_wrap .td-module-container:before {
            display: block !important
        }

        .tdi_74 .td_module_wrap:nth-last-child(1) .td-module-container:before {
            display: none !important
        }

        .tdi_74 .td-module-container:before {
            bottom: -12.5px
        }

        .tdi_74 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        .tdi_74 .td-block-title a,
        .tdi_74 .td-block-title span {
            font-size: 14px !important
        }

        @media (min-width:768px) {
            .tdi_74 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }
    }
</style>
<script>
    var block_tdi_74 = new tdBlock();
    block_tdi_74.id = "tdi_74";
    block_tdi_74.atts = '{"art_title_pos":"bottom","info_pos":"title","art_excerpt_pos":"bottom","modules_category":"","btn_pos":"bottom","limit":"4","show_btn":"none","show_com":"none","f_title_font_family":"","f_title_font_size":"15","f_title_font_line_height":"1.5","f_title_font_weight":"500","f_cat_font_family":"file_1","f_cat_font_weight":"","f_meta_font_family":"file_1","f_meta_font_size":"eyJhbGwiOiIxMiIsInBvcnRyYWl0IjoiMTEifQ==","f_meta_font_weight":"500","f_ex_font_family":"","tdc_css":"eyJhbGwiOnsibWFyZ2luLWJvdHRvbSI6IjAiLCJkaXNwbGF5IjoiIn19","cat_bg":"rgba(0,0,0,0)","art_title":"eyJhbGwiOiIxNXB4IDAgMCIsInBvcnRyYWl0IjoiMTBweCAwIDAiLCJsYW5kc2NhcGUiOiIxMHB4IDAgMCJ9","image_height":"eyJhbGwiOiI1NSIsImxhbmRzY2FwZSI6IjU1In0=","hide_image":"","category_id":"_related_cat","title_txt_hover":"#e3382b","modules_on_row":"eyJhbGwiOiIyNSUiLCJwaG9uZSI6IjEwMCUifQ==","modules_divider":"","modules_divider_color":"","author_txt":"#000000","sort":"","image_size":"","show_cat":"","show_excerpt":"none","meta_width":"eyJwb3J0cmFpdCI6IjEwMCUiLCJsYW5kc2NhcGUiOiIxMDAlIn0=","image_margin":"eyJsYW5kc2NhcGUiOiIwIDAgMCIsInBvcnRyYWl0IjoiMCAwIDAifQ==","title_txt":"#000000","meta_bg2":"#ffffff","meta_padding2":"eyJhbGwiOiIyMHB4IDEwcHggMCAwIiwibGFuZHNjYXBlIjoiMjBweCAxMHB4IDAgMCIsInBvcnRyYWl0IjoiMTVweCA1cHggMCAwIn0=","f_meta_font_transform":"","f_meta_font_spacing":"0.5","f_meta_font_line_height":"1","all_underline_color":"","date_txt":"#000000","all_modules_space":"eyJhbGwiOiIzMCIsImxhbmRzY2FwZSI6IjMwIiwicGhvbmUiOiIyNSJ9","modules_gap":"eyJhbGwiOiIyNSIsInBvcnRyYWl0IjoiMTAifQ==","block_template_id":"td_block_template_8","border_color":"#dddddd","td_ajax_filter_type":"","td_filter_default_txt":"Other","td_ajax_preloading":"preload","ajax_pagination":"","pag_border_width":"0","pag_text":"#e3382b","pag_h_text":"#000000","pag_bg":"#ffffff","pag_h_bg":"#ffffff","f_btn_font_family":"","f_btn_font_transform":"uppercase","f_btn_font_weight":"","f_more_font_size":"11","f_more_font_weight":"500","f_more_font_transform":"uppercase","f_more_font_family":"","f_header_font_size":"eyJhbGwiOiIyNCIsInBvcnRyYWl0IjoiMTQiLCJwaG9uZSI6IjE0In0=","f_header_font_weight":"500","f_header_font_transform":"uppercase","f_header_font_family":"file_2","custom_title":"\u17a2\u178f\u17d2\u1790\u1794\u1791\u1791\u17b6\u1780\u17cb\u1791\u1784","show_author":"eyJwb3J0cmFpdCI6Im5vbmUiLCJhbGwiOiJub25lIn0=","author_txt_hover":"#dd3333","header_text_color":"#bb0000","cat_txt":"#bb0000","time_ago_add_txt":"\u1798\u17bb\u1793","time_ago":"yes","el_class":"break-content-100","modules_category_padding":"eyJsYW5kc2NhcGUiOiIzcHggMHB4IDRweCIsImFsbCI6IjNweCAwIDRweCJ9","f_header_font_line_height":"1.6","block_type":"td_flex_block_5","separator":"","custom_url":"","title_tag":"","mc5_tl":"","mc5_title_tag":"","mc5_el":"","post_ids":"-9171","taxonomies":"","category_ids":"","in_all_terms":"","tag_slug":"","autors_id":"","installed_post_types":"","include_cf_posts":"","exclude_cf_posts":"","linked_posts":"","favourite_only":"","offset":"","open_in_new_window":"","show_modified_date":"","time_ago_txt_pos":"","review_source":"","td_query_cache":"","td_query_cache_expiration":"","td_ajax_filter_ids":"","m_padding":"","modules_border_size":"","modules_border_style":"","modules_border_color":"#eaeaea","divider_on":"","h_effect":"","image_alignment":"50","image_radius":"","show_favourites":"","fav_size":"2","fav_space":"","fav_ico_color":"","fav_ico_color_h":"","fav_bg":"","fav_bg_h":"","fav_shadow_shadow_header":"","fav_shadow_shadow_title":"Shadow","fav_shadow_shadow_size":"","fav_shadow_shadow_offset_horizontal":"","fav_shadow_shadow_offset_vertical":"","fav_shadow_shadow_spread":"","fav_shadow_shadow_color":"","video_icon":"","video_popup":"yes","video_rec":"","spot_header":"","video_rec_title":"","video_rec_color":"","video_rec_disable":"","autoplay_vid":"yes","show_vid_t":"block","vid_t_margin":"","vid_t_padding":"","video_title_color":"","video_title_color_h":"","video_bg":"","video_overlay":"","vid_t_color":"","vid_t_bg_color":"","f_vid_title_font_header":"","f_vid_title_font_title":"Video pop-up article title","f_vid_title_font_settings":"","f_vid_title_font_family":"","f_vid_title_font_size":"","f_vid_title_font_line_height":"","f_vid_title_font_style":"","f_vid_title_font_weight":"","f_vid_title_font_transform":"","f_vid_title_font_spacing":"","f_vid_title_":"","f_vid_time_font_title":"Video duration text","f_vid_time_font_settings":"","f_vid_time_font_family":"","f_vid_time_font_size":"","f_vid_time_font_line_height":"","f_vid_time_font_style":"","f_vid_time_font_weight":"","f_vid_time_font_transform":"","f_vid_time_font_spacing":"","f_vid_time_":"","meta_info_horiz":"content-horiz-left","meta_margin":"","meta_margin2":"","meta_padding":"","meta_info_border_size":"","meta_info_border_size2":"","meta_info_border_style":"","meta_info_border_color":"#eaeaea","meta_info_border_radius":"","meta_info_border_radius2":"","info_space":"","art_excerpt":"","excerpt_inline":"","meta_space":"","show_audio":"block","hide_audio":"","art_audio_pos":"top","art_audio":"","art_audio_size":"1.5","modules_category_margin":"","modules_category_border":"","modules_category_radius":"0","modules_extra_cat":"","author_photo":"","author_photo_size":"","author_photo_space":"","author_photo_radius":"","show_date":"inline-block","show_review":"inline-block","review_space":"","review_size":"2.5","review_distance":"","btn_title":"","btn_margin":"","btn_padding":"","btn_border_width":"","btn_radius":"","pag_space":"","pag_padding":"","pag_border_radius":"","prev_tdicon":"","next_tdicon":"","pag_icons_size":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_style":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_family":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_spacing":"","f_more_":"","f_title_font_header":"","f_title_font_title":"Article title","f_title_font_settings":"","f_title_font_style":"","f_title_font_transform":"","f_title_font_spacing":"","f_title_":"","f_cat_font_title":"Article category tag","f_cat_font_settings":"","f_cat_font_size":"","f_cat_font_line_height":"","f_cat_font_style":"","f_cat_font_transform":"","f_cat_font_spacing":"","f_cat_":"","f_meta_font_title":"Article meta info","f_meta_font_settings":"","f_meta_font_style":"","f_meta_":"","f_ex_font_title":"Article excerpt","f_ex_font_settings":"","f_ex_font_size":"","f_ex_font_line_height":"","f_ex_font_style":"","f_ex_font_weight":"","f_ex_font_transform":"","f_ex_font_spacing":"","f_ex_":"","f_btn_font_title":"Article read more button","f_btn_font_settings":"","f_btn_font_size":"","f_btn_font_line_height":"","f_btn_font_style":"","f_btn_font_spacing":"","f_btn_":"","mix_color":"","mix_type":"","fe_brightness":"1","fe_contrast":"1","fe_saturate":"1","mix_color_h":"","mix_type_h":"","fe_brightness_h":"1","fe_contrast_h":"1","fe_saturate_h":"1","m_bg":"","shadow_shadow_header":"","shadow_shadow_title":"Module Shadow","shadow_shadow_size":"","shadow_shadow_offset_horizontal":"","shadow_shadow_offset_vertical":"","shadow_shadow_spread":"","shadow_shadow_color":"","meta_bg":"","all_underline_height":"","cat_bg_hover":"","cat_txt_hover":"","cat_border":"","cat_border_hover":"","ex_txt":"","com_bg":"","com_txt":"","rev_txt":"","shadow_m_shadow_header":"","shadow_m_shadow_title":"Meta info shadow","shadow_m_shadow_size":"","shadow_m_shadow_offset_horizontal":"","shadow_m_shadow_offset_vertical":"","shadow_m_shadow_spread":"","shadow_m_shadow_color":"","audio_btn_color":"","audio_time_color":"","audio_bar_color":"","audio_bar_curr_color":"","btn_bg":"","btn_bg_hover":"","btn_txt":"","btn_txt_hover":"","btn_border":"","btn_border_hover":"","pag_border":"","pag_h_border":"","ajax_pagination_next_prev_swipe":"","ajax_pagination_infinite_stop":"","css":"","td_column_number":3,"header_color":"","color_preset":"","border_top":"","class":"tdi_74","tdc_css_class":"tdi_74","tdc_css_class_style":"tdi_74_rand_style","live_filter":"cur_post_same_categories","live_filter_cur_post_id":9171,"live_filter_cur_post_parent_id":0}';
    block_tdi_74.td_column_number = "3";
    block_tdi_74.block_type = "td_flex_block_5";
    block_tdi_74.post_count = "4";
    block_tdi_74.found_posts = "165";
    block_tdi_74.header_color = "";
    block_tdi_74.ajax_pagination_infinite_stop = "";
    block_tdi_74.max_num_pages = "42";
    tdBlocksArray.push(block_tdi_74);
</script>
<style scoped="">
    .td_block_separator {
        width: 100%;
        align-items: center;
        margin-bottom: 38px;
        padding-bottom: 10px
    }

    .td_block_separator span {
        position: relative;
        display: block;
        margin: 0 auto;
        width: 100%;
        height: 1px;
        border-top: 1px solid #EBEBEB
    }

    .td_separator_align_left span {
        margin-left: 0
    }

    .td_separator_align_right span {
        margin-right: 0
    }

    .td_separator_dashed span {
        border-top-style: dashed
    }

    .td_separator_dotted span {
        border-top-style: dotted
    }

    .td_separator_double span {
        height: 3px;
        border-bottom: 1px solid #EBEBEB
    }

    .td_separator_shadow>span {
        position: relative;
        height: 20px;
        overflow: hidden;
        border: 0;
        color: #EBEBEB
    }

    .td_separator_shadow>span>span {
        position: absolute;
        top: -30px;
        left: 0;
        right: 0;
        margin: 0 auto;
        height: 13px;
        width: 98%;
        border-radius: 100%
    }

    html :where([style*='border-width']) {
        border-style: none
    }

    .tdi_56 {
        margin-bottom: 20px !important;
        border-color: #777777 !important;
        border-style: solid !important;
        border-width: 0 !important
    }
</style>
<style scoped="">
    .tdi_52 {
        vertical-align: baseline
    }

    .tdi_52 .vc_column-inner>.wpb_wrapper,
    .tdi_52 .vc_column-inner>.wpb_wrapper .tdc-elements {
        display: block
    }

    .tdi_52 .vc_column-inner>.wpb_wrapper .tdc-elements {
        width: 100%
    }
</style>
<style scoped="">
    .tdi_50 {
        position: relative !important;
        top: 0;
        transform: none;
        -webkit-transform: none
    }

    .tdi_50,
    .tdi_50 .tdc-inner-columns {
        display: block
    }

    .tdi_50 .tdc-inner-columns {
        width: 100%
    }
</style>
<style>
    .td-post-sharing-classic {
        position: relative;
        height: 20px
    }

    .td-post-sharing {
        margin-left: -3px;
        margin-right: -3px;
        font-family: 'Open Sans', 'Open Sans Regular', sans-serif;
        z-index: 2;
        white-space: nowrap;
        opacity: 0
    }

    .td-post-sharing.td-social-show-all {
        white-space: normal
    }

    .td-js-loaded .td-post-sharing {
        -webkit-transition: opacity 0.3s;
        transition: opacity 0.3s;
        opacity: 1
    }

    .td-post-sharing-classic+.td-post-sharing {
        margin-top: 15px
    }

    @media (max-width:767px) {
        .td-post-sharing-classic+.td-post-sharing {
            margin-top: 8px
        }
    }

    .td-post-sharing-top {
        margin-bottom: 30px
    }

    @media (max-width:767px) {
        .td-post-sharing-top {
            margin-bottom: 20px
        }
    }

    .td-post-sharing-bottom {
        border-style: solid;
        border-color: #ededed;
        border-width: 1px 0;
        padding: 21px 0;
        margin-bottom: 42px
    }

    .td-post-sharing-bottom .td-post-sharing {
        margin-bottom: -7px
    }

    .td-post-sharing-visible,
    .td-social-sharing-hidden {
        display: inline-block
    }

    .td-social-sharing-hidden ul {
        display: none
    }

    .td-social-show-all .td-pulldown-filter-list {
        display: inline-block
    }

    .td-social-network,
    .td-social-handler {
        position: relative;
        display: inline-block;
        margin: 0 3px 7px;
        height: 40px;
        min-width: 40px;
        font-size: 11px;
        text-align: center;
        vertical-align: middle
    }

    .td-ps-notext .td-social-network .td-social-but-icon,
    .td-ps-notext .td-social-handler .td-social-but-icon {
        border-top-right-radius: 2px;
        border-bottom-right-radius: 2px
    }

    .td-social-network {
        color: #000;
        overflow: hidden
    }

    .td-social-network .td-social-but-icon {
        border-top-left-radius: 2px;
        border-bottom-left-radius: 2px
    }

    .td-social-network .td-social-but-text {
        border-top-right-radius: 2px;
        border-bottom-right-radius: 2px
    }

    .td-social-network:hover {
        opacity: 0.8 !important
    }

    .td-social-handler {
        color: #444;
        border: 1px solid #e9e9e9;
        border-radius: 2px
    }

    .td-social-handler .td-social-but-text {
        font-weight: 700
    }

    .td-social-handler .td-social-but-text:before {
        background-color: #000;
        opacity: 0.08
    }

    .td-social-share-text {
        margin-right: 18px
    }

    .td-social-share-text:before,
    .td-social-share-text:after {
        content: '';
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        left: 100%;
        width: 0;
        height: 0;
        border-style: solid
    }

    .td-social-share-text:before {
        border-width: 9px 0 9px 11px;
        border-color: transparent transparent transparent #e9e9e9
    }

    .td-social-share-text:after {
        border-width: 8px 0 8px 10px;
        border-color: transparent transparent transparent #fff
    }

    .td-social-but-text,
    .td-social-but-icon {
        display: inline-block;
        position: relative
    }

    .td-social-but-icon {
        padding-left: 13px;
        padding-right: 13px;
        line-height: 40px;
        z-index: 1
    }

    .td-social-but-icon i {
        position: relative;
        top: -1px;
        vertical-align: middle
    }

    .td-social-but-text {
        margin-left: -6px;
        padding-left: 12px;
        padding-right: 17px;
        line-height: 40px
    }

    .td-social-but-text:before {
        content: '';
        position: absolute;
        top: 12px;
        left: 0;
        width: 1px;
        height: 16px;
        background-color: #fff;
        opacity: 0.2;
        z-index: 1
    }

    .td-social-handler i,
    .td-social-facebook i,
    .td-social-reddit i,
    .td-social-linkedin i,
    .td-social-tumblr i,
    .td-social-stumbleupon i,
    .td-social-vk i,
    .td-social-viber i,
    .td-social-flipboard i,
    .td-social-koo i {
        font-size: 14px
    }

    .td-social-telegram i {
        font-size: 16px
    }

    .td-social-mail i,
    .td-social-line i,
    .td-social-print i {
        font-size: 15px
    }

    .td-social-handler .td-icon-share {
        top: -1px;
        left: -1px
    }

    .td-social-twitter .td-icon-twitter {
        font-size: 14px
    }

    .td-social-pinterest .td-icon-pinterest {
        font-size: 13px
    }

    .td-social-whatsapp .td-icon-whatsapp,
    .td-social-kakao .td-icon-kakao {
        font-size: 18px
    }

    .td-social-kakao .td-icon-kakao:before {
        color: #3C1B1D
    }

    .td-social-reddit .td-social-but-icon {
        padding-right: 12px
    }

    .td-social-reddit .td-icon-reddit {
        left: -1px
    }

    .td-social-telegram .td-social-but-icon {
        padding-right: 12px
    }

    .td-social-telegram .td-icon-telegram {
        left: -1px
    }

    .td-social-stumbleupon .td-social-but-icon {
        padding-right: 11px
    }

    .td-social-stumbleupon .td-icon-stumbleupon {
        left: -2px
    }

    .td-social-digg .td-social-but-icon {
        padding-right: 11px
    }

    .td-social-digg .td-icon-digg {
        left: -2px;
        font-size: 17px
    }

    .td-social-vk .td-social-but-icon {
        padding-right: 11px
    }

    .td-social-vk .td-icon-vk {
        left: -2px
    }

    .td-social-naver .td-icon-naver {
        left: -1px;
        font-size: 16px
    }

    .td-social-gettr .td-icon-gettr {
        font-size: 25px
    }

    .td-ps-notext .td-social-gettr .td-icon-gettr {
        left: -5px
    }

    .td-social-copy_url {
        position: relative
    }

    .td-social-copy_url-check {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        opacity: 0;
        pointer-events: none;
        transition: opacity .2s ease-in-out;
        z-index: 11
    }

    .td-social-copy_url .td-icon-copy_url {
        left: -1px;
        font-size: 17px
    }

    .td-social-copy_url-disabled {
        pointer-events: none
    }

    .td-social-copy_url-disabled .td-icon-copy_url {
        opacity: 0
    }

    .td-social-copy_url-copied .td-social-copy_url-check {
        opacity: 1
    }

    @keyframes social_copy_url_loader {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    .td-social-expand-tabs i {
        top: -2px;
        left: -1px;
        font-size: 16px
    }

    @media (min-width:767px) {

        .td-social-line,
        .td-social-viber {
            display: none
        }
    }

    .td-ps-bg .td-social-network {
        color: #fff
    }

    .td-ps-bg .td-social-facebook .td-social-but-icon,
    .td-ps-bg .td-social-facebook .td-social-but-text {
        background-color: #516eab
    }

    .td-ps-bg .td-social-twitter .td-social-but-icon,
    .td-ps-bg .td-social-twitter .td-social-but-text {
        background-color: #29c5f6
    }

    .td-ps-bg .td-social-pinterest .td-social-but-icon,
    .td-ps-bg .td-social-pinterest .td-social-but-text {
        background-color: #ca212a
    }

    .td-ps-bg .td-social-whatsapp .td-social-but-icon,
    .td-ps-bg .td-social-whatsapp .td-social-but-text {
        background-color: #7bbf6a
    }

    .td-ps-bg .td-social-reddit .td-social-but-icon,
    .td-ps-bg .td-social-reddit .td-social-but-text {
        background-color: #f54200
    }

    .td-ps-bg .td-social-mail .td-social-but-icon,
    .td-ps-bg .td-social-digg .td-social-but-icon,
    .td-ps-bg .td-social-copy_url .td-social-but-icon,
    .td-ps-bg .td-social-mail .td-social-but-text,
    .td-ps-bg .td-social-digg .td-social-but-text,
    .td-ps-bg .td-social-copy_url .td-social-but-text {
        background-color: #000
    }

    .td-ps-bg .td-social-print .td-social-but-icon,
    .td-ps-bg .td-social-print .td-social-but-text {
        background-color: #333
    }

    .td-ps-bg .td-social-linkedin .td-social-but-icon,
    .td-ps-bg .td-social-linkedin .td-social-but-text {
        background-color: #0266a0
    }

    .td-ps-bg .td-social-tumblr .td-social-but-icon,
    .td-ps-bg .td-social-tumblr .td-social-but-text {
        background-color: #3e5a70
    }

    .td-ps-bg .td-social-telegram .td-social-but-icon,
    .td-ps-bg .td-social-telegram .td-social-but-text {
        background-color: #179cde
    }

    .td-ps-bg .td-social-stumbleupon .td-social-but-icon,
    .td-ps-bg .td-social-stumbleupon .td-social-but-text {
        background-color: #ee4813
    }

    .td-ps-bg .td-social-vk .td-social-but-icon,
    .td-ps-bg .td-social-vk .td-social-but-text {
        background-color: #4c75a3
    }

    .td-ps-bg .td-social-line .td-social-but-icon,
    .td-ps-bg .td-social-line .td-social-but-text {
        background-color: #00b900
    }

    .td-ps-bg .td-social-viber .td-social-but-icon,
    .td-ps-bg .td-social-viber .td-social-but-text {
        background-color: #5d54a4
    }

    .td-ps-bg .td-social-naver .td-social-but-icon,
    .td-ps-bg .td-social-naver .td-social-but-text {
        background-color: #3ec729
    }

    .td-ps-bg .td-social-flipboard .td-social-but-icon,
    .td-ps-bg .td-social-flipboard .td-social-but-text {
        background-color: #f42827
    }

    .td-ps-bg .td-social-kakao .td-social-but-icon,
    .td-ps-bg .td-social-kakao .td-social-but-text {
        background-color: #f9e000
    }

    .td-ps-bg .td-social-gettr .td-social-but-icon,
    .td-ps-bg .td-social-gettr .td-social-but-text {
        background-color: #fc223b
    }

    .td-ps-bg .td-social-koo .td-social-but-icon,
    .td-ps-bg .td-social-koo .td-social-but-text {
        background-color: #facd00
    }

    .td-ps-dark-bg .td-social-network {
        color: #fff
    }

    .td-ps-dark-bg .td-social-network .td-social-but-icon,
    .td-ps-dark-bg .td-social-network .td-social-but-text {
        background-color: #000
    }

    .td-ps-border .td-social-network .td-social-but-icon,
    .td-ps-border .td-social-network .td-social-but-text {
        line-height: 38px;
        border-width: 1px;
        border-style: solid
    }

    .td-ps-border .td-social-network .td-social-but-text {
        border-left-width: 0
    }

    .td-ps-border .td-social-network .td-social-but-text:before {
        background-color: #000;
        opacity: 0.08
    }

    .td-ps-border.td-ps-padding .td-social-network .td-social-but-icon {
        border-right-width: 0
    }

    .td-ps-border.td-ps-padding .td-social-network.td-social-expand-tabs .td-social-but-icon {
        border-right-width: 1px
    }

    .td-ps-border-grey .td-social-but-icon,
    .td-ps-border-grey .td-social-but-text {
        border-color: #e9e9e9
    }

    .td-ps-border-colored .td-social-facebook .td-social-but-icon,
    .td-ps-border-colored .td-social-facebook .td-social-but-text {
        border-color: #516eab
    }

    .td-ps-border-colored .td-social-twitter .td-social-but-icon,
    div.td-ps-border-colored .td-social-twitter .td-social-but-text {
        border-color: #29c5f6;
        color: #29c5f6
    }

    .td-ps-border-colored .td-social-pinterest .td-social-but-icon,
    .td-ps-border-colored .td-social-pinterest .td-social-but-text {
        border-color: #ca212a
    }

    .td-ps-border-colored .td-social-whatsapp .td-social-but-icon,
    .td-ps-border-colored .td-social-whatsapp .td-social-but-text {
        border-color: #7bbf6a
    }

    .td-ps-border-colored .td-social-reddit .td-social-but-icon,
    .td-ps-border-colored .td-social-reddit .td-social-but-text {
        border-color: #f54200
    }

    .td-ps-border-colored .td-social-mail .td-social-but-icon,
    .td-ps-border-colored .td-social-digg .td-social-but-icon,
    .td-ps-border-colored .td-social-copy_url .td-social-but-icon,
    .td-ps-border-colored .td-social-mail .td-social-but-text,
    .td-ps-border-colored .td-social-digg .td-social-but-text,
    .td-ps-border-colored .td-social-copy_url .td-social-but-text {
        border-color: #000
    }

    .td-ps-border-colored .td-social-print .td-social-but-icon,
    .td-ps-border-colored .td-social-print .td-social-but-text {
        border-color: #333
    }

    .td-ps-border-colored .td-social-linkedin .td-social-but-icon,
    .td-ps-border-colored .td-social-linkedin .td-social-but-text {
        border-color: #0266a0
    }

    .td-ps-border-colored .td-social-tumblr .td-social-but-icon,
    .td-ps-border-colored .td-social-tumblr .td-social-but-text {
        border-color: #3e5a70
    }

    .td-ps-border-colored .td-social-telegram .td-social-but-icon,
    .td-ps-border-colored .td-social-telegram .td-social-but-text {
        border-color: #179cde
    }

    .td-ps-border-colored .td-social-stumbleupon .td-social-but-icon,
    .td-ps-border-colored .td-social-stumbleupon .td-social-but-text {
        border-color: #ee4813
    }

    .td-ps-border-colored .td-social-vk .td-social-but-icon,
    .td-ps-border-colored .td-social-vk .td-social-but-text {
        border-color: #4c75a3
    }

    .td-ps-border-colored .td-social-line .td-social-but-icon,
    .td-ps-border-colored .td-social-line .td-social-but-text {
        border-color: #00b900
    }

    .td-ps-border-colored .td-social-viber .td-social-but-icon,
    .td-ps-border-colored .td-social-viber .td-social-but-text {
        border-color: #5d54a4
    }

    .td-ps-border-colored .td-social-naver .td-social-but-icon,
    .td-ps-border-colored .td-social-naver .td-social-but-text {
        border-color: #3ec729
    }

    .td-ps-border-colored .td-social-flipboard .td-social-but-icon,
    .td-ps-border-colored .td-social-flipboard .td-social-but-text {
        border-color: #f42827
    }

    .td-ps-border-colored .td-social-kakao .td-social-but-icon,
    .td-ps-border-colored .td-social-kakao .td-social-but-text {
        border-color: #f9e000
    }

    .td-ps-border-colored .td-social-gettr .td-social-but-icon,
    .td-ps-border-colored .td-social-gettr .td-social-but-text {
        border-color: #fc223b
    }

    .td-ps-border-colored .td-social-koo .td-social-but-icon,
    .td-ps-border-colored .td-social-koo .td-social-but-text {
        border-color: #facd00
    }

    .td-ps-icon-bg .td-social-but-icon {
        height: 100%;
        border-color: transparent !important
    }

    .td-ps-icon-bg .td-social-network .td-social-but-icon {
        color: #fff
    }

    .td-ps-icon-bg .td-social-facebook .td-social-but-icon {
        background-color: #516eab
    }

    .td-ps-icon-bg .td-social-twitter .td-social-but-icon {
        background-color: #29c5f6
    }

    .td-ps-icon-bg .td-social-pinterest .td-social-but-icon {
        background-color: #ca212a
    }

    .td-ps-icon-bg .td-social-whatsapp .td-social-but-icon {
        background-color: #7bbf6a
    }

    .td-ps-icon-bg .td-social-reddit .td-social-but-icon {
        background-color: #f54200
    }

    .td-ps-icon-bg .td-social-mail .td-social-but-icon,
    .td-ps-icon-bg .td-social-digg .td-social-but-icon,
    .td-ps-icon-bg .td-social-copy_url .td-social-but-icon {
        background-color: #000
    }

    .td-ps-icon-bg .td-social-print .td-social-but-icon {
        background-color: #333
    }

    .td-ps-icon-bg .td-social-linkedin .td-social-but-icon {
        background-color: #0266a0
    }

    .td-ps-icon-bg .td-social-tumblr .td-social-but-icon {
        background-color: #3e5a70
    }

    .td-ps-icon-bg .td-social-telegram .td-social-but-icon {
        background-color: #179cde
    }

    .td-ps-icon-bg .td-social-stumbleupon .td-social-but-icon {
        background-color: #ee4813
    }

    .td-ps-icon-bg .td-social-vk .td-social-but-icon {
        background-color: #4c75a3
    }

    .td-ps-icon-bg .td-social-line .td-social-but-icon {
        background-color: #00b900
    }

    .td-ps-icon-bg .td-social-viber .td-social-but-icon {
        background-color: #5d54a4
    }

    .td-ps-icon-bg .td-social-naver .td-social-but-icon {
        background-color: #3ec729
    }

    .td-ps-icon-bg .td-social-flipboard .td-social-but-icon {
        background-color: #f42827
    }

    .td-ps-icon-bg .td-social-kakao .td-social-but-icon {
        background-color: #f9e000
    }

    .td-ps-icon-bg .td-social-gettr .td-social-but-icon {
        background-color: #fc223b
    }

    .td-ps-icon-bg .td-social-koo .td-social-but-icon {
        background-color: #facd00
    }

    .td-ps-icon-bg .td-social-but-text {
        margin-left: -3px
    }

    .td-ps-icon-bg .td-social-network .td-social-but-text:before {
        display: none
    }

    .td-ps-icon-arrow .td-social-network .td-social-but-icon:after {
        content: '';
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        left: calc(100% + 1px);
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 9px 0 9px 11px;
        border-color: transparent transparent transparent #000
    }

    .td-ps-icon-arrow .td-social-network .td-social-but-text {
        padding-left: 20px
    }

    .td-ps-icon-arrow .td-social-network .td-social-but-text:before {
        display: none
    }

    .td-ps-icon-arrow.td-ps-padding .td-social-network .td-social-but-icon:after {
        left: 100%
    }

    .td-ps-icon-arrow .td-social-facebook .td-social-but-icon:after {
        border-left-color: #516eab
    }

    .td-ps-icon-arrow .td-social-twitter .td-social-but-icon:after {
        border-left-color: #29c5f6
    }

    .td-ps-icon-arrow .td-social-pinterest .td-social-but-icon:after {
        border-left-color: #ca212a
    }

    .td-ps-icon-arrow .td-social-whatsapp .td-social-but-icon:after {
        border-left-color: #7bbf6a
    }

    .td-ps-icon-arrow .td-social-reddit .td-social-but-icon:after {
        border-left-color: #f54200
    }

    .td-ps-icon-arrow .td-social-mail .td-social-but-icon:after,
    .td-ps-icon-arrow .td-social-digg .td-social-but-icon:after,
    .td-ps-icon-arrow .td-social-copy_url .td-social-but-icon:after {
        border-left-color: #000
    }

    .td-ps-icon-arrow .td-social-print .td-social-but-icon:after {
        border-left-color: #333
    }

    .td-ps-icon-arrow .td-social-linkedin .td-social-but-icon:after {
        border-left-color: #0266a0
    }

    .td-ps-icon-arrow .td-social-tumblr .td-social-but-icon:after {
        border-left-color: #3e5a70
    }

    .td-ps-icon-arrow .td-social-telegram .td-social-but-icon:after {
        border-left-color: #179cde
    }

    .td-ps-icon-arrow .td-social-stumbleupon .td-social-but-icon:after {
        border-left-color: #ee4813
    }

    .td-ps-icon-arrow .td-social-vk .td-social-but-icon:after {
        border-left-color: #4c75a3
    }

    .td-ps-icon-arrow .td-social-line .td-social-but-icon:after {
        border-left-color: #00b900
    }

    .td-ps-icon-arrow .td-social-viber .td-social-but-icon:after {
        border-left-color: #5d54a4
    }

    .td-ps-icon-arrow .td-social-naver .td-social-but-icon:after {
        border-left-color: #3ec729
    }

    .td-ps-icon-arrow .td-social-flipboard .td-social-but-icon:after {
        border-left-color: #f42827
    }

    .td-ps-icon-arrow .td-social-kakao .td-social-but-icon:after {
        border-left-color: #f9e000
    }

    .td-ps-icon-arrow .td-social-gettr .td-social-but-icon:after {
        border-left-color: #fc223b
    }

    .td-ps-icon-arrow .td-social-koo .td-social-but-icon:after {
        border-left-color: #facd00
    }

    .td-ps-icon-arrow .td-social-expand-tabs .td-social-but-icon:after {
        display: none
    }

    .td-ps-icon-color .td-social-facebook .td-social-but-icon {
        color: #516eab
    }

    .td-ps-icon-color .td-social-pinterest .td-social-but-icon {
        color: #ca212a
    }

    .td-ps-icon-color .td-social-whatsapp .td-social-but-icon {
        color: #7bbf6a
    }

    .td-ps-icon-color .td-social-reddit .td-social-but-icon {
        color: #f54200
    }

    .td-ps-icon-color .td-social-mail .td-social-but-icon,
    .td-ps-icon-color .td-social-digg .td-social-but-icon,
    .td-ps-icon-color .td-social-copy_url .td-social-but-icon,
    .td-ps-icon-color .td-social-copy_url-check,
    .td-ps-icon-color .td-social-twitter .td-social-but-icon {
        color: #000
    }

    .td-ps-icon-color .td-social-print .td-social-but-icon {
        color: #333
    }

    .td-ps-icon-color .td-social-linkedin .td-social-but-icon {
        color: #0266a0
    }

    .td-ps-icon-color .td-social-tumblr .td-social-but-icon {
        color: #3e5a70
    }

    .td-ps-icon-color .td-social-telegram .td-social-but-icon {
        color: #179cde
    }

    .td-ps-icon-color .td-social-stumbleupon .td-social-but-icon {
        color: #ee4813
    }

    .td-ps-icon-color .td-social-vk .td-social-but-icon {
        color: #4c75a3
    }

    .td-ps-icon-color .td-social-line .td-social-but-icon {
        color: #00b900
    }

    .td-ps-icon-color .td-social-viber .td-social-but-icon {
        color: #5d54a4
    }

    .td-ps-icon-color .td-social-naver .td-social-but-icon {
        color: #3ec729
    }

    .td-ps-icon-color .td-social-flipboard .td-social-but-icon {
        color: #f42827
    }

    .td-ps-icon-color .td-social-kakao .td-social-but-icon {
        color: #f9e000
    }

    .td-ps-icon-color .td-social-gettr .td-social-but-icon {
        color: #fc223b
    }

    .td-ps-icon-color .td-social-koo .td-social-but-icon {
        color: #facd00
    }

    .td-ps-text-color .td-social-but-text {
        font-weight: 700
    }

    .td-ps-text-color .td-social-facebook .td-social-but-text {
        color: #516eab
    }

    .td-ps-text-color .td-social-twitter .td-social-but-text {
        color: #29c5f6
    }

    .td-ps-text-color .td-social-pinterest .td-social-but-text {
        color: #ca212a
    }

    .td-ps-text-color .td-social-whatsapp .td-social-but-text {
        color: #7bbf6a
    }

    .td-ps-text-color .td-social-reddit .td-social-but-text {
        color: #f54200
    }

    .td-ps-text-color .td-social-mail .td-social-but-text,
    .td-ps-text-color .td-social-digg .td-social-but-text,
    .td-ps-text-color .td-social-copy_url .td-social-but-text {
        color: #000
    }

    .td-ps-text-color .td-social-print .td-social-but-text {
        color: #333
    }

    .td-ps-text-color .td-social-linkedin .td-social-but-text {
        color: #0266a0
    }

    .td-ps-text-color .td-social-tumblr .td-social-but-text {
        color: #3e5a70
    }

    .td-ps-text-color .td-social-telegram .td-social-but-text {
        color: #179cde
    }

    .td-ps-text-color .td-social-stumbleupon .td-social-but-text {
        color: #ee4813
    }

    .td-ps-text-color .td-social-vk .td-social-but-text {
        color: #4c75a3
    }

    .td-ps-text-color .td-social-line .td-social-but-text {
        color: #00b900
    }

    .td-ps-text-color .td-social-viber .td-social-but-text {
        color: #5d54a4
    }

    .td-ps-text-color .td-social-naver .td-social-but-text {
        color: #3ec729
    }

    .td-ps-text-color .td-social-flipboard .td-social-but-text {
        color: #f42827
    }

    .td-ps-text-color .td-social-kakao .td-social-but-text {
        color: #f9e000
    }

    .td-ps-text-color .td-social-gettr .td-social-but-text {
        color: #fc223b
    }

    .td-ps-text-color .td-social-koo .td-social-but-text {
        color: #facd00
    }

    .td-ps-text-color .td-social-expand-tabs .td-social-but-text {
        color: #b1b1b1
    }

    .td-ps-notext .td-social-but-icon {
        width: 40px
    }

    .td-ps-notext .td-social-network .td-social-but-text {
        display: none
    }

    .td-ps-padding .td-social-network .td-social-but-icon {
        padding-left: 17px;
        padding-right: 17px
    }

    .td-ps-padding .td-social-handler .td-social-but-icon {
        width: 40px
    }

    .td-ps-padding .td-social-reddit .td-social-but-icon,
    .td-ps-padding .td-social-telegram .td-social-but-icon {
        padding-right: 16px
    }

    .td-ps-padding .td-social-stumbleupon .td-social-but-icon,
    .td-ps-padding .td-social-digg .td-social-but-icon,
    .td-ps-padding .td-social-expand-tabs .td-social-but-icon {
        padding-right: 13px
    }

    .td-ps-padding .td-social-vk .td-social-but-icon {
        padding-right: 14px
    }

    .td-ps-padding .td-social-expand-tabs .td-social-but-icon {
        padding-left: 13px
    }

    .td-ps-rounded .td-social-network .td-social-but-icon {
        border-top-left-radius: 100px;
        border-bottom-left-radius: 100px
    }

    .td-ps-rounded .td-social-network .td-social-but-text {
        border-top-right-radius: 100px;
        border-bottom-right-radius: 100px
    }

    .td-ps-rounded.td-ps-notext .td-social-network .td-social-but-icon {
        border-top-right-radius: 100px;
        border-bottom-right-radius: 100px
    }

    .td-ps-rounded .td-social-expand-tabs {
        border-radius: 100px
    }

    .td-ps-bar .td-social-network .td-social-but-icon,
    .td-ps-bar .td-social-network .td-social-but-text {
        -webkit-box-shadow: inset 0px -3px 0px 0px rgba(0, 0, 0, 0.31);
        box-shadow: inset 0px -3px 0px 0px rgba(0, 0, 0, 0.31)
    }

    .td-ps-bar .td-social-mail .td-social-but-icon,
    .td-ps-bar .td-social-digg .td-social-but-icon,
    .td-ps-bar .td-social-copy_url .td-social-but-icon,
    .td-ps-bar .td-social-mail .td-social-but-text,
    .td-ps-bar .td-social-digg .td-social-but-text,
    .td-ps-bar .td-social-copy_url .td-social-but-text {
        -webkit-box-shadow: inset 0px -3px 0px 0px rgba(255, 255, 255, 0.28);
        box-shadow: inset 0px -3px 0px 0px rgba(255, 255, 255, 0.28)
    }

    .td-ps-bar .td-social-print .td-social-but-icon,
    .td-ps-bar .td-social-print .td-social-but-text {
        -webkit-box-shadow: inset 0px -3px 0px 0px rgba(255, 255, 255, 0.2);
        box-shadow: inset 0px -3px 0px 0px rgba(255, 255, 255, 0.2)
    }

    .td-ps-big .td-social-but-icon {
        display: block;
        line-height: 60px
    }

    .td-ps-big .td-social-but-icon .td-icon-share {
        width: auto
    }

    .td-ps-big .td-social-handler .td-social-but-text:before {
        display: none
    }

    .td-ps-big .td-social-share-text .td-social-but-icon {
        width: 90px
    }

    .td-ps-big .td-social-expand-tabs .td-social-but-icon {
        width: 60px
    }

    @media (max-width:767px) {
        .td-ps-big .td-social-share-text {
            display: none
        }
    }

    .td-ps-big .td-social-facebook i,
    .td-ps-big .td-social-reddit i,
    .td-ps-big .td-social-mail i,
    .td-ps-big .td-social-linkedin i,
    .td-ps-big .td-social-tumblr i,
    .td-ps-big .td-social-stumbleupon i {
        margin-top: -2px
    }

    .td-ps-big .td-social-facebook i,
    .td-ps-big .td-social-reddit i,
    .td-ps-big .td-social-linkedin i,
    .td-ps-big .td-social-tumblr i,
    .td-ps-big .td-social-stumbleupon i,
    .td-ps-big .td-social-vk i,
    .td-ps-big .td-social-viber i,
    .td-ps-big .td-social-fliboard i,
    .td-ps-big .td-social-koo i,
    .td-ps-big .td-social-share-text i {
        font-size: 22px
    }

    .td-ps-big .td-social-telegram i {
        font-size: 24px
    }

    .td-ps-big .td-social-mail i,
    .td-ps-big .td-social-line i,
    .td-ps-big .td-social-print i {
        font-size: 23px
    }

    .td-ps-big .td-social-twitter i,
    .td-ps-big .td-social-expand-tabs i {
        font-size: 20px
    }

    .td-ps-big .td-social-whatsapp i,
    .td-ps-big .td-social-naver i,
    .td-ps-big .td-social-flipboard i,
    .td-ps-big .td-social-kakao i {
        font-size: 26px
    }

    .td-ps-big .td-social-pinterest .td-icon-pinterest {
        font-size: 21px
    }

    .td-ps-big .td-social-telegram .td-icon-telegram {
        left: 1px
    }

    .td-ps-big .td-social-stumbleupon .td-icon-stumbleupon {
        left: -2px
    }

    .td-ps-big .td-social-digg .td-icon-digg {
        left: -1px;
        font-size: 25px
    }

    .td-ps-big .td-social-vk .td-icon-vk {
        left: -1px
    }

    .td-ps-big .td-social-naver .td-icon-naver {
        left: 0
    }

    .td-ps-big .td-social-gettr .td-icon-gettr {
        left: -1px
    }

    .td-ps-big .td-social-copy_url .td-icon-copy_url {
        left: 0;
        font-size: 25px
    }

    .td-ps-big .td-social-copy_url-check {
        font-size: 18px
    }

    .td-ps-big .td-social-but-text {
        margin-left: 0;
        padding-top: 0;
        padding-left: 17px
    }

    .td-ps-big.td-ps-notext .td-social-network,
    .td-ps-big.td-ps-notext .td-social-handler {
        height: 60px
    }

    .td-ps-big.td-ps-notext .td-social-network {
        width: 60px
    }

    .td-ps-big.td-ps-notext .td-social-network .td-social-but-icon {
        width: 60px
    }

    .td-ps-big.td-ps-notext .td-social-share-text .td-social-but-icon {
        line-height: 40px
    }

    .td-ps-big.td-ps-notext .td-social-share-text .td-social-but-text {
        display: block;
        line-height: 1
    }

    .td-ps-big.td-ps-padding .td-social-network,
    .td-ps-big.td-ps-padding .td-social-handler {
        height: 90px;
        font-size: 13px
    }

    .td-ps-big.td-ps-padding .td-social-network {
        min-width: 60px
    }

    .td-ps-big.td-ps-padding .td-social-but-icon {
        border-bottom-left-radius: 0;
        border-top-right-radius: 2px
    }

    .td-ps-big.td-ps-padding.td-ps-bar .td-social-but-icon {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .td-ps-big.td-ps-padding .td-social-but-text {
        display: block;
        padding-bottom: 17px;
        line-height: 1;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-bottom-left-radius: 2px
    }

    .td-ps-big.td-ps-padding .td-social-but-text:before {
        display: none
    }

    .td-ps-big.td-ps-padding .td-social-expand-tabs i {
        line-height: 90px
    }

    .td-ps-nogap {
        margin-left: 0;
        margin-right: 0
    }

    .td-ps-nogap .td-social-network,
    .td-ps-nogap .td-social-handler {
        margin-left: 0;
        margin-right: 0;
        border-radius: 0
    }

    .td-ps-nogap .td-social-network .td-social-but-icon,
    .td-ps-nogap .td-social-network .td-social-but-text {
        border-radius: 0
    }

    .td-ps-nogap .td-social-expand-tabs {
        border-radius: 0
    }

    .td-post-sharing-style7 .td-social-network .td-social-but-icon {
        height: 100%
    }

    .td-post-sharing-style7 .td-social-network .td-social-but-icon:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.31)
    }

    .td-post-sharing-style7 .td-social-network .td-social-but-text {
        padding-left: 17px
    }

    .td-post-sharing-style7 .td-social-network .td-social-but-text:before {
        display: none
    }

    .td-post-sharing-style7 .td-social-mail .td-social-but-icon:before,
    .td-post-sharing-style7 .td-social-digg .td-social-but-icon:before,
    .td-post-sharing-style7 .td-social-copy_url .td-social-but-icon:before {
        background-color: rgba(255, 255, 255, 0.2)
    }

    .td-post-sharing-style7 .td-social-print .td-social-but-icon:before {
        background-color: rgba(255, 255, 255, 0.1)
    }

    @media (max-width:767px) {

        .td-post-sharing-style1 .td-social-share-text .td-social-but-text,
        .td-post-sharing-style3 .td-social-share-text .td-social-but-text,
        .td-post-sharing-style5 .td-social-share-text .td-social-but-text,
        .td-post-sharing-style14 .td-social-share-text .td-social-but-text,
        .td-post-sharing-style16 .td-social-share-text .td-social-but-text {
            display: none !important
        }
    }

    @media (max-width:767px) {

        .td-post-sharing-style2 .td-social-share-text,
        .td-post-sharing-style4 .td-social-share-text,
        .td-post-sharing-style6 .td-social-share-text,
        .td-post-sharing-style7 .td-social-share-text,
        .td-post-sharing-style15 .td-social-share-text,
        .td-post-sharing-style17 .td-social-share-text,
        .td-post-sharing-style18 .td-social-share-text,
        .td-post-sharing-style19 .td-social-share-text,
        .td-post-sharing-style20 .td-social-share-text {
            display: none !important
        }
    }
</style>
<style>
    .tdi_48 {
        border-color: #c6c6c6 !important;
        border-style: solid !important;
        border-width: 0px 0px 1px 0px !important
    }

    @media(min-width:1141px) {
        .tdi_48 {
            display: block !important
        }
    }
</style>
<style>
    .tdb_single_post_share {
        margin-bottom: 23px
    }

    .tdb-share-classic {
        position: relative;
        height: 20px;
        margin-bottom: 15px
    }

    .td-post-sharing-show-all-icons .td-social-sharing-hidden .td-social-expand-tabs {
        display: none
    }

    .td-post-sharing_display-vertically .td-post-sharing-visible,
    .td-post-sharing_display-vertically .td-social-sharing-hidden {
        display: flex;
        flex-direction: column
    }

    .tdi_48 .td-post-sharing,
    .tdi_48 .tdb-share-classic {
        text-align: right
    }

    .tdi_48 .td-post-sharing-visible {
        align-items: flex-end
    }

    .tdi_48 .td-social-handler {
        border-color: rgba(221, 51, 51, 0)
    }

    .tdi_48 .td-social-share-text:before {
        border-color: transparent transparent transparent rgba(221, 51, 51, 0)
    }

    .tdi_48 .td-ps-border .td-social-sharing-button .td-social-but-icon,
    .tdi_48 .td-ps-border .td-social-sharing-button .td-social-but-text,
    .tdi_48 .td-ps-border .td-social-sharing-button .td-social-handler {
        border-color: rgba(255, 255, 255, 0)
    }
</style>
<style>
    .tdi_43_rand_style {
        background-color: #faf5ee !important
    }
</style>
<style>
    .tdi_47 {
        margin-top: 30px !important;
        margin-bottom: 5px !important
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_47 {
            margin-top: 25px !important;
            margin-bottom: 25px !important
        }
    }

    @media (max-width:767px) {
        .tdi_47 {
            margin-top: 0px !important;
            margin-bottom: 5px !important
        }
    }
</style>
<style>
    .tdb_single_bg_featured_image {
        margin-bottom: 26px;
        overflow: hidden
    }

    .tdb-featured-image-bg {
        background-color: #f1f1f1;
        background-position: center center
    }

    .tdb_single_bg_featured_image .tdb-caption-text {
        z-index: 1;
        text-align: left;
        font-size: 11px;
        font-style: italic;
        font-weight: normal;
        line-height: 17px;
        color: #444;
        display: block
    }

    .tdb_single_bg_featured_image.tdb-content-horiz-center .tdb-caption-text {
        text-align: center;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto
    }

    .tdb_single_bg_featured_image.tdb-content-horiz-right .tdb-caption-text {
        text-align: right;
        left: auto;
        right: 0
    }

    .tdi_47 .tdb-featured-image-bg {
        /* background: url('https://www.theseedcambodia.com/wp-content/uploads/2025/01/website-cover-1.png'); */
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center 50%;
        padding-bottom: 55%
    }

    .tdi_47 .tdb-caption-text {
        margin: 6px 0 0
    }

    html:not(.td-md-is-ios):not(.td-md-is-android) body:not(.tdb-autoload-ajax) .tdi_47 .tdb-featured-image-bg {
        background-attachment: scroll
    }

    .tdi_47 .tdb-featured-image-bg:hover:before {
        opacity: 0
    }
</style>
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

    .tdi_46 {
        width: 72% !important
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_46 {
            width: calc(100% - 240px) !important
        }
    }

    @media (max-width:767px) {
        .tdi_46 {
            width: auto !important
        }
    }
</style>
<style>
    .tdi_53 {
        margin-top: 0px !important
    }
</style>
<style>
    .tdb_single_content {
        margin-bottom: 0;
        *zoom: 1
    }

    .tdb_single_content:before,
    .tdb_single_content:after {
        display: table;
        content: '';
        line-height: 0
    }

    .tdb_single_content:after {
        clear: both
    }

    .tdb_single_content .tdb-block-inner>*:not(.wp-block-quote):not(.alignwide):not(.alignfull.wp-block-cover.has-parallax):not(.td-a-ad) {
        margin-left: auto;
        margin-right: auto
    }

    .tdb_single_content a {
        pointer-events: auto
    }

    .tdb_single_content .td-spot-id-top_ad .tdc-placeholder-title:before {
        content: 'Article Top Ad' !important
    }

    .tdb_single_content .td-spot-id-inline_ad0 .tdc-placeholder-title:before {
        content: 'Article Inline Ad 1' !important
    }

    .tdb_single_content .td-spot-id-inline_ad1 .tdc-placeholder-title:before {
        content: 'Article Inline Ad 2' !important
    }

    .tdb_single_content .td-spot-id-inline_ad2 .tdc-placeholder-title:before {
        content: 'Article Inline Ad 3' !important
    }

    .tdb_single_content .td-spot-id-bottom_ad .tdc-placeholder-title:before {
        content: 'Article Bottom Ad' !important
    }

    .tdb_single_content .id_top_ad,
    .tdb_single_content .id_bottom_ad {
        clear: both;
        margin-bottom: 21px;
        text-align: center
    }

    .tdb_single_content .id_top_ad img,
    .tdb_single_content .id_bottom_ad img {
        margin-bottom: 0
    }

    .tdb_single_content .id_top_ad .adsbygoogle,
    .tdb_single_content .id_bottom_ad .adsbygoogle {
        position: relative
    }

    .tdb_single_content .id_ad_content-horiz-left,
    .tdb_single_content .id_ad_content-horiz-right,
    .tdb_single_content .id_ad_content-horiz-center {
        margin-bottom: 15px
    }

    .tdb_single_content .id_ad_content-horiz-left img,
    .tdb_single_content .id_ad_content-horiz-right img,
    .tdb_single_content .id_ad_content-horiz-center img {
        margin-bottom: 0
    }

    .tdb_single_content .id_ad_content-horiz-center {
        text-align: center
    }

    .tdb_single_content .id_ad_content-horiz-center img {
        margin-right: auto;
        margin-left: auto
    }

    .tdb_single_content .id_ad_content-horiz-left {
        float: left;
        margin-top: 9px;
        margin-right: 21px
    }

    .tdb_single_content .id_ad_content-horiz-right {
        float: right;
        margin-top: 6px;
        margin-left: 21px
    }

    .tdb_single_content .tdc-a-ad .tdc-placeholder-title {
        width: 300px;
        height: 250px
    }

    .tdb_single_content .tdc-a-ad .tdc-placeholder-title:before {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        margin: auto;
        display: table;
        width: 100%
    }

    .tdb_single_content .tdb-block-inner.td-fix-index {
        word-break: break-word
    }

    .tdi_53,
    .tdi_53>p,
    .tdi_53 .tdb-block-inner>p {
        font-family: KhmerOSSiemreap !important;
        font-size: 15px !important;
        line-height: 1.8 !important;
        font-weight: 400 !important
    }

    .tdi_53 h1 {
        font-weight: 400 !important
    }

    .tdi_53 h2 {
        font-weight: 400 !important
    }

    .tdi_53 h3:not(.tds-locker-title) {
        font-size: 24px !important;
        font-weight: 400 !important;
        letter-spacing: -1px !important
    }

    .tdi_53 h4 {
        font-family: Kantumruy !important;
        font-size: 22px !important;
        line-height: 1.6 !important;
        font-weight: 400 !important;
        letter-spacing: -1px !important
    }

    .tdi_53 h5 {
        font-family: Kantumruy !important;
        font-size: 22px !important;
        line-height: 1.6 !important;
        font-weight: 400 !important
    }

    .tdi_53 h6 {
        font-family: Kantumruy !important;
        font-size: 22px !important;
        line-height: 1.6 !important;
        font-weight: 400 !important
    }

    .tdi_53 li {
        line-height: 1.4 !important
    }

    .tdi_53 li:before {
        margin-top: 1px;
        line-height: 21px !important
    }

    .tdi_53 h1,
    .tdi_53 h2,
    .tdi_53 h3:not(.tds-locker-title),
    .tdi_53 h4,
    .tdi_53 h5,
    .tdi_53 h6 {
        color: #bb0000
    }

    .tdi_53 .tdb-block-inner blockquote p {
        color: #bb0000
    }

    @media (max-width:767px) {

        .tdb_single_content .id_ad_content-horiz-left,
        .tdb_single_content .id_ad_content-horiz-right,
        .tdb_single_content .id_ad_content-horiz-center {
            margin: 0 auto 26px auto
        }
    }

    @media (max-width:767px) {
        .tdb_single_content .id_ad_content-horiz-left {
            margin-right: 0
        }
    }

    @media (max-width:767px) {
        .tdb_single_content .id_ad_content-horiz-right {
            margin-left: 0
        }
    }

    @media (max-width:767px) {
        .tdb_single_content .td-a-ad {
            float: none;
            text-align: center
        }

        .tdb_single_content .td-a-ad img {
            margin-right: auto;
            margin-left: auto
        }

        .tdb_single_content .tdc-a-ad {
            float: none
        }
    }

    @media (min-width:1019px) and (max-width:1140px) {

        .tdi_53,
        .tdi_53>p,
        .tdi_53 .tdb-block-inner>p {
            font-size: 14px !important
        }
    }

    @media (min-width:768px) and (max-width:1018px) {

        .tdi_53,
        .tdi_53>p,
        .tdi_53 .tdb-block-inner>p {
            font-size: 14px !important
        }

        .tdi_53 h1 {
            font-size: 18px !important
        }

        .tdi_53 h2 {
            font-size: 18px !important
        }

        .tdi_53 h3:not(.tds-locker-title) {
            font-size: 18px !important
        }

        .tdi_53 h4 {
            font-size: 18px !important
        }
    }

    @media (max-width:767px) {

        .tdi_53 img.aligncenter,
        .tdi_53 .aligncenter img {
            margin-left: -50px;
            width: calc(100% + (2 * 50px));
            max-width: none !important
        }
    }
</style>
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

    @media (min-width:768px) {
        .tdi_44 {
            margin-left: -20px;
            margin-right: -20px
        }

        .tdi_44 .tdc-row-video-background-error,
        .tdi_44>.vc_column,
        .tdi_44>.tdc-columns>.vc_column {
            padding-left: 20px;
            padding-right: 20px
        }
    }

    @media (min-width:1019px) and (max-width:1140px) {
        @media (min-width:768px) {
            .tdi_44 {
                margin-left: -15px;
                margin-right: -15px
            }

            .tdi_44 .tdc-row-video-background-error,
            .tdi_44>.vc_column,
            .tdi_44>.tdc-columns>.vc_column {
                padding-left: 15px;
                padding-right: 15px
            }
        }
    }

    @media (min-width:768px) and (max-width:1018px) {
        @media (min-width:768px) {
            .tdi_44 {
                margin-left: -10px;
                margin-right: -10px
            }

            .tdi_44 .tdc-row-video-background-error,
            .tdi_44>.vc_column,
            .tdi_44>.tdc-columns>.vc_column {
                padding-left: 10px;
                padding-right: 10px
            }
        }
    }

    .tdi_44 {
        margin-bottom: 60px !important;
        position: relative
    }

    .tdi_44 .td_block_wrap {
        text-align: left
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_44 {
            margin-right: 6px !important;
            margin-bottom: 40px !important;
            margin-left: 6px !important;
            padding-top: 20px !important
        }
    }

    @media (min-width:1019px) and (max-width:1140px) {
        .tdi_44 {
            margin-bottom: 50px !important;
            padding-top: 0px !important
        }
    }

    @media (max-width:767px) {
        .tdi_44 {
            margin-bottom: 40px !important;
            padding-top: 0px !important
        }
    }
</style>
<style scoped="">
    .tdi_42 {
        vertical-align: baseline
    }

    .tdi_42>.wpb_wrapper,
    .tdi_42>.wpb_wrapper>.tdc-elements {
        display: block
    }

    .tdi_42>.wpb_wrapper>.tdc-elements {
        width: 100%
    }

    .tdi_42>.wpb_wrapper>.vc_row_inner {
        width: auto
    }

    .tdi_42>.wpb_wrapper {
        width: auto;
        height: auto
    }

    .tdi_42 {
        margin-bottom: 0px !important;
        width: 28% !important
    }

    @media (max-width:767px) {
        .tdi_42 {
            display: none !important
        }
    }
</style>
<style>
    .tdi_40 {
        margin-right: 5px !important;
        margin-bottom: 2px !important;
        margin-left: 5px !important
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_40 {
            margin-right: 0px !important;
            margin-left: 0px !important
        }
    }

    @media (max-width:767px) {
        .tdi_40 {
            margin-left: 0px !important;
            display: inline-block !important
        }
    }
</style>
<style>
    .tdb-post-meta {
        margin-bottom: 16px;
        color: #444;
        font-family: 'Open Sans', 'Open Sans Regular', sans-serif;
        font-size: 11px;
        font-weight: 400;
        clear: none;
        vertical-align: middle;
        line-height: 1
    }

    .tdb-post-meta span,
    .tdb-post-meta i,
    .tdb-post-meta time {
        vertical-align: middle
    }

    .tdb_single_date {
        line-height: 30px
    }

    .tdb_single_date a {
        vertical-align: middle
    }

    .tdb_single_date .tdb-date-icon-svg {
        position: relative;
        line-height: 0
    }

    .tdb_single_date svg {
        height: auto
    }

    .tdb_single_date svg,
    .tdb_single_date svg * {
        fill: #444
    }

    .tdi_40 {
        display: inline-block;
        font-family: Poppins !important;
        font-size: 14px !important;
        line-height: 1 !important;
        font-weight: 500 !important;
        text-transform: uppercase !important
    }

    .tdi_40 svg {
        width: 14px
    }

    .tdi_40 .tdb-date-icon {
        margin-right: 5px
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_40 {
            font-size: 12px !important;
            letter-spacing: 0px !important
        }
    }

    @media (max-width:767px) {
        .tdi_40 {
            font-size: 12px !important;
            line-height: 1 !important
        }
    }
</style>
<style>
    .tdi_39 {
        margin-right: 15px !important;
        margin-bottom: 0px !important
    }

    @media(min-width:1141px) {
        .tdi_39 {
            display: inline-block !important
        }
    }

    @media (min-width:1019px) and (max-width:1140px) {
        .tdi_39 {
            display: inline-block !important
        }
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_39 {
            margin-right: 10px !important;
            display: inline-block !important
        }
    }

    @media (max-width:767px) {
        .tdi_39 {
            margin-right: 10px !important;
            display: inline-block !important
        }
    }
</style>
<style>
    .tdb_single_categories {
        margin: 0 0 10px 0;
        line-height: 1;
        font-family: 'Open Sans', 'Open Sans Regular', sans-serif
    }

    .tdb_single_categories a {
        pointer-events: auto;
        font-size: 10px;
        display: inline-block;
        margin: 0 5px 5px 0;
        line-height: 1;
        color: #fff;
        padding: 3px 6px 4px 6px;
        white-space: nowrap;
        position: relative;
        vertical-align: middle
    }

    .tdb_single_categories a:hover .tdb-cat-bg {
        opacity: 0.9
    }

    .tdb_single_categories a:hover .tdb-cat-bg:before {
        opacity: 1
    }

    .tdb-category i:last-of-type {
        display: none
    }

    .tdb-cat-text {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px
    }

    .tdb-cat-sep {
        font-size: 14px;
        vertical-align: middle;
        position: relative
    }

    .tdb-cat-sep-svg {
        line-height: 0
    }

    .tdb-cat-sep-svg svg {
        width: 14px;
        height: auto
    }

    .tdb-cat-bg {
        position: absolute;
        background-color: #222;
        border: 1px solid #222;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: -1
    }

    .tdb-cat-bg:before {
        content: '';
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        position: absolute;
        z-index: -1;
        opacity: 0;
        -webkit-transition: opacity 0.3s ease;
        transition: opacity 0.3s ease
    }

    .tdb-cat-style2 .tdb-cat-bg {
        background-color: rgba(34, 34, 34, 0.85)
    }

    .tdi_39 .tdb-entry-category {
        padding: 5px 10px;
        font-family: Hanuman !important;
        font-size: 11px !important;
        font-weight: 500 !important;
        text-transform: uppercase !important
    }

    .tdi_39 .tdb-cat-bg {
        border-width: 0px;
        background-color: #dd3333;
    }

    .tdi_39 .tdb-cat-bg:before {
        background-color: #000000
    }

    .tdi_39 .tdb-cat-bg,
    .tdi_39 .tdb-cat-bg:before {
        border-radius: 10px
    }

    .tdi_39 .tdb-cat-sep {
        font-size: 14px
    }

    .tdi_39 .tdb-cat-text {
        margin-right: 10px
    }

    .td-theme-wrap .tdi_39 {
        text-align: left
    }

    @media (max-width:767px) {
        .tdi_39 .tdb-entry-category {
            font-size: 10px !important;
            letter-spacing: 0px !important
        }
    }
</style>
<style>
    .tdi_38 {
        margin-bottom: 15px !important
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_38 {
            margin-bottom: 10px !important
        }
    }
</style>
<style>
    .tdb_title {
        margin-bottom: 19px
    }

    .tdb_title.tdb-content-horiz-center {
        text-align: center
    }

    .tdb_title.tdb-content-horiz-center .tdb-title-line {
        margin: 0 auto
    }

    .tdb_title.tdb-content-horiz-right {
        text-align: right
    }

    .tdb_title.tdb-content-horiz-right .tdb-title-line {
        margin-left: auto;
        margin-right: 0
    }

    .tdb-title-text {
        display: inline-block;
        position: relative;
        margin: 0;
        word-wrap: break-word;
        font-size: 30px;
        line-height: 38px;
        font-weight: 700
    }

    .tdb-first-letter {
        position: absolute;
        -webkit-user-select: none;
        user-select: none;
        pointer-events: none;
        text-transform: uppercase;
        color: rgba(0, 0, 0, 0.08);
        font-size: 6em;
        font-weight: 300;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        left: -0.36em;
        z-index: -1;
        -webkit-text-fill-color: initial
    }

    .tdb-title-line {
        display: none;
        position: relative
    }

    .tdb-title-line:after {
        content: '';
        width: 100%;
        position: absolute;
        background-color: var(--td_theme_color, #4db2ec);
        top: 0;
        left: 0;
        margin: auto
    }

    .tdb-single-title .tdb-title-text {
        font-size: 41px;
        line-height: 50px;
        font-weight: 400
    }

    .tdi_38 .tdb-title-line:after {
        height: 2px;
        bottom: 40%
    }

    .tdi_38 .tdb-title-line {
        height: 50px
    }

    .td-theme-wrap .tdi_38 {
        text-align: left
    }

    .tdi_38 .tdb-first-letter {
        left: -0.36em;
        right: auto
    }

    .tdi_38 .tdb-title-text {
        font-size: 28px !important;
        line-height: 1.5 !important;
        font-weight: 600 !important;
        text-transform: none !important
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_38 .tdb-title-text {
            font-size: 30px !important
        }
    }

    @media (max-width:767px) {
        .tdi_38 .tdb-title-text {
            font-size: 20px !important;
            line-height: 1, 6 !important
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

    .tdi_37 {
        width: 70% !important
    }

    @media (max-width:767px) {
        .tdi_37 {
            width: 100% !important
        }
    }
</style>
<style>
    .tdi_34_rand_style {
        background-color: #faf5ee !important
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

    @media (min-width:768px) {
        .tdi_35 {
            margin-left: -20px;
            margin-right: -20px
        }

        .tdi_35 .tdc-row-video-background-error,
        .tdi_35>.vc_column,
        .tdi_35>.tdc-columns>.vc_column {
            padding-left: 20px;
            padding-right: 20px
        }
    }

    @media (min-width:1019px) and (max-width:1140px) {
        @media (min-width:768px) {
            .tdi_35 {
                margin-left: -15px;
                margin-right: -15px
            }

            .tdi_35 .tdc-row-video-background-error,
            .tdi_35>.vc_column,
            .tdi_35>.tdc-columns>.vc_column {
                padding-left: 15px;
                padding-right: 15px
            }
        }
    }

    @media (min-width:768px) and (max-width:1018px) {
        @media (min-width:768px) {
            .tdi_35 {
                margin-left: -10px;
                margin-right: -10px
            }

            .tdi_35 .tdc-row-video-background-error,
            .tdi_35>.vc_column,
            .tdi_35>.tdc-columns>.vc_column {
                padding-left: 10px;
                padding-right: 10px
            }
        }
    }

    .tdi_35 {
        padding-top: 60px !important;
        position: relative
    }

    .tdi_35 .td_block_wrap {
        text-align: left
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_35 {
            margin-right: 6px !important;
            margin-bottom: 40px !important;
            margin-left: 6px !important;
            padding-top: 20px !important
        }
    }

    @media (min-width:1019px) and (max-width:1140px) {
        .tdi_35 {
            margin-bottom: 0px !important;
            padding-top: 30px !important
        }
    }

    @media (max-width:767px) {
        .tdi_35 {
            margin-bottom: 30px !important;
            padding-top: 30px !important
        }
    }
</style>
<style scoped="">
    .tdi_33 {
        min-height: 0
    }
</style>

<?php
$content = ob_get_clean();
include BASE_PATH . 'views/master.php';
?>