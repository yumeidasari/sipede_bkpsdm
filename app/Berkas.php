<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    //
	protected $table = 'berkas_laporan_spd';
	
	public function surattugas()
    {
        return $this->belongsTo('App\SuratTugas', 'surattugas_id');
    }
}
