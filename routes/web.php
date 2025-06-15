<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorLaravel;

Route::get('/', function () {
    return view('monitoring');
});

Route::get('/bacasuhu', [SensorLaravel::class, 'bacasuhu']);

Route::get('/bacakelembapan', [SensorLaravel::class, 'bacakelembapan']);

Route::get('/simpan/{nilaisuhu}/{nilaikelembapan}' , [SensorLaravel::class, 'simpansensor']);