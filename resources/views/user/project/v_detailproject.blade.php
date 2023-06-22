@extends('layout_user.v_index')
@section('title','Detail Project')
@section('content')

<section id="tumnail">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('storage/image_admin/project/'.$project->image_thumbnail) }}" class="d-block w-100 img-tumnail" alt="...">
                {{-- <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div> --}}
            </div>
        </div>
    </div>
</section>

<section id="detail" style="background: #F9F9F9">
    <div class="container-fluid">
        <div class="row row-cols-2">
            <div class="sidebar-box col text-end col-3">
                <div class="card-tit">
                    <h3 style="font-family: proximanova-semibold;">{{ $project->title }}</h3>
                </div>
                <div class="card-deskripsi" style="font-family: proximanova-semibold;">
                    <p>
                        {{ $project->description }}
                    </p>
                </div>
                <ul class="card-list">
                    <li>
                        <div class="d-flex">
                            <div
                                style="position: relative;font-size: 16px;font-weight: bolder;margin-left: 7px;font-family: proximanova-semibold;">
                                Project Detail</div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="card-title p-2">Type</div>
                            <div class="card-box p-2">
                                {{ $project->type }}
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="card-title p-2">
                                Area Size
                            </div>
                            <div class="card-box p-2">
                                {{ $project->area_size }}Sqm
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="card-title p-2">
                                Design Style
                            </div>
                            <div class="card-box p-2">
                                {{ $project->design_style }}
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="card-title p-2">
                                Address
                            </div>
                            <div class="card-box p-2">
                                {{ $project->address }}
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="card-title p-2">
                                Status
                            </div>
                            <div class="card-box p-2">
                                {{ $project->status }}
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="card-title p-2">
                                Date
                            </div>
                            <div class="card-box p-2">
                                {{ $project->date }}
                            </div>
                        </div>
                    </li>
                </ul>
                <hr style="width: 70%!important; margin-left: 85px">
            </div>
            <div class="gallery">
                @foreach ($detail_project as $item)
                <img src="{{ asset('storage/image_admin/project_detail/'.$item->image_detail) }}" alt="Gambar 1">
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
