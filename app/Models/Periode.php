<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $table = 'periode_backup';
    protected $fillable = ['nama_departemen', 'perusahaan_id']; 

}
