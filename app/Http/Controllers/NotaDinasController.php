<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use Carbon\Carbon;
use App\NotaDinas;
use PDF;

class NotaDinasController extends Controller
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
		$semua_notadinas = NotaDinas::orderBy('id','DESC')->paginate(10);
        return view('notadinas/index',compact('semua_notadinas','pegawai'));
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

        return view('notadinas/create', compact('pegawai'));
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
		
		$nd_baru = new NotaDinas;
        $nd_baru->nd_kepada = $request->nd_kepada;
        $nd_baru->nd_dari = $request->nd_dari;
		$nd_baru->nd_tgl_nodin = Carbon::create($request->nd_tgl_nodin);
        $nd_baru->nd_nomor = $request->nd_nomor;
        $nd_baru->nd_lampiran = $request->nd_lampiran;
		$nd_baru->nd_perihal = $request->nd_perihal;
		$nd_baru->nd_kalimat_pembuka = $request->nd_kalimat_pembuka;
		$nd_baru->nd_pegawai_id = $request->nd_pegawai_id;
		$nd_baru->nd_penanda_tangan_id = $request->nd_penanda_tangan_id;
		$nd_baru->nd_kalimat_penutup = $request->nd_kalimat_penutup;
			
		
		$nd_baru->save();
    
        return redirect()->to('/notadinas/create')->with('message', 'Berhasil menambahkan data Nota Dinas');
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
	
	public function nodin_pdf($id)
    {
       //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		
		$nodin = NotaDinas::findOrFail($id);
		$pegawai = Pegawai::all();
		$pdf = PDF::loadview('notadinas/nodin_pdf',['nodin'=>$nodin, 'pegawai'=>$pegawai])
                ->setPaper('legal');

                return $pdf->stream();
		
                
        //$pdf = PDF::loadview('kapal/kapal_pdf',['kapal'=>$kapal]);
        //$pdf = PDF::loadview('nelayan/nelayan_pdf',['nelayan'=>$nelayan])->setPaper('a4', 'landscape');
        //return $pdf->stream();
    	
    }
}
