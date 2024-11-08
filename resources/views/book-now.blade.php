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

    <style>

    </style>
@endpush
@section('content')
    <section class="container">
        <!-- Modal for Private Cinema -->
        <div class="modal fade" id="modal-private-cinema" tabindex="-1" aria-labelledby="modalLabelPrivateCinema"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-product">
                <div class="modal-content">
                    <div class="modal-body position-relative">
                        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <div class="row gy-4">
                            <div class="col-12 col-lg-6">
                                <section id="modal-carousel-private-cinema" class="splide"
                                    aria-label="Private Cinema Images">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            <li class="splide__slide">
                                                <img src="{{ asset('assets/img/cinema-1.jpg') }}" alt="Cinema 1">
                                            </li>
                                            <li class="splide__slide">
                                                <img src="{{ asset('assets/img/cinema-2.jpg') }}" alt="Cinema 2">
                                            </li>
                                            <li class="splide__slide">
                                                <img src="{{ asset('assets/img/cinema-3.jpg') }}" alt="Cinema 3">
                                            </li>
                                            <li class="splide__slide">
                                                <img src="{{ asset('assets/img/cinema-4.jpg') }}" alt="Cinema 4">
                                            </li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h2 class="modal-title">Private Cinema</h2>
                                <p class="modal-sub">Rp. 69.000 | 30 min</p>
                                <p class="modal-location">Northwest Park NA3-01</p>
                                <p class="modal-desc">Enjoy a private cinema experience with a selection of movies.</p>
                                <button class="modal-btn black-btn my-4 rounded-pill d-block">Book Now</button>
                                <a href="{{ route('book-detail', ['slug' => 'private-cinema']) }}" class="modal-link">MORE
                                    DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Self-Photo Studio -->
        <div class="modal fade" id="modal-self-photo" tabindex="-1" aria-labelledby="modalLabelSelfPhoto"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-product">
                <div class="modal-content">
                    <div class="modal-body position-relative">
                        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <div class="row gy-4">
                            <div class="col-12 col-lg-6">
                                <section id="modal-carousel-self-photo" class="splide"
                                    aria-label="Self-Photo Studio Images">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            <li class="splide__slide">
                                                <img src="{{ asset('assets/img/self-photo-1.jpeg') }}" alt="">
                                            </li>
                                            <li class="splide__slide">
                                                <img src="{{ asset('assets/img/self-photo-2.jpeg') }}" alt="">
                                            </li>
                                            <li class="splide__slide">
                                                <img src="{{ asset('assets/img/photo-1.jpeg') }}" alt="">
                                            </li>
                                            <li class="splide__slide">
                                                <img src="{{ asset('assets/img/photo-2.jpeg') }}" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h2 class="modal-title">Self-Photo Studio</h2>
                                <p class="modal-sub">Rp. 99.000 | 15 min</p>
                                <p class="modal-location">Northwest Park NA3-02</p>
                                <p class="modal-desc">Capture your best moments in a self-photo studio with various
                                    backgrounds.</p>
                                <button class="modal-btn black-btn my-4 rounded-pill d-block">Book Now</button>
                                <a href="{{ route('book-detail', ['slug' => 'self-photo']) }}" class="modal-link">MORE
                                    DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Meeting Room -->
        <div class="modal fade" id="modal-meeting-room" tabindex="-1" aria-labelledby="modalLabelMeetingRoom"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-product">
                <div class="modal-content">
                    <div class="modal-body position-relative">
                        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <div class="row gy-4">
                            <div class="col-12 col-lg-6">
                                <section id="modal-carousel-meeting-room" class="splide"
                                    aria-label="Meeting Room Images">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            <li class="splide__slide">
                                                <img src="{{ asset('assets/img/meet-room-1.jpg') }}" alt="Meet Room 1">
                                            </li>
                                            <li class="splide__slide">
                                                <img src="{{ asset('assets/img/meet-room-2.jpg') }}" alt="Meet Room 2">
                                            </li>
                                            <li class="splide__slide">
                                                <img src="{{ asset('assets/img/meet-room-3.jpg') }}" alt="Meet Room 3">
                                            </li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h2 class="modal-title">Meeting Room</h2>
                                <p class="modal-sub">Rp. 69.000 | 60 min</p>
                                <p class="modal-location">Northwest Park NA3-03</p>
                                <p class="modal-desc">Book a professional meeting room with all necessary amenities.</p>
                                <button class="modal-btn black-btn my-4 rounded-pill d-block">Book Now</button>
                                <a href="{{ route('book-detail', ['slug' => 'meeting-room']) }}" class="modal-link">MORE
                                    DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Section -->
        <div class="row product-section d-flex justify-content-center" data-aos="fade-up" data-aos-once="true"
            data-aos-offset="100" data-aos-delay="300">
            <!-- Private Cinema Product Card -->
            <div class="col-12 col-lg-3 product-card">
                <a class="no-decor" href="{{ route('book-detail', ['slug' => 'private-cinema']) }}">
                    <div class="position-relative">
                        <span class="product-label bg-red">Book Now</span>
                        <img src="assets/img/katalog-cinema-1.jpeg" class="product-img" alt="Private Cinema">
                        <h4 class="product-title">Private Cinema</h4>
                        <p class="product-sub">Rp. 69.000 | 30 min</p>
                        {{-- <button class="btn-product " type="button" class="btn btn-primary"
                        data-bs-toggle="modal" data-bs-target="#modal-private-cinema">Book Now</button> --}}
                    </div>
                </a>
                <!-- Book Now Button to Open Modal -->
                <button class="btn-product" type="button" data-bs-toggle="modal"
                    data-bs-target="#modal-private-cinema">
                    Book Now
                </button>
            </div>

            <!-- Self-Photo Studio Product Card -->
            <div class="col-12 col-lg-3 product-card">
                <a class="no-decor" href="{{ route('book-detail', ['slug' => 'self-photo']) }}">
                    <div class="position-relative">
                        <span class="product-label">Book Now</span>
                        <img src="assets/img/katalog-photo-1.jpeg" class="product-img" alt="Self-Photo Studio">
                        <h4 class="product-title">Self-Photo Studio</h4>
                        <p class="product-sub">Rp 99.000 | 15 min</p>

                    </div>
                </a>
                <button class="btn-product " type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#modal-self-photo">Book Now</button>
            </div>

            <!-- Meeting Room Product Card -->
            <div class="col-12 col-lg-3 product-card">
                <a class="no-decor" href="{{ route('book-detail', ['slug' => 'meeting-room']) }}">
                    <div class="position-relative">
                        <span class="product-label">Book Now</span>
                        <img src="assets/img/meet-room-3.jpg" class="product-img" alt="Meeting Room">
                        <h4 class="product-title">Meeting Room</h4>
                        <p class="product-sub">Rp. 69.000 | 60 min</p>

                    </div>
                </a>
                <button class="btn-product " type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#modal-meeting-room">Book Now</button>
            </div>
        </div>

        <!-- Book Section -->
        <div class="book-section d-flex align-items-center justify-content-center flex-lg-row flex-column">
            <!-- Text Content Section -->
            <div class="book-content" data-aos="fade-up" data-aos-once="true" data-aos-offset="110">
                <div class="px-lg-5">
                    <h2 class="book-title mb-5">BOOK NOW <span class="font-grey">AND GET</span> FREE 1 PRINTED PHOTO</h2>
                    <button class="black-btn black-btn-bgwhite rounded-pill px-5 d-block d-lg-inline-block m-auto m-lg-0">
                        Get Free Photo Now
                    </button>
                </div>
            </div>
        </div>

    </section>
@endsection

@push('script')
    <!-- page js -->
    <link rel="stylesheet" href="{{ asset('assets/js/book-now.js') . '?v=' . bin2hex(random_bytes(20)) }}">

    <!-- Initialize Splide for each modal carousel -->
    <script>
        // Select all product cards
        // document.querySelectorAll('.product-card').forEach(card => {
        //     // Get the Book Now button inside each card
        //     const button = card.querySelector('.btn-product');

        //     // Prevent the card's link from activating when clicking the button
        //     button.addEventListener('click', (event) => {
        //         event.stopPropagation(); // Prevent the click from bubbling up to the link
        //     });
        // });

        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#modal-carousel-private-cinema', {
                type: 'loop',
                autoplay: false
            }).mount();
            new Splide('#modal-carousel-self-photo', {
                type: 'loop',
                autoplay: false
            }).mount();
            new Splide('#modal-carousel-meeting-room', {
                type: 'loop',
                autoplay: false
            }).mount();
        });
    </script>
@endpush
