@extends('layout_user.v_index')
@section('content')

<section id='product'>
    <div class="container">
        <div class="row" style="padding-top: 10%">
            @foreach ($product as $data)
            <div class="col-3">
                <div class="card-project">
                    <div class="card-head">
                        <a href="">
                            <img src="{{ asset('storage/image_admin/product/'.$data->image) }}" alt="">
                        </a>
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
