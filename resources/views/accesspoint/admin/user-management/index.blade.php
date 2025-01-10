@extends('accesspoint.admin.index')

@section('title', 'User Management')

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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Time Register</th>
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
        @include('accesspoint.admin.user-management.create')
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
                ajax: "{{ route('admin.user.index') }}",
                columns: [{
                        data: 'firstName',
                        name: 'firstName'
                    },
                    {
                        data: 'lastName',
                        name: 'lastName'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'role',
                        name: 'role',
                        render: function(data, type, full, meta) {
                            if (data === 'admin') {
                                return '<span class="badge bg-primary">Admin</span>';
                            } else {
                                // Tampilkan data peran lainnya atau pesan jika peran bukan "admin"
                                return '<span class="badge bg-secondary">User</span>';
                            }
                        }
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'email_verified_at',
                        name: 'email_verified_at',
                        render: function(data, type, full, meta) {
                            // Jika email_verified_at ada, tampilkan badge "Active", jika tidak, tampilkan badge "Not Active"
                            return data ?
                                '<td><span class="badge rounded-pill bg-label-success me-1">Active</span></td>' :
                                '<td><span class="badge rounded-pill bg-label-danger me-1">Not Active</span></td>';
                        }
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

        });
    </script>
    <script>
        $(document).on('click', '.delete-user', function() {
            var userId = $(this).data('user-id'); // Ambil ID pengguna dari atribut data
            var firstName = $(this).data('first-name'); // Ambil nama pengguna dari atribut data
            var lastName = $(this).data('last-name'); // Ambil nama pengguna dari atribut data

            // Konfirmasi penghapusan pengguna dengan nama lengkap
            if (confirm('Are you sure you want to delete user ' + firstName + ' ' + lastName + '?')) {
                // Lakukan permintaan AJAX untuk menghapus pengguna
                $.ajax({
                    url: "{{ route('admin.user.destroy', ':id') }}".replace(':id', userId),
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            alert(response.message);

                            // Use DataTables API to remove the row
                            var table = $('.data-table').DataTable();
                            table.row($row).remove().draw(); // Remove the row and redraw the table
                        } else {
                            alert('Failed to delete contact Us.');
                        }
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        // Tangani kesalahan jika diperlukan
                        alert('Error: ' + errorThrown);
                    }
                });
            }
        });
    </script>
@endsection
