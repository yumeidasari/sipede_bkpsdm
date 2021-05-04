<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Pengguna;
use App\Pegawai;

class PenggunaController extends Controller
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
		
		$pegawai = Pegawai::all();
        $semua_pengguna = Pengguna::orderBy('id', 'DESC')->paginate(10);
        return view('pengguna/index', compact('semua_pengguna','pegawai'));
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
        return view('pengguna/create', compact('pegawai'));
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

        $user_baru = new Pengguna;

        $user_baru->name = $request->name;
        $user_baru->email= $request->email;
        $user_baru->password = Hash::make($request['password']);
        $user_baru->role = $request->role;
        $user_baru->pegawai_id = $request->pegawai_id;
		
        $user_baru->save();
        return redirect()->to('/pengguna/create')->with('message', 'Berhasil menambahkan user baru');
		
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

        $pengguna = Pengguna::findOrFail($id);
        $pegawai = Pegawai::all();
        return view('pengguna/edit', compact('pengguna', 'pegawai'));
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

        $pengguna = Pengguna::findOrFail($id);
        $pengguna->name = $request->name;
		$pengguna->email = $request->email;
        $pengguna->role = $request->role;
		$pengguna->pegawai_id = $request->pegawai_id;
        
        $pengguna->save();
        //return redirect("pengguna/$id/edit")->with('pesan', 'Berhasil mengupdate data User');
        return redirect()->to("/pengguna/$id/edit")->with("message", "Berhasil mengupdate data user");
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
    }
}
