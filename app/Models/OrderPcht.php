<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPcht extends Model
{
    use HasFactory;
    protected $table = 'order_pcht';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}
