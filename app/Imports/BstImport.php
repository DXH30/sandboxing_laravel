<?php

namespace App\Imports;

use App\Models\Bst;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithStartRow;

class BstImport implements ToModel, WithCustomCsvSettings, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bst([
            'id'=> $row[0],
            'KDPROPKDKAB'=> $row[1],
            'KDPROP'=> $row[2],
            'KDKAB'=> $row[3],
            'KDKEC'=> $row[4],
            'KDDESA'=> $row[5],
            'NAMA_PROVINSI'=> $row[6],
            'NAMA_KABKOTA'=> $row[7],
            'NAMA_KECAMATAN'=> $row[8],
            'NAMA_DESA'=> $row[9],
            'ALAMAT_LENGKAP'=> $row[10],
            'ALAMAT_CAPIL'=> $row[11],
            'ID_DTKS'=> $row[12],
            'ID_KELUARGA'=> $row[13],
            'ID_ART'=> $row[14],
            'NIK'=> $row[15],
            'NAMA'=> $row[16],
            'HASIL'=> $row[17],
            'start_time'=> $row[18],
            'end_time'=> $row[19],
            'status_usulan'=> $row[20],
            'status_data'=> $row[21],
            'WIL'=> $row[22],
            'MITRA'=> $row[23],
            'NOREKENING'=> $row[24],
            'FLAG'=> $row[25],
            'FLAG_PENYALURAN'=> $row[26],
            'FLAG_PKH_PERLUASAN'=> $row[27],
            'NOPESERTA_PKH_SEP'=> $row[28],
            'NOREKENING_PKH_SEP'=> $row[29],
            'FLAG_MB9'=> $row[30],
        ]);
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => "|"
        ];
    }

    public function startRow(): int
    {
        return 2;
    }
}
