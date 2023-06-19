<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>
    <meta name="title" content="PT. Sumber Mineral Global Abadi Tbk">
    <meta name="description" content="{{ __('frontend.profil') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://sumbermineralglobalabadi.com/">
    <meta property="og:title" content="{{ env('APP_NAME') }}">
    <meta property="og:description"
        content="PT. Sumber Mineral Global Abadi has experience in the mineral business supported by qualified natural resources as well as professional human resources as our step to provide quality and sustainable products">
    <meta property="og:image" content="{{ asset('img/header-SMGA.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://sumbermineralglobalabadi.com/">
    <meta property="twitter:title" content="{{ env('APP_NAME') }}">
    <meta property="twitter:description"
        content="PT. Sumber Mineral Global Abadi has experience in the mineral business supported by qualified natural resources as well as professional human resources as our step to provide quality and sustainable products">
    <meta property="twitter:image" content="{{ asset('img/header-SMGA.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    {{-- <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json"> --}}
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>

    </style>
</head>

<body>

    <section class="bg-black">
        <div class="container">

            <header class="py-2">

                <!-- Fixed navbar -->
                <nav class="navbar navbar-expand-xl">
                    <div class="container-fluid  align-items-center">
                        <a href="/" class="navbar-brand mb-md-0 me-md-auto text-dark text-decoration-none">

                            <img src="/img/logo-hineniresources.png" class="img-fluid me-2" style=" width: 40px; ">
                            <span class="fw-bold text-white sitetitle"> HINENI RESOURCES LTD</span>
                        </a>
                        <button class="navbar-toggler btn-sm collapsed bg-primary" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon "></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbarCollapse" style="">
                            <div class="me-lg-auto"></div>
                            <ul class="navbar-nav mb-2 mb-md-0">
                                <li class="nav-item"><a href="/" class="nav-link active text-uppercase"
                                        aria-current="page">{{ __('frontend.beranda') }}</a></li>
                                <li class="nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle text-white fw-bold text-uppercase" href="#"
                                        id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        {{ __('frontend.tentang') }}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach ($abouts as $link)
                                            <li><a class="dropdown-item"
                                                    href="/{{ $link->link }}">{{ $link->title }}</a></li>
                                        @endforeach

                                    </ul>
                                </li>
                                @if (App::getLocale() == 'id')
                                    <li class="nav-item "><a href="/id/media-center"
                                            class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.media') }}</a>
                                    </li>
                                @else
                                    <li class="nav-item "><a href="/en/media-center"
                                            class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.media') }}</a>
                                    </li>
                                @endif

                                <li class="nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle text-white fw-bold text-uppercase"
                                        href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        {{ __('frontend.investor') }}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/prospektus">Prospektus</a></li>
                                        <li><a class="dropdown-item" href="/financial-reports">Financial Report</a>
                                        </li>
                                        <li><a class="dropdown-item" href="/share-price">Share Price</a></li>

                                    </ul>
                                </li>

                                <li class="nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle text-white fw-bold text-uppercase"
                                        href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        {{ __('frontend.esg') }}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach ($esgs as $links)
                                            <li><a class="dropdown-item"
                                                    href="/{{ $links->link }}">{{ $links->title }}</a></li>
                                        @endforeach

                                    </ul>
                                </li>

                                <li class="nav-item "><a href="/contact-us"
                                        class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.kontak') }}</a>
                                </li>
                                {{-- <li class="nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle text-white fw-bold" href="#"
                                        id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        EN
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/locale/en">English</a></li>
                                        <li><a class="dropdown-item" href="/locale/id">Indonesia</a></li>

                                    </ul>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </nav>

            </header>
            <!-- Navbar -->



        </div>
        {{-- <span class="animate-border2 bg-primary " style="width: 100% !important"></span> --}}
    </section>


    @yield('content')



    <footer class="webintern-footer bg-black">
        <div class="webintern-footer-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 ">
                        <a class="webintern-footer-logo" href="#">
                            <img class="img-responsive"
                                src="http://hineniresources.com/assets/images/logo-hineniresources.png"
                                style="width:100px;" alt="">
                        </a>
                        <div class="simple-text dark padding-sm">
                            <p>HINENI RESOURCES PTE. LTDis a Singapore incorporated company that engages in
                                international customers from various industrial sectors.</p>
                        </div>
                        <div class="empty-space xs-25 sm-25"></div>
                    </div>
                    <div class="col-sm-6 col-md-2 footer-2">
                        <!-- webintern_footer_title -->
                        <h4 class="webintern_footer_title h5"><small>Quick Links</small></h4>
                        <ul class="webintern-footer-list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Media Center </a></li>

                        </ul>
                        <div class="empty-space xs-25 sm-25"></div>
                    </div>
                    <div class="col-sm-6 col-md-3 footer-3 mt-5">
                        <!-- webintern_footer_title -->

                        <ul class="webintern-footer-list">
                            <li><a href="#">Investor Relation </a></li>
                            <li><a href="#">ESG </a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                        <div class="empty-space xs-25"></div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6">
                        <div class="marg-sm-b30"></div>
                        <!-- webintern_footer_title -->
                        <h4 class="webintern_footer_title h5"><small>Subscribe Newsletter</small></h4>
                        <div class="empty-space marg-lg-b20"></div>
                        <!--
<div class="simple-text last dark ">
<p>Get latest updates and offers.</p>
</div>
-->
                        <div class="empty-space marg-lg-b15"></div>
                        <!-- TT-SUBSCRIBE -->
                        <form method="post">
                            <div class="tt-subscribe">
                                <input type="text" required="" placeholder="Enter your email">
                                <div class="tt-subscribe-submit">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <input type="submit" value="">
                                </div>
                            </div>
                        </form>
                        <div class="empty-space marg-lg-b30"></div>
                        <!-- TT-SOCAIL -->
                        <ul class="tt-socail">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tt-copy" style="background-color: orange">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="tt-copy-left">Copyright © Hineni Resources 2023. All rights reserved. </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="tt-copy-right">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    {{-- <script>
        document.getElementById('date').valueAsDate = new Date();
    </script> --}}

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

    @if (empty($modal->id))
    @else
        <script type="text/javascript">
            window.onload = function() {
                OpenBootstrapPopup();
            };

            function OpenBootstrapPopup() {
                $("#modal{{ $modal->id }}").modal('show');
            }
        </script>
    @endif

</body>

</html>
