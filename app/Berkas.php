<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    //
	protected $table = 'berkas_laporan_spd';
	
	public function spd()
    {
        return $this->belongsTo('App\SuratPerjalananDinas', 'spd_id');
    }
}
