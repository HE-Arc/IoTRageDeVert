<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use DB;

class ReviewsController extends Controller
{
  public function showAll($id){
    return view('listreviews', ['article_id' => $id]);
  }

  public function showOne($id){
    return view('review', ['review_id' => $id]);
  }

  public function showNew($id){
    return view('newReview', ['article_id' => $id]);
  }

  public function edit($articleid)
  {
      return view('editReview', ['id' => $articleid]);
  }

  public function update(Request $request){
        $content = $request->input('content');
        $title = $request->input('title');
        $article_id = $request->input('article_id');
        $user_id  = $request->input('user_id');
        $id = $request->input('id');
        $now = new \DateTime();
        DB::table('reviews')
          ->where('id', $id)
          ->update([
              'title' => $title,
              'content' => $content,
              'article_id' => $article_id,
              'user_id' => $user_id,
              'updated_at' => $now
          ]);

        return view('home');
      }

  public function submit(Request $request){
        $content = $request->input('content');
        $title = $request->input('title');
        $article_id = $request->input('article_id');
        $user_id  = $request->input('user_id');
        $now = new \DateTime();
        DB::table('reviews')->insert([
              'title' => $title,
              'content' => $content,
              'article_id' => $article_id,
              'user_id' => $user_id,
              'created_at' => $now,
              'updated_at' => $now
          ]);

        return view('articles');
      }
}
