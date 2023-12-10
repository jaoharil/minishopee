<?php

namespace App\Exports;

use App\Models\Produk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProdukExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Produk::all();
        $produk = Produk::join('jenis_produk', 'jenis_produk_id', '=', 'jenis_produk.id')
        ->select('produk.kode','produk.nama','produk.harga','produk.star',
         'produk.review', 'jenis_produk.nama as jenis')
        ->get();
        return $produk;
    }
    public function headings(): array{
        return ["Kode","Nama","Harga ","Star","Review","Jenis Produk"];
    }
}
