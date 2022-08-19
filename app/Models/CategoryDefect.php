<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryDefect extends Model
{
    use HasFactory;
    protected $table = 'category_defect';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}
