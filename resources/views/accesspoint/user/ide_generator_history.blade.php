@extends('layouts.dashboard')

@section('title', 'ONEGET | Ide Generator History')

@section('navbar')
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center"
        style="height: 0; margin:0" id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)" style="padding-top: 2rem">
                <i class="bx fi fi-bs-bars-sort"></i>
            </a>
        </div>
    </nav>
@endsection

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 order-0">
                <div class="card" style="background: none; box-shadow:none;">
                    <div class="d-flex align-items-end row">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-body d-flex justify-content-between align-items-center"
                                    style="padding-bottom: 0;">
                                    <h5 class="card-title text-primary" style="color: #000!important;"><a
                                            href="{{ route('ideGenerator') }}" class="nostyle-link">
                                            <i class="fi fi-bs-angle-left align-middle"
                                                style="font-size: 20px; margin-right: 25px;"></i>
                                        </a>
                                        History</h5>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-4 order-1 mt-3" style="width: 100%" id="content-box">
            <div class="row" style="padding-left: 3%; padding-right:3%;">
                @if (count($histories) > 0)
                    <div class="card overflow-hidden mb-4" style="height: 700px">
                        <div class="card-body" id="vertical-example">
                            {{-- Start here --}}
                            @foreach ($histories as $history)
                                @php
                                    $createdAt = \Carbon\Carbon::parse($history->created_at);
                                    $now = \Carbon\Carbon::now();

                                    $diffInMinutes = $createdAt->diffInMinutes($now);
                                    $diffInHours = $createdAt->diffInHours($now);
                                    $diffInDays = $createdAt->diffInDays($now);

                                    if ($diffInMinutes < 60) {
                                        $timeAgo = $diffInMinutes . ' menit yang lalu';
                                    } elseif ($diffInHours < 24) {
                                        $timeAgo = $diffInHours . ' jam yang lalu';
                                    } else {
                                        $timeAgo = $diffInDays . ' hari yang lalu';
                                    }
                                @endphp

                                <div class="card" style="box-shadow: none;">
                                    <div class="card-body d-flex justify-content-between">
                                        <div>
                                            <h5 class="card-title" id="historyKeyword">{{ $history->keyword }}</h5>
                                            <p class="card-text" id="historyResponse">{!! Str::limit($history->response, 128) !!}</p>
                                            <p class="card-text" id="timeAgo"><small
                                                    class="text-muted">{{ $timeAgo }}</small></p>
                                        </div>

                                        <a href="javascript:void(0)" id="show-history" class="btn my-auto"
                                            data-url="{{ route('ide-generator.show', $history->id) }}">
                                            <i class="fi fi-bs-eye"></i>
                                        </a>

                                        <form id="deleteForm" class="my-auto"
                                            action="{{ route('ide-generator.destroy', $history->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('Apakah anda yakin mau menghapus history ini?')"
                                                class="ms-1 p-2 btn" style="width: 48px"><i
                                                    class="fi fi-bs-trash text-danger"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="alert alert-info" role="alert">
                            Belum ada history.
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalScrollable" tabindex="-1" aria-labelledby="modalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body" id="modal-body"></div>
                <div class="modal-footer"><small id="modal-footer"></small></div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        new PerfectScrollbar(document.getElementById('vertical-example'), {
            wheelPropagation: false
        });

        function confirmDelete() {
            var result = confirm("Apakah anda yakin mau menghapus history ini?");
            return result;
        }

        $(document).ready(function() {

            $('body').on('click', '#show-history', function() {
                var historyURL = $(this).data('url');
                $.get(historyURL, function(data) {
                    $('#modalScrollable').modal('show');
                    $('#modal-title').text(data[0].keyword);
                    $('#modal-body').text(data[0].response);
                    $('#modal-footer').text(data[1]);
                })
            });

        });
    </script>
@endsection
