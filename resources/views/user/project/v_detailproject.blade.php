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
    <div class="container-fluid">
        <div class="row row-cols-2">
            <div class="sidebar-box col text-end col-3">
                <h2>Kopi Miaaaaaaw</h2>
                <span>Content of the box goes here</span>
            </div>
            <div class="gallery">
                <img src="{{ asset('foto_user') }}/Project1.png" alt="Gambar 1">
                <img src="{{ asset('foto_user') }}/project2.png" alt="Gambar 2">
                <img src="{{ asset('foto_user') }}/project4.jpg" alt="Gambar 3">
                <img src="{{ asset('foto_user') }}/project4.jpg" alt="Gambar 3">
                <img src="{{ asset('foto_user') }}/project4.jpg" alt="Gambar 3">
                <img src="{{ asset('foto_user') }}/project4.jpg" alt="Gambar 3">
                <img src="{{ asset('foto_user') }}/project4.jpg" alt="Gambar 3">
                <img src="{{ asset('foto_user') }}/project4.jpg" alt="Gambar 3">
                <img src="{{ asset('foto_user') }}/project4.jpg" alt="Gambar 3">
                <img src="{{ asset('foto_user') }}/project4.jpg" alt="Gambar 3">
            </div>
        </div>
    </div>

</section>

@endsection
