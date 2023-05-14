@extends('layout_user.v_index')
@section('title','Detail Project')
@section('content')

<section id="tumnail">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('foto_user') }}/thumbnail.jpg" class="d-block w-100 img-tumnail" alt="...">
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
                    <h3 style="font-family: proximanova-semibold;">Kopi Miaaaaaaw</h3>
                </div>
                <div class="card-deskripsi" style="font-family: proximanova-semibold;">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum hic veritatis ipsum earum nostrum
                        deleniti, a est necessitatibus autem. Cupiditate ipsam asperiores excepturi, rerum, alias error
                        labore quod impedit modi, voluptas est repellat vel dolore id quam dignissimos! Autem distinctio
                        voluptate repellat natus incidunt odio, voluptatum aperiam reiciendis placeat quaerat cupiditate
                        pariatur nobis delectus ut explicabo necessitatibus rem deleniti voluptatibus consequatur ipsa
                        accusamus. Aperiam libero ea dolore adipisci rerum. Debitis vitae quas laboriosam ut dolores
                        facilis aliquam alias libero ipsa itaque accusamus aut magnam modi ad, atque vero saepe eaque
                        nam sequi laudantium, non harum a. At voluptatem magnam, obcaecati beatae error veniam ea nihil
                        temporibus quae voluptas. Placeat dolores illo laborum vitae aperiam ipsum libero blanditiis
                        distinctio porro, obcaecati beatae ratione nulla sed. Tenetur in aperiam reiciendis aspernatur
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
                            <div class="card-box p-2">Restaurants, Canteens, Cafe Food Outlets, Licensed Bars
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="card-title p-2">
                                Area Size
                            </div>
                            <div class="card-box p-2">
                                154Sqm
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="card-title p-2">
                                Design Style
                            </div>
                            <div class="card-box p-2">
                                Industrial, Modern
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="card-title p-2">
                                Address
                            </div>
                            <div class="card-box p-2">
                                Jawa Barat - Jakarta Selatan
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="card-title p-2">
                                Status
                            </div>
                            <div class="card-box p-2">
                                Completed
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="card-title p-2">
                                Date
                            </div>
                            <div class="card-box p-2">
                                20 April 2023
                            </div>
                        </div>
                    </li>
                </ul>
                <hr style="width: 70%!important; margin-left: 85px">
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
