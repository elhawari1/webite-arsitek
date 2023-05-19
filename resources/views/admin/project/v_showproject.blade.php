@extends('layout_admin.v_index')
@section('title', 'Detail Project')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" style="align-items: flex-end">
            <div class="col-sm-6">
                <h1 class="m-0">Detail Project</h1>
                <ol class="breadcrumb float-sm">
                    <li class="breadcrumb-item"><a href="/admin/project">Project</a></li>
                    <li class="breadcrumb-item active">Detail Project</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects Detail</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="container-fluid">

                    <table class="table" style="border: none">
                        <tr>
                            <th width="100px">No</th>
                            <th width="100px">:</th>
                            <th>{{ $project->id_project }}</th>
                        </tr>

                        <tr>
                            <th width="100px">Title</th>
                            <th width="100px">:</th>
                            <th>{{ $project->title }}</th>
                        </tr>

                        <tr>
                            <th width="100px">Type</th>
                            <th width="100px">:</th>
                            <th>{{ $project->type }}</th>
                        </tr>

                        <tr>
                            <th width="100px">Area Size</th>
                            <th width="100px">:</th>
                            <th>{{ $project->area_size }}</th>
                        </tr>

                        <tr>
                            <th width="125px">Design Style</th>
                            <th width="100px">:</th>
                            <th>{{ $project->design_style }}</th>
                        </tr>

                        <tr>
                            <th width="100px">Address</th>
                            <th width="100px">:</th>
                            <th>{{ $project->address }}</th>
                        </tr>

                        <tr>
                            <th width="100px">Status</th>
                            <th width="100px">:</th>
                            <th>{{ $project->status }}</th>
                        </tr>

                        <tr>
                            <th width="100px">Date</th>
                            <th width="100px">:</th>
                            <th>{{ $project->date }}</th>
                        </tr>

                        <tr>
                            <th width="100px">Description</th>
                            <th width="100px">:</th>
                            <th>{{ $project->description }}</th>
                        </tr>

                        {{-- <tr>
                                <th width="100px">Gambar</th>
                                <th width="100px">:</th>
                                <th><img src="{{ url('foto/project/'.$project->gambar) }}" width="400px"></th>
                        </tr> --}}
                        <tr>
                            <th><a href="/admin/project" class="btn btn-success tbn-sm">Kembali</a></th>
                        </tr>
                    </table>

                </div><!-- /.container-fluid -->

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </div><!-- /.container-fluid -->
</section>


@endsection
