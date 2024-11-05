@extends('layouts.app')
@section('content')
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
@endsection
