<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tweet; //追記
use Illuminate\Support\Facades\Auth;
use App\Delete;

class TodoController extends Controller
{
  protected $guarded = array('id');

  public function list()
  {
      $tweets = Tweet::where('user_id', Auth::user()->id)->get();
      $tweets = Tweet::orderBy('created_at', 'desc')->get(); 
      return view('tweet.create', compact('tweets', $tweets));
  }

  public function create(Request $request)
  {
      $request->validate([
          'body' => 'required|max:255',
      ]);   

      $tweet = new Tweet;
      $tweet->body = $request->body;
      $tweet->user_id = Auth::user()->id;
      $tweet->save();

      return redirect('tweet/create');    
  }

  public function delete(Request $request)
    {

        // 該当するTodo Modelを取得
        $tweets = Tweet::find($request->id);
        // 削除する
        $tweets->delete();
        return redirect('tweet/create');
    }
}