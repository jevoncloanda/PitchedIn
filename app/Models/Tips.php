<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tips extends Model
{
    use HasFactory;

    protected $fillable = [
        'caption', 'tag', 'image', 'user_id'
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
