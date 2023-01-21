<?php

namespace App\Http\Controllers;

use App\Models\Talent;
use Illuminate\Http\Request;
use DB;
use DataTables;
use Session;

class TalentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('Talents')->get();
        return view('Talent.index')->with(compact('datas'));
    }

    public function getAllTalents(){
        $sql = DB::table('talents')->get();
        // dd($sql);
        return DataTables::of($sql)->make();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Talent::find($id);
        return view('Talent._edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $r)
    {
        $query = Talent::where('id', $r->id)->update(
            [
                'nama_talent' => $r->name,
            ]
        );
        if ($query) {
            Session::flash('success', 'Successfully edited talent.');
            return redirect()->route('talent.index');
        } else {
            Session::flash('errors', ['' => 'Failed to edit talent, Please try again later']);
            return redirect()->route('talent.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Talent $talent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talent $talent)
    {
        //
    }
}
