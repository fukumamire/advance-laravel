<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;    
// フォームリクエストの読み込み 
use App\Http\Requests\AuthorRequest;

class AuthorController extends Controller
{
    // データ一覧ページの表示
    public function index()
    {
        $authors = Author::all();
        return view('index', ['authors' => $authors]);
    } 

    // データ追加用ページの表示
    public function add()
    {
        return view('add');
    }

    // データ追加機能
    public function create(AuthorRequest $request)
    {
        $form = $request->all();
        Author::create($form);
        return redirect('/');
    }
    // 追記：ここから
    // データ編集ページの表示
    public function edit(Request $request)
    {
        $author = Author::find($request->id);
        return view('edit', ['form' => $author]);
    }

     // 更新機能
    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        // Author::where('id', $request->id)->update($form);
        Author::find($request->id)->update($form);
        return redirect('/');
    }
    // データ削除用ページの表示
    public function delete(Request $request)
    {
        $author = Author::find($request->id);
        return view('delete', ['author' => $author]);
    }

     // 削除機能
    public function remove(Request $request)
    { 
        Author::find($request->id)->delete();
        return redirect('/');
    }
    // 検索
    public function find()
    {
        return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
        // $item = Author::where('name', 'LIKE',"%{$request->input}%")->first();
        $item = Author::where('name', $request->input)->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', $param);
    }
    public function bind(Author $author)
    {
        $data = [
            'item'=>$author,
        ];
        return view('author.binds', $data);
    }
}