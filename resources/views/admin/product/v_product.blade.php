@extends('layout_admin.v_index')
@section('title','Product')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" style="align-items: flex-end">
            <div class="col">
                <h1 class="m-0">Product</h1>
                <ol class="breadcrumb float-sm">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Product</li>
                </ol>
            </div><!-- /.col -->
            <div class="col ml-auto">
                <a href="/admin/product/create" class="btn btn-outline-primary" style="float: right">Add Product</i></a>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b> Data Product </b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->type }}</td>
                            <td>
                                <img src="{{ asset('storage/image_admin/product/'.$data->image) }}"
                                    class="img-thumbnail" style="width: 200px">
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                                    data-bs-target="#show{{ $data->id_product }}">
                                    <i class="fa-solid fa-info"></i>
                                </button>
                                <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                                    data-bs-target="#update{{ $data->id_product }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $data->id_product }}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->

    @foreach ($product as $data)
    <!-- Modal Detail -->
    <div class="modal fade" id="show{{ $data->id_product }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="margin-left: 185px">{{ $data->title }}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="container text-left">
                            <div class="row">
                                <div class="col-3">
                                    Title
                                </div>
                                <div class="col-9">
                                    <b> {{ $data->title }}</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    Type
                                </div>
                                <div class="col-9">
                                    <b> {{ $data->type }}</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    Width
                                </div>
                                <div class="col-9">
                                    <b> {{ $data->width }}</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    Height
                                </div>
                                <div class="col-9">
                                    <b> {{ $data->height }}</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    Colour
                                </div>
                                <div class="col-9">
                                    <b> {{ $data->colour }}</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    Image
                                </div>
                                <div class="col-9">
                                    <img src="{{ asset('storage/image_admin/product/'.$data->image) }}"
                                        class="img-thumbnail" style="width: 200px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach


    <!-- Modal Update -->
    @foreach ($product as $data)
    <div class="modal fade" id="update{{ $data->id_product }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="margin-left: 220px">
                        {{ $data->id_product }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/product/update/{{ $data->id_product }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="recipient-name"
                                value="{{ $data->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Type</label>
                            <input type="text" name="type" class="form-control" id="recipient-name"
                                value="{{ $data->type }}">
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="recipient-name" class="col-form-label">Width</label>
                                <input type="text" name="width" class="form-control" id="recipient-name"
                                    value="{{ $data->width }}">
                            </div>
                            <div class="col">
                                <label for="recipient-name" class="col-form-label">Height</label>
                                <input type="text" name="height" class="form-control" id="recipient-name"
                                    value="{{ $data->height }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Colour</label>
                            <input type="text" name="colour" class="form-control" id="recipient-name"
                                value="{{ $data->colour }}">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Image</label>
                            <input id="input-fa" type="file" name="image" class="form-control file"
                                data-browse-on-zone-click="true">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Modal Delete -->
    @foreach ($product as $data)
    <div class="modal fade" id="delete{{ $data->id_product }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $data->title }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete <b>{{ $data->title }}</b>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <a href="/admin/product/destroy/{{ $data->id_product }}" class="btn btn-danger">Yes</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</section>

@endsection
