<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   function addProduct(){
    $categories = Category::where('status', true)->select('id','title')->latest()->get();
    return view('backend.product.add-product', compact('categories'));
   }
   function productList(){
      return view('backend.product.product-list');
   }
}
