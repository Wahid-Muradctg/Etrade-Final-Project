<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   function addProduct(){
    return view('backend.product.add-product');
   }
   function productList(){
      return view('backend.product.product-list');
   }
}
