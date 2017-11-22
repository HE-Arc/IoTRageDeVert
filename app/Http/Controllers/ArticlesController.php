<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

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
}
