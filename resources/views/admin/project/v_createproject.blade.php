@extends('layout_admin.v_index')
@section('title','Create Project')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" style="align-items: flex-end">
            <div class="col-sm-6">
                <h1 class="m-0">Add Project</h1>
                <ol class="breadcrumb float-sm">
                    <li class="breadcrumb-item active"><a href="/admin/project">Project</a></li>
                    <li class="breadcrumb-item">Add Project</li>
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

            <div class="d-flex justify-content-around">
                <div class="container">
                    <h6>Title</h6>
                    <input type="text" name="title" placeholder="Name Title" class="form-control"
                        value="{{ old('title') }}">
                    @error('title')<p class="tex text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="container">
                    <h6>Type</h6>
                    <input type="text" name="type" placeholder="Name Type" class="form-control"
                        value="{{ old('type') }}">
                    @error('type')<p class="tex text-danger">{{ $message }}</p>@enderror

                </div>
            </div>

            <div class="d-flex justify-content-around pt-3">
                <div class="container">
                    <h6>Area Size</h6>
                    <input type="number" name="area_size" placeholder="Area Zise (Sqm)" class="form-control"
                        value="{{ old('area_size') }}">
                    @error('area_size')<p class="tex text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="container">
                    <h6>Desgin Style</h6>
                    <input type="text" name="design_style" placeholder="Desgin Style" class="form-control"
                        value="{{ old('design_style') }}">
                    @error('design_style')<p class="tex text-danger">{{ $message }}</p>@enderror
                </div>
            </div>

            <div class="d-flex justify-content-around pt-3">
                <div class="container">
                    <h6>Address</h6>
                    <input type="text" name="address" placeholder="Address" class="form-control"
                        value="{{ old('address') }}">
                    @error('address')<p class="tex text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="container">
                    <h6>Status</h6>
                    <input type="text" name="status" placeholder="Status" class="form-control"
                        value="{{ old('status') }}">
                    @error('status')<p class="tex text-danger">{{ $message }}</p>@enderror
                </div>
            </div>

            <div class="d-flex justify-content-around pt-3">
                <div class="container">
                    <h6>Date</h6>
                    <input type="date" name="date" placeholder="Status" class="form-control" value="">
                    @error('date')<p class="tex text-danger">{{ $message }}</p>@enderror
                    <h6 class="pt-3">Description</h6>
                    <textarea name="description" id="" cols="81" rows="10" placeholder="Description"
                        class="form-control" value="{{ old('description') }}"></textarea>
                    @error('description')<p class="tex text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="container">
                    <h6>Image For Thumbnail</h6>
                    <input id="input-fa" type="file" name="image_thumbnail" class="form-control file" value="{{ old('image_thumbnail') }}"
                        data-browse-on-zone-click="true">
                    @error('image_thumbnail')<p class="tex text-danger">{{ $message }}</p>@enderror
                </div>
            </div>

            <div class="form-group">
                <h6>Image Detail</h6>
                <input id="input-fa" type="file" name="detailImage[]" class="form-control file" value="{{ old('detailImage') }}"
                    data-browse-on-zone-click="true" multiple>
                @error('detailImage')<p class="tex text-danger">{{ $message }}</p>@enderror
            </div>

            <div class="form-group pt-3">
                <a href="/admin/project" class="btn btn-danger btn">Back</a>
                <button type="submit" class="btn btn-primary btn">Save</button>
            </div>
        </form>
    </div>
</section>
<!-- /.content -->
@endsection
