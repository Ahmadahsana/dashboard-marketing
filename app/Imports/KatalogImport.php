<?php

namespace App\Imports;

use App\Models\Katalog;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KatalogImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Katalog([
            'nama_mesin' => $row['nama_mesin'],
            'qty' => $row['qty'],
            'sales' => $row['sales'],
            'lokasi' => $row['lokasi'],
            'nilai_kontrak' => $row['nilai_kontrak'],
            'status' => $row['status'],
            'deltime' => $row['deltime'],
        ]);
    }
}
