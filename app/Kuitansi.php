<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuitansi extends Model
{
    //
	protected $table = 'kuitansi';
	
	public function spd()
    {
        return $this->belongsTo('App\SuratPerjalananDinas', 'kui_spd_id');
    }
		
}
