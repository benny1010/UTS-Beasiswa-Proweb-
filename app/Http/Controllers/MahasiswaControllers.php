<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahas = Mahasiswa::latest()->paginate(5);
        return view ('mahas.index',compact('mahas'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mahas.create');
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
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'beasiswa' =>'required',
            'Email' => 'required',
        ]);
        Mahasiswa::create($request->all());

        return redirect()->route('mahas.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $maha)
    {
        return view('mahas.show',compact('maha'));
    }

    /**
     * Show the form fo r editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $maha)
    {
        return view('mahas.edit', compact('maha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $maha)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'beasiswa' =>'required',
            'Email' => 'required',
        ]);

        $maha->update($request->all());

        return redirect()->route('mahas.index')->with('succes','mahaSiswa Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $maha)
    {
        $maha->delete();

        return redirect()->route('mahas.index')->with('succes','mahaSiswa Berhasil di Hapus');
    }
}
