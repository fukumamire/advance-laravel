<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // セッションからデータを取得してビューに渡すメソッド
    public function getSes(Request $request)    
    {
        // $request->session()->get('txt')でセッションから'txt'というキーで保存されたデータを取得
        $data = $request->session()->get('txt');
        // ビューにデータを渡して'/session'ビューを表示
        return view('/session', ['data' => $data]);
    }
      // フォームから送信されたデータをセッションに保存するメソッド
    public function postSes(Request $request)
    {
        // $request->inputでリクエストからの入力データを取得
        $txt = $request->input;
         // $request->session()->put('txt', $txt)でセッションに'txt'というキーでデータを保存
        $request->session()->put('txt', $txt);
        // '/session'にリダイレクトする
        return redirect('/session');
    }
}
