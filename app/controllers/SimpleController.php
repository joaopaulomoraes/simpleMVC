<?php

namespace App\Controllers;

use App\Controllers\Controller;

class SimpleController extends Controller
{
  public function home()
  {
      return view('Index');
  }
}