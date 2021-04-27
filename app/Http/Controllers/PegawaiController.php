<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Jabatan;
use App\Golongan;
use App\SuratTugas;
use App\SuratPerjalananDinas;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
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
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
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
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
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
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		$pegawai = Pegawai::findOrFail($id);
		return view('pegawai/show', compact('pegawai'));
		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		$jabatan = Jabatan::all();
        $golongan = Golongan::all();
		$pegawai = Pegawai::findOrFail($id);
        return view('pegawai/edit', compact('jabatan','golongan','pegawai'));
		
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
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		
		$pegawai = Pegawai::findOrFail($id);
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->nip = $request->nip;
        $pegawai->jabatan_id = $request->jabatan_id;
        $pegawai->golongan_id = $request->golongan_id;
		
		$pegawai->save();
		
		return redirect()->to("pegawai");
    }
	
	public function delete($id)
    {
		//harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai/delete', compact('pegawai'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		//st_pegawai_id, st_penandatangan_id, spd_ppk_id
		$surattugas = SuratTugas::all();
		$spd = SuratPerjalananDinas::all();
        $pegawai = Pegawai::findOrFail($id);
		
		
		//return response()->json(['data' => $pegawai]);
		$pegawai->delete();
		return redirect()->to("pegawai");
    }
}
