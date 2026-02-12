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
                        <th>Short Description</th>
                        
                        <th>Catagory</th>
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
                        
                        
                        <td> </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="icon-base bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                            class="icon-base bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                            class="icon-base bx bx-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
