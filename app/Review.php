<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  public function getTitle(){
    return $this->title;
  }
  public function getContent(){
    return $this->content;
  }
  public function user(){
    return $this->belongsTo('App\User');
  }
  public function concerns(){
    return $this->belongsTo('App\Article');
  }
}
