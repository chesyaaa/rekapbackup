<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekapBackup extends Model
{
    public function inventori() {
        return $this->belongsTo(Inventori::class);
    }

    public function periode() {
        return $this->belongsTo(Periode::class);
    }

}
