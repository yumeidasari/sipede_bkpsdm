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
Route::get('/spd/{id}/create', 'SuratTugasController@buat_spd');

Route::resource('/opd','OpdController');
Route::resource('/jabatan', 'JabatanController');
Route::resource('/golongan', 'GolonganController');
Route::resource('/pegawai', 'PegawaiController');
Route::resource('/surattugas', 'SuratTugasController');
Route::resource('/notadinas', 'NotaDinasController');
Route::resource('/spd', 'SPDController');
Route::resource('/pangkat', 'PangkatController');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');