<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine;
use App\Models\Child;
use Illuminate\Support\Facades\Auth;

class VaccineController extends Controller
{
//接種予定・済みワクチンの表示
    public function index(Request $request)
    {
        //$user = Auth::user();
        //$children = Child::where('user_id', $user->id)->get();
        $children = Child::where('id', '=', $request->id)->get();
        $vaccines2 = Vaccine::where('startdate','=', 2 )->get();
        $vaccines5 = Vaccine::where('startdate','=', 5 )->get();
        $vaccines12 = Vaccine::where('startdate','=', 12 )->get();
        $vaccines36 = Vaccine::where('startdate','=', 36 )->get();

        return view('user.vaccines', [
            'children' => $children,
            'vaccines2' => $vaccines2,
            'vaccines5' => $vaccines5,
            'vaccines12' => $vaccines12,
            'vaccines36' => $vaccines36,

        ]);
    }

    //接種完了チェックすると完了マークを表示してリダイレクト
    public function done(Request $request)
    {
        Vaccine::find('id', '=', $request->id)->update([
            'type' => $request->type
        ]);

        return redirect('/vaccines/{id}');

    }
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
        $children = Child::where('user_id', $user->id)->delete();

        return redirect('/');
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