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
                add_ons_private_cinema: false,
                total_people: false,
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
                add_ons_private_cinema: false,
                total_people: false,
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

    $('#btn-private-cinema').click(function(e) {
        e.preventDefault(); // Prevent default behavior
        $.ajax({
            url: "{{ route('book.open_modal') }}",
            type: 'POST',
            dataType: 'html',
            data: {
                _token: "{{ csrf_token() }}",
                product: 'Private Cinema',
                price_lists: JSON.stringify([69000, 99000, 129000, 149000]),
                duration_lists: JSON.stringify([30, 60, 90, 120]),
                add_ons_meet_room: false,
                background: false,
                add_ons_self_photo: false,
                add_ons_private_cinema: true,
                total_people: true,
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
</script>
