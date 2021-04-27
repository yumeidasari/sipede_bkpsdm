<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlatTransportasi;

class AlatTransportasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		//harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		$semua_transportasi=AlatTransportasi::orderBy('id','DESC')->paginate(10);
        return view('transportasi/index',compact('semua_transportasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		//harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		return view('transportasi/create');
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
		//harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		
		$transportasi_baru = new AlatTransportasi;
        $transportasi_baru->alat_transportasi = $request->alat_transportasi;
   
        $transportasi_baru->save();
    
        return redirect()->to('/transportasi/create')->with('message', 'Berhasil menambahkan data alat transportasi');
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
		
		//harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		$transportasi = AlatTransportasi::findOrFail($id);
		return view('transportasi/show', compact('transportasi'));
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
		$transportasi = AlatTransportasi::findOrFail($id);
		return view('transportasi/edit', compact('transportasi'));
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
		$transportasi = AlatTransportasi::findOrFail($id);
		$transportasi->alat_transportasi = $request->alat_transportasi;
		$transportasi->save();
		return redirect()->to("transportasi");
    }

	public function delete($id)
    {
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		
        $transportasi = AlatTransportasi::findOrFail($id);


          return view('transportasi/delete', compact('transportasi'));
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
		$transportasi = AlatTransportasi::findOrFail($id);
		$transportasi->delete();
		//return response()->json(['data' => $pegawai]);
		return redirect()->to("transportasi");
    }
}
