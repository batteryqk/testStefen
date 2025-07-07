<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
  public function home()
  {
    $data['products'] = Product::with(['primaryImage', 'nonPrimayImages', 'productAttributes'])->Featured()->latest()->take(3)->get();
    return view('frontend.pages.home', $data);
  }

  public function detail(string $slug)
  {
    $data['product'] = Product::where('slug', $slug)->first();
    $data['product']->load(['primaryImage', 'nonPrimayImages', 'productAttributes']);
  

    return view('frontend.pages.detail', $data);
  }

  public function shop()
  {
    $prods = Product::with(['primaryImage',])->latest()->paginate(12)->all();
    return view('frontend.pages.shop', compact('prods'));
  }

  public function product()
  {
    return view('frontend.pages.product',);
  }
}
