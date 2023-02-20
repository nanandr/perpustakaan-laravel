<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peminjaman extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'tbl_peminjaman';
    protected $primaryKey = 'idpinjam';
    protected $fillable = ['idpetugas', 'idsiswa', 'idbuku', 'created_at', 'updated_at'];
    protected $dates = ['deleted_at'];

    public function petugas(){
        return $this->belongsTo('App\Models\Petugas', 'idpetugas');
    }
    public function siswa(){
        return $this->belongsTo('App\Models\Siswa', 'idsiswa');
    }
    public function buku(){
        return $this->belongsTo('App\Models\Buku', 'idbuku');
    }
}
