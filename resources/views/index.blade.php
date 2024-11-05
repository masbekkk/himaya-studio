@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero d-flex flex-column align-items-center justify-content-center" data-aos="fade-up" data-aos-once="true">
        <img src="/assets/img/logo-white.avif" alt="Née Studio" class="hero-logo">
        <button class="black-btn my-5 rounded-pill" onclick="location.href='#book'">Book Now!</button>
    </section>

    <!-- Description Section -->
    <section class="description container custom-margin-section" data-aos="fade-up" data-aos-once="true">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-center">
                <h1 class="text-title-big mb-4 mb-lg-0">Née Studio. <span class="font-grey">Self Photo Studio.
                        Surabaya Barat.</span></h1>
            </div>
            <div class="col-12 col-lg-5 offset-lg-1">
                <p class="text-description mb-0 h6 fw-normal">Discover the ultimate photography experience at our
                    premium self-photo studio located in Surabaya
                    Barat.
                    Whether you're looking to capture solo moments, celebrate a romantic occasion with your partner, or
                    create lasting memories with friends, our studio caters to all your photography needs.</p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content container custom-margin-section">
        <div class="row g-2 g-lg-3 py-4">
            <div class="col-6 col-lg-3 content-item-box" data-aos="fade-up" data-aos-once="true">
                <a data-fslightbox href="/assets/img/squad1.jpg">
                    <img class="content-item" src="/assets/img/squad1.jpg" alt="Pic">
                </a>

            </div>
            <div class="col-6 col-lg-3 content-item-box" data-aos="fade-up" data-aos-once="true">
                <a data-fslightbox href="/assets/img/single1.jpg">
                    <img class="content-item" src="/assets/img/single1.jpg" alt="Pic">
                </a>
            </div>
            <div class="col-6 col-lg-3 content-item-box" data-aos="fade-up" data-aos-once="true">
                <a data-fslightbox href="/assets/img/couple1.jpg">
                    <img class="content-item" src="/assets/img/couple1.jpg" alt="Pic">
                </a>
            </div>
            <div class="col-6 col-lg-3 content-item-box" data-aos="fade-up" data-aos-once="true">
                <a data-fslightbox href="/assets/img/couple2.jpg">
                    <img class="content-item" src="/assets/img/couple2.jpg" alt="Pic">
                </a>
            </div>
            <div class="col-6 col-lg-3 content-item-box" data-aos="fade-up" data-aos-once="true">
                <a data-fslightbox href="/assets/img/couple3.jpg">
                    <img class="content-item" src="/assets/img/couple3.jpg" alt="Pic">
                </a>
            </div>
            <div class="col-6 col-lg-3 content-item-box" data-aos="fade-up" data-aos-once="true">
                <a data-fslightbox href="/assets/img/familly1.jpg">
                    <img class="content-item" src="/assets/img/familly1.jpg" alt="Pic">
                </a>
            </div>
            <div class="col-6 col-lg-3 content-item-box" data-aos="fade-up" data-aos-once="true">
                <a data-fslightbox href="/assets/img/familly2.jpg">
                    <img class="content-item" src="/assets/img/familly2.jpg" alt="Pic">
                </a>
            </div>
            <div class="col-6 col-lg-3 content-item-box" data-aos="fade-up" data-aos-once="true">
                <a data-fslightbox href="/assets/img/single2.jpg">
                    <img class="content-item" src="/assets/img/single2.jpg" alt="Pic">
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
                        <source src="/assets/vid/vid1.mp4" type="video/mp4" style="object-fit: cover;">
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
            <h1 class="text-title-small text-white py-3 py-lg-5 mb-3 m-0" data-aos="fade-up" data-aos-once="true">
                About Née
            </h1>
            <div class="aboutme-description pb-3 pb-lg-5 text-center" data-aos="fade-up" data-aos-once="true">
                <p class="text-description-white">
                    Née Studio is a minimalist photo studio and art space located in West Surabaya, which offers a
                    variety
                    of photography services and an art space available for small workshops and creative activities. You
                    can
                    express your creativity and showcase your personality in every shot. We ensures that you feel
                    comfortable and inspired during your photo sessions. Book your appointment today and let us help you
                    capture inspiring moments, whether for personal keep-sakes or social media sharing. Experience the
                    joy
                    of self-expression in a space designed just for you!
                </p>
            </div>
            <button class="transparent-btn-bgdark border border-1 border-white rounded-pill mb-3 mb-lg-5"
                onclick="location.href='#book'" data-aos="fade-up" data-aos-once="true">Follow Us</button>
        </div>
    </section>

    <!-- Our Service Section -->
    <section class="our-service container custom-margin-section" id="aboutme">
        <div class="py-lg-5 py-0 d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-title-small fw-bold pt-lg-5 pt-4 pb-3" data-aos="fade-up" data-aos-once="true">
                Our Service
            </h1>
            <div class="our-service-description" data-aos="fade-up" data-aos-once="true">
                <p class="text-description pb-5 text-center">
                    From Self Photo to Rent Studio, we prepare all photography services to <br>help with your needs
                </p>
            </div>
            <div class="card-container row">
                <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-end"
                    data-aos="fade-up" data-aos-once="true">
                    <div class="card border border-0 h-100 mx-4 mb-5 mb-lg-0">
                        <div class="card-img-box">
                            <img src="/assets/img/card-header.webp" class="card-img-top" alt="Self Photo Studio Setup">
                        </div>
                        <div class="card-body p-0 bg-grey">
                            <div class="pt-lg-5 pt-4 px-lg-5 px-4 pb-lg-4 pb-3">
                                <h6 class="h5 mb-3 fw-bold text-dark">Self Photo</h6>
                                <p class="card-text pb-2">Capture moment by yourself or with large group (up to 10
                                    persons)
                                </p>
                            </div>
                            <div class="w-100 px-lg-5 px-4 pb-lg-4 pb-3">
                                <button class="transparent-btn rounded-pill w-100">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-end"
                    data-aos="fade-up" data-aos-once="true">
                    <div class="card border border-0 h-100 mx-4 mb-5 mb-lg-0">
                        <div class="card-img-box">
                            <img src="/assets/img/card-header.webp" class="card-img-top" alt="Self Photo Studio Setup">
                        </div>
                        <div class="card-body p-0 bg-grey">
                            <div class="pt-lg-5 pt-4 px-lg-5 px-4 pb-lg-4 pb-3">
                                <h6 class="h5 mb-3 fw-bold text-dark">Rent Studio + Photographer</h6>
                                <p class="card-text pb-2">Rent premium studio for photograph, self courses, workshops or
                                    podcast
                                </p>
                            </div>
                            <div class="w-100 px-lg-5 px-4 pb-lg-4 pb-3">
                                <button class="transparent-btn rounded-pill w-100">Rent Studio</button>
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
                onclick="location.href='#book'">Follow
                Us</button>
        </div>
        <div class="row g-3 py-4" data-aos="fade-up" data-aos-once="true">
            <div class="col-6 col-lg-3 content-item-box">
                <video class="video-promotion-item" controls>
                    <source src="/assets/vid/vid1.mp4" type="video/mp4" style="object-fit: cover;">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="col-6 col-lg-3 content-item-box">
                <img class="content-item" src="/assets/img/keep-with-us.jpg" alt="Pic">
            </div>
            <div class="col-6 col-lg-3 content-item-box">
                <video class="video-promotion-item" controls>
                    <source src="/assets/vid/vid2.mp4" type="video/mp4" style="object-fit: cover;">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="col-6 col-lg-3 content-item-box">
                <video class="video-promotion-item" controls>
                    <source src="/assets/vid/vid3.mp4" type="video/mp4" style="object-fit: cover;">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <div class="w-100 text-center">
            <button class="black-btn black-btn-bgwhite my-lg-5 my-4 rounded-pill d-inline-block d-lg-none"
                onclick="location.href='#book'">Follow
                Us</button>
        </div>
    </section>
@endsection
