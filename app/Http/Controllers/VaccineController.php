<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine;
use App\Models\Child;
use COM;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VaccineController extends Controller
{
    //接種予定・済みワクチンの表示
    public function index(Request $request)
    {
        $children = Child::where('id', '=', $request->id)->get();
        $vaccines1 = Vaccine::where('id', 1)->get();
        $vaccines2 = Vaccine::where('id', 2)->get();
        $vaccines3 = Vaccine::where('id', 3)->get();
        $vaccines4 = Vaccine::where('id', 4)->get();
        $vaccines5 = Vaccine::where('id', 5)->get();
        $vaccines6 = Vaccine::where('id', 6)->get();
        $vaccines7 = Vaccine::where('id', 7)->get();
        $vaccines8 = Vaccine::where('id', 8)->get();
        $vaccines9 = Vaccine::where('id', 9)->get();
        $vaccines10 = Vaccine::where('id', 10)->get();
        $vaccines11 = Vaccine::where('id', 11)->get();

        return view('user.vaccines', [
            'children' => $children,
            'vaccines1' => $vaccines1,
            'vaccines2' => $vaccines2,
            'vaccines3' => $vaccines3,
            'vaccines4' => $vaccines4,
            'vaccines5' => $vaccines5,
            'vaccines6' => $vaccines6,
            'vaccines7' => $vaccines7,
            'vaccines8' => $vaccines8,
            'vaccines9' => $vaccines9,
            'vaccines10' => $vaccines10,
            'vaccines11' => $vaccines11,

        ]);
    }

    //接種完了チェックを表示してリダイレクト
    public function done(Request $request)
    {
        Child::find($request->id)->update([
            'vaccine1' => $request->vaccine1,
            'vaccine2' => $request->vaccine2,
            'vaccine3' => $request->vaccine3,
            'vaccine4' => $request->vaccine4,
            'vaccine5' => $request->vaccine5,
            'vaccine6' => $request->vaccine6,
            'vaccine7' => $request->vaccine7,
            'vaccine8' => $request->vaccine8,
            'vaccine9' => $request->vaccine9,
            'vaccine10' => $request->vaccine10,
            'vaccine11' => $request->vaccine11,
        ]);

        return redirect('/vaccines/' . $request->id);
    }
    //登録情報の追加
    public function add(Request $request)
    {

        if ($request->isMethod('post')) {
            // バリデーション
            $this->validate($request, [
                'child_name' => 'required|max:30',
                'birthday' => 'required'
            ], [
                'child_name.required' => '名前は必須です。',
                'child_name.max' => '名前は30文字以内です。',
                'birthday.required' => '生年月日は必須です。'
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
    public function edit(Request $request, $id)
    {
        //一覧から指定されたIDと同じIDのレコードを取得するし表示
        $user = Auth::user();
        $child = Child::where('id', $id)->first();
        return view('user.editregister', ['child' => $child]);
    }
    //編集したお子様情報を登録

   
    public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(),[
            'child_name' => 'required|max:30',
            'birthday' => 'required',
        ],[
            'child_name.required' => '名前は必須です',
            'child_name.max' => '名前は30文字以内です。',
            'birthday.required' => '生年月日は必須です。'
        ]);

        if($validator->fails()){
            return redirect()->back()
            ->withInput()
            ->withErrors($validator);
        }
        
        $user = Auth::user();
        $child = Child::where('id', $id)->first();
        $child->child_name = $request->child_name;
        $child->birthday = $request->birthday;
        $child->save();
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
        return view('user.vaccineschedule', compact('vaccines'));
    }
}
