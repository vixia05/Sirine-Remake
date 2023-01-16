<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengirimanPikai extends Model
{
    use HasFactory;
    protected $table = 'pengiriman_pc';
    protected $guarded = [
        'created_at',
        'updated_at'
    ];
}
