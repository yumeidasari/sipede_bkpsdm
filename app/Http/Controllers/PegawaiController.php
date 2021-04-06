<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Jabatan;
use App\Golongan;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$jabatan = Jabatan::all();
        $golongan = Golongan::all();
		$semua_pegawai=Pegawai::orderBy('id','DESC')->paginate(10);
        return view('pegawai/index',compact('semua_pegawai','jabatan','golongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$jabatan = Jabatan::all();
        $golongan = Golongan::all();

        return view('pegawai/create', compact('jabatan','golongan'));
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
		$pegawai_baru = new Pegawai;
        $pegawai_baru->nama_pegawai = $request->nama_pegawai;
        $pegawai_baru->nip = $request->nip;
        $pegawai_baru->jabatan_id = $request->jabatan_id;
        $pegawai_baru->golongan_id = $request->golongan_id;
		
		$pegawai_baru->save();
    
        return redirect()->to('/pegawai/create')->with('message', 'Berhasil menambahkan data pegawai');
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
    public function edit($id)
    {
        //
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
    }
}
