<?php
require_once BASE_PATH . 'controllers/HomeController.php';

?>
<div class="tab01 p-b-20">
    <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991" style="background-color: #ffffff;">
        <!-- Brand tab -->
        <h3 class="f1-m-2 cl12 tab01-title koulen text-danger">
            បច្ចេកវិទ្យា
        </h3>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">

            <!-- <li class="nav-item">
                <a class="nav-link koulen active" data-toggle="tab" href="#tab1-1"
                    role="tab">ទាំងអស់</a>
            </li> -->
            
        </ul>

        <!--  -->
        <a href="category-01.html" class="koulen tab01-link f1-s-1 cl9 hov-cl10 trans-03">
            បន្ថែម
            <i class="fs-12 m-l-5 fa fa-caret-right"></i>
        </a>
    </div>


    <!-- Tab panes -->
    <div class="tab-content p-t-35">
        <!-- - -->
        <div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
            <div class="row">
                <?php
                $HomeController = new HomeController();
                $rows = $HomeController->listNational(); // Get the latest 4 articles

                $first = true; // Flag to handle the first article separately
                $count = 0; // Counter for item posts
                ?>

                <?php foreach ($rows as $row): ?>
                    <?php if ($first): ?>
                        <!-- Show the Latest (1st) Post -->
                        <div class="col-sm-6 p-r-25 p-r-15-sr991">
                            <div class="m-b-30">
                                <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                    <img src="<?php echo BASE_URL . 'storage/uploads/article/' . $row['IMAGE_URL']; ?>" alt="IMG">
                                </a>
                                <div class="p-t-20">
                                    <h5 class="p-b-5">
                                        <a href="blog-detail-01.html" class="btb f1-m-3 cl2 hov-cl10 trans-03">
                                            <?php echo $row["TITLE"] ?>
                                        </a>
                                    </h5>
                                    <span class="cl8">
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            By <?php echo $row['AUTHOR_ID'] ?>
                                        </a>
                                        <span class="f1-s-3 m-rl-3">-</span>
                                        <span class="f1-s-3">
                                            <?php echo date("M d", strtotime($row['PUBLISHED_DATE'])); ?>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $first = false; // Change flag after first article
                        continue; // Skip to next loop iteration
                        ?>
                    <?php endif; ?>

                    <?php if ($count == 0): ?>
                        <!-- Start Item Post Section -->
                        <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <?php endif; ?>

                        <!-- Display Next 3 Posts -->
                        <div class="flex-wr-sb-s m-b-30">
                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                <img src="<?php echo BASE_URL . 'storage/uploads/article/' . $row['IMAGE_URL']; ?>" alt="IMG">
                            </a>
                            <div class="size-w-2">
                                <h5 class="p-b-4">
                                    <a href="blog-detail-01.html" class="f1-s-5 btb cl3 hov-cl10 trans-03">
                                        <?php echo $row["TITLE"] ?>
                                    </a>
                                </h5>
                                <span class="cl8">
                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                        By <?php echo $row['AUTHOR_ID'] ?>
                                    </a>
                                    <span class="f1-s-3 m-rl-3">-</span>
                                    <span class="f1-s-3">
                                        <?php echo date("M d", strtotime($row['PUBLISHED_DATE'])); ?>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <?php
                        $count++;
                        if ($count == 3) {
                            echo '</div>'; // Close Item Post Section
                            break; // Stop after showing 3 posts
                        }
                        ?>
                    <?php endforeach; ?>
                        </div>
            </div>

            <!-- - -->
            <div class="tab-pane fade" id="tab1-2" role="tabpanel">
                <div class="row">
                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item post -->
                        <div class="m-b-30">
                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('client/images/post-09.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-t-20">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html"
                                        class="f1-m-3 cl2 hov-cl10 trans-03">
                                        2 American live music lorem ipsum dolor sit amet consectetur
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        Music
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 18
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item post -->
                        <div class="flex-wr-sb-s m-b-30">
                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('client/images/post-08.jpg') }}" alt="IMG">
                            </a>

                            <div class="size-w-2">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html"
                                        class="f1-s-5 cl3 hov-cl10 trans-03">
                                        Donec metus orci, malesuada et lectus vitae
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                        Celebrity
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 12
                                    </span>
                                </span>
                            </div>
                        </div>

                        <!-- Item post -->
                        <div class="flex-wr-sb-s m-b-30">
                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('client/images/post-06.jpg') }}" alt="IMG">
                            </a>

                            <div class="size-w-2">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html"
                                        class="f1-s-5 cl3 hov-cl10 trans-03">
                                        Donec metus orci, malesuada et lectus vitae
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                        Music
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 17
                                    </span>
                                </span>
                            </div>
                        </div>

                        <!-- Item post -->
                        <div class="flex-wr-sb-s m-b-30">
                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('client/images/post-07.jpg') }}" alt="IMG">
                            </a>

                            <div class="size-w-2">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html"
                                        class="f1-s-5 cl3 hov-cl10 trans-03">
                                        Donec metus orci, malesuada et lectus vitae
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                        Game
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 16
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- - -->
            <div class="tab-pane fade" id="tab1-3" role="tabpanel">
                <div class="row">
                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item post -->
                        <div class="m-b-30">
                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('client/images/post-08.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-t-20">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html"
                                        class="f1-m-3 cl2 hov-cl10 trans-03">
                                        3 American live music lorem ipsum dolor sit amet consectetur
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        Music
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 18
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item post -->
                        <div class="flex-wr-sb-s m-b-30">
                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('client/images/post-07.jpg') }}" alt="IMG">
                            </a>

                            <div class="size-w-2">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html"
                                        class="f1-s-5 cl3 hov-cl10 trans-03">
                                        Donec metus orci, malesuada et lectus vitae
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                        Celebrity
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 12
                                    </span>
                                </span>
                            </div>
                        </div>

                        <!-- Item post -->
                        <div class="flex-wr-sb-s m-b-30">
                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('client/images/post-06.jpg') }}" alt="IMG">
                            </a>

                            <div class="size-w-2">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html"
                                        class="f1-s-5 cl3 hov-cl10 trans-03">
                                        Donec metus orci, malesuada et lectus vitae
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                        Music
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 17
                                    </span>
                                </span>
                            </div>
                        </div>

                        <!-- Item post -->
                        <div class="flex-wr-sb-s m-b-30">
                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('client/images/post-05.jpg') }}" alt="IMG">
                            </a>

                            <div class="size-w-2">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html"
                                        class="f1-s-5 cl3 hov-cl10 trans-03">
                                        Donec metus orci, malesuada et lectus vitae
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                        Game
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 16
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- - -->
            <div class="tab-pane fade" id="tab1-4" role="tabpanel">
                <div class="row">
                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item post -->
                        <div class="m-b-30">
                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('client/images/post-06.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-t-20">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html"
                                        class="f1-m-3 cl2 hov-cl10 trans-03">
                                        4 American live music lorem ipsum dolor sit amet consectetur
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        Music
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 18
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item post -->
                        <div class="flex-wr-sb-s m-b-30">
                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('client/images/post-09.jpg') }}" alt="IMG">
                            </a>

                            <div class="size-w-2">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html"
                                        class="f1-s-5 cl3 hov-cl10 trans-03">
                                        Donec metus orci, malesuada et lectus vitae
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                        Celebrity
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 12
                                    </span>
                                </span>
                            </div>
                        </div>

                        <!-- Item post -->
                        <div class="flex-wr-sb-s m-b-30">
                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('client/images/post-07.jpg') }}" alt="IMG">
                            </a>

                            <div class="size-w-2">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html"
                                        class="f1-s-5 cl3 hov-cl10 trans-03">
                                        Donec metus orci, malesuada et lectus vitae
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                        Music
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 17
                                    </span>
                                </span>
                            </div>
                        </div>

                        <!-- Item post -->
                        <div class="flex-wr-sb-s m-b-30">
                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('client/images/post-08.jpg') }}" alt="IMG">
                            </a>

                            <div class="size-w-2">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html"
                                        class="f1-s-5 cl3 hov-cl10 trans-03">
                                        Donec metus orci, malesuada et lectus vitae
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                        Game
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 16
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- - -->
            <div class="tab-pane fade" id="tab1-5" role="tabpanel">
                <div class="row">
                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item post -->
                        <div class="m-b-30">
                            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('client/images/post-07.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-t-20">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html"
                                        class="f1-m-3 cl2 hov-cl10 trans-03">
                                        American live music lorem ipsum dolor sit amet consectetur
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        Music
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 18
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item post -->
                        <div class="flex-wr-sb-s m-b-30">
                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('client/images/post-08.jpg') }}" alt="IMG">
                            </a>

                            <div class="size-w-2">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html"
                                        class="f1-s-5 cl3 hov-cl10 trans-03">
                                        Donec metus orci, malesuada et lectus vitae
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                        Celebrity
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 12
                                    </span>
                                </span>
                            </div>
                        </div>

                        <!-- Item post -->
                        <div class="flex-wr-sb-s m-b-30">
                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('client/images/post-06.jpg') }}" alt="IMG">
                            </a>

                            <div class="size-w-2">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html"
                                        class="f1-s-5 cl3 hov-cl10 trans-03">
                                        Donec metus orci, malesuada et lectus vitae
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                        Music
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 17
                                    </span>
                                </span>
                            </div>
                        </div>

                        <!-- Item post -->
                        <div class="flex-wr-sb-s m-b-30">
                            <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                <img src="{{ asset('client/images/post-09.jpg') }}" alt="IMG">
                            </a>

                            <div class="size-w-2">
                                <h5 class="p-b-5">
                                    <a href="blog-detail-01.html"
                                        class="f1-s-5 cl3 hov-cl10 trans-03">
                                        Donec metus orci, malesuada et lectus vitae
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                        Game
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 16
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>