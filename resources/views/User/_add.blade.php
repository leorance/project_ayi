@extends('Layouts._master')
@section('head-custom')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <div class="row">
        <div class="col-5">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>User add</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('addUser')}}" method="post">
                        @csrf
                        <div class="mb-3 col-9 form-group">
                            <label><strong>Nama</strong></label>
                            <input type="text" name="name" class="form-control"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 col-9 form-group">
                            <label for=""><strong>Nama Talent</strong></label>
                            <select class="js-example-basic-multiple form-control" name="id_talent[]" multiple="multiple"
                                required>
                                @foreach ($datas2 as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_talent }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="ml-3 mt-4">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script-custom')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(".js-example-basic-multiple").select2();
    </script>
@endsection
