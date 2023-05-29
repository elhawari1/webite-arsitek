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
        <!-- Info boxes -->
        <form action="/admin/project/store" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="d-flex justify-content-around pt-3">
                <div class="container">
                    <h6>Title</h6>
                    <input type="text" name="title" placeholder="Title" class="form-control"
                        value="{{ old('title') }}">
                    @error('title')<p class="tex text-danger">{{ $message }}</p>@enderror
                    <h6 class="pt-2">Type</h6>
                    <input type="text" name="type" placeholder="Type" class="form-control"
                        value="{{ old('type') }}">
                    @error('type')<p class="tex text-danger">{{ $message }}</p>@enderror
                    <h6 class="pt-2">Width</h6>
                    <input type="number" name="Width" placeholder="width" class="form-control"
                        value="{{ old('width') }}">
                    @error('width')<p class="tex text-danger">{{ $message }}</p>@enderror
                    <h6 class="pt-2">Height</h6>
                    <input type="text" name="height" placeholder="Height" class="form-control"
                        value="{{ old('height') }}">
                    @error('height')<p class="tex text-danger">{{ $message }}</p>@enderror
                    <h6 class="pt-2">Colour</h6>
                    <input type="text" name="colour" placeholder="Colour" class="form-control"
                        value="{{ old('colour') }}">
                    @error('colour')<p class="tex text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="container">
                    <h6>Image For Thumbnail</h6>
                    <input id="input-fa" type="file" name="image_thumbnail"
                        value="{{ old('image_thumbnail') }}" data-browse-on-zone-click="true">
                    @error('image_thumbnail')<p class="tex text-danger">{{ $message }}</p>@enderror
                </div>
            </div>

            <div class="form-group pt-5 text-center">
                <a href="/admin/product" class="btn btn-danger btn">Kembali</a>
                <button type="submit" class="btn btn-primary btn">Simpan</button>
            </div>
        </form>
    </div>
</section>

@endsection
