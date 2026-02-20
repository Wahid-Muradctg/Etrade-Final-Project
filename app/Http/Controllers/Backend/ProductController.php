<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\product;

class ProductController extends Controller
{
    public function addProduct()
    {
        $categories = Category::where('status', true)->select('id', 'title')->latest()->get();
        $products = product::latest()->get();

        return view('backend.product.add-product', compact('categories', 'products'));
    }

    public function storeProduct(ProductRequest $request)
    {
        // store images
        $productImg = $request->hasFile('image') ? $request->image->store('product', 'public') : null;
        $galImg = $request->hasFile('gall_img') ? $request->gall_img->store('galleryimg', 'public') : null;
        // database store
        $product = product::create([
            'title' => $request->title,
            'slug' => str($request->title)->slug(),
            'short_description' => $request->short_description,
            'description' => $request->description,
            'catagory_id' => $request->catagory_id,
            'brand_name' => $request->brand_name,
            'model' => $request->model,
            'sku' => $request->sku,
            'stock' => $request->stock,
            'minstock' => $request->minstock,
            'stock_status' => $request->stock_status,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'image' => $request->image,
            'gall_img' => $request->gall_img,
            'published_status' => $request->published_status,
            'published_date' => $request->published_date,
        ]);

        return back()->with('msg', [
            'type' => 'success',
            'content' => 'New Product Added!',
        ]);

    }

    public function productList()
    {
        return view('backend.product.product-list');
    }

    // delete product
    public function deleteProduct($id)
    {
        $oldProduct = product::findOrFail($id);
        if ($oldProduct->image && Storage::disk('public')->exists($oldProduct->image)) {
            // Previous img delete
            Storage::disk('public')->delete($oldProduct->image);
        }
        $oldProduct->delete();

        return to_route('admin.product.list')->with('msg', [
            'type' => 'error',
            'content' => 'New Product Added!',
        ]);
    }

    //  update product
    public function updateProduct(ProductRequest $request, $id)
    {
        $oldProduct = product::findOrFail($id);
        $productImg = $request->hasFile('image') ? $request->image->store('product', 'public') : null;
        $galImg = $request->hasFile('gall_img') ? $request->gall_img->store('galleryimg', 'public') : null;

        $product = product::create([
            'title' => $request->title,
            'slug' => str($request->title)->slug(),
            'short_description' => $request->short_description,
            'description' => $request->description,
            'catagory_id' => $request->catagory_id,
            'brand_name' => $request->brand_name,
            'model' => $request->model,
            'sku' => $request->sku,
            'stock' => $request->stock,
            'minstock' => $request->minstock,
            'stock_status' => $request->stock_status,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'image' => $request->image,
            'gall_img' => $request->gall_img,
            'published_status' => $request->published_status,
            'published_date' => $request->published_date,
        ]);

        return back()->with('msg', [
            'type' => 'success',
            'content' => 'New Product Added!',
        ]);
    }
}
