<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Buku extends Model
{
    use HasFactory;
    protected $primaryKey = 'idbuku';
    protected $table = 'tbl_buku'; 
    protected $fillable = ['judul','kodebuku','pengarang','penerbit','created_at','updated_at'];
}
