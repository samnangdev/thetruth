<?php
require_once  '../controllers/HomeController.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>public/client/images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/client/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo BASE_URL; ?>public/client/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo BASE_URL; ?>public/client/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/client/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/client/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/client/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/client/css/util.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/client/css/main.css">
    <!-- Optional if needed: <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/client/css/carousel.css"> -->
    <!--===============================================================================================-->
    <!-- {{-- Google font library --}} -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Moulpali&family=Siemreap&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Siemreap&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <style>
        .koulen {
            font-family: 'Koulen', 'Alegreya Sans', sans-serif !important;
        }
        .btb{
            font-family: 'Battambang', 'Alegreya Sans', sans-serif !important;
        }
        .sr {
        font-family: 'Siemreap', 'Alegreya Sans', sans-serif !important;
        }
    </style>
</head>


<body class="animsition">

    <!-- Header -->
    <header class="bg7">
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <div class="topbar" style="background-color: rgb(7, 12, 51 )">
                <div class="content-topbar container h-100">
                    <div class="left-topbar">
                        <span class="left-topbar-item flex-wr-s-c">
                            <span>
                                Phnom Penh
                            </span>

                            <img class="m-b-1 m-rl-8" src="<?php echo BASE_URL; ?>public/client/images/icons/icon-night.png"
                                alt="IMG">

                            <span>
                                HI 58° LO 56°
                            </span>
                        </span>
                        <a href="/about" class="left-topbar-item">
                            About
                        </a>

                        <a href="/contact" class="left-topbar-item">
                            Contact
                        </a>

                        <a href="#" class="left-topbar-item">
                            Sing up
                        </a>

                        <a href="admin/index.php" class="left-topbar-item">
                            Log in
                        </a>
                    </div>
                    <div class="right-topbar">
                        <a href="#">
                            <span class="fab fa-facebook-f"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-twitter"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-pinterest-p"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-vimeo-v"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-youtube"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Header Mobile -->
            <div class="wrap-header-mobile">
                <!-- Logo moblie -->
                <div class="logo-mobile">
                    <a href="index.html"><img src="<?php echo BASE_URL; ?>public/client/images/logo_1.png" alt="IMG-LOGO"></a>
                </div>

                <!-- Button show menu -->
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>
            <!-- Menu Mobile -->
            <div class="menu-mobile">
                <ul class="topbar-mobile">
                    <li class="left-topbar">
                        <span class="left-topbar-item flex-wr-s-c">
                            <span>
                                New York, NY
                            </span>

                            <img class="m-b-1 m-rl-8" src="<?php echo BASE_URL; ?>public/client/images/icons/icon-night.png"
                                alt="IMG">

                            <span>
                                HI 58° LO 56°
                            </span>
                        </span>
                    </li>

                    <li class="left-topbar">
                        <a href="#" class="left-topbar-item">
                            About
                        </a>

                        <a href="#" class="left-topbar-item">
                            Contact
                        </a>

                        <a href="#" class="left-topbar-item">
                            Sing up
                        </a>

                        <a href="#" class="left-topbar-item">
                            Log in
                        </a>
                    </li>

                    <li class="right-topbar">
                        <a href="#">
                            <span class="fab fa-facebook-f"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-twitter"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-pinterest-p"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-vimeo-v"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-youtube"></span>
                        </a>
                    </li>
                </ul>

                <ul class="main-menu-m">
                    <li>
                        <a href="index.html">Home</a>
                        <ul class="sub-menu-m">
                            <li><a href="index.html">Homepage v1</a></li>
                            <li><a href="home-02.html">Homepage v2</a></li>
                            <li><a href="home-03.html">Homepage v3</a></li>
                        </ul>

                        <span class="arrow-main-menu-m">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </li>

                    <li>
                        <a href="category-01.html">News</a>
                    </li>

                    <li>
                        <a href="category-02.html">Entertainment </a>
                    </li>

                    <li>
                        <a href="category-01.html">Business</a>
                    </li>

                    <li>
                        <a href="category-02.html">Travel</a>
                    </li>

                    <li>
                        <a href="category-01.html">Life Style</a>
                    </li>

                    <li>
                        <a href="category-02.html">Video</a>
                    </li>

                    <li>
                        <a href="#">Features</a>
                        <ul class="sub-menu-m">
                            <li><a href="category-01.html">Category Page v1</a></li>
                            <li><a href="category-02.html">Category Page v2</a></li>
                            <li><a href="blog-grid.html">Blog Grid Sidebar</a></li>
                            <li><a href="blog-list-01.html">Blog List Sidebar v1</a></li>
                            <li><a href="blog-list-02.html">Blog List Sidebar v2</a></li>
                            <li><a href="blog-detail-01.html">Blog Detail Sidebar</a></li>
                            <li><a href="blog-detail-02.html">Blog Detail No Sidebar</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>

                        <span class="arrow-main-menu-m">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </li>
                </ul>
            </div>
            <!-- Logo & Search -->
            <div class="wrap-logo container">
                <!-- Logo desktop -->
                <div class="logo">
                    <a href="/"><img src="<?php echo BASE_URL; ?>public/client/images/logo_1.png" alt="LOGO"></a>
                </div>

                <!-- Banner -->
                <div class="banner-header">
                    <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
                        <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search"
                            style="background-color: #ffffff;" placeholder="Search">
                        <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Menu Desktop -->
            <div class="wrap-main-nav">
                <div class="main-nav">
                    <!-- Menu desktop -->
                    <nav class="menu-desktop">
                        <a class="logo-stick" href="index.html">
                            <img src="<?php echo BASE_URL; ?>public/client/images/logo_1.png" alt="LOGO">
                        </a>
                        <ul class="main-menu"  >
                            <li class="main-menu-active">
                            <a href="index.html" class="koulen">ទំព័រដើម</a>

                            </li>
                            <?php
                            $HomeController = new HomeController();
                            $categories = $HomeController->listCategory();

                            foreach ($categories as $mainCategory => $subCategories):
                                $hasSubcategories = !empty($subCategories); // Check if there are subcategories
                            ?>
                                <li class="<?= $hasSubcategories ? 'dropdown' : '' ?>">
                                    <a href="<?php ?>" <?= $hasSubcategories ? 'class="koulen dropdown-toggle"' : 'class="koulen"' ?>>
                                        <?php echo $mainCategory; ?>
                                    </a>
                                    <?php if ($hasSubcategories): ?>
                                        <ul class="sub-menu">
                                            <?php foreach ($subCategories as $subCategory): ?>
                                                <li><a href="#" class="koulen"><?php echo $subCategory; ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <!-- <ul class="main-menu">
                            <li class="main-menu-active">
                                <a href="index.html">ទំព័រដើម</a>
                            </li>
                            <?php
                            $HomeController = new HomeController();
                            $categories = $HomeController->listCategory();

                            foreach ($categories as $mainCategory => $subCategories):
                            ?>
                                <li>
                                    <a href="#" class="dropdown-toggle"><?php echo $mainCategory; ?></a>
                                    <?php if (!empty($subCategories)): ?>
                                        <ul class="sub-menu">
                                            <?php foreach ($subCategories as $subCategory): ?>
                                                <li><a href="#"><?php echo $subCategory; ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul> -->

                        <!-- <ul class="main-menu">
                            <li class="main-menu-active add-font">
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="#" class=" dropdown-toggle">National</a>
                                <ul class="sub-menu">
                                    <li><a href="category-01.html">Politics</a></li>
                                    <li><a href="category-02.html">Report/Interview</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">International</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle">Economy</a>
                                <ul class="sub-menu">
                                    <li><a href="category-01.html">Financial</a></li>
                                    <li><a href="category-02.html">Real Estate</a></li>
                                    <li><a href="blog-grid.html">Creativity</a></li>
                                    <li><a href="blog-list-01.html">Special Report</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Relations</a>
                            </li>
                            <li>
                                <a href="#">Business</a>
                            </li>
                            <li>
                                <a href="#">Technology</a>
                            </li>
                            <li>
                                <a href="#">Sports</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle">Entertainment</a>
                                <ul class="sub-menu">
                                    <li><a href="category-01.html">Tourism</a></li>
                                    <li><a href="category-02.html">Arts & Culture</a></li>
                                    <li><a href="blog-grid.html">Food</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <?php echo $content; ?>

    <!-- Footer -->
    <footer>
        <div class="bg2 p-t-0 p-b-0" style="background-color: rgb(255, 255, 255)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 p-b-20 mt-4">
                        <div class="size-h-3 flex-s-c">
                            <a href="index.html">
                                <img class="max-s-full" src="<?php echo BASE_URL; ?>public/client/images/logo_1.png"
                                    alt="LOGO">
                            </a>
                        </div>

                        <div>
                            <p class="f1-s-1 cl1000 p-b-16 text-justify">
                            Fact News ​មិនមែន​ធ្វើការ​លើ​សារ​ព័ត៌មាន​ ​និង​បម្រើ​មនោគម​ន៍​វិជ្ជា​ណាមួយ​ឡើយ​។​ Fact News ​គឺជា​ក្រុម​ដែល​ធ្វើ​កិច្ច​វិភាគ​លើ​ព្រឹត្តិការណ៍​ពិភពលោក​ ​និង​ជា​ថង់​ប្រាជ្ញា​សម្រាប់​សាធារណៈ​ជន​ដកស្រង់​ចំណេះ​ដឹង​និង​តាមដាន​ព្រឹត្តិ​កា​ណ៍​ពិភពលោក​។​ ​រាល់​ស្នាដៃ​វិភាគ​ ​និង​ការ​ចែករំលែក​ចំណេះ​ដឹង​ទាំងឡាយ​ ​គឺ​ក្រុម​ការងារ​ធ្វើឡើង​ដោយ​ជំនាញ​ ​ដោយ​ផ្អែកលើ​អំណះអំណាង​ច្បាស់លាស់​។
                            </p>

                            <p class="f1-s-1 cl1000 p-b-16">
                                Any questions? Call us on (+1) 96 716 6879
                            </p>

                            <div class="p-t-15">
                                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-facebook-f"></span>
                                </a>

                                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-twitter"></span>
                                </a>

                                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-pinterest-p"></span>
                                </a>

                                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-vimeo-v"></span>
                                </a>

                                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-youtube"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-1 p-b-20">
                        <div class="size-h-3 flex-s-c">
                            <h5 class="f1-m-7 text-dark">
                                ប្រភេទ
                            </h5>
                        </div>

                        <ul class="m-t--12">
                            <li class="how-bor1 p-rl-5 p-tb-10">
                                <a href="#"
                                    class="f1-s-5 hov-cl10 trans-03 p-tb-8" style="color:rgb(122, 122, 122)">
                                    Fashion (22)
                                </a>
                            </li>

                            <li class="how-bor1 p-rl-5 p-tb-10">
                                <a href="#"
                                    class="f1-s-5 hov-cl10 trans-03 p-tb-8" style="color:rgb(122, 122, 122)">
                                    Technology (29)
                                </a>
                            </li>

                            <li class="how-bor1 p-rl-5 p-tb-10">
                                <a href="#"
                                    class="f1-s-5 hov-cl10 trans-03 p-tb-8" style="color:rgb(122, 122, 122)">
                                    Street Style (15)
                                </a>
                            </li>

                            <li class="how-bor1 p-rl-5 p-tb-10">
                                <a href="#"
                                    class="f1-s-5 hov-cl10 trans-03 p-tb-8" style="color:rgb(122, 122, 122)">
                                    Life Style (28)
                                </a>
                            </li>

                            <li class="how-bor1 p-rl-5 p-tb-10">
                                <a href="#"
                                    class="f1-s-5 hov-cl10 trans-03 p-tb-8" style="color:rgb(122, 122, 122)">
                                    DIY & Crafts (16)
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-1 p-b-20">
                        <div class="size-h-3 flex-s-c">
                            <h5 class="f1-m-7 text-dark">
                                ពេញនិយមបំផុត
                            </h5>
                        </div>

                        <ul>
                            <li class="flex-wr-sb-s p-b-20">
                                <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                                    <img src="<?php echo BASE_URL; ?>public/client/images/popular-post-01.jpg" alt="IMG">
                                </a>

                                <div class="size-w-5">
                                    <h6 class="p-b-5">
                                        <a href="#" class="f1-s-5 hov-cl10 trans-03"
                                            style="color:rgb(122, 122, 122)">
                                            Donec metus orci, malesuada et lectus vitae
                                        </a>
                                    </h6>

                                    <span class="f1-s-3 cl6">
                                        Feb 17
                                    </span>
                                </div>
                            </li>

                            <li class="flex-wr-sb-s p-b-20">
                                <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                                    <img src="<?php echo BASE_URL; ?>public/client/images/popular-post-02.jpg" alt="IMG">
                                </a>

                                <div class="size-w-5">
                                    <h6 class="p-b-5">
                                        <a href="#" class="f1-s-5 hov-cl10 trans-03"
                                            style="color:rgb(122, 122, 122)">
                                            Lorem ipsum dolor sit amet, consectetur
                                        </a>
                                    </h6>

                                    <span class="f1-s-3 cl6">
                                        Feb 16
                                    </span>
                                </div>
                            </li>

                            <li class="flex-wr-sb-s p-b-20">
                                <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                                    <img src="<?php echo BASE_URL; ?>public/client/images/popular-post-03.jpg" alt="IMG">
                                </a>

                                <div class="size-w-5">
                                    <h6 class="p-b-5">
                                        <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03"
                                            style="color:rgb(122, 122, 122)">
                                            Suspendisse dictum enim quis imperdiet auctor
                                        </a>
                                    </h6>

                                    <span class="f1-s-3 cl6">
                                        Feb 15
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <!-- {{-- Last footer --}} -->
        <div class="bg11" style="background-color: rgb(7, 12, 51)">
            <div class="container size-h-2 flex-c-c p-tb-15">
                <span class="f1-s-1 cl0 txt-center">
                    ​© រក្សា​សិទ្ធិ​គ្រប់​យ៉ាង​ដោយ​ Fact News.
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </span>
            </div>
        </div>
    </footer>

    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <span class="fas fa-angle-up"></span>
        </span>
    </div>

    <!-- Modal Video 01-->
    <div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document" data-dismiss="modal">
            <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

            <div class="wrap-video-mo-01">
                <div class="video-mo-01">
                    <iframe src="https://www.youtube.com/embed/wJnBTPUQS5A?rel=0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="<?php echo BASE_URL; ?>public/client/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo BASE_URL; ?>public/client/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo BASE_URL; ?>public/client/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo BASE_URL; ?>public/client/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo BASE_URL; ?>public/client/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>