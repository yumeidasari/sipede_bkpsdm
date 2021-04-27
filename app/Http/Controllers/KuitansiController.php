<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kuitansi;
use App\SuratPerjalananDinas;
use PDF;

class KuitansiController extends Controller
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
		
		$semua_kuitansi=Kuitansi::orderBy('id','DESC')->paginate(10);
        return view('kuitansi/index',compact('semua_kuitansi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		
		$kuitansi = Kuitansi::findOrFail($id);
		
		return view('kuitansi/edit', compact('kuitansi'));
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
		
		$kuitansi = Kuitansi::findOrFail($id);
		$kuitansi->sudah_terima_dari = $request->sudah_terima_dari;
		$kuitansi->untuk_pembayaran = $request->untuk_pembayaran;
		
		$kuitansi->save();
		return redirect()->to("kuitansi");
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
	
	public function kuitansi_pdf($id)
	{
		//harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		
		$kuitansi = Kuitansi::findOrFail($id);
		$pdf = PDF::loadview('kuitansi/kuitansi_pdf',['kuitansi'=>$kuitansi])
                ->setPaper('legal');

                return $pdf->stream();
	}
}
