<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DefectQcPikai extends Model
{
    use HasFactory;
    protected $table = 'def_qc_pc';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}
