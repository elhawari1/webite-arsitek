@extends('layout_user.v_index')
@section('title', 'Project')
@section('content')

<section id='proyek'>
    <div class="container">
        <div class="row" style="padding-top: 10%">
            <div class="col-3">
                <div class="card-project">

                    <div class="card-head">
                        <a href="">
                            <img src="{{ asset('foto_user') }}/Project1.png" alt="">
                        </a>
                    </div>

                    <div class="card-sub d-flex">
                        <div class="card-item">
                            <img src="{{ asset('foto_user') }}/Project2.png" alt="">
                        </div>
                        <div class="card-item">
                            <img src="{{ asset('foto_user') }}/Project3.jpg" alt="">
                        </div>
                        <div class="card-item">
                            <img src="{{ asset('foto_user') }}/Project4.jpg" alt="">
                        </div>
                    </div>

                    <div class="card-text text-center">
                        <span>Rumah Kaca</span>
                        <p>Modern, Classic</p>
                    </div>

                </div>
            </div>

            <div class="col-3">
                <div class="card-project">

                    <div class="card-head">
                        <img src="{{ asset('foto_user') }}/Project3.jpg" alt="">
                    </div>

                    <div class="card-sub d-flex">
                        <div class="card-item">
                            <img src="{{ asset('foto_user') }}/Project4.jpg" alt="">
                        </div>
                        <div class="card-item">
                            <img src="{{ asset('foto_user') }}/Project1.png" alt="">
                        </div>
                        <div class="card-item">
                            <img src="{{ asset('foto_user') }}/Project2.png" alt="">
                        </div>
                    </div>

                    <div class="card-text text-center">
                        <span>Modern, Classis</span>
                        <p>Rumah Kaca</p>
                    </div>

                </div>
            </div>

            <div class="col-3">
                <div class="card-project">

                    <div class="card-head">
                        <img src="{{ asset('foto_user') }}/Project2.png" alt="">
                    </div>

                    <div class="card-sub d-flex">
                        <div class="card-item">
                            <img src="{{ asset('foto_user') }}/Project1.png" alt="">
                        </div>
                        <div class="card-item">
                            <img src="{{ asset('foto_user') }}/Project3.jpg" alt="">
                        </div>
                        <div class="card-item">
                            <img src="{{ asset('foto_user') }}/Project4.jpg" alt="">
                        </div>
                    </div>

                    <div class="card-text text-center">
                        <span>Modern, Classis</span>
                        <p>Rumah Kaca</p>
                    </div>

                </div>
            </div>

            <div class="col-3">
                <div class="card-project">

                    <div class="card-head">
                        <img src="{{ asset('foto_user') }}/Project4.jpg" alt="">
                    </div>

                    <div class="card-sub d-flex">
                        <div class="card-item">
                            <img src="{{ asset('foto_user') }}/Project3.jpg" alt="">
                        </div>
                        <div class="card-item">
                            <img src="{{ asset('foto_user') }}/Project2.png" alt="">
                        </div>
                        <div class="card-item">
                            <img src="{{ asset('foto_user') }}/Project1.png" alt="">
                        </div>
                    </div>

                    <div class="card-text text-center">
                        <span>Modern, Classis</span>
                        <p>Rumah Kaca</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
