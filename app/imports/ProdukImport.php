<?php

namespace App\Imports;

use App\Models\Produk;
use Maatwebsite\Excel\Concerns\ToModel;
// use Illuminate\Support\Facades\Hash;

class ProdukImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Produk([
            //
            'kode' => $row[1],
            'nama' => $row[2],
            'harga' => $row[3],
           
            'star' => $row[4],
            'review' => $row[5],
            
            'jenis_produk_id' => $row[6],
        ]);
    }
}
