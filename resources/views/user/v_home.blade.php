@extends('layout_user.v_index')
@section('content')
    {{-- Hero --}}
    <section id="hero">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($banner as $data)
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/image_admin/banner/' . $data->image) }}" class="d-block w-100 img-hero"
                            alt="...">
                        <div class="carousel-caption">
                            <h5>{{ $data->title }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    {{-- End Hero --}}


    {{-- Layanan --}}
    <section id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3> Our Service</h3>
                    <p class="sub-title">Website Arsitek is here to be a solution for you</p>
                </div>

                <div class="row mt-5">
                    <div class="col-md-4 text-center">
                        <div class="card-layanan">
                            <div class="circle-icon position-relative mx-auto">
                                <img src="{{ asset('template_user') }}/assets/img/icon/icon-property.png" alt=""
                                    class="position-absolute top-50 start-50 translate-middle">
                            </div>
                            <h3 class="mt-4">Building Design</h3>
                            <p class="mt-3">Make Your Building Dreams Come True With The Right Design Choices With Us!</p>
                        </div>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="card-layanan">
                            <div class="circle-icon position-relative mx-auto">
                                <img src="{{ asset('template_user') }}/assets/img/icon/Icon Sewa.png" alt=""
                                    class="position-absolute top-50 start-50 translate-middle">
                            </div>
                            <h3 class="mt-4">Product</h3>
                            <p class="mt-3">Find Quality Products at Affordable Prices, Right Choice Only here!</p>
                        </div>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="card-layanan">
                            <div class="circle-icon position-relative mx-auto">
                                <img src="{{ asset('template_user') }}/assets/img/icon/architect.png" alt=""
                                    class="position-absolute top-50 start-50 translate-middle"
                                    style="width: 64px; height: 64px;">
                            </div>
                            <h3 class="mt-4">Consultation</h3>
                            <p class="mt-3">Realize Your Building Dreams with the Best Architect Consultation, With Us!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Proyek --}}
    <section id='proyek'>
        <div class="container">
            <div class="title">
                <h3 class="text-center">Project / Portofolio</h3>
                <a href="/project" style="text-decoration: none;">
                    <p class="text-center">Show all Product</p>
                </a>
            </div>
            <div class="row pt-2">

                <div class="owl-carousel owl-theme col-3">
                    @foreach ($project as $data)
                        <div class="item">
                            <div class="card-project">
                                <a href="/project/detail/{{ $data->id_project }}">
                                    <div class="card-head">
                                        <img src="{{ asset('storage/image_admin/project/' . $data->image_thumbnail) }}"
                                            alt="">
                                    </div>
                                    <div class="card-sub d-flex">
                                        @php
                                            $filtered_detail_project = $detail_project->where('id_project', $data->id_project)->take(3);
                                        @endphp
                                        @foreach ($filtered_detail_project as $item)
                                            <div class="card-item">
                                                <img src="{{ asset('storage/image_admin/project_detail/' . $item->image_detail) }}"
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
        </div>
    </section>
    {{-- End Proyek --}}


    {{-- Product --}}
    <section id='product'>
        <div class="container">
            <div class="title">
                <h3 class="text-center pt-2">Product Website Arsitek</h3>
                <a href="/product" style="text-decoration: none;">
                    <p class="text-center">Show all Product</p>
                </a>
            </div>
            <div class="row pt-2">
                <div class="owl-carousel owl-theme col-3">
                    @foreach ($product as $data)
                        <div class="item">
                            <div class="card-project">
                                <div class="card-head">
                                    <a href="/product/detail/{{ $data->id_product }}">
                                        <img src="{{ asset('storage/image_admin/product/' . $data->image) }}" alt="">
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
        </div>
    </section>
    {{-- End Product --}}

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3>Contact</h3>
                <p>If you want to do a consultation, you can contact here!</p>
            </div>

            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Jl. Pahlawan Sunaryo No.4, Pateban, Kb. Waris, Kec. Pandaan, Pasuruan, Jawa Timur 67156,
                                Indonesia, Kota Pasuruan.</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>websitearsitek@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>(0343) 631627</p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7908.629818542986!2d112.704005!3d-7.649246999999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d9989ef95ce3%3A0x2c1faf611987b2ce!2sCV.%20Global%20Persada!5e0!3m2!1sid!2sus!4v1685335504117!5m2!1sid!2sus"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        {{-- <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> --}}
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
