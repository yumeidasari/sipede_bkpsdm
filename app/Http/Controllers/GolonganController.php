<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Golongan;

class GolonganController extends Controller
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
		
		$semua_golongan=Golongan::orderBy('id','DESC')->paginate(10);
        return view('golongan/index',compact('semua_golongan'));
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
		
		return view('golongan/create');
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
		
		$golongan_baru = new Golongan;
        $golongan_baru->golongan = $request->golongan;
		$golongan_baru->pangkat = $request->pangkat;
   
        $golongan_baru->save();
    
        return redirect()->to('/golongan/create')->with('message', 'Berhasil menambahkan data golongan');
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
		
		$golongan = Golongan::findOrFail($id);
		return view('golongan/show', compact('golongan'));
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
		
		$golongan = Golongan::findOrFail($id);
		return view('golongan/edit', compact('golongan'));
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
		
		$golongan = Golongan::findOrFail($id);
		$golongan->golongan = $request->golongan;
		$golongan->pangkat = $request->pangkat;
		
		$golongan->save();
		return redirect()->to("golongan");
    }
	
	public function delete($id)
    {
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		
        $golongan = Golongan::findOrFail($id);


          return view('golongan/delete', compact('golongan'));
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
		
		$golongan = Golongan::findOrFail($id);
		$golongan->delete();
		//return response()->json(['data' => $pegawai]);
		return redirect()->to("golongan");
    }
}
