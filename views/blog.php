<?php
require_once '../connection/db.php';
require_once '../config/config.php';
require_once __DIR__ . '/../controllers/BlogController.php';

$title = "Blog ";
ob_start();

$blogController = new BlogController();
$categoryId = isset($_GET['id']) ? intval($_GET['id']) : 0; // Get ID from URL

$articles = $blogController->listBlogStarter($categoryId);
$contentRows = $blogController->listBlogContent($categoryId);
?>

<div class="tdc_zone tdi_33  wpb_row td-pb-row">
    <style scoped="">
        .tdi_33 {
            min-height: 0
        }
    </style>
    <div id="tdi_34" class="tdc-row stretch_row_1200 td-stretch-content">
        <div class="vc_row tdi_35  wpb_row td-pb-row">

            <div class="vc_column tdi_37  wpb_column vc_column_container tdc-column td-pb-span12">

                <div class="wpb_wrapper">
                    <div class="td-big-grid-flex td_block_wrap td_block_big_grid_flex_1 tdi_39 td-pb-border-top td_block_template_8 td-big-grid-flex-posts"
                        data-td-block-uid="tdi_39">

                        <div id="tdi_39" class="">
                            <?php if (!empty($articles)): ?>
                                <?php foreach ($articles as $article): ?>
                                    <?php
                                    // Convert the published date to a readable format
                                    $publishedDate = !empty($article['PUBLISHED_DATE']) ? date("F j, Y", strtotime($article['PUBLISHED_DATE'])) : "Unknown Date";
                                    ?>

                                    <div class="td_module_flex_6 td-animation-stack td-big-grid-flex-post td-big-grid-flex-post-0 td-cpt-post">
                                        <div class="td-module-container td-category-pos-above">
                                            <div class="">
                                                <div class="td-module-thumb">
                                                    <a href="article.php?id=<?php echo $article['ID']; ?>" rel="bookmark" class="sr td-image-wrap" title="<?php echo htmlspecialchars($article['TITLE']); ?>">
                                                        <span class="entry-thumb td-thumb-css td-animation-stack-type1-2"
                                                            data-type="css_image"
                                                            data-img-url="<?php echo BASE_URL . 'storage/uploads/article/' . htmlspecialchars($article['IMAGE_URL']); ?>"
                                                            style="background-image: url('<?php echo BASE_URL . 'storage/uploads/article/' . htmlspecialchars($article['IMAGE_URL']); ?>');">
                                                        </span>
                                                    </a>

                                                </div>
                                            </div>

                                            <div class="td-module-meta-info">
                                                <div class="tdb-module-title-wrap">
                                                    <h3 class="entry-title td-module-title">
                                                        <a class="sr" href="article.php?id=<?php echo $article['ID']; ?>" rel="bookmark">
                                                            <?php echo htmlspecialchars($article['TITLE']); ?>
                                                        </a>
                                                    </h3>
                                                </div>

                                                <div class="td-editor-date">
                                                    <span class="td-post-date">
                                                        <time class="entry-date updated td-module-date" datetime="<?php echo htmlspecialchars($article['PUBLISHED_DATE']); ?>">
                                                            <?php echo $publishedDate; ?>
                                                        </time>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>No articles found.</p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 40px;" id="tdi_40" class="tdc-row stretch_row_1200 td-stretch-content">
        <div class="vc_row tdi_41  wpb_row td-pb-row">

            <div class="vc_column tdi_43  wpb_column vc_column_container tdc-column td-pb-span8">

                <div class="wpb_wrapper">
                    <div class="clearfix"></div>
                    <div class="td_block_wrap tdb_title tdi_44 tdb-page-title td-pb-border-top td_block_template_8"
                        data-td-block-uid="tdi_44">
                        <?php
                        if (!empty($articles)) {
                            // Get category name from the first article
                            $categoryName = $articles[0]['CATEGORY_NAME'] ?? 'Unknown Category';
                        ?>
                            <div class="tdb-block-inner td-fix-index">
                                <h1 class="tdb-title-text"><?php echo htmlspecialchars($categoryName); ?></h1>
                                <div></div>
                                <div class="tdb-title-line"></div>
                            </div>
                        <?php
                        } else {
                            echo "<p>No articles found.</p>";
                        }
                        ?>
                        <!-- <div class="tdb-block-inner td-fix-index">
                            <h1 class="tdb-title-text">សង្គមនិងវប្បធម៌</h1>
                            <div></div>
                            <div class="tdb-title-line"></div>
                        </div> -->
                    </div>
                    <div class="td_block_wrap td_flex_block_1 tdi_45 td_with_ajax_pagination td-pb-border-top blog-list-image-left td_block_template_8 td_flex_block"
                        data-td-block-uid="tdi_45">

                        <div class="td-block-title-wrap"></div>
                        <div id="tdi_45" class="td_block_inner td-mc1-wrap">
                            <?php if (!empty($contentRows)): ?>
                                <?php foreach ($contentRows as $row): ?>
                                    <?php
                                    // Convert OCILob to a string if needed
                                    $content = $row['CONTENT'];
                                    if ($content instanceof OCILob) {
                                        $content = $content->load();
                                    }

                                    // Convert the published date to a readable format
                                    $publishedDate = !empty($row['PUBLISHED_DATE']) ? date("F j, Y", strtotime($row['PUBLISHED_DATE'])) : "Unknown Date";
                                    ?>
                                    <div class="td_module_flex td_module_flex_1 td_module_wrap td-animation-stack td-cpt-post">
                                        <div class="td-module-container td-category-pos-">
                                            <div class="td-image-container">
                                                <div class="td-module-thumb">
                                                    <a href="article.php?id=<?php echo $row['ID']; ?>" rel="bookmark" class="td-image-wrap" title="<?php echo htmlspecialchars($row['TITLE']); ?>">
                                                        <span class="entry-thumb td-thumb-css td-animation-stack-type1-2"
                                                            data-type="css_image"
                                                            data-img-url="<?php echo BASE_URL . 'storage/uploads/article/' . htmlspecialchars($row['IMAGE_URL']); ?>"
                                                            style="background-image: url('<?php echo BASE_URL . 'storage/uploads/article/' . htmlspecialchars($row['IMAGE_URL']); ?>');"></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="td-module-meta-info">
                                                <!-- <h3 class="entry-title td-module-title">
                                                    <a class="sr" href="article.php?id=<?php echo $row['ID']; ?>" rel="bookmark" title="<?php echo htmlspecialchars($row['TITLE']); ?>">
                                                        <?php echo htmlspecialchars($row['TITLE']); ?>
                                                    </a>
                                                </h3> -->
                                                <h3 class="entry-title td-module-title">
                                                    <a class="sr"
                                                        href="article.php?id=<?php echo $row['ID']; ?>"
                                                        rel="bookmark"
                                                        title="<?php echo htmlspecialchars($row['TITLE']); ?>"
                                                        onmouseover="this.style.color='red';"
                                                        onmouseout="this.style.color='';">
                                                        <?php echo htmlspecialchars($row['TITLE']); ?>
                                                    </a>
                                                </h3>
                                                <div class="td-editor-date">
                                                    <a href="#" class="sr td-post-category">
                                                        <?php echo htmlspecialchars($row['NAME_IN_KH']); ?>
                                                    </a>
                                                    <span class="td-author-date">
                                                        <span class="td-post-date">
                                                            <time class="entry-date updated td-module-date" datetime="<?php echo $row['PUBLISHED_DATE']; ?>">
                                                                <?php echo $publishedDate; ?>
                                                            </time>
                                                        </span>
                                                    </span>
                                                </div>
                                                <!-- Excerpt of the content (optional, if you want to display part of the content) -->
                                                <div class="td-excerpt">
                                                    <p class="">
                                                        <?php echo $content ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>No articles found.</p>
                            <?php endif; ?>
                        </div>
                        <div class="td-load-more-wrap"><a href="#"
                                class="td_ajax_load_more td_ajax_load_more_js"
                                aria-label="បង្ហាញ​បន្ថែមទៀត" id="next-page-tdi_45"
                                data-td_block_id="tdi_45">បង្ហាញ​បន្ថែមទៀត<i
                                    class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div
                class="vc_column tdi_47  wpb_column vc_column_container tdc-column td-pb-span4 td-is-sticky">

                <div class="wpb_wrapper" data-sticky-offset="20"
                    data-sticky-is-width-auto="W3RydWUsZmFsc2UsZmFsc2UsZmFsc2Vd"
                    style="width: 282px;">
                    <div class="clearfix"></div>
                    <div
                        class="td_block_wrap td-a-rec td-a-rec-id-custom-spot td-a-rec-img tdi_48 td_block_template_8">

                        <div style="display: inline-block"><a
                                href="https://www.instagram.com/the_seed_cambodia/"
                                class="td_spot_img_all"><img decoding="async"
                                    src="https://www.theseedcambodia.com/wp-content/uploads/2021/08/Subscribe-Instagr-The-SEED-2.png"
                                    alt="spot_img"></a></div>
                    </div>
                    <div class="td_block_wrap td_flex_block_5 tdi_49 td-pb-border-top td_block_template_8 td_ajax_preloading_preload td_flex_block"
                        data-td-block-uid="tdi_49">

                        <div class="td-block-title-wrap">
                            <h4 class="td-block-title"><span>អត្ថបទពេញនិយម</span></h4>
                        </div>
                        <div id="tdi_49" class="td_block_inner td-mc1-wrap">
                            <div
                                class="td_module_flex td_module_flex_5 td_module_wrap td-animation-stack td-cpt-post">
                                <div class="td-module-container td-category-pos-">
                                    <div class="td-module-meta-info td-module-meta-info-top">
                                    </div>
                                    <div class="td-image-container">
                                        <div class="td-module-thumb"><a
                                                href="https://www.theseedcambodia.com/article/6151/"
                                                rel="bookmark" class="td-image-wrap "
                                                title="តើកិច្ចសន្យាការងារ​មានប៉ុន្មានប្រភេទ?"><span
                                                    class="entry-thumb td-thumb-css td-animation-stack-type1-2"
                                                    style="background-image: url('https://www.theseedcambodia.com/wp-content/uploads/2021/08/website-cover-11.png')"></span></a>
                                        </div>
                                    </div>

                                    <div class="td-module-meta-info td-module-meta-info-bottom">
                                        <h3 class="entry-title td-module-title"><a
                                                href="https://www.theseedcambodia.com/article/6151/"
                                                rel="bookmark"
                                                title="តើកិច្ចសន្យាការងារ​មានប៉ុន្មានប្រភេទ?">តើកិច្ចសន្យាការងារ​មានប៉ុន្មានប្រភេទ?</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>


                            <div
                                class="td_module_flex td_module_flex_5 td_module_wrap td-animation-stack td-cpt-post">
                                <div class="td-module-container td-category-pos-">
                                    <div class="td-module-meta-info td-module-meta-info-top">
                                    </div>
                                    <div class="td-image-container">
                                        <div class="td-module-thumb"><a
                                                href="https://www.theseedcambodia.com/article/7895/"
                                                rel="bookmark" class="td-image-wrap "
                                                title="ការវិវត្តនៃបដិវត្តន៍ឧស្សាហកម្ម"><span
                                                    class="entry-thumb td-thumb-css td-animation-stack-type1-1"
                                                    style="background-image: url('https://www.theseedcambodia.com/wp-content/uploads/2021/10/website-cover-33-1-696x392.png')"></span></a>
                                        </div>
                                    </div>

                                    <div class="td-module-meta-info td-module-meta-info-bottom">
                                        <h3 class="entry-title td-module-title"><a
                                                href="https://www.theseedcambodia.com/article/7895/"
                                                rel="bookmark"
                                                title="ការវិវត្តនៃបដិវត្តន៍ឧស្សាហកម្ម">ការវិវត្តនៃបដិវត្តន៍ឧស្សាហកម្ម</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>


                            <div
                                class="td_module_flex td_module_flex_5 td_module_wrap td-animation-stack td-cpt-post">
                                <div class="td-module-container td-category-pos-">
                                    <div class="td-module-meta-info td-module-meta-info-top">
                                    </div>
                                    <div class="td-image-container">
                                        <div class="td-module-thumb"><a
                                                href="https://www.theseedcambodia.com/article/6041/"
                                                rel="bookmark" class="td-image-wrap "
                                                title="វិបត្តិសេដ្ឋកិច្ចពិភពលោកឆ្នាំ ១៩២៩"><span
                                                    class="entry-thumb td-thumb-css td-animation-stack-type1-1"
                                                    style="background-image: url('https://www.theseedcambodia.com/wp-content/uploads/2021/06/website-cover-13.png')"></span></a>
                                        </div>
                                    </div>

                                    <div class="td-module-meta-info td-module-meta-info-bottom">
                                        <h3 class="entry-title td-module-title"><a
                                                href="https://www.theseedcambodia.com/article/6041/"
                                                rel="bookmark"
                                                title="វិបត្តិសេដ្ឋកិច្ចពិភពលោកឆ្នាំ ១៩២៩">វិបត្តិសេដ្ឋកិច្ចពិភពលោកឆ្នាំ
                                                ១៩២៩</a></h3>
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
</div>
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

    .tdi_35 {
        padding-top: 60px !important
    }

    .tdi_35 .td_block_wrap {
        text-align: left
    }

    @media (max-width:767px) {
        .tdi_35 {
            padding-top: 0px !important
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
<style>
    .td-big-grid-flex {
        width: 100%;
        padding-bottom: 0
    }

    .td-big-grid-flex .td_block_inner:after,
    .td-big-grid-flex .td_block_inner .td-big-grid-flex-post:after {
        content: '';
        display: table;
        clear: both
    }

    .td-big-grid-flex .td-big-grid-flex-post {
        position: relative;
        float: left;
        padding-bottom: 0
    }

    .td-big-grid-flex .td-image-container {
        position: relative;
        flex: 0 0 100%;
        width: 100%;
        height: 100%
    }

    .td-big-grid-flex .td-image-wrap {
        position: relative;
        display: block;
        overflow: hidden
    }

    .td-big-grid-flex .td-image-wrap:before {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: background-color 0.3s ease;
        transition: background-color 0.3s ease;
        z-index: 1
    }

    .td-big-grid-flex .td-module-thumb {
        position: relative;
        margin-bottom: 0
    }

    .td-big-grid-flex .td-module-thumb:after {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%
    }

    .td-big-grid-flex .td-thumb-css {
        width: 100%;
        height: 100%;
        position: absolute;
        background-size: cover;
        background-position: center center
    }

    .td-big-grid-flex .td-module-thumb .td-thumb-css {
        transition: opacity 0.3s, transform 0.3s;
        -webkit-transition: opacity 0.3s, transform 0.3s
    }

    .td-big-grid-flex .td-post-category {
        transition: background-color 0.2s ease;
        -webkit-transition: background-color 0.2s ease;
        padding: 3px 7px;
        background-color: rgba(0, 0, 0, 0.7);
        font-family: 'Roboto', sans-serif;
        line-height: 13px;
        font-weight: 500;
        text-transform: uppercase;
        pointer-events: auto
    }

    .td-big-grid-flex .td-module-meta-info {
        position: absolute;
        left: 0;
        margin-bottom: 0;
        width: 100%;
        pointer-events: none;
        z-index: 1
    }

    .td-big-grid-flex .td-module-title a,
    .td-big-grid-flex .td-post-author-name span,
    .td-big-grid-flex .td-module-container:hover .entry-title a,
    .td-big-grid-flex .td-post-author-name a,
    .td-big-grid-flex .td-post-date {
        color: #fff
    }

    .td-big-grid-flex .td-module-title {
        margin: 0
    }

    .td-big-grid-flex .td-module-title a {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2)
    }

    .td-big-grid-flex .td-editor-date {
        display: inline-block
    }

    .td-big-grid-flex .td-post-author-name a,
    .td-big-grid-flex .td-post-author-name span,
    .td-big-grid-flex .td-post-date {
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3)
    }

    .td-big-grid-flex .td-big-grid-flex-post-empty .td-image-wrap {
        background-color: #e5e5e5
    }

    .td-big-grid-flex .td-big-grid-flex-post-empty .td-image-wrap:before {
        display: none
    }

    .td_block_big_grid_flex_1 .td-module-container {
        position: relative
    }

    .td_block_big_grid_flex_1 .td-image-wrap {
        padding-bottom: 75%
    }

    .td_block_big_grid_flex_1 .td-module-meta-info {
        padding: 22px 20px
    }

    .td_block_big_grid_flex_1 .td-module-title {
        font-family: 'Roboto', sans-serif;
        font-size: 27px;
        font-weight: 500;
        line-height: 34px;
        margin: 0 0 9px 0
    }

    .td_block_big_grid_flex_1 .td-editor-date {
        display: inline-block
    }

    body .tdi_39 .entry-thumb {
        background-position: center 50%
    }

    body .tdi_39 .td-image-wrap {
        padding-bottom: 55%
    }

    body .tdi_39 .td-video-play-ico {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%)
    }

    body .tdi_39 .td-module-meta-info {
        text-align: center;
        right: 0;
        margin: 0 auto;
        bottom: 0;
        width: 90%
    }

    body .tdi_39 .td-post-category {
        margin: 0 0 5px
    }

    body .tdi_39 .td-post-category:not(.td-post-extra-category) {
        display: none
    }

    body .tdi_39 .td-module-title a {
        box-shadow: inset 0 0 0 0 #000
    }

    body .tdi_39 .td-editor-date {
        display: inline
    }

    body .tdi_39 .td-post-author-name {
        display: none
    }

    body .tdi_39 .td-post-date,
    body .tdi_39 .td-post-author-name span {
        display: inline-block
    }

    body .tdi_39 .entry-review-stars {
        display: none;
        color: #fff
    }

    body .tdi_39 .td-icon-star,
    body .tdi_39 .td-icon-star-empty,
    body .tdi_39 .td-icon-star-half {
        font-size: 15px
    }

    body .tdi_39 .td-big-grid-flex-post:nth-child(2n+1) {
        clear: both
    }

    body .tdi_39 .td-image-wrap:before {
        content: '';
        background: -webkit-linear-gradient(0deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0) 60%, rgba(0, 0, 0, 0));
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0) 60%, rgba(0, 0, 0, 0))
    }

    body .tdi_39 .td-module-container:hover .td-post-category {
        background-color: rgb(77, 231, 236)
    }

    body .tdi_39 .entry-title {
        font-size: 18px !important
    }

    body .tdi_39 .td-editor-date,
    body .tdi_39 .td-editor-date .entry-date,
    body .tdi_39 .td-module-comments a {
        font-weight: 500 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.5px !important
    }

    body .tdi_39 .td-post-author-name a {
        font-weight: 500
    }

    html:not([class*='ie']) body .tdi_39 .td-module-container:hover .entry-thumb:before {
        opacity: 0
    }

    @media (max-width:767px) {
        .td-big-grid-flex .td_block_inner {
            margin-left: -20px;
            margin-right: -20px
        }
    }

    @media (min-width:767px) {
        .td-big-grid-flex-lightsky .td-image-wrap:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 160%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg) translate3d(0, -120%, 0);
            -webkit-transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg) translate3d(0, -120%, 0);
            transition: transform 0.7s ease 0s;
            -webkit-transition: transform 0.7s ease 0s;
            z-index: 1
        }

        .td-big-grid-flex-lightsky .td-module-container:hover .td-image-wrap:after {
            transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg) translate3d(0, 146%, 0);
            -webkit-transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg) translate3d(0, 146%, 0)
        }
    }

    @media (max-width:767px) {
        div.td-big-grid-flex-scroll .td-big-grid-flex-post {
            float: none
        }

        div.td-big-grid-flex-scroll .td-big-grid-flex-scroll-holder {
            overflow-x: auto;
            overflow-y: hidden;
            white-space: nowrap;
            font-size: 0;
            -webkit-overflow-scrolling: touch
        }

        div.td-big-grid-flex-scroll .td-big-grid-flex-scroll-holder .td-big-grid-flex-post {
            display: inline-block;
            vertical-align: top
        }

        div.td-big-grid-flex-scroll .td-module-title a {
            white-space: normal
        }
    }

    @media (max-width:767px) {
        .td_block_big_grid_flex_1 .td-big-grid-flex-post {
            width: 100%
        }
    }

    @media (min-width:767px) {
        body .tdi_39 .td-module-container:hover .td-thumb-css {
            transform: scale3d(1.1, 1.1, 1);
            -webkit-transform: scale3d(1.1, 1.1, 1)
        }
    }

    @media (min-width:767px) {
        body .tdi_39 .td-big-grid-flex-post {
            width: 50%
        }
    }

    @media (min-width:767px) {
        body .tdi_39 .td-big-grid-flex-post {
            padding-left: 10px;
            padding-right: 10px
        }

        body .tdi_39 .td_block_inner {
            margin-left: -10px;
            margin-right: -10px
        }
    }

    @media (max-width:767px) {
        body .tdi_39 .td-big-grid-flex-post {
            margin-bottom: 20px
        }

        body .tdi_39 .td-big-grid-flex-post:last-child {
            margin-bottom: 0
        }
    }

    @media (min-width:768px) {
        body .tdi_39 .td-module-title a {
            transition: all 0.2s ease;
            -webkit-transition: all 0.2s ease
        }
    }

    @media (min-width:767px) {
        body .tdi_39 .td-big-grid-flex-post:nth-last-child(-n+2) {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important
        }

        body .tdi_39 .td-big-grid-flex-post .td-module-container:before {
            display: block !important
        }

        body .tdi_39 .td-big-grid-flex-post:nth-last-child(-n+2) .td-module-container:before {
            display: none !important
        }
    }

    @media (min-width:1019px) and (max-width:1140px) {
        body .tdi_39 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        body .tdi_39 .td-big-grid-flex-post {
            clear: none !important
        }

        body .tdi_39 .td-big-grid-flex-post:nth-child(2n+1) {
            clear: both !important
        }

        body .tdi_39 .entry-title {
            font-size: 22px !important;
            line-height: 28px !important
        }

        @media (min-width:768px) {
            body .tdi_39 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }
    }

    @media (min-width:768px) and (max-width:1018px) {
        body .tdi_39 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        body .tdi_39 .td-big-grid-flex-post {
            clear: none !important
        }

        body .tdi_39 .td-big-grid-flex-post:nth-child(2n+1) {
            clear: both !important
        }

        body .tdi_39 .entry-title {
            font-size: 16px !important;
            line-height: 20px !important
        }

        @media (min-width:768px) {
            body .tdi_39 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }
    }

    @media (max-width:767px) {
        body .tdi_39 .td-module-meta-info {
            width: 100%
        }

        body .tdi_39 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        body .tdi_39 .td-big-grid-flex-post {
            clear: none !important
        }

        body .tdi_39 .td-big-grid-flex-post:nth-child(2n+1) {
            clear: both !important
        }

        body .tdi_39 .entry-title {
            font-size: 15px !important;
            line-height: 1.6 !important
        }

        @media (min-width:768px) {
            body .tdi_39 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }
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
            margin-left: -20px;
            margin-right: -20px
        }

        .tdi_41 .tdc-row-video-background-error,
        .tdi_41>.vc_column,
        .tdi_41>.tdc-columns>.vc_column {
            padding-left: 20px;
            padding-right: 20px
        }
    }

    @media (min-width:768px) and (max-width:1018px) {
        @media (min-width:768px) {
            .tdi_41 {
                margin-left: -10px;
                margin-right: -10px
            }

            .tdi_41 .tdc-row-video-background-error,
            .tdi_41>.vc_column,
            .tdi_41>.tdc-columns>.vc_column {
                padding-left: 10px;
                padding-right: 10px
            }
        }
    }

    .tdi_41 {
        margin-bottom: 60px !important
    }

    .tdi_41 .td_block_wrap {
        text-align: left
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_41 {
            margin-right: 6px !important;
            margin-bottom: 40px !important;
            margin-left: 6px !important;
            padding-top: 20px !important
        }
    }

    @media (min-width:1019px) and (max-width:1140px) {
        .tdi_41 {
            margin-bottom: 50px !important;
            padding-top: 30px !important
        }
    }

    @media (max-width:767px) {
        .tdi_41 {
            margin-bottom: 40px !important
        }
    }
</style>
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

    .tdi_43 {
        width: 72% !important
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_43 {
            width: calc(100% - 240px) !important
        }
    }

    @media (max-width:767px) {
        .tdi_43 {
            margin-bottom: 40px !important;
            width: auto !important
        }
    }
</style>
<style>
    .tdi_44 {
        margin-bottom: 30px !important
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_44 {
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
        background-color: var(--td_theme_color, rgb(77, 236, 140));
        top: 0;
        left: 0;
        margin: auto
    }

    .tdi_44 .tdb-title-line:after {
        height: 2px;
        bottom: 40%
    }

    .tdi_44 .tdb-title-line {
        height: 50px
    }

    .td-theme-wrap .tdi_44 {
        text-align: left
    }

    .tdi_44 .tdb-first-letter {
        left: -0.36em;
        right: auto
    }

    .tdi_44 .tdb-title-text {
        font-family: Kantumruy !important;
        font-size: 30px !important;
        line-height: 1.6 !important;
        font-weight: 600 !important;
        text-transform: none !important
    }

    @media (min-width:1019px) and (max-width:1140px) {
        .tdi_44 .tdb-title-text {
            font-size: 36px !important
        }
    }

    @media (max-width:767px) {
        .tdi_44 .tdb-title-text {
            font-size: 25px !important
        }
    }
</style>
<style>
    .tdi_45 .td-image-wrap {
        padding-bottom: 55%
    }

    .tdi_45 .entry-thumb {
        background-position: center 50%
    }

    .tdi_45 .td-image-container {
        flex: 0 0 48%;
        width: 48%;
        display: block;
        order: 0
    }

    .ie10 .tdi_45 .td-image-container,
    .ie11 .tdi_45 .td-image-container {
        flex: 0 0 auto
    }

    .tdi_45 .td-module-container {
        flex-direction: row;
        border-color: #eaeaea !important
    }

    .ie10 .tdi_45 .td-module-meta-info,
    .ie11 .tdi_45 .td-module-meta-info {
        flex: 1
    }

    body .tdi_45 .td-favorite {
        font-size: 36px;
        box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.2)
    }

    .tdi_45 .td-module-meta-info {
        padding: 0 20px 0 30px;
        border-color: #eaeaea
    }

    .tdi_45 .td_module_wrap {
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 18px;
        margin-bottom: 18px
    }

    .tdi_45 .td_block_inner {
        margin-left: -20px;
        margin-right: -20px
    }

    .tdi_45 .td-module-container:before {
        bottom: -18px;
        border-color: #eaeaea
    }

    .tdi_45 .td-post-vid-time {
        display: block
    }

    .tdi_45 .td-post-category {
        padding: 3px 0;
        background-color: rgba(20, 30, 41, 0);
        color: #bb0101
    }

    .tdi_45 .td-author-photo .avatar {
        width: 20px;
        height: 20px;
        margin-right: 6px;
        border-radius: 50%
    }

    .tdi_45 .td-audio-player {
        opacity: 1;
        visibility: visible;
        height: auto;
        font-size: 13px
    }

    .tdi_45 .td-read-more {
        display: none
    }

    .tdi_45 .td-author-date {
        display: inline
    }

    .tdi_45 .td-post-author-name {
        display: none
    }

    .tdi_45 .entry-review-stars {
        display: none
    }

    .tdi_45 .td-icon-star,
    .tdi_45 .td-icon-star-empty,
    .tdi_45 .td-icon-star-half {
        font-size: 15px
    }

    .tdi_45 .td-module-comments {
        display: none
    }

    .tdi_45 .td_module_wrap:nth-last-child(1) {
        margin-bottom: 0;
        padding-bottom: 0
    }

    .tdi_45 .td_module_wrap:nth-last-child(1) .td-module-container:before {
        display: none
    }

    .tdi_45 .td-module-title a {
        box-shadow: inset 0 0 0 0 #000
    }

    .tdi_45.td_with_ajax_pagination .td-next-prev-wrap a,
    .tdi_45 .td-load-more-wrap a {
        color: #ffffff;
        background-color: #bb0101;
        padding: 12px 20px;
        border-width: 0px;
        border-radius: 20px
    }

    .tdi_45 .td-load-more-wrap a .td-load-more-icon-svg svg,
    .tdi_45 .td-load-more-wrap a .td-load-more-icon-svg svg *,
    .tdi_45.td_with_ajax_pagination .td-next-prev-wrap .td-next-prev-icon-svg svg,
    .tdi_45.td_with_ajax_pagination .td-next-prev-wrap .td-next-prev-icon-svg svg * {
        fill: #ffffff
    }

    .tdi_45.td_with_ajax_pagination .td-next-prev-wrap a:hover,
    .tdi_45 .td-load-more-wrap a:hover {
        color: #ffffff;
        background-color: #141e29 !important;
        border-color: #141e29 !important
    }

    .tdi_45 .td-load-more-wrap a:hover .td-load-more-icon-svg svg,
    .tdi_45 .td-load-more-wrap a:hover .td-load-more-icon-svg svg *,
    .tdi_45.td_with_ajax_pagination .td-next-prev-wrap a:hover .td-next-prev-icon-svg svg,
    .tdi_45.td_with_ajax_pagination .td-next-prev-wrap a:hover .td-next-prev-icon-svg svg * {
        fill: #ffffff
    }

    .tdi_45 .td-excerpt {
        column-count: 1;
        column-gap: 48px
    }

    .tdi_45.td_with_ajax_pagination .td-next-prev-wrap,
    .tdi_45 .td-load-more-wrap {
        margin-top: 40px
    }

    .tdi_45 .page-nav .pages {
        padding-right: 0
    }

    .tdi_45 .entry-title {
        line-height: 1.6 !important
    }

    .tdi_45 .td-editor-date,
    .tdi_45 .td-editor-date .td-post-author-name a,
    .tdi_45 .td-editor-date .entry-date,
    .tdi_45 .td-module-comments a {
        font-weight: 600 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.5px !important
    }

    .tdi_45 .td-load-more-wrap a {
        font-size: 16px !important
    }

    html:not([class*='ie']) .tdi_45 .td-module-container:hover .entry-thumb:before {
        opacity: 0
    }

    @media (min-width:768px) {
        .tdi_45 .td-module-title a {
            transition: all 0.2s ease;
            -webkit-transition: all 0.2s ease
        }
    }

    @media (min-width:1019px) and (max-width:1140px) {
        .tdi_45 .td_module_wrap {
            padding-bottom: 18px;
            margin-bottom: 18px
        }

        .tdi_45 .td-module-container:before {
            bottom: -18px
        }

        .tdi_45 .td_module_wrap {
            padding-bottom: 18px !important;
            margin-bottom: 18px !important
        }

        .tdi_45 .td_module_wrap:nth-last-child(1) {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important
        }

        .tdi_45 .td_module_wrap .td-module-container:before {
            display: block !important
        }

        .tdi_45 .td_module_wrap:nth-last-child(1) .td-module-container:before {
            display: none !important
        }

        .tdi_45 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        @media (min-width:768px) {
            .tdi_45 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_45 .td_module_wrap {
            padding-bottom: 18px;
            margin-bottom: 18px
        }

        .tdi_45 .td-module-container:before {
            bottom: -18px
        }

        .tdi_45 .td_module_wrap {
            padding-bottom: 18px !important;
            margin-bottom: 18px !important
        }

        .tdi_45 .td_module_wrap:nth-last-child(1) {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important
        }

        .tdi_45 .td_module_wrap .td-module-container:before {
            display: block !important
        }

        .tdi_45 .td_module_wrap:nth-last-child(1) .td-module-container:before {
            display: none !important
        }

        .tdi_45 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        @media (min-width:768px) {
            .tdi_45 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }
    }

    @media (max-width:767px) {
        .tdi_45 .td-image-container {
            flex: 0 0 40%;
            width: 40%
        }

        .ie10 .tdi_45 .td-image-container,
        .ie11 .tdi_45 .td-image-container {
            flex: 0 0 auto
        }

        .tdi_45 .td-module-meta-info {
            padding: 0 0 0 15px
        }

        .tdi_45 .td_module_wrap {
            padding-bottom: 10px;
            margin-bottom: 10px;
            padding-bottom: 10px !important;
            margin-bottom: 10px !important
        }

        .tdi_45 .td-module-container:before {
            bottom: -10px
        }

        .tdi_45 .td-post-category:not(.td-post-extra-category) {
            display: none
        }

        .tdi_45 .td-excerpt {
            display: none
        }

        .tdi_45 .td-author-date {
            display: none
        }

        .tdi_45 .td-post-date,
        .tdi_45 .td-post-author-name span {
            display: none
        }

        .tdi_45 .td_module_wrap:nth-last-child(1) {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important
        }

        .tdi_45 .td_module_wrap .td-module-container:before {
            display: block !important
        }

        .tdi_45 .td_module_wrap:nth-last-child(1) .td-module-container:before {
            display: none !important
        }

        .tdi_45 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        .tdi_45 .entry-title {
            font-size: 14px !important
        }

        @media (min-width:768px) {
            .tdi_45 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }
    }
</style>
<script>
    var block_tdi_45 = new tdBlock();
    block_tdi_45.id = "tdi_45";
    block_tdi_45.atts = '{"hide_audio":"yes","image_floated":"float_left","image_width":"eyJhbGwiOiI0OCIsInBob25lIjoiNDAifQ==","image_height":"55","show_btn":"none","show_review":"none","show_com":"none","show_author":"none","meta_padding":"eyJhbGwiOiIwIDIwcHggMCAzMHB4IiwicGhvbmUiOiIwIDAgMCAxNXB4In0=","f_title_font_line_height":"1.6","modules_category_padding":"3px 0","cat_bg":"rgba(20,30,41,0)","cat_txt":"#bb0101","f_meta_font_transform":"uppercase","f_meta_font_weight":"600","show_excerpt":"eyJwaG9uZSI6Im5vbmUifQ==","show_date":"eyJwaG9uZSI6Im5vbmUifQ==","f_title_font_size":"eyJwaG9uZSI6IjE0In0=","show_cat":"eyJwaG9uZSI6Im5vbmUifQ==","all_modules_space":"eyJhbGwiOiIzNiIsInBob25lIjoiMjAifQ==","f_meta_font_spacing":"0.5","ajax_pagination":"load_more","pag_bg":"#bb0101","pag_h_bg":"#141e29","pag_text":"#ffffff","pag_h_text":"#ffffff","pag_border_width":"0","pag_padding":"12px 20px","pag_border_radius":"20","f_more_font_size":"16","pag_space":"40","category_id":"","offset":"2","modules_on_row":"","limit":"12","el_class":"blog-list-image-left","td_ajax_filter_type":"","category_ids":"39,44,67,93","block_type":"td_flex_block_1","separator":"","custom_title":"","custom_url":"","block_template_id":"","title_tag":"","mc1_tl":"","mc1_title_tag":"","mc1_el":"","post_ids":"","taxonomies":"","in_all_terms":"","tag_slug":"","autors_id":"","installed_post_types":"","include_cf_posts":"","exclude_cf_posts":"","sort":"","linked_posts":"","favourite_only":"","open_in_new_window":"","show_modified_date":"","time_ago":"","time_ago_add_txt":"ago","time_ago_txt_pos":"","review_source":"","td_query_cache":"","td_query_cache_expiration":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","td_ajax_preloading":"","container_width":"","modules_gap":"","m_padding":"","modules_border_size":"","modules_border_style":"","modules_border_color":"#eaeaea","modules_border_radius":"","modules_divider":"","modules_divider_color":"#eaeaea","h_effect":"","image_size":"","image_alignment":"50","image_radius":"","hide_image":"","show_favourites":"","fav_size":"2","fav_space":"","fav_ico_color":"","fav_ico_color_h":"","fav_bg":"","fav_bg_h":"","fav_shadow_shadow_header":"","fav_shadow_shadow_title":"Shadow","fav_shadow_shadow_size":"","fav_shadow_shadow_offset_horizontal":"","fav_shadow_shadow_offset_vertical":"","fav_shadow_shadow_spread":"","fav_shadow_shadow_color":"","video_icon":"","video_popup":"yes","video_rec":"","spot_header":"","video_rec_title":"","video_rec_color":"","video_rec_disable":"","autoplay_vid":"yes","show_vid_t":"block","vid_t_margin":"","vid_t_padding":"","video_title_color":"","video_title_color_h":"","video_bg":"","video_overlay":"","vid_t_color":"","vid_t_bg_color":"","f_vid_title_font_header":"","f_vid_title_font_title":"Video pop-up article title","f_vid_title_font_settings":"","f_vid_title_font_family":"","f_vid_title_font_size":"","f_vid_title_font_line_height":"","f_vid_title_font_style":"","f_vid_title_font_weight":"","f_vid_title_font_transform":"","f_vid_title_font_spacing":"","f_vid_title_":"","f_vid_time_font_title":"Video duration text","f_vid_time_font_settings":"","f_vid_time_font_family":"","f_vid_time_font_size":"","f_vid_time_font_line_height":"","f_vid_time_font_style":"","f_vid_time_font_weight":"","f_vid_time_font_transform":"","f_vid_time_font_spacing":"","f_vid_time_":"","meta_info_align":"","meta_info_horiz":"layout-default","meta_width":"","meta_margin":"","meta_space":"","art_title":"","art_btn":"","meta_info_border_size":"","meta_info_border_style":"","meta_info_border_color":"#eaeaea","meta_info_border_radius":"","modules_category":"","modules_category_margin":"","modules_cat_border":"","modules_category_radius":"0","modules_extra_cat":"","author_photo":"","author_photo_size":"","author_photo_space":"","author_photo_radius":"","review_space":"","review_size":"2.5","review_distance":"","art_excerpt":"","excerpt_col":"1","excerpt_gap":"","excerpt_middle":"","excerpt_inline":"","show_audio":"block","art_audio":"","art_audio_size":"1.5","btn_title":"","btn_margin":"","btn_padding":"","btn_border_width":"","btn_radius":"","prev_tdicon":"","next_tdicon":"","pag_icons_size":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_family":"","f_header_font_size":"","f_header_font_line_height":"","f_header_font_style":"","f_header_font_weight":"","f_header_font_transform":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_family":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_family":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_weight":"","f_more_font_transform":"","f_more_font_spacing":"","f_more_":"","f_title_font_header":"","f_title_font_title":"Article title","f_title_font_settings":"","f_title_font_family":"","f_title_font_style":"","f_title_font_weight":"","f_title_font_transform":"","f_title_font_spacing":"","f_title_":"","f_cat_font_title":"Article category tag","f_cat_font_settings":"","f_cat_font_family":"","f_cat_font_size":"","f_cat_font_line_height":"","f_cat_font_style":"","f_cat_font_weight":"","f_cat_font_transform":"","f_cat_font_spacing":"","f_cat_":"","f_meta_font_title":"Article meta info","f_meta_font_settings":"","f_meta_font_family":"","f_meta_font_size":"","f_meta_font_line_height":"","f_meta_font_style":"","f_meta_":"","f_ex_font_title":"Article excerpt","f_ex_font_settings":"","f_ex_font_family":"","f_ex_font_size":"","f_ex_font_line_height":"","f_ex_font_style":"","f_ex_font_weight":"","f_ex_font_transform":"","f_ex_font_spacing":"","f_ex_":"","f_btn_font_title":"Article read more button","f_btn_font_settings":"","f_btn_font_family":"","f_btn_font_size":"","f_btn_font_line_height":"","f_btn_font_style":"","f_btn_font_weight":"","f_btn_font_transform":"","f_btn_font_spacing":"","f_btn_":"","mix_color":"","mix_type":"","fe_brightness":"1","fe_contrast":"1","fe_saturate":"1","mix_color_h":"","mix_type_h":"","fe_brightness_h":"1","fe_contrast_h":"1","fe_saturate_h":"1","m_bg":"","color_overlay":"","shadow_shadow_header":"","shadow_shadow_title":"Module Shadow","shadow_shadow_size":"","shadow_shadow_offset_horizontal":"","shadow_shadow_offset_vertical":"","shadow_shadow_spread":"","shadow_shadow_color":"","title_txt":"","title_txt_hover":"","all_underline_height":"","all_underline_color":"","cat_bg_hover":"","cat_txt_hover":"","cat_border":"","cat_border_hover":"","meta_bg":"","author_txt":"","author_txt_hover":"","date_txt":"","ex_txt":"","com_bg":"","com_txt":"","rev_txt":"","audio_btn_color":"","audio_time_color":"","audio_bar_color":"","audio_bar_curr_color":"","shadow_m_shadow_header":"","shadow_m_shadow_title":"Meta info shadow","shadow_m_shadow_size":"","shadow_m_shadow_offset_horizontal":"","shadow_m_shadow_offset_vertical":"","shadow_m_shadow_spread":"","shadow_m_shadow_color":"","btn_bg":"","btn_bg_hover":"","btn_txt":"","btn_txt_hover":"","btn_border":"","btn_border_hover":"","pag_border":"","pag_h_border":"","ajax_pagination_next_prev_swipe":"","ajax_pagination_infinite_stop":"","css":"","tdc_css":"","td_column_number":2,"header_color":"","color_preset":"","border_top":"","class":"tdi_45","tdc_css_class":"tdi_45","tdc_css_class_style":"tdi_45_rand_style"}';
    block_tdi_45.td_column_number = "2";
    block_tdi_45.block_type = "td_flex_block_1";
    block_tdi_45.post_count = "12";
    block_tdi_45.found_posts = "80";
    block_tdi_45.header_color = "";
    block_tdi_45.ajax_pagination_infinite_stop = "";
    block_tdi_45.max_num_pages = "7";
    tdBlocksArray.push(block_tdi_45);
</script>
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

    .tdi_47 {
        width: 28% !important
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_47 {
            width: 240px !important
        }
    }

    @media (max-width:767px) {
        .tdi_47 {
            width: auto !important
        }
    }
</style>
<style>
    .tdi_48 {
        margin-bottom: 40px !important
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_48 {
            margin-bottom: 30px !important
        }
    }
</style>
<style>
    .tdi_48.td-a-rec {
        text-align: center
    }

    .tdi_48.td-a-rec:not(.td-a-rec-no-translate) {
        transform: translateZ(0)
    }

    .tdi_48 .td-element-style {
        z-index: -1
    }

    .tdi_48 .td-spot-id-spot_img_hidden {
        display: none
    }

    .tdi_48 .td-adspot-title {
        display: block
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
        color: var(--td_theme_color, #e3382b)
    }

    .tdi_49 .td-block-title>*:before,
    .tdi_49 .td-block-title>*:after {
        background-color: #e3382b !important
    }

    .tdi_49 {
        margin-bottom: 0px !important
    }
</style>
<style>
    .tdi_49 .td_module_wrap:nth-last-child(1) {
        margin-bottom: 0;
        padding-bottom: 0
    }

    .tdi_49 .td_module_wrap:nth-last-child(1) .td-module-container:before {
        display: none
    }

    .tdi_49 .td_module_wrap {
        padding-left: 0px;
        padding-right: 0px;
        padding-bottom: 10px;
        margin-bottom: 10px;
        display: flex
    }

    .tdi_49 .td_block_inner {
        margin-left: -0px;
        margin-right: -0px;
        display: flex;
        flex-wrap: wrap
    }

    .tdi_49 .td-module-container:before {
        bottom: -10px
    }

    .tdi_49 .td-module-container {
        border-color: #eaeaea;
        flex-grow: 1
    }

    .tdi_49 .entry-thumb {
        background-position: center 50%
    }

    .tdi_49 .td-image-wrap {
        padding-bottom: 60%
    }

    body .tdi_49 .td-favorite {
        box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.2);
        font-size: 36px
    }

    .tdi_49 .td-post-vid-time {
        display: block
    }

    .tdi_49 .td-module-meta-info-bottom {
        padding: 20px;
        background-color: #ffffff
    }

    .tdi_49 .td-image-container {
        margin: 0 0 0;
        width: auto;
        flex: 0 0 0
    }

    .tdi_49 .td-module-meta-info {
        border-color: #eaeaea
    }

    .tdi_49 .entry-title {
        margin: 0px;
        font-size: 15px !important;
        line-height: 1.5 !important;
        font-weight: 500 !important
    }

    .tdi_49 .td-excerpt {
        display: none
    }

    .tdi_49 .td-audio-player {
        opacity: 1;
        visibility: visible;
        height: auto;
        font-size: 13px
    }

    .tdi_49 .td-post-category:not(.td-post-extra-category) {
        display: none
    }

    .tdi_49 .td-author-date {
        display: inline
    }

    .tdi_49 .td-post-author-name {
        display: none
    }

    .tdi_49 .td-author-photo .avatar {
        width: 20px;
        height: 20px;
        margin-right: 6px;
        border-radius: 50%
    }

    .tdi_49 .td-post-date,
    .tdi_49 .td-post-author-name span {
        display: none;
        color: #000000
    }

    .tdi_49 .entry-review-stars {
        display: inline-block
    }

    .tdi_49 .td-icon-star,
    .tdi_49 .td-icon-star-empty,
    .tdi_49 .td-icon-star-half {
        font-size: 15px
    }

    .tdi_49 .td-module-comments {
        display: none
    }

    .tdi_49 .td-read-more {
        display: none
    }

    .tdi_49.td_with_ajax_pagination .td-next-prev-wrap a,
    .tdi_49 .td-load-more-wrap a {
        border-width: 0px;
        color: #e3382b;
        background-color: #ffffff
    }

    .tdi_49 .td-module-title a {
        color: #000000;
        box-shadow: inset 0 0 0 0 #000
    }

    .tdi_49 .td_module_wrap:hover .td-module-title a {
        color: #e3382b !important
    }

    .tdi_49 .td-post-category {
        background-color: rgba(0, 0, 0, 0)
    }

    .tdi_49 .td-post-author-name a {
        color: #000000
    }

    .tdi_49 .td-load-more-wrap a .td-load-more-icon-svg svg,
    .tdi_49 .td-load-more-wrap a .td-load-more-icon-svg svg *,
    .tdi_49.td_with_ajax_pagination .td-next-prev-wrap .td-next-prev-icon-svg svg,
    .tdi_49.td_with_ajax_pagination .td-next-prev-wrap .td-next-prev-icon-svg svg * {
        fill: #e3382b
    }

    .tdi_49.td_with_ajax_pagination .td-next-prev-wrap a:hover,
    .tdi_49 .td-load-more-wrap a:hover {
        color: #000000;
        background-color: #ffffff !important;
        border-color: #ffffff !important
    }

    .tdi_49 .td-load-more-wrap a .td-load-more-icon-svg svg,
    .tdi_49 .td-load-more-wrap a .td-load-more-icon-svg svg *,
    .tdi_49.td_with_ajax_pagination .td-next-prev-wrap a:hover .td-next-prev-icon-svg svg,
    .tdi_49.td_with_ajax_pagination .td-next-prev-wrap a:hover .td-next-prev-icon-svg svg * {
        fill: #000000
    }

    .tdi_49 .td-block-title a,
    .tdi_49 .td-block-title span {
        font-size: 18px !important;
        line-height: 2 !important;
        font-weight: 600 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.5px !important
    }

    .tdi_49 .td-editor-date,
    .tdi_49 .td-editor-date .td-post-author-name a,
    .tdi_49 .td-editor-date .entry-date,
    .tdi_49 .td-module-comments a {
        font-size: 12px !important;
        line-height: 1 !important;
        font-weight: 500 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.5px !important
    }

    .tdi_49 .td-read-more a {
        text-transform: uppercase !important
    }

    .tdi_49 .td-load-more-wrap a {
        font-size: 11px !important;
        font-weight: 500 !important;
        text-transform: uppercase !important
    }

    html:not([class*='ie']) .tdi_49 .td-module-container:hover .entry-thumb:before {
        opacity: 0
    }

    @media (min-width:768px) {
        .tdi_49 .td-module-title a {
            transition: all 0.2s ease;
            -webkit-transition: all 0.2s ease
        }
    }

    @media (min-width:1019px) and (max-width:1140px) {
        .tdi_49 .td_module_wrap {
            padding-bottom: 12.5px !important;
            margin-bottom: 12.5px !important
        }

        .tdi_49 .td_module_wrap:nth-last-child(1) {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important
        }

        .tdi_49 .td_module_wrap .td-module-container:before {
            display: block !important
        }

        .tdi_49 .td_module_wrap:nth-last-child(1) .td-module-container:before {
            display: none !important
        }

        .tdi_49 .td_module_wrap {
            padding-bottom: 12.5px;
            margin-bottom: 12.5px
        }

        .tdi_49 .td-module-container:before {
            bottom: -12.5px
        }

        .tdi_49 .td-image-container {
            margin: 0 0 -50px;
            width: auto
        }

        .tdi_49 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        @media (min-width:768px) {
            .tdi_49 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }
    }

    @media (min-width:768px) and (max-width:1018px) {
        .tdi_49 .td_module_wrap {
            padding-bottom: 10px !important;
            margin-bottom: 10px !important
        }

        .tdi_49 .td_module_wrap:nth-last-child(1) {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important
        }

        .tdi_49 .td_module_wrap .td-module-container:before {
            display: block !important
        }

        .tdi_49 .td_module_wrap:nth-last-child(1) .td-module-container:before {
            display: none !important
        }

        .tdi_49 .td_module_wrap {
            padding-bottom: 10px;
            margin-bottom: 10px
        }

        .tdi_49 .td-module-container:before {
            bottom: -10px
        }

        .tdi_49 .td-module-meta-info-bottom {
            padding: 10px 5px 0 0
        }

        .tdi_49 .td-image-container {
            margin: 0 0 -36px;
            width: auto
        }

        .tdi_49 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        .tdi_49 .td-block-title a,
        .tdi_49 .td-block-title span {
            font-size: 12px !important
        }

        .tdi_49 .entry-title {
            font-size: 12px !important
        }

        @media (min-width:768px) {
            .tdi_49 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }
    }

    @media (max-width:767px) {
        .tdi_49 .td_module_wrap {
            padding-bottom: 10px !important;
            margin-bottom: 10px !important
        }

        .tdi_49 .td_module_wrap:nth-last-child(1) {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important
        }

        .tdi_49 .td_module_wrap .td-module-container:before {
            display: block !important
        }

        .tdi_49 .td_module_wrap:nth-last-child(1) .td-module-container:before {
            display: none !important
        }

        .tdi_49 .td_module_wrap {
            padding-bottom: 10px;
            margin-bottom: 10px
        }

        .tdi_49 .td-module-container:before {
            bottom: -10px
        }

        .tdi_49 .td-image-wrap {
            padding-bottom: 55%
        }

        .tdi_49 .td-module-title a {
            box-shadow: inset 0 0 0 0 #000
        }

        .tdi_49 .td-block-title a,
        .tdi_49 .td-block-title span {
            font-size: 16px !important
        }

        .tdi_49 .entry-title {
            font-size: 14px !important
        }

        @media (min-width:768px) {
            .tdi_49 .td-module-title a {
                transition: all 0.2s ease;
                -webkit-transition: all 0.2s ease
            }
        }
    }
</style>
<script>
    var block_tdi_49 = new tdBlock();
    block_tdi_49.id = "tdi_49";
    block_tdi_49.atts = '{"art_title_pos":"bottom","info_pos":"title","art_excerpt_pos":"bottom","modules_category":"","btn_pos":"bottom","limit":"3","show_btn":"none","show_com":"none","f_title_font_family":"eyJsYW5kc2NhcGUiOiIifQ==","f_title_font_size":"eyJhbGwiOiIxNSIsInBob25lIjoiMTQiLCJwb3J0cmFpdCI6IjEyIiwibGFuZHNjYXBlIjoiMTUifQ==","f_title_font_line_height":"1.5","f_title_font_weight":"500","f_cat_font_family":"","f_cat_font_weight":"","f_meta_font_family":"eyJsYW5kc2NhcGUiOiIifQ==","f_meta_font_size":"12","f_meta_font_weight":"500","f_ex_font_family":"","tdc_css":"eyJhbGwiOnsibWFyZ2luLWJvdHRvbSI6IjAiLCJkaXNwbGF5IjoiIn0sInBvcnRyYWl0Ijp7ImRpc3BsYXkiOiIifSwicG9ydHJhaXRfbWF4X3dpZHRoIjoxMDE4LCJwb3J0cmFpdF9taW5fd2lkdGgiOjc2OH0=","cat_bg":"rgba(0,0,0,0)","art_title":"0","image_height":"eyJhbGwiOiI2MCIsInBob25lIjoiNTUifQ==","hide_image":"","category_id":"","title_txt_hover":"#e3382b","modules_on_row":"","modules_divider":"","modules_divider_color":"","author_txt":"#000000","sort":"popular","image_size":"","show_cat":"none","show_excerpt":"none","image_margin":"eyJhbGwiOiIwIDAgMCIsImxhbmRzY2FwZSI6IjAgMCAtNTBweCIsInBvcnRyYWl0IjoiMCAwIC0zNnB4In0=","title_txt":"#000000","meta_bg2":"#ffffff","meta_padding2":"eyJhbGwiOiIyMHB4IiwicG9ydHJhaXQiOiIxMHB4IDVweCAwIDAifQ==","f_meta_font_transform":"uppercase","f_meta_font_spacing":"0.5","f_meta_font_line_height":"1","all_underline_color":"","date_txt":"#000000","all_modules_space":"eyJhbGwiOiIyMCIsInBvcnRyYWl0IjoiMjAiLCJsYW5kc2NhcGUiOiIyNSIsInBob25lIjoiMjAifQ==","block_template_id":"td_block_template_8","border_color":"#e3382b","td_ajax_filter_type":"","td_filter_default_txt":"","td_ajax_preloading":"preload","ajax_pagination":"","pag_border_width":"0","pag_text":"#e3382b","pag_h_text":"#000000","pag_bg":"#ffffff","pag_h_bg":"#ffffff","f_btn_font_family":"eyJsYW5kc2NhcGUiOiIifQ==","f_btn_font_transform":"uppercase","f_btn_font_weight":"","f_more_font_size":"11","f_more_font_weight":"500","f_more_font_transform":"uppercase","f_more_font_family":"eyJsYW5kc2NhcGUiOiIifQ==","f_header_font_size":"eyJhbGwiOiIxOCIsInBvcnRyYWl0IjoiMTIiLCJwaG9uZSI6IjE2IiwibGFuZHNjYXBlIjoiMTgifQ==","f_header_font_line_height":"2","f_header_font_weight":"600","f_header_font_transform":"uppercase","f_header_font_spacing":"0.5","f_header_font_family":"eyJsYW5kc2NhcGUiOiIifQ==","show_date":"none","show_author":"none","custom_title":"\u17a2\u178f\u17d2\u1790\u1794\u1791\u1796\u17c1\u1789\u1793\u17b7\u1799\u1798","header_color":"#dd3333","modules_gap":"0","block_type":"td_flex_block_5","separator":"","custom_url":"","title_tag":"","mc5_tl":"","mc5_title_tag":"","mc5_el":"","post_ids":"","taxonomies":"","category_ids":"","in_all_terms":"","tag_slug":"","autors_id":"","installed_post_types":"","include_cf_posts":"","exclude_cf_posts":"","linked_posts":"","favourite_only":"","offset":"","open_in_new_window":"","show_modified_date":"","time_ago":"","time_ago_add_txt":"ago","time_ago_txt_pos":"","review_source":"","el_class":"","td_query_cache":"","td_query_cache_expiration":"","td_ajax_filter_ids":"","m_padding":"","modules_border_size":"","modules_border_style":"","modules_border_color":"#eaeaea","divider_on":"","h_effect":"","image_alignment":"50","image_radius":"","show_favourites":"","fav_size":"2","fav_space":"","fav_ico_color":"","fav_ico_color_h":"","fav_bg":"","fav_bg_h":"","fav_shadow_shadow_header":"","fav_shadow_shadow_title":"Shadow","fav_shadow_shadow_size":"","fav_shadow_shadow_offset_horizontal":"","fav_shadow_shadow_offset_vertical":"","fav_shadow_shadow_spread":"","fav_shadow_shadow_color":"","video_icon":"","video_popup":"yes","video_rec":"","spot_header":"","video_rec_title":"","video_rec_color":"","video_rec_disable":"","autoplay_vid":"yes","show_vid_t":"block","vid_t_margin":"","vid_t_padding":"","video_title_color":"","video_title_color_h":"","video_bg":"","video_overlay":"","vid_t_color":"","vid_t_bg_color":"","f_vid_title_font_header":"","f_vid_title_font_title":"Video pop-up article title","f_vid_title_font_settings":"","f_vid_title_font_family":"","f_vid_title_font_size":"","f_vid_title_font_line_height":"","f_vid_title_font_style":"","f_vid_title_font_weight":"","f_vid_title_font_transform":"","f_vid_title_font_spacing":"","f_vid_title_":"","f_vid_time_font_title":"Video duration text","f_vid_time_font_settings":"","f_vid_time_font_family":"","f_vid_time_font_size":"","f_vid_time_font_line_height":"","f_vid_time_font_style":"","f_vid_time_font_weight":"","f_vid_time_font_transform":"","f_vid_time_font_spacing":"","f_vid_time_":"","meta_info_horiz":"content-horiz-left","meta_width":"","meta_margin":"","meta_margin2":"","meta_padding":"","meta_info_border_size":"","meta_info_border_size2":"","meta_info_border_style":"","meta_info_border_color":"#eaeaea","meta_info_border_radius":"","meta_info_border_radius2":"","info_space":"","art_excerpt":"","excerpt_inline":"","meta_space":"","show_audio":"block","hide_audio":"","art_audio_pos":"top","art_audio":"","art_audio_size":"1.5","modules_category_margin":"","modules_category_padding":"","modules_category_border":"","modules_category_radius":"0","modules_extra_cat":"","author_photo":"","author_photo_size":"","author_photo_space":"","author_photo_radius":"","show_review":"inline-block","review_space":"","review_size":"2.5","review_distance":"","btn_title":"","btn_margin":"","btn_padding":"","btn_border_width":"","btn_radius":"","pag_space":"","pag_padding":"","pag_border_radius":"","prev_tdicon":"","next_tdicon":"","pag_icons_size":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_style":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_family":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_spacing":"","f_more_":"","f_title_font_header":"","f_title_font_title":"Article title","f_title_font_settings":"","f_title_font_style":"","f_title_font_transform":"","f_title_font_spacing":"","f_title_":"","f_cat_font_title":"Article category tag","f_cat_font_settings":"","f_cat_font_size":"","f_cat_font_line_height":"","f_cat_font_style":"","f_cat_font_transform":"","f_cat_font_spacing":"","f_cat_":"","f_meta_font_title":"Article meta info","f_meta_font_settings":"","f_meta_font_style":"","f_meta_":"","f_ex_font_title":"Article excerpt","f_ex_font_settings":"","f_ex_font_size":"","f_ex_font_line_height":"","f_ex_font_style":"","f_ex_font_weight":"","f_ex_font_transform":"","f_ex_font_spacing":"","f_ex_":"","f_btn_font_title":"Article read more button","f_btn_font_settings":"","f_btn_font_size":"","f_btn_font_line_height":"","f_btn_font_style":"","f_btn_font_spacing":"","f_btn_":"","mix_color":"","mix_type":"","fe_brightness":"1","fe_contrast":"1","fe_saturate":"1","mix_color_h":"","mix_type_h":"","fe_brightness_h":"1","fe_contrast_h":"1","fe_saturate_h":"1","m_bg":"","shadow_shadow_header":"","shadow_shadow_title":"Module Shadow","shadow_shadow_size":"","shadow_shadow_offset_horizontal":"","shadow_shadow_offset_vertical":"","shadow_shadow_spread":"","shadow_shadow_color":"","meta_bg":"","all_underline_height":"","cat_bg_hover":"","cat_txt":"","cat_txt_hover":"","cat_border":"","cat_border_hover":"","author_txt_hover":"","ex_txt":"","com_bg":"","com_txt":"","rev_txt":"","shadow_m_shadow_header":"","shadow_m_shadow_title":"Meta info shadow","shadow_m_shadow_size":"","shadow_m_shadow_offset_horizontal":"","shadow_m_shadow_offset_vertical":"","shadow_m_shadow_spread":"","shadow_m_shadow_color":"","audio_btn_color":"","audio_time_color":"","audio_bar_color":"","audio_bar_curr_color":"","btn_bg":"","btn_bg_hover":"","btn_txt":"","btn_txt_hover":"","btn_border":"","btn_border_hover":"","pag_border":"","pag_h_border":"","ajax_pagination_next_prev_swipe":"","ajax_pagination_infinite_stop":"","css":"","td_column_number":1,"color_preset":"","border_top":"","class":"tdi_49","tdc_css_class":"tdi_49","tdc_css_class_style":"tdi_49_rand_style"}';
    block_tdi_49.td_column_number = "1";
    block_tdi_49.block_type = "td_flex_block_5";
    block_tdi_49.post_count = "3";
    block_tdi_49.found_posts = "361";
    block_tdi_49.header_color = "#dd3333";
    block_tdi_49.ajax_pagination_infinite_stop = "";
    block_tdi_49.max_num_pages = "121";
    tdBlocksArray.push(block_tdi_49);
</script>
<?php
$content = ob_get_clean();
include BASE_PATH . 'views/master.php';
?>