@extends('layouts.app')

@push('style')
    <!-- pikaday -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/book-detail.css') . '?v=' . bin2hex(random_bytes(20)) }}">
    <!-- splide -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

    <style>
        .pika-single {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        .pika-button {
            background: #f8f9fa;
            color: #212529;
        }

        .pika-button:hover {
            background: #e9ecef !important;
            color: #212529 !important;
        }

        .is-selected .pika-button {
            background: #0d6efd !important;
            color: #fff !important;
            box-shadow: none;
        }

        .is-today .pika-button {
            color: #0d6efd;
        }

        #bookModal>.modal-dialog {
            width: 60vw;
            max-width: 60vw;
        }

        #bookModal>.modal-content {
            overflow-y: hidden;
            border-radius: 1em;
        }

        .book-modal-body {
            display: grid;
            grid-template-columns: 1fr 2fr;
        }

        .time-list {
            display: grid;
            grid-template-columns: 1fr;
            row-gap: .5em;
            padding-right: 1.5rem;
            overflow-y: auto;
            max-height: 400px;
        }

        .time-btn {
            padding: .5em 2.5em;
            border: 1px solid #1a1a1a;
            border-radius: .5em;
            font-size: .8rem;
            background-color: white;
            transition: .2s;
        }

        .time-btn:hover {
            background-color: #d5dfff;
            border-color: #d5dfff;
        }

        #btn-book {
            cursor: not-allowed;
            /* Change cursor when disabled */
            transition: .2s;
        }

        /* Active/Selected Time Button Style */
        .active-time {
            background-color: #0d6efd;
            /* or any color you like */
            color: white;
            font-weight: bold;
            border-color: #0d6efd;
        }

        /* Styles for the enabled book button */
        #btn-book.active-time {
            background-color: #0d6efd;
            /* or any preferred color */
            color: white;
            border-color: #0d6efd;
            cursor: pointer;
        }

        .left-side {
            padding: 3rem;
        }

        .right-side {
            padding: 3rem;
            display: grid;
            grid-template-areas:
                'title title'
                'date time';
            column-gap: 1.5rem;
            grid-template-rows: auto 1fr;
            grid-template-columns: 60% 40%;
        }

        #bookModal>.modal-title {
            font-size: 1.2rem;
            font-weight: normal;
            margin-bottom: 1.5rem;
            grid-area: title;
        }

        .li-no-style {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .current-date {
            margin-bottom: 1em;
        }

        .datepicker-block {
            grid-area: date;
        }

        .timepicker-block {
            grid-area: time;
        }

        #bookModal>.modal-footer .btn {
            font-size: calc(1rem - 2px);
            min-width: 100px;
        }

        #orderSuccessModal .modal-body {
            padding: 1rem;
        }

        #orderSuccessModal .modal-title {
            font-size: 2rem;
            font-weight: 600;
        }

        #orderSuccessModal .btn-done {
            font-size: calc(1rem - 2px);
            color: white !important;
            min-width: 100px;
        }

        #orderSuccessModal .payment-info {
            padding: 3rem 2rem;
            margin-top: calc(2.5rem - 4px);
        }

        @media screen and (max-width: 992px) {
            #bookModal>.modal-title:last-child {
                margin-bottom: 0;
            }

            .timepicker-block {
                width: 100%;
            }

            #bookModal>.modal-dialog {
                width: 100%;
                max-width: 100%;
            }

            .book-modal-body {
                grid-template-columns: 1fr;
                overflow-y: auto;
            }

            .left-side {
                padding: 1rem;
            }

            .right-side {
                padding: 1rem;
                display: flex;
                gap: 1rem;
                align-items: center;
                flex-direction: column;
            }

            .current-date {
                margin-bottom: 2rem;
            }

            .time-list {
                padding: 0rem 3rem;
            }

        }
    </style>
@endpush
@section('content')
    <!-- start content -->
    <section class="container detail-box">
        <!-- Modal Book when click Book Now Button -->
        <div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-lg-down modal-dialog-centered">
                <div class="modal-content rounded" style="overflow: hidden;">
                    <div class="modal-body p-0 book-modal-body position-relative">
                        <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <div class="left-side">
                            <h5 class="modal-title mb-3">COUPLE</h5>
                            <ul class="li-no-style">
                                <li class="my-2">
                                    <i class="bi bi-calendar3 me-2"></i>
                                    <span id="selected-date">11/6/2024</span>
                                </li>
                                <li class="my-2">
                                    <i class="bi bi-clock me-2"></i>
                                    <span id="selected-time">--:--</span>
                                </li>
                                <li class="my-2">
                                    <i class="bi bi-geo-alt me-2"></i>
                                    <span id="selected-location">Jl. Sanggata 1 No.8 Blok D7, RT.007/RW.013, Jatiwaringin,
                                        Kec. Pd. Gede, Kota Bks, Jawa Barat 17411</span>
                                </li>
                            </ul>

                        </div>
                        <div class="right-side bg-grey">
                            <h5 class="modal-title mb-3">Select Date & Time</h5>
                            <div class="datepicker-block w-100">
                                <div class="w-100 h-100" id="datepicker"></div>
                            </div>
                            <div class="timepicker-block">
                                <p class="current-date mb-5">Thursday, November 7</p>
                                <div class="time-list">
                                    <button class="time-btn border border-0">09:00 AM</button>
                                    <button class="time-btn border border-0">10:00 AM</button>
                                    <button class="time-btn border border-0">11:00 AM</button>
                                    <button class="time-btn border border-0">09:00 AM</button>
                                    <button class="time-btn border border-0">10:00 AM</button>
                                    <button class="time-btn border border-0">11:00 AM</button>
                                    <button class="time-btn border border-0">09:00 AM</button>
                                    <button class="time-btn border border-0">10:00 AM</button>
                                    <button class="time-btn border border-0">11:00 AM</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-transparent px-4" data-bs-dismiss="modal">Cancel</button>
                        <button disabled type="button" class="btn btn-secondary text-white px-4"
                            id="btn-book">Book</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-12 col-lg-6">
                <section id="main-carousel" class="splide" aria-label="My Awesome Gallery">
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
                        <img src="{{ asset('assets/img/cafe1.jpg') }}" alt="">
                    </li>
                    <li class="thumbnail">
                        <img src="{{ asset('assets/img/cafe2.jpg') }}" alt="">
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
                <h2 class="detail-sub-title mb-4">all files, no printed photo</h2>
                <p class="h5 fw-normal mb-3">Rp 99.000 | 15 min</p>
                <p class="h5 fw-normal mb-3">Rp 129.000 | 30 min</p>
                <p class="h5 fw-normal mb-3">Rp 149.000 | 45 min</p>
                <p class="h5 fw-normal mb-3">Rp 179.000 | 60 min</p>
                <p class="h5 fw-normal mb-3">(Harga seterusnya mengikuti di atas)</p>
                <p class="h6 fw-normal mb-3">Additional:</p>
                <p class="h6 fw-normal mb-3">- Kostum : Rp 25,000</p>
                <p class="h6 fw-normal mb-3">- Hard Copy: Rp 15.000</p>
                <p class="text-black-50 mb-5">Jl. Sanggata 1 No.8 Blok D7, RT.007/RW.013, Jatiwaringin, Kec. Pd. Gede</p>
                <p class="modal-desc">Warna background (Putih, Biru, Pink, Abu-abu, Kuning) *pilih salah
                    satu</p>
                <input class="form-control form-control-lg mb-5" type="text">

                <button class="detail-btn my-4 rounded-pill d-block" data-bs-toggle="modal"
                    data-bs-target="#bookModal">Book Now</button>

                <p class="notes d-block d-lg-none">
                    Semua file foto yang dikirim melalui Whatsapp 60 Menit setelah sesi foto
                </p>

                <p class="h5 text-description fw-bold mt-5">Syarat & Ketentuan</p>
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
    <script src="{{ asset('assets/js/book-detail.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get today's date
            var today = new Date();

            // Initialize Pikaday date picker
            var picker = new Pikaday({
                field: document.getElementById('datepicker'),
                bound: false,
                container: document.getElementById('datepicker'),
                format: 'D MMM YYYY',
                minDate: today, // Disable dates before today
                onSelect: function(date) {
                    // Format selected date and update both elements
                    var options = {
                        weekday: 'long',
                        month: 'long',
                        day: 'numeric'
                    };
                    var formattedDate = date.toLocaleDateString('en-US',
                        options); // e.g., "Thursday, November 7"
                    document.getElementById('selected-date').textContent = formattedDate;
                    document.querySelector('.current-date').textContent = formattedDate;
                }
            });

            // Set the initial date to today and update both elements
            picker.setDate(today);
            var initialDate = today.toLocaleDateString('en-US', {
                weekday: 'long',
                month: 'long',
                day: 'numeric'
            });
            document.getElementById('selected-date').textContent = initialDate;
            document.querySelector('.current-date').textContent = initialDate;

            // AJAX booking request on "Book" button click
            document.querySelector('#btn-book').addEventListener('click', function() {
                let selectedDate = picker.toString(); // Format as required
                if (!selectedDate || !selectedTime) {
                    alert('Please select a date and time');
                    return;
                }

                // Send data via AJAX
                fetch('/book', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Ensure CSRF token is included
                        },
                        body: JSON.stringify({
                            date: selectedDate,
                            time: selectedTime,
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Redirect to checkout page
                            window.location.href = '/checkout';
                        } else {
                            alert('Booking failed, please try again.');
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });


            // Handle time button selection
            const bookButton = document.getElementById('btn-book');
            bookButton.disabled = true; // Disable button by default

            // Handle time button selection
            let selectedTime = '';
            document.querySelectorAll('.time-btn').forEach(button => {
                button.addEventListener('click', function() {
                    // Update selected time and style
                    selectedTime = this.textContent;
                    document.getElementById('selected-time').textContent = selectedTime;

                    // Remove active class from all time buttons and add to the clicked button
                    document.querySelectorAll('.time-btn').forEach(btn => btn.classList.remove(
                        'active-time'));
                    this.classList.add('active-time');

                    // Enable the book button and add the active-time class to it
                    bookButton.disabled = false;
                    bookButton.classList.add('active-time');
                });
            });
        });
    </script>
@endpush
