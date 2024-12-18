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
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
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
                            <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2" data-bs-toggle="modal"
                                data-bs-target=".add-booking">
                                Tambah Booking Baru
                            </button>
                        </div>

                        <!-- Add Booking Popup Modal -->
                        <div class="modal fade in add-booking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                <div class="modal-content">
                                    <form action="{{ route('booking.store') }}" method="POST" id="form_store_booking">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Tambah Booking Baru</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label>Product</label>
                                                    <input type="text" name="product" class="form-control" placeholder="Product" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Date</label>
                                                    <input type="date" name="date_books" class="form-control" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Duration</label>
                                                    <input type="number" name="duration" class="form-control" placeholder="Duration (in hours)" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Price</label>
                                                    <input type="number" name="price" class="form-control" placeholder="Price" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Add-On</label>
                                                    <input type="text" name="add_on" class="form-control" placeholder="Add-On">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Start Time</label>
                                                    <input type="time" name="start_time" class="form-control" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>End Time</label>
                                                    <input type="time" name="end_time" class="form-control" required>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label>Details</label>
                                                    <textarea name="details" class="form-control" rows="3" placeholder="Details"></textarea>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Booker Name</label>
                                                    <input type="text" name="booker_name" class="form-control" placeholder="Booker Name" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Booker Email</label>
                                                    <input type="email" name="booker_email" class="form-control" placeholder="Booker Email" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Booker Phone</label>
                                                    <input type="text" name="booker_phone" class="form-control" placeholder="Booker Phone" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Status</label>
                                                    <select name="status" class="form-control" required>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Confirmed">Confirmed</option>
                                                        <option value="Cancelled">Cancelled</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info">Simpan</button>
                                            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Kembali</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="booking-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Product</th>
                                        <th>Date</th>
                                        <th>Duration</th>
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
        $('#form_store_booking').submit(function(e) {
            e.preventDefault();
            // AJAX submission logic here
        });

        var dataColumns = [
            { data: 'id' },
            { data: 'product' },
            { data: 'date_books' },
            { data: 'duration' },
            { data: 'price' },
            { data: 'status' },
            { data: 'id' },
        ];

        var columnDef = [
            { targets: [0], render: (data, type, full, meta) => `<p class="text-center">${meta.row + 1}</p>` },
            { targets: [6], render: (data, type, full) => `
                <a class="btn btn-warning" href="/booking/${data}/edit">Edit</a>
                <a class="btn btn-danger" href="#" onclick="return confirm('Delete this item?')">Delete</a>
            ` },
        ];

        // Initialize DataTable
        $('#booking-table').DataTable({
            ajax: "{{ route('booking.index') }}",
            columns: dataColumns,
            columnDefs: columnDef,
        });
    });
</script>
@endsection
