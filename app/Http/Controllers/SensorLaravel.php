<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MSensor;

class SensorLaravel extends Controller
{
    public function bacasuhu()
    {
        //baca nilai
        $sensor = MSensor::select('*')->get();
        //kirim ke tampilan bacasuhu (buat view bacasuhu)
        return view('bacasuhu',['nilaisensor' => $sensor]);
    }

    public function bacakelembapan()
    {
        //baca nilai
        $sensor = MSensor::select('*')->get();
        //kirim ke tampilan bacasuhu (buat view bacasuhu)
        return view('bacakelembapan',['nilaisensor' => $sensor]);
    }

    public function bacanama()
    {
        //baca nilai
        $sensor = MSensor::select('*')->get();
        //kirim ke tampilan bacasuhu (buat view bacasuhu)
        return view('bacanama',['nilaisensor' => $sensor]);
    }

    public function simpansensor()
    {
        MSensor::where('id','1')->update(['nama' => request()->nilainama, 'suhu' => request()->nilaisuhu, 'kelembapan' => request()->nilaikelembapan]);
    }
}
