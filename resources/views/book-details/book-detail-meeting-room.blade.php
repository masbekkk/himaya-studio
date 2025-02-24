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
                <section class="splide main-carousel" aria-label="Image Carousel">
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

                <ul id="thumbnails" class="thumbnails">
                    <li class="thumbnail">
                        <img src="{{ asset('assets/img/meet-room-1.jpg') }}" alt="Meet Room 1">
                    </li>
                    <li class="thumbnail">
                        <img src="{{ asset('assets/img/meet-room-2.jpg') }}" alt="Meet Room 2">
                    </li>
                    <li class="thumbnail">
                        <img src="{{ asset('assets/img/meet-room-3.jpg') }}" alt="Meet Room 3">
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="detail-title">Meeting Room</h1>
                <h2 class="detail-sub-title mb-4"> Meeting Room (Max. 10 orang) dengan Fasilitas Lengkap di Jabodetabek!
                </h2>
                <p class="detail-sub-info">Sudah termasuk:
                <ul>
                    <li>📽️ Proyektor – Presentasi lebih jelas dan profesional!</li>
                    <li>📝 White Board – Cocok untuk brainstorming dan diskusi tim!</li>
                </ul>
                </p>
                <p class="h5 fw-normal mb-3">Rp 50.000 | 60 min</p>
                <p class="h5 fw-normal mb-3">Rp 90.000 | 120 min</p>
                <p class="h5 fw-normal mb-3">Rp 120.000 | 150 min</p>
                {{-- <p class="h5 fw-normal mb-3">Rp 149.000 | 180 min</p> --}}
                <p class="h5 fw-normal mb-3">(Harga seterusnya mengikuti di atas)</p>
                {{-- <p class="h6 fw-normal mb-3">Additional:</p> --}}
                {{-- <p class="h6 fw-normal mb-3">- Proyektor : Rp 20.000</p> --}}
                <p class="text-black-50 mb-3">Jl. Sanggata 1 No.8 Blok D7, RT.007/RW.013, Jatiwaringin, Kec. Pd. Gede</p>
                <button class="detail-btn my-2 rounded-pill d-block" id="btn-meet-room">Book
                    Now</button>

                <p class="h5 text-description fw-bold mt-3">Syarat & Ketentuan</p>
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
    <script src="{{ asset('assets/js/book-detail.js') . '?v=' . bin2hex(random_bytes(20)) }}"></script>
    @include('modals.assets.script')
@endpush
