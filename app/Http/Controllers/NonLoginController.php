<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;

class NonLoginController extends Controller
{
    public function index(Request $request){
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
        return view('nonlogin.index', compact('pel11', 'pel12', 'pel13',
                                                'pel21', 'pel22', 'pel23',
                                                'pel31', 'pel32', 'pel33'));
    }
}
