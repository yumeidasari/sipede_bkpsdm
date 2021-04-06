<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratTugas extends Model
{
    //
	protected $table = 'surat_tugas';
	
	public function pegawai()
    {
        return $this->belongsTo('App\Pegawai', 'st_pegawai_id_tujuan');
    }

    public function penandatangan()
    {
        return $this->belongsTo('App\Pegawai', 'st_penanda_tangan_id');
    }
}
