<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;


class DiaryController extends Controller
{
    public function index()
    {
        // ::でメソッドを読んでるのはLaravelのファサード
        $diaries = Diary::all();
        // allはテーブルの中身を全て取得

        // dd($diaries);
        // dd->die and dump
        // var_dumpとexitをまとめて実行してくれる関数
    // viewディレクトリの中のindex(.blade).phpを返す
        // 第二引数に連想配列の形でviewで使用したいデーターをかく

        return view('diaries.index' , ['diaries'=>$diaries]);

    }
    public function create()
    {
        // views/diaries/create.blade.phpを表示する
        return view('diaries.create');
    }
    public function store(Request $request)
{
    $diary = new Diary(); //Diaryモデルをインスタンス化

    $diary->title = $request->title; //画面で入力されたタイトルを代入
    $diary->body = $request->body; //画面で入力された本文を代入
    $diary->save(); //DBに保存

    return redirect()->route('diary.index'); //一覧ページにリダイレクト
}

}