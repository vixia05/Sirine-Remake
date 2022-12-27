<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;
    protected $table = 'user_details';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function divisi()
    {
        return $this->hasOne(Divisi::class,'id','id_divisi');
    }

    public function unit()
    {
        return $this->hasOne(Unit::class,'id','id_unit');
    }
}
