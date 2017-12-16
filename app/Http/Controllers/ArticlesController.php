<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Article;
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
      $c_articles = Article::all();
      return view('articles', ['name' => 'Jebediah', 'c_articles' => $c_articles]);
    }

    public function showOne($articleid){
      $c_article = Article::where('id', $articleid)->get();
      return view('article', ['test' => $articleid, 'c_article' => $c_article]);
    }

    public function createNew(){
      return view('newArticle');
    }

    public function edit($articleid)
    {
        return view('editArticle', ['id' => $articleid]);
    }

    public function update(Request $request){
      $content = $request->input('content');
      $title = $request->input('title');
      $user_id = $request->input('user_id');
      $id = $request->input('id');
      $now = new \DateTime();
      DB::table('articles')
        ->where('id', $id)
        ->update([
            'title' => $title,
            'content' => $content,
            'user_id' => $user_id,
            'updated_at' => $now
        ]);
      return view('home');
    }

    public function submit(Request $request){
      $content = $request->input('content');
      $title = $request->input('title');
      $user_id = $request->input('user_id');
      $now = new \DateTime();
      DB::table('articles')->insert([
            'title' => $title,
            'content' => $content,
            'user_id' => $user_id,
            'created_at' => $now,
            'updated_at' => $now
        ]);
      return view('articles');
    }
}
