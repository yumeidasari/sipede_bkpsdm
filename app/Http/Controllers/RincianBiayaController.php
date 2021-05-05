<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\RincianBiaya;
use App\SuratPerjalananDinas;
use App\Biaya;
use PDF;
use App\Kuitansi;

class RincianBiayaController extends Controller
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
		
		$semua_spd=SuratPerjalananDinas::orderBy('id','DESC')->paginate(10);
		
        return view('rincianbiaya/index',compact('semua_spd'));
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
		return view('rincianbiaya/create');
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
		$total = count($request->spd_id);
		
		$spd_id = $request->spd_id;
		$ref_rincian_biaya_id = $request->ref_rincian_biaya_id;
		$jumlah = $request->jumlah;
		$keterangan = $request->keterangan;
		
		for($i=0; $i<$total; $i++)
		{
			$rincianbiaya_baru = new RincianBiaya;
			 
			$rincianbiaya_baru->spd_id = $spd_id[$i];
			$rincianbiaya_baru->ref_rincian_biaya_id = $ref_rincian_biaya_id[$i];
			$rincianbiaya_baru->jumlah = $jumlah{$i};
			$rincianbiaya_baru->keterangan = $keterangan[$i];
			
			$rincianbiaya_baru->save();
			
		}
		//return response()->json(['data' => $rincianbiaya_baru]);
		return redirect()->to('/rincianbiaya')->with('message', 'Berhasil Membuat Rincian Biaya Perjalanan Dinas');
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
		$spd = SuratPerjalananDinas::findOrFail($id);
		$semua_rincianbiaya = DB::table('hys_rincian_biaya')
						->join('ref_rincian_biaya', 'hys_rincian_biaya.ref_rincian_biaya_id', '=', 'ref_rincian_biaya.id')
                        ->select('hys_rincian_biaya.*', 'ref_rincian_biaya.biaya')
                        ->where('hys_rincian_biaya.spd_id', 'LIKE', $id)
                        ->orderby('hys_rincian_biaya.id','desc')
						->get();
                        
		$biaya = Biaya::all();
		$total_rincian = count($semua_rincianbiaya);
		if($total_rincian != 0)
		{
			return view('rincianbiaya/show', compact('spd', 'semua_rincianbiaya'));
		}
		else
		{
			
			return view('rincianbiaya/create', compact('spd', 'biaya'));
			
		}
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
        //harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		 $rincianbiaya = RincianBiaya::findOrFail($id);
		 $rincianbiaya->delete();
		 
		 //show($rincianbiaya->spd->id);
		 return redirect()->to('/rincianbiaya');
    }
	
	public function rincianbiaya_pdf($id)
    {       
		//harus login dulu baru bisa lihat
        if (!\Auth::check()) {
            abort(401);
        }
		
		$spd = SuratPerjalananDinas::findOrFail($id);
		$semua_rincianbiaya = DB::table('hys_rincian_biaya')
						->join('ref_rincian_biaya', 'hys_rincian_biaya.ref_rincian_biaya_id', '=', 'ref_rincian_biaya.id')
                        ->select('hys_rincian_biaya.*', 'ref_rincian_biaya.biaya')
                        ->where('hys_rincian_biaya.spd_id', 'LIKE', $id)
                        ->orderby('hys_rincian_biaya.id','desc')
						->get();
                       // ->paginate(5);
		$biaya = Biaya::all();
		
		$total = count($semua_rincianbiaya);
		$jumlah = 0;
		for($i=0; $i < $total; $i++)
		{
			$jumlah += $semua_rincianbiaya[$i]->jumlah;
			
		}
		
		//cek tabel kuitansi dengan no spd ini
		$semua_kuitansi = Kuitansi::all();
		$jml_kuitansi = count($semua_kuitansi);
		$kuitansi_baru = new Kuitansi;
		if($jml_kuitansi != 0)
		{
			for($i=0; $i<$jml_kuitansi; $i++)
			{
				if($semua_kuitansi[$i]->kui_spd_id == $spd->id)
				{
					$semua_kuitansi[$i]->jumlah = $jumlah;
					$semua_kuitansi[$i]->save();
					break;
					
				}
				else
				{
					if($i == ($jml_kuitansi-1))
					{
						$kuitansi_baru->kui_spd_id = $spd->id;
						$kuitansi_baru->jumlah = $jumlah;
						$kuitansi_baru->save();
						break;
					}
				}
				break;
			}
		}
		else
		{
				
				$kuitansi_baru->kui_spd_id = $spd->id;
				$kuitansi_baru->jumlah = $jumlah;
				$kuitansi_baru->save();
				
		}
		
		
		//$pegawai = Pegawai::all();
		$pdf = PDF::loadview('rincianbiaya/rincianbiaya_pdf',['spd'=>$spd, 'semua_rincianbiaya'=>$semua_rincianbiaya, 'biaya'=>$biaya, 'jumlah'=>$jumlah])
                ->setPaper('legal');

                return $pdf->stream();
				//return response()->json(['data' => $kuitansi_baru]);
		
    	
    }
}
