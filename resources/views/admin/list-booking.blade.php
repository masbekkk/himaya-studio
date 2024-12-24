@extends('admin.layouts.app')

@section('style')
@endsection

@section('title')
    Data Booking
@endsection

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Booking</h3>
                    <p class="text-subtitle text-muted">Kelola dan Lihat Data Booking</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('landing') }}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Booking</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2">
                                <h5 class="card-title">
                                    Booking Management
                                </h5>
                            </div>
                            <div class="d-flex justify-content-end">
                                {{-- <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2" data-bs-toggle="modal"
                                    data-bs-target=".add-booking">
                                    Tambah Booking Baru
                                </button> --}}
                            </div>

                            <!-- Add Booking Popup Modal -->
                            {{-- <div class="modal fade in add-booking" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <form action="{{ route('booking.store') }}" method="POST" id="form_store_booking">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Tambah Booking Baru</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                @csrf
                                                <!-- Form fields here -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-info">Simpan</button>
                                                <button type="button" class="btn btn-default"
                                                    data-bs-dismiss="modal">Kembali</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Edit Booking Popup Modal -->
                            <div class="modal fade in edit-booking" tabindex="-1" role="dialog"
                                aria-labelledby="editBookingLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <form action="#" method="POST" id="form_update_booking">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="editBookingLabel">Update Status Booking</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id" class="booking-id">
                                                <div class="row">
                                                   {{--  <div class="col-md-6 mb-3">
                                                        <label>Product</label>
                                                        <input type="text" name="product"
                                                            class="form-control booking-product" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Date</label>
                                                        <input type="date" name="date_books"
                                                            class="form-control booking-date_books" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Duration</label>
                                                        <input type="number" name="duration"
                                                            class="form-control booking-duration" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Price</label>
                                                        <input type="number" name="price"
                                                            class="form-control booking-price" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Add-On</label>
                                                        <input type="text" name="add_on"
                                                            class="form-control booking-add_on">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Start Time</label>
                                                        <input type="time" name="start_time"
                                                            class="form-control booking-start_time" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>End Time</label>
                                                        <input type="time" name="end_time"
                                                            class="form-control booking-end_time" required>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label>Details</label>
                                                        <textarea name="details" class="form-control booking-details" rows="3"></textarea>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Booker Name</label>
                                                        <input type="text" name="booker_name"
                                                            class="form-control booking-booker_name" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Booker Email</label>
                                                        <input type="email" name="booker_email"
                                                            class="form-control booking-booker_email" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Booker Phone</label>
                                                        <input type="text" name="booker_phone"
                                                            class="form-control booking-booker_phone" required>
                                                    </div> --}}
                                                    <div class="col-md-12 mb-3">
                                                        <label>Status</label>
                                                        <select name="status" class="form-control booking-status_edit" required>
                                                            <option value="NOT YET PAY">NOT YET PAY</option>
                                                            <option value="APPROVED">APPROVED</option>
                                                            <option value="SUCCESS">SUCCESS</option>
                                                            <option value="REJECT">REJECT</option>
                                                        </select>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-info">Simpan</button>
                                                <button type="button" class="btn btn-default"
                                                    data-bs-dismiss="modal">Kembali</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="table-1" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Product</th>
                                            <th>Date</th>
                                            <th>Duration</th>
                                            <th>Voucher</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Dynamic data from server -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

    @section('scripts')
        <script>
            $(document).ready(function() {
                // Configure DataTables for the Booking table
                var dataColumns = [{
                        data: 'id'
                    },
                    {
                        data: 'product'
                    },
                    {
                        data: 'date_books'
                    },
                    {
                        data: 'duration'
                    },
                    {
                        data: 'voucher.voucher_name'
                    },
                    {
                        data: 'price'
                    },
                    {
                        data: 'status'
                    },
                    {
                        data: 'id'
                    }
                ];

                var columnDef = [{
                        targets: [0],
                        render: (data, type, full, meta) => `<p class="text-center">${meta.row + 1}</p>`
                    },
                    {
                        targets: [2],
                        render: (data) => formatDateIndonesian(data)
                    },
                    {
                        targets: [3],
                        render: (data) => `${data} minutes`
                    },
                    {
                        targets: [5],
                        render: (data) => formatToIndonesianCurrency(data)
                    },
                    {
                        targets: [7],
                        render: (data, type, full) => `
                    <a class="btn btn-warning btn-edit" 
                        href="#" 
                        data-id="${data}" 
                        data-product="${full.product}"
                        data-date_books="${full.date_books}"
                        data-duration="${full.duration}"
                        data-price="${full.price}"
                        data-status="${full.status}"
                        data-add_on="${full.add_on}"
                        data-start_time="${full.start_time}"
                        data-end_time="${full.end_time}"
                        data-details="${full.details}"
                        data-booker_name="${full.booker_name}"
                        data-booker_email="${full.booker_email}"
                        data-booker_phone="${full.booker_phone}">
                        Edit
                    </a>
                  
                `
                    }
                ];
                // <a class="btn btn-danger" href="#" 
                //         data-delete-url="/booking/${data}" 
                //         onclick="return deleteConfirm(this, 'DELETE')">
                //         Delete
                //     </a>
                var params = {
                    idTable: '#table-1',
                    urlAjax: "{{ route('booking.index') }}",
                    columns: dataColumns,
                    defColumn: columnDef,
                    pdf: 'not_print',
                };

                // Initialize DataTables
                loadAjaxDataTables(params);

                // Handle Add Booking form submission
                $('#form_store_booking').submit(function(e) {
                    e.preventDefault();
                    var form = $(this);
                    var arrParams = {
                        url: form.attr('action'),
                        method: 'POST',
                        input: form.serialize(),
                        forms: form[0],
                        modal: $('.add-booking').modal('hide'),
                        reload: false
                    };
                    ajaxSaveDatas(arrParams);
                });

                // Handle Edit Booking form submission
                $('#form_update_booking').submit(function(e) {
                    e.preventDefault();
                    var form = $(this);
                    var id = $('.booking-id').val();
                    var url = "{{ route('booking.update', ['booking' => ':id']) }}".replace(':id', id);
                    var arrParams = {
                        url: url,
                        method: 'PUT',
                        input: form.serialize(),
                        forms: form[0],
                        modal: $('.edit-booking').modal('hide'),
                        reload: false
                    };
                    ajaxSaveDatas(arrParams);
                });

                // Handle Edit button click to populate the modal
                $('#table-1').on('click', '.btn-edit', function() {
                    var data = $(this).data();
                    $('.booking-id').val(data.id);
                    $('.booking-product').val(data.product);
                    $('.booking-date_books').val(data.date_books);
                    $('.booking-duration').val(data.duration);
                    $('.booking-price').val(data.price);
                    $('.booking-add_on').val(data.add_on);
                    $('.booking-start_time').val(data.start_time);
                    $('.booking-end_time').val(data.end_time);
                    $('.booking-details').val(data.details);
                    $('.booking-booker_name').val(data.booker_name);
                    $('.booking-booker_email').val(data.booker_email);
                    $('.booking-booker_phone').val(data.booker_phone);
                    $('.booking-status_edit').val(data.status);
                    $('.edit-booking').modal('show');
                });
            });
        </script>
    @endsection
