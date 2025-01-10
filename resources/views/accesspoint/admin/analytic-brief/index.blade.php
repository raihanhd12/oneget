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
                                    <th>Social Media</th>
                                    <th>Status</th>
                                    <th>Time Sent</th>
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
        @include('accesspoint.admin.analytic-brief.show')
        @include('accesspoint.admin.analytic-brief.edit')
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
                ajax: "{{ route('admin.analytic-brief.index') }}",
                columns: [{
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'socialmedia',
                        name: 'socialmedia',
                        render: function(data, type, full, meta) {
                            if (data = 'App\Models\Tiktok') {
                                return '<span class="badge bg-dark">Tiktok</span>';
                            } else if (data = 'App\Models\Instagram') {
                                return '<span class="badge bg-warning">Instagram</span>';
                            } else if (data = 'App\Models\Facebook') {
                                return '<span class="badge bg-info">Facebook</span>';
                            }
                        }
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function(data, type, full, meta) {
                            if (data === 'PENDING') {
                                return '<span class="badge bg-info">PENDING</span>';
                            } else if (data === 'UNDER REVIEW') {
                                return '<span class="badge bg-warning">UNDER REVIEW</span>';
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
        $(document).on('click', '.delete-analytic-brief', function() {
            var analyticBriefId = $(this).data('analytic-brief-id');
            var firstName = $(this).data('first-name'); // Ambil nama pengguna dari atribut data
            var lastName = $(this).data('last-name'); // Ambil nama pengguna dari atribut data

            // Konfirmasi penghapusan pengguna dengan nama lengkap
            if (confirm('Are you sure you want to delete analytic brief ' + firstName + ' ' + lastName + '?')) {
                console.log("URL: ", "{{ route('admin.analytic-brief.destroy', ':id') }}".replace(':id',
                    analyticBriefId));

                // Lakukan permintaan AJAX untuk menghapus pengguna
                $.ajax({
                    url: "{{ route('admin.analytic-brief.destroy', ':id') }}".replace(':id',
                        analyticBriefId),
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
                            alert('Failed to delete Analytic Brief.');
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
        $(document).on('click', '.show-analytic-brief', function() {
            var Id = $(this).data('id');
            var firstName = $(this).data('first-name');
            var lastName = $(this).data('last-name');
            var email = $(this).data('email');
            var socialMedia = $(this).data('social-media');
            var judul = $(this).data('judul');
            var status = $(this).data('status');
            var feedback = $(this).data('feedback');
            var periode = $(this).data('periode');
            var created_at = $(this).data('created_at');
            var updated_at = $(this).data('updated_at');

            if (socialMedia = 'App\Models\Tiktok') {
                socialMedia = 'Tiktok';
            } else if (socialMedia = 'App\Models\Instagram') {
                socialMedia = 'Instagram';
            } else if (socialMedia = 'App\Models\Facebook') {
                socialMedia = 'Facebook';
            }

            // Mengisi nilai input dalam modal dengan data yang sesuai
            $('#first_name').val(firstName);
            $('#last_name').val(lastName);
            $('#email').val(email);
            $('#social_media').val(socialMedia);
            $('#judul').val(judul);
            $('#status').text(status);
            $('#feedback').val(feedback);
            $('#periode').val(periode);
            $('#created_at').val(created_at);
            $('#updated_at').val(updated_at);
            $('#backDropModal').modal('show');
        });
    </script>
    <script>
        $(document).on('click', '.edit-analytic-brief', function() {
            var analyticBriefId = $(this).data('id');
            var status = $(this).data('status');
            var feedback = $(this).data('feedback');
            console.log(analyticBriefId, status, feedback);

            // Mengisi nilai input dalam modal dengan data yang sesuai
            $('#status_edit').text(status);
            $('#feedback_edit').val(feedback);

            // Mengatur nilai default pada select berdasarkan status_edit
            $('#floatingSelectFilled').val(status);

            var updatedDate = new Date(updated_at);
            var formattedDate = moment(updatedDate).format('dddd, DD-MM-YYYY | HH:mm A');
            $('#html5-datetime-local-input').val(formattedDate);

            // Mengatur warna badge berdasarkan status
            if (status === 'UNDER REVIEW') {
                $('#status_edit').removeClass('badge bg-info').addClass('badge bg-warning');
            } else if (status === 'COMPLETED') {
                $('#status_edit').removeClass('badge bg-info').addClass('badge bg-success');
            } else if (status === 'REJECTED') {
                $('#status_edit').removeClass('badge bg-info').addClass('badge bg-danger');
            }

            // Mengatur URL untuk mengirim permintaan AJAX ke endpoint update
            var updateUrl = "{{ route('admin.analytic-brief.update', ':id') }}".replace(':id', analyticBriefId);
            $('#editForm').attr('action', updateUrl);

            // Menampilkan modal
            $('#modalCenter').modal('show');
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
@endsection
