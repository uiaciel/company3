@extends('layouts.app')
@section('content')

    @if ($post->layout == 'Sidebar')
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">

                    <div class="col-md-6 col-lg-8">
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1 text-capitalize">{{ $post->title }}</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Posted on
                                    {{ \Carbon\Carbon::parse($post->date_gmt)->toDayDateTimeString() }} -
                                    {{ \Carbon\Carbon::parse($post->date_gmt)->diffForHumans() }}
                                </div>
                                <!-- Post categories-->
                                <a class="badge bg-primary text-decoration-none link-light"
                                    href="#!">{{ $post->category->name }}</a>
                                <a class="badge bg-primary text-decoration-none link-light" href="#!">News</a>
                            </header>
                            <!-- Preview image figure-->
                            <figure class="mb-4"><img class="img-fluid rounded"
                                    src="{{ Storage::url($post->image->path ?? '') }}" alt="..."></figure>
                            <!-- Post content-->
                            <section class="mb-5">

                                {!! $post->content !!}

                            </section>
                        </article>

                    </div>
                    <div class="col-md-6 col-lg-4">
                        <ul class="list-group mb-3">
                            <li class="list-group-item active" aria-current="true">Categories</li>
                            @forelse ($category as $cat)
                                <li class="list-group-item">{{ $cat->name }}</li>
                            @empty
                                <li class="list-group-item disabled">Category Not Found</li>
                            @endforelse

                        </ul>

                        <div class="mb-3">
                            <h3>Artikel Lainnya</h3>
                        </div>

                        @foreach ($others as $other)
                            <div class="card mb-3">
                                <img src="{{ $other->image ?? '' }}" class="card-img-top" alt="{{ $other->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $other->title }}</h5>

                                    <a href="/media/{{ $other->slug }}" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        @endforeach
                        <div class="card text-bg-dark mb-3">
                            <div class="card-body">
                                <h4 class="card-title">CONTACT US</h4>
                                <p class="card-text">
                                    Please find below contact details
                                    and contact us today! Our experts always ready to help you.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Phone : (+6221) 2500120</li>
                                <li class="list-group-item">info@sumberglobalenergy.co.id</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif ($post->layout == 'Article')
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-8">
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1 text-capitalize">{{ $post->title }}</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Posted on
                                    {{ \Carbon\Carbon::parse($post->date_gmt)->toDayDateTimeString() }} -
                                    {{ \Carbon\Carbon::parse($post->date_gmt)->diffForHumans() }}
                                </div>
                                <!-- Post categories-->
                                <a class="badge bg-primary text-decoration-none link-light"
                                    href="#!">{{ $post->category->name }}</a>
                                <a class="badge bg-primary text-decoration-none link-light" href="#!">News</a>
                            </header>
                            <!-- Preview image figure-->
                            <figure class="mb-4"><img class="img-fluid rounded"
                                    src="{{ Storage::url($post->image->path ?? '') }}" alt="..."></figure>

                            <!-- Post content-->
                            <section class="mb-5">
                                {!! $post->content !!}

                            </section>
                        </article>

                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card primary">
                            <div class="card-body">
                                <h4 class="card-title">CONTACT US</h4>
                                <p class="card-text">
                                    Please find below contact details
                                    and contact us today! Our experts always ready to help you.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Phone : (+6221) 2500120</li>
                                <li class="list-group-item">info@sumberglobalenergy.co.id</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-12 col-lg-12">
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1 text-capitalize">{{ $post->title }}</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Posted on
                                    {{ \Carbon\Carbon::parse($post->date_gmt)->toDayDateTimeString() }} -
                                    {{ \Carbon\Carbon::parse($post->date_gmt)->diffForHumans() }}
                                </div>
                                <!-- Post categories-->
                                <a class="badge bg-primary text-decoration-none link-light"
                                    href="#!">{{ $post->category->name }}</a>
                                <a class="badge bg-primary text-decoration-none link-light" href="#!">News</a>
                            </header>
                            <!-- Preview image figure-->
                            <figure class="mb-4"><img class="img-fluid rounded"
                                    src="{{ Storage::url($post->image->path ?? '') }}" alt="..."></figure>
                            <!-- Post content-->
                            <section class="mb-5">
                                {!! $post->content !!}

                            </section>
                        </article>

                    </div>

                </div>
            </div>
        </div>
    @endif
@endsection
