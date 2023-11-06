@extends('layout_user.v_index')
@section('title', 'Prodcut')

@section('content')

<main id="head-product">
    <div class="container py-4">

        <div class="p-5 mb-4 rounded-3" id="header-p">
            <div class="container-fluid py-5">
                <h4 class="fw-bold">Quality Products, Affordable Prices, the Right Choice!</h4>
                <p class="col-md-8">Discover high-quality products at affordable prices right here! We offer the
                    best options for your needs. Get products with high-quality standards without breaking your budget.
                    Visit our website now and enjoy an unforgettable shopping experience!</p>
            </div>
        </div>

    </div>
</main>

<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="/product" method="GET">
            <div class="input-group mb-3">
                <input type="search" class="form-control" placeholder="Search" name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-success" type="submit" style="margin-left: 5px">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($product->count())
<section id='product'>
    <div class="container">
        <div class="row" style="padding-top: 10%">
            @foreach ($product as $data)
            <div class="col-3">
                <div class="card-project">
                    <div class="card-head">
                        <a href="/product/detail/{{ $data->id_product }}">
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

<div class="d-flex justify-content-center mt-5">
    {{ $product->links() }}
</div>

@else
<p class="text-center fs-4">No Product Found.</p>
@endif

@endsection
