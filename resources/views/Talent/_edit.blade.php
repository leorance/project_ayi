@extends('Layouts._master')
@section('head-custom')
    
@endsection
@section('content')
<h3 class="mt-3 mb-3">Edit talent</h3>
<div class="card col-sm-6">
  <div class="card-header pt-3 pb -4">
      <h5>Data talent</h5>
  </div>
  <div class="card-body">
    <form action="{{url('talent/edit/'.$data->id)}}" method="post">
    @csrf
        <div class="mb-3 col-9">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->nama_talent}}">
        </div>
        <div class="mb-3 col-9 d-none">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->id}}">
        </div>
        <div class="pt-3">
            <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
    </form>
  </div>
</div>
@endsection
@section('script-custom')
    
@endsection