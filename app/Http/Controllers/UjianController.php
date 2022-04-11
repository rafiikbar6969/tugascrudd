<?php

namespace App\Http\Controllers;

use App\Models\Ujian;
use Illuminate\Foundation\Console\StubPublishCommand;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ujian = Ujian::all();
        return view('ujian.index', compact('ujian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ujian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required',
            'dosen' => 'required',
            'jml_Soal' => 'required',
            'keterangan' => 'required'
        ]);

        Ujian::create($request->all());
        return redirect('/ujian')->with('status', 'Data berhasil diinput!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ujian $ujian)
    {
        return view('ujian.edit', compact('ujian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ujian $ujian)
    {
        $request->validate([
            'nama_mk' => 'required',
            'dosen' => 'required',
            'jml_Soal' => 'required',
            'keterangan' => 'required'
        ]);

        Ujian::where('id', $ujian->id)
            ->update([
                'nama_mk' => $request->nama_mk,
                'dosen' => $request->dosen,
                'jml_Soal' => $request->jml_Soal,
                'keterangan' => $request->keterangan
            ]);
        return redirect('/ujian')->with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ujian $ujian)
    {
        Ujian::destroy($ujian->id);
        return redirect('/ujian')->with('status', 'Data berhasil dihapus!');
    }
}
