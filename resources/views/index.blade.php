@extends('layouts.app')

@push('style')
    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/book-detail.css') . '?v=' . bin2hex(random_bytes(20)) }}">
    <!-- Splide CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

    <style>
        #hero-carousel {
            width: 100%;
            height: 70vh;
            /* Take up full viewport height */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .splide__track,
        .splide__list {
            width: 100%;
            /* Ensure track and list are full width */
        }

        .splide__slide img {
            width: 100%;
            /* Full width of the container */
            height: auto;
            /* Auto height to maintain aspect ratio */
            max-height: 60vh;
            /* Max height to enforce a landscape feel */
            object-fit: cover;
            /* Cover the container area while maintaining aspect */
            display: block;
            margin: auto;

        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section id="hero-carousel" class="splide hero d-flex flex-column align-items-center justify-content-center"
        aria-label="My Awesome Gallery">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img src="{{ asset('assets/carousel/cafe-car.jpeg') }}" alt="">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('assets/carousel/katalog-cinema-1.jpeg') }}" alt="">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('assets/carousel/katalog-photo-1.jpeg') }}" alt="">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('assets/carousel/photo-black.jpeg') }}" alt="">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('assets/carousel/meet-room-3.jpg') }}" alt="">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('assets/carousel/meet-room-4.png') }}" alt="">
                </li>
            </ul>
        </div>
    </section>
    <!-- Description Section -->
    <section class="description container custom-margin-section" data-aos="fade-up" data-aos-once="true">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-center">
                <h1 class="text-title-big mb-4 mb-lg-0">Himaya Photo Studio. <span class="font-grey">Self Photo Studio &
                        Private Cinema | Jatiwaringin | Bekasi</span></h1>
            </div>
            <div class="col-12 col-lg-5 offset-lg-1">
                <p class="text-description mb-0 h6 fw-normal">Nikmati Private Cinema terbaik di Jabodetabek untuk nonton
                    film terbaru bersama bestie, keluarga, atau pasangan! Rayakan momen spesial seperti ulang tahun atau
                    bridal shower. Kami juga memiliki self-photo studio premium di Bekasi, Meeting Room nyaman, dan Himaya
                    Cafe. Potretkan Momen Romantismu bersama kami!</p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content container custom-margin-section">
        <div class="row g-2 g-lg-3 py-4">
            @foreach (['cafe1.jpg', 'cinema-1.jpg', 'meet-room-1.jpg', 'self-photo-1.jpeg', 'cafe2.jpg', 'cinema-2.jpg', 'meet-room-2.jpg', 'self-photo-2.jpeg'] as $image)
                <div class="col-6 col-lg-3 content-item-box" data-aos="fade-up" data-aos-once="true">
                    <a data-fslightbox href="{{ asset('assets/img/' . $image) }}">
                        <img class="content-item" src="{{ asset('assets/img/' . $image) }}" alt="Image">
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Promo Section -->
    <section class="promo container custom-margin-section" data-aos="fade-up" data-aos-once="true">
        <div class="row">
            <div class="col-12 col-lg-6 pe-5">
                <h1 class="promo-title text-title">Book Now <span class="font-grey">And Get</span> Free 1 Printed Photo
                </h1>
                <p class="text-description mb-0 h6 fw-normal">Great news for Surabaya Barat peeps! We are currently soft
                    opening now and want to invite you all to our premium and cozy Nee self photo studio. Our promo are
                    included in any type of self photo sessions including single, couple, squad and families. It will be
                    held from October until early November, but don't shy to talk with us because we always have
                    something to offer</p>
                <button class="black-btn black-btn-bgwhite my-5 rounded-pill d-none d-lg-inline-block"
                    onclick="location.href='#book'">Get Free Photo Now</button>
            </div>
            <div class="col-12 col-lg-5 offset-lg-1 d-flex align-items-center justify-content-end">
                <div class="video-promotion-box">
                    <video class="video-promotion-item" controls>
                        <source src="{{ asset('assets/vid/full-ads.mov') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </section>

    <!-- About Me Section -->
    <section class="about-me container custom-margin-section" id="aboutme" data-aos="fade-up" data-aos-once="true">
        <div class="about-box py-5 d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-title-small text-white py-3 py-lg-5 mb-3 m-0 text-center" data-aos="fade-up"
                data-aos-once="true">
                About Himaya Photo Studio
            </h1>
            <div class="aboutme-description pb-3 pb-lg-5 text-center" data-aos="fade-up" data-aos-once="true">
                <p class="text-description-white text-center">
                    HIMAYA POTRET STUDIO adalah destinasi utama di Jabodetabek untuk Private Cinema, self-photo studio, dan
                    Meeting Room. Nikmati pengalaman menonton film yang lebih personal dengan koleksi film terbaru, cocok
                    untuk momen spesial bersama sahabat, keluarga, atau pasangan. Studio self-photo premium kami di Bekasi
                    juga ideal untuk mengabadikan momen pribadi atau bersenang-senang dengan teman. Meeting Room kami modern
                    dan nyaman untuk keperluan bisnis. Dilengkapi dengan Himaya Cafe, kami berkomitmen memberikan pelayanan
                    terbaik untuk setiap momen istimewa Anda. Booking sekarang di HIMAYA POTRET STUDIO!
                </p>
            </div>
            <button class="transparent-btn-bgdark border border-1 border-white rounded-pill mb-3 mb-lg-5"
                onclick="location.href='https://www.instagram.com/himayapotretstudio'" data-aos="fade-up"
                data-aos-once="true">Follow Us</button>
        </div>
    </section>

    <!-- Keep Up Section -->
    <section class="keepup container custom-margin-section">
        <div class="keepup-title d-flex align-items-center justify-content-lg-between justify-content-center"
            data-aos="fade-up" data-aos-once="true">
            <h1 class="text-title-small pt-lg-5 pt-3 pb-3">
                Keep Up With Us!
            </h1>
            <button class="black-btn black-btn-bgwhite my-5 rounded-pill d-none d-lg-inline-block"
                onclick="location.href='https://www.instagram.com/himayapotretstudio'" target="_blank">Follow
                Us</button>
        </div>
        <div class="row g-3 py-4" data-aos="fade-up" data-aos-once="true">
            @foreach (['konten private cinema.mov', 'konten cafe vo.mov', 'konten ads self photo.MOV', 'konten vo meetroom.mov'] as $video)
                <div class="col-6 col-lg-3 content-item-box">
                    <video class="video-promotion-item" controls>
                        <source src="{{ asset('assets/vid/' . $video) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            @endforeach
        </div>
    </section>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="{{ asset('assets/js/hero-carousel.js') }}"></script>
@endpush
