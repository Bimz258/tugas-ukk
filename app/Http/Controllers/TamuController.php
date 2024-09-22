<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tamu = Tamu::all();
        return view('tamu.index',['tamu'=>$tamu]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('tamu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'asal_tamu' => 'required',
            'uraian' => 'required',
        ]);
        Tamu::create([
            'tanggal' =>$request->tanggal,
            'nama' =>$request->nama,
            'asal_tamu' =>$request->asal_tamu,
            'uraian' =>$request->uraian,
        ]);

        return redirect('tamu')->with('success','Tamu Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tamu $tamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data = Tamu::where('id',$id)->first();
        return view('tamu.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'asal_tamu' => 'required',
            'uraian' => 'required',
        ]);
        $data = ([
            'tanggal' =>$request->tanggal,
            'nama' =>$request->nama,
            'asal_tamu' =>$request->asal_tamu,
            'uraian' =>$request->uraian,
        ]);

        Tamu::where('id',$id)->update($data);
        return redirect('tamu')->with('success','Tamu Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Tamu::where('id',$id)->delete();
        return redirect('tamu')->with('success','Tamu Berhasil Di Hapus');
    }
}
