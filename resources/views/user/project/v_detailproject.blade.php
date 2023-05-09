@extends('layout_user.v_index')
@section('title','Detail Project')
@section('content')

<section id="tumnail">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('foto_user') }}/thumbnail.jpg" class="d-block w-100 img-tumnail" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="detail" style="background: #F9F9F9">
    {{-- <div class="container"> --}}
        <div class="sidebar-box text-end">
            <h2>Kopi Miaaaaaaw</h2>
            <p>Content of the box goes here</p>
        </div>
    {{-- </div> --}}

</section>

@endsection
