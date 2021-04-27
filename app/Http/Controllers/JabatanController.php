<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jabatan;

class JabatanController extends Controller
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
		
		$semua_jabatan=Jabatan::orderBy('id','DESC')->paginate(10);
        return view('jabatan/index',compact('semua_jabatan'));
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
		
		return view('jabatan/create');
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
		
		$jabatan_baru = new Jabatan;
        $jabatan_baru->jabatan = $request->jabatan;
   
        $jabatan_baru->save();
    
        return redirect()->to('/jabatan/create')->with('message', 'Berhasil menambahkan jabatan');
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
		
		$jabatan = Jabatan::findOrFail($id);
		return view('jabatan/show', compact('jabatan'));
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
		
		$jabatan = Jabatan::findOrFail($id);
		return view('jabatan/edit', compact('jabatan'));
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
		
		$jabatan = Jabatan::findOrFail($id);
		$jabatan->jabatan = $request->jabatan;
		$jabatan->save();
		return redirect()->to("jabatan");
    }
	
	public function delete($id)
    {
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
        $jabatan = Jabatan::findOrFail($id);


          return view('jabatan/delete', compact('jabatan'));
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
		$jabatan = Jabatan::findOrFail($id);
		$jabatan->delete();
		//return response()->json(['data' => $pegawai]);
		return redirect()->to("jabatan");
    }
}
