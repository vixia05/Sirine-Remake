<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JamEfektif extends Model
{
    use HasFactory;
    protected $table = 'jam_efektif';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function workstation()
    {
        return $this->hasOne(Workstation::class,'id','id_workstation');
    }

    public function seksi()
    {
        return $this->hasOne(Seksi::class,'id','id_seksi');
    }
}
