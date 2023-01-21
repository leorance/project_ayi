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
    <div class="row form-group">
        <div class="col-sm-4">
            <div class="mb-3">
                <label for=""><strong>Kelas</strong></label>
                <select class="form-control select" name="kelas">
                    <option value="0"> -- Pilih Kelas -- </option>
                    <option value="1">Kelas A</option>
                    <option value="2">Kelas B</option>
                    <option value="3">Kelas C</option>
                </select>
            </div>
            <div class="mb-3">
                <label for=""><strong>Sesi</strong></label>
                <select class="form-control select" name="sesi">
                    <option value="0"> -- Pilih Sesi -- </option>
                    <option value="1">Sesi 1</option>
                    <option value="2">Sesi 2</option>
                    <option value="3">Sesi 3</option>
                </select>
            </div>
            <label for=""><strong>Tanggal</strong></label>
            <input type="date" class="form-control" name="" id="" >
        </div>
    </div>
    <hr>
    <div class="row form-group">
        <div class="col">
            <div class="mb-3">
                <label for=""><strong>Gitar</strong></label>
                <select class="form-control select" name="id_talent">
                    <option value="0"> -- Pilih -- </option>
                    <option value="1">Sesi 1</option>
                    <option value="2">Sesi 2</option>
                    <option value="3">Sesi 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for=""><strong>Drummer</strong></label>
                <select class="form-control select" name="state">
                    <option value="0"> -- Pilih -- </option>
                    <option value="1">Sesi 1</option>
                    <option value="2">Sesi 2</option>
                    <option value="3">Sesi 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for=""><strong>Keyboard</strong></label>
                <select class="form-control select" name="state">
                    <option value="0"> -- Pilih -- </option>
                    <option value="1">Sesi 1</option>
                    <option value="2">Sesi 2</option>
                    <option value="3">Sesi 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for=""><strong>Operator Sound</strong></label>
                <select class="form-control select" name="state">
                    <option value="0"> -- Pilih -- </option>
                    <option value="1">Sesi 1</option>
                    <option value="2">Sesi 2</option>
                    <option value="3">Sesi 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for=""><strong>Operator Multimedia</strong></label>
                <select class="form-control select" name="state">
                    <option value="0"> -- Pilih -- </option>
                    <option value="1">Sesi 1</option>
                    <option value="2">Sesi 2</option>
                    <option value="3">Sesi 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for=""><strong>Pemimpin Pujian</strong></label>
                <select class="form-control select" name="state">
                    <option value="0"> -- Pilih -- </option>
                    <option value="1">Sesi 1</option>
                    <option value="2">Sesi 2</option>
                    <option value="3">Sesi 3</option>
                </select>
            </div>
        </div>
        <div class="col form-group">
            <div class="mb-3">
                <label for=""><strong>Pembawa Firman</strong></label>
                <select class="form-control select" name="state">
                    <option value="0"> -- Pilih -- </option>
                    <option value="1">Sesi 1</option>
                    <option value="2">Sesi 2</option>
                    <option value="3">Sesi 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for=""><strong>Singer</strong></label>
                <select class="form-control select" name="states[]" multiple="multiple">
                    <option value="0"> -- Pilih -- </option>
                    <option value="1">Sesi 1</option>
                    <option value="2">Sesi 2</option>
                    <option value="3">Sesi 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for=""><strong>Usher</strong></label>
                <select class="form-control select" name="states[]" multiple="multiple">
                    <option value="0"> -- Pilih -- </option>
                    <option value="1">Sesi 1</option>
                    <option value="2">Sesi 2</option>
                    <option value="3">Sesi 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for=""><strong>Asisten</strong></label>
                <select class="form-control select" name="state">
                    <option value="0"> -- Pilih -- </option>
                    <option value="1">Sesi 1</option>
                    <option value="2">Sesi 2</option>
                    <option value="3">Sesi 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for=""><strong>Pendoa</strong></label>
                <select class="form-control select" name="state">
                    <option value="0"> -- Pilih -- </option>
                    <option value="1">Sesi 1</option>
                    <option value="2">Sesi 2</option>
                    <option value="3">Sesi 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for=""><strong>Absensi</strong></label>
                <select class="form-control select" name="state">
                    <option value="0"> -- Pilih -- </option>
                    <option value="1">Sesi 1</option>
                    <option value="2">Sesi 2</option>
                    <option value="3">Sesi 3</option>
                </select>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
@section('script-custom')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(".select").select2();
    $('select[name="country"]').on('change', function(){    
        alert($(this).val());
    });
</script>
@endsection