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
                <section id="main-carousel" class="splide" aria-label="My Awesome Gallery">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="{{ asset('assets/img/single1.jpg') }}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{ asset('assets/img/single1.jpg') }}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{ asset('assets/img/single1.jpg') }}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{ asset('assets/img/single1.jpg') }}" alt="">
                            </li>
                        </ul>
                    </div>
                </section>

                <ul id="thumbnails" class="thumbnails">
                    <li class="thumbnail">
                        <img src="{{ asset('assets/img/single1.jpg') }}" alt="">
                    </li>
                    <li class="thumbnail">
                        <img src="{{ asset('assets/img/single1.jpg') }}" alt="">
                    </li>
                    <li class="thumbnail">
                        <img src="{{ asset('assets/img/single1.jpg') }}" alt="">
                    </li>
                    <li class="thumbnail">
                        <img src="{{ asset('assets/img/single1.jpg') }}" alt="">
                    </li>
                </ul>

                {{-- <p class="notes d-none d-lg-block">
                    Semua file foto yang dikirim melalui Whatsapp 60 Menit setelah sesi foto
                </p> --}}
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="detail-title">Meeting Room</h1>
                <h2 class="detail-sub-title mb-4"> Meeting Room terbaik di Jabodetabek!</h2>
                <p class="h5 fw-normal mb-3">Rp 69.000 | 60 min</p>
                <p class="h5 fw-normal mb-3">Rp 99.000 | 120 min</p>
                <p class="h5 fw-normal mb-3">Rp 129.000 | 150 min</p>
                <p class="h5 fw-normal mb-3">Rp 149.000 | 180 min</p>
                <p class="h5 fw-normal mb-3">(Harga seterusnya mengikuti di atas)</p>
                <p class="h6 fw-normal mb-3">Additional:</p>
                <p class="h6 fw-normal mb-3">- Proyektor : Rp 20.000</p>
                <p class="text-black-50 mb-5">Jl. Sanggata 1 No.8 Blok D7, RT.007/RW.013, Jatiwaringin, Kec. Pd. Gede</p>
                {{-- <p class="modal-desc">Warna background (Putih, Biru, Pink, Abu-abu, Kuning) *pilih salah
                    satu</p>
                <input class="form-control form-control-lg mb-5" type="text"> --}}

                <button class="detail-btn my-4 rounded-pill d-block">Book Now</button>

                {{-- <p class="notes d-block d-lg-none">
                    Semua file foto yang dikirim melalui Whatsapp 60 Menit setelah sesi foto
                </p> --}}

                <p class="h5 text-description fw-bold mt-5">Syarat & Ketentuan</p>
                <ul class="text-description">
                    <li><i>Cashless payment only.</i> (tidak menerima uang tunai, hanya menerima transfer atau QRIS)</li>
                    <li>Uang yang sudah masuk tidak dapat di <i>refund</i>.</li>
                    <li>Toleransi keterlambatan 5 menit.</li>
                    <li>Datang lebih dari jam yang telah ditentukan (toleransi 5 menit) sesi akan di-<i>reschedule.</i>
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
    <script src="{{ asset('assets/js/book-detail.js') }}"></script>
@endpush
