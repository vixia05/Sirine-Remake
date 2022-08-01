<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QcPikai extends Model
{
    use HasFactory;
    protected $table = 'qc_pc';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}
