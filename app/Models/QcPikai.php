<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QcPikai extends Model
{
    use HasFactory;
    protected $table = 'verif_pikai';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function userDetails()
    {
        return $this->hasOne(UserDetails::class,'np_user','np_user');
    }
}
