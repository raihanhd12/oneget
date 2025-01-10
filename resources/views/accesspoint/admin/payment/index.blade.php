@extends('accesspoint.admin.index')

@section('title', 'Contact Us ')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card p-4">
            <div class="row gy-4">
                <!-- Data Tables -->
                <div class="col-12">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover data-table">
                            <thead class="table-light">
                                <tr>
                                    <th>User</th>
                                    <th>Subscription</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/ Data Tables -->
            </div>
        </div>
        @include('accesspoint.admin.contact-us.show')
        @include('accesspoint.admin.contact-us.show-image')
        @include('accesspoint.admin.contact-us.edit')
    </div>
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
        $(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.payment.index') }}",
                columns: [{
                        data: 'user_id',
                        name: 'user_id'
                    },
                    {
                        data: 'subscription_plan_id',
                        name: 'subscription_plan_id'
                    },
                    // {
                    //     data: 'status',
                    //     name: 'status',
                    //     render: function(data, type, full, meta) {
                    //         if (data === 'ACCEPTED') {
                    //             return '<span class="badge bg-info">ACCEPTED</span>';
                    //         } else if (data === 'APPROVED') {
                    //             return '<span class="badge bg-warning">APPROVED</span>';
                    //         } else if (data === 'COMPLETED') {
                    //             return '<span class="badge bg-success">COMPLETED</span>';
                    //         } else if (data === 'REJECTED') {
                    //             return '<span class="badge bg-danger">REJECTED</span>';
                    //         }
                    //     }
                    // },
                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                        data: 'payment_status',
                        name: 'payment_status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
@endsection
