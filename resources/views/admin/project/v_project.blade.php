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
                <a href="/project/add" class="btn btn-outline-primary" style="float: right">Add Project</i></a>
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
                        <?php $no = 1; ?>
                        <tr>
                            <th>{{ $no++ }}</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
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
