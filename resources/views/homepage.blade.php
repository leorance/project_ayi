@extends('Layouts._master')
@section('head-custom')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
@endsection
@section('content')
    <?php
    $x = 3;
    ?>
    <div class="card mt-4">
        <div class="card-header">
            <div class="row">
                <div class="col h5">
                        <div>Jadwal Pelayanan</div>
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
            <div class="accordion accordion-flush" id="accordionFlushExamplea">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapsea" aria-expanded="false" aria-controls="flush-collapsea">
                            Kelas A
                        </button>
                    </h2>
                    <div id="flush-collapsea" class="accordion-collapse collapse" aria-labelledby="flush-headinga"
                        data-bs-parent="#accordionFlushExamplea">
                        <div class="container mt-4">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active mb-3" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Sesi 1</button>
                                    <button class="nav-link mb-3" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Sesi 2</button>
                                    <button class="nav-link mb-3" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false">Sesi 3</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab" tabindex="0">
                                    <table class="table table-striped" id="example">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Talent</th>
                                                <th scope="col">Pelayan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            ?>
                                            @foreach ($pel11 as $data11)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $data11->nama_talent }}</td>
                                                    <td>{{ $data11->name ?? '-' }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab" tabindex="0">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Talent</th>
                                                <th scope="col">Pelayan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            ?>
                                            @foreach ($pel12 as $data12)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $data12->nama_talent }}</td>
                                                    <td>{{ $data12->name ?? '-' }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab" tabindex="0">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Talent</th>
                                                <th scope="col">Pelayan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            ?>
                                            @foreach ($pel13 as $data13)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $data13->nama_talent }}</td>
                                                    <td>{{ $data13->name ?? '-' }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExampleb">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseb" aria-expanded="false" aria-controls="flush-collapseb">
                            Kelas B
                        </button>
                    </h2>
                    <div id="flush-collapseb" class="accordion-collapse collapse" aria-labelledby="flush-headingb"
                        data-bs-parent="#accordionFlushExampleb">
                        <div class="container mt-4">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-homea1-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-homea1" type="button" role="tab"
                                        aria-controls="nav-homea1" aria-selected="true">Sesi 1</button>
                                    <button class="nav-link" id="nav-profileb2-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profileb2" type="button" role="tab"
                                        aria-controls="nav-profileb2" aria-selected="false">Sesi 2</button>
                                    <button class="nav-link" id="nav-contactc3-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contactc3" type="button" role="tab"
                                        aria-controls="nav-contactc3" aria-selected="false">Sesi 3</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-homea1" role="tabpanel"
                                    aria-labelledby="nav-homea1-tab" tabindex="0">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Talent</th>
                                                <th scope="col">Pelayan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            ?>
                                            @foreach ($pel21 as $data21)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $data21->nama_talent }}</td>
                                                    <td>{{ $data21->name ?? '-' }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-profileb2" role="tabpanel"
                                    aria-labelledby="nav-profileb2-tab" tabindex="0">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Talent</th>
                                                <th scope="col">Pelayan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            ?>
                                            @foreach ($pel22 as $data22)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $data22->nama_talent }}</td>
                                                    <td>{{ $data22->name ?? '-' }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-contactc3" role="tabpanel"
                                    aria-labelledby="nav-contactc3-tab" tabindex="0">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Talent</th>
                                                <th scope="col">Pelayan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            ?>
                                            @foreach ($pel23 as $data23)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $data23->nama_talent }}</td>
                                                    <td>{{ $data23->name ?? '-' }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExamplec">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapsec" aria-expanded="false" aria-controls="flush-collapsec">
                            Kelas C
                        </button>
                    </h2>
                    <div id="flush-collapsec" class="accordion-collapse collapse" aria-labelledby="flush-headingc"
                        data-bs-parent="#accordionFlushExamplec">
                        <div class="container mt-4">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-homea2-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-homea2" type="button" role="tab"
                                        aria-controls="nav-homea2" aria-selected="true">Sesi 1</button>
                                    <button class="nav-link" id="nav-profileb3-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profileb3" type="button" role="tab"
                                        aria-controls="nav-profileb3" aria-selected="false">Sesi 2</button>
                                    <button class="nav-link" id="nav-contactc4-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contactc4" type="button" role="tab"
                                        aria-controls="nav-contactc4" aria-selected="false">Sesi 3</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-homea2" role="tabpanel"
                                    aria-labelledby="nav-homea2-tab" tabindex="0">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Talent</th>
                                                <th scope="col">Pelayan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            ?>
                                            @foreach ($pel31 as $data31)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $data31->nama_talent }}</td>
                                                    <td>{{ $data31->name ?? '-' }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-profileb3" role="tabpanel"
                                    aria-labelledby="nav-profileb3-tab" tabindex="0">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Talent</th>
                                                <th scope="col">Pelayan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            ?>
                                            @foreach ($pel32 as $data32)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $data32->nama_talent }}</td>
                                                    <td>{{ $data32->name ?? '-' }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-contactc4" role="tabpanel"
                                    aria-labelledby="nav-contactc4-tab" tabindex="0">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Talent</th>
                                                <th scope="col">Pelayan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            ?>
                                            @foreach ($pel33 as $data33)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $data33->nama_talent }}</td>
                                                    <td>{{ $data33->name ?? '-' }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('script-custom')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection
@endsection
