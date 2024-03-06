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
        'vaccine1',
        'vaccine2',
        'vaccine3',
        'vaccine4',
        'vaccine5',
        'vaccine6',
        'vaccine7',
        'vaccine8',
        'vaccine9',
        'vaccine10',
        'vaccine11'

    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
