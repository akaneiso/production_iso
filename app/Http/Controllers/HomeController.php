<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vaccine;
use App\Models\Child;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        $children = Child::where('user_id', $user->id)->get();
        $vaccines2 = Vaccine::where('startdate','=', 2 )->get();
        $vaccines5 = Vaccine::where('startdate','=', 5 )->get();
        $vaccines12 = Vaccine::where('startdate','=', 12 )->get();

        return view('home', [
            'children' => $children,
            'vaccines2' => $vaccines2,
            'vaccines5' => $vaccines5,
            'vaccines12' => $vaccines12,

        ]);
    }
    
}
