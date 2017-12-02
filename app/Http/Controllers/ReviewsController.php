<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class ReviewsController extends Controller
{
  public function showAll($id){
    return view('listreviews', ['article_id' => $id]);
  }
  public function showOne($id){
    return view('review', ['review_id' => $id]);
  }
  public function showNew($id){
    return view('newreview', ['article_id' => $id]);
  }
}
