<?php
    require_once '../connection/db.php';
    require_once '../config/config.php';
    // require_once BASE_PATH . 'connection/db.php';
    // require_once BASE_PATH . 'config/config.php';
    
    $title = "FactNews - Home";
    ob_start();
?>
<!-- Breaking News -->
<div class="bg7">
    <?php include 'components/breaking_news.php'; ?>
</div>

<!-- Feature post For Breaking News -->
<?php include 'components/feature_post.php'; ?>

<!-- Post -->
<section class="bg0 p-t-30 bg7">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="p-b-20">
                    <!-- New -->
                    <?php include 'components/national.php'; ?>

                    <!-- National -->
                    <?php include 'components/international.php'; ?>

                    <!-- Entertain -->
                    <?php include 'components/technology.php'; ?>

                    <!-- Ads -->
                    <div class="tab01 p-b-20">
                        <img class="max-w-full" src="<?php echo BASE_URL ?>public/client/images/ads/Ads_3.png">
                    </div>
                </div>
            </div>
            <!-- Content right -->
            <div class="col-md-10 col-lg-4">
                <div class="p-l-10 p-rl-0-sr991 p-b-20">
                    <!-- Most popular -->
                    <?php include 'components/most_popular.php'; ?>

                    <!--  -->
                    <div class="flex-c-s p-t-8">
                        <a href="#">
                            <img class="max-w-full" src="<?php echo BASE_URL ?>public/client/images/ads/Ads_1.gif" alt="IMG">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technology & Feature Video -->
<section class="bg0 p-t-10 p-b-30 bg7">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Technology -->
            <?php include 'components/entertainment.php'; ?>
            <!-- Feature video -->
            <?php include 'components/feature_video.php'; ?>
        </div>
    </div>
</section>

<?php
    $content = ob_get_clean();
    include BASE_PATH . 'views/master.php';
?>