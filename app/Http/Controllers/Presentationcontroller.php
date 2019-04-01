<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Presentationcontroller extends Controller
{
  public function presentation()
  {
      return view('presentation');
  }
}
