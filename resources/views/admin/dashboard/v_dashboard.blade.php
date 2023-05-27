@extends('layout_admin.v_index')
@section('title','Dashboard')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" style="align-items: flex-end">
            <div class="col">
                <h1 class="m-0">Dashboard</h1>
                <ol class="breadcrumb float-sm">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
            <div class="col ml-auto">
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#insert"
                    style="float: right">Add Banner</button>
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
                <h3 class="card-title"><b>Data Banner</b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" style="text-align: center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th style="width: 50%">Image</th>
                            <th style="width: 12%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banner as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->title }}</td>
                            <td><img src="{{ asset('storage/image_admin/banner/'.$data->image) }}" width="20%;"
                                    height="10%"></td>
                            <td>
                                <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                                    data-bs-target="#update{{ $data->id_banner }}"><i class="icon fa fa-edit" title="Edit"></i></button>
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $data->id_banner }}">
                                    <i class="icon fa fa-trash" title="Hapus"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->
</section>

<!-- Modal For Insert Banner -->
<div class="modal fade" id="insert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel" style="padding-left: 40%">Add Banner</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin/banner/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Title:</label>
                        <input type="text" name="title" class="form-control" id="recipient-name" placeholder="Title">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Image:</label>
                        <input id="input-fa" type="file" name="image" class="form-control file" value=""
                            data-browse-on-zone-click="true">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="sumbit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Inser -->

<!-- Modal For Update Banner -->
@foreach ($banner as $data)
<div class="modal fade" id="update{{ $data->id_banner }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel" style="padding-left: 40%">Update Banner</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin/banner/update/{{ $data->id_banner }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" name="title" id="recipient-name" placeholder="Title"
                            value="{{ $data->title }}">
                    </div>
                    {{-- <div class=" mb-3">
                        <label for="message-text" class="col-form-label">Image:</label>
                        <input id="input-fa" type="file" name="image" class="form-control file" value="{{ $data->image }}"
                            data-browse-on-zone-click="true">
                    </div> --}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- End Update -->

<!-- Modal For Delete Banner -->
@foreach ($banner as $data)
<div class="modal fade" id="delete{{ $data->id_banner }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $data->title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete the data ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="/admin/banner/destroy/{{ $data->id_banner }}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- End Delete -->





@endsection
