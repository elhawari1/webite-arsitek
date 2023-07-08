@extends('layout_user.v_index')
@section('title', 'Project')
@section('content')


<main id="head-product">
    <div class="container py-4">

        <div class="p-5 mb-4 rounded-3" id="header-p">
            <div class="container-fluid py-5">
                <h4 class="fw-bold">Realize Your Dream Building with the Right Design Together with Us!</h4>
                <p class="col-md-8">We present Building Design related to an architectural firm that brings future
                    visions to life. With our expertise and experience, we are committed to creating inspiring designs
                    that meet your needs. Through this Building Design, we bridge imagination with beauty, construct
                    unforgettable spaces, and fulfill your aspirations. Together, let's build a beautiful future with
                    quality architecture.</p>
            </div>
        </div>

    </div>
</main>

<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="/project" method="GET">
            <div class="input-group mb-3">
                <input type="search" class="form-control" placeholder="Search" name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-success" type="submit" style="margin-left: 5px">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($project->count())
<section id='proyek'>
    <div class="container">
        <div class="row pt-5">

            @foreach ($project as $data)
            <div class="col-3">
                <div class="card-project">

                    <a href="/project/detail/{{ $data->id_project }}">
                        <div class="card-head">
                            <img src="{{ asset('storage/image_admin/project/'.$data->image_thumbnail) }}" alt="">
                        </div>

                        <div class="card-sub d-flex">
                            @php
                            $filtered_detail_project = $detail_project->where('id_project', $data->id_project)->take(3);
                            @endphp
                            @foreach ($filtered_detail_project as $item)
                            <div class="card-item">
                                <img src="{{ asset('storage/image_admin/project_detail/'.$item->image_detail) }}"
                                    alt="">
                            </div>
                            @endforeach
                        </div>
                    </a>

                    <div class="card-text text-center">
                        <span>{{ $data->title }}</span>
                        <p>{{ $data->type }}</p>
                    </div>

                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<div class="d-flex justify-content-center mt-5">
    {{ $project->links() }}
</div>

@else
<p class="text-center fs-4">No Product Found.</p>
@endif

@endsection
