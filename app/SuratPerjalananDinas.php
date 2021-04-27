<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratPerjalananDinas extends Model
{
    //
	protected $table = 'surat_perjalanan_dinas';
	
	public function opd()
    {
        return $this->belongsTo('App\Opd', 'spd_opd_id');
    }
	public function pegawai()
    {
        return $this->belongsTo('App\Pegawai', 'spd_pegawai_id');
    }
	public function ppk()
    {
        return $this->belongsTo('App\Pegawai', 'spd_ppk_id');
    }
	public function surattugas()
    {
        return $this->belongsTo('App\SuratTugas', 'spd_surattugas_id');
    }
	
	public function transportasi()
    {
        return $this->belongsTo('App\AlatTransportasi', 'spd_transportasi_id');
    }
	
	public function kota()
    {
        return $this->belongsTo('App\Kota', 'spd_kota_tujuan_id');
    }
}
