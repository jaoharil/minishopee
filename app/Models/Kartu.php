<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartu extends Model
{
    use HasFactory;
    //memanggil table
    protected $table = 'kartu';

    //memanggil kolom
    protected $filelabel = [
        'kode','nama','diskon','iuran'
    ];

    //relasi tabel pelanggan
    public function pelanggan() {
    return $this->hasMany(Pelanggan::class);
    }
}
