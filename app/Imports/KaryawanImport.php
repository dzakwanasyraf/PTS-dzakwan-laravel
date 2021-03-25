<?php

namespace App\Imports;


use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Karyawan;

class KaryawanImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Karyawan([
            'namaKaryawan' => $row[0],
            'hadirMasuk' => $row[1],
            'izinMasuk' => $row[2],
            'bolosMasuk' => $row[3],
            'telatMasuk' => $row[4],
            
        ]);
    }
}
