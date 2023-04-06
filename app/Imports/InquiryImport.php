<?php

namespace App\Imports;

use App\Models\Inquiry;
use App\Models\Katalog;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InquiryImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Inquiry([
            'sales' => $row['sales'],
            'judul' => $row['judul'],
            'jenis_instansi' => $row['jenis_instansi'],
            'tgl_prospek' => $row['tgl_prospek'],
            'alamat_instansi' => $row['alamat_instansi'],
            'divisi' => $row['divisi'],
            'status' => ucwords($row['status']),
        ]);
    }
}
