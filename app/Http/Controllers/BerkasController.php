<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratPerjalananDinas;
use App\Berkas;


class BerkasController extends Controller
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
		
		$semua_berkas = Berkas::orderBy('id','DESC')->paginate(10);
        return view('berkas/index',compact('semua_berkas'));
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
		
		$spd = SuratPerjalananDinas::all();
		return view('berkas/create', compact('surattugas'));
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
		
		$berkas_baru = new Berkas;
		$berkas_baru->spd_id = $request->spd_id;
		
		if ($request->hasFile('scan_nodin')) {
            $path = $request->file('scan_nodin')->store("/berkas/", 'public');
            $berkas_baru->scan_nodin = $path; 
        }
		if ($request->hasFile('scan_surattugas')) {
            $path = $request->file('scan_surattugas')->store("/berkas/", 'public');
            $berkas_baru->scan_surattugas = $path; 
        }
		if ($request->hasFile('scan_spd')) {
            $path = $request->file('scan_spd')->store("/berkas/", 'public');
            $berkas_baru->scan_spd = $path;
        }
		if ($request->hasFile('scan_tiket')) {
            $path = $request->file('scan_tiket')->store("/berkas/", 'public');
            $berkas_baru->scan_tiket = $path; 
        }
		if ($request->hasFile('scan_boarding_pass')) {
            $path = $request->file('scan_boarding_pass')->store("/berkas/", 'public');
            $berkas_baru->scan_boarding_pass = $path; 
        }
		if ($request->hasFile('scan_bill_hotel')) {
            $path = $request->file('scan_bill_hotel')->store("/berkas/", 'public');
            $berkas_baru->scan_bill_hotel = $path; 
        }
		if ($request->hasFile('scan_laporan_spd')) {
            $path = $request->file('scan_laporan_spd')->store("/berkas/", 'public');
            $berkas_baru->scan_laporan_spd = $path; 
        }
		if ($request->hasFile('scan_bill_rapidtest')) {
            $path = $request->file('scan_bill_rapidtest')->store("/berkas/", 'public');
            $berkas_baru->scan_laporan_spd = $path; 
        }
		
		$berkas_baru->save();
		return redirect()->to("berkas");
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
		
		$berkas = Berkas::findOrFail($id);
		$spd = SuratPerjalananDinas::all();
		return view('berkas/edit', compact('berkas','spd'));
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
		
		$berkas = Berkas::findOrFail($id);
		if ($request->hasFile('scan_nodin')) {

            // hapus foto lama
            \Storage::delete("public/".$berkas->scan_nodin);

            // simpan foto baru
            $path = $request->file('scan_nodin')->store("/berkas/", 'public');

            $berkas->scan_nodin = $path;
        }
		
		if ($request->hasFile('scan_surattugas')) {

            // hapus foto lama
            \Storage::delete("public/".$berkas->scan_surattugas);

            // simpan foto baru
            $path = $request->file('scan_surattugas')->store("/berkas/", 'public');

            $berkas->scan_surattugas = $path;
        }
		
		if ($request->hasFile('scan_spd')) {

            // hapus foto lama
            \Storage::delete("public/".$berkas->scan_spd);

            // simpan foto baru
            $path = $request->file('scan_spd')->store("/berkas/", 'public');

            $berkas->scan_spd = $path;
        }
		
		if ($request->hasFile('scan_tiket')) {

            // hapus foto lama
            \Storage::delete("public/".$berkas->scan_tiket);

            // simpan foto baru
            $path = $request->file('scan_tiket')->store("/berkas/", 'public');

            $berkas->scan_tiket = $path;
        }
		
		if ($request->hasFile('scan_boarding_pass')) {

            // hapus foto lama
            \Storage::delete("public/".$berkas->scan_boarding_pass);

            // simpan foto baru
            $path = $request->file('scan_boarding_pass')->store("/berkas/", 'public');

            $berkas->scan_boarding_pass = $path;
        }
		
		if ($request->hasFile('scan_bill_hotel')) {

            // hapus foto lama
            \Storage::delete("public/".$berkas->scan_bill_hotel);

            // simpan foto baru
            $path = $request->file('scan_bill_hotel')->store("/berkas/", 'public');

            $berkas->scan_bill_hotel = $path;
        }
		
		if ($request->hasFile('scan_laporan_spd')) {

            // hapus foto lama
            \Storage::delete("public/".$berkas->scan_laporan_spd);

            // simpan foto baru
            $path = $request->file('scan_laporan_spd')->store("/berkas/", 'public');

            $berkas->scan_laporan_spd = $path;
        }
		
		if ($request->hasFile('scan_bill_rapidtest')) {

            // hapus foto lama
            \Storage::delete("public/".$berkas->scan_bill_rapidtest);

            // simpan foto baru
            $path = $request->file('scan_bill_rapidtest')->store("/berkas/", 'public');

            $berkas->scan_bill_rapidtest= $path;
        }
		
		$berkas->save();
		return redirect()->to("berkas");
		
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
		$berkas = Berkas::findOrFail($id);
		
            // hapus foto lama
            \Storage::delete("public/".$berkas->scan_nodin);

            $berkas->scan_nodin = null;
       
		
            // hapus foto lama
            \Storage::delete("public/".$berkas->scan_surattugas);

            $berkas->scan_surattugas = null;
       

            // hapus foto lama
            \Storage::delete("public/".$berkas->scan_spd);

            $berkas->scan_spd = null;
       
            // hapus foto lama
            \Storage::delete("public/".$berkas->scan_tiket);

            $berkas->scan_tiket = null;
       

            // hapus foto lama
            \Storage::delete("public/".$berkas->scan_boarding_pass);

            $berkas->scan_boarding_pass = null;
        

            // hapus foto lama
            \Storage::delete("public/".$berkas->scan_bill_hotel);

            $berkas->scan_bill_hotel = null;
       

            // hapus foto lama
            \Storage::delete("public/".$berkas->scan_laporan_spd);

            $berkas->scan_laporan_spd = null;
       

            // hapus foto lama
            \Storage::delete("public/".$berkas->scan_bill_rapidtest);
           
            $berkas->scan_bill_rapidtest= null;
        
		$berkas->save();
		return redirect()->to("berkas");
    }
	
	
}
