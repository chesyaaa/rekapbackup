<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;

    protected $table = 'departemen';
    protected $fillable = ['nama_departemen', 'perusahaan_id']; 

    public function perusahaan() {
        return $this->belongsTo(Perusahaan::class);
    }

    public function inventori() {
        return $this->hasMany(Inventori::class);
    }

}
