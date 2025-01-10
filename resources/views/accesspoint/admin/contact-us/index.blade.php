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
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th>Sent Time</th>
                                    <th>Media</th>
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
                ajax: "{{ route('admin.contact-us.index') }}",
                columns: [{
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'subject',
                        name: 'subject'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function(data, type, full, meta) {
                            if (data === 'ACCEPTED') {
                                return '<span class="badge bg-info">ACCEPTED</span>';
                            } else if (data === 'APPROVED') {
                                return '<span class="badge bg-warning">APPROVED</span>';
                            } else if (data === 'COMPLETED') {
                                return '<span class="badge bg-success">COMPLETED</span>';
                            } else if (data === 'REJECTED') {
                                return '<span class="badge bg-danger">REJECTED</span>';
                            }
                        }
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'media',
                        name: 'media',
                        orderable: false,
                        searchable: false
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
    <script>
        $(document).on('click', '.show-detail-image', function() {
            var imgUrl = $(this).find('img').attr('src');
            $('#mediaImage').attr('src', imgUrl);
            // Menampilkan modal
            $('#mediaModal').modal('show');
        });
    </script>
    <script>
        $(document).on('click', '.delete-contactUs', function() {
            var contactUsId = $(this).data('contactus-id');
            var firstName = $(this).data('first-name'); // Ambil nama pengguna dari atribut data
            var lastName = $(this).data('last-name'); // Ambil nama pengguna dari atribut data

            // Konfirmasi penghapusan pengguna dengan nama lengkap
            if (confirm('Are you sure you want to delete contactUs ' + firstName + ' ' + lastName + '?')) {
                console.log("URL: ", "{{ route('admin.contact-us.destroy', ':id') }}".replace(':id', contactUsId));

                // Lakukan permintaan AJAX untuk menghapus pengguna
                $.ajax({
                    url: "{{ route('admin.contact-us.destroy', ':id') }}".replace(':id', contactUsId),
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            alert(response.message);

                            // Hapus baris dari DataTable
                            var table = $('.data-table').DataTable();
                            var row = table.row($(this).closest('tr'));
                            row.remove().draw();

                            // Perbarui DataTable
                            table.ajax.reload();
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
    <script>
        $(document).on('click', '.show-contact-us', function() {
            var Id = $(this).data('id');
            var firstName = $(this).data('first-name');
            var lastName = $(this).data('last-name');
            var email = $(this).data('email');
            var subject = $(this).data('subject');
            var message = $(this).data('message');
            var status = $(this).data('status');
            var created_at = $(this).data('created_at');
            var updated_at = $(this).data('updated_at');
            var media = $(this).data('media');

            // Mengisi nilai input dalam modal dengan data yang sesuai
            $('#first_name').val(firstName);
            $('#last_name').val(lastName);
            $('#email').val(email);
            $('#subject').val(subject);
            $('#message').val(message);
            $('#status').text(status);
            $('#created_at').val(created_at);
            $('#updated_at').val(updated_at);
            // Mengganti src elemen gambar dengan ID mediaImage
            $('#media').attr('src', media); // media adalah URL gambar yang ingin ditampilkan
            // Menampilkan modal
            $('#backDropModal').modal('show');
        });
    </script>
    <script>
        $(document).on('click', '.edit-contact-us', function() {
            var contactId = $(this).data('id');
            var status = $(this).data('status');
            var updated_at = $(this).data('updated_at');
            console.log(contactId, status, updated_at);

            // Mengisi nilai input dalam modal dengan data yang sesuai
            $('#status_edit').text(status);
            $('#updated_at_edit').val(updated_at);

            // Mengatur nilai default pada select berdasarkan status_edit
            $('#floatingSelectFilled').val(status);

            var updatedDate = new Date(updated_at);
            var formattedDate = moment(updatedDate).format('dddd, DD-MM-YYYY | HH:mm A');
            $('#html5-datetime-local-input').val(formattedDate);

            // Mengatur warna badge berdasarkan status
            if (status === 'APPROVED') {
                $('#status_edit').removeClass('badge bg-info').addClass('badge bg-warning');
            } else if (status === 'COMPLETED') {
                $('#status_edit').removeClass('badge bg-info').addClass('badge bg-success');
            } else if (status === 'REJECTED') {
                $('#status_edit').removeClass('badge bg-info').addClass('badge bg-danger');
            }

            // Mengatur URL untuk mengirim permintaan AJAX ke endpoint update
            var updateUrl = "{{ route('admin.contact-us.update', ':id') }}".replace(':id', contactId);
            $('#editForm').attr('action', updateUrl);

            // Menampilkan modal
            $('#modalCenter').modal('show');
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
@endsection
