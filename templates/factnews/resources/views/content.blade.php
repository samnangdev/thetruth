@extends('layouts.app_master')
@section('title')
    FactNews
@endsection
@section('content')
    <!-- Breaking News -->
    {{-- <div style="background-color: #f5f5f5;">
        @include('components.breaking_news')
    </div> --}}

    <!-- Feature post For Breaking News-->

    <!-- Page heading -->
    {{-- <div class="bg7">
        <div class="container p-t-20 p-b-20">
            <h2 class="f1-l-1 cl12 add-font" style="font-family: KhmerOSSiemreap">
                ព័ត៌មានជាតិ
            </h2>
        </div>
    </div>
    <style>
        .add-font{
            font-family: "Siemreap", serif;
            font-weight: 400;
            font-style: normal;
        }
    </style> --}}
    <div class="bg7">
        <div class="container p-t-20 p-b-20">
            <h2 class="f1-l-1 cl12 add-font">
                ព័ត៌មានជាតិ
            </h2>
        </div>
    </div>
    <style>
        .add-font {
            font-family: "Siemreap", "Khmer OS", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>


    <!-- Feature post -->
    <section class="bg0 p-b-10 bg7">
        <div class="container">
            <div class="row m-rl--1">
                <div class="col-md-6 p-rl-1 p-b-2">
                    <div class="bg-img1 size-a-3 how1 pos-relative"
                        style="background-image: url(client/images/entertaiment-01.jpg);">
                        <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                        <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                            <a href="#"
                                class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                Celebrity
                            </a>

                            <h3 class="how1-child2 m-t-14 m-b-10">
                                <a href="blog-detail-01.html" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                                    Music quisque at ipsum vel orci eleifend ultrices
                                </a>
                            </h3>

                            <span class="how1-child2">
                                <span class="f1-s-4 cl11">
                                    Jack Sims
                                </span>

                                <span class="f1-s-3 cl11 m-rl-3">
                                    -
                                </span>

                                <span class="f1-s-3 cl11">
                                    Feb 16
                                </span>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 p-rl-1">
                    <div class="row m-rl--1">
                        <div class="col-sm-6 p-rl-1 p-b-2">
                            <div class="bg-img1 size-a-14 how1 pos-relative"
                                style="background-image: url(client/images/entertaiment-02.jpg);">
                                <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                                <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                    <a href="#"
                                        class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                        Game
                                    </a>

                                    <h3 class="how1-child2 m-t-14">
                                        <a href="blog-detail-01.html"
                                            class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                            Pellentesque dui nibh, pellen-tesque ut dapibus ut
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 p-rl-1 p-b-2">
                            <div class="bg-img1 size-a-14 how1 pos-relative"
                                style="background-image: url(client/images/entertaiment-03.jpg);">
                                <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                                <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                    <a href="#"
                                        class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                        Music
                                    </a>

                                    <h3 class="how1-child2 m-t-14">
                                        <a href="blog-detail-01.html"
                                            class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                            Motobike Vestibulum vene-natis purus nec nibh volutpat
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 p-rl-1 p-b-2">
                            <div class="bg-img1 size-a-14 how1 pos-relative"
                                style="background-image: url(client/images/entertaiment-04.jpg);">
                                <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                                <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                    <a href="#"
                                        class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                        Game
                                    </a>

                                    <h3 class="how1-child2 m-t-14">
                                        <a href="blog-detail-01.html"
                                            class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                            Pellentesque dui nibh, pellen-tesque ut dapibus ut
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 p-rl-1 p-b-2">
                            <div class="bg-img1 size-a-14 how1 pos-relative"
                                style="background-image: url(client/images/entertaiment-05.jpg);">
                                <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                                <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                    <a href="#"
                                        class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                        Music
                                    </a>

                                    <h3 class="how1-child2 m-t-14">
                                        <a href="blog-detail-01.html"
                                            class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                            Motobike Vestibulum vene-natis purus nec nibh volutpat
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Post -->
    <section class="bg0 p-b-0 p-t-20 bg7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 p-b-80">
                    <div class="p-r-10 p-r-0-sr991">
                        <div class="m-t--40 p-b-40">
                            <!-- Item post -->
                            <div class="flex-wr-sb-s p-t-40 p-b-0 how-bor2 ">
                                <a href="blog-detail-02.html" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
                                    <img src="{{ asset('client/images/post-43.jpg') }}" alt="IMG">
                                </a>

                                <div class="size-w-9 w-full-sr575 m-b-25">
                                    <h5 class="p-b-12">
                                        <a href="blog-detail-02.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                                            Robot lorem ipsum dolor sit amet consectetur
                                        </a>
                                    </h5>

                                    <div class="cl8 p-b-18">
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            by John Alvarado
                                        </a>

                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>

                                        <span class="f1-s-3">
                                            Feb 18
                                        </span>
                                    </div>

                                    <p class="f1-s-1 cl6 p-b-24">
                                        Duis eu felis id tortor congue consequat. Sed vitae vestibulum enim, et pharetra
                                        magna
                                    </p>

                                    <a href="blog-detail-02.html" class="f1-s-1 cl9 hov-cl10 trans-03">
                                        Read More
                                        <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Item post -->
                            <div class="flex-wr-sb-s p-t-20 p-b-0 how-bor2">
                                <a href="blog-detail-02.html" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
                                    <img src="{{ asset('client/images/post-44.jpg') }}" alt="IMG">
                                </a>

                                <div class="size-w-9 w-full-sr575 m-b-25">
                                    <h5 class="p-b-12">
                                        <a href="blog-detail-02.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                                            Health lorem ipsum dolor sit amet consectetur
                                        </a>
                                    </h5>

                                    <div class="cl8 p-b-18">
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            by John Alvarado
                                        </a>

                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>

                                        <span class="f1-s-3">
                                            Feb 18
                                        </span>
                                    </div>

                                    <p class="f1-s-1 cl6 p-b-24">
                                        Duis eu felis id tortor congue consequat. Sed vitae vestibulum enim, et pharetra
                                        magna
                                    </p>

                                    <a href="blog-detail-02.html" class="f1-s-1 cl9 hov-cl10 trans-03">
                                        Read More
                                        <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Item post -->
                            <div class="flex-wr-sb-s p-t-20 p-b-0 how-bor2">
                                <a href="blog-detail-02.html"
                                    class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
                                    <img src="{{ asset('client/images/post-45.jpg') }}" alt="IMG">
                                </a>

                                <div class="size-w-9 w-full-sr575 m-b-25">
                                    <h5 class="p-b-12">
                                        <a href="blog-detail-02.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                                            Success lorem ipsum dolor sit amet consectetur
                                        </a>
                                    </h5>

                                    <div class="cl8 p-b-18">
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            by John Alvarado
                                        </a>

                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>

                                        <span class="f1-s-3">
                                            Feb 18
                                        </span>
                                    </div>

                                    <p class="f1-s-1 cl6 p-b-24">
                                        Duis eu felis id tortor congue consequat. Sed vitae vestibulum enim, et pharetra
                                        magna
                                    </p>

                                    <a href="blog-detail-02.html" class="f1-s-1 cl9 hov-cl10 trans-03">
                                        Read More
                                        <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Item post -->
                            <div class="flex-wr-sb-s p-t-20 p-b-0 how-bor2">
                                <a href="blog-detail-02.html"
                                    class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
                                    <img src="{{ asset('client/images/post-46.jpg') }}" alt="IMG">
                                </a>

                                <div class="size-w-9 w-full-sr575 m-b-25">
                                    <h5 class="p-b-12">
                                        <a href="blog-detail-02.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                                            Bitcon lorem ipsum dolor sit amet consectetur
                                        </a>
                                    </h5>

                                    <div class="cl8 p-b-18">
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            by John Alvarado
                                        </a>

                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>

                                        <span class="f1-s-3">
                                            Feb 18
                                        </span>
                                    </div>

                                    <p class="f1-s-1 cl6 p-b-24">
                                        Duis eu felis id tortor congue consequat. Sed vitae vestibulum enim, et pharetra
                                        magna
                                    </p>

                                    <a href="blog-detail-02.html" class="f1-s-1 cl9 hov-cl10 trans-03">
                                        Read More
                                        <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Item post -->
                            <div class="flex-wr-sb-s p-t-20 p-b-0 how-bor2">
                                <a href="blog-detail-02.html"
                                    class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
                                    <img src="{{ asset('client/images/post-47.jpg') }}" alt="IMG">
                                </a>

                                <div class="size-w-9 w-full-sr575 m-b-25">
                                    <h5 class="p-b-12">
                                        <a href="blog-detail-02.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                                            American Bank lorem ipsum dolor sit amet
                                        </a>
                                    </h5>

                                    <div class="cl8 p-b-18">
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            by John Alvarado
                                        </a>

                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>

                                        <span class="f1-s-3">
                                            Feb 18
                                        </span>
                                    </div>

                                    <p class="f1-s-1 cl6 p-b-24">
                                        Duis eu felis id tortor congue consequat. Sed vitae vestibulum enim, et pharetra
                                        magna
                                    </p>

                                    <a href="blog-detail-02.html" class="f1-s-1 cl9 hov-cl10 trans-03">
                                        Read More
                                        <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Item post -->
                            <div class="flex-wr-sb-s p-t-20 p-b-0 how-bor2">
                                <a href="blog-detail-02.html"
                                    class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
                                    <img src="{{ asset('client/images/post-48.jpg') }}" alt="IMG">
                                </a>

                                <div class="size-w-9 w-full-sr575 m-b-25">
                                    <h5 class="p-b-12">
                                        <a href="blog-detail-02.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                                            Macbook New 12 lorem ipsum dolor sit amet
                                        </a>
                                    </h5>

                                    <div class="cl8 p-b-18">
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            by John Alvarado
                                        </a>

                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>

                                        <span class="f1-s-3">
                                            Feb 18
                                        </span>
                                    </div>

                                    <p class="f1-s-1 cl6 p-b-24">
                                        Duis eu felis id tortor congue consequat. Sed vitae vestibulum enim, et pharetra
                                        magna
                                    </p>

                                    <a href="blog-detail-02.html" class="f1-s-1 cl9 hov-cl10 trans-03">
                                        Read More
                                        <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Item post -->
                            <div class="flex-wr-sb-s p-t-20 p-b-0 how-bor2">
                                <a href="blog-detail-02.html"
                                    class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
                                    <img src="{{ asset('client/images/post-49.jpg') }}" alt="IMG">
                                </a>

                                <div class="size-w-9 w-full-sr575 m-b-25">
                                    <h5 class="p-b-12">
                                        <a href="blog-detail-02.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                                            You wish lorem ipsum dolor sit amet consectetur
                                        </a>
                                    </h5>

                                    <div class="cl8 p-b-18">
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            by John Alvarado
                                        </a>

                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>

                                        <span class="f1-s-3">
                                            Feb 18
                                        </span>
                                    </div>

                                    <p class="f1-s-1 cl6 p-b-24">
                                        Duis eu felis id tortor congue consequat. Sed vitae vestibulum enim, et pharetra
                                        magna
                                    </p>

                                    <a href="blog-detail-02.html" class="f1-s-1 cl9 hov-cl10 trans-03">
                                        Read More
                                        <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Item post -->
                            <div class="flex-wr-sb-s p-t-20 p-b-0 how-bor2">
                                <a href="blog-detail-02.html"
                                    class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
                                    <img src="{{ asset('client/images/post-42.jpg') }}" alt="IMG">
                                </a>

                                <div class="size-w-9 w-full-sr575 m-b-25">
                                    <h5 class="p-b-12">
                                        <a href="blog-detail-02.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                                            You wish lorem ipsum dolor sit amet consectetur
                                        </a>
                                    </h5>

                                    <div class="cl8 p-b-18">
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            by John Alvarado
                                        </a>

                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>

                                        <span class="f1-s-3">
                                            Feb 18
                                        </span>
                                    </div>

                                    <p class="f1-s-1 cl6 p-b-24">
                                        Duis eu felis id tortor congue consequat. Sed vitae vestibulum enim, et pharetra
                                        magna
                                    </p>

                                    <a href="blog-detail-02.html" class="f1-s-1 cl9 hov-cl10 trans-03">
                                        Read More
                                        <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex-wr-s-c m-rl--7 p-t-30">
                            <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">
                                << /a>
                                    <a href="#"
                                        class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active">1</a>
                                    <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">2</a>
                                    <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">3</a>
                                    <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">></a>
                        </div>
                        {{-- <a href="#" class="flex-c-c size-a-13 bo-all-1 bocl11 f1-m-6 cl6 hov-btn1 trans-03">
                            Load More
                        </a> --}}
                    </div>
                </div>

                {{-- <div class="col-md-10 col-lg-4 p-b-80">
                <div class="p-l-10 p-rl-0-sr991">							
                    <!-- Subscribe -->
                    <div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-50">
                        <h5 class="f1-m-5 cl0 p-b-10">
                            Subscribe
                        </h5>

                        <p class="f1-s-1 cl0 p-b-25">
                            Get all latest content delivered to your email a few times a month.
                        </p>

                        <form class="size-a-9 pos-relative">
                            <input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="Email">

                            <button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Most Popular -->
                    <div class="p-b-23">
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Most Popular
                            </h3>
                        </div>

                        <ul class="p-t-35">
                            <li class="flex-wr-sb-s p-b-22">
                                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                    1
                                </div>

                                <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </a>
                            </li>

                            <li class="flex-wr-sb-s p-b-22">
                                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                    2
                                </div>

                                <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                    Proin velit consectetur non neque
                                </a>
                            </li>

                            <li class="flex-wr-sb-s p-b-22">
                                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                    3
                                </div>

                                <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                    Nunc vestibulum, enim vitae condimentum volutpat lobortis ante
                                </a>
                            </li>

                            <li class="flex-wr-sb-s p-b-22">
                                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                    4
                                </div>

                                <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                    Proin velit justo consectetur non neque elementum
                                </a>
                            </li>

                            <li class="flex-wr-sb-s p-b-22">
                                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0">
                                    5
                                </div>

                                <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                    Proin velit consectetur non neque
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!--  -->
                    <div class="flex-c-s p-b-50">
                        <a href="#">
                            <img class="max-w-full" src="{{ asset('client/images/banner-02.j') }}pg" alt="IMG">
                        </a>
                    </div>
                    
                    <!-- Tag -->
                    <div>
                        <div class="how2 how2-cl4 flex-s-c m-b-30">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Tags
                            </h3>
                        </div>

                        <div class="flex-wr-s-s m-rl--5">
                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Fashion
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Lifestyle
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Denim
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Streetstyle
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Crafts
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Magazine
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                News
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Blogs
                            </a>
                        </div>	
                    </div>
                </div>
            </div> --}}
                <!-- Content right -->
                <div class="col-md-10 col-lg-4">
                    <div class="p-l-10 p-rl-0-sr991 p-b-20">
                        {{-- Most popular --}}
                        {{-- @include('components.most_popular') --}}
                        <div>
                            <div class="how2 how2-cl1 flex-s-c" style="background-color: #ffffff;">
                                <h3 class="f1-m-2 cl12 tab01-title">
                                    ពេញនិយមបំផុត
                                </h3>
                            </div>
                            <ul class="p-t-35">
                                <li class="flex-wr-sb-s p-b-22">
                                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                        1
                                    </div>

                                    <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </a>

                                </li>

                                <li class="flex-wr-sb-s p-b-22">
                                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                        2
                                    </div>

                                    <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                        Proin velit consectetur non neque
                                    </a>
                                </li>

                                <li class="flex-wr-sb-s p-b-22">
                                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                        3
                                    </div>

                                    <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                        Nunc vestibulum, enim vitae condimentum volutpat lobortis ante
                                    </a>
                                </li>

                                <li class="flex-wr-sb-s p-b-22">
                                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                        4
                                    </div>

                                    <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                        Proin velit justo consectetur non neque elementum
                                    </a>
                                </li>

                                <li class="flex-wr-sb-s p-b-22">
                                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0">
                                        5
                                    </div>

                                    <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                        Proin velit consectetur non neque
                                    </a>
                                </li>
                            </ul>
                            {{-- Content with pic --}}
                            <div class="p-b-25">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="{{ asset('client/images/video-01.jpg') }}" alt="IMG">

                                    <button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal"
                                        data-target="#modal-video-01">
                                        {{-- <span class="fab fa-youtube"></span> --}}
                                    </button>
                                </div>

                                <div class="p-tb-16 p-rl-25 bg3">
                                    <h5 class="p-b-5">
                                        <a href="#" class="f1-m-3 cl1 hov-cl10 trans-03">
                                            Music lorem ipsum dolor sit amet consectetur
                                        </a>
                                    </h5>

                                    <span class="cl15">
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            by John Alvarado
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
                            <div class="p-b-25">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="{{ asset('client/images/video-01.jpg') }}" alt="IMG">

                                    <button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal"
                                        data-target="#modal-video-01">
                                        {{-- <span class="fab fa-youtube"></span> --}}
                                    </button>
                                </div>

                                <div class="p-tb-16 p-rl-25 bg3">
                                    <h5 class="p-b-5">
                                        <a href="#" class="f1-m-3 cl1 hov-cl10 trans-03">
                                            Music lorem ipsum dolor sit amet consectetur
                                        </a>
                                    </h5>

                                    <span class="cl15">
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            by John Alvarado
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
                            <div class="p-b-25">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="{{ asset('client/images/video-01.jpg') }}" alt="IMG">

                                    <button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal"
                                        data-target="#modal-video-01">
                                        {{-- <span class="fab fa-youtube"></span> --}}
                                    </button>
                                </div>

                                <div class="p-tb-16 p-rl-25 bg3">
                                    <h5 class="p-b-5">
                                        <a href="#" class="f1-m-3 cl1 hov-cl10 trans-03">
                                            Music lorem ipsum dolor sit amet consectetur
                                        </a>
                                    </h5>

                                    <span class="cl15">
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            by John Alvarado
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
                            <div class="p-b-25">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="{{ asset('client/images/video-01.jpg') }}" alt="IMG">

                                    <button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal"
                                        data-target="#modal-video-01">
                                        {{-- <span class="fab fa-youtube"></span> --}}
                                    </button>
                                </div>

                                <div class="p-tb-16 p-rl-25 bg3">
                                    <h5 class="p-b-5">
                                        <a href="#" class="f1-m-3 cl1 hov-cl10 trans-03">
                                            Music lorem ipsum dolor sit amet consectetur
                                        </a>
                                    </h5>

                                    <span class="cl15">
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            by John Alvarado
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
                            <div class="p-b-25">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="{{ asset('client/images/video-01.jpg') }}" alt="IMG">

                                    <button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal"
                                        data-target="#modal-video-01">
                                        {{-- <span class="fab fa-youtube"></span> --}}
                                    </button>
                                </div>

                                <div class="p-tb-16 p-rl-25 bg3">
                                    <h5 class="p-b-5">
                                        <a href="#" class="f1-m-3 cl1 hov-cl10 trans-03">
                                            Music lorem ipsum dolor sit amet consectetur
                                        </a>
                                    </h5>

                                    <span class="cl15">
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            by John Alvarado
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
                            <div class="p-b-25">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="{{ asset('client/images/video-01.jpg') }}" alt="IMG">

                                    <button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal"
                                        data-target="#modal-video-01">
                                        {{-- <span class="fab fa-youtube"></span> --}}
                                    </button>
                                </div>

                                <div class="p-tb-16 p-rl-25 bg3">
                                    <h5 class="p-b-5">
                                        <a href="#" class="f1-m-3 cl1 hov-cl10 trans-03">
                                            Music lorem ipsum dolor sit amet consectetur
                                        </a>
                                    </h5>

                                    <span class="cl15">
                                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            by John Alvarado
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
                            {{-- Ads --}}
                            <div class="p-b-5">
                                <img class="max-w-full" src="http://127.0.0.1:8000/client/images/ads/Ads_4.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
