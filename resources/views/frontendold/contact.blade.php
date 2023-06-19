@extends('layouts.app')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6">
                    <img src="https://img.freepik.com/free-vector/hand-drawn-contact-information-background-template_23-2148189661.jpg"
                        class="img-fluid">

                </div>
                <div class="col-md-6">
                    <div class="card">

                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success mt-1 mb-1" role="alert">
                                    Contact Berhasil terkirim
                                </div>
                            @endif
                            @error('g-recaptcha-response')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror


                            <form class="row g-3" action="{{ route('contactpost') }}" method="POST">
                                @csrf
                                <input name="date" type="date" id="date" hidden>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Name</label>
                                    <input type="text" class="form-control" @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" required autocomplete="email"
                                        autofocus>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Subject</label>
                                    <input type="text" class="form-control" name="subject" required
                                        autocomplete="subject" autofocus>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Category</label>
                                    <select id="inputState" class="form-select" name="category">

                                        <option value="Information">Information Product</option>
                                        <option value="Sales">Sales</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputCity" class="form-label">Message</label>
                                    <textarea class="form-control" rows="5" name="message" required autocomplete="message" autofocus></textarea>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sendemail" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Send to My Email
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    {!! RecaptchaV3::initJs() !!}

                                    {!! RecaptchaV3::field('contact-us') !!}

                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Send</button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
