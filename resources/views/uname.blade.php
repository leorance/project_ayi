@include('Layouts._master')
<div class="container mt-3">
    <h3>List Semua</h3>
    <div class="row">
      <div class="col-6">
        <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>nama</th>
              </tr>
            </thead>
            <tbody>
                @php
                  $i = 1;    
                @endphp
                @foreach ($datas1 as $data)
              <tr>
                <th>{{$i++}}</th>
                <td>{{$data->name ?? '-'}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
      <div class="col-6">
        <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>nama</th>
              </tr>
            </thead>
            <tbody>
                @php
                  $i = 1;    
                @endphp
                @foreach ($datas2 as $data)
              <tr>
                <th>{{$i++}}</th>
                <td>{{$data->name ?? '-'}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>nama</th>
                </tr>
              </thead>
              <tbody>
                  @php
                    $i = 1;    
                  @endphp
                  @foreach ($datas2 as $data)
                <tr>
                  <th>{{$i++}}</th>
                  <td>{{$data->name ?? '-'}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>