<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Self Photo Studio Surabaya Barat | Née Studio</title>
	<!-- <link rel="stylesheet" href="assets/font-faces.css"> -->
	<meta name="description"
		content="Self Photo Studio Surabaya Barat — Express Yourself with Your Unique Style, Whether Single, As a Couple or Even With Your Group. Our Place is Spacious and Comfortable, Include With All-New and Premium Photography Technology Gear. Book Now and Get Promo for FREE 1 Photo!">
	<meta name="keywords" content="Self Photo Studio Surabaya, Sewa Studio dan Fotografer, Citraland">
	<link rel="icon" href="assets/img/logo-black-small.avif">
	<link rel="apple-touch-icon" href="assets/img/logo-black-small.avif">

	<!-- Import Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Montserrat Google Icons -->
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
	</style>

	<!-- BS icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<!-- leaflet -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
		integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
		integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

	<!-- aos -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<!-- splide -->
	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

	<!-- main css -->
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- Page CSS -->
	<link rel="stylesheet" href="assets/css/book-detail.css">

</head>

<body>
	<!-- new header -->
	<header class="fixed-top">
		<div class="announcement-bar d-flex align-items-center justify-content-center">
			<p class="mb-0"><b>BOOK NOW</b> AND GET <b>FREE 1 PRINTED PHOTO!</b></p>
		</div>
		<nav class="navbar navbar-expand-lg">
			<div class="container py-3 py-lg-0 px-3 px-lg-0">
				<a class="navbar-brand d-none d-lg-inline" href="index.html">
					<img src="/assets/img/logo-black-small.avif" alt="Née" width="48" height="48">
				</a>
				<button class="navbar-toggler border-0 text-align-start" onclick="changeIcon(this)" type="button"
					data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="d-inline d-lg-none" href="index.html">
					<img src="/assets/img/logo-black-small.avif" alt="Née" height="54">
				</a>
				<button class="navbar-toggler d-inline d-lg-none v-hidden" type="button" aria-controls="navbarNav"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-lg-end" id="navbarNav">
					<ul class="navbar-nav text-center mt-4 mt-lg-0">
						<li class="nav-item my-1 my-lg-0">
							<a class="nav-link pb-1 mx-3 text-black text-decoration-none" href="/index.html"><span
									class="pb-1">Home</span></a>
						</li>
						<li class="nav-item my-1 my-lg-0">
							<a class="nav-link pb-1 mx-3 text-black text-decoration-none"
								href="/index.html#aboutme"><span class="pb-1">About
									Née</span></a>
						</li>
						<li class="nav-item my-1 my-lg-0">
							<a class="nav-link pb-1 mx-3 text-black text-decoration-none" href="/book-now.html"><span
									class="nav-active pb-1">Book
									Now</span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<!-- start content -->
	<section class="container detail-box">
		<div class="row gy-4">
			<div class="col-12 col-lg-6">
				<section id="main-carousel" class="splide" aria-label="My Awesome Gallery">
					<div class="splide__track">
						<ul class="splide__list">
							<li class="splide__slide">
								<img src="assets/img/single1.jpg" alt="">
							</li>
							<li class="splide__slide">
								<img src="assets/img/single1.jpg" alt="">
							</li>
							<li class="splide__slide">
								<img src="assets/img/single1.jpg" alt="">
							</li>
							<li class="splide__slide">
								<img src="assets/img/single1.jpg" alt="">
							</li>
						</ul>
					</div>
				</section>

				<ul id="thumbnails" class="thumbnails">
					<li class="thumbnail">
						<img src="assets/img/single1.jpg" alt="">
					</li>
					<li class="thumbnail">
						<img src="assets/img/single1.jpg" alt="">
					</li>
					<li class="thumbnail">
						<img src="assets/img/single1.jpg" alt="">
					</li>
					<li class="thumbnail">
						<img src="assets/img/single1.jpg" alt="">
					</li>
				</ul>
				<p class="notes d-none d-lg-block">
					Semua file foto yang dikirim melalui Google Drive hanya tersedia H+4 setelah sesi foto
				</p>
			</div>
			<div class="col-12 col-lg-6">
				<h1 class="detail-title">SINGLE</h1>
				<h2 class="detail-sub-title mb-4">all files, no printed photo</h2>
				<p class="h5 fw-normal mb-3">Rp 40.000 | 15 min</p>
				<p class="text-black-50 mb-5">Northwest Park NA3-01</p>
				<p class="modal-desc">Warna background (Putih, Abu-abu, Hitam, Cream) *pilih salah
					satu</p>
				<input class="form-control form-control-lg mb-5" type="text">

				<button class="detail-btn my-4 rounded-pill d-block">Book Now</button>

				<p class="notes d-block d-lg-none">
					Semua file foto yang dikirim melalui Google Drive hanya tersedia H+4 setelah sesi foto
				</p>

				<p class="h5 text-description fw-bold mt-5">Syarat & Ketentuan</p>
				<ul class="text-description">
					<li><i>Cashless payment only.</i> (tidak menerima uang tunai, hanya menerima transfer)</li>
					<li>Uang yang sudah masuk tidak dapat di <i>refund</i>.</li>
					<li>Toleransi keterlambatan 5 menit.</li>
					<li>Datang lebih dari jam yang telah ditentukan (toleransi 5 menit) sesi akan di-<i>reschedule.</i>
					</li>
					<li>Alas kaki harap dilepas saat memasuki studio, diperbolehkan dipakai kembali pada saat sesi foto.
					</li>
					<li>Dilarang membawa makanan atau minuman ke dalam ruangan.</li>
					<li>Anak usia balita dimohon dalam pengawasan orang tua.</li>
					<li>Apabila terjadi kerusakan yang ditimbulkan, dimohon bertanggung jawab sepenuhnya (mengganti rugi
						sesuai kesepakatan).</li>
					<li>Mengikuti segala aturan yang telah ditentukan oleh Née Studio.</li>
				</ul>
			</div>
		</div>
	</section>

	<!-- Footer Section -->
	<footer class="footer custom-margin-section mb-0">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6" data-aos="fade-up" data-aos-once="true">
					<h2 class="footer-title">Get In Touch</h2>
					<div class="footer-block my-3 my-lg-5">
						<p class="m-0 footer-sub">Address</p>
						<p class="m-0">Northwest Park, NA3-01</p>
						<p class="m-0">Surabaya</p>
					</div>
					<div class="footer-block my-3 my-lg-5">
						<p class="m-0 footer-sub">Contacts</p>
						<p class="m-0">+62 82223403010</p>
						<p class="m-0">admin@nee-studio.com</p>
					</div>
					<div class="footer-block my-3 my-lg-5">
						<a class="text-decoration-none text-dark h5 fw-bold" href="https://instagram.com">
							<i class="bi bi-instagram"></i>
						</a>
					</div>
					<p class="copyright-text d-none d-lg-block">Copyright &copy; 2024 <b>Née Studio</b></p>
				</div>
				<div class="col-12 col-lg-6" data-aos="fade-up" data-aos-once="true" data-aos-delay="300">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9319032382314!2d106.9205609109793!3d-6.272685093689862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d37764d3d1b%3A0x9fe2ff2f1ce87ebb!2sJl.%20Sanggata%201%20Blok%20D7%20No.8%2C%20RT.007%2FRW.013%2C%20Jatiwaringin%2C%20Kec.%20Pd.%20Gede%2C%20Kota%20Bks%2C%20Jawa%20Barat%2017411!5e0!3m2!1sid!2sid!4v1730108137543!5m2!1sid!2sid"
						class="gmaps" style="border:0;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="col-12 d-lg-none mt-5 mt-lg-0">
					<p class="copyright-text">Copyright &copy; 2024 <b>Née Studio</b></p>
				</div>
			</div>
		</div>
	</footer>

	<!-- whatsapp button -->
	<a href="https://wa.me/yourphonenumber" class="whatsapp-btn" target="_blank">
		<svg width="64" height="64" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
			<circle cx="32" cy="32" r="32" fill="#25D366"></circle>
			<path d="M11.375 52.625L14.2745 42.0323C12.4853 38.9317 11.5452 35.4169 11.5469
			31.8127C11.552 20.5445 20.7216 11.375 31.988 11.375C37.4553 11.3767 42.5875 13.5062 46.4478 17.37C50.3064
			21.2337 52.4308 26.3694 52.4291 31.8316C52.4239 43.1014 43.2544 52.2709 31.988 52.2709C28.5677 52.2692 25.1972
			51.4116 22.2117 49.7822L11.375 52.625ZM22.7136 46.0817C25.5942 47.7919 28.3442 48.8162 31.9811 48.818C41.3448 48.818
			48.9727 41.197 48.9778 31.8281C48.9813 22.4403 41.3895 14.8297 31.9948 14.8262C22.6242 14.8262 15.0016 22.4472 14.9981
			31.8144C14.9964 35.6386 16.117 38.502 17.9991 41.4978L16.282 47.7678L22.7136 46.0817ZM42.285 36.6905C42.1578 36.4773
			 41.8175 36.3502 41.3053 36.0941C40.7948 35.838 38.2837 34.6022 37.8145 34.432C37.347 34.2619 37.0067 34.1759 36.6647
			 34.6881C36.3244 35.1986 35.3447 36.3502 35.0473 36.6905C34.75 37.0308 34.4509 37.0738 33.9405 36.8177C33.43 36.5616 31.7834
			 36.0236 29.8327 34.2825C28.315 32.9281 27.2889 31.2558 26.9916 30.7436C26.6942 30.2331 26.9606 29.9564 27.215
			 29.702C27.4453 29.4734 27.7255 29.1056 27.9816 28.8066C28.2411 28.5109 28.3253 28.2978 28.4972 27.9558C28.6673
			 27.6155 28.5831 27.3164 28.4542 27.0603C28.3253 26.8059 27.3044 24.2914 26.8798 23.2688C26.4639 22.2736 26.0428
			 22.4077 25.73 22.3922L24.7503 22.375C24.41 22.375 23.8566 22.5022 23.3891 23.0144C22.9216 23.5266 21.6016 24.7606
			 21.6016 27.2752C21.6016 29.7897 23.432 32.2183 23.6864 32.5586C23.9425 32.8989 27.2872 38.0586 32.4108 40.2706C33.6294
			 40.7966 34.5816 41.1111 35.3223 41.3466C36.5461 41.735 37.6598 41.68 38.5398 41.5494C39.5212 41.4033 41.5614 40.3136
			 41.9877 39.1208C42.4139 37.9262 42.4139 36.9036 42.285 36.6905Z" fill="white"></path>
		</svg>
	</a>

	<!-- Import Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- begin scripts -->
	<script src="assets/js/main.js"></script>

	<script src="assets/js/book-detail.js"></script>

	<!-- Import Jquery -->
	<!-- <script src="assets/js/jquery-3.7.1.min.js"></script> -->
</body>

</html>