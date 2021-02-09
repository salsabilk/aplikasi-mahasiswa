<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;


class CollegesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colleges = College::all();
        return view('colleges.index', compact('colleges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('colleges.create');
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
            'nama' => 'required',
            'nis' => 'required|size:9',
            'email' => 'required'
        ]);

        College::create($request->all());
        return redirect('/colleges')->with('status', 'Data Siswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function show(College $college)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function edit(College $college)
    {
        return view('colleges.edit', compact('college'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, College $college)
    {
        $request->validate([
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'nis' => 'required|size:9',
            'email' => 'required',
            'jurusan' => 'required'
        ]);
        College::where('id', $college->id)
                ->update([
                    'nama' => $request->nama,
                    'tgl_lahir' => $request->tgl_lahir,
                    'nis' => $request->nis,
                    'email' => $request->email
                ]);
                return redirect('/colleges')->with('status', 'Data Siswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function destroy(College $college)
    {
        College::destroy($college->id);
        return redirect('/colleges')->with('status', 'Data Siswa Berhasil Dihapus!');
    }
}
