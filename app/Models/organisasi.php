<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organisasi extends Model
{
    use HasFactory;
    protected $table = 'organisasi';
    protected $fillable = ['id','id_organisasi','jenis','nama','periode','ketua','nis','pembina','anggaran'];
    // protected $primaryKey = 'id_organisasi';
    // protected $guarded = [];
}
