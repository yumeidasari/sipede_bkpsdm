<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggaran;
use App\Kuitansi;
use Carbon;

class AnggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		if (!\Auth::check()) {
            abort(401);
        }
		
		$semua_anggaran=Anggaran::orderBy('id','DESC')->paginate(10);
		$semua_kuitansi = Kuitansi::all();
		
		$tt_anggaran = count($semua_anggaran);
		$tt_kuitansi = count($semua_kuitansi);
		
		for($i=0; $i<$tt_anggaran; $i++)
		{
			$thn_anggaran = $semua_anggaran[$i]->tahun;
			$jml_realisasi = 0;
			for($j=0; $j<$tt_kuitansi; $j++)
			{
				$thn_kuitansi = Carbon\Carbon::parse($semua_kuitansi[$j]->created_at)->format('Y');
				
				if( $thn_anggaran == $thn_kuitansi)
				{
					$jml_realisasi += $semua_kuitansi[$j]->jumlah;
					
				}
			}
			
			//return response()->json(['data' => $jml_realisasi]);
			$semua_anggaran[$i]->jml_realisasi = $jml_realisasi;
			$semua_anggaran[$i]->sisa_anggaran = $semua_anggaran[$i]->jml_anggaran - $jml_realisasi;
			$semua_anggaran[$i]->save();
		}
        
		return view('anggaran/index',compact('semua_anggaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!\Auth::check()) {
            abort(401);
        }
		
		return view('anggaran/create');
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
		
		$anggaran_baru = new Anggaran;
		$anggaran_baru->tahun = $request->tahun;
		$anggaran_baru->jml_anggaran = $request->jml_anggaran;
   
        $anggaran_baru->save();
    
        return redirect()->to('/anggaran/create')->with('message', 'Berhasil menambahkan data anggaran');
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
		
		$anggaran = Anggaran::findOrFail($id);
		return view('anggaran/show', compact('anggaran'));
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
		
		$anggaran = Anggaran::findOrFail($id);
		return view('anggaran/edit', compact('anggaran'));
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
		
		$anggaran = Anggaran::findOrFail($id);
		$anggaran->tahun = $request->tahun;
		$anggaran->jml_anggaran = $request->jml_anggaran;
		$anggaran->save();
		return redirect()->to("anggaran");
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
		
        $anggaran = Anggaran::findOrFail($id);


          return view('anggaran/delete', compact('anggaran'));
    }
	
    public function destroy($id)
    {
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		
		$anggaran = Anggaran::findOrFail($id);
		$anggaran->delete();
		//return response()->json(['data' => $pegawai]);
		return redirect()->to("anggaran");
    }
}
