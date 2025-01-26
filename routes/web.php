<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/daftar', function () {
    return view('/daftar/halaman-daftar');
});
Route::get('/pelatihan', function () {
    return view('/pelatihan/pelatihan');
});
Route::get('/riwayat', function () {
    return view('/riwayat/riwayat');
});
Route::get('/sertifikat', function () {
    return view('/sertifikat/sertifikat');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\RegistrationController;

//tolong buatkan route class training menjadi satu saja, bukan satu-satu, maksudnya jadikan Route::resource
Route::resource('training', TrainingController::class);

Route::get('/trainings', [TrainingController::class, 'index']);
Route::get('/trainings/{id}', [TrainingController::class, 'show']);
Route::post('/register', [RegistrationController::class, 'store']);
