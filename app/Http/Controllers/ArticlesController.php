<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use DB;

class ArticlesController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    public function showAll(){
      return view('articles', ['name' => 'Jebediah']);
    }

    public function showOne($articleid){
      return view('article', ['test' => $articleid]);
    }

    public function createNew(){
      return view('newArticle');
    }

    public function edit($articleid)
    {
        return view('editArticle', ['id' => $articleid]);
    }

    public function submit(Request $request){
      $content = $request->input('content');
      $title = $request->input('title');
      $user_id = $request->input('user_id');
      DB::table('articles')->insert([
            'title' => $title,
            'content' => $content,
            'user_id' => $user_id
        ]);
      return view('articles');
    }
}
