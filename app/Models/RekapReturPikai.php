<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapReturPikai extends Model
{
    use HasFactory;
    protected $table = 'retur_pikai';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}
