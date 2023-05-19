@extends('layout_admin.v_index')
@section('title','Project')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" style="align-items: flex-end">
            <div class="col-sm-6">
                <h1 class="m-0">Project</h1>
                <ol class="breadcrumb float-sm">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active">Project</li>
                </ol>
            </div><!-- /.col -->
            <div class="ml-auto">
                <a href="/admin/project/create" class="btn btn-outline-primary" style="float: right">Add Project</i></a>
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
                <h3 class="card-title"><b> Data Project </b></h3>
            </div>
            <!-- /.card-header -->
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
                                <a href="/admin/project/show/{{ $data->id_project }}" class="btn btn-outline-primary"><i
                                        class="icon fa fa-info" title="Detail"></i></a>
                                <a href="/admin/project/edit/{{ $data->id_project }}" class="btn btn-outline-warning"><i class="icon fa fa-edit" title="Edit"></i></a>
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete">
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
            <!-- /.card-body -->
        </div>
        <!-- /.card -->


    </div><!-- /.container-fluid -->
</section>

@endsection
