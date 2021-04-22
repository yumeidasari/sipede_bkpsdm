<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notadinas/{id}/nodin_pdf', 'NotaDinasController@nodin_pdf');
Route::get('/surattugas/{id}/surattugas_pdf', 'SuratTugasController@surattugas_pdf');
Route::get('/surattugas/{id}/surattugas_pdf', 'SuratTugasController@surattugas_pdf');
Route::get('/spd/{id}/spd_pdf', 'SPDController@spd_pdf');
Route::get('/spd/{id}/create', 'SuratTugasController@buat_spd');
Route::get('/berkas/{id}/create', 'SuratTugasController@upload_berkas');
Route::get('/rincianbiaya/{id}/create', 'SPDController@rincian_biaya');
Route::get('/rincianbiaya/{id}/rincianbiaya_pdf', 'RincianBiayaController@rincianbiaya_pdf');
Route::get('/kuitansi/{id}/kuitansi_pdf', 'KuitansiController@kuitansi_pdf');

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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');