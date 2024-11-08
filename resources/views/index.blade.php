@extends('layouts.app')

@push('style')
    <!-- Page CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/book-detail.css') . '?v=' . bin2hex(random_bytes(20)) }}"> --}}
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
    <section id="hero-carousel" class="splide d-flex flex-column align-items-center justify-content-center"
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
            {{-- <div class="splide-overlay">
                <button class="black-btn my-5 rounded-pill splide-button" onclick="location.href='#book'">Book Now!</button>
            </div> --}}
        </div>
    </section>
    <!-- Description Section -->
    <section class="description container custom-margin-section" data-aos="fade-up" data-aos-once="true">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-center">
                <h3 class="text-title-big mb-4 mb-lg-0">Himaya Photo Studio. <span class="font-grey">Self Photo Studio &
                        Private Cinema | Jatiwaringin | Bekasi</span></h3>
            </div>
            <div class="col-12 col-lg-5 offset-lg-1">
                <p class="text-description mb-0 h6 fw-normal">Temukan pengalaman Private Cinema terbaik di Jabodetabek! Untuk menonton film yang lebih personal dengan update film yang seru dan terbaru bersama bestie, keluarga atau pasangan anda! Jika anda ingin merayakan ulang tahun, nobar sepak bola, bridal shower, jangan ragu untuk datang ke Private Cinema kami!
                    Kami juga menawarkan produk lainnya, seperti fotografi terbaik di studio self-photo premium kami yang berlokasi di Bekasi. Jika anda ingin mengabadikan momen pribadi, merayakan acara romantis bersama pasangan, atau ingin menciptakan kenangan abadi dengan teman-teman, studio kami siap memenuhi semua kebutuhan fotografi Anda. Selain itu kami memiliki Meeting Room yang nyaman dan profesional untuk kebutuhan pertemuan Anda, di lengkapi dengan Himaya Cafe untuk melengkapi hari serumu dengan menu yang spesial!
                    Studio kami melayani pelanggan dengan sepenuh hati, memberikan pelayanan terbaik untuk setiap momen istimewa Anda. Potretkan Momen Romantismu!</p>
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
                    HIMAYA POTRET STUDIO adalah destinasi utama Jabodetabek untuk Private Cinema, self-photo studio, dan
                    Meeting Room. Nikmati pengalaman menonton film pribadi dengan koleksi terbaru, ideal untuk momen
                    spesial. Studio self-photo premium kami di Bekasi sempurna untuk mengabadikan momen pribadi atau
                    bersenang-senang. Meeting Room modern siap mendukung kebutuhan bisnis Anda. Dengan Himaya Cafe, kami
                    berkomitmen memberi layanan terbaik. Booking sekarang di HIMAYA POTRET STUDIO!
                </p>
            </div>
            <button class="transparent-btn-bgdark border border-1 border-white rounded-pill mb-3 mb-lg-5"
                onclick="location.href='https://www.instagram.com/himayapotretstudio'" data-aos="fade-up"
                data-aos-once="true">Follow Us</button>
        </div>
    </section>

    <section class="our-service container custom-margin-section" id="ourservices">
        <div class="py-lg-5 py-0 d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-title-small fw-bold pt-lg-5 pt-4 pb-3" data-aos="fade-up" data-aos-once="true">
                Layanan Kami
            </h1>
            <div class="our-service-description" data-aos="fade-up" data-aos-once="true">
                <p class="text-description pb-5 text-center">
                    Dari Private Cinema hingga Self-Photo Studio dan Meeting Room. <br>Kami menyediakan beragam layanan yang
                    dirancang untuk memenuhi kebutuhan Anda
                </p>
            </div>
            <div class="card-container row">
                <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-end py-2"
                    data-aos="fade-up" data-aos-once="true">
                    <div class="card border border-0 h-100 mx-4 mb-5 mb-lg-0">
                        <div class="card-img-box">
                            <img src="/assets/img/card-header.webp" class="card-img-top" alt="Self Photo Studio Setup">
                        </div>
                        <div class="card-body p-0 bg-grey">
                            <div class="pt-lg-5 pt-4 px-lg-5 px-4 pb-lg-4 pb-3">
                                <h6 class="h5 mb-3 fw-bold text-dark">Private Cinema</h6>
                                <p class="card-text pb-2">Nikmati pengalaman menonton film yang eksklusif dan personal
                                    bersama keluarga, teman, atau pasangan, dengan film-film terbaru dan suasana yang
                                    nyaman. (2-8 Orang)
                                </p>
                            </div>
                            <div class="w-100 px-lg-5 px-4 pb-lg-4 pb-3">
                                <button class="transparent-btn rounded-pill w-100">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-end py-2"
                    data-aos="fade-up" data-aos-once="true">
                    <div class="card border border-0 h-100 mx-4 mb-5 mb-lg-0">
                        <div class="card-img-box">
                            <img src="/assets/img/card-header.webp" class="card-img-top" alt="Self Photo Studio Setup">
                        </div>
                        <div class="card-body p-0 bg-grey">
                            <div class="pt-lg-5 pt-4 px-lg-5 px-4 pb-lg-4 pb-3">
                                <h6 class="h5 mb-3 fw-bold text-dark">Self-Photo Studio</h6>
                                <p class="card-text pb-2">Abadikan momen spesial dengan fasilitas studio foto mandiri yang
                                    modern dan dilengkapi dengan segala kebutuhan fotografi untuk hasil yang sempurna. (2-25
                                    Orang)
                                </p>
                            </div>
                            <div class="w-100 px-lg-5 px-4 pb-lg-4 pb-3">
                                <button class="transparent-btn rounded-pill w-100">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container row">
                <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-end py-2"
                    data-aos="fade-up" data-aos-once="true">
                    <div class="card border border-0 h-100 mx-4 mb-5 mb-lg-0">
                        <div class="card-img-box">
                            <img src="/assets/img/card-header.webp" class="card-img-top" alt="Self Photo Studio Setup">
                        </div>
                        <div class="card-body p-0 bg-grey">
                            <div class="pt-lg-5 pt-4 px-lg-5 px-4 pb-lg-4 pb-3">
                                <h6 class="h5 mb-3 fw-bold text-dark">Meeting Room</h6>
                                <p class="card-text pb-2">Ruang pertemuan yang nyaman dan profesional, ideal untuk
                                    keperluan bisnis, presentasi, atau rapat penting Anda. (2-10 Orang)
                                </p>
                            </div>
                            <div class="w-100 px-lg-5 px-4 pb-lg-4 pb-3">
                                <button class="transparent-btn rounded-pill w-100">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-end py-2"
                    data-aos="fade-up" data-aos-once="true">
                    <div class="card border border-0 h-100 mx-4 mb-5 mb-lg-0">
                        <div class="card-img-box">
                            <img src="/assets/img/card-header.webp" class="card-img-top" alt="Self Photo Studio Setup">
                        </div>
                        <div class="card-body p-0 bg-grey">
                            <div class="pt-lg-5 pt-4 px-lg-5 px-4 pb-lg-4 pb-3">
                                <h6 class="h5 mb-3 fw-bold text-dark">Himaya Cafe</h6>
                                <p class="card-text pb-2">Nikmati hidangan lezat dan suasana santai di Himaya Cafe, tempat
                                    yang sempurna untuk bersantai untuk di Private Cinema, setelah sesi foto atau ketika
                                    pertemuan bisnis Anda.
                            </div>
                            <div class="w-100 px-lg-5 px-4 pb-lg-4 pb-3">
                                <button class="transparent-btn rounded-pill w-100">Visit Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
