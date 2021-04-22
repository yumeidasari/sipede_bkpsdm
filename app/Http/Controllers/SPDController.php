<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use Carbon\Carbon;
use App\SuratPerjalananDinas;
use App\SuratTugas;
use App\Opd;
use PDF;
use App\Biaya;

class SPDController extends Controller
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
		$semua_spd = SuratPerjalananDinas::orderBy('id','DESC')->paginate(10);
        return view('spd/index',compact('semua_spd','pegawai'));
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
		$opd = Opd::all();
		$surattugas = SuratTugas::all();
        return view('spd/create', compact('pegawai','opd','surattugas'));
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
		$spd_baru = new SuratPerjalananDinas;
        $spd_baru->spd_opd_id = $request->spd_opd_id;
        $spd_baru->spd_lembar_ke = $request->spd_lembar_ke;
		$spd_baru->spd_kode = $request->spd_kode;
		$spd_baru->spd_nomor = $request->spd_nomor;
		$spd_baru->spd_ppk_id = $request->spd_ppk_id;
		$spd_baru->spd_pegawai_id = $request->spd_pegawai_id;
		$spd_baru->spd_maksud = $request->spd_maksud;
		$spd_baru->spd_alat_angkut = $request->spd_alat_angkut;
		$spd_baru->spd_tempat_berangkat = $request->spd_tempat_berangkat;
		$spd_baru->spd_tempat_tujuan = $request->spd_tempat_tujuan;
		$spd_baru->spd_surattugas_id = $request->spd_surattugas_id;
		$spd_baru->spd_anggaran_id = $request->spd_anggaran_id;
		$spd_baru->spd_ket = $request->spd_ket;
       
		$spd_baru->save();
    
        //return redirect()->to('/spd/create')->with('message', 'Berhasil menambahkan data Surat Perjalanan Dinas');
		return redirect()->to('/spd/index')->with('message', 'Berhasil menambahkan data Surat Perjalanan Dinas');
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
	
	public function spd_pdf($id)
    {       
		
		$spd = SuratPerjalananDinas::findOrFail($id);
		
		//$pegawai = Pegawai::all();
		$pdf = PDF::loadview('spd/spd_pdf',['spd'=>$spd])
                ->setPaper('legal');

                return $pdf->stream();
		
    	
    }
	
	public function rincian_biaya($id)
	{
		$spd = SuratPerjalananDinas::findOrFail($id);
		$biaya = Biaya::all();
		
        return view('rincianbiaya/create', compact('spd', 'biaya'));
	}
}
