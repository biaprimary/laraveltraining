<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa2; //memanggil model

class Siswa2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$siswa2 = Siswa2::all();
        //$siswa2 = Siswa2::tampil_siswa();
        $siswa2 = new Siswa2;
        $siswa3 = $siswa2->tampil_siswa();
        return view('siswa')->with('siswa',$siswa3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('formsiswa');
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
        Siswa2::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $siswa2 = Siswa2::find($id);
        return $siswa2;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $siswa2 = Siswa2::find($id);
        return view('editsiswa')->with('siswa',$siswa2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $siswa2 = Siswa2::find($id);
        $siswa2->update($request->all());
        return redirect()->route('siswa2.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Siswa2::destroy($id);
    }
}
