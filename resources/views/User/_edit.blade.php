@extends('Layouts._master')
@section('head-custom')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <h3 class="mt-3 mb-3">Edit User</h3>
    <div class="card col-sm-6">
        <div class="card-header pt-3 pb -4">
            <h5>Data user</h5>
        </div>
        <div class="card-body">
            <form action="{{ url('users/edit/' . $datas1->id) }}" method="post">
                @csrf
                <div class="mb-3 col-9 form-group">
                    <label for="exampleInputEmail1" class="form-label"><strong>Nama</strong></label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ $datas1->name }}">
                </div>
                <div class="mb-3 col-9 d-none">
                    <label for="exampleInputEmail1" class="form-label"><strong>Nama</strong></label>
                    <input type="text" name="id" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ $datas1->id }}">
                </div>
                <div class="mb-3 col-9 form-group">
                    <label for=""><strong>Nama Talent</strong></label>
                    <?php
                    $talent = explode(',', $datas1->id_talent);
                    ?>
                    <select class="js-example-basic-multiple form-control" name="id_talent[]" multiple="multiple" required>
                        @foreach ($datas2 as $data)
                            @foreach ($talent as $data2)
                                <option value="{{ $data->id }}" {{ $data2 == $data->id ? 'selected' : '' }}
                                    @endforeach
                                    >{{ $data->nama_talent }}</option>
                            @endforeach
                    </select>
                </div>
                <div class="pt-3">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script-custom')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(".js-example-basic-multiple").select2();
    </script>
@endsection
