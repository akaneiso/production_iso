<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'child_name',
        'birthday',
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
