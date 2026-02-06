<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function showCategory (){
        return view('backend.category.index');
    }

    function storeCategory(Request $request){
        //* Validation
       $request->validate([
        'title' => 'required|min:3|max:60',
        'icon' => 'nullable|mimes:png,jpeg,jpg,webp'
       ],[
        'title.required' => "Please enter a title!"
       ]);

        // File Upload
       $categoryIcon  = $request->hasFile('icon') ? $request->icon->store('category', 'public') : null;

       // Database Store
      $category =  Category::create([
        'title' => $request->title,
        'slug'=> str($request->title)->slug(),
        'icon'=> $categoryIcon
       ]);

       dd($category);
    

    }
}
