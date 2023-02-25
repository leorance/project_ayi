@extends('Layouts._master')
@section('content')
    <?php
        $x = 3;
    ?>
    <div class="card mt-4">
        <h5 class="card-header">Jadwal pelayanan</h5>
        <div class="card-body">
            @for ($i = 0; $i < $x; $i++)
        <div class="accordion accordion-flush" id="accordionFlushExample{{$i}}">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse{{$i}}" aria-expanded="false" aria-controls="flush-collapse{{$i}}">
                        Accordion Item {{$i}}
                    </button>
                </h2>
                <div id="flush-collapse{{$i}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$i}}"
                    data-bs-parent="#accordionFlushExample{{$i}}">
                    <div class="container mt-4">
                        <ul class="nav nav-tabs" id="myTab{{$i}}" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab{{$i}}" data-bs-toggle="tab" data-bs-target="#home-tab-pane{{$i}}"
                                    type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">{{$i}}</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent{{$i}}">
                            <div class="tab-pane fade show active" id="home-tab-pane{{$i}}" role="tabpanel" aria-labelledby="home-tab"
                                tabindex="0">...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endfor
        </div>
    </div>
@endsection
