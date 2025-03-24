<?php
ob_start();
require_once '../connection/db.php';
require_once '../config/config.php';
$title = "FactNews - Blog";
?>

<div class="bg7">
    <div class="container p-t-20 p-b-10">
        <!-- <h2 class="f1-l-1 koulen cl12 add-font">
            ព័ត៌មានជាតិ
        </h2> -->
    </div>
</div>
<!-- Post -->
<section class="bg0 p-t-0 bg7">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="p-b-20">
                    <!-- Blog Detail -->
                    <div class="p-b-30">

                        <h3 class="f1-l-3 cl2 p-b-16 p-t-10 text-danger respon2">
                            Nulla non interdum metus non laoreet nisi tellus eget aliquam lorem pellentesque
                        </h3>

                        <div class="flex-wr-s-s p-b-20">
                            <span class="f1-s-3 cl8 m-r-15">
                                <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                    by John Alvarado
                                </a>
                                <span class="m-rl-3">-</span>
                                <span>
                                    Feb 18
                                </span>
                            </span>
                            <span class="f1-s-3 cl8 m-r-15">
                                5239 Views
                            </span>
                            <a href="#" class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
                                0 Comment
                            </a>
                        </div>
                        <div class="wrap-pic-max-w p-b-25">
                            <img src="<?php echo BASE_URL; ?>public/client/images/blog-list-01.jpg" alt="IMG">
                        </div>

                        <p class="f1-s-11 cl6 p-b-20">
                            Curabitur volutpat bibendum molestie. Vestibulum ornare gravida semper. Aliquam a dui suscipit, fringilla metus id, maximus leo. Vivamus sapien arcu, mollis eu pharetra vitae, condimentum in orci. Integer eu sodales dolor. Maecenas elementum arcu eu convallis rhoncus. Donec tortor sapien, euismod a faucibus eget, porttitor quis libero.
                        </p>

                        <p class="f1-s-11 cl6 p-b-20">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat.
                        </p>

                        <p class="f1-s-11 cl6 p-b-20">
                            Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate
                        </p>

                        <!-- Tag -->
                        <div class="flex-s-s p-t-12 p-b-15">
                            <span class="f1-s-12 cl5 m-r-8">
                                Tags:
                            </span>

                            <div class="flex-wr-s-s size-w-0">
                                <a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
                                    Streetstyle
                                </a>

                                <a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
                                    Crafts
                                </a>
                            </div>
                        </div>

                        <!-- Share -->
                        <div class="flex-s-s">
                            <span class="f1-s-12 cl5 p-t-1 m-r-15">
                                Share:
                            </span>

                            <div class="flex-wr-s-s size-w-0">
                                <a href="#" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-facebook-f m-r-7"></i>
                                    Facebook
                                </a>

                                <a href="#" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-twitter m-r-7"></i>
                                    Twitter
                                </a>

                                <a href="#" class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-google-plus-g m-r-7"></i>
                                    Google+
                                </a>

                                <a href="#" class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-pinterest-p m-r-7"></i>
                                    Pinterest
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Leave a comment -->
                    <div>
                        <h4 class="f1-l-4 cl3 p-b-12">
                            Leave a Comment
                        </h4>

                        <p class="f1-s-13 cl8 p-b-40">
                            Your email address will not be published. Required fields are marked *
                        </p>

                        <form>
                            <textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="msg" placeholder="Comment..."></textarea>

                            <input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="name" placeholder="Name*">

                            <input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="email" placeholder="Email*">

                            <input class="bo-1-rad-3 bocl13 size-a-16 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="website" placeholder="Website">

                            <button class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10">
                                Post Comment
                            </button>
                        </form>
                    </div>

                    <!-- Entertain -->
                    <?php
                    // include 'components/technology.php'; 
                    ?>

                    <!-- Ads -->
                    <div class="tab01 p-t-30 p-b-20">
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
                    <div class="p-t-22 p-b-55">
                        <img class="max-w-full" src="<?php echo BASE_URL; ?>public/client/images/ads/Ads_4.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
include BASE_PATH . 'views/master.php';
?>