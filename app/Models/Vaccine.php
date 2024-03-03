<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Child;

class Vaccine extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'vaccinename',
        'startdate',
        'enddate',
    ];

    public function calc($id)
    {
        $child = Child::find($id);
        $birthday = $child->birthday;
        $date = $birthday;
        $birthdaymonth = date('n', strtotime($date));

        return $birthdaymonth;
    }
}
