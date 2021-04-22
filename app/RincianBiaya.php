<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RincianBiaya extends Model
{
    //
	protected $table = 'hys_rincian_biaya'; //mencatat semua biaya peritem dengan jumlah/nominalnya
	
	public function spd()
    {
        return $this->belongsTo('App\SuratPerjalananDinas', 'spd_id');
    }
	
	public function biaya()
    {
        return $this->belongsTo('App\Biaya', 'ref_rincian_biaya_id');
    }
}
