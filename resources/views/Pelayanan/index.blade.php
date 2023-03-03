@extends('Layouts._master')
@section('content')
    <?php
    $x = 3;
    ?>
    <div class="card mt-4">
        <div class="card-header">
            <div class="row">
                <div class="col h5">
                    <div class="row">
                        <div class="col h5">Jadwal Pelayanan</div>
                        <div class="col text-right"><a href="{{route("formPelayanan")}}" class="btn btn-primary">ADD NEW</a></div>
                    </div>
                </div>
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
            <div class="row ml-1">
                <div class="col-3 form-group">
                    <input type="date" name="" class="form-control">
                </div>
                <div class="col-3">
                    <a href="" class="btn btn-primary">Filter</a>
                </div>
            </div>
            @for ($i = 0; $i < $x; $i++)
                <div class="accordion accordion-flush" id="accordionFlushExample{{ $i }}">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse{{ $i }}" aria-expanded="false"
                                aria-controls="flush-collapse{{ $i }}">
                                Accordion Item {{ $i }}
                            </button>
                        </h2>
                        <div id="flush-collapse{{ $i }}" class="accordion-collapse collapse"
                            aria-labelledby="flush-heading{{ $i }}"
                            data-bs-parent="#accordionFlushExample{{ $i }}">
                            <div class="container mt-4">
                                <ul class="nav nav-tabs" id="myTab{{ $i }}" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab{{ $i }}"
                                            data-bs-toggle="tab" data-bs-target="#home-tab-pane{{ $i }}"
                                            type="button" role="tab" aria-controls="home-tab-pane"
                                            aria-selected="true">{{ $i }}</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent{{ $i }}">
                                    <div class="tab-pane fade show active" id="home-tab-pane{{ $i }}"
                                        role="tabpanel" aria-labelledby="home-tab" tabindex="0">...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
