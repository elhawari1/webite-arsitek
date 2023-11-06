@extends('layout_admin.v_index')
@section('title', 'Add Product')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2" style="align-items: flex-end">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Product</h1>
                    <ol class="breadcrumb float-sm">
                        <li class="breadcrumb-item active"><a href="/admin/product">Product</a></li>
                        <li class="breadcrumb-item">Add Product</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Product</h3>
                </div>
                <form action="/admin/product/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex justify-content-around pt-3">
                        <div class="container">
                            <div class="container pt-2">
                                <div class="row">
                                    <div class="col">
                                        <h6>Title</h6>
                                        <input type="text" name="title" placeholder="Title" class="form-control"
                                            value="{{ old('title') }}">
                                        @error('title')
                                            <p class="tex text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <h6>Type</h6>
                                        <input type="text" name="type" placeholder="Type" class="form-control"
                                            value="{{ old('type') }}">
                                        @error('type')
                                            <p class="tex text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="container pt-2">
                                <div class="row">
                                    <div class="col">
                                        <h6>Colour</h6>
                                        <input type="text" name="colour" placeholder="Colour" class="form-control"
                                            value="{{ old('colour') }}">
                                        @error('colour')
                                            <p class="tex text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <h6>Weight</h6>
                                        <input type="number" name="weight" placeholder="Weight" class="form-control"
                                            value="{{ old('weight') }}">
                                        @error('weight')
                                            <p class="tex text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="container pt-2">
                                <div class="row">
                                    <div class="col">
                                        <h6>Length</h6>
                                        <input type="number" name="length" placeholder="Length" class="form-control"
                                            value="{{ old('length') }}">
                                        @error('length')
                                            <p class="tex text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <h6>Width</h6>
                                        <input type="number" name="width" placeholder="Width" class="form-control"
                                            value="{{ old('width') }}">
                                        @error('width')
                                            <p class="tex text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <h6>Height</h6>
                                        <input type="number" name="height" placeholder="Height" class="form-control"
                                            value="{{ old('height') }}">
                                        @error('height')
                                            <p class="tex text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="container">
                            <h6>Image</h6>
                            <input id="input-fa" type="file" name="image" value="{{ old('image') }}"
                                class="form-control file" data-browse-on-zone-click="true">
                            @error('image')
                                <p class="tex text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group pt-5 text-center">
                        <a href="/admin/product" class="btn btn-danger btn">Back</a>
                        <button type="submit" class="btn btn-primary btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
