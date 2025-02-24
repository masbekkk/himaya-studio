@extends('layouts.app')

@push('style')
    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/book-detail.css') . '?v=' . bin2hex(random_bytes(20)) }}">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
@endpush
@section('content')
    <!-- start content -->
    <section class="container detail-box">
        <div class="row gy-4">
            <div class="col-12 col-lg-6">
                <section class="splide main-carousel" aria-label="My Awesome Gallery">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="{{ asset('assets/img/self-photo-1.jpeg') }}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{ asset('assets/img/self-photo-2.jpeg') }}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{ asset('assets/img/photo-1.jpeg') }}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{ asset('assets/img/photo-2.jpeg') }}" alt="">
                            </li>
                        </ul>
                    </div>
                </section>

                <ul id="thumbnails" class="thumbnails">
                    <li class="thumbnail">
                        <img src="{{ asset('assets/img/self-photo-1.jpeg') }}" alt="">
                    </li>
                    <li class="thumbnail">
                        <img src="{{ asset('assets/img/self-photo-2.jpeg') }}" alt="">
                    </li>
                    <li class="thumbnail">
                        <img src="{{ asset('assets/img/photo-1.jpeg') }}" alt="">
                    </li>
                    <li class="thumbnail">
                        <img src="{{ asset('assets/img/photo-2.jpeg') }}" alt="">
                    </li>
                </ul>

                <p class="notes d-none d-lg-block">
                    Semua file foto yang dikirim melalui Whatsapp 60 Menit setelah sesi foto
                </p>
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="detail-title">Self Photo Studio</h1>
                <h2 class="detail-sub-title mb-4"> Self Photo Studio dengan Paket Lengkap!</h2>
                <p class="detail-sub-info">Sudah termasuk:
                <ul>
                    <li>💾 All Softcopy – Simpan dan bagikan semua momen spesialmu!</li>
                    <li>📸 Hardcopy 1 Pcs – Kenangan yang bisa dipajang di rumah!</li>
                    <li>🎀 Accesories – Tambahkan gaya dan keseruan dalam setiap foto!</li>
                </ul>
                </p>
                <p class="h5 fw-normal mb-3">Rp 75.000 | 15 min</p>
                <p class="h5 fw-normal mb-3">Rp 130.000 | 30 min</p>
                <p class="h5 fw-normal mb-3">Rp 175.000 | 45 min</p>
                <p class="h5 fw-normal mb-3">Rp 220.000 | 60 min</p>
                <p class="h5 fw-normal mb-3">(Harga seterusnya mengikuti di atas)<br>*Max 4 orang, nambah orang charge
                    10k/orang</p>
                <p class="h6 fw-normal mb-3">Additional:</p>
                <p class="h6 fw-normal mb-3">- Tambah 1 per 1 orang: Rp 10.000 (Max add 4)</p>
                <p class="h6 fw-normal mb-3">- Kostum : Rp 15,000</p>
                <p class="h6 fw-normal mb-3">- Hard Copy: Rp 10.000</p>
                <p class="text-black-50 mb-3">Jl. Sanggata 1 No.8 Blok D7, RT.007/RW.013, Jatiwaringin, Kec. Pd. Gede</p>

                <button class="detail-btn my-2 rounded-pill d-block" id="btn-self-photo">Book
                    Now</button>

                <p class="notes d-block d-lg-none">
                    Semua file foto yang dikirim melalui Whatsapp 60 Menit setelah sesi foto
                </p>

                <p class="h5 text-description fw-bold mt-3">Syarat & Ketentuan</p>
                <ul class="text-description">
                    <li><i>Cashless payment only.</i> (tidak menerima uang tunai, hanya menerima transfer atau QRIS)</li>
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
