<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname', 'business_name', 'type1', 'type2', 'caption', 'image', 'attachment'
    ];
}
