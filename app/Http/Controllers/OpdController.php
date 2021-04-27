<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opd;

class OpdController extends Controller
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
		
        $semua_opd=Opd::orderBy('id','DESC')->paginate(10);
        return view('opd/index',compact('semua_opd'));
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
        return view('opd/create');
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
        $opd_baru = new Opd;
       // $opd_baru->kode = $request->kode;
        $opd_baru->nama_opd = $request->nama_opd;
   
        $opd_baru->save();
    
        return redirect()->to('/opd/create')->with('message', 'Berhasil menambahkan opd');
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
		$opd = Opd::findOrFail($id);
		return view('opd/show', compact('opd'));
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
		$opd = Opd::findOrFail($id);
		return view('opd/edit', compact('opd'));
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
		$opd = Opd::findOrFail($id);
		$opd->nama_opd = $request->nama_opd;
		$opd->save();
		return redirect()->to("opd");
    }
	
	public function delete($id)
    {
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
        $opd = Opd::findOrFail($id);


          return view('opd/delete', compact('opd'));
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
		
		$opd = Opd::findOrFail($id);
		$opd->delete();
		//return response()->json(['data' => $pegawai]);
		return redirect()->to("opd");
    }
}
