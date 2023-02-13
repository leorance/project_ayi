@extends('Layouts._master')
@section('content')
    <div class="row">
        <div class="col">
            <h3 class="mt-3 mb-3 text-left">Jadwal Pelayanan</h3>
        </div>
        <div class="col">
            <h3 class="mt-3 mb-3 text-right">
                <?php
                $now = date('F jS, Y');
                ?>
                {{ $now }}
            </h3>
        </div>
    </div>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Sesi 1
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <h1>Kelas A</h1>
                                <table>
                                    <tr>
                                        <td>{{ $talents[0]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->drummer == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[1]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->asisten == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[2]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->pendoa == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[3]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->absensi == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[4]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->keyboard == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[5]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->gitar == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[6]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->sound == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[7]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->mulmed == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[8]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->wl == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[9]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->firman == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[10]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                <?php
                                                $pel11 = explode(',', $pelayanan11[0]->singer);
                                                ?>
                                                @for ($i = 0; $i < count($pel11); $i++)
                                                    @if ($pel11[$i] == $data->id)
                                                        [{{ $data->name }}]
                                                    @endif
                                                @endfor
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[11]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                <?php
                                                $pel11 = explode(',', $pelayanan11[0]->usher);
                                                ?>
                                                @for ($i = 0; $i < count($pel11); $i++)
                                                    @if ($pel11[$i] == $data->id)
                                                        [{{ $data->name }}]
                                                    @endif
                                                @endfor
                                            @endforeach
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-4">
                                <h1>Kelas B</h1>
                                <table>
                                    <tr>
                                        <td>{{ $talents[0]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan21[0]->drummer == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[1]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan21[0]->asisten == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[2]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan21[0]->pendoa == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[3]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan21[0]->absensi == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[4]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan21[0]->keyboard == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[5]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan21[0]->gitar == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[6]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan21[0]->sound == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[7]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan21[0]->mulmed == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[8]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan21[0]->wl == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[9]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan21[0]->firman == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[10]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                <?php
                                                $pel11 = explode(',', $pelayanan21[0]->singer);
                                                ?>
                                                @for ($i = 0; $i < count($pel11); $i++)
                                                    @if ($pel11[$i] == $data->id)
                                                        [{{ $data->name }}]
                                                    @endif
                                                @endfor
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[11]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                <?php
                                                $pel11 = explode(',', $pelayanan21[0]->usher);
                                                ?>
                                                @for ($i = 0; $i < count($pel11); $i++)
                                                    @if ($pel11[$i] == $data->id)
                                                        [{{ $data->name }}]
                                                    @endif
                                                @endfor
                                            @endforeach
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-4">
                                <h1>Kelas C</h1>
                                <table>
                                    <tr>
                                        <td>{{ $talents[0]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->drummer == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[1]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->asisten == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[2]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->pendoa == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[3]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->absensi == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[4]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->keyboard == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[5]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->gitar == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[6]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->sound == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[7]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->mulmed == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[8]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->wl == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[9]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                @if ($pelayanan11[0]->firman == $data->id)
                                                    {{ $data->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[10]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                <?php
                                                $pel11 = explode(',', $pelayanan11[0]->singer);
                                                ?>
                                                @for ($i = 0; $i < count($pel11); $i++)
                                                    @if ($pel11[$i] == $data->id)
                                                        [{{ $data->name }}]
                                                    @endif
                                                @endfor
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $talents[11]->nama_talent }}</td>
                                        <td> :
                                            @foreach ($unames as $data)
                                                <?php
                                                $pel11 = explode(',', $pelayanan11[0]->usher);
                                                ?>
                                                @for ($i = 0; $i < count($pel11); $i++)
                                                    @if ($pel11[$i] == $data->id)
                                                        [{{ $data->name }}]
                                                    @endif
                                                @endfor
                                            @endforeach
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col">
                                <table>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Sesi 2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that
                            just about any HTML can go within the <code>.accordion-body</code>, though the transition does
                            limit
                            overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Sesi 3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that
                            just about any HTML can go within the <code>.accordion-body</code>, though the transition does
                            limit
                            overflow.
                        </div>
                    </div>
                </div>
            </div>
        @endsection
