<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    //
	protected $table = 'users';
	
	public function pegawai()
    {
        return $this->belongsTo('App\Pegawai', 'pegawai_id');
    }

   
		
}