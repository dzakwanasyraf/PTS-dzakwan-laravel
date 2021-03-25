<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = "dataKaryawan";
    protected $fillable = ['namaKaryawan','hadirMasuk','izinMasuk','bolosMasuk','telatMasuk'];
}
