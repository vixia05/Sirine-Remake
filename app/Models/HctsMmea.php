<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HctsMmea extends Model
{
    use HasFactory;
    protected $table = 'hcts_mmea';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}
