<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_produk extends Model
{
    use HasFactory;
    // memanggil table
    protected $table = 'jenis_produk';

    //kolom dalam table
    protected $filelabel = ['nama'];
    public $timestamps = false;
    //relasi antara table
    public function Produk(){
        return $this->hasMany(Produk::class);
    }
}
