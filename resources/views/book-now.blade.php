@extends('layouts.app')

@push('style')
    <!-- splide -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
     <!-- page css -->
     <link rel="stylesheet" href="{{ asset('assets/css/book-now.css') . '?v=' . bin2hex(random_bytes(20)) }}">
@endpush
@section('content')
    <section class="container">
        <!-- Modal for Private Cinema -->
        <div class="modal fade" id="modal-private-cinema" tabindex="-1" aria-labelledby="modalLabelPrivateCinema"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-product">
                <div class="modal-content">
                    <div class="modal-body position-relative">
                        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <div class="row gy-4">
                            <div class="col-12 col-lg-6">
                                <section id="modal-carousel-private-cinema" class="splide main-carousel"
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
                                <p class="modal-sub-title mb-4">Private Cinema terbaik di Jabodetabek!</p>
                                <p class="modal-sub">Rp 69.000 | 30 min</p>
                                <p class="modal-sub">Rp 99.000 | 60 min</p>
                                <p class="modal-sub">Rp 129.000 | 90 min</p>
                                <p class="modal-sub">Rp 149.000 | 120 min</p>
                                <p class="modal-note">(Harga seterusnya mengikuti di atas) <br>*Max 4 orang, tambah orang
                                    charge Rp 10.000/orang</p>

                                <p class="modal-additional">Additional:</p>
                                <p class="modal-additional-item">- Tambah 1 per 1 orang: Rp 10.000 (Max add 21)</p>

                                <p class="modal-package-title">Additional Package:</p>
                                <p class="modal-package">Rp 449.000 | Birthday Standard Package</p>
                                <p class="modal-package">Rp 599.000 | Birthday Silver Package</p>
                                <p class="modal-package">Rp 749.000 | Birthday Gold Package</p>
                                <p class="modal-package">Rp 899.000 | Birthday Platinum Package</p>

                                <p class="modal-package">Rp 499.000 | Bridal Shower Standard Package</p>
                                <p class="modal-package">Rp 649.000 | Bridal Shower Silver Package</p>
                                <p class="modal-package">Rp 849.000 | Bridal Shower Gold Package</p>
                                <p class="modal-package">Rp 999.000 | Bridal Shower Platinum Package</p>

                                <p class="modal-location text-black-50 mb-5">Jl. Sanggata 1 No.8 Blok D7, RT.007/RW.013,
                                    Jatiwaringin, Kec. Pd. Gede</p>

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
                                <section id="modal-carousel-self-photo" class="splide main-carousel"
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
                                <p class="modal-sub">Rp. 129.000 | 30 min</p>
                                <p class="modal-sub">Rp. 149.000 | 45 min</p>
                                <p class="modal-sub">Rp. 179.000 | 60 min</p>
                                <p class="modal-sub">(Harga seterusnya mengikuti di atas)</p>
                                <p class="modal-additional">Additional:</p>
                                <p class="modal-additional">- Kostum : Rp 25,000</p>
                                <p class="modal-additional">- Hard Copy: Rp 15.000</p>
                                <p class="modal-location">Jl. Sanggata 1 No.8 Blok D7, RT.007/RW.013, Jatiwaringin, Kec.
                                    Pd. Gede</p>
                                
                                <button class="modal-btn black-btn my-2 rounded-pill d-block" id="btn-self-photo">Book
                                    Now</button>

                                <p class="modal-notes d-block d-lg-none mb-2">
                                    Semua file foto yang dikirim melalui Whatsapp 60 Menit setelah sesi foto
                                </p>

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
                                <section id="modal-carousel-meeting-room" class="splide main-carousel"
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
                                <p class="modal-sub-title mb-4">Meeting Room terbaik di Jabodetabek!</p>
                                <p class="modal-sub">Rp 69.000 | 60 min</p>
                                <p class="modal-sub">Rp 99.000 | 120 min</p>
                                <p class="modal-sub">Rp 129.000 | 150 min</p>
                                <p class="modal-sub">Rp 149.000 | 180 min</p>
                                <p class="modal-note">(Harga seterusnya mengikuti di atas)</p>

                                <p class="modal-additional">Additional:</p>
                                <p class="modal-additional-item">- Proyektor: Rp 20.000</p>

                                <p class="modal-location text-black-50 mb-3">Jl. Sanggata 1 No.8 Blok D7, RT.007/RW.013,
                                    Jatiwaringin, Kec. Pd. Gede</p>

                                <button class="modal-btn black-btn my-2 rounded-pill d-block" id="btn-meet-room">Book Now</button>
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
                        <span class="product-label bg-red">Book Now</span>
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
                        <span class="product-label bg-red">Book Now</span>
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
    <script src="{{ asset('assets/js/book-now.js') . '?v=' . bin2hex(random_bytes(20)) }}"></script>
    {{-- <script src="{{ asset('assets/js/book-detail.js') . '?v=' . bin2hex(random_bytes(20)) }}"></script> --}}
    @include('modals.assets.script')
@endpush
