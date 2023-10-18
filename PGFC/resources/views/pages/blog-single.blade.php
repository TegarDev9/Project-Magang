@extends('layouts.app')
@section('title', 'Detail Blog')

@section('content')

        <!-- Breadcrumbs Section Start -->
        <div class="rs-breadcrumbs sec-color">
            <img src="frontend/images/breadcrumbs/blog-left.jpg" alt="Breadcrubs-image" />
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="page-title">News Single</h1>
                            <ul>
                                <li>
                                    <a class="active" href="{{ route('index') }}">Home</a>
                                </li>
                                <li>News</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs Section End -->

        <!-- Blog Single Start Here -->
        <div class="single-blog-details sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="single-image">
                            <img src="frontend/images/latest/news1.jpg" alt="single">
                        </div>
                        <h3>32 Tim SMA
                            Bersaing di Turnamen Futsal PGFC 2023</h3>
                        <p>Sebanyak 32 tim dari berbagai SMA sederajat yang
                            berhasil lolos dari seleksi ketat sebanyak 65 tim akan
                            berpartisipasi dalam turnamen Petrokimia Gresik Futsal
                            Championship (PGFC) 2023. Kompetisi ini dijadwalkan akan
                            berlangsung mulai tanggal 22 September hingga 3
                            September 2023.</p>
                        <blockquote>
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            "Futsal bukan sekadar olahraga, itu adalah perjalanan melalui keringat, kerja keras, dan
                            kebersamaan."
                        </blockquote>
                        <p>Turnamen PGFC telah dimulai sejak tahun 2014 dan khusus diadakan untuk siswa SMA sederajat.
                            Namun, dampak dari pandemi covid-19 sempat menghentikan penyelenggaraan turnamen ini.</p>
                        <p>Setelah pandemi mereda, ajang pencarian bakat dalam olahraga futsal kembali digelar. Kali ini,
                            kompetisi tidak hanya melibatkan sekolah-sekolah di Kabupaten Gresik saja. Beberapa sekolah dari
                            luar daerah seperti Surabaya, Sidoarjo, Mojokerto, dan Lamongan juga ikut ambil bagian.</p>
                        <div class="share-section">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12 life-style">
                                    <span class="author">
                                        <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Admin </a>
                                    </span>
                                    <span class="comment">
                                        <a href="#">
                                            <i class="fa fa-commenting-o" aria-hidden="true"></i> 12
                                        </a>
                                    </span>
                                    <span class="date">
                                        <i class="fa fa-calendar" aria-hidden="true"></i> Apr 11, 2023
                                    </span>
                                    <span class="cat">
                                        <a href="#"><i class="fa fa-folder-o" aria-hidden="true"></i> Life Style </a>
                                    </span>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <ul class="share-link1">
                                        <li><a href="#"> Tags:</a></li>
                                        <li><a href="#"> Football</a></li>
                                        <li><a href="#"> Club</a></li>
                                        <li><a href="#"> Sports</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="share-section2">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <span> You Can Share It : </span>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <ul class="share-link">
                                        <li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i>
                                                Facebook</a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <ul class="next-pre-section">
                                    <li class="left-arrow"><a href="#"><i class="fa fa-angle-left"
                                                aria-hidden="true"></i> Previous Post</a></li>
                                    <li class="right-arrow"><a href="#">Next Post <i class="fa fa-angle-right"
                                                aria-hidden="true"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="like-section">
                            <h3 class="title-bg">YOU MIGHT ALSO LIKE</h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="popular-post-img">
                                        <a href="#"><img src="frontend/images/latest/news2.jpg" alt="Blog single photo"></a>
                                    </div>
                                    <h3>
                                        <a href="#">Quarter-final against Chile is special</a>
                                    </h3>
                                    <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 13,
                                        2017</span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="popular-post-img">
                                        <a href="#"><img src="frontend/images/latest/news3.jpg" alt="Blog single photo"></a>
                                    </div>
                                    <h3>
                                        <a href="#">Agüero’s goals in City’s evolving drama</a>
                                    </h3>
                                    <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 13,
                                        2017</span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="popular-post-img">
                                        <a href="#"><img src="frontend/images/latest/news1.jpg" alt="Blog single photo"></a>
                                    </div>
                                    <h3>
                                        <a href="#">The hosts blasted their way through</a>
                                    </h3>
                                    <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 13,
                                        2017</span>
                                </div>
                            </div>
                        </div>
                        <div class="author-comment">
                            <h3 class="title-bg">Recent Comments</h3>
                            <ul>
                                <li>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="image-comments"><img src="frontend/images/blog-details/comment.png"
                                                    alt="Blog Details photo"></div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <span class="reply"> <span class="date"><i class="fa fa-calendar"
                                                        aria-hidden="true"></i> Sep 13, 2017</span></span>
                                            <div class="dsc-comments">
                                                <h4>Thesera Minton</h4>
                                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                    chunks as necessary, making this the first true generator on the
                                                    Internet.</p>
                                                <a href="#"> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="image-comments"><img src="frontend/images/blog-details/comment.png"
                                                    alt="Blog Details photo"></div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <span class="reply"> <span class="date"><i class="fa fa-calendar"
                                                        aria-hidden="true"></i> Sep 13, 2017</span></span>
                                            <div class="dsc-comments">
                                                <h4>Thesera Minton</h4>
                                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                    chunks as necessary</p>
                                                <a href="#"> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="image-comments"><img src="frontend/images/blog-details/comment.png"
                                                    alt="Blog single photo"></div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <span class="reply"><span class="date"><i class="fa fa-calendar"
                                                        aria-hidden="true"></i> Sep 13, 2017</span></span>
                                            <div class="dsc-comments">
                                                <h4>Thesera Minton</h4>
                                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                    chunks as necessary, making this the first true generator on the
                                                    Internet.</p>
                                                <a href="#"> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="leave-comments-area">
                            <form>
                                <fieldset>
                                    <div class="form-group">
                                        <label>Fast Name*</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name*</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Your comment here...</label>
                                        <textarea cols="40" rows="10" class="textarea form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn-send" type="submit">Post Comment</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <!-- Blog Single Sidebar Start Here -->
                        <div class="sidebar-area">
                            <div class="search-box">
                                <div class="box-search">
                                    <input class="form-control" placeholder="Search" name="srch-term" id="srch-term"
                                        type="text">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search"
                                            aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <div class="cate-box">
                                <span class="title">Categories</span>
                                <ul>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Category
                                            Title 1</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Category
                                            Title 2</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Category
                                            Title 3</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Category
                                            Title 4</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Category
                                            Title 5</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="archives-box">
                                <span class="title">Archives</span>
                                <ul>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">2018
                                            (18)</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">2017
                                            (16)</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">2016
                                            (15)</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">2015
                                            (17)</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="recent-post-area">
                                <span class="title"> Recent Post</span>
                                <ul class="news-post">
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                        <div
                                                            class="col-lg-4 col-md-4 col-sm-4 col-xs-4 paddimg-right-none">
                                                            <img src="frontend/images/blog-details/sm1.jpg" alt=""
                                                                title="News image" />
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                            <h4><a href="{{ route('pages.blog-single') }}">Raken develops
                                                                    The software</a></h4>
                                                            <span class="date"><i class="fa fa-calendar"
                                                                    aria-hidden="true"></i> June 28, 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                        <div
                                                            class="col-lg-4 col-md-4 col-sm-4 col-xs-4 paddimg-right-none">
                                                            <img src="frontend/images/blog-details/sm2.jpg" alt=""
                                                                title="News image" />
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                            <h4><a href="{{ route('pages.blog-single') }}">TRaken
                                                                    develops The software</a></h4>
                                                            <span class="date"><i class="fa fa-calendar"
                                                                    aria-hidden="true"></i> June 28, 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                        <div
                                                            class="col-lg-4 col-md-4 col-sm-4 col-xs-4 paddimg-right-none">
                                                            <img src="frontend/images/blog-details/sm3.jpg" alt=""
                                                                title="News image" />
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                            <h4><a href="{{ route('pages.blog-single') }}">Raken develops
                                                                    The software</a></h4>
                                                            <span class="date"><i class="fa fa-calendar"
                                                                    aria-hidden="true"></i> June 28, 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tag-area">
                                <span class="title">Product Tags</span>
                                <ul>
                                    <li>
                                        <a href="#">Ball</a>
                                    </li>
                                    <li>
                                        <a href="#">Coach</a>
                                    </li>
                                    <li>
                                        <a href="#">League</a>
                                    </li>
                                    <li>
                                        <a href="#">Point</a>
                                    </li>
                                    <li>
                                        <a href="#">Ball</a>
                                    </li>
                                    <li>
                                        <a href="#">Coach</a>
                                    </li>
                                    <li>
                                        <a href="#">League</a>
                                    </li>
                                    <li>
                                        <a href="#">Point</a>
                                    </li>
                                    <li>
                                        <a href="#">Ball</a>
                                    </li>
                                    <li>
                                        <a href="#">Coach</a>
                                    </li>
                                    <li>
                                        <a href="#">Point</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="newsletter-area">
                                <h3>Newsletter</h3>
                                <p>Sign up for our Newsletter !</p>
                                <div class="box-newsletter">
                                    <input class="form-control" placeholder="youremail@domain.com" name="newsletter-term"
                                        id="newsletter-term" type="text">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-arrow-right"
                                            aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Single End Here -->

@endsection

@push('prepend-style')
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="frontend/images/logo-pgfc.png">
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ url('frontend/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ url('frontend/css/animate.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ url('frontend/css/rsmenu-main.css') }}">
    <!-- rsmenu transitions css -->
    <link rel="stylesheet" href="{{ url('frontend/css/rsmenu-transitions.css') }}">
    <!-- hover-min css -->
    <link rel="stylesheet" href="{{ url('frontend/css/hover-min.css') }}">
    <!-- magnific-popup css -->
    <link rel="stylesheet" href="{{ url('frontend/css/magnific-popup.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.css') }}">
    <!-- Slick css -->
    <link rel="stylesheet" href="{{ url('frontend/css/slick.css') }}">
    <!-- Slick Theme css -->
    <link rel="stylesheet" href="{{ url('frontend/css/slick-theme.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ url('style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ url('frontend/css/responsive.css') }}">
    <!-- modernizr js -->
    <script src="{{ url('frontend/js/modernizr-2.8.3.min.js') }}"></script>
@endpush

@push('addon-script')
    <script src="{{ url('frontend/js/jquery.min.js') }}"></script>
    <!-- Menu js -->
    <script src="{{ url('frontend/js/rsmenu-main.js') }}"></script>
    <!-- jquery-ui js -->
    <script src="{{ url('frontend/js/jquery-ui.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ url('frontend/js/bootstrap.min.js') }}"></script>
    <!-- meanmenu js -->
    <script src="{{ url('frontend/js/jquery.meanmenu.js') }}"></script>
    <!-- wow js -->
    <script src="{{ url('frontend/js/wow.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ url('frontend/js/slick.min.js') }}"></script>
    <!-- masonry js -->
    <script src="{{ url('frontend/js/masonry.js') }}"></script>
    <!-- magnific-popup js -->
    <!-- owl.carousel js -->
    <script src="{{ url('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- magnific-popup js -->
    <script src="{{ url('frontend/js/jquery.magnific-popup.js') }}"></script>
    <!-- jquery.counterup js -->
    <script src="{{ url('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('frontend/js/waypoints.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ url('frontend/js/main.js') }}"></script>
    @endpush
