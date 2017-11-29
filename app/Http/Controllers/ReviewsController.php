<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class ReviewsController extends Controller
{
  public function showAll($id){
    return view('listreviews', ['article_id' => $id]);
  }
}
