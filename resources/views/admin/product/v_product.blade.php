@extends('layout_admin.v_index')
@section('title', 'Product')
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
                </div>
                <div class="col ml-auto">
                    <a href="/admin/product/create" class="btn btn-outline-success" style="float: right"><i
                            class="fa-solid fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b> Data Product </b></h3>
                </div>
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
                                        <a href="{{ asset('storage/image_admin/product/' . $data->image) }}"
                                            data-lightbox="whatever" data-title="{{ $data->title }}">
                                            <img src="{{ asset('storage/image_admin/product/' . $data->image) }}"
                                                class="img-thumbnail" style="width: 200px">
                                        </a>
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
                                        <a href="#" class="btn btn-outline-danger delete"
                                            data-id={{ $data->id_product }} data-title={{ $data->title }}>
                                            <i class="fa-solid fa-trash"></i>

                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal Detail -->
        @foreach ($product as $data)
            <div class="modal fade" id="show{{ $data->id_product }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="margin-left: 185px">
                                {{ $data->title }}
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container text-center">
                                <div class="container text-left">
                                    <div class="row">
                                        <div class="col-3">
                                            <b> Title</b>
                                        </div>
                                        <div class="col-9">
                                            <span> {{ $data->title }}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <b> Type</b>
                                        </div>
                                        <div class="col-9">
                                            <span> {{ $data->type }}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <b>Weight</b>
                                        </div>
                                        <div class="col-9">
                                            <span> {{ $data->weight }} Gram</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <b> Dimension</b>
                                        </div>
                                        <div class="col-9">
                                            <span>{{ $data->length }} x {{ $data->width }} x {{ $data->height }}
                                                cm</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <b>Colour</b>
                                        </div>
                                        <div class="col-9">
                                            <span> {{ $data->colour }}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <b>Image</b>
                                        </div>
                                        <div class="col-9">
                                            <a href="{{ asset('storage/image_admin/product/' . $data->image) }}"
                                                data-lightbox="models" data-title="{{ $data->title }}">
                                                <img src="{{ asset('storage/image_admin/product/' . $data->image) }}"
                                                    class="img-thumbnail" style="width: 200px">
                                            </a>
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="margin-left: 20 0px">
                                {{ $data->title }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/admin/product/update/{{ $data->id_product }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <label for="recipient-name" class="col-form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="recipient-name"
                                            value="{{ $data->title }}">
                                    </div>
                                    <div class="col">
                                        <label for="recipient-name" class="col-form-label">Type</label>
                                        <input type="text" name="type" class="form-control" id="recipient-name"
                                            value="{{ $data->type }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="recipient-name" class="col-form-label">Colour</label>
                                        <input type="text" name="colour" class="form-control" id="recipient-name"
                                            value="{{ $data->colour }}">
                                    </div>
                                    <div class="col">
                                        <label for="recipient-name" class="col-form-label">Weight</label>
                                        <input type="number" name="weight" class="form-control" id="recipient-name"
                                            value="{{ $data->weight }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label for="recipient-name" class="col-form-label">Length</label>
                                        <input type="number" name="length" class="form-control" id="recipient-name"
                                            value="{{ $data->length }}">
                                    </div>
                                    <div class="col">
                                        <label for="recipient-name" class="col-form-label">Width</label>
                                        <input type="number" name="width" class="form-control" id="recipient-name"
                                            value="{{ $data->width }}">
                                    </div>
                                    <div class="col">
                                        <label for="recipient-name" class="col-form-label">Height</label>
                                        <input type="number" name="height" class="form-control" id="recipient-name"
                                            value="{{ $data->height }}">
                                    </div>
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
            <div class="modal fade" id="delete{{ $data->id_product }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $data->title }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
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

@section('js')
    <script>
        $('.delete').click(function() {
            var id_product = $(this).attr('data-id');
            var title = $(this).attr('data-title');
            Swal.fire({
                title: 'Are you sure?',
                html: "You won't be able to revert this! <strong>" + title + "</strong>",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "/admin/product/destroy/" + id_product + ""
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        });
    </script>
@endsection
