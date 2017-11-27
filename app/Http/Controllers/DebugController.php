<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebugController extends Controller
{
  public function show(){
    return view('debug');
  }
}
