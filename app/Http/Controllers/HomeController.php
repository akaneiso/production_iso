<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vaccine;
use App\Models\Child;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function index(Request $request)
    {
        $users = User::all();
        $children = Child::all();
        //$vaccines = Vaccine::all();
        //Child::find(1);
        // $birthday = $children->birthday;
        // $date = $birthday;
        // $birthdaymonth = date('n', strtotime($date));

        return view('home', [
            'users' => $users,
            'children' => $children,
            //'vaccines' => $vaccines,
            //'birthdaymonth' => $birthdaymonth

        ]);
    }
    
}
