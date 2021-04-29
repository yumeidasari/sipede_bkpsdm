<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratTugas;
use App\Pegawai;
use App\Opd;
use Carbon\Carbon;
use App\Berkas;
use App\AlatTransportasi;
use App\Kota;
use App\SuratPerjalananDinas;
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
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
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
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		
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
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
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
		$st_baru->st_status = 0;
		
		$st_baru->save();
		
		$berkas_baru = new Berkas;
		$berkas_baru->surattugas_id = $st_baru->id;
		
		$berkas_baru->save();
    
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
		//harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		
        $pegawai = Pegawai::all();
		$surattugas = SuratTugas::findOrFail($id);

        return view('surattugas/edit', compact('surattugas','pegawai'));
		
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
		//harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		$surattugas = SuratTugas::findOrFail($id);
		
		
		$surattugas->st_nomor = $request->st_nomor;
        $surattugas->st_dasar_penugasan = $request->st_dasar_penugasan;
        $surattugas->st_pegawai_id_tujuan = $request->st_pegawai_id_tujuan;
        $surattugas->st_alasan_penugasan = $request->st_alasan_penugasan;
		$surattugas->st_lama_tugas = $request->st_lama_tugas;
		$surattugas->st_tgl_awal = Carbon::create($request->st_tgl_awal);
		$surattugas->st_tgl_akhir = Carbon::create($request->st_tgl_akhir);
		$surattugas->st_tempat_penetapan =$request->st_tempat_penetapan;
		$surattugas->st_tgl_penetapan = Carbon::create($request->st_tgl_penetapan);
		$surattugas->st_penanda_tangan_id = $request->st_penanda_tangan_id;
		$surattugas->st_status = 0;
		
		$surattugas->save();
		
		return redirect()->to("surattugas");
		
		
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
		//harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		$surattugas = SuratTugas::findOrFail($id);
		$pegawai = Pegawai::all();
		$pdf = PDF::loadview('surattugas/surattugas_pdf',['surattugas'=>$surattugas, 'pegawai'=>$pegawai])
                ->setPaper('legal');

                return $pdf->stream();
		
    	
    }
	
	public function buat_spd($id)
	{
		//harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		$surattugas = SuratTugas::findOrFail($id);
		$pegawai = Pegawai::all();
		$opd = Opd::all();
		$transportasi = AlatTransportasi::all();
		$kota = Kota::all();
		//$surattugas = SuratTugas::all();
        return view('spd/create', compact('pegawai','opd','surattugas','transportasi','kota'));
	}
	
	public function upload_berkas($id)
	{
		//harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		$surattugas = SuratTugas::findOrFail($id);
		
        return view('berkas/create', compact('surattugas'));
	}
	
	public function st_confirm_status($id)
	{
		if (!\Auth::check()) {
            abort(401);
        }
		
		$surattugas = SuratTugas::findOrFail($id);
		$surattugas->st_status = 2;
		$surattugas->save();
		return redirect()->to("surattugas");
	}
	
	public function st_tolak_status($id)
	{
		if (!\Auth::check()) {
            abort(401);
        }
		
		$surattugas = SuratTugas::findOrFail($id);
		$surattugas->st_status = 1;
		$surattugas->save();
		return redirect()->to("surattugas");
	}
}
