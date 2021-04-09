<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaDinas extends Model
{
    //
	protected $table = 'nota_dinas';
	
	public function pegawai()
    {
        return $this->belongsTo('App\Pegawai', 'nd_pegawai_id');
    }
}
