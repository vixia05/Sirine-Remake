<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMmea extends Model
{
    use HasFactory;
    public $primaryKey = 'no_po';
    protected $table = 'order_mmea';
    protected $guarded = [
        'created_at',
        'updated_at'
    ];


    // public function hcts_mmea()
    // {
    //     return $this->belongsToMany(HctsMmea::class);
    // }
}
