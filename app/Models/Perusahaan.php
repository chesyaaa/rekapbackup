<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaan';
    protected $fillable = ['nama_perusahaan']; 

    public function departemen()
    {
        return $this->hasMany(Departemen::class, 'perusahaan_id', 'id');
    } 
}
