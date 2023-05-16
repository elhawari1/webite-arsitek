@extends('layout_user.v_index')
@section('content')

<section id='product'>
    <div class="container">
        <div class="row" style="padding-top: 10%">

            <div class="col-3">
                <div class="card-project">
                    <div class="card-head">
                        <a href="">
                            <img src="{{ asset('foto_user') }}/product/kanal-c.jpg" alt="">
                        </a>
                    </div>
                    <div class="card-text text-center">
                        <span>Kanal-C</span>
                        <p>Alumunium</p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card-project">
                    <div class="card-head">
                        <a href="">
                            <img src="{{ asset('foto_user') }}/product/taman.jpg" alt="">
                        </a>
                    </div>
                    <div class="card-text text-center">
                        <span>Taman</span>
                        <p>Teak and Mahogany</p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card-project">
                    <div class="card-head">
                        <a href="">
                            <img src="{{ asset('foto_user') }}/product/kursi.jpg" alt="">
                        </a>
                    </div>
                    <div class="card-text text-center">
                        <span>Kursi</span>
                        <p>Kursi Putih</p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card-project">
                    <div class="card-head">
                        <a href="">
                            <img src="{{ asset('foto_user') }}/product/cat.jpg" alt="">
                        </a>
                    </div>
                    <div class="card-text text-center">
                        <span>Kaleng Cat</span>
                        <p>Cat</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

@endsection
