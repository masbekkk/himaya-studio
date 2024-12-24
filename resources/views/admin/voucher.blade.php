@extends('admin.layouts.app')

@section('title')
    Manage Vouchers
@endsection

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3>Voucher Management</h3>
                    <p class="text-subtitle text-muted">Create, Edit, and Manage Vouchers</p>
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
                                    Voucher Management
                                </h5>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                    data-bs-target=".add-voucher-modal">
                                    Add New Voucher
                                </button>
                            </div>
                            <table id="table-1" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Voucher Name</th>
                                        <th>Code</th>
                                        <th>Discount (%)</th>
                                        <th>Max Discount</th>
                                        <th>Min Payment</th>
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
        </section>

        <!-- Add Voucher Modal -->
        <div class="modal fade add-voucher-modal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form id="form_store_voucher">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Voucher</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="voucher_name">Voucher Name</label>
                                <input type="text" class="form-control" id="voucher_name" name="voucher_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="voucher_code">Voucher Code</label>
                                <input type="text" class="form-control" id="voucher_code" name="voucher_code" required>
                            </div>
                            <div class="mb-3">
                                <label for="disc_percentage">Discount Percentage</label>
                                <input type="number" class="form-control" id="disc_percentage" name="disc_percentage"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="max_disc">Max Discount</label>
                                <input type="number" class="form-control" id="max_disc" name="max_disc" required>
                            </div>
                            <div class="mb-3">
                                <label for="minimum_payments">Minimum Payments</label>
                                <input type="number" class="form-control" id="minimum_payments" name="minimum_payments"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="ACTIVE">ACTIVE</option>
                                    <option value="INACTIVE">INACTIVE</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Save</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Voucher Modal -->
        <div class="modal fade edit-voucher-modal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form id="form_update_voucher">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Voucher</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" id="edit_voucher_modal_id">

                            <div class="mb-3">
                                <label for="edit_voucher_name">Voucher Name</label>
                                <input type="text" class="form-control" id="edit_voucher_name" name="voucher_name"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_voucher_code">Voucher Code</label>
                                <input type="text" class="form-control" id="edit_voucher_code" name="voucher_code"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_disc_percentage">Discount Percentage</label>
                                <input type="number" class="form-control" id="edit_disc_percentage"
                                    name="disc_percentage" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_max_disc">Max Discount</label>
                                <input type="number" class="form-control" id="edit_max_disc" name="max_disc" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_minimum_payments">Minimum Payments</label>
                                <input type="number" class="form-control" id="edit_minimum_payments"
                                    name="minimum_payments" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_status">Status</label>
                                <select class="form-control" id="edit_status" name="status">
                                    <option value="ACTIVE">ACTIVE</option>
                                    <option value="INACTIVE">INACTIVE</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Save</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            function formatToIndonesianCurrency(number) {
                // Force the number to an integer by rounding down
                const integerNumber = Math.floor(Number(number));
                return 'Rp ' + integerNumber.toLocaleString('id-ID', {
                    minimumFractionDigits: 0
                });
            }
            const params = {
                idTable: '#table-1',
                urlAjax: "{{ route('voucher.index') }}",
                pdf: 'not_print',
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'voucher_name'
                    },
                    {
                        data: 'voucher_code'
                    },
                    {
                        data: 'disc_percentage'
                    },
                    {
                        data: 'max_disc'
                    },
                    {
                        data: 'minimum_payments'
                    },
                    {
                        data: 'status'
                    },
                    {
                        data: 'id'
                    }
                ],
                defColumn: [{
                        targets: [0],
                        render: (data, type, row, meta) => meta.row + 1
                    },
                    {
                        targets: [4], // max_disc column
                        render: (data) => formatToIndonesianCurrency(data)
                    },
                    {
                        targets: [5], // minimum_payments column
                        render: (data) => formatToIndonesianCurrency(data)
                    },
                    {
                        targets: [7],
                        render: (data, type, full, meta) => `
                        <a href="#" class="btn btn-warning btn-edit" data-id="${data}" data-full='${JSON.stringify(full)}'>Edit</a>
                        <a href="#" class="btn btn-danger btn-delete" data-delete-url="/voucher/${data}" onclick="return deleteConfirm(this, 'DELETE')">Delete</a>
                    `
                    }
                ]
            };

            loadAjaxDataTables(params);

            $(document).on('click', '.btn-edit', function(e) {
                e.preventDefault();

                // Parse the full data from the button's data-full attribute
                const voucher = $(this).data('full');
                // console.log(voucher.id)
                // const voucher = JSON.parse(voucherData);

                // Populate the modal fields with voucher data
                $('#edit_voucher_modal_id').val(voucher.id);
                $('#edit_voucher_name').val(voucher.voucher_name);
                $('#edit_voucher_code').val(voucher.voucher_code);
                $('#edit_disc_percentage').val(voucher.disc_percentage);
                $('#edit_max_disc').val(voucher.max_disc);
                $('#edit_minimum_payments').val(voucher.minimum_payments);
                $('#edit_status').val(voucher.status);

                // Show the modal
                $('.edit-voucher-modal').modal('show');
            });

            $('#form_store_voucher').on('submit', function(e) {
                e.preventDefault();
                ajaxSaveDatas({
                    url: "{{ route('voucher.store') }}",
                    method: 'POST',
                    input: $(this).serialize(),
                    // reload: true
                });
            });

            $('#form_update_voucher').on('submit', function(e) {
                e.preventDefault();

                const voucherId = $('#edit_voucher_modal_id').val();
                // console.log(voucherId)

                ajaxSaveDatas({
                    url: `{{ route('voucher.update', ':id') }}`.replace(':id',
                        voucherId), // Dynamically replace ID
                    method: 'PUT', // HTTP method for updating
                    input: $(this).serialize(), // Serialize form data
                    reload: true // Reload the DataTable on success
                });
            });


        });
    </script>
@endsection
