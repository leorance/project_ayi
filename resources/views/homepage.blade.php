@extends('Layouts._master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col"><h3 class="mt-3 mb-3 text-left">Jadwal Pelayanan</h3></div>
    <div class="col">
      <h3 class="mt-3 mb-3 text-right">
        <?php 
          $now = date("F jS, Y");
        ?>
        {{$now}}
      </h3>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-header pt-3 pb -4">
      <h5>Rekap pelayanan</h5>
  </div>
  <div class="card-body">
    kosong
  </div>
</div>
@endsection