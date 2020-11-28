<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function add()
    {
        $post = Posts::orderBy('created_at', 'DESC')->whereNull('deleted_at')->get();
        $user = User::all();
        return view('post.create', compact('post', 'user'));
    }
    public function create(Request $request)
    {
      // Varidationを行う
      $this->validate($request, Posts::$rules);
      $post = new Posts;
      $form = $request->all();
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      $user = Auth::user();
      $form['user_id'] = $user->id;
      $post->fill($form);
      
      // データベースに保存する
      $post->save();
      return redirect('post/create');
    }
    public function deleteData($id)
    {
        $post = Posts::find($id);
        $post->delete();
        return redirect('post/create');
    }
}
