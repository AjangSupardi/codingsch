<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Corporate | Unify - Multipurpose Responsive Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('unify') }}/vendor/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('unify') }}/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
    <link rel="stylesheet" href="{{ asset('unify') }}/vendor/swiper/swiper-bundle.min.css">

    <!-- CSS Unify Template -->
    <link rel="stylesheet" href="{{ asset('unify') }}/css/theme.min.css">
</head>

<body>

    @include('unify.layouts.header')

    @yield('content')

    @include('unify.layouts.footer')

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Go To -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
        data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
        <i class="bi-chevron-up"></i>
    </a>
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- JS Global Compulsory  -->
    <script src="{{ asset('unify') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('unify') }}/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="{{ asset('unify') }}/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
    <script src="{{ asset('unify') }}/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
    <script src="{{ asset('unify') }}/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- JS Unify -->
    <script src="{{ asset('unify') }}/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        (function() {
            // INITIALIZATION OF NAVBAR
            // =======================================================
            new HSHeader('#header').init()


            // INITIALIZATION OF MEGA MENU
            // =======================================================
            const megaMenu = new HSMegaMenu('.js-mega-menu', {
                desktop: {
                    position: 'left'
                }
            })


            // INITIALIZATION OF GO TO
            // =======================================================
            new HSGoTo('.js-go-to')


            // INITIALIZATION OF SWIPER
            // =======================================================
            var swiper = new Swiper('.js-swiper-clients', {
                slidesPerView: 2,
                breakpoints: {
                    380: {
                        slidesPerView: 3,
                        spaceBetween: 15,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 15,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 15,
                    },
                },
            });
        })()
    </script>
</body>

</html>
