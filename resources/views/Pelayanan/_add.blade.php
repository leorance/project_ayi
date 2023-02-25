@extends('Layouts._master')
@section('head-custom')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <h3 class="mt-3 mb-3">Tambah Pelayanan</h3>
    <div class="card">
        <div class="card-header pt-3 pb -4">
            <h5>Form Pelayanan</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('storePelayanan') }}" method="POST" enctype='multipart/form-data'>
                @csrf
                <div class="row form-group">
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for=""><strong>Kelas</strong></label>
                            <select class="form-control select" name="kelas">
                                <option value="0"> -- Pilih Kelas -- </option>
                                <option value="Kelas A">Kelas A</option>
                                <option value="Kelas B">Kelas B</option>
                                <option value="Kelas C">Kelas C</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>Sesi</strong></label>
                            <select class="form-control select" name="sesi">
                                <option value="0"> -- Pilih Sesi -- </option>
                                <option value="Sesi 1">Sesi 1</option>
                                <option value="Sesi 2">Sesi 2</option>
                                <option value="Sesi 3">Sesi 3</option>
                            </select>
                        </div>
                        <label for=""><strong>Tanggal</strong></label>
                        <input type="date" class="form-control" name="date" id="">
                    </div>
                </div>
                <hr>
                <div class="row form-group">
                    <div class="col">
                        <div class="mb-3">
                            <label for=""><strong>Gitar</strong></label>
                            <select class="form-control select" name="gitar">
                                <option value="0"> -- Pilih -- </option>
                                @foreach ($gitars as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3" id="musik2">
                            <label for=""><strong>Drummer</strong></label>
                            <select class="form-control select" name="drummer">
                                <option value="0"> -- Pilih -- </option>
                                @foreach ($drummers as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3" id="musik1">
                            <label for=""><strong>Keyboard</strong></label>
                            <select class="form-control select" name="keyboard">
                                <option value="0"> -- Pilih -- </option>
                                @foreach ($keyboards as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>Operator Sound</strong></label>
                            <select class="form-control select" name="sound">
                                <option value="0"> -- Pilih -- </option>
                                @foreach ($sounds as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>Operator Multimedia</strong></label>
                            <select class="form-control select" name="mulmed">
                                <option value="0"> -- Pilih -- </option>
                                @foreach ($mulmeds as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>Pemimpin Pujian</strong></label>
                            <select class="form-control select" name="wl">
                                <option value="0"> -- Pilih -- </option>
                                @foreach ($wls as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col form-group">
                        <div class="mb-3">
                            <label for=""><strong>Pembawa Firman</strong></label>
                            <select class="form-control select" name="firman">
                                <option value="0"> -- Pilih -- </option>
                                @foreach ($firmans as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>Asisten</strong></label>
                            <select class="form-control select" name="asisten">
                                <option value="0"> -- Pilih -- </option>
                                @foreach ($datas as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>Pendoa</strong></label>
                            <select class="form-control select" name="pendoa">
                                <option value="0"> -- Pilih -- </option>
                                @foreach ($datas as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>Absensi</strong></label>
                            <select class="form-control select" name="absensi">
                                <option value="0"> -- Pilih -- </option>
                                @foreach ($datas as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>Singer</strong></label>
                            <select class="form-control select" name="singer[]" multiple="multiple">
                                <option value="0"> -- Pilih -- </option>
                                @foreach ($datas as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for=""><strong>Usher</strong></label>
                            <select class="form-control select" name="usher[]" multiple="multiple">
                                @foreach ($datas as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="row">
                        <div class="col-2">
                            <button type="button" onclick="window.history.go(-1)" class="btn btn-secondary">Back</button>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary">Tambahkan data</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script-custom')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(".select").select2();
        $('select[name="kelas"]').on('change', function() {
            var id = $(this).val();
            console.log(id);
            if (id == "Kelas A") {
                $('#musik1').addClass('d-none');
                $('#musik2').addClass('d-none');
            } else if (id == "Kelas B") {
                $('#musik1').addClass('d-none');
                $('#musik2').addClass('d-none');
            } else {
                $('#musik1').removeClass('d-none');
                $('#musik2').removeClass('d-none');
            }
        });
        $('select').on('change', function() {
            // Find the value we just chose
            let selected = $(this).val();

            // Find the select which was not just changed
            let $otherSelect = $('select').not($(this));
            // console.log(otherSelect);
            // First unselect anything selected from the other select

            // Re-display everything from the other select
            $('option', $otherSelect).show();

            // Hide the currently selected option from the other select
            $('option[value="' + selected + '"]', $otherSelect).remove();
        });
    </script>
@endsection
