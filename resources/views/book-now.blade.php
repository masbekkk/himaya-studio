@extends('layouts.app')

@push('style')
    <!-- page css -->
    <link rel="stylesheet" href="assets/css/book-now.css">
@endpush
@section('content')
    <section class="container">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-product">
                <div class="modal-content">
                    <div class="modal-body position-relative">
                        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <div class="row gy-4">
                            <div class="col-12 col-lg-6">
                                <section id="modal-carousel" class="splide" aria-label="Beautiful Images">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            <li class="splide__slide">
                                                <img src="assets/img/single1.jfif" alt="">
                                            </li>
                                            <li class="splide__slide">
                                                <img src="assets/img/single3.jfif" alt="">
                                            </li>
                                            <li class="splide__slide">
                                                <img src="assets/img/single4.jfif" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div>
                                    <h2 class="modal-title">SINGLE</h2>
                                    <p class="modal-sub">Rp 40.000 | 15 min</p>
                                    <p class="modal-location">Northwest Park NA3-01</p>
                                    <p class="modal-desc">Warna background (Putih, Abu-abu, Hitam, Cream) *pilih salah
                                        satu</p>
                                    <input class="form-control form-control-lg" type="text">
                                </div>
                                <button class="modal-btn black-btn my-4 rounded-pill d-block">Book Now</button>
                                <a href="" class="modal-link">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- product section -->
        <div class="row product-section gy-4" data-aos="fade-up" data-aos-once="true" data-aos-offset="100"
            data-aos-delay="300">
            <div class="col-12 col-lg-3 product-card">
                <a class="no-decor" href="/book-detail.html">
                    <div class="position-relative">
                        <span class="product-label">
                            1 PERSON
                        </span>
                        <img src="assets/img/single.jpg" class="product-img" alt="single">
                        <h4 class="product-title">SINGLE</h4>
                        <p class="product-sub">
                            Rp. 40.000 | 15 min
                        </p>
                        <button class="btn-product" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Book Now</button>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-3 product-card">
                <a class="no-decor" href="/book-detail.html">
                    <div class="position-relative">
                        <span class="product-label">
                            2 PERSON
                        </span>
                        <img src="assets/img/single.jpg" class="product-img" alt="single">
                        <h4 class="product-title">COUPLE</h4>
                        <p class="product-sub">
                            Rp 75.000 | 15 min
                        </p>
                        <button class="btn-product" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Book Now</button>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-3 product-card">
                <a class="no-decor" href="/book-detail.html">
                    <div class="position-relative">
                        <span class="product-label">
                            3-4 PERSON
                        </span>
                        <img src="assets/img/single.jpg" class="product-img" alt="single">
                        <h4 class="product-title">SQUAD</h4>
                        <p class="product-sub">
                            Rp. 100.000 | 15 min
                        </p>
                        <button class="btn-product" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Book Now</button>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-3 product-card">
                <a class="no-decor" href="/book-detail.html">
                    <div class="position-relative">
                        <span class="product-label">
                            5-10 PERSON
                        </span>
                        <img src="assets/img/single.jpg" class="product-img" alt="single">
                        <h4 class="product-title">FAMILY</h4>
                        <p class="product-sub">
                            Rp. 160.000 | 15 min
                        </p>
                        <button class="btn-product" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Book Now</button>
                    </div>
                </a>
            </div>
        </div>

        <!-- book section -->
        <div class="book-section d-flex align-items-center justify-content-center flex-wrap">
            <img class="book-img" src="assets/img/photo-with-frame.png" alt="frame" data-aos="fade-up"
                data-aos-once="true" data-aos-easing="ease-out" data-aos-offset="110">
            <div class="book-content" data-aos="fade-up" data-aos-once="true" data-aos-offset="110">
                <div class="me-lg-5 px-lg-5">
                    <h2 class="book-title mb-5">BOOK NOW <span class="font-grey">AND GET</span> FREE 1 PRINTED PHOTO
                    </h2>
                    <button
                        class="black-btn black-btn-bgwhite rounded-pill px-5 d-block d-lg-inline-block m-auto m-lg-0">Get
                        Free Photo Now</button>
                </div>
            </div>
        </div>
    </section>
@endsection
