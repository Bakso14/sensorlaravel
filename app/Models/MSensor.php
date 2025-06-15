<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MSensor extends Model
{
    protected $table = 'tb_sensor';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'suhu', 'kelembapan'];
}
