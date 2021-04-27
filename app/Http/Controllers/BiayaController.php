<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biaya;

class BiayaController extends Controller
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
		
		$semua_biaya=Biaya::orderBy('id','DESC')->paginate(10);
        return view('biaya/index',compact('semua_biaya'));
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
		
		return view('biaya/create');
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
		
		$biaya_baru = new Biaya;
        $biaya_baru->biaya = $request->biaya;
   
        $biaya_baru->save();
    
        return redirect()->to('/biaya/create')->with('message', 'Berhasil menambahkan data biaya');
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
		
		$biaya = Biaya::findOrFail($id);
		return view('biaya/show', compact('biaya'));
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
		
		$biaya = Biaya::findOrFail($id);
		return view('biaya/edit', compact('biaya'));
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
		
		$biaya = Biaya::findOrFail($id);
		$biaya->biaya = $request->biaya;
		$biaya->save();
		return redirect()->to("biaya");
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
		
        $biaya = Biaya::findOrFail($id);


          return view('biaya/delete', compact('biaya'));
    }
	
    public function destroy($id)
    {
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		
		$biaya = Biaya::findOrFail($id);
		$biaya->delete();
		//return response()->json(['data' => $pegawai]);
		return redirect()->to("biaya");
    }
}
