@extends('layout_user.v_index')
@section('title', 'Project')
@section('content')

<section id='proyek'>
    <div class="container">
        <div class="row" style="padding-top: 10%">

            @foreach ($project as $data)
            <div class="col-3">
                <div class="card-project">

                    <div class="card-head">
                        <a href="">
                            <img src="{{ asset('storage/image_admin/project/'.$data->image_thumbnail) }}" alt="">
                        </a>
                    </div>

                    <div class="card-sub d-flex">
                        @php
                        $filtered_detail_project = $detail_project->where('id_project', $data->id_project)->take(3);
                        @endphp
                        @foreach ($filtered_detail_project as $item)
                        <div class="card-item">
                            <img src="{{ asset('storage/image_admin/project_detail/'.$item->image_detail) }}" alt="">
                        </div>
                        @endforeach
                    </div>

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

@endsection
