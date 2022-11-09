<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPcht extends Model
{
    use HasFactory;
    public $primaryKey = 'no_po';
    protected $table = 'order_pcht';
    protected $guarded = [
        'created_at',
        'updated_at'
    ];
}
