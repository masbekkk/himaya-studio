{{-- booking modal assets --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
<script>
    function generateModal(response) {
        const existingModal = $('#booking-modal');
        if (existingModal.length) {
            existingModal.remove(); // Hide the modal
        }
        appendAndShowModal(response);
    }

    function appendAndShowModal(response) {
        // Close all currently open modals
        $('.modal.show').each(function() {
            const modalId = $(this).attr('id'); // Get the modal's ID
            if (modalId) {
                $(`#${modalId}`).modal('hide'); // Hide the modal using jQuery
            }
        });
        // Append the new modal HTML to the body
        $('body').append(response);

        // Initialize and show the new modal
        const modalElement = $('#booking-modal');
        if (modalElement.length) {
            modalElement.modal('show');
            initializeDatePicker(); // Initialize date picker for the modal
        } else {
            console.error('Modal element not found in the DOM.');
        }
    }

    $('#btn-meet-room').click(function(e) {
        e.preventDefault(); // Prevent default behavior
        $.ajax({
            url: "{{ route('book.open_modal') }}",
            type: 'POST',
            dataType: 'html',
            data: {
                _token: "{{ csrf_token() }}",
                product: 'Meeting Room',
                price_lists: JSON.stringify([69000, 99000, 129000, 149000]),
                duration_lists: JSON.stringify([60, 120, 150, 180]),
                add_ons_meet_room: true,
                background: false,
                add_ons_self_photo: false,
            },
            success: function(response) {
                generateModal(response)
            },
            error: function(xhr, status, error) {
                console.error('Error loading modal:', error);
                alert('An error occurred while loading the modal. Please try again.');
            }
        });
    });

    $('#btn-self-photo').click(function(e) {
        e.preventDefault(); // Prevent default behavior
        $.ajax({
            url: "{{ route('book.open_modal') }}",
            type: 'POST',
            dataType: 'html',
            data: {
                _token: "{{ csrf_token() }}",
                product: 'Self Photo Studio',
                price_lists: JSON.stringify([99000, 129000, 149000, 179000]),
                duration_lists: JSON.stringify([15, 30, 45, 60]),
                add_ons_meet_room: false,
                background: true,
                add_ons_self_photo: true,
            },
            success: function(response) {
                generateModal(response)
            },
            error: function(xhr, status, error) {
                console.error('Error loading modal:', error);
                alert('An error occurred while loading the modal. Please try again.');
            }
        });
    });
    let selectedDate = null;
    let picker = null;
    const today = new Date();

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
                        day: 'numeric'
                    };
                    const formattedDate = date.toLocaleDateString('en-US', options);
                    $('#selected-date').text(formattedDate);
                    $('.current-date').text(formattedDate);
                }
            });

            // Set the initial date to today and update both elements
            picker.setDate(today);
            const initialDate = today.toLocaleDateString('en-US', {
                weekday: 'long',
                month: 'long',
                day: 'numeric'
            });
            $('#selected-date').text(initialDate);
            $('.current-date').text(initialDate);
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
</script>
