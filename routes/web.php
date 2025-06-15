<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorLaravel;

Route::get('/', function () {
    return view('monitoring');
});

Route::get('/bacasuhu', [SensorLaravel::class, 'bacasuhu']);

Route::get('/bacakelembapan', [SensorLaravel::class, 'bacakelembapan']);

Route::get('/bacanama', [SensorLaravel::class, 'bacanama']);

Route::get('/simpan/{nilainama}/{nilaisuhu}/{nilaikelembapan}' , [SensorLaravel::class, 'simpansensor']);