@extends('layout_admin.v_index')
@section('title', 'Project')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2" style="align-items: flex-end">
                <div class="col">
                    <h1 class="m-0">Project</h1>
                    <ol class="breadcrumb float-sm">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Project</li>
                    </ol>
                </div>
                <div class="col ml-auto">
                    <a href="/admin/project/create" class="btn btn-outline-success" style="float: right"><i
                            class="fa-solid fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b> Data Project </b></h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Address</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->type }}</td>
                                    <td>{{ $data->address }}</td>
                                    <td>{{ $data->date }}</td>
                                    <td>
                                        <a href="/admin/project/show/{{ $data->id_project }}"
                                            class="btn btn-outline-primary"><i class="icon fa fa-info"
                                                title="Detail"></i></a>
                                        <a href="/admin/project/edit/{{ $data->id_project }}"
                                            class="btn btn-outline-warning"><i class="icon fa fa-edit"
                                                title="Edit"></i></a>
                                        <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                            data-target="#delete{{ $data->id_project }}">
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
                                <th>Type</th>
                                <th>Address</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>

    @foreach ($project as $data)
        <div class="modal modal-danger fade" id="delete{{ $data->id_project }}">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">{{ $data->title }}</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float: left;">
                            X</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this project ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                        <a href="/admin/project/destroy/{{ $data->id_project }}" class="btn btn-outline">Yes</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
