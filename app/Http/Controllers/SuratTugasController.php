<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratTugas;
use App\Pegawai;
use App\Opd;
use Carbon\Carbon;
use PDF;

class SuratTugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$pegawai = Pegawai::all();
		$semua_surattugas = SuratTugas::orderBy('id','DESC')->paginate(10);
        return view('surattugas/index',compact('semua_surattugas','pegawai'));
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		
        $pegawai = Pegawai::all();

        return view('surattugas/create', compact('pegawai'));
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
		$st_baru = new SuratTugas;
        $st_baru->st_nomor = $request->st_nomor;
        $st_baru->st_dasar_penugasan = $request->st_dasar_penugasan;
        $st_baru->st_pegawai_id_tujuan = $request->st_pegawai_id_tujuan;
        $st_baru->st_alasan_penugasan = $request->st_alasan_penugasan;
		$st_baru->st_lama_tugas = $request->st_lama_tugas;
		$st_baru->st_tgl_awal = Carbon::create($request->st_tgl_awal);
		$st_baru->st_tgl_akhir = Carbon::create($request->st_tgl_akhir);
		$st_baru->st_tempat_penetapan =$request->st_tempat_penetapan;
		$st_baru->st_tgl_penetapan = Carbon::create($request->st_tgl_penetapan);
		$st_baru->st_penanda_tangan_id = $request->st_penanda_tangan_id;
		
		$st_baru->save();
    
        return redirect()->to('/surattugas/create')->with('message', 'Berhasil menambahkan data Surat Tugas');
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
	
	public function surattugas_pdf($id)
    {       
		
		$surattugas = SuratTugas::findOrFail($id);
		$pegawai = Pegawai::all();
		$pdf = PDF::loadview('surattugas/surattugas_pdf',['surattugas'=>$surattugas, 'pegawai'=>$pegawai])
                ->setPaper('legal');

                return $pdf->stream();
		
    	
    }
	
	public function buat_spd($id)
	{
		$surattugas = SuratTugas::findOrFail($id);
		$pegawai = Pegawai::all();
		$opd = Opd::all();
		//$surattugas = SuratTugas::all();
        return view('spd/create', compact('pegawai','opd','surattugas'));
	}
}
