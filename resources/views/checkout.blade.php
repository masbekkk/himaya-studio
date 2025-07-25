<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self Photo Studio & Private Cinema | Jatiwaringin | Bekasi | Himaya Photo Studio. </title>
    <meta name="description"
        content="Self Photo Studio & Private Cinema | Jatiwaringin | Bekasi — Express Yourself with Your Unique Style, Whether Single, As a Couple or Even With Your Group. Our Place is Spacious and Comfortable, Include With All-New and Premium Photography Technology Gear. Book Now and Get Promo for FREE 1 Photo!">
    <meta name="keywords" content="Self Photo Studio Jatiwaringin, Sewa Studio dan Fotografer, Bekasi">
    <link rel="icon" href="{{ asset('image/logo-himaya.png') }}">
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

    <style>
        .price-strike {
            text-decoration: line-through;
            color: red;
        }
    </style>
</head>

<body>
    <section class="checkout-box container py-5 header">
        <div class="row">
            <div class="mb-5 ps-5">
                <a href="{{ route('book-now') }}" class="text-decoration-none fw-bold co-text-desc co-text-grey">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-arrow-left-short h4 text-dark fw-bold mb-0" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                    </svg>
                    Return to store
                </a>
            </div>
            <!-- Left Column -->
            <div class="col-12 col-lg-6 px-5">
                <h6 class="co-text-title co-text-grey fw-bolder mb-0">Pay Himaya Photo Studio.</h6>
                <div class="mb-5">
                    <h2 class="co-text-price normal-price ">{{ format_price_idr($price) }}</h2>
                    <h2 class="co-text-price discount-price d-none">{{ format_price_idr($price) }}</h2>
                </div>
                @php
                    $add_on = json_decode($add_on, true); // Decode to array
                @endphp
                <div class="mb-3">
                    <div class="row co-text-desc">
                        <div class="col-12">
                            <p class="mb-1 fw-bolder co-text-grey">{{ $product }} ({{ $duration }} menit) </p>
                            <p class="mb-1 fw-bolder co-text-grey">{{ format_indonesian_date($date) }}
                                {{ $start_time }} - {{ $end_time }} </p>
                            <p class="co-text-desc-small co-text-grey2 fw-bolder">{{ $details ?? null }}</p>
                            @if (!empty($add_on))
                                <p class="co-text-desc-small co-text-grey2 fw-bolder">Additional:</p>
                                @foreach ($add_on as $item)
                                    <p class="h6 fw-normal mb-3">- {{ $item[key($item)] }}</p>
                                @endforeach
                            @endif
                        </div>
                        {{-- <div class="col-4 offset-2 text-end">
                            <p class="fw-bolder co-text-grey">Rp {{ $price }}</p>
                        </div> --}}
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
                                                <input type="text" id="voucher-text"
                                                    class="form-control ps-3 co-text-grey2 co-text-desc"
                                                    placeholder="Enter discount code">
                                                <button class="btn btn-primary px-3 apply-voucher-btn">Apply</button>
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
                            <p class="fw-bolder normal-price co-text-grey h6">{{ format_price_idr($price) }}</p>
                            <p class="fw-bolder discount-price co-text-grey h6 d-none">{{ format_price_idr($price) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-12 col-lg-6 px-5 mt-4 mt-lg-0">
                <h6 class="co-text-title co-text-grey fw-bolder mb-5">Contact information</h6>
                <form class="px-2" id="form_booking">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label co-text-desc co-fw-bolder mb-3">Email</label>
                        <input type="email" name="booker_email" class="form-control co-text-desc" placeholder="Email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label co-text-desc co-fw-bolder mb-3">Full name</label>
                        <input type="text" name="booker_name" class="form-control co-text-desc"
                            placeholder="Your full name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label co-text-desc co-fw-bolder mb-3">Phone number</label>
                        <input type="tel" name="booker_phone" class="form-control co-text-desc"
                            placeholder="Your phone number">
                    </div>
                    <input type="hidden" name="date_books" id="date" value="{{ $date }}">
                    <input type="hidden" name="duration" id="duration" value="{{ $duration }}">
                    <input type="hidden" name="price" id="price" value="{{ $price }}">
                    <input type="hidden" name="product" id="product" value="{{ $product }}">
                    <input type="hidden" name="add_on" id="add_on" value="{{ json_encode($add_on) }}">
                    <input type="hidden" name="start_time" id="start_time" value="{{ $start_time }}">
                    <input type="hidden" name="end_time" id="end_time" value="{{ $end_time }}">
                    <input type="hidden" name="details" id="details" value="{{ $details ?? null }}">
                    <input type="hidden" name="voucher_id" id="voucher_id">
                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold" id="btn_booking">Confirm
                        Booking</button>
                </form>
            </div>
        </div>
    </section>
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true"
        data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Booking Successful</h5>
                </div>
                <div class="modal-body">
                    <h6 class="co-text-grey co-text-desc fw-bold mb-3 mt-2">Bank Transfer (FULL PAYMENT)</h6>
                    <div class="ps-2 co-text-desc co-text-grey2">
                        <div class="d-flex align-items-center mb-2">
                            <p class="mb-0 no_rek fw-bold" id="accountNumber">5725566830</p>
                            <button class="btn btn-link text-decoration-none ms-2 copy-btn" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Copy">
                                <i class="bi bi-clipboard"></i>
                            </button>
                        </div>
                        <p>Dimas Rangga Arya Gardika (BCA)</p>
                        <p class="mb-0">WAJIB mengirim bukti transfer ke WhatsApp kami untuk konfirmasi
                            booking Anda.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="whatsappButton">
                        <i class="bi bi-whatsapp"></i> Konfirmasi lewat Whatsapp
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('assets/js/main.js') }}"></script>
<!-- Import Bootstrap JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function formatToIndonesianCurrency(number) {
        // Force the number to an integer by rounding down
        const integerNumber = Math.floor(Number(number));
        return 'Rp ' + integerNumber.toLocaleString('id-ID', {
            minimumFractionDigits: 0
        });
    }

    function formatDateIndonesian(dateString) {
        if (!dateString) {
            return '-';
        }

        const options = {
            weekday: 'long',
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        };
        const date = new Date(dateString);
        return date.toLocaleDateString('id-ID', options);
    }
    $(document).ready(function() {
        $('form').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            // Serialize the form data
            const formData = $(this).serialize();

            // Send AJAX request
            $.ajax({
                url: "{{ route('user.book.store') }}", // Your endpoint
                type: 'POST',
                data: formData, // Send serialized data
                success: function(data) {
                    if (data.status) {
                        // Show the modal on success
                        const modal = new bootstrap.Modal(document.getElementById(
                            'successModal'));
                        modal.show();
                    } else {
                        Swal.fire({
                            toast: true,
                            icon: 'error',
                            title: 'Booking failed: ' + (data.message ||
                                'Unknown error'),
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    Swal.fire({
                        toast: true,
                        icon: 'error',
                        title: `Booking Failed: ${xhr.responseJSON.message}`,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true
                    });
                    if (xhr.status === 419) {
                        window.location.reload()
                    }
                }
            });
        });

        // Initialize tooltips
        $('[data-bs-toggle="tooltip"]').tooltip();

        // Handle copy button click
        $('.copy-btn').on('click', function() {
            // Get the account number text
            const accountNumber = $('#accountNumber').text().trim();

            // Copy the text to the clipboard
            navigator.clipboard.writeText(accountNumber).then(() => {
                // Show tooltip with "Copied!" feedback
                const $tooltip = $(this).tooltip('dispose').attr('title', 'Copied!').tooltip(
                    'show');

                // Reset tooltip text after 2 seconds
                setTimeout(() => {
                    $tooltip.tooltip('dispose').attr('title', 'Copy').tooltip();
                }, 2000);
            }).catch(err => {
                console.error('Failed to copy text:', err);
                Swal.fire({
                    toast: true,
                    icon: 'error',
                    title: `'Failed to copy. Please try again.'`,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true
                });
            });
        });

        $('.apply-voucher-btn').on('click', function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('book.check-voucher') }}", // Your endpoint
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    voucher: $('#voucher-text').val(),
                    price: "{!! $price !!}"
                },
                success: function(data) {
                    console.log(data.data)
                    $('.normal-price').addClass('price-strike');
                    $('.discount-price').text(formatToIndonesianCurrency(data.data
                        .new_price))
                    $('#price').val(data.data
                        .new_price)
                    $('#voucher_id').val(data.data.voucher_id);
                    $('.discount-price').removeClass('d-none')
                    if (data.status) {
                        Swal.fire({
                            toast: true,
                            icon: 'success',
                            title: 'Voucher applied successfully!',
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        });
                    } else {
                        $('.normal-price').removeClass('price-strike');
                        $('.discount-price').addClass('d-none')
                        Swal.fire({
                            toast: true,
                            icon: 'error',
                            title: data.responseJSON.messagee,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        });
                    }
                },
                error: function(xhr, status, error) {
                    $('.normal-price').removeClass('price-strike');
                    $('.discount-price').addClass('d-none')
                    Swal.fire({
                        toast: true,
                        icon: 'error',
                        title: `Apply Voucher Gagal: ${xhr.responseJSON.message}`,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true
                    });
                    if (xhr.status === 419) {
                        window.location.reload()
                    }
                }
            });
        });

        $('#whatsappButton').on('click', function() {
            // Gather data from the form
            const bookerEmail = $('input[name="booker_email"]').val();
            const bookerName = $('input[name="booker_name"]').val();
            const bookerPhone = $('input[name="booker_phone"]').val();
            const dateBooks = $('#date').val();
            const duration = $('#duration').val();
            const price = $('#price').val();
            const product = $('#product').val();
            const addOn = JSON.parse($('#add_on').val() || '[]');
            const startTime = $('#start_time').val();
            const endTime = $('#end_time').val();
            const details = $('#details').val();

            // Construct the WhatsApp message
            let message = `Halo, saya ingin konfirmasi booking:\n\n`;
            message += `Tanggal: ${dateBooks}\n`;
            message += `Waktu: ${startTime} - ${endTime}\n`;
            message += `Durasi: ${duration} menit\n`;
            message += `Produk: ${product}\n`;
            message += `Harga: Rp ${price}\n`;

            if (addOn?.length > 0) {
                message += `Add-ons: ${addOn.map(item => `- ${item[key]}`).join('\n')}\n`;
            }

            message += `Detail: ${details || 'Tidak ada'}\n\n`;
            message += `Nama: ${bookerName}\n`;
            message += `Email: ${bookerEmail}\n`;
            message += `Nomor Telepon: ${bookerPhone}`;

            // Encode the message for WhatsApp URL
            const encodedMessage = encodeURIComponent(message);

            // WhatsApp API URL
            const whatsappURL = `https://wa.me/6281410265823?text=${encodedMessage}`;

            // Redirect to WhatsApp
            window.open(whatsappURL, '_blank');
        });
    });
</script>


</html>
