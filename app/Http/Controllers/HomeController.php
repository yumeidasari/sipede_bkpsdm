<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\NotaDinas;
use App\SuratTugas;
use App\SuratPerjalananDinas;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$jml_pegawai = count(Pegawai::All());
        $jml_nodin = count(NotaDinas::All());
        $jml_surattugas = count(SuratTugas::All());
		$jml_spd = count(SuratPerjalananDinas::All());
		
         return view('dashboard', compact('jml_pegawai', 'jml_nodin', 'jml_surattugas', 'jml_spd'));
    }
}
