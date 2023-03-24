<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use Validator;
class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd(Carbon::now()->next(Carbon::SUNDAY)->todatestring());
        if (!$request->all()) {
            $now = Carbon::now()->next(Carbon::SUNDAY)->todatestring();
            $pel11 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_A'
                                    and p.sesi LIKE '%_1'
                                    and p.tanggal = '$now'
            ");
            $pel12 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_A'
                                    and p.sesi LIKE '%_2'
                                    and p.tanggal = '$now'
            ");
            $pel13 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_A'
                                    and p.sesi LIKE '%_3'
                                    and p.tanggal = '$now'
            ");
            $pel21 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_B'
                                    and p.sesi LIKE '%_1'
                                    and p.tanggal = '$now'
            ");
            $pel22 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_B'
                                    and p.sesi LIKE '%_2'
                                    and p.tanggal = '$now'
            ");
            $pel23 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_B'
                                    and p.sesi LIKE '%_3'
                                    and p.tanggal = '$now'
            ");
            $pel31 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_C'
                                    and p.sesi LIKE '%_1'
                                    and p.tanggal = '$now'
            ");
            $pel32 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_C'
                                    and p.sesi LIKE '%_2'
                                    and p.tanggal = '$now'
            ");
            $pel33 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_C'
                                    and p.sesi LIKE '%_3'
                                    and p.tanggal = '$now'
            ");
        } else {
            $pel11 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_A'
                                    and p.sesi LIKE '%_1'
                                    and p.tanggal = '$request->date'
            ");
            $pel12 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_A'
                                    and p.sesi LIKE '%_2'
                                    and p.tanggal = '$request->date'
            ");
            $pel13 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_A'
                                    and p.sesi LIKE '%_3'
                                    and p.tanggal = '$request->date'
            ");
            $pel21 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_B'
                                    and p.sesi LIKE '%_1'
                                    and p.tanggal = '$request->date'
            ");
            $pel22 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_B'
                                    and p.sesi LIKE '%_2'
                                    and p.tanggal = '$request->date'
            ");
            $pel23 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_B'
                                    and p.sesi LIKE '%_3'
                                    and p.tanggal = '$request->date'
            ");
            $pel31 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_C'
                                    and p.sesi LIKE '%_1'
                                    and p.tanggal = '$request->date'
            ");
            $pel32 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_C'
                                    and p.sesi LIKE '%_2'
                                    and p.tanggal = '$request->date'
            ");
            $pel33 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_C'
                                    and p.sesi LIKE '%_3'
                                    and p.tanggal = '$request->date'
            ");
        }
        return view('Pelayanan.index', compact('pel11', 'pel12', 'pel13',
                                                'pel21', 'pel22', 'pel23',
                                                'pel31', 'pel32', 'pel33'));
    }
    public function idx(){
            $now = Carbon::now()->next(Carbon::SUNDAY)->todatestring();
            $pel11 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_A'
                                    and p.sesi LIKE '%_1'
                                    and p.tanggal = '$now'
            ");
            $pel12 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_A'
                                    and p.sesi LIKE '%_2'
                                    and p.tanggal = '$now'
            ");
            $pel13 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_A'
                                    and p.sesi LIKE '%_3'
                                    and p.tanggal = '$now'
            ");
            $pel21 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_B'
                                    and p.sesi LIKE '%_1'
                                    and p.tanggal = '$now'
            ");
            $pel22 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_B'
                                    and p.sesi LIKE '%_2'
                                    and p.tanggal = '$now'
            ");
            $pel23 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_B'
                                    and p.sesi LIKE '%_3'
                                    and p.tanggal = '$now'
            ");
            $pel31 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_C'
                                    and p.sesi LIKE '%_1'
                                    and p.tanggal = '$now'
            ");
            $pel32 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_C'
                                    and p.sesi LIKE '%_2'
                                    and p.tanggal = '$now'
            ");
            $pel33 = DB::select("SELECT
                                    t.nama_talent,
                                    u.name,
                                    p.tanggal,
                                    p.kelas,
                                    p.sesi
                                FROM
                                    pelayanan p
                                join talents t on
                                    t.id = p.id_talent
                                left join unames u on
                                    u.id = p.id_uname
                                WHERE
                                    p.kelas LIKE '%_C'
                                    and p.sesi LIKE '%_3'
                                    and p.tanggal = '$now'
            ");
        return view('homepage', compact('pel11', 'pel12', 'pel13',
        'pel21', 'pel22', 'pel23',
        'pel31', 'pel32', 'pel33'));
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

    public function addForm(Request $request)
    {
        if(!$request->all()){
            $drummers = DB::select("SELECT name, id from unames where id_talent like 'x%'");
            $keyboards = DB::select("SELECT name, id from unames where id_talent like '%x%'");
            $gitars = DB::select("SELECT name, id from unames where id_talent like '%x%'");
            $sounds = DB::select("SELECT name, id from unames where id_talent like '%x%'");
            $mulmeds = DB::select("SELECT name, id from unames where id_talent like '%x'");
            $wls = DB::select("SELECT name, id from unames where id_talent like '%x%'");
            $firmans = DB::select("SELECT name, id from unames where id_talent like '%x%'");
            $datas = DB::select("SELECT name, id from unames where id_talent like '%x%'");
        } else {
            $drummers = DB::select("SELECT
                                        u.id,
                                        u.name,
                                        COUNT(IF(p.tanggal='$request->tanggal', u.id_talent, NULL)) as countb
                                    FROM
                                        unames u
                                    LEFT JOIN pelayanan p ON
                                        u.id = p.id_uname
                                    WHERE
                                        u.id_talent LIKE '1%'
                                    GROUP BY
                                        u.id
                                    HAVING countb < 2;
            ");
            $keyboards = DB::select("SELECT
                                        u.id,
                                        u.name,
                                        COUNT(IF(p.tanggal='$request->tanggal', u.id_talent, NULL)) as countb
                                    FROM
                                        unames u
                                    LEFT JOIN pelayanan p ON
                                        u.id = p.id_uname
                                    WHERE
                                        u.id_talent LIKE '%5%'
                                    GROUP BY
                                        u.id
                                    HAVING countb < 2;
            ");
            $gitars = DB::select("SELECT
                                        u.id,
                                        u.name,
                                        COUNT(IF(p.tanggal='$request->tanggal', u.id_talent, NULL)) as countb
                                    FROM
                                        unames u
                                    LEFT JOIN pelayanan p ON
                                        u.id = p.id_uname
                                    WHERE
                                        u.id_talent LIKE '%6%'
                                    GROUP BY
                                        u.id
                                    HAVING countb < 2;
            ");
            $sounds = DB::select("SELECT
                                        u.id,
                                        u.name,
                                        COUNT(
                                            IF(
                                                p.tanggal = '$request->tanggal',
                                                u.id_talent,
                                                NULL
                                            )
                                        ) AS countb
                                    FROM
                                        unames u
                                    LEFT JOIN pelayanan p ON
                                        u.id = p.id_uname
                                    WHERE
                                        u.id_talent LIKE '%7%'
                                    GROUP BY
                                        u.id
                                    HAVING
                                        countb < 2;
            ");
            $mulmeds = DB::select("SELECT
                                        u.id,
                                        u.name,
                                        COUNT(IF(p.tanggal='$request->tanggal', u.id_talent, NULL)) as countb
                                    FROM
                                        unames u
                                    LEFT JOIN pelayanan p ON
                                        u.id = p.id_uname
                                    WHERE
                                        u.id_talent LIKE '%8%'
                                    GROUP BY
                                        u.id
                                    HAVING countb < 2;
            ");
            $wls = DB::select("SELECT
                                    u.id,
                                    u.name,
                                    COUNT(
                                        IF(
                                            p.tanggal = '$request->tanggal',
                                            u.id_talent,
                                            NULL
                                        )
                                    ) AS countb
                                FROM
                                    unames u
                                LEFT JOIN pelayanan p ON
                                    u.id = p.id_uname
                                WHERE
                                    u.id_talent LIKE '%9%'
                                GROUP BY
                                    u.id
                                HAVING
                                    countb < 2;
            ");
            $firmans = DB::select("SELECT
                                        u.id,
                                        u.name,
                                        COUNT(IF(p.tanggal='$request->tanggal', u.id_talent, NULL)) as countb
                                    FROM
                                        unames u
                                    LEFT JOIN pelayanan p ON
                                        u.id = p.id_uname
                                    WHERE
                                        u.id_talent LIKE '%10%'
                                    GROUP BY
                                        u.id
                                    HAVING countb < 2;
            ");
            $datas = DB::select("SELECT
                                    u.id,
                                    u.name,
                                    COUNT(
                                        IF(
                                            p.tanggal = '$request->tanggal',
                                            u.id_talent,
                                            NULL
                                        )
                                    ) AS countb
                                FROM
                                    unames u
                                LEFT JOIN pelayanan p ON
                                    u.id = p.id_uname
                                GROUP BY
                                    u.id
                                HAVING countb < 2;
            ");
        }
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
        $rules = [
            'id_user' => 'present|array',
            'id_user.*' => 'required',
            'kelas' => 'required',
            'sesi' => 'required',
            'date' => 'required',
        ];
        $msg = [
            'id_user.*.required' => 'Mohon masukkan nama pelayan',
            'kelas.required' => 'Mohon masukkan kelas',
            'sesi.required' => 'Mohon masukkan sesi',
            'date.required' => 'Mohon masukkan tanggal',
        ];
        $validator = Validator::make($request->all(), $rules, $msg);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $c = DB::select("SELECT
                            COUNT(id) AS count
                        FROM
                            pelayanan
                        WHERE
                            sesi LIKE '$request->sesi'
                            and kelas = '$request->kelas'
                            and tanggal = '$request->date';
        "
        );
        if ($c[0]->count == 0) {
            $data = [];
            foreach ($request->id_talent as $key => $id_talent) {
                $data[$key]['id_talent'] = $id_talent;
            }
            foreach ($request->id_user as $key => $id_user) {
                $data[$key]['id_uname'] = $id_user;
                $data[$key]['sesi'] = $request->sesi;
                $data[$key]['kelas'] = $request->kelas;
                $data[$key]['tanggal'] = $request->date;
                $data[$key]['id_pel'] = "PEL-".$request->sesi."-".$request->kelas."-".$request->date;
            }
            $save = Pelayanan::upsert($data, ['id']);
            if ($save) {
                Session::flash('success', 'Successfully add new pelayanan.');
                return redirect()->route('pelayananIndex');
            } else {
                Session::flash('errors', ['' => 'Failed to add new pelayanan, Please try again later']);
                return redirect()->route('pelayananIndex');
            }
        } else {
            Session::flash('errors', ['error' => 'Maaf, telah menambahkan sesi dan kelas pada tanggal ini sebelumnya.']);
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
