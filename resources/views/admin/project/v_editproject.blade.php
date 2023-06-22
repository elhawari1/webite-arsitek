@extends('layout_admin.v_index')
@section('title', 'Edit Project')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2" style="align-items: flex-end">
            <div class="col-sm-6">
                <h1 class="m-0">Update Project</h1>
                <ol class="breadcrumb float-sm">
                    <li class="breadcrumb-item"><a href="/admin/project">Project</a></li>
                    <li class="breadcrumb-item active">Update Project</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">

        <div class="card card-warning card-outline">
            <div class="card-header">
                <h3 class="card-title">Update <b>{{ $project->title }}</b></h3>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <form action="/admin/project/update/{{ $project->id_project }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="content">

                            <div class="row">
                                <div class="col">
                                    <label for="recipient-name" class="col-form-label">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ $project->title }}">
                                    <div class="text-danger">
                                        @error('title')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    <label for="recipient-name" class="col-form-label pt-2">Type</label>
                                    <input type="text" name="type" class="form-control" value="{{ $project->type }}">
                                    <div class="text-danger">
                                        @error('type')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    <label for="recipient-name" class="col-form-label pt-2">Area Size</label>
                                    <input type="number" name="area_size" class="form-control"
                                        value="{{ $project->area_size }}">
                                    <div class="text-danger">
                                        @error('area_size')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    <label for="recipient-name" class="col-form-label pt-2">Design Style</label>
                                    <input type="text" name="design_style" class="form-control"
                                        value="{{ $project->design_style }}">
                                    <div class="text-danger">
                                        @error('design_style')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    <label for="recipient-name" class="col-form-label pt-2">Address</label>
                                    <input type="text" name="address" class="form-control"
                                        value="{{ $project->address }}">
                                    <div class="text-danger">
                                        @error('address')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="recipient-name" class="col-form-label">Description</label>
                                    <textarea name="description" id="" cols="81" rows="14" placeholder="Description"
                                        class="form-control">{{ $project->description    }}</textarea>
                                    <div class="text-danger">
                                        @error('description')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="recipient-name" class="col-form-label pt-2">Date</label>
                                    <input type="date" name="date" class="form-control" value="{{ $project->date }}">
                                    <div class="text-danger">
                                        @error('date')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="recipient-name" class="col-form-label">Status</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="status" class="form-control"
                                            value="{{ $project->status }}">
                                        <div class="text-danger">
                                            @error('status')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label for="recipient-name" class="col-form-label text-center pb-2">Image
                                    Thumbnail</label>
                                <div class="col">
                                    <img src="{{ asset('storage/image_admin/project/'.$project->image_thumbnail) }}"
                                        width="100%" height="350px">
                                </div>
                                <div class="col">
                                    <input id="input-fa" type="file" name="image_thumbnail" class="form-control file"
                                        value="{{ old('image_thumbnail') }}" data-browse-on-zone-click="true">
                                    <div class="text-danger">
                                        @error('image_thumbnail')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>



                            <div class="row pt-5">
                                <h4 for="recipient-name" class="text-center pb-2"> <b> Image Detail</b></h4>
                                @foreach ($detail_project as $item)
                                <img src="{{ asset('storage/image_admin/project_detail/'.$item->image_detail) }}"
                                    style="height: 250px; width: 350px">
                                @endforeach
                            </div>
                            <div class="form-group">
                                {{-- <h4>Image Detail</h4> --}}
                                <input id="input-fa" type="file" name="detailImage[]" class="form-control file"
                                    value="{{ old('detailImage') }}" data-browse-on-zone-click="true" multiple>
                                <div class="text-danger">
                                    @error('detailImage')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <a href="/admin/project" class="btn btn-danger btn-sm">Kembali</a>
                            <button class="btn btn-primary btn-sm"> Simpan</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->

        </div>
        <!-- /.card-body -->
    </div>

    </div><!-- /.container-fluid -->
</section>
@endsection
