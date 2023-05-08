@extends('layout_admin.v_index')
@section('title','Add Project')
@section('content')
{{-- @if (session('status'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Success!</h4>
    {{ session('status') }}.
</div>
@endif --}}
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" style="align-items: flex-end">
            <div class="col-sm-6">
                <h1 class="m-0">Add Project</h1>
                <ol class="breadcrumb float-sm">
                    <li class="breadcrumb-item active"><a href="/project">Project</a></li>
                    <li class="breadcrumb-item">Add Project</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <form action="/project/store" method="POST" enctype="multipart/form-data">
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
                    <input type="text" name="status" placeholder="Status" class="form-control" value="">
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
                        class="form-control"></textarea>
                    @error('description')<p class="tex text-danger">{{ $message }}</p>@enderror
                </div>
                <div class="container">
                    <h6>Image</h6>
                    <input id="input-fa" type="file" name="image" class="form-control file" value=""
                    data-browse-on-zone-click="true">
                    @error('image')<p class="tex text-danger">{{ $message }}</p>@enderror
                </div>
                {{-- <div class="container">
                    <h6>Image</h6>
                    <input type="text" name="image" placeholder="Image" class="form-control" value="">
                    @error('image')<p class="tex text-danger">{{ $message }}</p>@enderror
                </div> --}}
            </div>

            <div class="form-group pt-3">
                <a href="/project" class="btn btn-danger btn">Kembali</a>
                <button type="submit" class="btn btn-primary btn">Simpan</button>
            </div>
        </form>
    </div>
</section>
<!-- /.content -->
@endsection
