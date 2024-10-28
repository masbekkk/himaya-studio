<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Himaya Potret Studio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="50" tabindex="0">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s" id="navbar">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="text-primary">Himaya Potret Studio</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About Us</a>
            </div>
            <a href="#home" class="navbar-brand bg-white py-2 px-4 mx-3 d-none d-lg-block">
                <img src="{{ asset('image/logo-himaya.png') }}" alt="Himaya Studio Logo"
                    style="height: 100%; max-height: 80px;">
            </a>
            <div class="navbar-nav me-auto py-0">
                <a href="#services" class="nav-item nav-link">Layanan Kami</a>
                <a href="#book-now" class="nav-item nav-link">Book Now</a>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5" id="home">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">WELCOME TO HIMAYA POTRET</h1>
                    <p class="text-primary text-uppercase mb-2 animated slideInDown"> Self Photo Studio & Private Cinema
                        | Jatiwaringin |
                        Bekasi</p>
                    <p class="animated slideInDown">Temukan pengalaman Private Cinema terbaik di Jabodetabek! Untuk
                        menonton film yang lebih personal dengan update film yang seru dan terbaru bersama bestie,
                        keluarga atau pasangan anda! Jika anda ingin merayakan ulang tahun, nobar sepak bola, bridal
                        shower, jangan ragu untuk datang ke Private Cinema kami!
                        <br>
                        Kami juga menawarkan produk lainnya, seperti fotografi terbaik di studio self-photo premium kami
                        yang berlokasi di Bekasi. Jika anda ingin mengabadikan momen pribadi, merayakan acara romantis
                        bersama pasangan, atau ingin menciptakan kenangan abadi dengan teman-teman, studio kami siap
                        memenuhi semua kebutuhan fotografi Anda. Selain itu kami memiliki Meeting Room yang nyaman dan
                        profesional untuk kebutuhan pertemuan Anda, di lengkapi dengan Himaya Cafe untuk melengkapi hari
                        serumu dengan menu yang spesial!
                        <br>
                        Studio kami melayani pelanggan dengan sepenuh hati, memberikan pelayanan terbaik untuk setiap
                        momen istimewa Anda. Potretkan Momen Romantismu!
                    </p>
                    <div class="d-flex align-items-center pt-4 animated slideInDown">
                        <a href="" class="btn btn-primary py-3 px-4 me-5">Explore More</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="ms-4 mb-0 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white p-3 w-100 mb-3" src="img/hero-1.jpg" alt="">
                            <img class="img-fluid bg-white p-3 w-50" src="img/hero-3.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white p-3 w-50 mb-3" src="img/hero-4.jpg" alt="">
                            <img class="img-fluid bg-white p-3 w-100" src="img/hero-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-3 img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid bg-light p-3" src="img/about-1.jpg" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid bg-light p-3" src="img/about-2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-4">About Us</h1>
                        <p class="text-primary text-uppercase mb-2"> HIMAYA POTRET STUDIO, destinasi utama untuk
                            Private Cinema, self-photo studio, dan Meeting Room terbaik di Jabodetabek!</p>
                        <p>Temukan pengalaman menonton film yang lebih personal dan menyenangkan dengan koleksi film
                            terbaru, cocok untuk momen spesial bersama sahabat, keluarga, atau pasangan. Dari acara
                            ulang tahun, nobar pertandingan sepak bola, hingga bridal shower, Private Cinema kami siap
                            memberikan suasana yang sempurna.
                        </p>
                        <p>Booking sekarang untuk merasakan pengalaman tak terlupakan di HIMAYA POTRET STUDIO!
                            <a href="https://www.instagram.com/himayapotretstudio" target="_blank"> Follow Us!</a>
                        </p>
                        <div class="row g-2 mb-4">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-3"></i>Private Cinema
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-3"></i>Self Photo Studio
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-3"></i>Metting Room
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-3"></i>Himaya Cafe
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary py-3 px-5" data-bs-toggle="modal"
                            data-bs-target="#aboutUsModal">Read More</button>
                        <!-- Modal -->
                        <div class="modal fade" id="aboutUsModal" tabindex="-1" aria-labelledby="aboutUsModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="aboutUsModalLabel">About Us</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Selain itu, kami juga menawarkan studio self-photo premium di Bekasi, tempat
                                            ideal untuk
                                            mengabadikan momen berharga, baik untuk keperluan pribadi, acara romantis,
                                            atau
                                            bersenang-senang dengan teman-teman. Nikmati setiap sesi foto dengan
                                            kenyamanan dan
                                            inspirasi di setiap sudutnya.
                                            Untuk keperluan bisnis atau pertemuan profesional, kami menyediakan Meeting
                                            Room yang modern
                                            dan nyaman, dirancang untuk menciptakan suasana produktif. Tidak hanya, itu
                                            kami memiliki
                                            Himaya Cafe, untuk memberikan hidangan dan menu spesial untuk anda!
                                            Kami selalu berkomitmen untuk memberikan pengalaman terbaik dan pelayanan
                                            sepenuh hati bagi
                                            setiap momen istimewa Anda.
                                            Potret Momen Terbaik Anda dan Rasakan Kenyamanan di Setiap Langkah
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">Why Choose Us!</p>
                <h1 class="display-6 mb-5">The Leading Photo Studio In The Country</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-4 col-md-6 pt-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item bg-light text-center h-100 p-5">
                        <h1 class="display-2 text-primary mb-3" data-toggle="counter-up">35</h1>
                        <h4 class="mb-3">Award Winning</h4>
                        <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                            duo justo</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item bg-light text-center h-100 p-5">
                        <h1 class="display-2 text-primary mb-3" data-toggle="counter-up">45</h1>
                        <h4 class="mb-3">Years Experience</h4>
                        <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                            duo justo</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-lg-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light text-center h-100 p-5">
                        <h1 class="display-2 text-primary mb-3" data-toggle="counter-up">12345</h1>
                        <h4 class="mb-3">Happy Clients</h4>
                        <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                            duo justo</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Facts End -->


    <!-- Service Start -->
    <div class="container-xxl bg-light py-5 my-5" id="services">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-4">Layanan Kami</h1>
                <p class="text-primary text-capitalize mb-2">Dari Private Cinema hingga Self-Photo Studio dan Meeting
                    Room, kami menyediakan beragam layanan yang dirancang untuk memenuhi kebutuhan Anda.</p>
            </div>
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column bg-white p-3 pb-0">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/service-1.jpg" alt="">
                            <div class="service-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                        class="fa fa-link text-primary"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h4>Private Cinema</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column bg-white p-3 pb-0">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                            <div class="service-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                        class="fa fa-link text-primary"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h4>Self-Photo Studio</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex flex-column bg-white p-3 pb-0">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                            <div class="service-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                        class="fa fa-link text-primary"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h4>Metting Room</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-lg-5 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item d-flex flex-column bg-white p-3 pb-0">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/service-4.jpg" alt="">
                            <div class="service-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                        class="fa fa-link text-primary"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h4>Himaya Cafe</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Project Start -->
    <div class="container-xxl py-5" id="book-now">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">Our Works</p>
                <h1 class="display-6 mb-0">Discover Our Unique And Creative Photoshoot</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="project-item">
                                <img class="img-fluid" src="img/project-5.jpg" alt="">
                                <a class="project-title h5 mb-0" href="img/project-5.jpg" data-lightbox="project">
                                    Memory
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="project-item">
                                <img class="img-fluid" src="img/project-1.jpg" alt="">
                                <a class="project-title h5 mb-0" href="img/project-1.jpg" data-lightbox="project">
                                    Wedding
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="project-item">
                                <img class="img-fluid" src="img/project-2.jpg" alt="">
                                <a class="project-title h5 mb-0" href="img/project-2.jpg" data-lightbox="project">
                                    Portrait
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="project-item">
                                <img class="img-fluid" src="img/project-6.jpg" alt="">
                                <a class="project-title h5 mb-0" href="img/project-6.jpg" data-lightbox="project">
                                    Travel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="project-item">
                                <img class="img-fluid" src="img/project-7.jpg" alt="">
                                <a class="project-title h5 mb-0" href="img/project-7.jpg" data-lightbox="project">
                                    Wedding
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="project-item">
                                <img class="img-fluid" src="img/project-3.jpg" alt="">
                                <a class="project-title h5 mb-0" href="img/project-3.jpg" data-lightbox="project">
                                    Memory
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="project-item">
                                <img class="img-fluid" src="img/project-4.jpg" alt="">
                                <a class="project-title h5 mb-0" href="img/project-4.jpg" data-lightbox="project">
                                    Fashion
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="project-item">
                                <img class="img-fluid" src="img/project-8.jpg" alt="">
                                <a class="project-title h5 mb-0" href="img/project-8.jpg" data-lightbox="project">
                                    Portrait
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Team Start -->
    {{-- <div class="container-xxl px-0 py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="text-primary text-uppercase mb-2">Our Team</p>
            <h1 class="display-6 mb-0">Creative Photograher And Videographer</h1>
        </div>
        <div class="row g-0">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 flex-sm-row">
                    <div class="col-sm-6">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="h-100 p-5 d-flex flex-column justify-content-between">
                            <div class="mb-3">
                                <h4>Lucifer Jhones</h4>
                                <span>Photographer</span>
                            </div>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                                duo</p>
                            <div class="d-flex">
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="row g-0 flex-sm-row-reverse flex-lg-row">
                    <div class="col-sm-6">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="h-100 p-5 d-flex flex-column justify-content-between">
                            <div class="mb-3">
                                <h4>Jesse Joslin</h4>
                                <span>Videographer</span>
                            </div>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                                duo</p>
                            <div class="d-flex">
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 flex-lg-row-reverse">
                    <div class="col-sm-6">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="h-100 p-5 d-flex flex-column justify-content-between">
                            <div class="mb-3">
                                <h4>Richard Archer</h4>
                                <span>Retoucher</span>
                            </div>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                                duo</p>
                            <div class="d-flex">
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="row g-0 flex-sm-row-reverse">
                    <div class="col-sm-6">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="h-100 p-5 d-flex flex-column justify-content-between">
                            <div class="mb-3">
                                <h4>April Ryan</h4>
                                <span>Editor</span>
                            </div>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                                duo</p>
                            <div class="d-flex">
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->


    <!-- Testimonial Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">Client's Review</p>
                <h1 class="display-6 mb-0">More Than 20000+ Customers Trusted Us</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-white p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-1.jpg"
                            alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                        eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-white p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-2.jpg"
                            alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                        eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-white p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-3.jpg"
                            alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                        eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-white p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-4.jpg"
                            alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                        eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid footer position-relative bg-dark text-white-50 mt-5 py-5 px-4 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <div class="row g-5 py-5">
            <div class="col-lg-6 pe-lg-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="display-5 text-primary">Himaya Potret Studio</h1>
                </a>
                <p>Kami hadir untuk memberikan pengalaman terbaik dengan layanan yang lengkap dan berkelas, sesuai
                    kebutuhan Anda!<br>Keep with Us! - <a href="https://www.instagram.com/himayapotretstudio"
                        target="_blank">Follow Us</a><br>Get in Touch!</p>
                <p><i class="fa fa-map-marker-alt me-2"></i>Jl. Sanggata 1 No.8 Blok D7, RT.007/RW.013, Jatiwaringin,
                    Kec. Pd. Gede, Kota Bks, Jawa Barat 17411</p>
                <p><i class="fa fa-phone-alt me-2"></i><a href="https://wa.me/6281410265823"
                        target="_blank">0814-1026-5823</a></p>
                <p><i class="fa fa-envelope me-2"></i>info@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-square btn-outline-primary rounded-circle me-2 tiktok-button"
                        href="https://www.tiktok.com/@himaya.potret" target="_blank">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    {{-- <a class="btn btn-square btn-outline-primary rounded-circle me-2" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-primary rounded-circle me-2" href="#"><i
                            class="fab fa-linkedin-in"></i></a> --}}
                    <a class="btn btn-square btn-outline-primary rounded-circle me-2"
                        href="https://www.instagram.com/himayapotretstudio" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="row g-5">
                    <div class="col-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9319032382314!2d106.9205609109793!3d-6.272685093689862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d37764d3d1b%3A0x9fe2ff2f1ce87ebb!2sJl.%20Sanggata%201%20Blok%20D7%20No.8%2C%20RT.007%2FRW.013%2C%20Jatiwaringin%2C%20Kec.%20Pd.%20Gede%2C%20Kota%20Bks%2C%20Jawa%20Barat%2017411!5e0!3m2!1sid!2sid!4v1730108137543!5m2!1sid!2sid"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-dark text-white border-top border-secondary px-0">
        <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="py-4 px-5 text-center text-md-start">
                <p class="mb-0">&copy; <a class="text-primary" href="#">Himaya Potret Studio</a>. All Rights
                    Reserved.</p>
            </div>
            {{-- <div class="py-4 px-5 bg-secondary footer-shape position-relative text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                <p class="mb-0">Designed by <a class="text-primary fw-bold" href="https://htmlcodex.com">HTML
                        Codex</a></p> Distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
            </div> --}}
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
