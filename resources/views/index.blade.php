@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero d-flex flex-column align-items-center justify-content-center" data-aos="fade-up" data-aos-once="true">
        <img src="/image/logo-himaya.png" alt="Himaya Photo Studio" class="hero-logo">
        <button class="black-btn my-5 rounded-pill" onclick="location.href='#book'">Book Now!</button>
    </section>

    <!-- Description Section -->
    <section class="description container custom-margin-section" data-aos="fade-up" data-aos-once="true">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-center">
                <h1 class="text-title-big mb-4 mb-lg-0">Himaya Photo Studio. <span class="font-grey">Self Hoto Studio &
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
            <div class="col-6 col-lg-3 content-item-box" data-aos="fade-up" data-aos-once="true">
                <a data-fslightbox href="/assets/img/cafe1.jpeg">
                    <img class="content-item" src="/assets/img/cafe1.jpeg" alt="Pic">
                </a>

            </div>
            <div class="col-6 col-lg-3 content-item-box" data-aos="fade-up" data-aos-once="true">
                <a data-fslightbox href="/assets/img/cinema-1.HEIC">
                    <img class="content-item" src="/assets/img/cinema-1.HEIC" alt="Pic">
                </a>
            </div>
            <div class="col-6 col-lg-3 content-item-box" data-aos="fade-up" data-aos-once="true">
                <a data-fslightbox href="/assets/img/meet-room-1.HEIC">
                    <img class="content-item" src="/assets/img/meet-room-1.HEIC" alt="Pic">
                </a>
            </div>
            <div class="col-6 col-lg-3 content-item-box" data-aos="fade-up" data-aos-once="true">
                <a data-fslightbox href="/assets/img/self-photo-1.jpeg">
                    <img class="content-item" src="/assets/img/self-photo-1.jpeg" alt="Pic">
                </a>
            </div>
            <div class="col-6 col-lg-3 content-item-box" data-aos="fade-up" data-aos-once="true">
                <a data-fslightbox href="/assets/img/cafe2.jpeg">
                    <img class="content-item" src="/assets/img/cafe2.jpeg" alt="Pic">
                </a>
            </div>
            <div class="col-6 col-lg-3 content-item-box" data-aos="fade-up" data-aos-once="true">
                <a data-fslightbox href="/assets/img/cinema-2.HEIC">
                    <img class="content-item" src="/assets/img/cinema-2.HEIC" alt="Pic">
                </a>
            </div>
            <div class="col-6 col-lg-3 content-item-box" data-aos="fade-up" data-aos-once="true">
                <a data-fslightbox href="/assets/img/meet-room-2.HEIC">
                    <img class="content-item" src="/assets/img/meet-room-2.HEIC" alt="Pic">
                </a>
            </div>
            <div class="col-6 col-lg-3 content-item-box" data-aos="fade-up" data-aos-once="true">
                <a data-fslightbox href="/assets/img/self-photo-2.jpeg">
                    <img class="content-item" src="/assets/img/self-photo-2.jpeg" alt="Pic">
                </a>
            </div>
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
                    something
                    to offer</p>
                <button class="black-btn black-btn-bgwhite my-5 rounded-pill d-none d-lg-inline-block"
                    onclick="location.href='#book'">Get Free
                    Photo Now</button>
            </div>
            <div class="col-12 col-lg-5 offset-lg-1 d-flex align-items-center justify-content-end">
                <div class="video-promotion-box">
                    <video class="video-promotion-item" controls>
                        <source src="/assets/vid/full-ads.mov" type="video/mp4" style="object-fit: cover;">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="col-12 d-flex align-items-center justify-content-center d-block d-lg-none">
                <button class="black-btn my-5 rounded-pill w-100" onclick="location.href='#book'">Get Free
                    Photo Now</button>
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

    <!-- Our Service Section -->
    <section class="our-service container custom-margin-section" id="aboutme">
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
            <div class="col-6 col-lg-3 content-item-box">
                <video class="video-promotion-item" controls>
                    <source src="{{ asset('assets/vid/konten private cinema.mov') }}" type="video/mp4"
                        style="object-fit: cover;">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="col-6 col-lg-3 content-item-box">
                <video class="video-promotion-item" controls>
                    <source src="{{ asset('assets/vid/konten cafe vo.mov') }}" type="video/mp4"
                        style="object-fit: cover;">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="col-6 col-lg-3 content-item-box">
                <video class="video-promotion-item" controls>
                    <source src="{{ asset('assets/vid/konten ads self photo.MOV') }}" type="video/mp4"
                        style="object-fit: cover;">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="col-6 col-lg-3 content-item-box">
                <video class="video-promotion-item" controls>
                    <source src="{{ asset('assets/vid/konten vo meetroom.mov') }}" type="video/mp4"
                        style="object-fit: cover;">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <div class="w-100 text-center">
            <button class="black-btn black-btn-bgwhite my-lg-5 my-4 rounded-pill d-inline-block d-lg-none"
                onclick="location.href='#https://www.instagram.com/himayapotretstudio'" target="_blank">Follow
                Us</button>
        </div>
    </section>
@endsection
