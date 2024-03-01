<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;

class ChildController extends Controller
{
    public function countage($id)
    {
        $child = Child::find($id);
        // 現在日付
        $now = date('Ymd');
        // 誕生日
        //$birthday = "1990-07-01";
        $birthday = $child->birthday_year . "-" . $child->birthday_month . "-" . $child->birthday_day;
        $birthday = str_replace("-", "", $birthday);

        // 年齢
        $age = floor(($now - $birthday) / 10000);
20240301-20240101=200/12
        return view('home', [
            'age' => $age
        ]);

        //$agemonth = date('m', strtotime($birthday));
    }
}
