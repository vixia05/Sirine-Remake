<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HctsPcht extends Model
{
    use HasFactory;
    protected $table = 'hcts_pcht';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function orderPcht()
    {
        return $this->belongsTo(OrderPcht::class,'po_hcts','no_po');
    }
}
