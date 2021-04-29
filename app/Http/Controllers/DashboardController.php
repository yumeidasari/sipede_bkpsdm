<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\NotaDinas;
use App\SuratTugas;
use App\SuratPerjalananDinas;
use App\Anggaran;
use App\Kuitansi;

class DashboardController extends Controller
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
		
		$jml_pegawai = count(Pegawai::All());
        //$jml_nodin = count(NotaDinas::All());
        $jml_surattugas = count(SuratTugas::All());
		$jml_spd = count(SuratPerjalananDinas::All());
		$jml_anggaran = count(Anggaran::All());
		$semua_anggaran = Anggaran::All();
		
		if($jml_anggaran != 0){
		for($i=0; $i<$jml_anggaran; $i++)
		{
			$thn_anggaran = $semua_anggaran[$i]->tahun;
			if( $thn_anggaran == date('Y') )
			{
				$sisa_anggaran = $semua_anggaran[$i]->sisa_anggaran;
				return view('dashboard', compact('jml_pegawai', 'sisa_anggaran', 'jml_surattugas', 'jml_spd'));
			}
			else{
				if($i == $jml_anggaran-1)
				{
					$sisa_anggaran = $semua_anggaran[$i]->jml_anggaran;
					return view('dashboard', compact('jml_pegawai', 'sisa_anggaran', 'jml_surattugas', 'jml_spd'));
				}
			}
		}
		}
		else
		{
			$sisa_anggaran = 0;
			return view('dashboard', compact('jml_pegawai', 'sisa_anggaran', 'jml_surattugas', 'jml_spd'));
		}
		
        
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
}
