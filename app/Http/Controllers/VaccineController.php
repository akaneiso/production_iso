<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine;
use App\Models\Child;
use Illuminate\Support\Facades\Auth;

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
        public function edit(Request $request){
            //一覧から指定されたIDと同じIDのレコードを取得するし表示
        $user = Auth::user();
        $children = Child::where('user_id', $user->id)->get();
        
            return view('user.editregister',['children' => $children]);
        }
         //編集したお子様情報を登録
    public function update(Request $request)
    {
        $user = Auth::user();
        $children = Child::where('user_id', $user->id)->get();
        $children->child_name = $request->child_name;
        $children->birthday = $request->birthday;
        $children->save();

        return redirect('/editregister');
    }

    //子供情報を削除
    public function delete(Request $request)
    {
        $user = Auth::user();
        $children = Child::where('user_id', $user->id)->get();
        $children->delete();

        return redirect('/editregister');
    }

        //予防接種一覧画面表示
        public function __construct()
    {
        $this->middleware('auth');
    }
        public function show()
        {
            $vaccines = Vaccine::all();
            return view('user.vaccineschedule',compact('vaccines'));
        }

    }