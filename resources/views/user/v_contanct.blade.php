@extends('layout_user.v_index')
@section('title', 'Contact')
@section('content')
    <main id="head-product">
        <div class="container py-4">

            <div class="p-5 mb-4 rounded-3" id="header-p">
                <div class="container-fluid py-5">
                    <h4 class="fw-bold">Realize Your Building Dreams with the Best Architect Consultation, With Us!</h4>
                    <p class="col-md-8">"We are loyal partners in making your building dreams come true. With the best
                        architectural consultation, we will direct you towards architectural beauty that suits your vision.
                        Welcome a bright future with us!</p>
                </div>
            </div>

        </div>
    </main>

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
