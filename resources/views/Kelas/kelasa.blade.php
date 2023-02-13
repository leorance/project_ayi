@extends('Layouts._master')
@section('head-custom')
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
<div class="row">
  <div class="col">
    <h3 class="mt-3 mb-3">Pelayanan 
      @foreach ($pelayanans as $item)
          {{$item->sesi}}
      @endforeach
    </h3>
  </div>
  <div class="col">
    <h3 class="mt-3 mb-3 text-right">
      @foreach ($pelayanans as $item)
          {{$item->tanggal}}
      @endforeach
    </h3>
  </div>
</div>
<div class="card">
  <div class="card-header pt-3 pb -4">
      <h5>Pelayanan lists</h5>
  </div>
  <div class="card-body">
    @if(session('errors'))
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
    <div class="row">
      <div class="form-group col-sm-3">
        <input type="date" class="form-control">
      </div>
      <div class="form-group col-sm-3">
        <button type="button" class="btn btn-primary form-control">Filter</button>
      </div>
    </div>
    <table class="table table-striped" id="data-table">
        <thead>
          <tr>
            <th>#</th>
            <th>Talent</th>
            <th>Nama Pelayan</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1 ?>
          @foreach ($talents as $data)
          <tr>
            <td class="text-left">{{$no++}}</td>
            <td class="text-left w-full">{{$data->nama_talent}}</td>
            <td class="text-left w-full">
              @foreach ($pelayanans as $item)
                <?php 
                  if($data->id == 1){
                    foreach ($users as $key) {
                      if ($key->id == $item->drummer) {
                        echo $key->name;  
                      }
                    }
                  } else if ($data->id == 2) {
                    foreach ($users as $key) {
                      if ($key->id == $item->asisten) {
                        echo $key->name;  
                      }
                    }
                  } else if ($data->id == 3) {
                    foreach ($users as $key) {
                      if ($key->id == $item->pendoa) {
                        echo $key->name;  
                      }
                    }
                  } else if ($data->id == 4) {
                    foreach ($users as $key) {
                      if ($key->id == $item->absensi) {
                        echo $key->name;  
                      }
                    }
                  } else if ($data->id == 5) {
                    foreach ($users as $key) {
                      if ($key->id == $item->keyboard) {
                        echo $key->name;  
                      }
                    }
                  } else if ($data->id == 6) {
                    foreach ($users as $key) {
                      if ($key->id == $item->gitar) {
                        echo $key->name;
                      }
                    }
                  } else if ($data->id == 7) {
                    foreach ($users as $key) {
                      if ($key->id == $item->sound) {
                        echo $key->name;  
                      }
                    }
                  } else if ($data->id == 8) {
                    foreach ($users as $key) {
                      if ($key->id == $item->mulmed) {
                        echo $key->name;  
                      }
                    }
                  } else if ($data->id == 9) {
                    foreach ($users as $key) {
                      if ($key->id == $item->wl) {
                        echo $key->name;  
                      }
                    }
                  } else if ($data->id == 10) {
                    foreach ($users as $key) {
                      if ($key->id == $item->firman) {
                        echo $key->name;  
                      }
                    }
                  } else if ($data->id == 11) {
                    $x = explode(',', $item->singer);
                    for ($i=0; $i < count($x); $i++) { 
                      foreach ($users as $key) {
                        if ($x[$i] == $key->id) {
                          echo ' '.$key->name.',';
                        }
                      }
                    }
                  } else if ($data->id == 12) {
                    $x = explode(',', $item->usher);
                    for ($i=0; $i < count($x); $i++) { 
                      foreach ($users as $key) {
                        if ($x[$i] == $key->id) {
                          echo ' '.$key->name.',';
                        }
                      }
                    }
                  }
                ?>
              @endforeach
            </td>
            <td class="text-left">
              <a href="{{url("talent/edit/$data->id")}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>
</div>
@endsection
@section('script-custom')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script>
  $(document).ready(function () {
    $('#data-table').DataTable();
});
</script>
@endsection