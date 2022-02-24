<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Postモデルを使う宣言
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        // postsテーブルからすべてのデータを取ってくる
        $posts = Post::all();
        // dd($posts);
        return view('posts.index', ['posts' => $posts]);
    }

    function create()
    {
        return view('posts.create');
    }

    // Request = ファザード（Laravelの技法）
    function store(Request $request)
    {
        // $requestに入っている値を、new Postでデータベースに保存する
        $post = new Post;
        $post -> title = $request -> title;
        $post -> body = $request -> body;
        // Auth::id = データを送ったユーザー
        $post -> user_id = Auth::id();

        $post -> save();

        return redirect() -> route('posts.index');
    }

    function show($id)
    {
        // postsテーブルから1つのidのデータを取ってくる
        $post = Post::find($id);
        return view('posts.show', ['post'=>$post]);
    }
}
