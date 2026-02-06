@extends('layouts.BackendLayout')
@section('backend_cnt')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <table class="table table-responsive table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Category</td>
                                    <td>
                                        <a href="#">Edit</a>
                                        <a href="#">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">Add Category</div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{ route('admin.category.store') }}" method="POST">
                                @csrf
                                <div class="form-group my-2">
                                    <label class="d-block">Category Title <span class="text-danger">*</span></label>
                                    <input type="text" placeholder="eg: Electronics, Fashion..." class="form-control" name="title">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group my-2">
                                    <label class="d-block">Category Icon</label>
                                    <input type="file" class="form-control" name="icon">
                                    @error('icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    

@endsection