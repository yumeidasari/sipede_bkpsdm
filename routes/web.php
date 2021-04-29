<?php
use App\Pegawai;
use App\NotaDinas;
use App\SuratTugas;
use App\SuratPerjalananDinas;
use App\Anggaran;
use App\Kuitansi;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'web'], function()
{
	Route::auth();
});

Route::group(['middleware' => ['web','auth']], function()
{
	Route::get('/', function () {
		
		$jml_pegawai = count(Pegawai::All());
        //$jml_nodin = count(NotaDinas::All());
        $jml_surattugas = count(SuratTugas::All());
		$jml_spd = count(SuratPerjalananDinas::All());
		$jml_anggaran = count(Anggaran::All());
		$semua_anggaran = Anggaran::All();
		
		if($jml_anggaran != 0){
		for($i=0; $i<$jml_anggaran; $i++)
		{
			$thn_anggaran = $semua_anggaran[$i]->tahun;
			if( $thn_anggaran == date('Y') )
			{
				$sisa_anggaran = $semua_anggaran[$i]->sisa_anggaran;
				return view('dashboard', compact('jml_pegawai', 'sisa_anggaran', 'jml_surattugas', 'jml_spd'));
			}
			else{
				if($i == $jml_anggaran-1)
				{
					$sisa_anggaran = $semua_anggaran[$i]->jml_anggaran;
					return view('dashboard', compact('jml_pegawai', 'sisa_anggaran', 'jml_surattugas', 'jml_spd'));
				}
			}
		}
		}
		else
		{
			$sisa_anggaran = 0;
			return view('dashboard', compact('jml_pegawai', 'sisa_anggaran', 'jml_surattugas', 'jml_spd'));
		}
	//return view('');
	//Auth::routes();
	});
});

Route::get('/notadinas/{id}/nodin_pdf', 'NotaDinasController@nodin_pdf');
Route::get('/surattugas/{id}/surattugas_pdf', 'SuratTugasController@surattugas_pdf');
Route::get('/surattugas/{id}/surattugas_pdf', 'SuratTugasController@surattugas_pdf');
Route::get('/spd/{id}/spd_pdf', 'SPDController@spd_pdf');
Route::get('/spd/{id}/create', 'SuratTugasController@buat_spd'); //buat spd
Route::get('/berkas/{id}/create', 'SuratTugasController@upload_berkas');
Route::get('/rincianbiaya/{id}/create', 'SPDController@rincian_biaya');
Route::get('/rincianbiaya/{id}/rincianbiaya_pdf', 'RincianBiayaController@rincianbiaya_pdf');
Route::get('/kuitansi/{id}/kuitansi_pdf', 'KuitansiController@kuitansi_pdf');

Route::get('/pegawai/{id}/delete', 'PegawaiController@delete');
Route::get('/opd/{id}/delete', 'OpdController@delete');
Route::get('/jabatan/{id}/delete', 'JabatanController@delete');
Route::get('/golongan/{id}/delete', 'GolonganController@delete');
Route::get('/transportasi/{id}/delete', 'AlatTransportasiController@delete');
Route::get('/biaya/{id}/delete', 'BiayaController@delete');
Route::get('/kota/{id}/delete', 'KotaController@delete');
Route::get('/surattugas/{id}/st_confirm_status', 'SuratTugasController@st_confirm_status');
Route::get('/surattugas/{id}/st_tolak_status', 'SuratTugasController@st_tolak_status');
Route::get('/spd/{id}/spd_confirm_status', 'SPDController@spd_confirm_status');
Route::get('/spd/{id}/spd_tolak_status', 'SPDController@spd_tolak_status');

Route::resource('/opd','OpdController');
Route::resource('/jabatan', 'JabatanController');
Route::resource('/golongan', 'GolonganController');
Route::resource('/pegawai', 'PegawaiController');
Route::resource('/surattugas', 'SuratTugasController');
Route::resource('/notadinas', 'NotaDinasController');
Route::resource('/spd', 'SPDController');
Route::resource('/transportasi', 'AlatTransportasiController');
Route::resource('/biaya', 'BiayaController');
Route::resource('/berkas', 'BerkasController');
Route::resource('/rincianbiaya', 'RincianBiayaController');
Route::resource('/kuitansi', 'KuitansiController');
Route::resource('/kota', 'KotaController');
Route::resource('/anggaran', 'AnggaranController');

Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


Route::get('/home', 'HomeController@index')->name('home');
