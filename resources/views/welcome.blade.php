@extends('layouts.app')
<!-- Carousel Start -->
@section('content')
    {{-- <nav class="py-0 bg-primary  ">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><i class="bi bi-telephone-fill">
                            +6221 – 250 0120</i></a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><i
                            class="bi bi-envelope-fill"></i> info@sumberglobalenergy.com</a></li>
            </ul>
            <ul class="nav d-none d-lg-block d-xl-none">
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Login</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Sign up</a></li>
            </ul>
        </div>
    </nav> --}}
    {{-- @yield('slider') --}}
    <section id="home" class="home bg-dark fix">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="main_home text-center">
                    <div class="col-md-12">
                        <div class="hello_slid slick-initialized slick-slider">
                            <div aria-live="polite" class="slick-list draggable">
                                <div class="slick-track" role="listbox"
                                    style="opacity: 1; width: 1140px; transform: translate3d(0px, 0px, 0px);">
                                    <div class="slid_item slick-slide slick-current slick-active" data-slick-index="0"
                                        aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00"
                                        style="width: 1140px;">
                                        <div class="home_text ">
                                            <h2 class="text-white">Welcome</h2>
                                            <h1 class="text-white">HINENI RESOURCES PTE. LTD</h1>
                                            <h3 class="text-white">- was established in <strong>2021</strong></h3>
                                        </div>
                                        <div class="home_btns m-top-40">
                                            <a href="mailto:inqury@hineniresources.com" class="btn btn-primary m-top-20"
                                                tabindex="0">Contact Us</a>
                                            <!-- <a href="" class="btn btn-default m-top-20">Take a Tour</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End off slid item -->
                        </div>
                    </div>
                </div>
            </div>
            <!--End off row-->
        </div>
        <!--End off container -->
    </section>
    <section id="aboutus" class="bg-black">
        <div class="container">
            <div class="row py-4">
                <div class="col-md-6">
                    <img src="/img/profile-hineniresource.png" class="img-fluid">
                    <!-- <div class="business_slid">
                                                                                                                                                <div class="slid_shap bg-grey"></div>
                                                                                                                                                <div class="business_items text-center">
                                                                                                                                                    <div class="business_item">
                                                                                                                                                        <div class="business_img">
                                                                                                                                                            <img src="assets/images/about-img1.jpg" alt="" />
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="business_item">
                                                                                                                                                        <div class="business_img">
                                                                                                                                                            <img src="assets/images/about-img1.jpg" alt="" />
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="business_item">
                                                                                                                                                        <div class="business_img">
                                                                                                                                                            <img src="assets/images/about-img1.jpg" alt="" />
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div> -->
                </div>
                <div class="col-md-6">
                    <div class="sm-m-top-50">
                        <h2 class="text-uppercase text-white"><strong>COMPANY</strong> BACKGROUND</h2>
                        <!-- <ul>
                                                                                                                                                    <li><i class="fa fa-arrow-circle-right"></i> Clean & Modern Design</li>
                                                                                                                                                    <li><i class="fa  fa-arrow-circle-right"></i> Fully Responsive</li>
                                                                                                                                                    <li><i class="fa  fa-arrow-circle-right"></i> Google Fonts</li>
                                                                                                                                                </ul> -->
                        <p class="m-top-20 text-white">HINENI RESOURCES PTE. LTD was established in 2021. Our main
                            office is located in
                            Orchard Tower, Singapore. We also operate in Jakarta, Indonesia. The Business's
                            principal
                            activity is WHOLESALE TRADE OF A VARIETY OF GOODS WITHOUT A DOMINANT PRODUCT.
                            (eg COAL TRADING).
                        </p>
                        <p class="text-white">
                            The Business's secondary activity is OTHER HOLDING COMPANIES.
                            (eg FOR INVESTMENT IN OTHER BUSINESS. Hineni Resources is a reliable and efficient
                            team. Each member is capable and confident in handling and installing various works in
                            the
                            oil &amp; gas upstream, midstream and downstream sectors.
                        </p>
                        <p class="text-white">
                            HINENI RESOURCES PTE. LTDis a Singapore incorporated company that engages in
                            international customers from various industrial sectors.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="action" class="action roomy-40" style=" background-color: #8dc73f; ">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="action_item text-center">
                        <h2 class="text-white">inquiry@hineniresources.com</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 text-start me-4 sm-text-center">
                        <button class="btn btn-dark" type="button">Contact Us</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="text-center mb-3 mt-5 ">
            <h1 class="text-black">News & Update</h1>
            {{-- <h3 class="text-white">- was established in <strong>2021</strong></h3> --}}
        </div>
        <div class="row mb-3 mt-3">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    @foreach ($berita as $news)
                        <article class="p-3">
                            <div class="card border-0">
                                @if ($news->image)
                                    <figure class="card-img-top m-0 overflow-hidden bsb-hover-overlay">
                                        <a href="/media/{{ $news->slug }}">
                                            <img decoding="async" class="img-fluid bsb-scale bsb-hover-scale-up"
                                                loading="lazy" src="/storage/{{ $news->image->path }}" alt="">
                                        </a>
                                    </figure>
                                @else
                                    <figure class="card-img-top m-0 overflow-hidden bsb-hover-overlay">
                                        <a href="/media/{{ $news->slug }}">
                                            <img decoding="async" class="img-fluid bsb-scale bsb-hover-scale-up"
                                                loading="lazy"
                                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png"
                                                alt="">
                                        </a>
                                    </figure>
                                @endif
                                <div class="card-body border bg-white p-4">
                                    <div class="entry-header mb-3">
                                        <div class="entry-meta mb-3">
                                            <ul class="nav">
                                                <li class="nav-item">
                                                    <a class="nav-link d-inline px-1 link-primary"
                                                        href="#">{{ $news->category->name }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="card-title entry-title h4 mb-0">
                                            <a class="link-dark text-decoration-none"
                                                href="/media/{{ $news->slug }}">{{ $news->title }}</a>
                                        </h2>
                                    </div>
                                    <p class="card-text entry-summary text-secondary">
                                        {{ $news->excerpt }}
                                    </p>
                                </div>
                                <div class="card-footer border border-top-0 bg-white p-4">
                                    <div class="entry-meta">
                                        <ul class="nav mb-0 bsb-nav-sep">
                                            <li class="nav-item text-secondary">
                                                <a class="nav-link link-secondary p-0 pe-3 d-inline-flex align-items-center"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                                        <path
                                                            d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z">
                                                        </path>
                                                        <path
                                                            d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
                                                        </path>
                                                    </svg>
                                                    <span class="ms-2 fs-7">{{ $news->date }}</span>
                                                </a>
                                            </li>
                                            {{-- <li class="nav-item text-secondary">
                                                <a class="nav-link link-secondary p-0 ps-3 d-inline-flex align-items-center"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
                                                        </path>
                                                        <path
                                                            d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z">
                                                        </path>
                                                    </svg>
                                                    <span class="ms-2 fs-7">55</span>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    @if (empty($modal->id))
    @else
        <div class="modal fade" id="modal{{ $modal->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Announcement
                            <small>{{ $modal->date_gmt }}</small>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="/storage/{{ $modal->image }}" class="card-img-top">
                        <p class="text-center">
                            <a href="/announcements/{{ $modal->slug }}">View More</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
