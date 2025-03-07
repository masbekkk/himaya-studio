@extends('layouts.app')

@push('style')
    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/book-detail.css') . '?v=' . bin2hex(random_bytes(20)) }}">
    <!-- splide -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
@endpush
@section('content')
    <!-- start content -->
    <section class="container detail-box">
        <div class="row gy-4">
            <div class="col-12 col-lg-6">
                <section class="splide main-carousel" aria-label="Cinema Gallery">
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

                <ul id="thumbnails" class="thumbnails">
                    <li class="thumbnail">
                        <img src="{{ asset('assets/img/cinema-1.jpg') }}" alt="Cinema 1">
                    </li>
                    <li class="thumbnail">
                        <img src="{{ asset('assets/img/cinema-2.jpg') }}" alt="Cinema 2">
                    </li>
                    <li class="thumbnail">
                        <img src="{{ asset('assets/img/cinema-3.jpg') }}" alt="Cinema 3">
                    </li>
                    <li class="thumbnail">
                        <img src="{{ asset('assets/img/cinema-4.jpg') }}" alt="Cinema 4">
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="detail-title">Private Cinema</h1>
                <h2 class="detail-sub-title mb-4">Nikmati Hiburan Tanpa Batas dengan Fasilitas Lengkap!</h2>
                <p class="detail-sub-info">Sudah termasuk:
                <ul>
                    <li>🎬 Netflix Premium – Tonton film dan serial favorit tanpa iklan!</li>
                    <li>📺 YouTube Premium – Streaming tanpa jeda iklan yang mengganggu!</li>
                    <li>🎮 Free Games – Seru-seruan dengan berbagai pilihan game gratis!</li>
                </ul>
                </p>
                <p class="h5 fw-normal mb-3">Rp 90.000 | 30 min</p>
                <p class="h5 fw-normal mb-3">Rp 150.000 | 60 min</p>
                <p class="h5 fw-normal mb-3">Rp 220.000 | 90 min</p>
                <p class="h5 fw-normal mb-3">Rp 275.000 | 120 min</p>
                <p class="h5 fw-normal mb-3">(Harga seterusnya mengikuti di atas)<br>*Max 4 orang, nambah orang charge
                    10k/orang</p>
                <p class="h6 fw-normal mb-3">Additional:</p>
                <p class="h6 fw-normal mb-3">- Tambah 1 per 1 orang: Rp 10.000 (Max add 11)</p>

                <p class="h5 fw-normal mb-3">Additional Package:</p>
                <p class="h5 fw-normal mb-3">Rp 449.000 | Birthday Standard Package</p>
                <p class="h5 fw-normal mb-3">Rp 599.000 | Birthday Silver Package</p>
                <p class="h5 fw-normal mb-3">Rp 749.000 | Birthday Gold Package</p>
                <p class="h5 fw-normal mb-3">Rp 899.000 | Birthday Platinum Package</p>

                <p class="h5 fw-normal mb-3">Rp 499.000 | Bridal Shower Standard Package</p>
                <p class="h5 fw-normal mb-3">Rp 649.000 | Bridal Shower Silver Package</p>
                <p class="h5 fw-normal mb-3">Rp 849.000 | Bridal Shower Gold Package</p>
                <p class="h5 fw-normal mb-3">Rp 999.000 | Bridal Shower Platinum Package</p>

                <p class="text-black-50 mb-2">Jl. Sanggata 1 No.8 Blok D7, RT.007/RW.013, Jatiwaringin, Kec. Pd. Gede</p>

                <button class="detail-btn my-2 rounded-pill d-block" id="btn-private-cinema">Book Now</button>
                <p class="h5 text-description fw-bold mt-3">Syarat & Ketentuan</p>
                <ul class="text-description">
                    <li><i>Cashless payment only.</i> (tidak menerima uang tunai, hanya menerima transfer atau QRIS)</li>
                    <li>Uang yang sudah masuk tidak dapat di <i>refund</i>.</li>
                    <li>Toleransi keterlambatan 5 menit.</li>
                    <li>Datang lebih dari jam yang telah ditentukan (toleransi 5 menit) sesi akan di-<i>reschedule.</i>
                    </li>
                    <li>Alas kaki harap dilepas saat memasuki Private Cinema
                    </li>
                    <li>Dilarang membawa makanan atau minuman ke dalam ruangan. (Bisa melakukan order melalui Himaya Cafe)
                    </li>
                    <li>Anak usia balita dimohon dalam pengawasan orang tua.</li>
                    <li>Apabila terjadi kerusakan yang ditimbulkan, dimohon bertanggung jawab sepenuhnya (mengganti rugi
                        sesuai kesepakatan).</li>
                    <li>Mengikuti segala aturan yang telah ditentukan oleh Himaya Potret Studio.</li>
                </ul>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script src="{{ asset('assets/js/book-detail.js') . '?v=' . bin2hex(random_bytes(20)) }}"></script>
    @include('modals.assets.script')
@endpush
