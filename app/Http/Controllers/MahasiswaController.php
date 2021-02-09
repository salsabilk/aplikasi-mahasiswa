<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;
use App\models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mahasiswa = DB::table('students')->get();
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswas.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Mahasiswa $mhs)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|size:9',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        Mahasiswa::create($request->all());
        return redirect('/mahasiswas')->with('status', 'Data Siswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswas.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'nis' => 'required|size:9',
            'email' => 'required',
            'jurusan' => 'required'
        ]);
        Mahasiswa::where('id', $mahasiswa->id)
                ->update([
                    'nama' => $request->nama,
                    'tgl_lahir' => $request->tgl_lahir,
                    'nis' => $request->nis,
                    'email' => $request->email,
                    'jurusan' => $request->jurusan
                ]);
                return redirect('/mahasiswas')->with('status', 'Data Siswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        Mahasiswa::destroy($mahasiswa->id);
        return redirect('/mahasiswas')->with('status', 'Data Siswa Berhasil Dihapus!');
    }
}
