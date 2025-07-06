<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home()
  {
    return view('frontend.pages.home');
  }

  public function detail()
  {
    return view('frontend.pages.detail');
  }

  public function shop()
  {
    return view('frontend.pages.shop');
  }
}
