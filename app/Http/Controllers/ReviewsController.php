<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Article;
use App\Review;
use Auth;
use App\Http\Controllers\Controller;
use DB;

class ReviewsController extends Controller
{
  public function showUserReviews(){
    $reviews = Review::where('user_id', Auth::id())->get();
    return view('myReviews', ['reviews' => $reviews]);
  }
  public function showAll($id){
    $article = Article::where('id', $id)->get();
    return view('listreviews', ['article_id' => $id, 'article' => $article]);
  }

  public function showOne($id){
    return view('review', ['review_id' => $id]);
  }

  public function showNew($id){
    return view('newReview', ['article_id' => $id]);
  }

  public function edit($id)
  {
      return view('editReview', ['id' => $id]);
  }

  public function update(Request $request){
        $content = $request->input('content');
        $title = $request->input('title');
        $article_id = $request->input('article_id');
        $user_id  = $request->input('user_id');
        $id = $request->input('id');
        $now = new \DateTime();
        $success = DB::table('reviews')
          ->where('id', $id)
          ->update([
              'title' => $title,
              'content' => $content,
              'article_id' => $article_id,
              'user_id' => $user_id,
              'updated_at' => $now
          ]);
          $c_articles = Article::all();
          return view('articles', ['c_articles' => $c_articles, 'review_updated' => $success]);
      }

  public function submit(Request $request){
        $content = $request->input('content');
        $title = $request->input('title');
        $article_id = $request->input('article_id');
        $user_id  = $request->input('user_id');
        $now = new \DateTime();
        $success = DB::table('reviews')->insert([
              'title' => $title,
              'content' => $content,
              'article_id' => $article_id,
              'user_id' => $user_id,
              'created_at' => $now,
              'updated_at' => $now
          ]);
        $c_articles = Article::all();
        return view('articles', ['c_articles' => $c_articles, 'review_created' => $success]);
      }
}
