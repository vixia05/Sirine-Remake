<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privillage extends Model
{
    use HasFactory;
    protected $table = 'privillage';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function level()
    {
       return $this->belongsTo(Level::class,'level_user','level');
    }

    public function userDetails()
    {
       return $this->hasOne(UserDetails::class,'np_user','np_user');
    }
}
