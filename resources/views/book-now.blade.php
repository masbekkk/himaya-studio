@extends('layouts.app')

@push('style')
    <!-- page css -->
    <link rel="stylesheet" href="{{ asset('assets/css/book-now.css') . '?v=' . bin2hex(random_bytes(20)) }}">
    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/book-detail.css') . '?v=' . bin2hex(random_bytes(20)) }}">
    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- splide -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <!-- pikaday -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <style>
        .pika-single {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        .pika-button {
            background: #f8f9fa;
            color: #212529;
        }

        .pika-button:hover {
            background: #e9ecef !important;
            color: #212529 !important;
        }

        .is-selected .pika-button {
            background: #0d6efd !important;
            color: #fff !important;
            box-shadow: none;
        }

        .is-today .pika-button {
            color: #0d6efd;
        }

        #bookModal>.modal-dialog {
            width: 60vw;
            max-width: 60vw;
        }

        #bookModal>.modal-content {
            overflow-y: hidden;
            border-radius: 1em;
        }

        .book-modal-body {
            display: grid;
            grid-template-columns: 1fr 2fr;
        }

        .time-list {
            display: grid;
            grid-template-columns: 1fr;
            row-gap: .5em;
            padding-right: 1.5rem;
            overflow-y: auto;
            max-height: 400px;
        }

        .time-btn {
            padding: .5em 2.5em;
            border: 1px solid #1a1a1a;
            border-radius: .5em;
            font-size: .8rem;
            background-color: white;
            transition: .2s;
        }

        .time-btn:hover {
            background-color: #d5dfff;
            border-color: #d5dfff;
        }

        .left-side {
            padding: 3rem;
        }

        .right-side {
            padding: 3rem;
            display: grid;
            grid-template-areas:
                'title title'
                'date time';
            column-gap: 1.5rem;
            grid-template-rows: auto 1fr;
            grid-template-columns: 60% 40%;
        }

        #bookModal>.modal-title {
            font-size: 1.2rem;
            font-weight: normal;
            margin-bottom: 1.5rem;
            grid-area: title;
        }

        .li-no-style {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .current-date {
            margin-bottom: 1em;
        }

        .datepicker-block {
            grid-area: date;
        }

        .timepicker-block {
            grid-area: time;
        }

        #bookModal>.modal-footer .btn {
            font-size: calc(1rem - 2px);
            min-width: 100px;
        }

        #orderSuccessModal .modal-body {
            padding: 1rem;
        }

        #orderSuccessModal .modal-title {
            font-size: 2rem;
            font-weight: 600;
        }

        #orderSuccessModal .btn-done {
            font-size: calc(1rem - 2px);
            color: white !important;
            min-width: 100px;
        }

        #orderSuccessModal .payment-info {
            padding: 3rem 2rem;
            margin-top: calc(2.5rem - 4px);
        }

        @media screen and (max-width: 992px) {
            #bookModal>.modal-title:last-child {
                margin-bottom: 0;
            }

            .timepicker-block {
                width: 100%;
            }

            #bookModal>.modal-dialog {
                width: 100%;
                max-width: 100%;
            }

            .book-modal-body {
                grid-template-columns: 1fr;
                overflow-y: auto;
            }

            .left-side {
                padding: 1rem;
            }

            .right-side {
                padding: 1rem;
                display: flex;
                gap: 1rem;
                align-items: center;
                flex-direction: column;
            }

            .current-date {
                margin-bottom: 2rem;
            }

            .time-list {
                padding: 0rem 3rem;
            }

        }
    </style>
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
                                <p class="modal-sub">Rp. 129.000 | 30 min</p>
                                <p class="modal-sub">Rp. 149.000 | 45 min</p>
                                <p class="modal-sub">Rp. 179.000 | 60 min</p>
                                <p class="modal-sub">(Harga seterusnya mengikuti di atas)</p>
                                <p class="modal-additional">Additional:</p>
                                <p class="modal-additional">- Kostum : Rp 25,000</p>
                                <p class="modal-additional">- Hard Copy: Rp 15.000</p>
                                <p class="modal-location">Jl. Sanggata 1 No.8 Blok D7, RT.007/RW.013, Jatiwaringin, Kec.
                                    Pd. Gede</p>
                                <p class="modal-desc">Warna background (Putih, Biru, Pink, Abu-abu, Kuning) *pilih salah
                                    satu</p>
                                <input class="form-control form-control-lg mb-1" type="text" placeholder="">
                                <button class="modal-btn black-btn my-2 rounded-pill d-block">Book Now</button>

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
                                <p class="modal-sub-title mb-4">Meeting Room terbaik di Jabodetabek!</p>
                                <p class="modal-sub">Rp 69.000 | 60 min</p>
                                <p class="modal-sub">Rp 99.000 | 120 min</p>
                                <p class="modal-sub">Rp 129.000 | 150 min</p>
                                <p class="modal-sub">Rp 149.000 | 180 min</p>
                                <p class="modal-note">(Harga seterusnya mengikuti di atas)</p>

                                <p class="modal-additional">Additional:</p>
                                <p class="modal-additional-item">- Proyektor: Rp 20.000</p>

                                <p class="modal-location text-black-50 mb-5">Jl. Sanggata 1 No.8 Blok D7, RT.007/RW.013,
                                    Jatiwaringin, Kec. Pd. Gede</p>

                                <button class="modal-btn black-btn my-4 rounded-pill d-block" data-bs-toggle="modal"
                                    data-bs-target="#bookModal">Book Now</button>
                                <a href="{{ route('book-detail', ['slug' => 'meeting-room']) }}" class="modal-link">MORE
                                    DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Book when click Book Now Button -->
        <div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-lg-down modal-dialog-centered">
                <div class="modal-content rounded" style="overflow: hidden;">
                    <div class="modal-body p-0 book-modal-body position-relative">
                        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <div class="left-side">
                            <h5 class="modal-title mb-3">COUPLE</h5>
                            <ul class="li-no-style">
                                <li class="my-2">
                                    <i class="bi bi-calendar3 me-2"></i>
                                    <span id="selected-date">11/6/2024</span>
                                </li>
                                <li class="my-2">
                                    <i class="bi bi-clock me-2"></i>
                                    <span id="selected-date">--:--</span>
                                </li>
                                <li class="my-2">
                                    <i class="bi bi-geo-alt me-2"></i>
                                    <span id="selected-date">Northwest Park NA3-01</span>
                                </li>
                            </ul>

                        </div>
                        <div class="right-side bg-grey">
                            <h5 class="modal-title mb-3">Select Date & Time</h5>
                            <div class="datepicker-block w-100">
                                <div class="w-100 h-100" id="datepicker"></div>
                            </div>
                            <div class="timepicker-block">
                                <p class="current-date mb-5">Thursday, November 7</p>
                                <div class="time-list">
                                    <button class="time-btn border border-0">09:00 AM</button>
                                    <button class="time-btn border border-0">10:00 AM</button>
                                    <button class="time-btn border border-0">11:00 AM</button>
                                    <button class="time-btn border border-0">09:00 AM</button>
                                    <button class="time-btn border border-0">10:00 AM</button>
                                    <button class="time-btn border border-0">11:00 AM</button>
                                    <button class="time-btn border border-0">09:00 AM</button>
                                    <button class="time-btn border border-0">10:00 AM</button>
                                    <button class="time-btn border border-0">11:00 AM</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-transparent px-4" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-secondary text-white px-4">Book</button>
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
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <script src="{{ asset('assets/js/book-detail.js') }}"></script>
    <!-- Initialize Splide for each modal carousel -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var picker = new Pikaday({
                field: document.getElementById('datepicker'),
                bound: false,
                container: document.getElementById('datepicker'),
                format: 'D MMM YYYY',
                onSelect: function() {
                    document.getElementById('selectedDate').textContent = this.getMoment().format(
                        'D MMM YYYY');
                }
            });

            // Set initial date
            var today = new Date();
            picker.setDate(today);
            document.getElementById('selectedDate').textContent = picker.toString();
        });

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
