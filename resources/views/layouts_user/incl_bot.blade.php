<script src="{{asset('assets_user/js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src="{{asset('assets_user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('assets_user/vendor/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{asset('assets_user/vendor/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{asset('assets_user/vendor/masonry/isotope.pkgd.min.js')}}"></script><!-- ISOTOPE -->
<script src="{{asset('assets_user/vendor/imagesloaded/imagesloaded.js')}}"></script><!-- IMAGESLOADED -->
<script src="{{asset('assets_user/vendor/masonry/masonry-4.2.2.js')}}"></script><!-- MASONRY -->
<script src="{{asset('assets_user/vendor/lightgallery/js/lightgallery-all.min.js')}}"></script><!-- LIGHTGALLERY -->
<script src="{{asset('assets_user/vendor/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{asset('assets_user/vendor/swiper/swiper-bundle.min.js')}}"></script><!-- SWIPER -->
<script src="{{asset('assets_user/vendor/aos/aos.js')}}"></script><!-- AOS -->
<script src="{{asset('assets_user/js/dz.carousel.js')}}"></script><!-- OWL-CAROUSEL -->
<script src="{{asset('assets_user/js/dz.ajax.js')}}"></script><!-- AJAX -->
<script src="{{asset('assets_user/js/custom.js')}}"></script><!-- CUSTOM JS -->
<script src='https://www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
{{-- Swal --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- End Swal --}}

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
</script>

