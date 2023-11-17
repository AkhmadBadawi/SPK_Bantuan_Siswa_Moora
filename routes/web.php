<?php

use App\Http\Controllers\DataAlternatifController;
use App\Http\Controllers\DataBobotController;
use App\Http\Controllers\DataKriteriaController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\NormalisasiData;
use App\Http\Controllers\RangkingBantuanSiswa;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('back', function () {
    return redirect('home');
});

Route::get('data_kriteria', [DataKriteriaController::class,'getData']);

Route::get('data_bobot', [DataBobotController::class,'getData']);

Route::get('data_siswa', [DataSiswaController::class,'getData']);

Route::get('form_siswa', [DataSiswaController::class,'form_isi']);


Route::post('add_siswa', [DataSiswaController::class,'insert']);

Route::get('{id_alternatif}/edit_siswa', [DataSiswaController::class,'edit']);

Route::get('{id_alternatif}/delete_siswa', [DataSiswaController::class,'delete']);

Route::put('{id}', [DataSiswaController::class,'update']);

Route::get('data_alternatif', [DataAlternatifController::class,'getData']);

Route::get('normalisasi', [NormalisasiData::class,'normalisasi']);

Route::get('rangking', [RangkingBantuanSiswa::class,'rangking']);
