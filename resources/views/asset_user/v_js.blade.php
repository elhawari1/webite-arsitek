<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('template_user') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="{{ asset('template_user') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('template_user') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{ asset('template_user') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{ asset('template_user') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('template_user') }}/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{ asset('template_user') }}/assets/js/main.js"></script>

{{-- Bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

{{-- <script>
    $(document).ready(function () {
        $('#myCarousel').carousel({
            interval: 5000 // Set waktu perpindahan slide (dalam milidetik)
        });
    });

</script> --}}

{{-- 1.Carousel Jquery Cdn --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- 2. Carousel Min js --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- Init Owl Carousel  --}}
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        // nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })

</script>
 {{-- Lightbox or for popup image --}}
<script src="{{ asset('lightbox2') }}/dist/js/lightbox-plus-jquery.js"></script>