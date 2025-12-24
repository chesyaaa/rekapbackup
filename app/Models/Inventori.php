<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventori extends Model
{
    public function perusahaan() {
        return $this->belongsTo(Perusahaan::class);
    }

    public function departemen() {
        return $this->belongsTo(Departemen::class);
    }

    public function rekap_backup() {
        return $this->hasMany(RekapBackup::class);
    }

}
