<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturPikai extends Model
{
    use HasFactory;
    protected $table = 'retur_pikai';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function userDetails()
    {
        return $this->belongsTo(UserDetails::class,'np_user','np_user');
    }
}
