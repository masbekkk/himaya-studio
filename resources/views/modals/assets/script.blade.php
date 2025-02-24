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
                benefits: `<p class="detail-sub-title mb-4"> Meeting Room (Max. 10 orang) dengan Fasilitas Lengkap di Jabodetabek!</p>
<p class="detail-sub-info">Sudah termasuk:
    <ul>
        <li>📽️ Proyektor – Presentasi lebih jelas dan profesional!</li>
        <li>📝 White Board – Cocok untuk brainstorming dan diskusi tim!</li>
    </ul>
</p>`,
                price_lists: JSON.stringify([50000, 90000, 120000, 149000]),
                duration_lists: JSON.stringify([60, 90, 120]),
                add_ons_meet_room: false,
                background: false,
                add_ons_self_photo: false,
                add_ons_private_cinema: false,
                total_people: 0,
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
                benefits: `<h2 class="detail-sub-title mb-4"> Self Photo Studio dengan Paket Lengkap!</h2>
<p class="detail-sub-info">Sudah termasuk:
    <ul>
        <li>💾 All Softcopy – Simpan dan bagikan semua momen spesialmu!</li>
        <li>📸 Hardcopy 1 Pcs – Kenangan yang bisa dipajang di rumah!</li>
        <li>🎀 Accesories – Tambahkan gaya dan keseruan dalam setiap foto!</li>
    </ul>
</p>`,
                price_lists: JSON.stringify([75000, 130000, 175000, 220000]),
                duration_lists: JSON.stringify([15, 30, 45, 60]),
                add_ons_meet_room: false,
                background: true,
                add_ons_self_photo: true,
                add_ons_private_cinema: false,
                total_people: 4,
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
                benefits: `
                <p class="detail-sub-title mb-4">Nikmati Hiburan Tanpa Batas dengan Fasilitas Lengkap!</p>
<p class="detail-sub-info">Sudah termasuk:
    <ul>
        <li>🎬 Netflix Premium – Tonton film dan serial favorit tanpa iklan!</li>
        <li>📺 YouTube Premium – Streaming tanpa jeda iklan yang mengganggu!</li>
        <li>🎮 Free Games – Seru-seruan dengan berbagai pilihan game gratis!</li>
    </ul>
</p>`,
                price_lists: JSON.stringify([90000, 150000, 220000, 275000]),
                duration_lists: JSON.stringify([30, 60, 90, 120]),
                add_ons_meet_room: false,
                background: false,
                add_ons_self_photo: false,
                add_ons_private_cinema: true,
                total_people: 11,
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
