<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $primaryKey = 'idsiswa';
    protected $table = 'tbl_siswa'; 
    protected $fillable = ['nis','namasiswa','kelas','hp','created_at','updated_at'];
}
