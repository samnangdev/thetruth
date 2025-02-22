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
{{-- <div style="background-color: #f5f5f5;">
    <div class="container p-t-20 p-b-5">
        <h2 class="f1-l-1 cl12">
            ព័ត៌មានជាតិ
        </h2>
    </div>
</div> --}}

<!-- Content -->
<section class="bg7 p-b-10 p-t-10">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-30">
                <div class="p-r-10 p-r-0-sr991">
                    <!-- Blog Detail -->
                    <div class="p-b-30">
                        {{-- <a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
                            Technology
                        </a> --}}

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
                            <img src="{{ asset('client/images/blog-list-01.jpg') }}" alt="IMG">
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
                </div>
            </div>
            
             <!-- Content right -->
             <div class="col-md-10 col-lg-4 p-t-20">
                <div class="p-l-10 p-rl-0-sr991 p-b-20">
                    {{-- Most popular --}}
                    {{-- @include('components.most_popular') --}}
                    <div>
                        <div class="how2 how2-cl1 flex-s-c bg0">
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
                        {{--  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
