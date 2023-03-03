<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pelayanan.index');
    }
    public function idx(){
        $nows = new Carbon('this sunday');
        $now = $nows->format('Y-m-d');
        $pelayanan11 = DB::select("SELECT * from pelayanan where tanggal = '$now' and sesi like '%Sesi 1%' and kelas like '%Kelas A%'");
        $pelayanan12 = DB::select("SELECT * from pelayanan where tanggal = '$now' and sesi like '%Sesi 2%' and kelas like '%Kelas A%'");
        $pelayanan13 = DB::select("SELECT * from pelayanan where tanggal = '$now' and sesi like '%Sesi 3%' and kelas like '%Kelas A%'");
        $pelayanan21 = DB::select("SELECT * from pelayanan where tanggal = '$now' and sesi like '%Sesi 1%' and kelas like '%Kelas B%'");
        $pelayanan22 = DB::select("SELECT * from pelayanan where tanggal = '$now' and sesi like '%Sesi 2%' and kelas like '%Kelas B%'");
        $pelayanan23 = DB::select("SELECT * from pelayanan where tanggal = '$now' and sesi like '%Sesi 3%' and kelas like '%Kelas B%'");
        $pelayanan31 = DB::select("SELECT * from pelayanan where tanggal = '$now' and sesi like '%Sesi 1%' and kelas like '%Kelas C%'");
        $pelayanan32 = DB::select("SELECT * from pelayanan where tanggal = '$now' and sesi like '%Sesi 2%' and kelas like '%Kelas C%'");
        $pelayanan33 = DB::select("SELECT * from pelayanan where tanggal = '$now' and sesi like '%Sesi 3%' and kelas like '%Kelas C%'");
        $talents = DB::Select("SELECT * from talents");
        $unames = DB::Select("SELECT * from unames");
        return view('homepage')->with(compact('talents',
                                            'unames',
                                            'pelayanan11',
                                            'pelayanan12',
                                            'pelayanan13',
                                            'pelayanan21',
                                            'pelayanan22',
                                            'pelayanan23',
                                            'pelayanan31',
                                            'pelayanan32',
                                            'pelayanan33',
                                        ));
    }
    public function kelasa(){
        $talents = DB::Select("SELECT * FROM talents");
        $pelayanans = DB::Select("SELECT * FROM pelayanan WHERE kelas LIKE '%A'");
        $users = DB::Select("SELECT * FROM unames");
        return view("Kelas.kelasa")->with(compact('talents', 'pelayanans', 'users'));
    }
    public function _getTowers(Request $request)
    {
        $list = DB::select("SELECT
                id AS id, name AS text
            FROM
                tables
            WHERE
                id_location = '" . $request->id . "'
        ");
        return response()->json($list);
    }

    public function addForm()
    {
        $drummers = DB::select("SELECT name, id from unames where id_talent like '1%'");
        $keyboards = DB::select("SELECT name, id from unames where id_talent like '%5%'");
        $gitars = DB::select("SELECT name, id from unames where id_talent like '%6%'");
        $sounds = DB::select("SELECT name, id from unames where id_talent like '%7%'");
        $mulmeds = DB::select("SELECT name, id from unames where id_talent like '%8%'");
        $wls = DB::select("SELECT name, id from unames where id_talent like '%9%'");
        $firmans = DB::select("SELECT name, id from unames where id_talent like '%10%'");
        $datas = DB::select("SELECT name, id from unames");
        return view('Pelayanan._add')->with(compact('drummers',
                                                    'keyboards',
                                                    'gitars',
                                                    'sounds',
                                                    'mulmeds',
                                                    'wls',
                                                    'firmans',
                                                    'datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $singers = implode(',',$request->singe   r);
        // $ushers = implode(',',$request->usher);
        $data = [];
        foreach ($request->id_talent as $key => $id_talent) {
            $data[$key]['id_talent'] = $id_talent;
        }
        foreach ($request->id_user as $key => $id_user) {
            $data[$key]['id_uname'] = $id_user;
            $data[$key]['sesi'] = $request->sesi;
            $data[$key]['kelas'] = $request->kelas;
            $data[$key]['tanggal'] = $request->date;
        }

        $singers = implode(',',$data[10]['id_uname']);
        $ushers  = implode(',',$data[11]['id_uname']);
        $data[10]['id_uname'] = $singers;
        $data[11]['id_uname'] = $ushers;

        $save = Pelayanan::upsert($data, ['id']);
        // foreach ($request->singer as $key => $singer) {
        //     $data[$key]['id_user'] = $singers;
        // }
        // foreach ($request->usher as $key => $usher) {
        //     $data[$key]['id_user'] = $ushers;
        // }
        // print_r($data);

        // $singera = array("id_user");
        // $singerb = array($singers);
        // $singers = array_combine($singera, $singerb);

        // $ushera = array("id_user");
        // $usherb = array($ushers);
        // $ushers = array_combine($ushera, $usherb);

        // print_r(array($singers, $ushers));

        /*$data = new Pelayanan;
        $data->sesi = $request->sesi;
        $data->tanggal = $request->date;
        $data->drummer = $request->drummer;
        $data->keyboard = $request->keyboard;
        $data->gitar =  $request->gitar;
        $data->sound = $request->sound;
        $data->mulmed = $request->mulmed;
        $data->wl = $request->wl;
        $data->firman = $request->firman;
        $data->singer = $singer;
        $data->usher = $usher;
        $data->asisten = $request->asisten;
        $data->pendoa = $request->pendoa;
        $data->absensi = $request->absensi;
        $data->kelas = $request->kelas;
        $data->save();*/

        if ($save) {
            Session::flash('success', 'Successfully add new pelayanan.');
            return redirect()->route('pelayananIndex');
        } else {
            Session::flash('errors', ['' => 'Failed to add new pelayanan, Please try again later']);
            return redirect()->route('pelayananIndex');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelayanan $pelayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelayanan $pelayanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelayanan $pelayanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelayanan $pelayanan)
    {
        //
    }
}
