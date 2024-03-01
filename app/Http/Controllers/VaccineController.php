<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vaccine;
use App\Models\Child;

class VaccineController extends Controller
{
    //登録情報の追加
    public function add(Request $request)
    {
        
        if ($request->isMethod('post')) {
            // バリデーション
            $this->validate($request, [
                'child_name' => 'required|max:30',
            ], [
                'child_name.required' => '名前は必須です。',
                'child_name.max' => '名前は30文字以内です。',
            ]);

            Child::create([
                'child_name' => $request->child_name,
                'birthday' => $request->birthday,
                'user_id' =>  $request->user()->id
            ]);
            

            return redirect('/');
        }

            return view('user.addregister');
        }

        //お子様情報の修正


        //予防接種一覧画面表示
        public function __construct()
    {
        $this->middleware('auth');
    }
        public function show()
        {
            return view('user.vaccineschedule');
        }

    }