<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //
	protected $table = 'ms_pegawai';
	
	public function jabatan()
    {
        return $this->belongsTo('App\Jabatan', 'jabatan_id');
    }

    public function golongan()
    {
        return $this->belongsTo('App\Golongan', 'golongan_id');
    }
		
}
