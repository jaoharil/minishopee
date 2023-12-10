<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    //memanggil tabel
    protected $table = 'pelanggan';
    //memanggil kolom dalam tabel pelanggan
    protected $fillable = [
        'kode','nama','jk','tmp_lahir','tgl_lahir','email','kartu_id'
    ];
    public $timestamps = false;

    //relasi tabel kartu
    public function kartu(){
        return $this->belongsTo(Kartu::class);
    }
}
