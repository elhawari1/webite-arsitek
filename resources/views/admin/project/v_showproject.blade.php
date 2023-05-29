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
                <h3 class="card-title">Detail <b>{{ $project->title }}</b></h3>

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
                            <td>{{ $project->id_project }}</td>
                        </tr>

                        <tr>
                            <th width="100px">Title</th>
                            <th width="100px">:</th>
                            <td>{{ $project->title }}</td>
                        </tr>

                        <tr>
                            <th width="100px">Type</th>
                            <th width="100px">:</th>
                            <td>{{ $project->type }}</td>
                        </tr>

                        <tr>
                            <th width="100px">Area Size</th>
                            <th width="100px">:</th>
                            <td>{{ $project->area_size }}</td>
                        </tr>

                        <tr>
                            <th width="125px">Design Style</th>
                            <th width="100px">:</th>
                            <td>{{ $project->design_style }}</td>
                        </tr>

                        <tr>
                            <th width="100px">Address</th>
                            <th width="100px">:</th>
                            <td>{{ $project->address }}</td>
                        </tr>

                        <tr>
                            <th width="100px">Status</th>
                            <th width="100px">:</th>
                            <td>{{ $project->status }}</td>
                        </tr>

                        <tr>
                            <th width="100px">Date</th>
                            <th width="100px">:</th>
                            <td>{{ $project->date }}</td>
                        </tr>

                        <tr>
                            <th width="100px">Description</th>
                            <th width="100px">:</th>
                            <td>{{ $project->description }}</td>
                        </tr>

                        <tr>
                            <th width="100px">Image Thumbnail</th>
                            <th width="100px">:</th>
                            @if($project->image)
                            <td><img src="{{ asset('storage/image_admin/project/'.$project->image) }}" width="400px"></td>
                            @else
                            <td><span class="badge badge-danger">No photos yet</span></td>
                            @endif
                        </tr>
                    </table>
                    <a href="/admin/project" class="btn btn-success tbn-sm">Kembali</a>

                </div><!-- /.container-fluid -->

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </div><!-- /.container-fluid -->
</section>


@endsection
