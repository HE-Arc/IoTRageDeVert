<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  public function user()
  {
      return $this->belongsTo('App\User');
  }
  public function date_c(){
    return $this->created_at;
  }
  public function date_u(){
    return $this->updated_at; 
  }
  public function reviews()
  {
    return $this->hasMany('App\Review');
  }

  public function getContent(){
    return $this->content;
  }

  public function getTitle(){
    return $this->title;
  }

  public function getId(){
    return $this->id;
  }

}
