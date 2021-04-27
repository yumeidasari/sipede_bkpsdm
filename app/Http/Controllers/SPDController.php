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
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
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
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
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
		//harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
        //cek apakah spd dengan id surat tugas yg dipilih sudah ada
		$spd = SuratPerjalananDinas::all();
		$jml_spd = count($spd);
		$surattugasid = $request->spd_surattugas_id;
		
		if($jml_spd != 0)
		{
		for($i=0; $i < $jml_spd; $i++)
		{
			if($spd[$i]->spd_surattugas_id == $surattugasid)
			{
				
				break;
			}
			else{
				if($i == ($jml_spd-1))
				{
				$spd_baru = new SuratPerjalananDinas;
				$spd_baru->spd_opd_id = $request->spd_opd_id;
				$spd_baru->spd_lembar_ke = $request->spd_lembar_ke;
				$spd_baru->spd_kode = $request->spd_kode;
				$spd_baru->spd_nomor = $request->spd_nomor;
				$spd_baru->spd_ppk_id = $request->spd_ppk_id;
				$spd_baru->spd_pegawai_id = $request->spd_pegawai_id;
				$spd_baru->spd_maksud = $request->spd_maksud;
				$spd_baru->spd_transportasi_id = $request->spd_transportasi_id;
				$spd_baru->spd_tempat_berangkat = $request->spd_tempat_berangkat;
				$spd_baru->spd_kota_tujuan_id = $request->spd_kota_tujuan_id;
				$spd_baru->spd_surattugas_id = $request->spd_surattugas_id;
				$spd_baru->spd_anggaran_id = $request->spd_anggaran_id;
				$spd_baru->spd_ket = $request->spd_ket;
       
				$spd_baru->save();
				}
			}
		}
		}
		else{
				$spd_baru = new SuratPerjalananDinas;
				$spd_baru->spd_opd_id = $request->spd_opd_id;
				$spd_baru->spd_lembar_ke = $request->spd_lembar_ke;
				$spd_baru->spd_kode = $request->spd_kode;
				$spd_baru->spd_nomor = $request->spd_nomor;
				$spd_baru->spd_ppk_id = $request->spd_ppk_id;
				$spd_baru->spd_pegawai_id = $request->spd_pegawai_id;
				$spd_baru->spd_maksud = $request->spd_maksud;
				$spd_baru->spd_transportasi_id = $request->spd_transportasi_id;
				$spd_baru->spd_tempat_berangkat = $request->spd_tempat_berangkat;
				$spd_baru->spd_kota_tujuan_id = $request->spd_kota_tujuan_id;
				$spd_baru->spd_surattugas_id = $request->spd_surattugas_id;
				$spd_baru->spd_anggaran_id = $request->spd_anggaran_id;
				$spd_baru->spd_ket = $request->spd_ket;
       
				$spd_baru->save();
		}
			
		
		return redirect()->to("spd");
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
		//harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		$spd = SuratPerjalananDinas::findOrFail($id);
		
		//$pegawai = Pegawai::all();
		$pdf = PDF::loadview('spd/spd_pdf',['spd'=>$spd])
                ->setPaper('legal');

                return $pdf->stream();
		
    	
    }
	
	public function rincian_biaya($id)
	{
		//harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		$spd = SuratPerjalananDinas::findOrFail($id);
		$biaya = Biaya::all();
		
        return view('rincianbiaya/create', compact('spd', 'biaya'));
	}
}
