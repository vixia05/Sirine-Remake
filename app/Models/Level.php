<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $table = 'levels';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function privillage()
    {
       return $this->belongsToMany(Privillage::class);
    }
}
