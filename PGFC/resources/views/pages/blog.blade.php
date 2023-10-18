@extends('layouts.app')
@section('title', 'Blog')

@section('content')

    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs sec-color">
        <img src="frontend/images/breadcrumbs/blog.jpg" alt="Breadcrubs" />
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">News</h1>
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

    <!-- Home Blog Start Here -->
    <div id="rs-blog" class="rs-blog sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-blog-slide">
                        <div class="frontend/images">
                            <a href="{{ route('pages.blog-single') }}"><img src="frontend/images/latest/news1.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-details">
                            <span class="date"><i class="fa fa-calendar-check-o"></i> 11 Apr 2023</span>
                            <h3><a href="{{ route('pages.blog-single') }}">32 Tim SMA
                                    Bersaing di Turnamen Futsal PGFC 2023</a></h3>
                            <p>Sebanyak 32 tim dari berbagai SMA sederajat yang
                                berhasil lolos dari seleksi ketat sebanyak 65 tim akan
                                berpartisipasi dalam turnamen Petrokimia Gresik Futsal
                                Championship (PGFC) 2023. Kompetisi ini dijadwalkan akan
                                berlangsung mulai tanggal 22 September hingga 3
                                September 2023.</p>
                            <div class="read-more">
                                <a href="{{ route('pages.blog-single') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-blog-slide">
                        <div class="frontend/images">
                            <a href="{{ route('pages.blog-single') }}"><img src="frontend/images/latest/news2.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-details">
                            <span class="date"><i class="fa fa-calendar-check-o"></i> 11 Apr 2022</span>
                            <h3><a href="{{ route('pages.blog-single') }}">Petrokimia
                                    Gresik Bersama 4 Besar Peserta PGFC 2022 Sepakat Tak
                                    Lanjutkan Pertandingan</a></h3>
                            <p>Sebagai bentuk belasungkawa atas tragedi di Stadion
                                Kanjuruhan Malang, Petrokimia Gresik bersama empat besar
                                peserta Petrokimia Gresik Futsal Championship (PGFC)
                                2022 sepakat untuk tidak melanjutkan pertandingan.</p>
                            <div class="read-more">
                                <a href="{{ route('pages.blog-single') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-blog-slide">
                        <div class="frontend/images">
                            <a href="{{ route('pages.blog-single') }}"><img src="frontend/images/latest/news3.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-details">
                            <span class="date"><i class="fa fa-calendar-check-o"></i> 11 Agt 2022</span>
                            <h3><a href="{{ route('pages.blog-single') }}">Dorong
                                    Munculnya Atlit Berprestasi, Petrokimia Gresik Gelar
                                    Kompetisi PGFC 2022</a></h3>
                            <p>Untuk mendorong Bibit-bibit atlet berprestasi,
                                Petrokimia Gresik kembali menggelar kompetisi futsal
                                pada ajang Petrokimia Gresik Futsal Championship (PGFC)
                                yang digelar di SOR Tri Dharma mulai 19 September hingga
                                1 Oktober 2022. Ada 32 tim futsal SMA/sederajat, dari
                                lima daerah yaitu Gresik, Surabaya, Sidoarjo, Lamongan
                                dan Mojokerto yang siap bertanding.</p>
                            <div class="read-more">
                                <a href="{{ route('pages.blog-single') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="default-pagination text-center">
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-left"></i>Previous</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next<i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home Blog End Here -->

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
    <link rel="stylesheet" href="{{ url('frontend/css/responsive.css')}}">
    <!-- modernizr js -->
    <script src="{{ url('frontend/js/modernizr-2.8.3.min.js')}}"></script>
@endpush

@push('addon-script')
    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="{{ url('frontend/js/jquery.min.js')}}"></script>
    <!-- Menu js -->
    <script src="{{ url('frontend/js/rsmenu-main.js')}}"></script>
    <!-- jquery-ui js -->
    <script src="{{ url('frontend/js/jquery-ui.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{ url('frontend/js/bootstrap.min.js')}}"></script>
    <!-- meanmenu js -->
    <script src="{{ url('frontend/js/jquery.meanmenu.js')}}"></script>
    <!-- wow js -->
    <script src="{{ url('frontend/js/wow.min.js')}}"></script>
    <!-- Slick js -->
    <script src="{{ url('frontend/js/slick.min.js')}}"></script>
    <!-- masonry js -->
    <script src="{{ url('frontend/js/masonry.js')}}"></script>
    <!-- magnific-popup js -->
    <!-- owl.carousel js -->
    <script src="{{ url('frontend/js/owl.carousel.min.js')}}"></script>
    <!-- magnific-popup js -->
    <script src="{{ url('frontend/js/jquery.magnific-popup.js')}}"></script>
    <!-- jquery.counterup js -->
    <script src="{{ url('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ url('frontend/js/waypoints.min.js')}}"></script>
    <!-- main js -->
    <script src="{{ url('frontend/js/main.js')}}"></script>
@endpush
