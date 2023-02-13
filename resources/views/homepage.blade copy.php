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
    </div>
    {{-- Kelas A --}}
    <div class="row ml-3 mr-3 mt-3 mb-3">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header pt-3 pb -4">
                    <h5>Sesi 1 (A)</h5>
                </div>
                <div class="card-body">
                    <div class="row container">
                        <div class="col">
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
                            </table>
                        </div>
                        <div class="col">
                            <table>
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
                                            @for ($i = 0;$i  < count($pel11); $i++)
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
                                            @for ($i = 0;$i  < count($pel11); $i++)
                                                @if ($pel11[$i] == $data->id)
                                                    [{{ $data->name }}]
                                                @endif
                                            @endfor
                                        @endforeach
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header pt-3 pb -4">
                    <h5>Sesi 2 (A)</h5>
                </div>
                <div class="card-body">
                    <div class="row container">
                        <div class="col">
                            <table>
                                <tr>
                                    <td>{{ $talents[0]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[1]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[2]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[3]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[4]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[5]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col">
                            <table>
                                <tr>
                                    <td>{{ $talents[6]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[7]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[8]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[9]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[10]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[11]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header pt-3 pb -4">
                    <h5>Sesi 3 (A)</h5>
                </div>
                <div class="card-body">
                    <div class="row container">
                        <div class="col">
                            <table>
                                <tr>
                                    <td>{{ $talents[0]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[1]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[2]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[3]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[4]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[5]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col">
                            <table>
                                <tr>
                                    <td>{{ $talents[6]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[7]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[8]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[9]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[10]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[11]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    {{-- Kelas B --}}
    <div class="row ml-3 mr-3 mt-3 mb-3 d-none">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header pt-3 pb -4">
                    <h5>Sesi 1 (B)</h5>
                </div>
                <div class="card-body">
                    <div class="row container">
                        <div class="col">
                            <table>
                                <tr>
                                    <td>{{ $talents[0]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[1]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[2]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[3]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[4]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[5]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col">
                            <table>
                                <tr>
                                    <td>{{ $talents[6]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[7]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[8]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[9]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[10]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[11]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header pt-3 pb -4">
                    <h5>Sesi 2 (B)</h5>
                </div>
                <div class="card-body">
                    <div class="row container">
                        <div class="col">
                            <table>
                                <tr>
                                    <td>{{ $talents[0]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[1]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[2]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[3]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[4]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[5]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col">
                            <table>
                                <tr>
                                    <td>{{ $talents[6]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[7]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[8]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[9]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[10]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[11]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header pt-3 pb -4">
                    <h5>Sesi 3 (B)</h5>
                </div>
                <div class="card-body">
                    <div class="row container">
                        <div class="col">
                            <table>
                                <tr>
                                    <td>{{ $talents[0]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[1]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[2]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[3]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[4]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[5]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col">
                            <table>
                                <tr>
                                    <td>{{ $talents[6]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[7]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[8]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[9]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[10]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[11]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Kelas C --}}
    <div class="row ml-3 mr-3 mt-3 mb-3 d-none">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header pt-3 pb -4">
                    <h5>Sesi 1 (C)</h5>
                </div>
                <div class="card-body">
                    <div class="row container">
                        <div class="col">
                            <table>
                                <tr>
                                    <td>Drummer</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>Asisten</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>Pendoa</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>Absensi</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>Keyboard</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>Gitar</td>
                                    <td> : A</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col">
                            <table>
                                <tr>
                                    <td>Operator Sound</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>Multimedia</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>Pemmimpin Pujian</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>Pembawa Firman</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>Singer</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>Usher</td>
                                    <td> : A</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header pt-3 pb -4">
                    <h5>Sesi 2 (C)</h5>
                </div>
                <div class="card-body">
                    <div class="row container">
                        <div class="col">
                            <table>
                                <tr>
                                    <td>{{ $talents[0]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[1]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[2]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[3]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[4]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[5]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col">
                            <table>
                                <tr>
                                    <td>{{ $talents[6]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[7]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[8]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[9]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[10]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[11]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header pt-3 pb -4">
                    <h5>Sesi 1 (C)</h5>
                </div>
                <div class="card-body">
                    <div class="row container">
                        <div class="col">
                            <table>
                                <tr>
                                    <td>{{ $talents[0]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[1]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[2]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[3]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[4]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[5]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col">
                            <table>
                                <tr>
                                    <td>{{ $talents[6]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[7]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[8]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[9]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[10]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                                <tr>
                                    <td>{{ $talents[11]->nama_talent }}</td>
                                    <td> : A</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
