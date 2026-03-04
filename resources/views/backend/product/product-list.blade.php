@extends('layouts.BackendLayout')
@section('backend_cnt')
    <div class="card border border-light border-2 rounded-3 mb-4">
        <h4 class="card-header">Product List</h4>
        <div class="table-responsive text-nowrap">
            <table class="table table-responsive table-striped pb-5">
                <thead class="table-light">
                    <tr>
                        <th>Id</th>
                        <th>P.Name</th>
                        <th>p.image</th>
                        <th>Category</th>
                        <th>Slug</th>
                        <th>Regular Price</th>
                        <th>Sale Price</th>
                        <th>Sku</th>
                        <th>Stock</th>
                        <th>Brand Name</th>
                        <th>Model</th>
                        <th>Publish Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>

                        @foreach ($products as $key => $product)
                            <td>{{ ++$key }} </td>
                            <td>{{ $product->title }}</td>
                            <td>
                                <img width="80px" src="{{ getImage($product->image) }}" alt="{{ $product->title }}">
                            </td>
                            <td>{{$product->category_id}}</td>
                            <td>{{ $product->slug }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->sale_price }}</td>
                            <td>{{ $product->sku }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->brand_name }}</td>
                            <td>{{ $product->model }}</td>
                            <td>{{ $product->published_status }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('admin.product.add', $product->id) }}">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>
                                        <a class="dropdown-item text-danger" href="{{ route('admin.product.deleteproduct', $product->id) }}" onclick="return confirm('Are you sure?')">
                                            <i class="bx bx-trash me-1"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
