@extends('layouts.BackendLayout')
@section('backend_cnt')
    <div class="heading pb-4">
        <h2>Add New Product</h2>
        <p>Add a new product to your store</p>
    </div>
    <form action="" enctype="multipart/form-data" method="POST">
        <div class="row">

            <div class="col-lg-6 col-12">
                <div class="card border border-light border-2 rounded-3 mb-4">
                    <h4 class="card-header">Name and Description</h4>
                    <hr class="p-0 m-0">
                    <div class="card-body">
                        <div>
                            <label for="productName" class="form-label">Prodact Name/Title</label>
                            <input type="text" class="form-control" id="productName" name="title"
                                aria-describedby="defaultFormControlHelp" />
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="productShortDescription" class="form-label">Prodact Short Description</label>
                            <input type="text" class="form-control" id="productShortDescription" name="shortdes"
                                aria-describedby="defaultFormControlHelp" />
                                @error('shortdes')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                        </div>
                        <div>
                            <label for="productDescription" class="form-label">Product Description</label>
                            <textarea class="form-control" id="productDescription" rows="5" name="description"></textarea>
                            @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                        </div>
                    </div>
                </div>
                <div class="card border border-light border-2 rounded-3 mb-4">
                    <h4 class="card-header">Catagory</h4>
                    <hr class="p-0 m-0">
                    <div class="card-body">
                        <div class="mb-4">
                            <label for="catagorySelect" class="form-label">Product Catagory</label>
                            <select class="form-select" name="catagory" id="catagorySelect"
                                aria-label="Default select example">

                                <option selected>Headphone</option>
                            </select>
                            
                        </div>
                        <div>
                            <label for="productSlug" class="form-label">Product Slug</label>
                            <input type="text" class="form-control" id="productSlug" name="slug"
                                aria-describedby="defaultFormControlHelp" />
                                @error('slug')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                        </div>
                    </div>
                </div>
                <div class="card border border-light border-2 rounded-3 mb-4">
                    <h4 class="card-header">Inventory</h4>
                    <hr class="p-0 m-0">
                    <div class="card-body">
                        <div>
                            <label for="sku" class="form-label">Stock Kepping Unit</label>
                            <input type="text" class="form-control" id="sku" name="sku"
                                aria-describedby="defaultFormControlHelp" />
                                @error('sku')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <label for="productStock" class="form-label">Product Stock</label>
                                <input type="number" class="form-control" id="productStock" name="productstock"
                                    aria-describedby="defaultFormControlHelp" />
                                    @error('productstock')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-lg-4 col-12">
                                <label for="productMiniumstock" class="form-label">Minium Stock</label>
                                <input type="number" class="form-control" id="productMiniumstock" name="pmstock"
                                    aria-describedby="defaultFormControlHelp" />
                                    @error('pmstock')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="mb-4 col-lg-4 col-12">
                                <label for="catagoryStatus" class="form-label">Product Status</label>
                                <select class="form-select" id="catagoryStatus" aria-label="Default select example">
                                    <option selected>In Stock</option>
                                    <option>Out Of Stock</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card border border-light border-2 rounded-3 mb-4">
                    <h4 class="card-header">Product Details</h4>
                    <hr class="p-0 m-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <label for="brand" class="form-label">Brand Name</label>
                                <input type="text" class="form-control" id="brand" name="bname"
                                    aria-describedby="defaultFormControlHelp" />
                                    @error('bname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-lg-6 col-12">
                                <label for="Model" class="form-label">Model</label>
                                <input type="text" class="form-control" id="Model" name="model"
                                    aria-describedby="defaultFormControlHelp" />
                                    @error('model')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-light border-2 rounded-3 mb-4">
                    <h4 class="card-header">Product Pricing</h4>
                    <hr class="p-0 m-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <label for="regularPrice" class="form-label">Regular Price</label>
                                <input class="form-control" name="regularprice" type="number" id="regularPrice" />
                            @error('regularprice')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="col-lg-6 col-12">
                                <label for="salePrice" class="form-label">Sale Price</label>
                                <input class="form-control" name="saleprice" type="number" id="salePrice" />
                           @error('saleprice')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <label for="discount" class="form-label">Discount</label>
                                <input class="form-control" name="discount" type="number" id="discount" />
                            @error('discount')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-light border-2 rounded-3 mb-4">
                    <h4 class="card-header">Product Image</h4>
                    <hr class="p-0 m-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <img src="" alt="">
                            </div>
                            
                        </div>
                        <div>
                            <label for="formFileLg" class="form-label">Choose Image</label>
                            <input class="form-control form-control-lg" name="productimg" id="formFileLg" type="file" />
                        @error('productimg')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                        </div>
                    </div>
                </div>
                <div class="card border border-light border-2 rounded-3 mb-4">
                    <h4 class="card-header">Schedule</h4>
                    <hr class="p-0 m-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="visibility" class="form-label">Product Visibility</label>
                                <select class="form-select" id="visibility" name="productpublish" aria-label="Default select example">
                                    <option selected>Published</option>
                                    <option>Schedule</option>
                                    <option>Hidden</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="publishDate" class="form-label">Publish Date</label>
                                <input type="date" class="form-control" id="publishDate" name="publishdate">
                                @error('publishdate')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-evenly pt-5">
                    <button class="btn btn-primary col-5 p-2"><i class="bx bx-save me-2"></i>Save product</button>
                    <button class="btn col-5 btn-dark p-2 "> <i class="bx bx-plus me-2"></i>Add Product</button>
                </div>
            </div>
        </div>
    </form>
@endsection
