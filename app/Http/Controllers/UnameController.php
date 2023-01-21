<?php

namespace App\Http\Controllers;

use App\Models\Uname;
use App\Models\Talent;
use Illuminate\Http\Request;
use DB;
use DataTables;
use Session;

// use PhpParser\Node\Stmt\Return_;

class UnameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas1 = DB::table('Unames')->get();
        $datas2 = DB::table('talents')->get();
        return view('User.index')->with(compact('datas1', 'datas2'));
    }

    public function getAllUsers(){
        $sql = DB::table('unames')->get();
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
     * @param  \App\Models\Uname  $uname
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datas1 = Uname::find($id);
        $datas2 = Talent::all();
        return view('User._edit', compact('datas1', 'datas2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Uname  $uname
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request){
        $talent = implode(',',$request->id_talent);
        $query = Uname::where('id', $request->id)->update(
            [
                'name'=> $request->name,
                'id_talent'=> $talent,
            ]
        );
        if ($query) {
            Session::flash('success', 'Successfully edited talent Type.');
            return redirect()->route('users.index');
        } else {
            Session::flash('errors', ['' => 'Failed to edit talent, Please try again later']);
            return redirect()->route('users.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Uname  $uname
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uname $uname)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Uname  $uname
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uname $uname)
    {
        //
    }
}
