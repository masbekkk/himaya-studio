<!-- pikaday -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
<link rel="stylesheet" href="{{ asset('assets/css/book-detail.css') . '?v=' . bin2hex(random_bytes(20)) }}">
<link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css?v=' . bin2hex(random_bytes(20))) }}">
<!-- splide -->
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

    #booking-modal>.modal-dialog {
        width: 60vw;
        max-width: 60vw;
    }

    #booking-modal>.modal-content {
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

    /* Time input styling */
    .time-input {
        display: block;
        width: 100%;
        padding: 0.5em;
        font-size: 1rem;
        margin-top: 0.5em;
        border: 1px solid #ddd;
        border-radius: 0.25em;
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

    #booking-modal>.modal-title {
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

    #booking-modal>.modal-footer .btn {
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

    .title-product {
        font-size: 2rem !important;
        font-weight: 600 !important;
    }

    .text-title {
        font-size: 1rem !important;
        font-weight: 600 !important;
        text-align: center;
    }

    .text-title-add-ons {
        font-size: 1rem !important;
        font-weight: 600 !important;
        text-align: left;
    }

    @media screen and (max-width: 992px) {
        #booking-modal>.modal-title:last-child {
            margin-bottom: 0;
        }

        .timepicker-block {
            width: 100%;
        }

        #booking-modal>.modal-dialog {
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

<div class="modal fade" id="booking-modal" tabindex="-1" aria-labelledby="booking-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-lg-down modal-dialog-centered">
        <div class="modal-content rounded" style="overflow: hidden;">
            <div class="modal-body p-0 book-modal-body position-relative">
                <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="left-side">
                    <h5 class="modal-title title-product mb-3">{{ $product }}</h5>
                    {!! $benefits !!}
                    </p>
                    <ul class="li-no-style">
                        <li class="my-2">
                            <i class="bi bi-calendar3 me-2"></i>
                            <span id="selected-date">11/6/2024</span>
                        </li>
                        <li class="my-2">
                            <i class="bi bi-clock me-2"></i>
                            <span id="time-difference">0 minutes</span>
                            @if ($total_people != 0)
                                (<text class="total_people">4 orang</text>)
                            @endif
                        </li>
                        <li class="my-2">
                            <i class="bi bi-geo-alt me-2"></i>
                            <span id="selected-location">Jl. Sanggata 1 No.8 Blok D7, RT.007/RW.013, Jatiwaringin,
                                Kec. Pd. Gede, Kota Bks, Jawa Barat 17411</span>
                        </li>
                    </ul>
                    @if ($background === 'true')
                        <span class="fs-6">Warna background (Putih, Biru, Pink, Abu-abu, Kuning) *pilih salah
                            satu</span>
                        <select class="form-control my-3" style="border: 1px solid #0d6efd;" name="details"
                            id="input_details" required>
                            <option value="" disabled selected>Pilih warna</option>
                            <option value="Putih">Putih</option>
                            <option value="Biru">Biru</option>
                            <option value="Pink">Pink</option>
                            <option value="Abu-abu">Abu-abu</option>
                            <option value="Kuning">Kuning</option>
                        </select>
                    @endif
                    @if ($total_people != 0)
                        <span class="fs-6">Max 4 orang, nambah orang charge 10k/orang</span>
                        <label class="form-label">Masukkan Tambahan Orang</label>
                        <input type="number" name="total_people" class="form-control input_total_people"
                            max={{ $total_people }} id="total_people_input">
                        <small class="text-danger error-message" style="display:none;">Jumlah orang tidak boleh lebih
                            dari
                            {{ $total_people }}.</small>
                    @endif
                </div>

                <div class="right-side bg-grey">
                    <h5 class="modal-title mb-3 text-title">Select Date & Time</h5>
                    <div class="datepicker-block w-100">
                        <div class="w-100 h-100" id="datepicker"></div>
                    </div>
                    <div class="timepicker-block">
                        <label for="start-time">Start Time:</label>
                        <input type="time" id="start-time" class="time-input" required>

                        <label for="end-time" class="mt-3">End Time:</label>
                        <input type="time" id="end-time" class="time-input" required>

                        <p id="error-message" class="text-danger mt-1" style="display: none;">End time must be after
                            start time.</p>
                        {{-- @if ($add_ons_meet_room === 'true')
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Proyektor" value="20000"
                                    id="check_kustom">
                                <label class="form-check-label" for="check_kustom">
                                    Proyektor
                                </label>
                            </div>
                        @endif --}}
                        @if ($add_ons_self_photo === 'true')
                            <p class="text-title-add-ons mb-2 mt-4">Add ons:</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Kustom" value="25000"
                                    id="check_kustom">
                                <label class="form-check-label" for="check_kustom">
                                    Kustom
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Hard Copy" value="15000"
                                    id="check_hard_copy">
                                <label class="form-check-label" for="check_hard_copy">
                                    Hard Copy
                                </label>
                            </div>
                        @endif
                        @if ($add_ons_private_cinema === 'true')
                            <p class="text-title-add-ons mb-2 mt-4">Add ons:</p>
                            <!-- Birthday Packages -->
                            <div class="mb-4">
                                <h4>Birthday Packages</h4>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="birthdayPackage"
                                        id="birthdayStandard" value="449000">
                                    <label class="form-check-label" for="birthdayStandard">
                                        Rp 449.000 | Birthday Standard Package
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="birthdayPackage"
                                        id="birthdaySilver" value="599000">
                                    <label class="form-check-label" for="birthdaySilver">
                                        Rp 599.000 | Birthday Silver Package
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="birthdayPackage"
                                        id="birthdayGold" value="749000">
                                    <label class="form-check-label" for="birthdayGold">
                                        Rp 749.000 | Birthday Gold Package
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="birthdayPackage"
                                        id="birthdayPlatinum" value="899000">
                                    <label class="form-check-label" for="birthdayPlatinum">
                                        Rp 899.000 | Birthday Platinum Package
                                    </label>
                                </div>
                            </div>

                            <!-- Bridal Shower Packages -->
                            <div class="mb-4">
                                <h4>Bridal Shower Packages</h4>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="birthdayPackage"
                                        id="bridalStandard" value="499000">
                                    <label class="form-check-label" for="bridalStandard">
                                        Rp 499.000 | Bridal Shower Standard Package
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="birthdayPackage"
                                        id="bridalSilver" value="649000">
                                    <label class="form-check-label" for="bridalSilver">
                                        Rp 649.000 | Bridal Shower Silver Package
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="birthdayPackage"
                                        id="bridalGold" value="849000">
                                    <label class="form-check-label" for="bridalGold">
                                        Rp 849.000 | Bridal Shower Gold Package
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="birthdayPackage"
                                        id="bridalPlatinum" value="999000">
                                    <label class="form-check-label" for="bridalPlatinum">
                                        Rp 999.000 | Bridal Shower Platinum Package
                                    </label>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-between align-items-center">
                <div class="align-items-center">
                    <h5 class="modal-title text-title" id="text-price">Price: Rp 0</h5>
                </div>
                <div>
                    <button type="button" class="btn bg-transparent px-4" data-bs-dismiss="modal">Cancel</button>
                    <button disabled type="button" class="btn btn-secondary text-white px-4"
                        id="btn-book">Book</button>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Get today's date
        let selectedDate = null;
        let picker = null;
        const today = new Date();
        let duration = 0;
        let totalPrice = 0; // Keep track of total price
        let addOns = {};
        let addOnsArray = null;
        let startTime = null;
        let endTime = null;

        const $bookButton = $('#btn-book');
        const $startTimeInput = $('#start-time');
        const $endTimeInput = $('#end-time');
        const $timeDifferenceDisplay = $('#time-difference');
        const $errorMessage = $('#error-message');
        $bookButton.prop('disabled', true); // Disable button by default

        console.log(selectedDate)
        const date = new Date(selectedDate);
        let localDate = new Date(date.getTime() - date.getTimezoneOffset() * 60000);
        let isoDate = localDate.toISOString().split('T')[0];

        function initializeDatePicker() {
            // Destroy any existing Pikaday instance before initializing
            destroyPikaday();

            // Check if the #datepicker exists in the DOM
            const datePickerField = $('#datepicker')[0];
            if (datePickerField) {
                // Create a new Pikaday instance
                picker = new Pikaday({
                    field: datePickerField,
                    bound: false,
                    container: datePickerField,
                    format: 'YYYY-MM-DD',
                    minDate: new Date(), // Disable dates before today
                    onSelect: function(date) {
                        const options = {
                            weekday: 'long',
                            month: 'long',
                            day: 'numeric',
                            year: 'numeric'
                        };
                        localDate = new Date(date.getTime() - date.getTimezoneOffset() * 60000);
                        isoDate = localDate.toISOString().split('T')[0];

                        const formattedDate = date.toLocaleDateString('en-US', options);
                        selectedDate = formattedDate
                        $('#selected-date').text(formattedDate);
                        $('.current-date').text(formattedDate);
                    }
                });
            } else {
                console.warn('Datepicker field not found in the DOM.');
            }
        }

        function destroyPikaday() {
            // Destroy the Pikaday instance if it exists
            if (picker) {
                picker.destroy();
                picker = null; // Clear the reference to avoid reuse
            }
        }
        initializeDatePicker(); // Initialize date picker for the modal
        // Set the initial date to today and update both elements
        picker.setDate(today);
        const initialDate = today.toLocaleDateString('en-US', {
            weekday: 'long',
            month: 'long',
            day: 'numeric',
            year: 'numeric'
        });
        selectedDate = initialDate
        $('#selected-date').text(initialDate);
        $('.current-date').text(initialDate);

        // Function to calculate time difference in minutes
        function calculateTimeDifference() {
            startTime = $startTimeInput.val();
            endTime = $endTimeInput.val();
            if (startTime && endTime) {
                const start = new Date(`1970-01-01T${startTime}:00`);
                const end = new Date(`1970-01-01T${endTime}:00`);
                const differenceInMinutes = (end - start) / (1000 * 60); // Convert milliseconds to minutes

                if (differenceInMinutes > 0) {
                    // Valid time range
                    $timeDifferenceDisplay.text(`${differenceInMinutes} minutes`);
                    $errorMessage.hide();
                    duration = differenceInMinutes
                    // $bookButton.prop('disabled', false).addClass('active-time');
                } else {
                    // Invalid time range
                    $timeDifferenceDisplay.text('');
                    $errorMessage.show();
                    // $bookButton.prop('disabled', true).removeClass('active-time');
                }
                if (Number.isInteger(calculatePrice(differenceInMinutes))) {

                    $('#text-price').text(`Price: Rp ${calculatePrice(differenceInMinutes).toLocaleString()}`);
                }
            }
        }

        // Function to update available end times based on selected start time
        function updateEndTimeOptions() {
            const startTime = $startTimeInput.val();
            if (startTime) {
                $endTimeInput.attr('min', startTime);
            }
        }

        // Add event listeners for changes on start and end time inputs
        $startTimeInput.on('input', function() {
            updateEndTimeOptions();
            calculateTimeDifference();
        });

        $endTimeInput.on('input', calculateTimeDifference);

        let totalPeople = 0;

        // Attach the 'input' event handler to the input field
        $('.input_total_people').on('input', function(e) {
            let value = parseInt($(this).val()) || 0;
            $('.total_people').text(4 + value + " Orang");
            totalPeople = value * 10000;
            // totalPrice += totalPeople
            $('#text-price').text(`Price: Rp ${calculatePrice(duration).toLocaleString()}`);
        });


        function calculatePrice(duration) {
            let basePrices = JSON.parse(@json($price_lists));
            let baseDurations = JSON.parse(@json($duration_lists));
            const increment = 30000;
            if (duration <= 60) {
                for (let i = 0; i < baseDurations.length; i++) {
                    if (duration === baseDurations[i]) {
                        totalPrice = basePrices[i];
                        $bookButton.prop('disabled', false).addClass('active-time');
                        return totalPrice + totalPeople;
                    }
                }
                $bookButton.prop('disabled', true).removeClass('active-time');
                $('#text-price').text(`Durasi hanya tersedia pada List`);
                // return 0; // No match found
            } else {
                const extraMinutes = duration - 60;
                const extraIntervals = Math.ceil(extraMinutes / 15);
                const additionalCost = extraIntervals * increment;

                totalPrice = basePrices[3] + additionalCost;
                $bookButton.prop('disabled', false).addClass('active-time');
                return totalPrice + totalPeople;
            }
            // $('#text-price').text(`Rp ${totalPrice.toLocaleString()}`);
        }

        function updateTotalPrice(duration) {
            let durationPrice = calculatePrice(duration);
            if (Number.isInteger(durationPrice)) {
                let addOnPrice = 0;

                // Add up the prices of checked checkboxes
                $('.form-check-input:checkbox').each(function(index) {
                    if ($(this).is(':checked')) {
                        // If the checkbox is checked
                        addOnPrice += parseInt($(this).val());
                        addOns[`addon${index + 1}`] = $(this).attr('name');
                    } else {
                        delete addOns[`addon${index + 1}`];
                    }
                });

                // Handle radio buttons for package selection
                let selectedPackagePrice = 0; // Default for radio button values
                $('input[type="radio"]').each(function(index) {
                    if ($(this).is(':checked')) {
                        selectedPackagePrice += parseInt($(this).val());

                        // Fetch the associated label text
                        const labelText = $(`label[for="${$(this).attr('id')}"]`).text().trim();
                        addOns[`addon${index + 1}`] = labelText;
                    } else {
                        delete addOns[`addon${index + 1}`];
                    }
                });


                // Convert the object to an array of objects as required
                addOnsArray = Object.keys(addOns).map(key => ({
                    [key]: addOns[key]
                }));


                const combinedTotalPrice = durationPrice + addOnPrice + selectedPackagePrice;
                // Update the displayed total price
                $('#text-price').text(`Price: Rp ${combinedTotalPrice.toLocaleString()}`);
                totalPrice = combinedTotalPrice;
            } else {
                Swal.fire({
                    title: 'Belum pilih durasi yang sesuai',
                    text: "Kamu belum memilih durasi yang sesuai",
                    icon: 'warning',
                    confirmButtonText: 'OK',
                }).then(() => {
                    // Clear all checked checkboxes and radio buttons
                    $('.form-check-input:checkbox').prop('checked', false);
                    $('input[type="radio"]').prop('checked', false);

                    // Reset addOns object
                    addOns = {};
                    addOnsArray = [];

                    // Reset displayed total price
                    $('#text-price').text('Price: Rp 0');
                    totalPrice = 0;
                });
            }
        }


        // Listen for changes on checkboxes and update the price dynamically
        $('.form-check-input').change(function() {
            updateTotalPrice(duration);
        });

        function submitData(data) {
            if ($('#input_details').length && $('#input_details').val() == null) {
                Swal.fire({
                    title: 'Background harus Dipilih',
                    text: "Kamu belum memilih Background Foto",
                    icon: 'warning',
                    confirmButtonText: 'OK',
                });
            } else {

                // Create a new form element
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = "{{ route('book.checkout') }}";
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = '_token';
                input.value = "{{ csrf_token() }}";
                form.appendChild(input);
                // Add data as hidden inputs


                for (const key in data) {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = key;
                    input.value = data[key];
                    form.appendChild(input);
                }

                // Append form to the body and submit it
                document.body.appendChild(form);
                form.submit();
            }
        }

        $('#btn-book').click(function() {
            let details = '';

            if ($('#input_details').length) {
                details = 'Warna Background: ' + $('#input_details').val();
                if ($('.total_people').length) {
                    details += ' ' + $('.total_people').text();
                }
            } else if ($('.total_people').length) {
                details = $('.total_people').text();
            } else {
                details = null;
            }

            null;
            const data = {
                date: isoDate,
                duration: duration,
                price: totalPrice,
                product: "{{ $product }}",
                add_on: JSON.stringify(addOnsArray),
                start_time: startTime,
                end_time: endTime,
                details: details
            };
            // console.log(data)
            submitData(data)
        });

        const inputField = document.querySelector('#total_people_input');
        const errorMessage = document.querySelector('.error-message');

        inputField.addEventListener('input', function() {
            const maxVal = parseInt(inputField.getAttribute('max'), 10);
            const currentVal = parseInt(inputField.value, 10);

            if (currentVal > maxVal) {
                inputField.setCustomValidity('Invalid');
                errorMessage.style.display = 'block';
            } else {
                inputField.setCustomValidity('');
                errorMessage.style.display = 'none';
            }
        });
    });
</script>
