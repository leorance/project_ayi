@extends('Layouts._master')
@section('head-custom')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
@endsection
@section('content')
    <h3 class="mt-3 mb-3">Report Pelayanan</h3>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col h5">List Jemaat Pelayan</div>
                {{-- <div class="col text-right"><a href="{{ route('formUsers') }}" class="btn btn-primary">ADD NEW</a></div> --}}
            </div>
        </div>
        <div class="card-body">
            @if (session('errors'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Something it's wrong:
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {{ Session::get('error') }}
                </div>
            @endif
            @if (!Auth::user()->ref_id)    
            <table id="data-table" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Sesi</th>
                        <th>Kelas</th>
                        <th>Bidang Pelayanan</th>
                        <th>Nama Pelayan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    ?>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$data->sesi}}</td>
                            <td>{{$data->kelas}}</td>
                            <td>{{$data->nama_talent}}</td>
                            <td>{{$data->name ?? '-'}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <table id="data-table" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Sesi</th>
                        <th>Kelas</th>
                        <th>Bidang Pelayanan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    ?>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{date('d M, Y', strtotime($data->tanggal))}}</td>
                            <td>{{$data->sesi}}</td>
                            <td>{{$data->kelas}}</td>
                            <td>{{$data->nama_talent}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
@endsection
@section('script-custom')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script>
        $(document).ready(function() {
            var tanggal = '<?php echo $datas[0]->tanggal ?>'
            $('#data-table').DataTable({
                dom: 'Bfrtip',
                bSort: false,
                buttons: [{
                    extend: 'pdf',
                    text: 'Export Report to PDF',
                    title: 'Report Pelayanan '+moment(tanggal).format('(DD MMM, YYYY)')+''
                }, ],
            });
        });
    </script>
@endsection
