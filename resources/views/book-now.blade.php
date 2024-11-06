@extends('layouts.app')

@push('style')
    <!-- page css -->
    <link rel="stylesheet" href="{{ asset('assets/css/book-now.css') . '?v=' . bin2hex(random_bytes(20)) }}">

    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- splide -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
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
        <div class="row product-section gy-4 d-flex justify-content-center" data-aos="fade-up" data-aos-once="true" data-aos-offset="100"
            data-aos-delay="300">
            <div class="col-12 col-lg-3 product-card ">
                <a class="no-decor" href="{{ route('book-detail', ['slug' => 'private-cinema']) }}">
                    <div class="position-relative">
                        <span class="product-label bg-red">
                            Book Now
                        </span>
                        <img src="assets/img/katalog-cinema-1.jpeg" class="product-img" alt="single">
                        <h4 class="product-title">Private Cinema</h4>
                        <p class="product-sub">
                            Rp. 69.000 | 30 min
                        </p>
                        <button class="btn-product" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Book Now</button>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-3 product-card">
                <a class="no-decor" href="{{ route('book-detail', ['slug' => 'self-photo']) }}">
                    <div class="position-relative">
                        <span class="product-label">
                            Book Now
                        </span>
                        <img src="assets/img/katalog-photo-1.jpeg" class="product-img" alt="single">
                        <h4 class="product-title">Self-Photo Studio</h4>
                        <p class="product-sub">
                            Rp 99.000 | 15 min
                        </p>
                        <button class="btn-product" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Book Now</button>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-3 product-card">
                <a class="no-decor" href="{{ route('book-detail', ['slug' => 'meeting-room']) }}">
                    <div class="position-relative">
                        <span class="product-label">
                            Book Now
                        </span>
                        <img src="assets/img/meet-room-3.jpg" class="product-img" alt="single">
                        <h4 class="product-title">Meeting Room</h4>
                        <p class="product-sub">
                            Rp. 69.000 | 60 min
                        </p>
                        <button class="btn-product" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Book Now</button>
                    </div>
                </a>
            </div>
        </div>

        <!-- book section -->
        {{-- <div class="book-section d-flex align-items-center justify-content-center flex-wrap">
            <img class="product-img" src="assets/img/photo-1.jpeg" alt="frame" data-aos="fade-up"
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
        </div> --}}
    </section>
@endsection

@push('script')
    <!-- page js -->
    <script src="assets/js/book-now.js"></script>
@endpush
