<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self Photo Studio & Private Cinema | Jatiwaringin | Bekasi | Himaya Photo Studio. </title>
    <meta name="description"
        content="Self Photo Studio & Private Cinema | Jatiwaringin | Bekasi — Express Yourself with Your Unique Style, Whether Single, As a Couple or Even With Your Group. Our Place is Spacious and Comfortable, Include With All-New and Premium Photography Technology Gear. Book Now and Get Promo for FREE 1 Photo!">
    <meta name="keywords" content="Self Photo Studio Jatiwaringin, Sewa Studio dan Fotografer, Bekasi">
    <link rel="icon" href="assets/img/logo-black-small.avif">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/main.css') . '?v=' . bin2hex(random_bytes(20)) }}"> --}}

    <!-- Montserrat Google Icons -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') . '?v=' . bin2hex(random_bytes(20)) }}">

    <!-- BS icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Import AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/checkout.css') . '?v=' . bin2hex(random_bytes(20)) }}">
</head>

<body>
    <section class="checkout-box container py-5">
        <div class="row">
            <div class="mb-5 ps-5">
                <a href="#" class="text-decoration-none fw-bold co-text-desc co-text-grey">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-arrow-left-short h4 text-dark fw-bold mb-0" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                    </svg>
                    Return to store
                </a>
            </div>
            <!-- <div class="col-12 col-lg-10">
                    
                    <div class="row g-5"> -->
            <!-- Left Column -->
            <div class="col-12 col-lg-6 px-5">
                <h6 class="co-text-title co-text-grey fw-bolder mb-0">Pay Nee Studio</h6>
                <h2 class="co-text-price mb-5">Rp {{ $price }}</h2>
                @php
                    $add_on = json_decode($add_on, true); // Decode to array
                @endphp
                <div class="mb-3">
                    <div class="row co-text-desc">
                        <div class="col-6">
                            <p class="mb-1 fw-bolder co-text-grey">{{ $product }} ({{ $duration }}) </p>
                            <p class="co-text-desc-small co-text-grey2 fw-bolder">Warna background (Putih, Abu-abu,
                                Hitam, Cream) *pilih salah satu Putih</p>
                            @if (!empty($add_on))
                                <p class="co-text-desc-small co-text-grey2 fw-bolder">Additional:</p>
                                @foreach ($add_on as $item)
                                    <p class="h6 fw-normal mb-3">- {{ $item[key($item)] }}</p>
                                @endforeach
                            @endif
                        </div>
                        <div class="col-4 offset-2 text-end">
                            <p class="fw-bolder co-text-grey">Rp {{ $price }}</p>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="row co-text-desc">
                        {{-- <div class="col-6">
                            <p class="mb-1 fw-bolder co-text-grey">Subtotal</p>
                        </div>
                        <div class="col-6 text-end">
                            <p class="fw-bolder co-text-grey">Rp100000.00</p>
                        </div> --}}

                        <div class="col-12 text-center">
                            <hr class="my-0">
                        </div>

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item border border-0">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button py-3 px-0 border border-0 co-text-desc fw-bold text-primary"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Add discount code
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body px-0">
                                        <div class="discount-section mb-4">
                                            <div class="d-flex gap-2">
                                                <input type="text"
                                                    class="form-control ps-3 co-text-grey2 co-text-desc"
                                                    placeholder="Enter discount code">
                                                <button class="btn btn-primary px-3">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="col-12 text-center">
                        <hr>
                    </div>

                    <div class="row co-text-desc">
                        <div class="col-6">
                            <p class="mb-1 fw-bolder co-text-grey">Total due</p>
                        </div>
                        <div class="col-4 offset-2 text-end">
                            <p class="fw-bolder co-text-grey h6">Rp {{ $price }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-12 col-lg-6 px-5 mt-4 mt-lg-0">
                <h6 class="co-text-title co-text-grey fw-bolder mb-5">Contact information</h6>
                <form class="px-2">
                    <div class="mb-5">
                        <label class="form-label co-text-desc co-fw-bolder mb-3">Email</label>
                        <input type="email" class="form-control co-text-desc" placeholder="Email">
                    </div>

                    <div class="mb-5">
                        <label class="form-label co-text-desc co-fw-bolder mb-3">Full name</label>
                        <input type="text" class="form-control co-text-desc" placeholder="Your full name">
                    </div>

                    <div class="mb-5">
                        <label class="form-label co-text-desc co-fw-bolder mb-3">Phone number</label>
                        <input type="tel" class="form-control co-text-desc" placeholder="Your phone number">
                    </div>
                    <input type="hidden" name="date" id="date" value="{{ $date }}">
                    <input type="hidden" name="duration" id="duration" value="{{ $duration }}">
                    <input type="hidden" name="price" id="price" value="{{ $price }}">
                    <input type="hidden" name="product" id="product" value="{{ $product }}">
                    <input type="hidden" name="add_on" id="add_on" value="{{ $add_on }}">
                    <input type="hidden" name="start_time" id="start_time" value="{{ $start_time }}">
                    <input type="hidden" name="end_time" id="end_time" value="{{ $end_time }}">

                    {{-- <div class="mb-5">
                        <label class="form-label co-text-desc co-fw-bolder mb-3">Country</label>
                        <select class="form-select co-text-desc">
                            <option selected>Indonesia</option>
                        </select>
                    </div> --}}


                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Confirm booking</button>
                </form>
            </div>

            <!-- Payment Method Section -->
            {{-- <div class="col-12 col-lg-6 px-5 mt-5 mt-lg-0">
                <h6 class="co-text-title co-text-grey fw-bolder mb-5">Payment Method</h6>
                <div class="ps-2">
                    <div class="border border-secondary-subtle rounded py-2 px-3 mb-4">
                        <h6 class="co-text-grey co-text-desc fw-bold mb-3 mt-2">Bank Transfer (FULL PAYMENT)</h6>
                        <div class="ps-2 co-text-desc co-text-grey2">
                            <p class="mb-0">3880728198</p>
                            <p>BCA a/n Made Indira</p>

                            <p class="mb-0">WAJIB mengirim bukti transfer ke WhatsApp kami untuk konfirmasi booking
                                Anda.</p>
                            <p>Klik link berikut : https://wa.link/dpxpde</p>

                            <p class="mb-1">You will get a copy of these instructions to your email after placing an
                                order</p>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Place an order</button>
            </div> --}}
        </div>
    </section>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Import Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
