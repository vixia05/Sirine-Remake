<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluasi extends Model
{
    use HasFactory;
    protected $table = 'evaluasi';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function userDetails()
    {
        return $this->hasOne(UserDetails::class,'np_user','np_user');
    }

    public function evaluatorDetails()
    {
        return $this->hasOne(UserDetails::class,'np_user','np_evaluator');
    }
}
