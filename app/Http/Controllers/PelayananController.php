<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;
use DB;
use Session;
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
    
    public function kelasa(){
        $talents = DB::Select("SELECT * FROM talents");
        $pelayanans = DB::Select("SELECT * FROM pelayanan");
        return view("Kelas.kelasa")->with(compact('talents', 'pelayanans'));
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
        $usher = implode(',',$request->singer);
        $singer = implode(',',$request->usher);
        
        // dd($request->all(), $usher, $singer);

        $data = new Pelayanan;
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
        $data->save();

        if ($data) {
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
