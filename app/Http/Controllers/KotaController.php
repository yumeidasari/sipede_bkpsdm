<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kota;

class KotaController extends Controller
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
		
		$semua_kota=Kota::orderBy('id','DESC')->paginate(10);
        return view('kota/index',compact('semua_kota'));
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
		
		return view('kota/create');
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
		
		$kota_baru = new Kota;
		$kota_baru->nama_kota = $request->nama_kota;
   
        $kota_baru->save();
    
        return redirect()->to('/kota/create')->with('message', 'Berhasil menambahkan kota');
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
		
		$kota = Kota::findOrFail($id);
		return view('kota/show', compact('kota'));
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
		
		$kota = Kota::findOrFail($id);
		return view('kota/edit', compact('kota'));
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
		
		$kota = Kota::findOrFail($id);
		$kota->nama_kota = $request->nama_kota;
		$kota->save();
		return redirect()->to("kota");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function delete($id)
    {
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		
        $kota = Kota::findOrFail($id);


          return view('kota/delete', compact('kota'));
    }
	
    public function destroy($id)
    {
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		
		$kota = Kota::findOrFail($id);
		$kota->delete();
		//return response()->json(['data' => $pegawai]);
		return redirect()->to("kota");
    }
}
