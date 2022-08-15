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
}
