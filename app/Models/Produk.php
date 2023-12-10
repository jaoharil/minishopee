<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    //memanggil table
    protected $table = 'produk';
    //memanggil kolom dalam tabel produk
    protected $filelabel = [ 'kode','nama','harga','star','review','foto','jenis_produk_id'];

    //relasi one to many ke table yang berhubungan dengan produk
    public function jenis_produk(){
        return $this->belongsTo(Jenis_produk::class);
    }
    //relasi one to one
    // public function gaji(){
    //     return $this->hasOne(Gaji::class);
    // }
}
